
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <title>
    Quản trị danh mục
  </title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="<?= base_url('assets/css/material-dashboard.css?v=2.1.2') ?>" rel="stylesheet" />
  <link href="<?= base_url('assets/demo/demo.css') ?>" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <style>
    .input_update{
     max-width: 100px;
     border: none;
     text-align: center;
   }
   .input_img{

    margin-left: 14px; 
  }
  th, td{
    text-align: center;
  }
  img{
    border-radius: 5px;
    padding: 3px;
    margin: 2px;
  }
  
</style>
</head>

<body class="">

  <?php 
  include ('addModal.php');
  include ('left_nav.php')
  ;?>
  <div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <a class="navbar-brand" href="javascript:;">Trang danh mục</a>
        </div>
        <?php 
        include ('top_nav.php');
        ?>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header card-header-primary">
                <h4  class="card-title mt-0"> Danh mục sản phẩm</h4>
                <p class="card-category"> Here is a subtitle for this table</p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <button type="button" rel="tooltip" title="Thêm" class="btn btn-success btn-link btn-sm"data-toggle="modal" data-target="#exampleModalSP">
                    <i class="material-icons">add task</i> Thêm sản phẩm  
                  </button>
                  <table class="table table-hover">
                    <thead class="">
                      <th>STT</th>
                      <th>Tên SP</th>
                      <th>Giá</th>
                      <th>Đơn vị tính</th>
                      <th>Số Lượng</th>
                      <th>Mô tả</th>
                      <th>Ảnh</th>
                      <th>Hiệu chỉnh</th>
                    </thead>
                    <tbody>
                      <?php foreach ($sp as $key => $value): ?>
                        <tr>
                          <td><?php $i = 1; echo $i++?></td>
                          <td><?php echo $value['TenSP'] ?></td>
                          <td><?php echo $value['DonGia'] ?></td>
                          <td><?php echo $value['DVT'] ?></td>
                          <td><?php echo $value['SL'] ?></td>
                          <td>Xem chi tiết</td>
                          <td><img width="100px" height="100px" src="<?= base_url('uploads/SanPham') ?>/<?php echo $value['Anh']?>" alt="no image"></td>
                          <td class="td-actions">
                            <a href="<?= base_url('Mycontroller/EditSP') ?>/<?php echo $value['MaSP'] ?>" type="button" rel="tooltip" title="Sửa" class="btn btn-primary btn-link btn-sm">
                              <i class="material-icons">edit</i>
                           
                            <a onclick="return confirm('Bạn có chắc muốn xóa bản ghi này?');" href="<?= base_url('Mycontroller/deleteSP') ?>/<?php echo $value['MaSP'] ?>" type="button" rel="tooltip" title="Xóa" class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">close</i>
                            </a>
                          </td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header card-header-primary">
                <h4  class="card-title mt-0"> Danh mục nhà cung cấp</h4>
                <p class="card-category"> Here is a subtitle for this table</p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <button type="button" rel="tooltip" title="Thêm" class="btn btn-success btn-link btn-sm"data-toggle="modal" data-target="#exampleModalNCC">
                    <i class="material-icons">add task</i> Thêm nhà cung cấp
                  </button>
                  <table class="table table-hover">
                    <thead class="">
                      <th>STT</th>
                      <th>Tên nhà cung cấp</th>
                      <th>Chi nhánh</th>
                      <th>Địa chỉ</th>
                      <th>Hiệu chỉnh</th>
                    </thead>
                    <tbody>
                      <?php foreach ($ncc as $key => $value): ?>
                        <tr>
                          <td><?php $i = 1; echo $i++?></td>
                          <td><?php echo $value['TenNCC'] ?></td>
                          <td><?php echo $value['ChiNhanh'] ?></td>
                          <td><?php echo $value['DiaChi'] ?></td>
                          <td class="td-actions">
                            <button type="button" rel="tooltip" title="Sửa" class="btn btn-primary btn-link btn-sm">
                              <i class="material-icons">edit</i>
                            </button>
                            <a onclick="return confirm('Bạn có chắc muốn xóa bản ghi này?');" href="deleteNCC/<?php echo $value['MaNCC'] ?>" type="button" rel="tooltip" title="Xóa" class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">close</i>
                            </a>
                          </td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!--  -->

          <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header card-header-primary">
                <h4  class="card-title mt-0"> Danh mục khách hàng</h4>
                <p class="card-category"> Here is a subtitle for this table</p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead class="">
                      <th>STT</th>
                      <th>Tên khách hàng</th>
                      <th>Giới tính</th>
                      <th>Số điện thoại</th>
                      <th>Email</th>
                      <th>Hiệu chỉnh</th>
                    </thead>
                    <tbody>
                      <?php foreach ($kh as $key => $value): ?>
                        <tr>
                          <td><?php $i = 1; echo $i++?></td>
                          <td><?php echo $value['TenKH'] ?></td>
                          <td><?php echo $value['GioiTinh'] ?></td>
                          <td><?php echo $value['SDT'] ?></td>
                          <td><?php echo $value['Email'] ?></td>
                          <td class="td-actions">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                              <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">close</i>
                            </button>
                          </td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header card-header-primary">
                <h4 class="card-title mt-0"> Danh mục hóa đơn bán</h4>
                <p class="card-category"> Here is a subtitle for this table</p>
              </div>  
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead class="">
                      <th>STT</th>
                      <th>Số hóa đơn</th>
                      <th>Ngày</th>
                      <th>Mã sản phẩm</th>
                      <th>Số Lượng</th>
                      <th>Đơn giá</th>
                      <th>Tổng tiền</th>
                      <th>Giảm giá</th>
                      <th>Thành tiền</th>
                      <th>Hiệu chỉnh</th>
                    </thead>
                    <tbody>
                      <?php foreach ($hdb as $key => $value): ?>
                        <tr>
                          <td><?php $i = 1; echo $i++?></td>
                          <td><?php echo $value['SoHDB'] ?></td>
                          <td><?php echo $value['Ngay'] ?></td>
                          <td><?php echo $value['MaSP'] ?></td>
                          <td><?php echo $value['SoLuong'] ?></td>
                          <td><?php echo $value['DonGia'] ?></td>
                          <td><?php echo $value['TongTien'] ?></td>
                          <td><?php echo $value['GiamGia'] ?></td>
                          <td><?php echo $value['ThanhTien'] ?></td>

                          <td class="td-actions">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                              <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">close</i>
                            </button>
                          </td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <!--  -->
          <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header card-header-primary">
                <h4 class="card-title mt-0"> Danh mục hóa đơn nhập</h4>
                <p class="card-category"> Here is a subtitle for this table</p>
              </div>  
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead class="">
                      <th>STT</th>
                      <th>Số hóa đơn</th>
                      <th>Ngày</th>
                      <th>Mã sản phẩm</th>
                      <th>Số Lượng</th>
                      <th>Đơn giá</th>
                      <th>Chiết khấu TM</th>
                      <th>Chiết khấu TT</th>
                      <th>Thành tiền</th>
                      <th>Hiệu chỉnh</th>
                    </thead>
                    <tbody>
                      <?php foreach ($hdn as $key => $value): ?>
                        <tr>
                          <td><?php $i = 1; echo $i++?></td>
                          <td><?php echo $value['SoHDN'] ?></td>
                          <td><?php echo $value['Ngay'] ?></td>
                          <td><?php echo $value['MaSP'] ?></td>
                          <td><?php echo $value['SoLuong'] ?></td>
                          <td><?php echo $value['DonGia'] ?></td>
                          <td><?php echo $value['CKTM'] ?></td>
                          <td><?php echo $value['CKTT'] ?></td>
                          <td><?php echo $value['ThanhTien'] ?></td>

                          <td class="td-actions">
                            <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                              <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">close</i>
                            </button>
                          </td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!--  -->


<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap-material-design.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Plugin for the momentJs  -->
<script src="../assets/js/plugins/moment.min.js"></script>
<!--  Plugin for Sweet Alert -->
<script src="../assets/js/plugins/sweetalert2.js"></script>
<!-- Forms Validations Plugin -->
<script src="../assets/js/plugins/jquery.validate.min.js"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="../assets/js/plugins/fullcalendar.min.js"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="../assets/js/plugins/jquery-jvectormap.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../assets/js/plugins/nouislider.min.js"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="../assets/js/plugins/arrive.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>



<!--  Xử lí ảnh phần sản phẩm -->
<script>
  $(function () {
   $('input[type="input_img]').change(function () {
    if ($(this).val() != "") {
     $(this).css('color', '#333');
   }else{
     $(this).css('color', 'transparent');
   }
 });
 })
</script>





</body>
</html>