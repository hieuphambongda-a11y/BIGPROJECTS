<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Chỉnh sửa khóa học</title>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
          crossorigin="anonymous">

    <style>
        body {
            background-color: #f1f3f5;
        }
        .text-soft-dark {
            color: #2f2f2f;
        }
    </style>
</head>

<body>

<div class="container">

    <!-- HEADER -->
    <header class="d-flex align-items-center my-4">
        <a href="../controller/danhsach_controller.php"
           class="btn btn-outline-secondary ml-auto">
            ⬅ Trở về danh sách
        </a>
    </header>

    <!-- CARD -->
    <div class="card shadow-sm border-0 mb-5">
        <div class="card-header bg-light border-bottom">
            <h5 class="mb-0 text-soft-dark font-weight-bold">
                Cập nhật thông tin khóa học
            </h5>
        </div>

        <div class="card-body">

            <!-- FORM -->
            <form action="../controller/chinhsua_controller.php" method="post">

                <div class="form-group">
                    <label class="font-weight-bold text-soft-dark">
                        Tên khóa học
                    </label>
                    <input type="text"
                           class="form-control"
                           name="hoten"
                           value="<?= $in_kq['ten']; ?>">
                </div>

                <div class="form-group">
                    <label class="font-weight-bold text-soft-dark">
                        Giá khóa học
                    </label>
                    <input type="text"
                           class="form-control"
                           name="tien_te"
                           value="<?= $in_kq['gia']; ?>">
                </div>

                <div class="form-group">
                    <label class="font-weight-bold text-soft-dark">
                        Tác giả
                    </label>
                    <input type="text"
                           class="form-control"
                           name="tac_gia"
                           value="<?= $in_kq['tac_gia']; ?>">
                </div>

                <div class="form-group">
                    <label class="font-weight-bold text-soft-dark">
                        Thời lượng
                    </label>
                    <input type="text"
                           class="form-control"
                           name="thoi_luong"
                           value="<?= $in_kq['thoi_luong']; ?>">
                </div>

                <div class="form-group">
                    <label class="font-weight-bold text-soft-dark">
                        Số bài giảng
                    </label>
                    <input type="number"
                           class="form-control"
                           name="so_bai_giang"
                           value="<?= $in_kq['so_bai_giang']; ?>">
                </div>

                <input type="hidden"
                       name="id"
                       value="<?= $in_kq['id']; ?>">

                <div class="text-right">
                    <a href="../controller/danhsach_controller.php"
                       class="btn btn-secondary mr-2">
                        Hủy
                    </a>
                    <button type="submit"
                            name="chinh_sua"
                            class="btn btn-success px-4">
                        Lưu thay đổi
                    </button>
                </div>

            </form>
        </div>
    </div>

</div>

</body>
</html>
