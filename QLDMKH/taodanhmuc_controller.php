<?php
session_start();
require_once __DIR__ . "/../model/taodanhmuc_model.php";


if (isset($_POST["them"])) {
    $kq = xuLyThemKhoaHoc();

    if ($kq) {
        $_SESSION["them"] = "Đã thêm khóa học thành công";
        header("Location: danhsach_controller.php");
    } else {
        die("Có lỗi sai");
    }
}

require_once __DIR__ . "/../view/taodanhmuc_view.php";
