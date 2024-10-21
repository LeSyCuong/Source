<?php 
include '../config/head.php'; 

$_title = "Hiệp Sĩ Làng Đá - Đổi Mật Khẩu";
$thongbao = null;

if ($_login != null || $_login2 != null) {
    if (isset($_POST['username'])) {
        if($_login != null){
        $username = isset_sql($_POST['username']);
        $old_password = isset_sql($_POST['old_password']);
        $new_password = isset_sql($_POST['new_password']);
        $re_password = isset_sql($_POST['re_password']);
        
        // Kiểm tra mật khẩu mới có ít nhất 5 ký tự
        if (strlen($new_password) >= 5) {
            if ($new_password == $re_password) {
                // Kiểm tra mật khẩu cũ có đúng không
                $read = _select("*", 'account', "user='$username'");
                $account = _fetch($read);
                
                if ($account && $account['pass'] == $old_password) {
                    // Thực hiện đổi mật khẩu nếu mật khẩu cũ đúng
                    $update_query = _update('account', "pass='$new_password'", "user='$username'");
                    $update_result = _query($update_query);
                    
                    if ($update_result) {
                        $thongbao = '<div class="alert alert-success" role="alert">
                                        Đổi mật khẩu thành công!
                                     </div>';
                    } else {
                        $thongbao = '<div class="alert alert-danger" role="alert">
                                        Đổi mật khẩu thất bại. Vui lòng thử lại sau!
                                     </div>';
                    }
                } else {
                    $thongbao = '<div class="alert alert-danger" role="alert">
                                    Mật khẩu cũ không chính xác!
                                 </div>';
                }
            } else {
                $thongbao = '<div class="alert alert-danger" role="alert">
                                Hai mật khẩu mới không khớp nhau,<br><br> vui lòng kiểm tra lại!
                             </div>';
            }
        } else {
            $thongbao = '<div class="alert alert-danger" role="alert">
                            Mật khẩu mới phải có ít nhất 5 ký tự!
                         </div>';
        }
    }elseif($_login2 != null){
        $username = isset_sql2($_POST['username']);
        $old_password = isset_sql2($_POST['old_password']);
        $new_password = isset_sql2($_POST['new_password']);
        $re_password = isset_sql2($_POST['re_password']);
        
        // Kiểm tra mật khẩu mới có ít nhất 5 ký tự
        if (strlen($new_password) >= 5) {
            if ($new_password == $re_password) {
                // Kiểm tra mật khẩu cũ có đúng không
                $read = _select("*", 'account', "user='$username'");
                $account = _fetch2($read);
                
                if ($account && $account['pass'] == $old_password) {
                    // Thực hiện đổi mật khẩu nếu mật khẩu cũ đúng
                    $update_query = _update('account', "pass='$new_password'", "user='$username'");
                    $update_result = _query2($update_query);
                    
                    if ($update_result) {
                        $thongbao = '<div class="alert alert-success" role="alert">
                                        Đổi mật khẩu thành công!
                                     </div>';
                    } else {
                        $thongbao = '<div class="alert alert-danger" role="alert">
                                        Đổi mật khẩu thất bại. Vui lòng thử lại sau!
                                     </div>';
                    }
                } else {
                    $thongbao = '<div class="alert alert-danger" role="alert">
                                    Mật khẩu cũ không chính xác!
                                 </div>';
                }
            } else {
                $thongbao = '<div class="alert alert-danger" role="alert">
                                Hai mật khẩu mới không khớp nhau,<br><br> vui lòng kiểm tra lại!
                             </div>';
            }
        } else {
            $thongbao = '<div class="alert alert-danger" role="alert">
                            Mật khẩu mới phải có ít nhất 5 ký tự!
                         </div>';
        }
    }else{
        echo 'Không tìm thấy tài khoản!';
    }
    }
} else {
    header('location:/');
}
?>

	<link
      href="../main/style.css"
      rel="stylesheet"
    />
  
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
              <div class="container">
    <h2>Đổi mật khẩu</h2>
    <?php echo $thongbao; ?><br>
    <form method="post">
        <div class="form-group">
            <label>Tên đăng nhập</label>
            <input type="text" class="form-control" placeholder="Tên đăng nhập" required="" name="username" value="<?php echo $_username; ?>" readonly>
        </div>
        <div class="form-group">
            <label>Mật khẩu cũ</label>
            <input type="password" class="form-control" placeholder="Mật khẩu cũ" required="" name="old_password">
        </div>    
        <div class="form-group">
            <label>Mật khẩu mới</label>
            <input type="password" class="form-control" placeholder="Mật khẩu mới" required="" name="new_password">
        </div>
        <div class="form-group">
            <label>Xác nhận mật khẩu mới</label>
            <input type="password" class="form-control" placeholder="Xác nhận mật khẩu mới" required="" name="re_password">
        </div>
        <div class="form-group">
            <button type="submit">Đổi mật khẩu</button>
        </div>
    </form>
    
</div>
           
            </div>
          </section>
         <br><br>
<?php include '../config/foot.php'; ?>
