<?php
include_once '../config/config.php'; // Kết nối cơ sở dữ liệu

if (!isset($_SESSION['user'])) {
    header("location:/login"); // Chuyển hướng đến trang đăng nhập
    exit;
}

// Kiểm tra nếu dữ liệu POST được gửi từ AJAX
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy dữ liệu từ AJAX
    $user = $_POST['user'];
    $item = $_POST['item'];
    $vongquay = $_POST['vongquay'];

    // Mỗi loại vật phẩm sẽ có một giá trị cụ thể
   $itemValues = [
    'Trứng thiên thần' => [4762,4,14,1,13149,5,0,0,0,[],0,0,0],
    'Trứng yêu tinh' => [4761,4,14,1,13148,5,0,0,0,[],0,0,0],
    'Trứng bóng ma' => [4699,4,14,1,13061,5,0,0,0,[],0,0,0],
    '5 NLMD vàng cấp 3' => [rand(326, 335),5],
    '5 NLMD tím cấp 3' => [rand(336, 345),5],
    '10 NLMD vàng cấp 3' => [rand(326, 335),10],
    '10 NLMD tím cấp 3' => [rand(336, 345),10],
    '20 NLMD vàng cấp 3' => [rand(326, 335),20],
    '20 NLMD tím cấp 3' => [rand(336, 345),20],
    'Tóc thời trang 40%' => [4703,4,25,1,13065,5,30,0,0,[[7,4000],[8,4000],[9,4000],[10,4000],[11,4000]],0,0,0],
    'Khẩu trang 40%' => [4716,4,21,1,13078,5,48,0,0,[[7,4000],[8,4000],[9,4000],[10,4000],[11,4000]],0,0,0],
    'Tai nghe 40% dame' => [4718,4,26,1,13080,5,98,0,0,[[7,4000],[8,4000],[9,4000],[10,4000],[11,4000]],0,0,0],
    'Trang phục 50% dame' => [4760,4,15,10,13147,5,0,1,0,[[7,5000],[8,5000],[9,5000],[10,5000],[11,5000],[27,5000],[37,1],[38,1]],0,0,0],
    'Danh hiệu tiên đế 80%' => [4829,4,27,1,13207,5,119,1,0,[[7,8000],[8,8000],[9,8000],[10,8000],[11,8000]],0,0,0],
    'Áo choàng VIP 70% dame' => [4801,4,23,1,13133,5,69,0,0,[[7,7000],[8,7000],[9,7000],[10,7000],[11,7000]],0,0,0],
    'Thẻ kim cương VIP +20' => [4652,4,55,10,13014,5,0,1,20,[[0,1000],[1,1000],[2,1000],[3,1000],[4,1000],[40,1000],[7,500],[8,500],[9,500],[10,500],[11,500],[31,500],[32,500],[23,50],[26,50],[33,500],[36,500],[37,1]],0,0,0]
];

// Lấy giá trị vật phẩm dựa trên tên item
$itemValue = isset($itemValues[$item]) ? json_encode($itemValues[$item]) : null;
$status = 0; // Trạng thái mặc định
$time = date('Y-m-d H:i:s'); // Lấy thời gian hiện tại
$item7 = null; // Biến item7 mặc định là null
$item3 = null; // Biến item3 mặc định là null

// Kiểm tra xem tên item có chứa "NLMD"
if (strpos($item, 'NLMD') !== false) {
    $item7 = json_encode($itemValues[$item]); // Gán giá trị cho item7 nếu có "NLMD"
} else {
    $item3 = json_encode($itemValues[$item]); // Nếu không có "NLMD", gán giá trị cho item3
}


    if ($itemValue) {
        // Truy vấn chèn dữ liệu vào bảng giohang
        $sql = "INSERT INTO giohang (user, item3, vongquay, vatpham, time, item7, status) VALUES (?, ?, ?, ?, ?, ?, ?)";

        // Chuẩn bị và thực thi câu lệnh
        $stmt = $config->prepare($sql);

        // Kiểm tra nếu câu lệnh chuẩn bị thành công
        if ($stmt) {
            // Chuyển đổi kiểu biến status thành int
            $status = (int)$status; // Đảm bảo status là kiểu INT
            
            // Liên kết tham số
            $stmt->bind_param("ssssssi", $user, $item3, $vongquay, $item, $time, $item7, $status); // 'sssssss' để chỉ ra kiểu dữ liệu

            // Thực thi truy vấn
            if ($stmt->execute()) {
                echo "Thêm vật phẩm thành công!";
            } else {
                echo "Lỗi khi thêm vật phẩm: " . $stmt->error;
            }

            // Đóng câu lệnh
            $stmt->close();
        } else {
            echo "Lỗi chuẩn bị câu lệnh: " . $config->error;
        }
    } else {
        echo "Vật phẩm không hợp lệ!";
    }
}
?>
