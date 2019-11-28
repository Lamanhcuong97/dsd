<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 |  Tạo công viêc</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet"
href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="../../index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">Công ty ABC</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                          page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>

                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Lã Mạnh Cường</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                    <p>
                      Lã Mạnh Cường <br> Trưởng phòng hành chính nhân sự
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->

                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                       <a href="#" class="btn btn-default btn-flat">Thông tin</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Đăng xuất</a>
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
          </div>
        </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Lã Mạnh Cường</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>

      <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Thống kê công việc</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="thongke_congviec.blade.php" ><i class="fa fa-circle-o"></i>Thống kê công việc</a></li>
          </ul>
        </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Công việc thường xuyên</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="ds_congviec_thuong_xuyen.blade.php"><i class="fa fa-circle-o"></i>Ds công việc thường xuyên</a></li>
          <li><a href="taocongviec.blade.php"><i class="fa fa-circle-o"></i>Tạo công việc</a></li>
          <li><a href="ketqua_congviec.blade.php"><i class="fa fa-circle-o"></i>Chi tiết công việc</a></li>
        </ul>
      </li>
      <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Quản lý KPI</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="thongke_KPI.blade.php"><i class="fa fa-circle-o"></i>Thống kê KPI</a></li>
              <li><a href="dsKPI_nhanvien.blade.php"><i class="fa fa-circle-o"></i>DS KPI nhân viên</a></li>
              <li><a href="dsKPI_phongban.blade.php"><i class="fa fa-circle-o"></i>Ds KPI phòng ban</a></li>
              <li><a href="chitiet_KPIduanNV.blade.php"><i class="fa fa-circle-o"></i>Chi tiết KPI nhân viên trong dự án</a></li>
              <li><a href="chitiet_KPIduan.blade.php"><i class="fa fa-circle-o"></i>Chi tiết KPI dự án</a></li>
              <li><a href="chitiet_KPInhanvien.blade.php"><i class="fa fa-circle-o"></i>Chi tiết KPI nhân viên</a></li>
              <li><a href="chitiet_KPIphongban.blade.php"><i class="fa fa-circle-o"></i>Chi tiết KPI phòng ban</a></li>
              <li><a href="cauhinh_KPI.blade.php"><i class="fa fa-circle-o"></i>Cấu hình KPI</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Công việc theo quy trình</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="ds_quytrinh.blade.php"><i class="fa fa-circle-o"></i>Ds quy trình</a></li>
              <li><a href="tao_quytrinh.blade.php"><i class="fa fa-circle-o"></i>Tạo quy trình</a></li>
              <li><a href="congviec_quytrinh.blade.php"><i class="fa fa-circle-o"></i>Ds công việc theo quy trình</a></li>
              <li><a href="taocongviec_quytrinh.blade.php"><i class="fa fa-circle-o"></i>Tạo công việc</a></li>
              <li><a href="chitiet_quytrinh.blade.php"><i class="fa fa-circle-o"></i>Chi tiết quy trình</a></li>
              <li><a href="detail_task_project.blade.php"><i class="fa fa-circle-o"></i>Chi tiết công việc</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Công việc theo dự án</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="list_project.blade.php"><i class="fa fa-circle-o"></i>Ds dự án</a></li>
            <li><a href="create_project.blade.php"><i class="fa fa-circle-o"></i>Tạo dự án</a></li>
            <li><a href="detail_project.blade.php"><i class="fa fa-circle-o"></i>Chi tiết dự án</a></li>
            <li><a href="detail_task_project.blade.php"><i class="fa fa-circle-o"></i>Chi tiết công việc</a></li>
          </ul>
        </li>
      <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Quản lý thông báo</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="create_notification.blade.php"><i class="fa fa-circle-o"></i>Gửi thông báo</a></li>
            <li><a href="list_notification.blade.php"><i class="fa fa-circle-o"></i> Ds thông báo</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Quản lý báo cáo</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="taobaocao.blade.php"><i class="fa fa-circle-o"></i>Tạo báo cáo</a></li>
            <li><a href="ds_baocao.blade.php"><i class="fa fa-circle-o"></i>Ds báo cáo</a></li>
            <li><a href="pheduyet_baocao.blade.php"><i class="fa fa-circle-o"></i> Phê duyệt báo cáo</a></li>
          </ul>
        </li>
    </ul>
  </section>
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tạo công việc
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Forms</a></li>
      <li class="active">Advanced Elements</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- SELECT2 EXAMPLE -->
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Tạo công việc phòng ban</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">



          <div class="form-group">
            <label>Tên công việc</label>
            <input type="text" class="form-control" placeholder="Enter ...">
          </div>
          <div class="form-group">
            <label>Phòng ban phụ trách</label>
            <select class="form-control select2" style="width: 100%;">
              <option selected="selected">Phòng hành chính, nhân sự</option>
              <option>Phòng maketing</option>
              <option>Phòng kĩ thuật</option>
              <option>Phòng nhân sự</option>
              <option>Phòng tài chính</option>

            </select>
          </div>

          <div class="form-group">
            <label>Nhận xét:</label>
            <textarea class="form-control" rows="5" placeholder="Nhận xét ..."></textarea>
          </div>
          <div class="form-group">
                <label>Quy trình</label>
                <select class="form-control">
                  <option>Quy trình 1</option>
                  <option>Quy trình 2</option>
                  <option>Quy trình 3</option>
                  <option>Quy trình 4</option>
                  <option>Quy trình 5</option>
                  <option>Quy trình 6</option>


                </select>
              </div>
          <!-- /.form-group -->
          <div class="form-group">
            <label>Ngày bắt đầu:</label>

            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="datepicker">
            </div>
            <!-- /.input group -->
          </div>
          <div class="form-group">
            <label>Deadline:</label>

            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="datepicker">
            </div>
            <!-- /.input group -->
          </div>
          <!-- /.col -->
          <div class="form-group">
            <label>Các phòng ban liên quan</label>
            <select class="form-control select2" multiple="multiple" data-placeholder="Chọn các phòng ban"
            style="width: 100%;">
            <option>Phòng maketing</option>
            <option>Phòng kĩ thuật</option>
            <option>Phòng nhân sự</option>
            <option>Phòng tài chính</option>
            <option>Phòng sản xuẩt</option>
            <option>Ban lãnh đạo</option>
          </select>

        <!-- /.col -->
        <button type="button" class="btn btn-block btn-success btn-create">Tạo công việc</button>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.box-body -->

  </div>
  <!-- /.box -->

  <!-- /.row -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 2.4.13
  </div>
  <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
  reserved.
</footer>

<!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
   <div class="control-sidebar-bg"></div>
 </div>
 <!-- ./wrapper -->

 <!-- jQuery 3 -->
 <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap 3.3.7 -->
 <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
 <!-- Select2 -->
 <script src="../../bower_components/select2/dist/js/select2.full.min.js"></script>
 <!-- InputMask -->
 <script src="../../plugins/input-mask/jquery.inputmask.js"></script>
 <script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
 <script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
 <!-- date-range-picker -->
 <script src="../../bower_components/moment/min/moment.min.js"></script>
 <script src="../../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
 <!-- bootstrap datepicker -->
 <script src="../../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
 <!-- bootstrap color picker -->
 <script src="../../bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
 <!-- bootstrap time picker -->
 <script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
 <!-- SlimScroll -->
 <script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
 <!-- iCheck 1.0.1 -->
 <script src="../../plugins/iCheck/icheck.min.js"></script>
 <!-- FastClick -->
 <script src="../../bower_components/fastclick/lib/fastclick.js"></script>
 <!-- AdminLTE App -->
 <script src="../../dist/js/adminlte.min.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="../../dist/js/demo.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
 <!-- Page script -->
 <script>
  $(function () {
    $('.btn-create').on('click', function(e){
      e.preventDefault();
      Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Tạo công việc thành công',
        showConfirmButton: true,
        timer: 1500
      }).then((result) => {
        if (result.value) {
          window.location="congviec_quytrinh.html";
        }
      })


    })
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, locale: { format: 'MM/DD/YYYY hh:mm A' }})
    //Date range as a button
    $('#daterange-btn').daterangepicker(
    {
      ranges   : {
        'Today'       : [moment(), moment()],
        'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month'  : [moment().startOf('month'), moment().endOf('month')],
        'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      startDate: moment().subtract(29, 'days'),
      endDate  : moment()
    },
    function (start, end) {
      $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
    }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>
</body>
</html>