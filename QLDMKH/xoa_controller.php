<?php
session_start();
require_once __DIR__ . "/../model/xoa_model.php";
if (isset($_GET["id"])) {
    $kq = xoaKhoaHoc();

    if ($kq) {
        $_SESSION["xoa"] = "Đã xóa khóa học thành công";
        header("Location: danhsach_controller.php");
    }
}
