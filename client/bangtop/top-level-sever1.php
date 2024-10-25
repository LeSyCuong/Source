<?php
$_alert = null;
$_title = "Ninja TTS - TOP NAP";
include_once 'head.php';
include 'connect.php';
?>
<style>
    .my-table {
    max-width: 1000px; /* Đặt chiều rộng tối đa cho bảng */
    margin: 0 auto; /* Căn giữa bảng */
}

/* Làm cho tiêu đề cố định ở đầu bảng */
.blueTable thead th {
    position: sticky;
    top: 0;
    z-index: 1;
}
    .btn-primary {
        border-color: #f44336 !important;
        color: #fff !important;
    }

    .border-primary {
        border-color: #f44336 !important;
    }

    .bg-primary,
    .btn-primary {
        background-color: #f44336 !important;
    }

    .btn-outline-primary:hover {
        background-color: #f44336;
        border-color: #f44336;
    }

    .btn-outline-primary {
        color: #f44336;
        border-color: #f44336;
    }

    .feature-box {
        padding: 38px 30px;
        position: relative;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 0 29px 0 rgb(18 66 101 / 8%);
        transition: all 0.3s ease-in-out;
        border-radius: 8px;
        z-index: 1;
        width: 100%;
    }

    .feature-icon {
        font-size: 1.8em;
        margin-bottom: 1rem;
    }

    .feature-title {
        font-size: 1.2em;
        font-weight: 500;
        padding-bottom: 0.25rem;
        text-decoration: none;
        color: #212529;
    }

    .list-group-item.active {
        background-color: #007bff;
        border-color: #007bff;
    }

    a {
        text-decoration: none;
    }

    .nav-pills .nav-link.active, .nav-pills .show>.nav-link{
        background-color: #007bff;
    }

    .nav-link {
        color: #007bff;
    }

    .nav-link:focus, .nav-link:hover {
        color: #cd3a2f;
    }

</style>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="icon" href="/img/nro.png" type="img/png">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/all.min.css" />
<link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="http://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="assets/js/jquery.form.min.js"></script>
<script src="assets/js/clipboard.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/js/app3007.js?_=1668687090"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<section class="text-center container">
<h2 class="fw-light">Top Level Tài Khoản Mới</h2>
</section>
<main class="flex-grow-1 flex-shrink-1">
    </br>
    <div class="container py-3">
        <main>
            <div class="row">
<div class="col-md-3 pb-3 pt-2">
                    <div class="list-group d-none d-sm-block">
                        <a href="profile.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-user me-2"></i> Thông tin tài khoản
                        </a>
                        <a href="napcoin.php" class="list-group-item list-group-item-action">
                            <i class="fas fa-coins me-2"></i> Nạp coin
                        </a>
<a href="topchientruong.php" class="list-group-item list-group-item-actio">
                            <i class="fas fa-credit-card me-2"></i> Top Chiến Trường
                        </a>

                        <a href="top-nap.php" class="list-group-item list-group-item-action active">
                            <i class="fas fa-credit-card me-2"></i> Top Nạp
                        </a>
                        <a href="/?out" class="list-group-item list-group-item-action ">
                            <i class="fas fa-sign-out-alt me-2"></i> Đăng xuất
                        </a>

                    </div>
                </div>
<div class="col-md-9 pb-3 pt-2">
<div class="card-body">
<table class="table table-bordered blueTable my-table">
    <thead>
        <tr>
            <th class="text-danger">STT</th>  
            <th class="text-danger">Tên Tài Khoản</th>
            <th class="text-danger">Level</th>
        </tr>
    </thead>  
    <tbody>
    <?php 
include('connect.php');

$query = "
    SELECT 
        player.name AS user, 
        player.level AS level 
    FROM 
        player 
    INNER JOIN 
        account 
    ON 
        JSON_CONTAINS(account.char, CONCAT('\"', player.name, '\"')) 
    WHERE 
        account.baove = 1 
    ORDER BY 
        player.level DESC 
    LIMIT 10";

$result = $conn->query($query);
$stt = 1;

if ($result === false) {
    echo 'Lỗi truy vấn SQL: '.$conn->error;
} elseif ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <tr>
            <td>'.$stt.'</td>
            <td>'.$row['user'].'</td>
            <td>'.$row['level'].'</td>
        </tr>
        ';
        $stt++;
    }
} else {
    echo '
    <tr>
        <td colspan="3" align="center"><span style="font-size:100%;"><< Lịch Sử Trống >></span></td>
    </tr>
    ';
}
// Đóng kết nối
$conn->close();
?>


    </tbody>
</table>
</div>
</div>
</div>
    </div>
    </div>
<?php   
include_once('end.php');
?>
<script type="text/javascript">
  jQuery(document).ready(function () {
    jQuery('body').bind('cut copy paste', function (e) {
      e.preventDefault();
    });
    jQuery("body").on("contextmenu",function(e){
      return false;
    });
  });
  jQuery(document).keydown(function (event) {
    if (event.keyCode == 123) {
      return false;
    }
    if (event.ctrlKey && event.shiftKey && event.keyCode == 67) {
      return false;
    }
    if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {
      return false;
    }
  });
  document.onkeydown = function(e) {
    if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) {
      return false;
    } else {
      return true;
    }
  };
  jQuery(document).keypress("u",function(e) {
    if(e.ctrlKey) {
      return false;
    } else {
      return true;
    }
  });
  document.body.addEventListener('keydown', event => {
    if (event.ctrlKey && 'spa'.indexOf(event.key) !== -1) {
      event.preventDefault()
    }
  })
</script>
