
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
        <h1>Lịch Sử Vòng Quay</h1><br><br><br><br>
       <a  href ="https://langnam.online/vongquay"><button >Quay lại vòng quay</button></a> 
        <table>
            <thead>
                <tr>
                    <th >ID</th>
            <th >Tên Tài Khoản</th>
			<th >Tên Vật phẩm</th>
            <th >Loại Vòng Quay</th>
            <th >Trạng Thái</th>
            <th >Thời Gian</th>
           
                </tr>
            </thead>
            <tbody>
            <?php 
// Kiểm tra xem người dùng đã đăng nhập chưa
if(isset($_SESSION['user'])) {
    $user = $_SESSION['user'];

    // Lấy số trang hiện tại từ GET request, mặc định là trang 1
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $itemsPerPage = 10; // Số lượng sản phẩm hiển thị trên mỗi trang
    $offset = ($page - 1) * $itemsPerPage; // Tính offset

    // Truy vấn tổng số sản phẩm trong giỏ hàng của người dùng
    $countQuery = $config->prepare("SELECT COUNT(*) FROM `giohang` WHERE `user` = ?");
    $countQuery->bind_param("s", $user);
    $countQuery->execute();
    $countQuery->bind_result($totalItems);
    $countQuery->fetch();
    $countQuery->close();

    // Tính tổng số trang
    $totalPages = ceil($totalItems / $itemsPerPage);

    // Truy vấn dữ liệu từ cơ sở dữ liệu chỉ hiển thị các hàng tương ứng với tên người dùng đang đăng nhập
    $query = $config->prepare("SELECT * FROM `giohang` WHERE `user` = ? ORDER BY `id` DESC LIMIT ?, ?");
    $query->bind_param("sii", $user, $offset, $itemsPerPage);
    $query->execute();
    $query->store_result(); // Lưu trữ kết quả để lấy số lượng dòng
    $query->bind_result($id, $user, $vatpham, $item3, $item7, $vongquay, $status, $thoigian); // Gán các trường trong kết quả

    if($query->num_rows > 0){ 
        while($query->fetch()){ // Lặp qua các dòng
            // Kiểm tra trạng thái
            $trangThai = ($status == 0) ? '<button><a href="/vongquay/nhando.php?id='.$id.'">Nhận đồ</a></button>' : 'Đã nhận';
           
            echo '
            <tr>
                <td>'.$id.'</td>
                <td>'.$user.'</td>
                <td>'.$vatpham.'</td>
                <td>'.$vongquay.'</td>
                <td>'.$trangThai.'</td> <!-- Chèn biến trạng thái ở đây -->
                <td>'.$thoigian.'</td>
            </tr>
            ';
        }
    } else {
        echo '
        <tr>
            <td colspan="7" align="center"><span class="btn btn-success" style="font-size:100%;color:white;"><< Lịch Sử Trống >></span></td>
        </tr>
        ';
    }

    // Hiển thị phân trang
    echo '<tr><td colspan="6" align="center">';
    echo '<div class="pagination">';
    for ($i = 1; $i <= $totalPages; $i++) {
        if ($i == $page) {
            echo '<span class="active">' . $i . '</span>'; // Trang hiện tại
        } else {
            echo '<a href="?page=' . $i . '" class="page-link">' . $i . '</a>'; // Các trang khác
        }
    }
    echo '</div>';
    echo '</td></tr>';
} else {
    echo json_encode(['status' => 'error', 'message' => 'Bạn chưa đăng nhập']);
}
?>

<!-- CSS cho phân trang -->
<style>
    .pagination {
        display: inline-block;
        margin: 20px 0;
    }

    .pagination a, .pagination span {
        color: white;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
        border: 1px solid #4caf50; /* Viền cho trang */
        margin: 0 2px; /* Khoảng cách giữa các trang */
        border-radius: 4px;
        background-color: #4caf50; /* Màu nền cho các trang */
        transition: background-color 0.3s;
    }

    .pagination a:hover {
        background-color: #45a049; /* Màu nền khi hover */
    }

    .pagination .active {
        background-color: #45a049; /* Màu nền cho trang hiện tại */
        border: 1px solid #4caf50; /* Viền cho trang hiện tại */
        font-weight: bold;
    }
</style>



            </tbody>
        </table>
    </div>
          </section>
<?php include '../config/foot.php'; ?>