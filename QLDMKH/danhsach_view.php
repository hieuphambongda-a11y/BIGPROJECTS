<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách khóa học</title>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

<div class="container mt-4">
     <header class="d-flex justify-content-between align-items-center my-4">
        <h3 class="font-weight-bold text-soft-dark mb-0">
            Danh sách khóa học
        </h3>

        <a href="taodanhmuc_controller.php" class="btn btn-outline-primary">
            <i class="fas fa-plus"></i> Thêm khóa học mới
        </a>
    </header>
    <?php if (isset($_SESSION["them"])): ?>
        <div class="alert alert-success">
            <?= $_SESSION["them"]; ?>
        </div>
        <?php unset($_SESSION["them"]); ?>
    <?php endif; ?>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Tên khóa học</th>
                <th>Giá</th>
                <th>Tác giả</th>
                <th>Thời lượng</th>
                <th>Số bài</th>
                <th width="160">Thực thi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($danh_sach)): ?>
            <tr>
                <td><?= $row["ten"]; ?></td>
                <td><?= $row["gia"]; ?></td>
                <td><?= $row["tac_gia"]; ?></td>
                <td><?= $row["thoi_luong"]; ?></td>
                <td><?= $row["so_bai_giang"]; ?></td>
                <td>
                    <a href="chinhsua_controller.php?id=<?= $row["id"]; ?>"
                        class="btn btn-warning btn-sm">
                        Chỉnh sửa
                        </a>

                        <a href="xoa_controller.php?id=<?= $row["id"]; ?>"
                        class="btn btn-danger btn-sm"
                        onclick="return confirm('Xóa khóa học này?');">
                        Xóa
                    </a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

</body>
</html>
