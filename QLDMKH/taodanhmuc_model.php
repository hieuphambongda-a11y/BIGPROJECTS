<?php
require_once __DIR__ . "/../database.php";

function xuLyThemKhoaHoc() {
    global $check;

    if (isset($_POST["them"])) {
        $tieu_de = $_POST["hoten"];
        $tien = $_POST["tien_te"];
        $tac_gia = $_POST["tac_gia"];
        $thoi_luong = $_POST["thoi_luong"];
        $so_bai_giang = $_POST["so_bai_giang"];

        $gia_tri = "INSERT INTO nguoi_dung (ten, gia, tac_gia, thoi_luong, so_bai_giang)
        VALUES ('$tieu_de', '$tien', '$tac_gia', '$thoi_luong', '$so_bai_giang')";

        return mysqli_query($check, $gia_tri);
    }
}
