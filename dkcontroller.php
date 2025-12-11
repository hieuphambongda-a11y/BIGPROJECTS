<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . "/../xu_ly/dk.php";
require_once __DIR__ . "/../truy_van/data.php"; 

class DangKyController {

    public function xuLyDangKy() {

        $ketqua = [];
        
        if(isset($_POST["submit"])){
            $fullname=$_POST["fullname"];
            $email=$_POST["email"];
            $password=$_POST["password"];
            $repeat=$_POST["repeat_password"];
            $error=array();

            if(empty($fullname) or empty($email) or empty($password) or empty($repeat)){
                array_push($error,"Bạn phải điền đầy đủ thông tin");
            }
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                array_push($error,"Email không hợp lệ");
            }
            if(strlen($password) < 8){
                array_push($error,"Mật khẩu phải dài hơn 8");
            }
            if($password!=$repeat){
                array_push($error,"Mật khẩu không hợp lệ");
            }

            // tạo kết nối DB
            $db = new Database();  
            $model = new DangKyModel($db->ketnoi);

            if($model->kiemTraEmail($email) > 0){
                array_push($error,"Email đã tồn tại");
            }

            if(count($error)>0){
                $ketqua = $error;
            }
            else{
                if($model->themNguoiDung($fullname,$email,$password)){
                    $ketqua = ["success" => "Bạn đã đăng ký thành công"];
                } else {
                    $ketqua = ["fail" => "Không đăng ký thành công"];
                }
            }
        }

        include __DIR__ . "/../view/dk_view.php";
    }
}
