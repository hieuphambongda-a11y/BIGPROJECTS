<?php
require_once __DIR__ . "/../database.php";

function layDuLieuChinhSua($id) {
    global $check;

    $sql = "SELECT * FROM nguoi_dung WHERE id = $id";
    $ket_qua = mysqli_query($check, $sql);
    return mysqli_fetch_array($ket_qua);
}

function xuLyChinhSua() {
    global $check;

    if (isset($_POST["chinh_sua"])) {
        $id = $_POST["id"];
        $tieu_de = $_POST["hoten"];
        $tien = $_POST["tien_te"];
        $tac_gia = $_POST["tac_gia"];
        $thoi_luong = $_POST["thoi_luong"];
        $so_bai_giang = $_POST["so_bai_giang"];

        $gia_tri = "UPDATE nguoi_dung 
            SET ten='$tieu_de', gia='$tien',
                tac_gia='$tac_gia',
                thoi_luong='$thoi_luong',
                so_bai_giang='$so_bai_giang'
            WHERE id=$id";

        return mysqli_query($check, $gia_tri);
    }
}
