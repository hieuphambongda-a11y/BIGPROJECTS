<?php
session_start();
require_once "./xu_ly/dn.php";

class DangNhapController {

    public function xuLyDangNhap() {

        if (isset($_SESSION["user"])) {
            header("Location: index.php");
            exit();
        }

        if(isset($_POST["login"])){

            $email=$_POST["email"];
            $password=$_POST["password"];

            $nguoidung = new NguoiDung();
            $ktra = $nguoidung->layTheoEmail($email);
            if($ktra){
                if($password === $ktra["pass"]){
                    header("Location: index.php");
                    session_start();
                    $_SESSION["user"] = "yes";
                    die();
                }
                else{
                    $error = "<div class='alert alert-danger'>Mật khẩu không hợp lệ</div>";
                }
            }
            else{
                $error = "<div class = 'alert alert-danger'>Email không hợp lệ</div>";
            }
        }

        include "./view/login_view.php";
    }
}
?>
