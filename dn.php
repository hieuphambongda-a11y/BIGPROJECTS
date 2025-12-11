<?php
require_once "./truy_van/data.php";

class NguoiDung {

    public function layTheoEmail($email) {
        $db = new Database();
        $check = $db->ketnoi;
        $csdl = "SELECT * FROM users WHERE email = '$email' ";
        $kq = mysqli_query($check,$csdl);
        return mysqli_fetch_array($kq, MYSQLI_ASSOC);
    }
}
?>
