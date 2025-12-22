<?php
require_once __DIR__ . "/../database.php";

function layDanhSachKhoaHoc() {
    global $check;

    $sql = "SELECT * FROM nguoi_dung";
    return mysqli_query($check, $sql);
}