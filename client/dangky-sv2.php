<?php
// Include the config file to establish a connection
require '../config/head.php';

$thongbao = ""; // Initialize the notification variable

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $username = isset_sql(trim($_POST['username']));
    $password = isset_sql(trim($_POST['password']));
    $confirm_password = isset_sql(trim($_POST['confirm_password']));

    // Validate the input
    if (empty($username) || empty($password) || empty($confirm_password)) {
        $thongbao = "<span style='color: red;'>Vui lòng điền đầy đủ thông tin.</span>";
    } elseif ($password !== $confirm_password) {
        $thongbao = "<span style='color: red;'>Mật khẩu nhập lại không khớp.</span>";
    } else {
        // Check if username already exists
        $existing_user = _fetch("SELECT * FROM account WHERE user='$username'");
        if ($existing_user) {
            $thongbao = "<span style='color: red;'>Tên người dùng đã tồn tại.</span>";
        } else {
            // If no errors, insert the new user into the database
            $insert_query = _insert('account', 'user, pass', "'$username', '$password'");

            if (_query($insert_query)) {
                $thongbao = "<span style='color: green;'>Đăng ký thành công.</span>";
            } else {
                $thongbao = "<span style='color: red;'>Đã xảy ra lỗi: " . $config->error . "</span>";
            }
        }
    }
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
              <div>
            
            <div class="container">
                <h2>Đăng ký tài khoản</h2>
                <?php echo $thongbao; ?><br><br>
                <form method="post">
                    <div class="form-group">
                        <label>Tên đăng nhập</label>
                        <input type="text" id="username" name="username" required>
                    </div>    
                    <div class="form-group">
                        <label>Mật khẩu</label>
                         <input type="password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label>Xác nhận mật khẩu</label>
                         <input type="password" id="confirm_password" name="confirm_password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit">Đăng ký</button>
                    </div>
                </form>
				 <div class="form-group">
                            <p>Nếu đã có tài khoản <a href="/dangnhap-sv2"><button type="button">Đăng nhập</button></a></p>
                        </div>
            </div>
       
              </div>
           
            </div>
          </section>
         <br><br>
<?php include '../config/foot.php'; ?>