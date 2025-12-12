<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<div class="form-wrapper">

<h3 class="title">Đăng ký</h3>

<?php
    if(isset($ketqua)){
        if(isset($ketqua["success"])){
            echo "<div class='alert alert-success'>{$ketqua["success"]}</div>";
        }
        if(isset($ketqua["fail"])){
            echo "<div class='alert alert-danger'>{$ketqua["fail"]}</div>";
        }
        if(!isset($ketqua["success"]) && !isset($ketqua["fail"])){
            foreach($ketqua as $loi){
                echo "<div class='alert alert-danger'>$loi</div>";
            }
        }
    }
?>

<form action="dangky.php" method="post">

    <input type="text" name="fullname" class="form-input" placeholder="Họ tên">
    <input type="email" name="email" class="form-input" placeholder="Email">
    <input type="password" name="password" class="form-input" placeholder="Mật khẩu">
    <input type="password" name="repeat_password" class="form-input" placeholder="Nhắc lại mật khẩu">
    <button type="submit" name="submit" class="btn-submit">Đăng ký</button>

</form>

<p class="login-text">
    Đã có tài khoản? <a href="dangnhap.php">Đăng nhập</a>
</p>

</div>
</div>

</body>
</html>
