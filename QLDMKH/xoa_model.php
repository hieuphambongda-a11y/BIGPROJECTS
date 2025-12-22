<?php
require_once __DIR__ . "/../database.php";

function xoaKhoaHoc() {
    global $check;

    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $du_lieu = "DELETE FROM nguoi_dung where id = $id";
        return mysqli_query($check, $du_lieu);
    }
}
