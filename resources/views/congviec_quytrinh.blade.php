<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Phần mền quản lý công việc - Fabbi JSC</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
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
      Danh sách công việc theo quy trình
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Quản lý công việc</a></li>
      <li class="active">công việc thường xuyên</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- /.row -->

    <div class="row">
      <div class="col-md-6">

        <!-- /.box -->
        <!-- Donut chart -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <i class="fa fa-bar-chart-o"></i>

            <h3 class="box-title">Biểu đồ công việc</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>

            </div>
          </div>
          <div class="box-body">
            <div id="donut-chart" style="height: 300px;"></div>
          </div>
          <!-- /.box-body-->
        </div>

      </div>
      <!-- /.col -->

      <div class="col-md-6">
        <!-- Bar chart -->

        <!-- /.box -->
        <div class="box-body pad table-responsive">

          <table class="table table-bordered text-center">
            <tr>
              <th></th>
              <th></th>
              <th></th>
            </tr>

            <tr>
              <td>
                <button type="button" class="btn btn-block btn-primary">10</button>
              </td>
              <td>
                Tổng công việc
              </td>

            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-block btn-success">5</button>
              </td>
              <td>
                Số công việc đã hoàn thành
              </td>

            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-block btn-info">4</button>
              </td>
              <td>
                Số công việc đang diễn ra
              </td>

            </tr>
            <tr>
              <td>
                <button type="button" class="btn btn-block btn-danger">1</button>
              </td>
              <td>
                Số công việc chậm tiến độ
              </td>
            </tr>
            <tr>
              <td><div class="form-group">
                <label>Tuần</label>
                <select class="form-control">
                  <option>Tuần 1</option> <option>Tuần 2</option> <option>Tuần 3</option> <option>Tuần 4</option> <option>Tuần 5</option> <option>Tuần 6</option> <option>Tuần 7</option> <option>Tuần 8</option> <option>Tuần 9</option> <option>Tuần 10</option> <option>Tuần 11</option> <option>Tuần 12</option> <option>Tuần 13</option> <option>Tuần 14</option> <option>Tuần 15</option> <option>Tuần 16</option> <option>Tuần 17</option> <option>Tuần 18</option> <option>Tuần 19</option> <option>Tuần 20</option> <option>Tuần 21</option> <option>Tuần 22</option> <option>Tuần 23</option> <option>Tuần 24</option> <option>Tuần 25</option> <option>Tuần 26</option> <option>Tuần 27</option> <option>Tuần 28/<option> <option>Tuần 29</option> <option>Tuần 30</option> <option>Tuần 31</option> <option>Tuần 32</option> <option>Tuần 33</option> <option>Tuần 34</option> <option>Tuần 35</option> <option>Tuần 36</option> <option>Tuần 37</option> <option>Tuần 38</option> <option>Tuần 39</option> <option>Tuần 40</option> <option>Tuần 41</option> <option>Tuần 42</option> <option>Tuần 43</option> <option>Tuần 44</option> <option>Tuần 45</option> <option>Tuần 46</option> <option>Tuần 47</option> <option>Tuần 48</option> <option>Tuần 49</option> <option>Tuần 50</option> <option>Tuần 51</option> <option>Tuần 52</option>
                 </select>
               </div></td>
               <td><div class="form-group">
                <label>Tháng</label>
                <select class="form-control">
                  <option>Tháng 1</option>
                  <option>Tháng 2</option>
                  <option>Tháng 3</option>
                  <option>Tháng 4</option>
                  <option>Tháng 5</option>
                  <option>Tháng 6</option>
                  <option>Tháng 7</option>
                  <option>Tháng 8</option>
                  <option>Tháng 9</option>
                  <option>Tháng 10</option>
                  <option>Tháng 11</option>
                  <option>Tháng 12</option>

                </select>
              </div></td>
              <td><div class="form-group">
                <label>Năm</label>
                <select class="form-control">
                  <option>2019</option>
                  <option>2018</option>
                  <option>2017</option>
                  <option>2016</option>
                  <option>2015</option>
                </select>
              </div></td>
            </tr>
          </table>
        </div>

        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-xs-12">

        <!-- /.box -->
        <a href="taocongviec_quytrinh.blade.php"><button type="button" class="btn btn-block btn-success">Tạo công việc</button></a>
      </div>
      <!-- /.col -->
    </div>
    <div class="row">
      <div class="col-xs-12">

        <!-- /.box -->
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Bảng quản lý công việc</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên công việc</th>
                  <th>Tên quy trình</th>
                  <th>Người tạo</th>
                  <th>Phòng ban thực hiện</th>
                  <th>Deadline</th>
                  <th>Tiến độ</th>
                  <th>Kết quả</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Công việc
                  </td>
                  <td>Quy trình</td>
                  <td>NGuyễn A</td>
                  <td>Phòng hành chính</td>
                  <td>20/11/2019</td>
                  <td>35%</td>
                  <td><a href="ketqua_congviec.blade.php" class="btn btn-primary">Kết quả</a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Bán thuốc</td>
                  <td>Maketting</td>
                  <td>Nguyễn Chí Thanh</td>
                  <td>Phòng hành chính nhân sự</td>
                  <td>20/10/2019</td>
                  <td>65%</td>
                  <td><a href="ketqua_congviec.blade.php" class="btn btn-primary">Kết quả</a></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Bán thuốc</td>
                  <td>Maketting</td>
                  <td>Nguyễn Chí Thanh</td>
                  <td>Phòng hành chính nhân sự</td>
                  <td>20/10/2019</td>
                  <td>65%</td>
                  <td><a href="ketqua_congviec.blade.php" class="btn btn-primary">Kết quả</a></td>
                </tr>
                <tr>
                  <td>4  </td>
                  <td>Bán thuốc</td>
                  <td>Maketting</td>
                  <td>Nguyễn Chí Thanh</td>
                  <td>Phòng hành chính nhân sự</td>
                  <td>20/10/2019</td>
                  <td>65%</td>
                  <td><a href="ketqua_congviec.blade.php" class="btn btn-primary">Kết quả</a></td>
                </tr>

                </tbody>
                <tfoot>
                  <tr>
                    <th>STT</th>
                    <th>Tên công việc</th>
                    <th>Tên quy trình</th>
                    <th>Người tạo</th>
                    <th>Phòng ban thực hiện</th>
                    <th>Deadline</th>
                    <th>Tiến độ</th>
                    <th>Kết quả</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
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
 <!-- FastClick -->
 <script src="../../bower_components/fastclick/lib/fastclick.js"></script>
 <!-- AdminLTE App -->
 <script src="../../dist/js/adminlte.min.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="../../dist/js/demo.js"></script>
 <!-- FLOT CHARTS -->
 <script src="../../bower_components/Flot/jquery.flot.js"></script>
 <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
 <script src="../../bower_components/Flot/jquery.flot.resize.js"></script>
 <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
 <script src="../../bower_components/Flot/jquery.flot.pie.js"></script>
 <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
 <script src="../../bower_components/Flot/jquery.flot.categories.js"></script>

 <!-- DataTables -->
 <script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
 <script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
 <!-- SlimScroll -->
 <script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
 <!-- FastClick -->
 <script src="../../bower_components/fastclick/lib/fastclick.js"></script>
 <!-- page script -->
 <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<!-- Page script -->
<script>
  $(function () {
    /*
     * Flot Interactive Chart
     * -----------------------
     */
    // We use an inline data source in the example, usually data would
    // be fetched from a server
    var data = [], totalPoints = 100

    function getRandomData() {

      if (data.length > 0)
        data = data.slice(1)

      // Do a random walk
      while (data.length < totalPoints) {

        var prev = data.length > 0 ? data[data.length - 1] : 50,
        y    = prev + Math.random() * 10 - 5

        if (y < 0) {
          y = 0
        } else if (y > 100) {
          y = 100
        }

        data.push(y)
      }

      // Zip the generated y values with the x values
      var res = []
      for (var i = 0; i < data.length; ++i) {
        res.push([i, data[i]])
      }

      return res
    }

    var interactive_plot = $.plot('#interactive', [getRandomData()], {
      grid  : {
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor  : '#f3f3f3'
      },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color     : '#3c8dbc'
      },
      lines : {
        fill : true, //Converts the line chart to area chart
        color: '#3c8dbc'
      },
      yaxis : {
        min : 0,
        max : 100,
        show: true
      },
      xaxis : {
        show: true
      }
    })

    var updateInterval = 500 //Fetch data ever x milliseconds
    var realtime       = 'on' //If == to on then fetch data every x seconds. else stop fetching
    function update() {

      interactive_plot.setData([getRandomData()])

      // Since the axes don't change, we don't need to call plot.setupGrid()
      interactive_plot.draw()
      if (realtime === 'on')
        setTimeout(update, updateInterval)
    }

    //INITIALIZE REALTIME DATA FETCHING
    if (realtime === 'on') {
      update()
    }
    //REALTIME TOGGLE
    $('#realtime .btn').click(function () {
      if ($(this).data('toggle') === 'on') {
        realtime = 'on'
      }
      else {
        realtime = 'off'
      }
      update()
    })
    /*
     * END INTERACTIVE CHART
     */

    /*
     * LINE CHART
     * ----------
     */
    //LINE randomly generated data

    var sin = [], cos = []
    for (var i = 0; i < 14; i += 0.5) {
      sin.push([i, Math.sin(i)])
      cos.push([i, Math.cos(i)])
    }
    var line_data1 = {
      data : sin,
      color: '#3c8dbc'
    }
    var line_data2 = {
      data : cos,
      color: '#00c0ef'
    }
    $.plot('#line-chart', [line_data1, line_data2], {
      grid  : {
        hoverable  : true,
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor  : '#f3f3f3'
      },
      series: {
        shadowSize: 0,
        lines     : {
          show: true
        },
        points    : {
          show: true
        }
      },
      lines : {
        fill : false,
        color: ['#3c8dbc', '#f56954']
      },
      yaxis : {
        show: true
      },
      xaxis : {
        show: true
      }
    })
    //Initialize tooltip on hover
    $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
      position: 'absolute',
      display : 'none',
      opacity : 0.8
    }).appendTo('body')
    $('#line-chart').bind('plothover', function (event, pos, item) {

      if (item) {
        var x = item.datapoint[0].toFixed(2),
        y = item.datapoint[1].toFixed(2)

        $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
        .css({ top: item.pageY + 5, left: item.pageX + 5 })
        .fadeIn(200)
      } else {
        $('#line-chart-tooltip').hide()
      }

    })
    /* END LINE CHART */

    /*
     * FULL WIDTH STATIC AREA CHART
     * -----------------
     */
     var areaData = [[2, 88.0], [3, 93.3], [4, 102.0], [5, 108.5], [6, 115.7], [7, 115.6],
     [8, 124.6], [9, 130.3], [10, 134.3], [11, 141.4], [12, 146.5], [13, 151.7], [14, 159.9],
     [15, 165.4], [16, 167.8], [17, 168.7], [18, 169.5], [19, 168.0]]
     $.plot('#area-chart', [areaData], {
      grid  : {
        borderWidth: 0
      },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color     : '#00c0ef'
      },
      lines : {
        fill: true //Converts the line chart to area chart
      },
      yaxis : {
        show: false
      },
      xaxis : {
        show: false
      }
    })

     /* END AREA CHART */

    /*
     * BAR CHART
     * ---------
     */

     var bar_data = {
      data : [['January', 10], ['February', 8], ['March', 4], ['April', 13], ['May', 17], ['June', 9]],
      color: '#3c8dbc'
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.5,
          align   : 'center'
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      }
    })
    /* END BAR CHART */

    /*
     * DONUT CHART
     * -----------
     */

     var donutData = [
     { label: '', data: 50, color: '#0B610B' },
     { label: '', data: 40, color: '#01DFD7' },
     { label: '', data: 10, color: '#DF3A01' }
     ]
     $.plot('#donut-chart', donutData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    })
    /*
     * END DONUT CHART
     */

   })

  /*
   * Custom Label formatter
   * ----------------------
   */
   function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
    + label
    + '<br>'
    + Math.round(series.percent) + '%</div>'
  }
</script>
</body>
</html>
