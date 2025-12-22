<?php
// Lấy mã trạng thái từ URL mà ZaloPay gửi về
// Thông thường ZaloPay trả về status: 1 (thành công), các số khác là thất bại
$status = isset($_GET['status']) ? $_GET['status'] : 0;

if ($status == 1) {
    // Nếu thành công -> Sang Facebook
    header("Location: https://fb.com");
    exit;
} else {
    // Nếu thất bại (người dùng hủy hoặc lỗi) -> Quay về trang chủ Localhost
    header("Location: http://localhost/MyProject/php/index.php?error=payment_failed");
    exit;
}
?>