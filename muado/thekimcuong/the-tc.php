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
	   
	   $canh0 = '4652,4,55,10,13014,5,0';
	   $canh1 = '4789,4,22,10,13162,5,89';
	   $canh2 = '4774,4,22,10,13161,5,88';
	   $canh3 = '4773,4,22,10,13160,5,87';
	   $canh4 = '4707,4,22,10,13069,5,34';
	   $canh74 = '4713,4,22,10,13075,5,42';
	   $canh75 = '4712,4,22,10,13074,5,41';
	   $canh82 = '4793,4,22,10,13082,5,41';
	   $canh83 = '4794,4,22,10,13083,5,42';
	   $canh84 = '4795,4,22,10,13084,5,43';
	   $canh85 = '4796,4,22,10,13085,5,44';
	   $canh86 = '4797,4,22,10,13086,5,45';
	   
	   


$canh = ''; // Đảm bảo biến $moi được khởi tạo


if ($_new_canh == "canh74") {
            $canh = $canh74;
        }elseif ($_new_canh == "canh75") {
            $canh = $canh75;
        }elseif ($_new_canh == "canh0") {
            $canh = $canh0;
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

	$cap1 = '['. $canh .',1,1,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap2 = '['. $canh .',1,2,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap3 = '['. $canh .',1,3,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap4 = '['. $canh .',1,4,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap5 = '['. $canh .',1,5,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap6 = '['. $canh .',1,6,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap7 = '['. $canh .',1,7,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap8 = '['. $canh .',1,8,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap9 = '['. $canh .',1,9,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap10 = '['. $canh .',1,10,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap11 = '['. $canh .',1,11,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap12 = '['. $canh .',1,12,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap13 = '['. $canh .',1,13,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap14 = '['. $canh .',1,14,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap15 = '['. $canh .',1,15,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap16 = '['. $canh .',1,16,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap17 = '['. $canh .',1,17,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap18 = '['. $canh .',1,18,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap19 = '['. $canh .',1,19,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap20 = '['. $canh .',1,20,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';

		

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
    $meday = 'The kc tan cong';
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
	   
	   $canh0 = '4652,4,55,10,13014,5,0';
	   $canh1 = '4789,4,22,10,13162,5,89';
	   $canh2 = '4774,4,22,10,13161,5,88';
	   $canh3 = '4773,4,22,10,13160,5,87';
	   $canh4 = '4707,4,22,10,13069,5,34';
	   $canh74 = '4713,4,22,10,13075,5,42';
	   $canh75 = '4712,4,22,10,13074,5,41';
	   $canh82 = '4793,4,22,10,13082,5,41';
	   $canh83 = '4794,4,22,10,13083,5,42';
	   $canh84 = '4795,4,22,10,13084,5,43';
	   $canh85 = '4796,4,22,10,13085,5,44';
	   $canh86 = '4797,4,22,10,13086,5,45';
	   
	   


$canh = ''; // Đảm bảo biến $moi được khởi tạo


if ($_new_canh == "canh74") {
            $canh = $canh74;
        }elseif ($_new_canh == "canh75") {
            $canh = $canh75;
        }elseif ($_new_canh == "canh0") {
            $canh = $canh0;
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

	$cap1 = '['. $canh .',1,1,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap2 = '['. $canh .',1,2,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap3 = '['. $canh .',1,3,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap4 = '['. $canh .',1,4,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap5 = '['. $canh .',1,5,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap6 = '['. $canh .',1,6,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap7 = '['. $canh .',1,7,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap8 = '['. $canh .',1,8,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap9 = '['. $canh .',1,9,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap10 = '['. $canh .',1,10,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap11 = '['. $canh .',1,11,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap12 = '['. $canh .',1,12,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap13 = '['. $canh .',1,13,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap14 = '['. $canh .',1,14,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap15 = '['. $canh .',1,15,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap16 = '['. $canh .',1,16,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap17 = '['. $canh .',1,17,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap18 = '['. $canh .',1,18,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap19 = '['. $canh .',1,19,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';
$cap20 = '['. $canh .',1,20,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]';

		

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
    $meday = 'The kc tan cong';
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
		  
<h2><b>Thẻ Tấn Công</b></h2>
<br>
<div class="note">
<p style="color:red;"> Lưu ý: Thoát game trước khi mua đồ để tránh bị trừ coin mà đồ không vào hành trang</p><br>

<b > Thẻ đã mua có thể nâng cấp bằng coin tại NPC Admin ở làng sói trắng</b></div><br>


<form action="/the-tc" method="POST" id="info_form">
 <?php echo $thongbao; ?><br>
<label for="new_canh">ID thẻ:</label>
<div class="image-container " name="new_canh" id="new_canh">
    <div class="image-item">
        <img src="/images/webshop/15014.png" alt="Image 1" data-value="canh0">
        <span class="image-number">00</span>
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

<form action="kc-tc" method="POST" id="info_form">
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
	 <label for="new_canh">Chọn id thẻ:</label>
    <select name="new_canh" id="new_canh" required>
		 <option value="canh0">00</option>
		 
       
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
                        url: '/canh-tc',
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
