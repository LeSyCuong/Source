<?php
include_once '../config/config.php';
if($_login == null) {header("location:/login");}
?>
<!DOCTYPE html>
<html lang="vi">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Vòng quay may mắn | Làng Nấm</title>
    <meta name="description" content="Vòng quay may mắn | Làng Nấm">
    <meta name="keywords" content="Vòng quay may mắn | Làng Nấm">
    <link href="https://langnam.online/images/logo-kn.png" rel="shortcut icon" type="image/x-icon">
    <link href="https://langnam.online/images/logo-kn.png" rel="icon" type="image/x-icon">
    <link rel="canonical" href="https://langnam.online/">
    <meta content="" name="author"/>
    <meta property="og:locale" content="vi_VN" /><meta property="og:type" content="product" /><meta property="og:image" content="https://dichvuhso.com/assets/images/banner.jpg" /><link rel="alternate" hreflang="x-default" href="https://dichvuhso.com/" /><meta property="og:url" content="https://dichvuhso.com/" /><meta property="og:title" content="Vòng quay may mắn | Shop Mua Bán Vàng,Ngọc Xanh,Úp Thuê,Nick Game Hiệp Sĩ Online-HSO,Ngọc Rồng Online-NRO,Njnja-NSO,Khí Phách Anh Hùng-KPAH Tự Động Giá Rẻ" /><meta property="og:description" content="Shop Mua Bán Vàng,Ngọc Xanh,Úp Thuê,Nick Game Hiệp Sĩ Online-HSO,Ngọc Rồng Online-NRO,Njnja-NSO,Khí Phách Anh Hùng-KPAH Tự Động Giá Rẻ"/>    <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport"/>
    
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
    <link href="https://dichvuhso.com/assets/frontend/theme/assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css"/>
    <link href="https://dichvuhso.com/assets/frontend/theme/assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css"/>
    <link href="https://dichvuhso.com//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="https://dichvuhso.com/assets/frontend/theme/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://dichvuhso.com/assets/frontend/theme/assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://dichvuhso.com/assets/frontend/theme/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN: BASE PLUGINS  -->
    <link href="https://dichvuhso.com/assets/frontend/theme/assets/global/plugins/magnific/magnific.css" rel="stylesheet" type="text/css"/>
    <link href="https://dichvuhso.com/assets/frontend/theme/assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://dichvuhso.com/assets/frontend/theme/assets/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css"/>
    <link href="https://dichvuhso.com/assets/frontend/theme/assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
    <!-- END: BASE PLUGINS -->
    <!-- BEGIN: PAGE STYLES -->
    <link href="https://dichvuhso.com/assets/frontend/theme/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://dichvuhso.com/assets/frontend/theme/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://dichvuhso.com/assets/frontend/theme/assets/plugins/bootstrap-datepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://dichvuhso.com/assets/frontend/theme/assets/plugins/bootstrap-datepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css"/>
    <!-- END: PAGE STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link href="https://dichvuhso.com/assets/frontend/theme/assets/demos/default/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="https://dichvuhso.com/assets/frontend/theme/assets/demos/default/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="https://dichvuhso.com/assets/frontend/theme/assets/demos/default/css/default.css" rel="stylesheet" id="style_theme" type="text/css"/>
    <link href="https://dichvuhso.com/assets/frontend/theme/assets/demos/default/css/custom.css" rel="stylesheet" type="text/css"/>
    <link href="https://dichvuhso.com/assets/frontend/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="https://dichvuhso.com/assets/frontend/plugins/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="https://dichvuhso.com/assets/frontend/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="https://dichvuhso.com/assets/frontend/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="https://dichvuhso.com/assets/frontend/css/more.css" rel="stylesheet" type="text/css"/>

    <script src="https://dichvuhso.com/assets/frontend/plugins/jquery/jquery-2.1.0.min.js"></script>
    <script src="https://dichvuhso.com/assets/js/jquery.validate.js"></script>
    <script src="https://dichvuhso.com/assets/frontend/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://dichvuhso.com/assets/frontend/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="https://dichvuhso.com/assets/frontend/plugins/owl-carousel/slider.js"></script>
    <script src="https://dichvuhso.com/assets/frontend/plugins/jquery-cookie/jquery.cookie.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://dichvuhso.com/assets/frontend/css/junoo.css?linh=32784467746" rel="stylesheet" type="text/css"/>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-topbar c-layout-header-topbar-collapse">
<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: HEADER -->
<header class="c-layout-header c-layout-header-4 c-layout-header-default-mobile" data-minimize-offset="80">
   
    <div class="c-navbar">
        <div class="container">
            <!-- BEGIN: BRAND -->
            <div class="c-navbar-wrapper clearfix">
                <div class="c-brand c-pull-left">
                    <h1 style="margin: 0px;display: inline-block">
                        <a href="https://langnam.online/" class="c-logo" alt="Làng Nấm...">
                            <img height="55px" src="https://langnam.online/images/logo-kn.png" alt="Vòng quay may mắn | Làng Nấm" class="c-desktop-logo">
                            <img height="40px" src="https://langnam.online/images/logo-kn.png" alt="Vòng quay may mắn | Làng Nấm" class="c-desktop-logo-inverse">
                            <img height="26px" src="https://langnam.online/images/logo-kn.png" alt="Vòng quay may mắn | Làng Nấm" class="c-mobile-logo"> </a>
                    </h1>
                    <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                        <span class="c-line"></span>
                        <span class="c-line"></span>
                        <span class="c-line"></span>
                    </button>
                    <button class="c-topbar-toggler" type="button">
                        <i class="fa fa-ellipsis-v"></i>
                    </button>
                </div>
                <!-- END: BRAND -->
                <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
                <!-- BEGIN: MEGA MENU -->
                <!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
                <style>
                    .c-menu-type-mega:hover {
                        transition-delay: 1s;
                    }

                    .c-layout-header.c-layout-header-4 .c-navbar .c-mega-menu > .nav.navbar-nav > li:focus > a:not(.btn), .c-layout-header.c-layout-header-4 .c-navbar .c-mega-menu > .nav.navbar-nav > li:active > a:not(.btn), .c-layout-header.c-layout-header-4 .c-navbar .c-mega-menu > .nav.navbar-nav > li:hover > a:not(.btn) {
                        color: #3a3f45;
                        background: #FAFAFA;
                    }
                </style>
                <!-- BEGIN: HOR NAV -->
                <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
                    <ul class="nav navbar-nav c-theme-nav">
                        <li class="c-menu-type-classic">
                            <a rel="" href="https://langnam.online/" class="c-link dropdown-toggle ">Trang chủ</a>
                        </li>
                        <li class="c-menu-type-classic">
                            <a rel="" href="https://langnam.online/vongquay" class="c-link dropdown-toggle ">Mua lượt quay</a>
                        </li>
                        <li class="c-menu-type-classic">
                            <a rel="" href="https://langnam.online/vongquay/giohang.php" class="c-link dropdown-toggle ">Lịch sử vòng quay may mắn</a>
                        </li>
                        <li class="c-menu-type-classic">
                            <a class="c-link dropdown-toggle c-toggler" href="javascript:;">
                                Danh mục game<span class="c-arrow c-toggler"></span>
                            </a>
                            <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                 <li>
                                    <a href="https://langnam.online/webshop">
                                        Mua đồ
                                    </a>
                                </li>
                                <li>
                                    <a href="https://langnam.online/bangtop">
                                       Bảng top
                                    </a>
                                </li>
                                <li>
                                    <a href="https://langnam.online/sukienl">
                                        Sự kiện
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                    <li class="c-menu-type-classic">
                                <a class="c-link dropdown-toggle" href="https://langnam.online/napatm">
                                    Nạp coin
                                </a>
                                </li>
                              <li>
                            <a href="https://langnam.online/profile" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold">
                            <?php echo $_user; ?> - $ <?php echo $_coin; ?> coin</a>
                        </li>
                        
                                            </ul>
                </nav>
	<nav class="menu-main-mobile c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold hidden-md hidden-lg">
				    <ul  class="nav navbar-nav c-theme-nav">
				       <li class="c-menu-type-classic">
                            <a rel="" href="https://langnam.online/" class="c-link dropdown-toggle ">Trang chủ</a>
                        </li>
                        <li class="c-menu-type-classic">
                            <a rel="" href="https://langnam.online/vongquay" class="c-link dropdown-toggle ">Mua lượt quay</a>
                        </li>
                        <li class="c-menu-type-classic">
                            <a rel="" href="https://langnam.online/vongquay/giohang.php" class="c-link dropdown-toggle ">Nhận đồ vòng quay may mắn</a>
                        </li>
                        <li class="c-menu-type-classic">
                            <a class="c-link dropdown-toggle c-toggler" href="javascript:;">
                                Danh mục game<span class="c-arrow c-toggler"></span>
                            </a>
                            <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                 <li>
                                    <a href="https://langnam.online/webshop">
                                        Mua đồ
                                    </a>
                                </li>
                                <li>
                                    <a href="https://langnam.online/bangtop">
                                       Bảng top
                                    </a>
                                </li>
                                <li>
                                    <a href="https://langnam.online/sukienl">
                                        Sự kiện
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                    <li class="c-menu-type-classic">
                                <a class="c-link dropdown-toggle"  href="https://langnam.online/napatm">
                                    Nạp coin
                                </a>
                               </li>                       
                        
                        <li>
				            <a href="https://langnam.online/profile" title="0865811722" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold">
                       <?php echo $_user; ?> - $ <?php echo $_coin; ?> coin</a> </li>
				      
                                            </ul>
                </nav>
			</div>
		
                <!-- END: MEGA MENU -->
                <!-- END: LAYOUT/HEADERS/MEGA-MENU -->
                <!-- END: HOR NAV -->
            </div>
        </div>
    </div>
</header>
<!-- END: HEADER -->
<!-- END: LAYOUT/HEADERS/HEADER-1 --><div class="c-layout-page">
    <!-- BEGIN: PAGE CONTENT -->
    <link href="https://dichvuhso.com//fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all" rel="stylesheet" type="text/css">
    <link href="https://dichvuhso.com/assets/frontend/vongquay/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://dichvuhso.com/assets/frontend/vongquay/css/components.css" id="style_components" rel="stylesheet" type="text/css">
    <link href="https://dichvuhso.com/assets/frontend/vongquay/css/style.css" rel="stylesheet" type="text/css">
<div class="c-content-title-1 pd50">
    <h3 class="c-center c-font-uppercase c-font-bold">Vòng quay may mắn cao cấp 20k</h3>
    <div class="c-line-center c-theme-bg"></div>
</div>


  
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
     
      <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Francois+One&amp;display=swap'>
      <link rel='stylesheet' href='css/sweetalert.css'>
      <link rel='stylesheet' href='css/custom.css'>
      <script type="text/javascript" src="js/Winwheel.min.js"></script>
      <script type="text/javascript" src="js/TweenMax.min.js"></script>
      <script src='js/sweetalert-dev.js'></script>
      <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> 
      <style>
          body {
  background-color: #f3f2ef; /* Màu nền */
  
}
      </style>
   </head>
   
<div class="pyro">
  <div class="before" style="z-index: 9999"></div>
  <div class="after"></div>
</div>
   <body onload="nhappass()">
       <!--
      <div class="topheader">
         <img class="responsive" style="z-index:99;top:50px;" src="img/hea2.png"/>
      </div>
-->
  
      <div style="display: inline-block; color:black; text-align: center; width: 100%;">
          Lượt quay: 
          <span id="xuatluotquay" >
     <?php echo $_luotquay_20k; ?>
</span></div>
<br><br>
      <div id="caidat">
      <img id="popup"src="img/popup.jpg"/>
      <div class="sotiendalixi" id="sotiendalixi"></div>
      <div class="lichsulixi" id="lichsulixi"></div>
      <div class="buttontatpopup" onClick="tatpopup()" ></div>
      <div class="buttonlammoi" id="lammoi" onClick="trangchu()"></div>
      <div class="nenpopup"></div>
      </div>

      <div id="popupnhantien">
      <img id="popuptien"src="img/popupnhantien.png"/>
      <div class="sotienpopupnhantien" id="sotienpopupnhantien"><img id="xuatsotienpopup"></img></div>
      <div class="lammoipopupnhantien" id="lammoi" onClick="trangchu()"></div>
      <div class="nenpopup"></div>
      </div>

      <div class="vongquay">
         <canvas id="canvas" width="450" height="450" data-responsiveMinWidth="180" data-responsiveScaleHeight="true" data-responsiveMargin="50">
         </canvas>
         <div id="batdauquay" class="nutbatdau"></div>
         <div onClick="startSpin();" class="nutquay"></div>
      </div>
   
     
      <div id="annhantien" style="display: none;">
    
      </div>

      <img style="position:fixed;z-index:999;top:105px;left:9px" id="xuatsotien"></img>
      <br>
<a href="https://langnam.online/vongquay/giohang.php">
    <div style="display: inline-block; color: black; text-align: center; width: 100%;">
        <button>Xem lịch sử vòng quay</button>
    </div>
</a>

<br>
         <br>                   
      <audio id="votay"><source src="sound/votay.mp3" type="audio/mpeg"></audio>
      <audio id="matluot"><source src="sound/matluot.mp3" type="audio/mpeg"></audio>
      <audio id="dangquay"><source src="sound/dangquay.mp3" type="audio/mpeg"></audio>
       
   </body>
<script>
    var matkhau = "";
    var solanquay = <?php echo $_luotquay_20k ?>;
      // Sau khi load trang sẽ yêu cầu nhập mật khẩu


function mopopup() {
  document.getElementById("caidat").style.display = "block";
}

function tatpopup() {
  document.getElementById("caidat").style.display = "none";
}

$( ".buttontatpopup" ).hover(
  function() {
    $("#popup").attr("src",'img/popup2.jpg');
  }, function() {
    $("#popup").attr("src",'img/popup.jpg');
  }
);
$( ".buttonlammoi" ).hover(
  function() {
    $("#popup").attr("src",'img/popup1.png');
  }, function() {
    $("#popup").attr("src",'img/popup.jpg');
  }
);
$( ".buttonnhantien" ).hover(
  function() {
    $(".buttonnhantien").attr("src",'img/nhantienhover.png');
  }, function() {
    $(".buttonnhantien").attr("src",'img/nhantien.png');
  }
);
$( ".lammoipopupnhantien" ).hover(
  function() {
    $("#popuptien").attr("src",'img/popupnhantienhover.png');
  }, function() {
    $("#popuptien").attr("src",'img/popupnhantien.png');
  }
);
     let theWheel = new Winwheel({
    'outerRadius': 220, // Bán kính ngoài
    'innerRadius': 0, // Size lỗ trung tâm
    'textFontSize': 24, // Size chữ
    'textOrientation': 'horizontal', // Chữ nằm ngang
    'textAlignment': 'outer', // Căn chỉnh văn bản ra bên ngoài bánh xe.
    'numSegments': 8, // Số ô
    'responsive': true,
    'segments': [{
        'fillStyle': '#910f06',
        'text': 'Ô mất lượt',
        'size': winwheelPercentToDegrees(10),
        'textFontSize': 15,
        'textFillStyle': '#ffffff',
        'image': 'img/lose.png' // Hình ảnh cho ô mất lượt
    }, {
        'fillStyle': '#ab6f03',
        'text': 'Tóc thời trang 40%',
        'size': winwheelPercentToDegrees(7),
        'textFontSize': 15,
        'textFillStyle': '#ffffff',
        'image': 'img/1000.png' // Hình ảnh cho 1.000 VNĐ
    }, {
        'fillStyle': '#910f06',
        'text': '10 NLMD vàng cấp 3',
        'size': winwheelPercentToDegrees(20),
        'textFontSize': 15,
        'textFillStyle': '#ffffff',
        'image': 'img/2000.png' // Hình ảnh cho 2.000 VNĐ
    }, {
        'fillStyle': '#ab6f03',
        'text': 'Khẩu trang 40%',
        'size': winwheelPercentToDegrees(7),
        'textFontSize': 15,
        'textFillStyle': '#ffffff',
        'image': 'img/5000.png' // Hình ảnh cho 5.000 VNĐ
    }, {
        'fillStyle': '#910f06',
        'text': '10 NLMD tím cấp 3',
        'size': winwheelPercentToDegrees(15),
        'textFontSize': 15,
        'textFillStyle': '#ffffff',
        'image': 'img/10000.png' // Hình ảnh cho 10.000 VNĐ
    }, {
        'fillStyle': '#ab6f03',
        'text': '10 NLMD vàng cấp 3',
        'size': winwheelPercentToDegrees(19),
        'textFontSize': 15,
        'textFillStyle': '#ffffff',
        'image': 'img/20000.png' // Hình ảnh cho 20.000 VNĐ
    }, {
        'fillStyle': '#910f06',
        'text': 'Tai nghe 40% dame',
        'size': winwheelPercentToDegrees(7),
        'textFontSize': 15,
        'textFillStyle': '#ffffff',
        'image': 'img/50000.png' // Hình ảnh cho 50.000 VNĐ
    }, {
        'fillStyle': '#ab6f03',
        'text': '10 NLMD tím cấp 3',
        'size': winwheelPercentToDegrees(15),
        'textFontSize': 15,
        'textFillStyle': '#ffffff',
        'image': 'img/100000.png' // Hình ảnh cho 100.000 VNĐ
    }],
    'animation': // Chỉ định hình động để sử dụng.
    {
        'type': 'spinToStop',
        'duration': 20, // Thời lượng tính bằng giây.
        'spins': 10, // Số vòng quay hoàn chỉnh mặc định.
        'callbackFinished': alertPrize,
        'callbackSound': playSound, // Chức năng gọi khi âm thanh đánh dấu được kích hoạt.
        'soundTrigger': 'pin', // Chỉ định các chân là để kích hoạt âm thanh, tùy chọn khác là 'phân đoạn'.
        'type': 'spinToStop',
        'duration': 6.4,
    },
    'pins': {
        'number': 8, // Số lượng chân. Họ không gian đều xung quanh bánh xe.
        'responsive': true,
        'fillStyle': 'silver',
        'outerRadius': 4,
    }
});

      
      // Vars được sử dụng bởi mã trong trang này để thực hiện các điều khiển nguồn.
      let wheelPower = 13;
      let wheelSpinning = false;
      // ---------------------------------------------------------------------
      // Tải âm thanh đánh dấu và chức năng phát được gọi khi pin đi qua con trỏ.
      let audio = new Audio('http://dougtesting.net//elements/sound/tick.mp3'); // Tạo đối tượng âm thanh và tải tập tin tick.mp3.
      
      var dem = 0;
      var demnhantien = 0; // Đếm số lần click vào nút nhận tiền
      var lichsulixi = "";
      var tongtienlixi = 0;
      var tiendalixi;
      var votay = document.getElementById("votay");
      var matluot = document.getElementById("matluot");
      var dangquay = document.getElementById("dangquay");
      
      function playSound() {
          // Dừng và tua lại âm thanh nếu nó đã phát.
          audio.pause();
          audio.currentTime = 0;
      
          // Phát âm thanh.
          audio.play();
      }
      
      // -------------------------------------------------------
      // Xử lý thanh range
      // -------------------------------------------------------
      function laypower() {
          wheelPower = document.getElementById("manhornhe").value; // Lấy dữ liệu thanh range
      }
      
      // -------------------------------------------------------
      // Sau khi nhấp vào nút quay
      // -------------------------------------------------------
       function startSpin() {
        if (solanquay > 0) {  // Kiểm tra nếu còn lượt quay
            if (wheelSpinning == false) {
                theWheel.animation.spins = wheelPower;

                $(".nutbatdau").css("background-image", "url(img/controtat.png)");
                theWheel.startAnimation();

                wheelSpinning = true;
                
                // Gửi yêu cầu AJAX cập nhật lượt quay về server
                 // Trừ 1 lượt quay
                  $.ajax({
                url: 'update_luotquay_20k.php',
                type: 'POST',
                data: {solanquay: solanquay},
                success: function(response) {
                    solanquay--; // Giảm số lượt quay sau khi gửi yêu cầu
                    document.getElementById("xuatluotquay").innerHTML = solanquay; // Cập nhật hiển thị lượt quay
                    console.log(response);  // Kiểm tra phản hồi từ server
                },
                error: function(error) {
                    console.error("Lỗi khi cập nhật lượt quay: ", error);
                }
            });
            }
        } else {
            swal("Hết lượt!", "Bạn đã hết lượt quay!", "error");
        }
    }
      function trangchu() {
    window.location.href = "/"; // Chuyển hướng đến trang /trangchu
}

    

      // -------------------------------------------------------
      // Sau khi vòng quay quay xong
      // -------------------------------------------------------
     function alertPrize(indicatedSegment) {
    dem--;
    tiendalixi = indicatedSegment.text.replace(".000 VNĐ", "");

     if ( solanquay > 0) {
        theWheel.rotationAngle = 0;
        theWheel.draw();
        wheelSpinning = false;
        $(".nutbatdau").css("background-image", "url(img/contro.png)");
        if (indicatedSegment.text == 'Ô mất lượt') {
            matluot.play();
            swal("Rất tiếc!", "Bạn không nhận được món đồ nào, cố gắng lên nào!");
        } else {
            votay.play();
            swal("Ngon ngay!", "Bạn nhận được " + indicatedSegment.text + " hãy vào lịch sử vòng quay để lấy đồ.");

            // Gửi dữ liệu phần thưởng về server thông qua AJAX
            
            $.ajax({
                url: 'add_item.php', // Tạo file PHP này để xử lý thêm vật phẩm
                type: 'POST',
                data: {
                    user: "<?php echo $_user; ?>", // Dữ liệu người dùng (PHP sẽ tạo biến này trước khi render ra HTML)
                    item: indicatedSegment.text,
                    vongquay: "20k"// Tên vật phẩm quay trúng
                },
                success: function(response) {
                    console.log(response); // Hiển thị phản hồi từ server
                },
                error: function(error) {
                    console.error("Lỗi khi thêm vật phẩm vào giỏ hàng: ", error);
                }
            });
        }
    } else { 
        $(".nutbatdau").css("background-image", "url(img/controhetluot.png)");

        if (indicatedSegment.text == 'Ô mất lượt') {
            matluot.play(); // Bật nhạc fail

            document.getElementById("annhantien").style.display = "none"; // Ẩn nút nhận tiền
            document.getElementById("xuatsotien").src = ""; // Xoá ảnh tiền

            swal("Rất tiếc!", "Bạn không nhận được đồng nào và số lượt quay đã hết!", "error");
        } else {
            votay.play(); // Bật nhạc vỗ tay

            document.getElementById("annhantien").style.display = ""; // Hiển thị nút nhận tiền
            document.getElementById("xuatsotien").src = "img/" + indicatedSegment.text.replace(".000 VNĐ", "") + "k.jpg"; // Xuất ảnh tiền

            swal("Tết ấm no!", "Bạn nhận được " + indicatedSegment.text + "\nBạn đã hết lượt quay", "success");
        }
    }
}

   </script>
  
  
  
    <style type="text/css">
        #start-played1{
            cursor: pointer;
        }
        .c-content-client-logos-slider-1 .item{
            width: 85%;
        }
    </style>

</div>  
<!-- END: PAGE CONTENT -->
</div>
</div>

<div class="modal fade" id="LoadModal" role="dialog" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        </div>
    </div>
</div>
<!-- END: PAGE CONTAINER -->
<a name="footer"></a>
<footer class="c-layout-footer c-layout-footer-3 c-bg-dark">
    <div class="c-prefooter">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="c-container c-first">
                        <div class="c-content-title-1">
                            <h3 class="c-font-uppercase c-font-bold c-font-white">Về <span class="c-theme-font">LANGNAM.ONLINE</span></h3>
                            <div class="c-line-left hide"></div>
                            <p class="c-text">
                                Dịch vụ trò chơi điện tử online.</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="c-container c-last">
                        <div class="c-content-title-1">
                            <h3 class="c-font-uppercase c-font-bold c-font-white">Chúng tôi ở đây</h3>
                            <div class="c-line-left hide"></div>
                            <p>Chúng tôi làm việc một cách chuyên nghiệp, uy tín, nhanh chóng và luôn đặt quyền lợi của bạn lên hàng đầu</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="fb-root"></div>
                    <script>(function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id))
                                return;
                            js = d.createElement(s);
                            js.id = id;
                            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                    <div class="fb-page" data-href="" data-tabs="timeline" data-height="270" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="" class="fb-xfbml-parse-ignore"><a href="">hop Liên Quân</a></blockquote></div>
                </div>
            </div>
        </div>
    </div>
    <div class="c-postfooter" style="margin-top: -70px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 c-col">
                    <p class="c-copyright c-font-grey">2024 &copy; LANGNAM.ONLINE | <span class="c-font-grey-3">Dev by <a href="https://vietcod.com" class="active">VIETCOD</a></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer><!-- END: LAYOUT/FOOTERS/FOOTER-5 -->
<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
<div class="c-layout-go2top">
    <i class="icon-arrow-up"></i>
</div>
<!-- END: LAYOUT/FOOTERS/GO2TOP -->
<!-- BEGIN: LAYOUT/BASE/BOTTOM -->
<!-- BEGIN: CORE PLUGINS -->
<script src="https://dichvuhso.com/assets/frontend/theme/assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="https://dichvuhso.com/assets/frontend/theme/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://dichvuhso.com/assets/frontend/theme/assets/plugins/jquery.easing.min.js" type="text/javascript"></script>
<script src="https://dichvuhso.com/assets/frontend/theme/assets/plugins/reveal-animate/wow.js" type="text/javascript"></script>
<script src="https://dichvuhso.com/assets/frontend/theme/assets/demos/default/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript"></script>
<!-- END: CORE PLUGINS -->
<!-- BEGIN: LAYOUT PLUGINS -->
<script src="https://dichvuhso.com/assets/frontend/theme/assets/global/plugins/magnific/magnific.js" type="text/javascript"></script>
<script src="https://dichvuhso.com/assets/frontend/theme/assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
<script src="https://dichvuhso.com/assets/frontend/theme/assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
<script src="https://dichvuhso.com/assets/frontend/theme/assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="https://dichvuhso.com/assets/frontend/theme/assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="https://dichvuhso.com/assets/frontend/theme/assets/plugins/smooth-scroll/jquery.smooth-scroll.js" type="text/javascript"></script>
<script src="https://dichvuhso.com/assets/frontend/theme/assets/plugins/js-cookie/js.cookie.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<!-- END: LAYOUT PLUGINS -->
<!-- BEGIN: THEME SCRIPTS -->
<script src="https://dichvuhso.com/assets/frontend/theme/assets/base/js/components.js" type="text/javascript"></script>
<script src="https://dichvuhso.com/assets/frontend/theme/assets/base/js/app.js" type="text/javascript"></script>
<script src="https://dichvuhso.com/assets/frontend/plugins/bootbox.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        $('.load-modal').each(function (index, elem) {
            $(elem).unbind().click(function (e) {
                e.preventDefault();
                e.preventDefault();
                var curModal = $('#LoadModal');
                curModal.find('.modal-content').html('<div class="loader" style="text-align: center"><img src="https://dichvuhso.com/assets/images/loader.gif" style="width: 50px;height: 50px;"></div>');
                curModal.modal('show').find('.modal-content').load($(elem).attr('rel'));
            });
        });
    });
     
</script>

<script>
    $(document).ready(function () {
        App.init(); // init core
    });
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
    $(".menu-main-mobile a").click(function() {

        if( $(this).closest("li").hasClass("c-open")){
            $(this).closest("li").removeClass("c-open");
        }
        else{
            $(this).closest("li").addClass("c-open");
        }
    });

</script>
<!-- END: THEME SCRIPTS -->
<!-- BEGIN: PAGE SCRIPTS -->
<script src="https://dichvuhso.com/assets/frontend/theme/assets/plugins/moment.min.js" type="text/javascript"></script>
<script src="https://dichvuhso.com/assets/frontend/theme/assets/plugins/bootstrap-datepicker/js/daterangepicker.min.js" type="text/javascript"></script>
<script src="https://dichvuhso.com/assets/frontend/theme/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<script src="https://dichvuhso.com/assets/frontend/theme/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="https://dichvuhso.com/assets/frontend/theme/assets/plugins/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="https://dichvuhso.com/assets/frontend/theme/assets/demos/default/js/scripts/pages/datepicker.js" type="text/javascript"></script>
<script src="https://dichvuhso.com/assets/frontend/plugins/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js" type="text/javascript"></script>
<script src="https://dichvuhso.com/assets/frontend/js/common.js" type="text/javascript"></script>
<!-- END: LAYOUT/BASE/BOTTOM -->

</body>
</html>