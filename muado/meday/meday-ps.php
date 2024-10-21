
<?php
include '../../config/head.php';
$thongbao = null;
if($_login == null) {header("location:/login");}
if(isset($_SESSION['user']) ) {
     if(isset($_POST['name']) && isset($_POST['new_info'])) {
        $name = $_POST['name'];
        $_new_info = $_POST['new_info'];
        $user = $_SESSION['user'];
        // Kết nối đến cơ sở dữ liệu
       // Tạo 5 biến và gán giá trị
	   
	   
$vari1 = array(76,800);
$vari2 = array(77,1000);
$bonglua = ','. json_encode($vari2) .',' . json_encode($vari1) . ',';

$vari3 = array(78,800);
$vari4 = array(79,1000);
$bonglanh = ','. json_encode($vari3) .',' . json_encode($vari4) . ',';

$vari5 = array(81,800);
$vari6 = array(82,1000);
$tanghinh = ','. json_encode($vari5) .',' . json_encode($vari6) . ',';

$vari5 = array(80,800);
$giaphacam = ','. json_encode($vari5) . ',';

$vari9 = array(85,800);
$vari10 = array(86,1000);
$khienmathuat = ','. json_encode($vari9) .',' . json_encode($vari10) . ',';

$vari11 = array(87,800);
$vari12 = array(88,1000);
$lulan = ','. json_encode($vari11) .',' . json_encode($vari12) . ',';

// Chọn ngẫu nhiên 1 trong 5 biến
$randomIndex = rand(1, 2);
$randomIndex2 = rand(1, 4);
// Gán biến được chọn vào biến $ran
if ($randomIndex == 1) {
    $ran = $bonglanh;
}  else {
    $ran = $bonglua ;
} 


if($randomIndex2 == 1) {
    $ran2 = $tanghinh ;
}  elseif($randomIndex2 == 2) {
    $ran2 = $khienmathuat ;
} elseif($randomIndex2 == 3) {
    $ran2 = $giaphacam ;
} else {
    $ran2 = $lulan ;
}
$cap5 = '[4588,4,16,2,955,4,4,1,5,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap6 = '[4588,4,16,2,955,4,4,1,6,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap7 = '[4588,4,16,2,955,4,4,1,7,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap8 = '[4588,4,16,2,955,4,4,1,8,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap9 = '[4588,4,16,2,955,4,4,1,9,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap10 = '[4588,4,16,2,955,4,4,1,10,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap11 = '[4588,4,16,2,955,4,4,1,11,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap12 = '[4588,4,16,2,955,4,4,1,12,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap13 = '[4588,4,16,2,955,4,4,1,13,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap14 = '[4588,4,16,2,955,4,4,1,14,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap15 = '[4588,4,16,2,955,4,4,1,15,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap16 = '[4588,4,16,2,955,4,4,1,16,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap17 = '[4588,4,16,2,955,4,4,1,17,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap18 = '[4588,4,16,2,955,4,4,1,18,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap19 = '[4588,4,16,2,955,4,4,1,19,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap20 = '[4588,4,16,2,955,4,4,1,20,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$moi = ''; // Đảm bảo biến $moi được khởi tạo

if ($_new_info == "cap5") {
            $moi = $cap5;
        } elseif ($_new_info == "cap6") {
            $moi = $cap6;
        } elseif ($_new_info == "cap7") {
            $moi = $cap7;
        } elseif ($_new_info == "cap8") {
            $moi = $cap8;
        }elseif ($_new_info == "cap9") {
            $moi = $cap9;
        }elseif ($_new_info == "cap10") {
            $moi = $cap10;
        }elseif ($_new_info == "cap11") {
            $moi = $cap11;
        }elseif ($_new_info == "cap12") {
            $moi = $cap12;
        }elseif ($_new_info == "cap13") {
            $moi = $cap13;
        }elseif ($_new_info == "cap14") {
            $moi = $cap14;
        }elseif ($_new_info == "cap15") {
            $moi = $cap15;
        }elseif ($_new_info == "cap16") {
            $moi = $cap16;
        }elseif ($_new_info == "cap17") {
            $moi = $cap17;
        }elseif ($_new_info == "cap18") {
            $moi = $cap18;
        }elseif ($_new_info == "cap19") {
            $moi = $cap20;
        }elseif ($_new_info == "cap20") {
            $moi = $cap20;
        }
		
	
		
		$trucoin = '';
        // Truy vấn thông tin người dùng từ bảng player
        $sql_player = "SELECT * FROM player WHERE name='$name'";
        $result_player = $config->query($sql_player);

        if ($result_player->num_rows > 0) {
            $row_player = $result_player->fetch_assoc();
            $item3 = json_decode($row_player['item3'], true);

            // Check user's coin balance
            $sql_check_coins = "SELECT coin FROM account WHERE user='$user'";
            $result_check_coins = $config->query($sql_check_coins);
            if ($result_check_coins->num_rows > 0) {
                $row_coins = $result_check_coins->fetch_assoc();
                $user_coins = $row_coins['coin'];
				
				if ($moi == $cap5) {
            $trucoin = '150000';
        } elseif ($moi == $cap6) {
             $trucoin = '250000';
        } elseif ($moi == $cap7) {
             $trucoin = '350000';
        } elseif ($moi == $cap8) {
            $trucoin = '450000';
        }elseif ($moi == $cap9) {
             $trucoin = '550000';
        }elseif ($moi == $cap10) {
            $trucoin = '650000';
        }elseif ($moi == $cap11) {
             $trucoin = '750000';
        }elseif ($moi == $cap12) {
             $trucoin = '850000';
        }elseif ($moi == $cap13) {
             $trucoin = '950000';
        }elseif ($moi == $cap14) {
             $trucoin = '1000000';
        }elseif ($moi == $cap15) {
             $trucoin = '1050000';
        }elseif ($moi == $cap16) {
            $trucoin = '1250000';
        }elseif ($moi == $cap17) {
             $trucoin = '1450000';
        }elseif ($moi == $cap18) {
             $trucoin = '1650000';
        }elseif ($moi == $cap19) {
             $trucoin = '1850000';
        }elseif ($moi == $cap20) {
            $trucoin = '2050000';
        }
		
                // Check if user has enough coins
               if ($user_coins >= $trucoin) {
    // Thêm thông tin mới vào cột "item3"
    $item3[] = $moi;
    $updated_item3 = json_encode($item3);
    $meday = 'Me day phap su';
    $thoigian = date("Y-m-d H:i:s");
    // Sử dụng prepared statement để cập nhật thông tin người dùng
    $sql_update_item3 = $config->prepare("UPDATE player SET item3=? WHERE name=?");
    $sql_update_item3->bind_param("ss", $updated_item3, $name);

    if ($sql_update_item3->execute()) {
        // Trừ tiền từ tài khoản của người dùng
        $sql_deduct_coins = $config->prepare("UPDATE account SET coin = coin - ? WHERE user = ?");
        $sql_deduct_coins->bind_param("is", $trucoin, $user);

        if ($sql_deduct_coins->execute()) {
            // Thêm giao dịch vào lịch sử
            $sql_insert_history = $config->prepare("INSERT INTO lichsu (user, sanpham, gia, thoigian, player) VALUES (?, ?, ?, ?, ?)");
            $sql_insert_history->bind_param("sssss", $user, $meday, $trucoin, $thoigian, $name);
            $sql_insert_history->execute();

            $thongbao = '<div class="alert alert-success" role="alert">
                                        Mua đồ thành công!
                                      </div>';
        } else {
           $thongbao = '<div class="alert alert-danger" role="alert">
                                        Lỗi khi trừ tiền tài khoản!
                                      </div>';
        }
    } else {
        $thongbao = '<div class="alert alert-danger" role="alert">
                                       Lỗi khi cập nhật thông tin người dùng!
                                      </div>';
    }

    $sql_update_item3->close();
    $sql_deduct_coins->close();
    $sql_insert_history->close();
} else {
   $thongbao = '<div class="alert alert-danger" role="alert">
                                        Thất bại, không đủ coin!
                                      </div>';
}

            } else {
               $thongbao = '<div class="alert alert-danger" role="alert">
                                       Thất bại, không tìm thấy thông tin tài khoản!
                                      </div>'; $config->close();
            }
        } else {
            $thongbao = '<div class="alert alert-danger" role="alert">
                                       Thất bại, không tìm thấy tên nhân vật!
                                      </div>'; $config->close();
        }

    }
} elseif(isset($_SESSION['user2']) ) {
     if(isset($_POST['name']) && isset($_POST['new_info'])) {
        $name = $_POST['name'];
        $_new_info = $_POST['new_info'];
        $user = $_SESSION['user2'];
        // Kết nối đến cơ sở dữ liệu
       // Tạo 5 biến và gán giá trị
	   
	   
$vari1 = array(76,800);
$vari2 = array(77,1000);
$bonglua = ','. json_encode($vari2) .',' . json_encode($vari1) . ',';

$vari3 = array(78,800);
$vari4 = array(79,1000);
$bonglanh = ','. json_encode($vari3) .',' . json_encode($vari4) . ',';

$vari5 = array(81,800);
$vari6 = array(82,1000);
$tanghinh = ','. json_encode($vari5) .',' . json_encode($vari6) . ',';

$vari5 = array(80,800);
$giaphacam = ','. json_encode($vari5) . ',';

$vari9 = array(85,800);
$vari10 = array(86,1000);
$khienmathuat = ','. json_encode($vari9) .',' . json_encode($vari10) . ',';

$vari11 = array(87,800);
$vari12 = array(88,1000);
$lulan = ','. json_encode($vari11) .',' . json_encode($vari12) . ',';

// Chọn ngẫu nhiên 1 trong 5 biến
$randomIndex = rand(1, 2);
$randomIndex2 = rand(1, 4);
// Gán biến được chọn vào biến $ran
if ($randomIndex == 1) {
    $ran = $bonglanh;
}  else {
    $ran = $bonglua ;
} 


if($randomIndex2 == 1) {
    $ran2 = $tanghinh ;
}  elseif($randomIndex2 == 2) {
    $ran2 = $khienmathuat ;
} elseif($randomIndex2 == 3) {
    $ran2 = $giaphacam ;
} else {
    $ran2 = $lulan ;
}
$cap5 = '[4588,4,16,2,955,4,4,1,5,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap6 = '[4588,4,16,2,955,4,4,1,6,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap7 = '[4588,4,16,2,955,4,4,1,7,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap8 = '[4588,4,16,2,955,4,4,1,8,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap9 = '[4588,4,16,2,955,4,4,1,9,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap10 = '[4588,4,16,2,955,4,4,1,10,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap11 = '[4588,4,16,2,955,4,4,1,11,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap12 = '[4588,4,16,2,955,4,4,1,12,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap13 = '[4588,4,16,2,955,4,4,1,13,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap14 = '[4588,4,16,2,955,4,4,1,14,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap15 = '[4588,4,16,2,955,4,4,1,15,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap16 = '[4588,4,16,2,955,4,4,1,16,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap17 = '[4588,4,16,2,955,4,4,1,17,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap18 = '[4588,4,16,2,955,4,4,1,18,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap19 = '[4588,4,16,2,955,4,4,1,19,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$cap20 = '[4588,4,16,2,955,4,4,1,20,[[1,2000],[8,500],[8,500],[14,2000],[26,21],[27,2000],[37,1]'. str_replace('"', '', json_encode($ran)) .'[33,100]' . str_replace('"', '', json_encode($ran2)) . '[36,100]],0,0,0]';
$moi = ''; // Đảm bảo biến $moi được khởi tạo

if ($_new_info == "cap5") {
            $moi = $cap5;
        } elseif ($_new_info == "cap6") {
            $moi = $cap6;
        } elseif ($_new_info == "cap7") {
            $moi = $cap7;
        } elseif ($_new_info == "cap8") {
            $moi = $cap8;
        }elseif ($_new_info == "cap9") {
            $moi = $cap9;
        }elseif ($_new_info == "cap10") {
            $moi = $cap10;
        }elseif ($_new_info == "cap11") {
            $moi = $cap11;
        }elseif ($_new_info == "cap12") {
            $moi = $cap12;
        }elseif ($_new_info == "cap13") {
            $moi = $cap13;
        }elseif ($_new_info == "cap14") {
            $moi = $cap14;
        }elseif ($_new_info == "cap15") {
            $moi = $cap15;
        }elseif ($_new_info == "cap16") {
            $moi = $cap16;
        }elseif ($_new_info == "cap17") {
            $moi = $cap17;
        }elseif ($_new_info == "cap18") {
            $moi = $cap18;
        }elseif ($_new_info == "cap19") {
            $moi = $cap20;
        }elseif ($_new_info == "cap20") {
            $moi = $cap20;
        }
		
	
		
		$trucoin = '';
        // Truy vấn thông tin người dùng từ bảng player
        $sql_player = "SELECT * FROM player WHERE name='$name'";
        $result_player = $config2->query2($sql_player);

        if ($result_player->num_rows > 0) {
            $row_player = $result_player->fetch_assoc();
            $item3 = json_decode($row_player['item3'], true);

            // Check user's coin balance
            $sql_check_coins = "SELECT coin FROM account WHERE user='$user'";
            $result_check_coins = $config2->query2($sql_check_coins);
            if ($result_check_coins->num_rows > 0) {
                $row_coins = $result_check_coins->fetch_assoc();
                $user_coins = $row_coins['coin'];
				
				if ($moi == $cap5) {
            $trucoin = '150000';
        } elseif ($moi == $cap6) {
             $trucoin = '250000';
        } elseif ($moi == $cap7) {
             $trucoin = '350000';
        } elseif ($moi == $cap8) {
            $trucoin = '450000';
        }elseif ($moi == $cap9) {
             $trucoin = '550000';
        }elseif ($moi == $cap10) {
            $trucoin = '650000';
        }elseif ($moi == $cap11) {
             $trucoin = '750000';
        }elseif ($moi == $cap12) {
             $trucoin = '850000';
        }elseif ($moi == $cap13) {
             $trucoin = '950000';
        }elseif ($moi == $cap14) {
             $trucoin = '1000000';
        }elseif ($moi == $cap15) {
             $trucoin = '1050000';
        }elseif ($moi == $cap16) {
            $trucoin = '1250000';
        }elseif ($moi == $cap17) {
             $trucoin = '1450000';
        }elseif ($moi == $cap18) {
             $trucoin = '1650000';
        }elseif ($moi == $cap19) {
             $trucoin = '1850000';
        }elseif ($moi == $cap20) {
            $trucoin = '2050000';
        }
		
                // Check if user has enough coins
               if ($user_coins >= $trucoin) {
    // Thêm thông tin mới vào cột "item3"
    $item3[] = $moi;
    $updated_item3 = json_encode($item3);
    $meday = 'Me day phap su';
    $thoigian = date("Y-m-d H:i:s");
    // Sử dụng prepared statement để cập nhật thông tin người dùng
    $sql_update_item3 = $config2->prepare("UPDATE player SET item3=? WHERE name=?");
    $sql_update_item3->bind_param("ss", $updated_item3, $name);

    if ($sql_update_item3->execute()) {
        // Trừ tiền từ tài khoản của người dùng
        $sql_deduct_coins = $config2->prepare("UPDATE account SET coin = coin - ? WHERE user = ?");
        $sql_deduct_coins->bind_param("is", $trucoin, $user);

        if ($sql_deduct_coins->execute()) {
            // Thêm giao dịch vào lịch sử
            $sql_insert_history = $config2->prepare("INSERT INTO lichsu (user, sanpham, gia, thoigian, player) VALUES (?, ?, ?, ?, ?)");
            $sql_insert_history->bind_param("sssss", $user, $meday, $trucoin, $thoigian, $name);
            $sql_insert_history->execute();

            $thongbao = '<div class="alert alert-success" role="alert">
                                        Mua đồ thành công!
                                      </div>';
        } else {
           $thongbao = '<div class="alert alert-danger" role="alert">
                                        Lỗi khi trừ tiền tài khoản!
                                      </div>';
        }
    } else {
        $thongbao = '<div class="alert alert-danger" role="alert">
                                       Lỗi khi cập nhật thông tin người dùng!
                                      </div>';
    }

    $sql_update_item3->close();
    $sql_deduct_coins->close();
    $sql_insert_history->close();
} else {
   $thongbao = '<div class="alert alert-danger" role="alert">
                                        Thất bại, không đủ coin!
                                      </div>';
}

            } else {
               $thongbao = '<div class="alert alert-danger" role="alert">
                                       Thất bại, không tìm thấy thông tin tài khoản!
                                      </div>'; $config2->close();
            }
        } else {
            $thongbao = '<div class="alert alert-danger" role="alert">
                                       Thất bại, không tìm thấy tên nhân vật!
                                      </div>'; $config2->close();
        }

    }
}else{
           $thongbao = '<div class="alert alert-danger" role="alert">
                                       Bạn chưa đăng nhập, vui lòng đăng nhập!
                                      </div>'; $config->close();
        }
?>

   
 
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
    }
   b {
        color: #333;
        text-align: center; /* Căn giữa chữ */
    }

    h2 {
        color: #333;
        text-align: center; /* Căn giữa chữ */
    }

    form {
        background-color: #fff;
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"],
    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    button {
        width: 100%;
        padding: 10px;
        background-color: #4caf50;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #45a049;
    }

    .error {
        color: #ff0000;
    }
</style><body>
 <style>
    /* CSS mới */
    .note {
        text-align: center;
        color: red;
        font-weight: bold;
    }
</style><style>
    .image-container {
        display: flex;
        overflow-x: auto;
        gap: 40px;
        padding: 20px;
        border: 1px solid #ccc;
        white-space: nowrap;
    }

    .image-item {
        cursor: pointer;
        position: relative; /* Thêm để căn chỉnh vị trí của số */
    }

    .image-number {
        position: absolute;
        bottom: -25px;
        left: 10px;
        color: black;
        font-weight: bold;
    }
</style>

<body>


 <div
      class="outer subpage"
      style="height: 4285.31px; width: 980px; overflow: hidden"
    >
	
      <div
        id="scrollContent"
        class="inner scrollContent scrollSwipe"
        style="
          display: block;
          transform: scale(1.27539);
          margin-left: 0.25px;
          height: auto;
          overflow: hidden;
          outline: none;
        "
        data-scale-ratio="1.275390625"
        data-scrollbar="true"
        tabindex="-1"
      >
        <div
          class="scroll-content"
          style="transform: translate3d(0px, 0px, 0px)"
        >
         
         <br> <br> <br> <br>
          <section class="section section--2"> <br> <br> <br> <br>
		  <br> <br> <br> <br>
		   
		   
		   
<h2><b>Mề Đay Pháp Sư</b></h2>
<br>
<div class="note">
<p style="color:red;"> Lưu ý: Thoát game trước khi mua đồ để tránh bị trừ coin mà đồ không vào hành trang</p><br>

<b > Mề đay đã mua có thể nâng cấp bằng coin tại NPC Admin ở làng sói trắng</b></div><br>
<form action="/meday-ps" method="POST" id="info_form">
<?php echo $thongbao; ?><br>
    <label for="name">Tên nhân vật:</label>
    <input type="text" name="name" id="name" required><br><br>
  
    <label for="new_info">Chọn cấp độ:</label>
    <select name="new_info" id="new_info" required>
     
        <option value="cap5">Cộng 5 giá 150.000đ</option>
        <option value="cap6">Cộng 6 giá 250.000đ</option>
		<option value="cap7">Cộng 7 giá 350.000đ</option>
        <option value="cap8">Cộng 8 giá 450.000đ</option>
        <option value="cap9">Cộng 9 giá 550.000đ</option>
        <option value="cap10">Cộng 10 giá 650.000đ</option>
        <option value="cap11">Cộng 11 giá 750.000đ</option>
        <option value="cap12">Cộng 12 giá 850.000đ</option>
        <option value="cap13">Cộng 13 giá 950.000đ</option>
        <option value="cap14">Cộng 14 giá 1.000.000đ</option>
        <option value="cap15">Cộng 15 giá 1.050.000đ</option>
        <option value="cap16">Cộng 16 giá 1.250.000đ</option>
        <option value="cap17">Cộng 17 giá 1.450.000đ</option>
        <option value="cap18">Cộng 18 giá 1.650.000đ</option>
        <option value="cap19">Cộng 19 giá 1.750.000đ</option>
        <option value="cap20">Cộng 20 giá 1.850.000đ</option>
        <!-- Thêm các option khác ở đây -->
    </select><br><br>
    
    <button type="submit" id="btn_buy">Mua</button>
</form>
	
<!-- Thêm các thư viện JavaScript cần thiết -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$(document).ready(function() {
    $('#btn_buy').click(function() {
        var name = $('#name').val();
        var new_info = $('#new_info').val();
        if (name.trim() === '' || new_info.trim() === '') {
            swal({
                title: 'Lỗi!',
                text: 'Vui lòng điền đầy đủ thông tin trước khi mua.',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        } else {
           .then((confirmed) => {
                if (confirmed) {
                    $.ajax({
                        type: 'POST',
                        url: '/meday-ps',
                        data: {
                            name: name,
                            new_info: new_info
                        },
                        success: function(response) {
                            // Xử lý phản hồi nếu cần
                            location.reload();
                        }
                    });
                }
            });
        }
    });
});
</script> 

</body>
</html>

<style>
        .form-signin {
                width: 100%;
                max-width: 400px;
                padding: 15px;
                margin: 0 auto;
            }

            .form-signin .checkbox {
                font-weight: 400;
            }
    </style>
</main>
<script src="assets/js/jquery.form.min.js"></script>
<script src="assets/js/clipboard.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/js/appa368.js?_=1668687096"></script>
	





	
</div><br><br>
<?php include '../../config/foot.php'; ?>
