<?php
include '../../config/head.php';
$thongbao = null;
if($_login == null) {header("location:/login");}
if(isset($_SESSION['user']) ) {
    if(isset($_POST['name']) && isset($_POST['new_info']) && isset($_POST['new_canh'])) {
        $name = $_POST['name'];
        $_new_info = $_POST['new_info'];
		$_new_canh = $_POST['new_canh'];
        $user = $_SESSION['user'];
        // Kết nối đến cơ sở dữ liệu
       // Tạo 5 biến và gán giá trị
	   
	   $canh1 = '4692,4,24,10,13054,5,21';
	   $canh2 = '4693,4,24,10,13055,5,22';
	   $canh3 = '4694,4,24,10,13056,5,23';
	   $canh4 = '4691,4,24,10,13053,5,20';
	   $canh74 = '4755,4,24,10,13142,5,71';
	   $canh75 = '4791,4,24,10,13166,5,93';
	   $canh82 = '4730,4,24,10,13117,5,55';
	   $canh83 = '4731,4,24,10,13118,5,56';
	   $canh84 = '4792,4,24,10,13170,5,94';
	   $canh85 = '4692,4,24,10,13054,5,21';
	   $canh86 = '4692,4,24,10,13054,5,21';
	   
	   
	   


$canh = ''; // Đảm bảo biến $moi được khởi tạo


if ($_new_canh == "canh74") {
            $canh = $canh74;
        }elseif ($_new_canh == "canh75") {
            $canh = $canh75;
        }elseif ($_new_canh == "canh1") {
            $canh = $canh1;
        }elseif ($_new_canh == "canh2") {
            $canh = $canh2;
        }elseif ($_new_canh == "canh3") {
            $canh = $canh3;
        }elseif ($_new_canh == "canh4") {
            $canh = $canh4;
        }elseif ($_new_canh == "canh82") {
            $canh = $canh82;
        }elseif ($_new_canh == "canh83") {
            $canh = $canh83;
        }elseif ($_new_canh == "canh84") {
            $canh = $canh84;
        }elseif ($_new_canh == "canh85") {
            $canh = $canh85;
        }elseif ($_new_canh == "canh86") {
            $canh = $canh86;
        }

$cap1 = '['. $canh .',1,1,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,60],[27,6000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap2 = '['. $canh .',1,2,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,70],[27,7000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap3 = '['. $canh .',1,3,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,80],[27,8000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap4 = '['. $canh .',1,4,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,90],[27,9000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap5 = '['. $canh .',1,5,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,100],[27,10000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap6 = '['. $canh .',1,6,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,110],[27,11000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap7 = '['. $canh .',1,7,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,120],[27,12000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap8 = '['. $canh .',1,8,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,130],[27,13000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap9 = '['. $canh .',1,9,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,140],[27,14000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap10 = '['. $canh .',1,10,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,150],[27,15000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap11 = '['. $canh .',1,11,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,160],[27,16000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap12 = '['. $canh .',1,12,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,170],[27,17000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap13 = '['. $canh .',1,13,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,180],[27,18000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap14 = '['. $canh .',1,14,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,190],[27,19000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap15 = '['. $canh .',1,15,[[14,2000],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,200],[27,20000],[29,2000],[30,2000],[35,2000],[38,1]],0]';
$cap16 = '['. $canh .',1,16,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,200],[27,20000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap17 = '['. $canh .',1,17,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,200],[27,20000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap18 = '['. $canh .',1,18,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,200],[27,20000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap19 = '['. $canh .',1,19,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,200],[27,20000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap20 = '['. $canh .',1,20,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,200],[27,20000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
	

		if ($_new_info == "cap1") {
            $moi = $cap1;
        }elseif ($_new_info == "cap2") {
            $moi = $cap2;
        }elseif ($_new_info == "cap3") {
            $moi = $cap3;
        }elseif ($_new_info == "cap4") {
            $moi = $cap4;
        }elseif ($_new_info == "cap5") {
            $moi = $cap5;
        }elseif ($_new_info == "cap6") {
            $moi = $cap6;
        }elseif ($_new_info == "cap6") {
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
            $moi = $cap19;
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
				
		if ($moi == $cap1) {
             $trucoin = '150000';
        }elseif ($moi == $cap2) {
             $trucoin = '300000';
        }elseif ($moi == $cap3) {
             $trucoin = '450000';
        }elseif ($moi == $cap4) {
             $trucoin = '600000';
        }elseif ($moi == $cap5) {
			 $trucoin = '750000';
		}elseif ($moi == $cap6) {
             $trucoin = '900000';
        } elseif ($moi == $cap7) {
             $trucoin = '1050000';
        } elseif ($moi == $cap8) {
             $trucoin = '1200000';
        }elseif ($moi == $cap9) {
             $trucoin = '1350000';
        }elseif ($moi == $cap10) {
             $trucoin = '1500000';
        }elseif ($moi == $cap11) {
             $trucoin = '1650000';
        }elseif ($moi == $cap12) {
             $trucoin = '1800000';
        }elseif ($moi == $cap13) {
             $trucoin = '1950000';
        }elseif ($moi == $cap14) {
             $trucoin = '2100000';
        }elseif ($moi == $cap15) {
             $trucoin = '2250000';
        
        }elseif ($moi == $cap16) {
             $trucoin = '2450000';
        
        }elseif ($moi == $cap17) {
             $trucoin = '2650000';
        
        }elseif ($moi == $cap18) {
             $trucoin = '2850000';
        
        }elseif ($moi == $cap19) {
             $trucoin = '3050000';
        
        }elseif ($moi == $cap20) {
             $trucoin = '3250000';
        
        }
		
		
                // Check if user has enough coins
               if ($user_coins >= $trucoin) {
    // Thêm thông tin mới vào cột "item3"
    $item3[] = $moi;
    $updated_item3 = json_encode($item3);
    $meday = 'Vu khi phong thu';
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
    if(isset($_POST['name']) && isset($_POST['new_info']) && isset($_POST['new_canh'])) {
        $name = $_POST['name'];
        $_new_info = $_POST['new_info'];
		$_new_canh = $_POST['new_canh'];
        $user = $_SESSION['user2'];
        // Kết nối đến cơ sở dữ liệu
       // Tạo 5 biến và gán giá trị
	   
	   $canh1 = '4692,4,24,10,13054,5,21';
	   $canh2 = '4693,4,24,10,13055,5,22';
	   $canh3 = '4694,4,24,10,13056,5,23';
	   $canh4 = '4691,4,24,10,13053,5,20';
	   $canh74 = '4755,4,24,10,13142,5,71';
	   $canh75 = '4791,4,24,10,13166,5,93';
	   $canh82 = '4730,4,24,10,13117,5,55';
	   $canh83 = '4731,4,24,10,13118,5,56';
	   $canh84 = '4792,4,24,10,13170,5,94';
	   $canh85 = '4692,4,24,10,13054,5,21';
	   $canh86 = '4692,4,24,10,13054,5,21';
	   
	   
	   


$canh = ''; // Đảm bảo biến $moi được khởi tạo


if ($_new_canh == "canh74") {
            $canh = $canh74;
        }elseif ($_new_canh == "canh75") {
            $canh = $canh75;
        }elseif ($_new_canh == "canh1") {
            $canh = $canh1;
        }elseif ($_new_canh == "canh2") {
            $canh = $canh2;
        }elseif ($_new_canh == "canh3") {
            $canh = $canh3;
        }elseif ($_new_canh == "canh4") {
            $canh = $canh4;
        }elseif ($_new_canh == "canh82") {
            $canh = $canh82;
        }elseif ($_new_canh == "canh83") {
            $canh = $canh83;
        }elseif ($_new_canh == "canh84") {
            $canh = $canh84;
        }elseif ($_new_canh == "canh85") {
            $canh = $canh85;
        }elseif ($_new_canh == "canh86") {
            $canh = $canh86;
        }

$cap1 = '['. $canh .',1,1,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,60],[27,6000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap2 = '['. $canh .',1,2,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,70],[27,7000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap3 = '['. $canh .',1,3,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,80],[27,8000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap4 = '['. $canh .',1,4,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,90],[27,9000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap5 = '['. $canh .',1,5,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,100],[27,10000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap6 = '['. $canh .',1,6,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,110],[27,11000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap7 = '['. $canh .',1,7,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,120],[27,12000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap8 = '['. $canh .',1,8,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,130],[27,13000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap9 = '['. $canh .',1,9,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,140],[27,14000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap10 = '['. $canh .',1,10,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,150],[27,15000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap11 = '['. $canh .',1,11,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,160],[27,16000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap12 = '['. $canh .',1,12,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,170],[27,17000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap13 = '['. $canh .',1,13,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,180],[27,18000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap14 = '['. $canh .',1,14,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,190],[27,19000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap15 = '['. $canh .',1,15,[[14,2000],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,200],[27,20000],[29,2000],[30,2000],[35,2000],[38,1]],0]';
$cap16 = '['. $canh .',1,16,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,200],[27,20000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap17 = '['. $canh .',1,17,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,200],[27,20000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap18 = '['. $canh .',1,18,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,200],[27,20000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap19 = '['. $canh .',1,19,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,200],[27,20000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
$cap20 = '['. $canh .',1,20,[[14,2500],[15,2000],[16,2000],[17,2000],[18,2000],[19,2000],[20,2000],[25,200],[27,20000],[29,1000],[30,1000],[35,1500],[38,1]],0]';
	

		if ($_new_info == "cap1") {
            $moi = $cap1;
        }elseif ($_new_info == "cap2") {
            $moi = $cap2;
        }elseif ($_new_info == "cap3") {
            $moi = $cap3;
        }elseif ($_new_info == "cap4") {
            $moi = $cap4;
        }elseif ($_new_info == "cap5") {
            $moi = $cap5;
        }elseif ($_new_info == "cap6") {
            $moi = $cap6;
        }elseif ($_new_info == "cap6") {
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
            $moi = $cap19;
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
				
		if ($moi == $cap1) {
             $trucoin = '150000';
        }elseif ($moi == $cap2) {
             $trucoin = '300000';
        }elseif ($moi == $cap3) {
             $trucoin = '450000';
        }elseif ($moi == $cap4) {
             $trucoin = '600000';
        }elseif ($moi == $cap5) {
			 $trucoin = '750000';
		}elseif ($moi == $cap6) {
             $trucoin = '900000';
        } elseif ($moi == $cap7) {
             $trucoin = '1050000';
        } elseif ($moi == $cap8) {
             $trucoin = '1200000';
        }elseif ($moi == $cap9) {
             $trucoin = '1350000';
        }elseif ($moi == $cap10) {
             $trucoin = '1500000';
        }elseif ($moi == $cap11) {
             $trucoin = '1650000';
        }elseif ($moi == $cap12) {
             $trucoin = '1800000';
        }elseif ($moi == $cap13) {
             $trucoin = '1950000';
        }elseif ($moi == $cap14) {
             $trucoin = '2100000';
        }elseif ($moi == $cap15) {
             $trucoin = '2250000';
        
        }elseif ($moi == $cap16) {
             $trucoin = '2450000';
        
        }elseif ($moi == $cap17) {
             $trucoin = '2650000';
        
        }elseif ($moi == $cap18) {
             $trucoin = '2850000';
        
        }elseif ($moi == $cap19) {
             $trucoin = '3050000';
        
        }elseif ($moi == $cap20) {
             $trucoin = '3250000';
        
        }
		
		
                // Check if user has enough coins
               if ($user_coins >= $trucoin) {
    // Thêm thông tin mới vào cột "item3"
    $item3[] = $moi;
    $updated_item3 = json_encode($item3);
    $meday = 'Vu khi phong thu';
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
}else {
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
		  
<h2><b>Vũ Khí Thời Trang Phòng Thủ</b></h2>
<br>
<div class="note">
<p style="color:red;"> Lưu ý: Thoát game trước khi mua đồ để tránh bị trừ coin mà đồ không vào hành trang</p><br>

<b > Cánh đã mua có thể nâng cấp bằng coin tại NPC Admin ở làng sói trắng</b></div><br>


<form action="/vk-pt" method="POST" id="info_form">
 <?php echo $thongbao; ?><br>
<label for="new_canh">ID vũ khí:</label>
<div class="image-container " name="new_canh" id="new_canh">
   
    <div class="image-item">
        <img src="/images/webshop//15111.png" alt="Image 2" data-value="canh1">
        <span class="image-number">01</span>
    </div>
    <div class="image-item">
        <img src="/images/webshop//15112.png" alt="Image 3" data-value="canh2">
        <span class="image-number">02</span>
    </div>
	<div class="image-item">
        <img src="/images/webshop//15113.png" alt="Image 3" data-value="canh3">
        <span class="image-number">03</span>
    </div>
	<div class="image-item">
        <img src="/images/webshop//15114.png" alt="Image 3" data-value="canh4">
        <span class="image-number">04</span>
    </div>
	
	<div class="image-item">
        <img src="/images/webshop//15115.png" alt="Image 3" data-value="canh74">
        <span class="image-number">05</span>
    </div>
	<div class="image-item">
        <img src="/images/webshop//15116.png" alt="Image 3" data-value="canh75">
        <span class="image-number">06</span>
    </div>
	<div class="image-item">
        <img src="/images/webshop//15117.png" alt="Image 3" data-value="canh82">
        <span class="image-number">07</span>
    </div>
	<div class="image-item">
        <img src="/images/webshop//15118.png" alt="Image 3" data-value="canh83">
        <span class="image-number">08</span>
    </div>
	<div class="image-item">
        <img src="/images/webshop//15119.png" alt="Image 3" data-value="canh84">
        <span class="image-number">09</span>
    </div>
	

    <!-- Thêm các hình ảnh khác ở đây -->
</div>

<div id="selected-image"></div>
<br>
<br>

<script>
    const images = document.querySelectorAll('.image-item');

    images.forEach(image => {
        image.addEventListener('click', () => {
            const selectedValue = image.querySelector('img').getAttribute('data-value');
            document.getElementById('selected-image').innerText = `Bạn đã chọn ảnh có giá trị: ${selectedValue}`;
        });
    });
</script>
</form><br>

<form action="vk-pt" method="POST" id="info_form">
    <label for="name">Tên nhân vật:</label>
    <input type="text" name="name" id="name" required><br><br>
  
    <label for="new_info">Chọn cấp độ:</label>
    <select name="new_info" id="new_info" required>
		 
		 <option value="cap1">Cộng 1 giá 150.000 coin</option>
        <option value="cap2">Cộng 2 giá 300.000 coin</option>
        <option value="cap3">Cộng 3 giá 450.000 coin</option>
        <option value="cap4">Cộng 4 giá 600.000 coin</option>  
        <option value="cap5">Cộng 5 giá 750.000 coin</option>
        <option value="cap6">Cộng 6 giá 900.000 coin</option>
		<option value="cap7">Cộng 7 giá 1.050.000 coin</option>
        <option value="cap8">Cộng 8 giá 1.200.000 coin</option>
        <option value="cap9">Cộng 9 giá 1.350.000 coin</option>
        <option value="cap10">Cộng 10 giá 1.500.000 coin</option>
        <option value="cap11">Cộng 11 giá 1.650.000 coin</option>
        <option value="cap12">Cộng 12 giá 1.800.000 coin</option>
        <option value="cap13">Cộng 13 giá 1.950.000 coin</option>
        <option value="cap14">Cộng 14 giá 2.100.000 coin</option>
        <option value="cap15">Cộng 15 giá 2.250.000 coin</option>
       <option value="cap16">Cộng 16 giá 2.450.000 coin</option>
        <option value="cap17">Cộng 17 giá 2.650.000 coin</option>
        <option value="cap18">Cộng 18 giá 2.850.000 coin</option>
        <option value="cap19">Cộng 19 giá 3.050.000 coin</option>
        <option value="cap20">Cộng 20 giá 3.250.000 coin</option>
        <!-- Thêm các option khác ở đây -->
    </select><br><br>
	 <label for="new_canh">Chọn id vũ khí:</label>
    <select name="new_canh" id="new_canh" required>
	
		 <option value="canh1">01</option>
		 <option value="canh2">02</option>
		 <option value="canh3">03</option>
		 <option value="canh4">04</option>
		 
		 <option value="canh74">05</option>
		 <option value="canh75">06</option>
		 <option value="canh82">07</option>
		 <option value="canh83">08</option>
		<option value="canh84">09</option>
       
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
                        url: '/vk-pt',
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