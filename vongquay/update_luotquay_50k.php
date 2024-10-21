<?php

include_once '../config/config.php'; // Kết nối cơ sở dữ liệu

if (!isset($_SESSION['user'])) {
    header("location:/login"); // Chuyển hướng đến trang đăng nhập
    exit;
}

$user = $_SESSION['user'];  // Lấy username từ session

// Lấy thông tin tài khoản người dùng
$user_arr = _fetch("SELECT * FROM account WHERE user='$user'");
if (!$user_arr) {
    echo "Không tìm thấy người dùng.";
    exit;
}


// Cập nhật lượt quay trong cơ sở dữ liệu
$stmt = $config->prepare("UPDATE account SET luotquay_50k = ? WHERE user = ?");

if (!$stmt) {
    // Nếu không thể chuẩn bị câu truy vấn, in ra thông báo lỗi
    echo "Error in preparing statement: " . mysqli_error($config);
    exit;
}

// Thực hiện câu truy vấn
$success = $stmt->bind_param("is", $luotquay_new, $user); // ràng buộc các tham số
$luotquay_new = $_luotquay_50k - 1; // Trừ 1 lượt quay

if ($success && $stmt->execute()) {
    if ($stmt->affected_rows > 0) {
        echo "Cập nhật thành công!";
    } else {
        echo "Cập nhật thất bại hoặc không có thay đổi!";
    }
} else {
    // In ra thông báo lỗi nếu có
    echo "Error executing statement: " . mysqli_error($config);
}

// Đóng câu truy vấn
$stmt->close();
?>
