<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-wrapper">

    <div class="form-box">

        <h3 class="text-center mb-4">Đăng nhập</h3>

        <?php 
            if (isset($error)) echo $error;
        ?>

        <form action="dangnhap.php" method="post">

            <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>

            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
            </div>

            <button type="submit" name="login" class="btn-submit">Đăng nhập</button>

        </form>

        <p class="login-text">
            Chưa có tài khoản? <a href="dangky.php">Đăng ký ngay</a>
        </p>

    </div>

</div>

</body>
</html>
