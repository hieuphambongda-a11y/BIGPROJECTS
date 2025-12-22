
<?php
session_start();

require_once __DIR__ . "/../model/danhsach_model.php";

$danh_sach = layDanhSachKhoaHoc();

require_once __DIR__ . "/../view/danhsach_view.php";
