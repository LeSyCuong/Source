<?php
include '../config/head.php';
$thongbao = null;
if($_login == null) {header("location:/login");}
if(isset($_SESSION['user']) ) {
    if(isset($_POST['luotquay'])) {
        $luotquay = $_POST['luotquay'];
        $trucoin = $luotquay * 50000; // Tính số coin cần trừ dựa trên số lượt quay
        $sql_check_coins = "SELECT coin FROM account WHERE user='$_user'";
        $result_check_coins = $config->query($sql_check_coins);

        if ($result_check_coins->num_rows > 0) {
            $row_coins = $result_check_coins->fetch_assoc();
            $user_coins = $row_coins['coin'];

            // Kiểm tra số dư tài khoản
            if ($user_coins >= $trucoin) {
                // Trừ tiền từ tài khoản và cộng lượt quay
                $sql_deduct_coins = $config->prepare("UPDATE account SET coin = coin - ?, luotquay_50k = luotquay_50k + ? WHERE user = ?");
                $sql_deduct_coins->bind_param("iis", $trucoin, $luotquay, $_user);

                if ($sql_deduct_coins->execute()) {
                    $thongbao = '<div class="alert alert-success" role="alert">Mua lượt quay thành công!</div>';
                } else {
                    $thongbao = '<div class="alert alert-danger" role="alert">Lỗi khi trừ tiền tài khoản!</div>';
                }
                $sql_deduct_coins->close();
            } else {
                $thongbao = '<div class="alert alert-danger" role="alert">Thất bại, không đủ coin!</div>';
            }
        } else {
            $thongbao = '<div class="alert alert-danger" role="alert">Thất bại, không tìm thấy thông tin tài khoản!</div>';
            $config->close();
        }
    }
} else {
    $thongbao = '<div class="alert alert-danger" role="alert">Bạn chưa đăng nhập, vui lòng đăng nhập!</div>';
    $config->close();
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
		   
		   
		   
<h2><b>Mua lượt quay VIP 50k</b></h2>
<br>

<form action="" method="POST" id="info_form">
<?php echo $thongbao; ?><br>
    <label for="luotquay">Số lượt quay muốn mua:</label>
    <input type="text" name="luotquay" id="luotquay" required><br><br>
  
   
    <button type="submit" id="btn_buy">Mua</button>
    <br> <br> <br>
    <a href="/vongquay"> <b>Quay lại trang vòng quay</b></a>
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
                        url: '/meday-xt',
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
<?php include '../config/foot.php'; ?>
