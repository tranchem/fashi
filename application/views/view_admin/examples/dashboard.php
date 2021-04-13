
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href=" <?php echo base_url('assets/img/apple-icon.png') ?>">
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.png') ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Quản trị 
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url('assets_admin/css/material-dashboard.css?v=2.1.2')?>" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url('assets_admin/demo/demo.css') ?>" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url('assets_admin/css/style.css') ?>">

  <style> 
    .card-title{
      font-size: 15px;
    }
  </style>
</head>

<body class="">
  <?php 
  include ('left_nav.php');
  include ('addModal.php');
  ?>
  <div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
      <div class="container-fluid">
        <div class="navbar-wrapper">
          <a class="navbar-brand" href="javascript:;">Dashboard</a>
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
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">content_copy</i>
                </div>
                <p class="card-category">Lợi nhuận gộp</p>
                <?php foreach ($loinhuangop as $key => $value): ?>

                  <h3 class="card-title"><?php echo $value['LoiNhuanGop'] ?>
                <?php endforeach ?>
              </h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">date_range</i> Vừa cập nhật
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">store</i>
              </div>
              <p class="card-category">Doanh thu</p>
              <?php foreach ($doanhthu as $key => $value): ?>

                <h3 class="card-title"><?php echo $value['TT'] ?> VND</h3>
                
              <?php endforeach ?>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">date_range</i> Vừa cập nhật
              </div>
            </div>
          </div>
        </div>
        <div  class="col-lg-3 col-md-6 col-sm-6">
          <div  class="card card-stats">
            <div  class="card-header card-header-danger card-header-icon">
              <div class="card-icon">
                <i class="fa fa-money"></i>
              </div>
              <p class="card-category">Tiền lương</p>
              <?php foreach ($luong as $key => $value): ?>

                <h3 class="card-title" ><?php echo $value['Luong'] ?></h3>

              <?php endforeach ?>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">update</i> Vừa cập nhật
              </div>
            </div>  
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
              <div class="card-icon">
                <i class="fa fa-edit"></i>
              </div>
              <p class="card-category">Membership</p>
              <?php foreach ($soluongkh as $key => $value): ?>

                <h3 class="card-title"><?php echo $value['MaKH'] ?></h3>
              <?php endforeach ?>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">update</i> Vừa cập nhật
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-success">
              <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
              <script type="text/javascript">
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ['Year', 'Lượng sản phẩm'],
                    ['T1',  1000],
                    ['T2',  1170],
                    ['T3',  1200],
                    ['T4',  1030]

                    ]);

                  var options = {
                    title: 'Thống kê 4 tháng gần nhất',
                    curveType: 'function',
                    legend: { position: 'bottom' }
                  };

                  var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                  chart.draw(data, options);
                }
              </script>
              <div id="curve_chart" style="width: 260px; height: 220px"></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Lượng sản phẩm bán hàng tháng</h4>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> Vừa cập nhật
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-warning">
              <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
              <script type="text/javascript">
                google.charts.load("current", {packages:["corechart"]});
                google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ['Task', 'Hours per Day'],
                    ['Lương',     11],
                    ['G.vốn',   2],
                    ['Doanh thu',  12],
                    ]);
                  var options = {
                    title: 'Thống kê các chỉ số',
                    is3D: true,
                  };

                  var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                  chart.draw(data, options);
                }
              </script>
              <div id="piechart_3d" style="width: 260px; height: 220px;"></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Tỷ lệ doanh thu/giá vốn/tiền lương</h4>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> Vừa cập nhật
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-chart">
            <div class="card-header card-header-danger">
              <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
              <script type="text/javascript">
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                  var data = google.visualization.arrayToDataTable([
                    ['Năm', 'Khách vãng lai', 'Membership'],
                    ['2018',  1000,      400],
                    ['2019',  1170,      460],
                    ['2020',  660,       1120],
                    ['2021',  1030,      540]
                    ]);

                  var options = {
                    title: 'Doanh thu theo loại khách hàng',
                    hAxis: {title: 'Năm',  titleTextStyle: {color: '#333'}},
                    vAxis: {minValue: 0}
                  };

                  var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
                  chart.draw(data, options);
                }
              </script>
              <div id="chart_div" style="width: 260px; height:220px;"></div>
            </div>
            <div class="card-body">
              <h4 class="card-title">Thống kê doanh thu </h4>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">access_time</i> Vừa cập nhật
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="card">
          <div class="card-header card-header-warning">
            <h4  class="card-title">Số liệu nhân viên</h4>
            <p style="display: inline;"class="card-category">Tổng số nhân viên: 5</p>
            
          </div>
          <div class="card-body table-responsive">
            <button type="button" rel="tooltip" title="Thêm" class="btn btn-success btn-link btn-sm"data-toggle="modal" data-target="#exampleModalNV">
              <i class="material-icons">add task</i> Thêm nhân viên  
            </button>
            <table class="table table-hover">
              <thead class="text-warning">
                <th>STT</th>
                <th>Tên</th>
                <th>Lương</th>
                <th>Quê quán</th>
                <th>SĐT</th>
                <th>Ảnh</th>
                <th>Hiệu chỉnh</th>
              </thead>
              <tbody>
                <?php foreach ($nv as $value): ?>
                  <tr>
                    <td><?php echo $i=1; $i++ ?></td>
                    <td><?php echo $value['TenNV'] ?></td>
                    <td><span>$</span><?php echo $value['Luong'] ?></td>
                    <td><?php echo $value['DiaChi'] ?></td>
                    <td><?php echo $value['SDT'] ?></td>
                    <td><img width="100px" height="100px" src="<?= base_url('Uploads/NhanVien') ?>/<?php echo $value['Anh'] ?>" alt="no image"></td>
                    <td class="td-actions">
                      <a href="EditNV/<?php echo $value['MaNV'] ?>" type="button" rel="tooltip" title="Sửa" class="btn btn-primary btn-link btn-sm">
                        <i class="material-icons">edit</i>
                      
                      <a onclick="return confirm('Bạn có chắc muốn xóa bản ghi này?');" href="<?= base_url('Uploads/NhanVien') ?>/Mycontroller/deleteNV/<?php echo $value['MaNV']?>" type="button" rel="tooltip" title="Xóa" class="btn btn-danger btn-link btn-sm">
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
  </div>
</div>
<footer class="footer">
  <div class="container-fluid">



  </div>
</footer>
</div>
</div>
<div class="fixed-plugin">
  <div class="dropdown show-dropdown">
    <a href="#" data-toggle="dropdown">
      <i class="fa fa-cog fa-2x"> </i>
    </a>

  </div>
</div>
<!--   Core JS Files   -->
<script src="<?php echo base_url('assets_admin/js/core/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets_admin/js/core/popper.min.js')?>"></script>
<script src="<?php echo base_url('assets_admin/js/core/bootstrap-material-design.min.js')?>"></script>
<script src="<?php echo base_url('assets_admin/js/plugins/perfect-scrollbar.jquery.min.js')?>"></script>
<!-- Plugin for the momentJs  -->
<script src="<?php echo base_url('assets_admin/js/plugins/moment.min.js')?>"></script>
<!--  Plugin for Sweet Alert -->
<script src="<?php echo base_url('assets_admin/js/plugins/sweetalert2.js')?>"></script>
<!-- Forms Validations Plugin -->
<script src="<?php echo base_url('assets_admin/js/plugins/jquery.validate.min.js')?>"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="<?php echo base_url('assets_admin/js/plugins/jquery.bootstrap-wizard.js')?>"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="<?php echo base_url('assets_admin/js/plugins/bootstrap-selectpicker.js')?>"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="<?php echo base_url('assets_admin/js/plugins/bootstrap-datetimepicker.min.js')?>"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="<?php echo base_url('assets_admin/js/plugins/jquery.dataTables.min.js')?>"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="<?php echo base_url('assets_admin/js/plugins/bootstrap-tagsinput.js')?>"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?php echo base_url('assets_admin/js/plugins/jasny-bootstrap.min.js')?>"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="<?php echo base_url('assets_admin/js/plugins/fullcalendar.min.js')?>"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="<?php echo base_url(' assets_admin/js/plugins/jquery-jvectormap.js')?>"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?php echo base_url('assets_admin/js/plugins/nouislider.min.js')?>"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="<?php echo base_url('assets_admin/js/plugins/arrive.min.js') ?>"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
<script src="<?php echo base_url('assets_admin/js/plugins/chartist.min.js')?>"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url('assets_admin/js/plugins/bootstrap-notify.js')?>"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?php echo base_url('assets_admin/js/material-dashboard.js?v=2.1.2')?>" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url('assets_admin/demo/demo.js') ?> "></script>
<script>
  $(document).ready(function() {
    $().ready(function() {
      $sidebar = $('.sidebar');

      $sidebar_img_container = $sidebar.find('.sidebar-background');

      $full_page = $('.full-page');

      $sidebar_responsive = $('body > .navbar-collapse');

      window_width = $(window).width();

      fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

      if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
        if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
          $('.fixed-plugin .dropdown').addClass('open');
        }

      }

      $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

      $('.fixed-plugin .active-color span').click(function() {
        $full_page_background = $('.full-page-background');

        $(this).siblings().removeClass('active');
        $(this).addClass('active');

        var new_color = $(this).data('color');

        if ($sidebar.length != 0) {
          $sidebar.attr('data-color', new_color);
        }

        if ($full_page.length != 0) {
          $full_page.attr('filter-color', new_color);
        }

        if ($sidebar_responsive.length != 0) {
          $sidebar_responsive.attr('data-color', new_color);
        }
      });

      $('.fixed-plugin .background-color .badge').click(function() {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');

        var new_color = $(this).data('background-color');

        if ($sidebar.length != 0) {
          $sidebar.attr('data-background-color', new_color);
        }
      });

      $('.fixed-plugin .img-holder').click(function() {
        $full_page_background = $('.full-page-background');

        $(this).parent('li').siblings().removeClass('active');
        $(this).parent('li').addClass('active');


        var new_image = $(this).find("img").attr('src');

        if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
          $sidebar_img_container.fadeOut('fast', function() {
            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $sidebar_img_container.fadeIn('fast');
          });
        }

        if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
          var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

          $full_page_background.fadeOut('fast', function() {
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
            $full_page_background.fadeIn('fast');
          });
        }

        if ($('.switch-sidebar-image input:checked').length == 0) {
          var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
          var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

          $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
          $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
        }

        if ($sidebar_responsive.length != 0) {
          $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
        }
      });

      $('.switch-sidebar-image input').change(function() {
        $full_page_background = $('.full-page-background');

        $input = $(this);

        if ($input.is(':checked')) {
          if ($sidebar_img_container.length != 0) {
            $sidebar_img_container.fadeIn('fast');
            $sidebar.attr('data-image', '#');
          }

          if ($full_page_background.length != 0) {
            $full_page_background.fadeIn('fast');
            $full_page.attr('data-image', '#');
          }

          background_image = true;
        } else {
          if ($sidebar_img_container.length != 0) {
            $sidebar.removeAttr('data-image');
            $sidebar_img_container.fadeOut('fast');
          }

          if ($full_page_background.length != 0) {
            $full_page.removeAttr('data-image', '#');
            $full_page_background.fadeOut('fast');
          }

          background_image = false;
        }
      });

      $('.switch-sidebar-mini input').change(function() {
        $body = $('body');

        $input = $(this);

        if (md.misc.sidebar_mini_active == true) {
          $('body').removeClass('sidebar-mini');
          md.misc.sidebar_mini_active = false;

          $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

        } else {

          $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

          setTimeout(function() {
            $('body').addClass('sidebar-mini');

            md.misc.sidebar_mini_active = true;
          }, 300);
        }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
    });
});
</script>
<script>
  $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>