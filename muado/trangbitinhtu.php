
<?php
include '../config/head.php';

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
		   
		   
		   
<h2><b>Trang bị tinh tú Vip</b></h2>
<br>

<div class="note">
<p style="color:red;"> Nhắn tin Admin để mua đồ</p><br>
<p style="color:red;"> Zalo: 0848115303</p><br>
<p style="color:red;"> Ngân hàng: ACB</p><br>
<p style="color:red;"> Số tài khoản: 18106201</p><br>
</div><br>
<form action="canh-pt.php" method="POST" id="info_form">
    <label for="name">Giá mỗi món đồ:</label><br>
   <label for="name">Có thể nhờ admin giảm lv đồ xuống lv10 cho dễ dùng.</label><br><br>
    <label >Level 25: 25k<br><br>
	Level 50: 50k<br><br>
	Level 75: 75k<br><br>
	Level 100: 100k<br><br>
	level 125: 125k<br><br>
	Level 150: 150k<br><br>
	Level 175: 175k<br><br>
	Level 200: 200k<br><br>
	Level 225: 225k<br><br>
	Level 250: 250k<br><br>
	Level 275: 275k<br><br>
	Level 300: 300k<br><br>
	Level 350: 350k<br><br>
	Level 400: 400k<br><br>
	Level 500: 500k<br><br>
	</label>
   <br>
	 <label >Sau khi mua vẫn có thể nâng cấp tiếp, <br><br>giá nâng tương đương số level cần nâng<br><br>
	 Ví dụ nâng đồ level 50 lên 100 cần 50k<br><br>
	 Liên hệ admin để mua và nâng đô<br><br>
	 Zalo: 0848115303</label>
   <br><br>
    
   
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
