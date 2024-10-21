<?php
 $servername = "157.66.219.16";
                            $username = "root"; // Thay đổi nếu cần thiết
                            $password = ""; // Thay đổi nếu cần thiết
                            $dbname = "hso";

                            // Tạo kết nối
                            $config = new mysqli($servername, $username, $password, $dbname);

                            // Kiểm tra kết nối
                            if ($config->connect_error) {
                                die("Connection failed: " . $config->connect_error);
                            }
// Khởi động phiên
session_start();
session_regenerate_id(true);
date_default_timezone_set('Asia/Ho_Chi_Minh');

// Lấy thông tin người dùng từ phiên
$_user = $_SESSION['user'] ?? null;
$_login = $_user ? "on" : null;

// Nếu người dùng đã đăng nhập
if ($_user) {
    $_user = filter_var($_user, FILTER_SANITIZE_STRING);
    $user_arr = _fetch("SELECT id, user, pass, coin, tongnap, luotquay_10k, luotquay_20k, luotquay_50k FROM account WHERE user=?", [$_user]);
    
    if (!$user_arr) {
        header("Location: /?out");
        exit;
    }

    $_id = htmlspecialchars($user_arr['id']);
    $_username = htmlspecialchars($user_arr['user']);
    $_password = htmlspecialchars($user_arr['pass']);
    $_coin = $user_arr['coin'];
    $_tongnap = $user_arr['tongnap'];
    $_luotquay_10k = $user_arr['luotquay_10k'];
    $_luotquay_20k = $user_arr['luotquay_20k'];
    $_luotquay_50k = $user_arr['luotquay_50k'];

    // Lấy thông tin nhân vật
    $sql_player = "SELECT REPLACE(REPLACE(REPLACE(`char`, '[', ''), ']', ''), '\"', '') AS `char` FROM account WHERE user=?";
    $result_player = _fetch($sql_player, [$_user]);
    
    if ($result_player) {
        $_player = $result_player['char'];
    } else {
        $_player = null; // Xử lý khi không có dữ liệu
    }
} else {
    $_login = null;
}

// Hàm thực hiện truy vấn
function _query($sql, $params = []) {
    global $config;
    $stmt = $config->prepare($sql);
    if ($params) {
        $stmt->bind_param(...$params);
    }
    $stmt->execute();
    return $stmt->get_result();
}

// Hàm lấy dữ liệu
function _fetch($sql, $params = []) {
    $result = _query($sql, $params);
    return $result->fetch_array(MYSQLI_ASSOC);
}

// Hàm kiểm tra và làm sạch đầu vào
function isset_sql($txt) {
    global $config;
    return mysqli_real_escape_string($config, $txt);
}

// Xử lý đăng xuất
if (isset($_GET['out'])) {
    session_destroy();
    header("Location: /");
    exit;
}

// Các hàm truy vấn cơ sở dữ liệu
function _insert($table, $input, $output) {
    return "INSERT INTO $table($input) VALUES($output)";
}

function _select($select, $from, $where) {
    return "SELECT $select FROM $from WHERE $where";
}

function _update($table, $set, $where) {
    return "UPDATE $table SET $set WHERE $where";
}

// Hàm lấy địa chỉ IP của người dùng
function get_user_ip() {
    if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',') > 0) {
            $addr = explode(",", $_SERVER['HTTP_X_FORWARDED_FOR']);
            return trim($addr[0]);
        } else {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}
?>
