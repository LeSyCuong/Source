
<?php
include '../config/head.php';
$thongbao = null;

if ($_login == null) {
    header("location:/login");
    exit(); // Thêm exit để ngăn mã tiếp tục chạy sau khi chuyển hướng
}


if (isset($_SESSION['user'])) {
    
    
    if (isset($_POST['name']) && isset($_POST['phai']) ) {
        
        $name = $_POST['name'];
        $class = $_POST['phai'];
        // Kết nối đến cơ sở dữ liệu
        $moi = ''; // Đảm bảo biến $moi được khởi tạo
        // Truy vấn thông tin người dùng từ bảng player
        $sql_player = "SELECT * FROM player WHERE name='$name'";
        $result_player = $config->query($sql_player);
         $sql_user = "SELECT * FROM account WHERE user='$_user'";
        $result_user = $config->query($sql_user);
        if ($result_user->num_rows > 0) {
           
        if ($result_player->num_rows > 0) {
            $row_player = $result_player->fetch_assoc();
            $body = json_decode($row_player['body'], true);
                $xathu = json_encode([0, 11, 6]);
                $chienbinh = json_encode([0, 8, 0]);
                $satthu = json_encode([0, 9, 1]); 
                $phapsu = json_encode([0, 8, 0]);;
                $updated_body = '';
                $clazz = '';
                $trucoin = 50000;
                if($_coin >= 50000){
                    
if ($class == 3) {
    $updated_body = $xathu;  // Giá trị mảng tương ứng với xathu
    $clazz = 3;
} elseif ($class == 1) {
    $updated_body = $satthu;  // Giá trị mảng tương ứng với satthu
    $clazz = 1;
} elseif ($class == 0) {
    $updated_body =  $chienbinh; // Giá trị mảng tương ứng với chienbinh
    $clazz = 0;
} else {
    $updated_body = $phapsu;  // Giá trị mảng tương ứng với phapsu (mặc định)
    $clazz = 2;
}
                
               $sql_update_coin = $config->prepare("UPDATE account SET coin = coin - ? WHERE user = ?");
                $sql_update_coin->bind_param("is", $trucoin, $_user);
                if ($sql_update_coin->execute()) {
                // Sử dụng prepared statement để cập nhật thông tin người dùng
                $sql_update_class = $config->prepare("UPDATE player SET body=?, clazz=? WHERE name=?");
                $sql_update_class->bind_param("sis", $updated_body, $clazz, $name);
                
                // Thực hiện cập nhật
                if ($sql_update_class ->execute()) {
                    $thongbao = '<div class="alert alert-success" role="alert">
                        Đổi phái thành công!
                    </div>';
   
}else {
                    $thongbao = '<div class="alert alert-danger" role="alert">
                                    Cập nhật player thất bại!
                                </div>';
                }

                $sql_update_class->close();
                }else{
                      $thongbao = '<div class="alert alert-danger" role="alert">
                                    Cập nhật coin thất bại!
                                </div>';
                }
           $sql_update_coin->close();
        }else {
            $thongbao = '<div class="alert alert-danger" role="alert">
                            Thất bại, không đủ coin!
                        </div>';
        } 
        
        }else {
            $thongbao = '<div class="alert alert-danger" role="alert">
                            Thất bại, không tìm thấy tên nhân vật!
                        </div>';
        }
        
        } else {
            $thongbao = '<div class="alert alert-danger" role="alert">
                            Thất bại, không tìm thấy thông tin tài khoản!
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
		   
		   
   
<h2><b>Đổi phái</b></h2>
<br>
<div class="note">
<p style="color:red;"> Lưu ý: Thoát game trước khi đổi class để tránh bị lỗi</p><br>
</div><br>
<form action="" method="POST" id="info_form">
  
<?php echo $thongbao; ?><br>
    <label for="name">Tên nhân vật:</label>
    <select name="name" id="name" required>
     
       
        <option value="<?php echo $_player; ?>"><?php echo $_player; ?></option>
        
    </select><br><br>
     <label>Class muốn chuyển:</label>
     
    <select name="phai" id=""class"phai" required>
     
       
        <option value="3">Xạ thủ 50k coin</option>
        <option value="1">Sát thủ 50k coin</option>
        <option value="0">Chiến binh 50k coin</option>
        <option value="2">Pháp sư 50k coin</option>
    </select><br><br>
    
    <button type="submit" id="btn_buy">Mua</button><br><br>
  
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
