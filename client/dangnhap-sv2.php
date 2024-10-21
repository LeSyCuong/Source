<?php include '../config/head.php'; 

$_title = "Hiệp Sĩ Làng Nấm - Đăng Nhập" ;

$thongbao = null;
if ($_login == null) {
    if (isset($_POST['username'])) {
        $user = htmlspecialchars($_POST['username']);
        $pass = htmlspecialchars($_POST['password']);
        $select = _fetch(_select("*",'account',"user='$user'"));
		if ($select['user'] == $user) {
        if ($select['pass'] == $pass) {
            $_SESSION['user'] = $user;

            // Handle Remember Me functionality
            if (isset($_POST['remember'])) {
                // Set cookie to remember user for 30 days
                setcookie('remember_me', $user, time() + (30 * 24 * 60 * 60), '/');
            }

            header('location:/hso');
        } else {
             $thongbao = '<div class="alert alert-danger" role="alert">
                                  Mật khẩu không chính xác!
                                  </div>';
        }
    } else {
             $thongbao = '<div class="alert alert-danger" role="alert">
                                 Tên đăng nhập không tồn tại!!
                                  </div>';
	}}
} else {
    header("location:/hso");
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
         
            
            <section class="section section--2"> 
              
                <div>
                    <div class="container">
                        <h2>Đăng nhập</h2>
                        <?php echo $thongbao; ?><br>
                        <form method="post">
                            <div class="form-group">
                                <label>Tên đăng nhập</label>
                                <input type="text" class="form-control" placeholder="Tài khoản" required="" name="username">
                            </div>    
                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input type="password" class="form-control" placeholder="Mật khẩu" required="" name="password">
                            </div>
                            
                            <!-- Forgot Password Link -->
                            <div class="form-group">
                                <a href="#">Quên mật khẩu?</a>
                            </div>
                            
                            <div class="form-group">
                                <button type="submit">Đăng nhập</button>
                            </div>
                        </form>

                        <!-- Registration Button -->
                        <div class="form-group">
                            <p>Nếu chưa có tài khoản <a href="/dangky-sv2"><button type="button">Đăng ký</button></a></p>
                        </div>
                    </div>
                </div>
            </section>
        

           
            </div>
          </section>
         <br><br>
<?php include '../config/foot.php'; ?>