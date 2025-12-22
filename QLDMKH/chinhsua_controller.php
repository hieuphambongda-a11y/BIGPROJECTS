<?php
session_start();
require_once __DIR__ . "/../model/chinhsua_model.php";
if (isset($_POST["chinh_sua"])) {
    $kqq = xuLyChinhSua();

    if ($kqq) {
        $_SESSION["chinh_sua"] = "Đã chỉnh sửa khóa học thành công";
        header("Location: danhsach_controller.php");
    } else {
        die("Có lỗi sai");
    }
}

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $in_kq = layDuLieuChinhSua($id);
    include("../view/chinhsua_view.php");
}
