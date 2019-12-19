@extends('layout')
@section('title')
    Danh sách project
@endsection
@push('header')
<link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css ') }}'">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css ') }}'">
<!-- Ionicons -->
<link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css ') }}'">
<!-- daterange picker -->
<link rel="stylesheet" href="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.css ') }}'">
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="{{asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css ') }}'">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{asset('plugins/iCheck/all.css ') }}'">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="{{asset('bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css ') }}'">
<!-- Bootstrap time Picker -->
<link rel="stylesheet" href="{{asset('plugins/timepicker/bootstrap-timepicker.min.css ') }}'">
<!-- Select2 -->
<link rel="stylesheet" href="{{asset('bower_components/select2/dist/css/select2.min.css ') }}'">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css ') }}'">
<!-- AdminLTE Skins. Choose a skin from the css/skins
 folder instead of downloading all of them to reduce the load. -->
 <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css ') }}'">
@endpush
@push('footer')
    {{-- <script src="{{ asset('js/format_managements/index.js') }}"></script> --}}
@endpush
@section('content')
   
<section class="content-header">
  <h1>
    KPI nhân viên
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">KPI nhân viên</a></li>
    <li class="active">Danh sách KPI nhân viên</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <!-- SELECT2 EXAMPLE -->
  <div class="box box-default">
      <div class="box-body">
          <canvas id="canvas" width="100" height="15"></canvas>
        </div>
        <?php 
    $result =  @file_get_contents('https://dsd10-kong.herokuapp.com/kpi-all-company?startTime=2019-10-01%2000:00:00&endTime=2019-12-30%2000:00:00');
   
  ?>

  <div class="box box-default">
    <div class="box-header with-border">
        Xếp Hạng Phòng Ban và nhân viên có KPI cao nhất
    </div>
    <!-- /.box-header -->
    <div class="box-body row">
        <div class="table-responsive col-md-6">  
            <h3>Xếp hạng những nhân viên có KPI cao </h3>           
            <table class="table table-bordered ">
                <thead>
                    <tr>
                      <th>Xếp hạng</th>
                      <th>Tên nhân viên</th>
                      <th>Phòng ban</th>
                      <th>KPI</th>
                    </tr>
                  </thead>
                  <tbody>
                @if($result)
                  <?php  
                     $kpi_employees = json_decode($result)->data;
                  for ($i=0; $i < 5; $i++) { 
                  ?>
                      <tr>
                        <td>{{ $i + 1}}</td>
                        <td>{{ $kpi_employees[$i]->employee_id}}</td>
                        <td>Hành chính nhân sự</td>
                        <td>{{ $kpi_employees[$i]->result}}</td>
                      </tr>
                      <?php   }?>
                  @else 
                    <h3 style="color: blue;"> Dữ liệu chưa sẵn sàng</h3>
                  @endif
                  </tbody>
            </table>
          </div>
          <div class="table-responsive col-md-6">  
              <h3>Xếp hạng những nhân viên có KPI có thấp nhất </h3>           
              <table class="table table-bordered ">
                  <thead>
                      <tr>
                        <th>Xếp hạng</th>
                        <th>Tên nhân viên</th>
                        <th>Phòng ban</th>
                        <th>KPI</th>
                      </tr>
                    </thead>
                    <tbody>
                    @if($result)
                      <?php  
                        $kpi_employees = json_decode($result)->data;
                        $index = 1;
                      for ($i= count($kpi_employees) - 1; $i > count($kpi_employees) - 6; $i--) { 
                      ?>
                          <tr>
                            <td>{{ $index}}</td>
                            <td>{{ $kpi_employees[$i]->employee_id}}</td>
                            <td>Hành chính nhân sự</td>
                            <td>{{ $kpi_employees[$i]->result}}</td>
                          </tr>
                          <?php   }?>
                      @else 
                        <h3 style="color: blue;"> Dữ liệu chưa sẵn sàng</h3>
                      @endif
                    </tbody>
              </table>
          </div>
    </div>
  </div>
    <div class="box-header with-border">


      <div class="box-body">
        <div class="col-md-4">

        </div>
        <div class="col-md-8">
        <?php 
        // $department_count;
            $a = file_get_contents('https://pmptn13.herokuapp.com/departments');
            
            // echo $a;  
             
            $list_department = json_decode($a);
            $department_count=count($list_department);
            ?>
          
       </div>
     </div>
   </div>
   <!-- /.box-header -->



</section>

@endsection

@push('js')
<script src="{{asset('bower_components/select2/dist/js/select2.full.min.js') }}"></script>
 <!-- InputMask -->
 <script src="{{asset('plugins/input-mask/jquery.inputmask.js') }}"></script>
 <script src="{{asset('plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
 <script src="{{asset('plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
 <!-- date-range-picker -->
 <script src="{{asset('bower_components/moment/min/moment.min.js') }}"></script>
 <script src="{{asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
 <!-- bootstrap datepicker -->
 <script src="{{asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
 <!-- bootstrap color picker -->
 <script src="{{asset('bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
 <!-- bootstrap time picker -->
 <script src="{{asset('plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
 <!-- datatable -->
 <!-- iCheck 1.0.1 -->
 <script src="{{asset('plugins/iCheck/icheck.min.js') }}"></script>
 <!-- FastClick -->
 <script src="{{asset('bower_components/fastclick/lib/fastclick.js') }}"></script>

 <!-- FLOT CHARTS -->
 <script src="{{asset('bower_components/Flot/jquery.flot.js') }}"></script>
 <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
 <script src="{{asset('bower_components/Flot/jquery.flot.resize.js') }}"></script>
 <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
 <script src="{{asset('bower_components/Flot/jquery.flot.pie.js') }}"></script>
 <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
 <script src="{{asset('bower_components/Flot/jquery.flot.categories.js') }}"></script>

 <!-- DataTables -->
 <script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
 <script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
 <!-- SlimScroll -->
 <script src="{{asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>

 <?php 

  $list_department = (array) json_decode(file_get_contents('http://206.189.34.124:5000/api/group8/departments'))->departments;
  $list_name_depart = '';
  foreach($list_department as $department){
      $list_name_depart .= " '" .$department->department_name . "', ";
      
    }
  
 ?>
 <script>
  $(function () {
    window.chartColors = {
    red: 'rgb(255, 99, 132)',
    orange: 'rgb(255, 159, 64)',
    yellow: 'rgb(255, 205, 86)',
    green: 'rgb(75, 192, 192)',
    blue: 'rgb(54, 162, 235)',
    purple: 'rgb(153, 102, 255)',
    grey: 'rgb(201, 203, 207)'
  };
  var chartData = {
			labels: [<?php echo $list_name_depart?>],
			datasets: [ {
				type: 'bar',
				label: 'Số lượng nhân viên đạt chỉ tiêu KPI',
				backgroundColor: window.chartColors.green,
				data: [
				80,
				70,
				69,
				75,
				95,
				45,
				67,
        80,
				70,
				69,
				75,
				95,
				45,
				67
				],
				borderColor: 'white',
				borderWidth: 2
			}, {
				type: 'bar',
				label: 'Số lượng nhân viên không đạt chỉ tiêu KPI',
				backgroundColor: window.chartColors.red,
				data: [
				20,
				30,
				31,
				25,
				5,
				55,
				33,
        20,
				30,
				31,
				25,
				5,
				55,
				33
				],
				borderColor: 'white',
				borderWidth: 2
			}
  ]

		};
		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
      console.log(ctx);
			var mixedChart = new Chart(ctx, {
				type: 'bar',
				data: chartData,
				options: {
					responsive: true,
					tooltips: {
						mode: 'index',
						intersect: true
					}
				}
			});
		};
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
@endpush
