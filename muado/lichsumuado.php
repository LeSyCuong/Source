
<?php include '../config/head.php'; 
if($_login == null) {header("location:/login");}?>

  <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
        }
        h1 {
            color: #333;
        }
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f9f9f9;
            color: red;
            font-weight: bold;
            border-bottom: 2px solid red;
        }
        tr:nth-child(even) {
            background-color: #fff;
        }
        tr:hover {
            background-color: #ddd;
        }
        .center {
            text-align: center;
        }
        .message {
            font-size: 16px;
            color: #ff0000;
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

       <div class="container">
        <h1>Lịch Sử Mua Đồ</h1>
        <table>
            <thead>
                <tr>
                    <th >STT</th>
            <th >Tên Tài Khoản</th>
			<th >Tên Nhân Vật</th>
            <th >Tên Sản Phẩm</th>
            <th >Giá</th>
            <th >Thời Gian</th>
                </tr>
            </thead>
            <tbody>
                         <?php 
// Kiểm tra xem người dùng đã đăng nhập chưa
if(isset($_SESSION['user'])) {
    $user = $_SESSION['user'];

    // Truy vấn dữ liệu từ cơ sở dữ liệu chỉ hiển thị các hàng tương ứng với tên người dùng đang đăng nhập
    $query = $config->prepare("SELECT * FROM `lichsu` WHERE `user` = ? ORDER BY `id` DESC LIMIT 10");
    $query->bind_param("s", $user);
    $query->execute();
    $query->store_result(); // Lưu trữ kết quả để lấy số lượng dòng
    $query->bind_result($id, $user, $player, $sanpham, $gia, $thoigian); // Gán các trường trong kết quả

    if($query->num_rows > 0){ 
        while($query->fetch()){ // Lặp qua các dòng
            echo '
            <tr>
                <td>'.$id.'</td>
                <td>'.$user.'</td>
                <td>'.$player.'</td>
                <td>'.$sanpham.'</td>
                <td>'.$gia.'</td>
                <td>'.$thoigian.'</td>
            </tr>
            ';
        }
    } else {
        echo '
        <tr>
            <td colspan="6" align="center"><span class="btn btn-success" style="font-size:100%;color:white;"><< Lịch Sử Trống >></span></td>
        </tr>
        ';
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Bạn chưa đăng nhập']);
}
?>

            </tbody>
        </table>
    </div>
          </section>
<?php include '../config/foot.php'; ?>