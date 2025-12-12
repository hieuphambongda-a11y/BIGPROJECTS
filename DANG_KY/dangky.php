<?php
session_start();
require "./controll/dkcontroller.php";

$dk = new DangKyController();
$dk->xuLyDangKy();
?>
