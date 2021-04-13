<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Edit nhân viên</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url('assets_admin/css/main.css') ?>" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Chỉnh sửa nhân viên</h2>
                    <?php foreach ($info as $key => $value): ?>

                        <form action="<?= base_url('Mycontroller/updateNV') ?>/<?php echo $value['MaNV'] ?>" method="POST" enctype="multipart/form-data">
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Mã nhân viên</label>
                                        <input disabled="" class="input--style-4" type="text" value="<?php echo $value['MaNV'] ?>" name="input_manv">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Họ tên</label>
                                        <input class="input--style-4" type="text" name="input_tennv" value="<?php echo $value['TenNV'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Lương</label>
                                        <div class="input-group-icon">
                                            <input class="input--style-4 js-datepicker" type="text" name="input_luong" value="<?php echo $value['Luong'] ?>" >
                                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-1">
                                        <div class="input-group">
                                            <label class="label">Quê quán</label>
                                            <div class="input-group-icon">
                                                <input class="input--style-4 js-datepicker" type="text" name="input_quequan" value="<?php echo $value['DiaChi'] ?>">
                                                <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-1">
                                        <div class="input-group">
                                            <label class="label">Số điện thoại</label>
                                            <input class="input--style-4" type="text" name="input_sdt" value="<?php echo $value['SDT'] ?>">
                                        </div>
                                    </div>

                                </div>
                                <div class="row row-space">
                                    <img style="width:150px " src="<?= base_url('uploads/NhanVien') ?>/<?php echo $value['Anh'] ?>" alt="">
                                </div>

                                <div class="p-t-15">
                                    <button class="btn btn--radius-2 btn--blue" type="submit">Lưu dữ liệu</button>
                                </div>
                            </form>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jquery JS-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <!-- Vendor JS-->
        <script src="vendor/select2/select2.min.js"></script>
        <script src="vendor/datepicker/moment.min.js"></script>
        <script src="vendor/datepicker/daterangepicker.js"></script>

        <!-- Main JS-->
        <script src="js/global.js"></script>

    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->

    </html>
<!-- end document-->