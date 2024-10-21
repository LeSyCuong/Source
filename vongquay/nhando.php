
<?php
include '../config/head.php';
$thongbao = null;

if ($_login == null) {
    header("location:/login");
    exit(); // Thêm exit để ngăn mã tiếp tục chạy sau khi chuyển hướng
}

if (isset($_GET['id'])) {
    // Lấy dữ liệu từ AJAX
    $id_get = $_GET['id'];
    $sql_id_vp = "SELECT * FROM giohang WHERE id='$id_get'";
    $result_id_vp = $config->query($sql_id_vp); // Sửa biến từ $sql_player thành $sql_id_vp
    $row_vp = $result_id_vp->fetch_assoc(); // Sửa biến từ $result_check_vp thành $result_id_vp
    $user_get = $row_vp['user'];
                $user_vp = $row_vp['vatpham'];
                $user_vp_3 = $row_vp['item3'];
                $user_vp_7 = $row_vp['item7'];
                $user_st = $row_vp['status'];
} else {
    echo 'Không có vật phẩm';
    die();
}

if (isset($_SESSION['user'])) {
    
    if( $user_get != $_user){
        echo 'Cút nhé!!!';
        die();
    }
    if (isset($_POST['name']) ) {
        if($user_st == 0){
        $name = $_POST['name'];
        $user = $_SESSION['user'];
        
        // Kết nối đến cơ sở dữ liệu
        $moi = ''; // Đảm bảo biến $moi được khởi tạo
        // Truy vấn thông tin người dùng từ bảng player
        $sql_player = "SELECT * FROM player WHERE name='$name'";
        $result_player = $config->query($sql_player);

        if ($result_player->num_rows > 0) {
            $row_player = $result_player->fetch_assoc();
            $item3 = json_decode($row_player['item3'], true);
            $item7 = json_decode($row_player['item7'], true);
            
            if ($result_id_vp->num_rows > 0) {

                // Thêm thông tin mới vào cột "item"
                if(!empty($user_vp_3)){
                    $item3[] = $user_vp_3;
                }else{
                    $item3[] = '[40,0,2,1,8,0,0,0,0,[[7,97],[14,17]],0,0,0]';
                }
                
                if(!empty($user_vp_7)){
                    $item7[] = $user_vp_7;
                }else{
                    $item7[] = '[0,1]';
                }
                
                $updated_item3 = json_encode($item3);
                $updated_item7 = json_encode($item7);
                $status = 1;
                // Sử dụng prepared statement để cập nhật thông tin người dùng
                $sql_update_item = $config->prepare("UPDATE player SET item3=?, item7=? WHERE name=?");
                $sql_update_item->bind_param("sss", $updated_item3, $updated_item7, $name);

                // Thực hiện cập nhật
                if ($sql_update_item->execute()) {
   

    $sql_update_giohang = $config->prepare("UPDATE giohang SET status=? WHERE id=?");
    $sql_update_giohang->bind_param("is", $status, $id_get); // Sử dụng biến $status đã thay đổi
    if ($sql_update_giohang->execute()) {
        $thongbao = '<div class="alert alert-success" role="alert">
                        Nhận đồ thành công!
                    </div>';
    } else {
        $thongbao = '<div class="alert alert-danger" role="alert">
                        Cập nhật giỏ hàng thất bại!
                    </div>';
    }
}
 else {
                    $thongbao = '<div class="alert alert-danger" role="alert">
                                    Cập nhật player thất bại!
                                </div>';
                }

                $sql_update_item->close();
            } else {
                $thongbao = '<div class="alert alert-danger" role="alert">
                                Thất bại, không tìm thấy thông tin vật phẩm!
                            </div>';
            }
        } else {
            $thongbao = '<div class="alert alert-danger" role="alert">
                            Thất bại, không tìm thấy tên nhân vật!
                        </div>';
        }
    }
    else{
        $thongbao = '<div class="alert alert-danger" role="alert">
                            Thất bại, bạn đã nhận vật phẩm này rồi!
                        </div>';
    }
    }
    
} else {
    $thongbao = '<div class="alert alert-danger" role="alert">
                    Bạn chưa đăng nhập, vui lòng đăng nhập!
                </div>';
}

$config->close();

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
		   
		   
   
<h2><b>Nhận đồ vòng quay may mắn</b></h2>
<br>

<div class="note">
<p style="color:red;"> Lưu ý: Thoát game trước khi mua đồ để tránh bị đồ không vào hành trang</p><br>
</div><br>
<form action="" method="POST" id="info_form">
<?php echo $thongbao; ?><br>
    <label for="name">Tên nhân vật:</label>
    <input type="text" name="name" id="name" required><br><br>
  
     <label>Vật phẩm nhận:</label>
    <select required>
     
       
        <option><?php echo $user_vp; ?></option>
       
    </select><br><br>
    <button type="submit" id="btn_buy">Mua</button><br><br>
   <br><a href="https://langnam.online/vongquay/giohang.php">Quay lại giỏ hàng</a>
</form>

<!-- Thêm các thư viện JavaScript cần thiết -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
<?php include '../config/foot.php'; ?>
