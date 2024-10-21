<?php
$ip_sv = "157.66.219.16";

// Database connection details
$dbs = [
    'hso' => [
        'dbname' => 'hso',
        'user' => 'root',
        'pass' => ''
    ]
];

date_default_timezone_set('Asia/Ho_Chi_Minh');

// Establish connection to hso
$conn = new mysqli($ip_sv, $dbs['hso']['user'], $dbs['hso']['pass'], $dbs['hso']['dbname']);
if ($conn->connect_error) {
    die("Connection to hso failed: " . $conn->connect_error);
}

function curl_get($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'cURL error: ' . curl_error($ch);
    }
    curl_close($ch);
    return $response;
}

function parse_order_id($description, $MEMO_PREFIX)
{
    $re = '/' . $MEMO_PREFIX . '\d+/im';
    preg_match_all($re, $description, $matches, PREG_SET_ORDER, 0);
    if (count($matches) == 0) {
        return null;
    }
    $orderCode = $matches[0][0];
    $prefixLength = strlen($MEMO_PREFIX);
    $orderId = intval(substr($orderCode, $prefixLength));
    return $orderId;
}

$MEMO_PREFIX_hso = "hso";

$result = curl_get("https://dichvuapi.com/historyACB/Duong1999@/18106201/xtdnkMCPiyFf-Idbxdk-aoih-TjBc-JLLj");
$result = json_decode($result, true);

if ($result === null) {
    die("Failed to decode JSON response: " . json_last_error_msg());
}

foreach ($result['transactions'] as $data) {
    $transactionID = $data['transactionID'];
    $description = $data['description'];
    $amount = (int) str_replace(',', '', $data['amount']);
    $user_id_hso = parse_order_id($description, $MEMO_PREFIX_hso);

    // Process transactions for 'hso' database
    if ($user_id_hso) {
        $getUser = $conn->query("SELECT * FROM `account` WHERE `id` = '$user_id_hso'")->fetch_assoc();
        if ($getUser) {
            $result = $conn->query("SELECT * FROM bank_auto WHERE transactionID = '$transactionID'");
            if ($result->num_rows == 0) {
                $amount2 = calculateAmount($amount);
                updateBalances($conn, $user_id_hso, $transactionID, $description, $amount, $amount2, 'coin', 'tongnap', 'naptuan', 'account');
            } else {
                echo "id $transactionID trên hso đã cộng rồi nhé." . PHP_EOL;
            }
        } else {
            echo "Không tìm thấy user với id: $user_id_hso trên hso." . PHP_EOL;
        }
    }
}

// Function to calculate additional amount based on transaction amount
function calculateAmount($amount)
{
    if ($amount >= 0 && $amount < 100000) {
        return $amount;
    } elseif ($amount >= 100000 && $amount < 200000) {
        return $amount + ($amount * 0.1);
    } elseif ($amount >= 200000 && $amount < 500000) {
        return $amount + ($amount * 0.2);
    } elseif ($amount >= 500000 && $amount < 1000000) {
        return $amount + ($amount * 0.3);
    } elseif ($amount >= 1000000 && $amount < 2000000) {
        return $amount + ($amount * 0.4);
    } elseif ($amount >= 2000000) {
        return $amount + ($amount * 0.5);
    }
}

// Function to update balances and insert transaction record
function updateBalances($connection, $user_id, $transactionID, $description, $amount, $amount2, $fieldCoin, $fieldTongnap, $fieldNaptuan, $table)
{
    $insertSv2 = $connection->query("INSERT INTO bank_auto (transactionID, user_id, description, amount, create_time) 
                                     VALUES ('$transactionID', '$user_id', '$description', '$amount', NOW())");
    if ($insertSv2) {
        // Retrieve current balances
        $balanceQuery = $connection->query("SELECT $fieldCoin, $fieldTongnap, $fieldNaptuan FROM $table WHERE id = '$user_id'");
        if ($balanceQuery === false) {
            echo "Error fetching balances: " . $connection->error . PHP_EOL;
            return;
        }
        $balances = $balanceQuery->fetch_assoc();

        // Calculate new balances
        $newCoinBalance = $balances[$fieldCoin] + $amount2;
        $newTongnapBalance = $balances[$fieldTongnap] + $amount;
        $newBalance = $balances[$fieldNaptuan] + $amount;

        // Update account table with new balances
        $updateQuery1 = $connection->query("UPDATE $table SET $fieldCoin = '$newCoinBalance' WHERE id = '$user_id'");
        $updateQuery2 = $connection->query("UPDATE $table SET $fieldTongnap = '$newTongnapBalance' WHERE id = '$user_id'");
        $updateQuery3 = $connection->query("UPDATE $table SET $fieldNaptuan = '$newBalance' WHERE id = '$user_id'");
        if ($updateQuery1 && $updateQuery2 && $updateQuery3) {
            echo '[<b style="color:green">-</b>] Xử lý thành công 1 hoá đơn trên ' . $connection->host_info . '.' . PHP_EOL;
        } else {
            echo 'Error updating balances: ' . $connection->error . PHP_EOL;
        }
    } else {
        echo 'Error inserting bank_auto record: ' . $connection->error . PHP_EOL;
    }
}

// Close connection
$conn->close();
?>
