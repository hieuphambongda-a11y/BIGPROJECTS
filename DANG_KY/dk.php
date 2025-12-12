<?php

class DangKyModel {

    private $conn;

    public function __construct($ketnoi){
        $this->conn = $ketnoi;
    }

    public function kiemTraEmail($email){
        $kiem_tra= "SELECT * FROM users WHERE email ='$email'";
        $ket_qua = mysqli_query($this->conn,$kiem_tra);
        return mysqli_num_rows($ket_qua);
    }

    public function themNguoiDung($fullname,$email,$password){
        $csdl="INSERT INTO users (full_name,email,pass) VALUES (?,?,?)";
        $stmt = mysqli_stmt_init($this->conn);
        $stmt_prepare=mysqli_stmt_prepare($stmt,$csdl);

        if($stmt_prepare){
            mysqli_stmt_bind_param($stmt,"sss",$fullname,$email,$password);
            return mysqli_stmt_execute($stmt);
        }

        return false;
    }
}
?>
