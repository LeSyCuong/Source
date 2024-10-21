<?php
session_start();
session_destroy();
header("location:/hso"); // Thay thế bằng trang đăng nhập hoặc trang chủ của bạn
exit;
?>
