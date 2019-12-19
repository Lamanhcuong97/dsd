@extends('layout')
@section('title')
    Danh sách project
@endsection
@push('header')
<link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{ asset('plugins/iCheck/all.css') }}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{ asset('plugins/timepicker/bootstrap-timepicker.min.css') }}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">
@endpush
@push('footer')
    {{-- <script src="{{ asset('js/format_managements/index.js') }}"></script> --}}
@endpush
@section('content')
<?php 
  $result =  @file_get_contents('https://dsd10-kong.herokuapp.com/kpi-all-company?startTime=2019-10-01%2000:00:00&endTime=2019-12-30%2000:00:00');

?>
<section class="content-header">
      <h1>
        KPI phòng ban
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">KPI phòng ban</a></li>
        <li class="active">Danh sách KPI phòng ban</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">KPI phòng ban</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
         <div class="col-md-6"></div>
        <?php 
        // $department_count;
        
        $department_count=count($list_department);
        ?>
        <div class="col-md-8 form-inline">
        
        <form action="{{ route('dsKPI_phongban')}}" method="GET" class="form-inline">
      
          <div class="form-group">
              <label>Phòng ban</label>
              <select class="form-control" id="sel_depart" name="sel_depart">
              <?php for ($i =0; $i< count($list_department); $i++){?>
                <option value="<?=$list_department[$i]->id?>" <?php echo  isset($_GET['sel_depart']) ? ($_GET['sel_depart'] == $list_department[$i]->id ? 'selected' : '') : '';?> ><?php echo ($list_department[$i]->department_name)?></option>
              <?php } ?> 
            </select>
          </div>
          <div class="form-group">
            <label>Tháng</label>
            <select class="form-control" name="month" >
            <option disabled selected value>Lựa chọn phòng ban</option>
            <option {{ isset($_GET['month']) ? ($_GET['month'] == 1 ?? 'selected') : ''}} value="1">Tháng 1</option>
            <option {{ isset($_GET['month']) ? ($_GET['month'] == 2 ?? 'selected') : ''}} value="2">Tháng 2</option>
            <option {{ isset($_GET['month']) ? ($_GET['month'] == 3 ?? 'selected') : ''}} value="3">Tháng 3</option>
            <option {{ isset($_GET['month']) ? ($_GET['month'] == 4 ?? 'selected') : ''}} value="4">Tháng 4</option>
            <option {{ isset($_GET['month']) ? ($_GET['month'] == 5 ?? 'selected') : ''}} value="5">Tháng 5</option>
            <option {{ isset($_GET['month']) ? ($_GET['month'] == 6 ?? 'selected') : ''}} value="6">Tháng 6</option>
            <option {{ isset($_GET['month']) ? ($_GET['month'] == 7 ?? 'selected') : ''}} value="7">Tháng 7</option>
            <option {{ isset($_GET['month']) ? ($_GET['month'] == 8 ?? 'selected') : ''}} value="8">Tháng 8</option>
            <option {{ isset($_GET['month']) ? ($_GET['month'] == 9 ?? 'selected') : ''}} value="9">Tháng 9</option>
            <option {{ isset($_GET['month']) ? ($_GET['month'] == 10 ?? 'selected') : ''}} value="10">Tháng 10</option>
            <option {{ isset($_GET['month']) ? ($_GET['month'] == 11 ?? 'selected') : ''}} value="11">Tháng 11</option>
            <option {{ isset($_GET['month']) ? ($_GET['month'] == 12 ?? 'selected') : ''}} value="12">Tháng 12</option>

            </select>
        </div>
        <div class="form-group">
            <label>Quý</label>
            <select class="form-control" name="quater">
              <option disabled selected value>Lựa chọn quý</option>
              <option {{ isset($_GET['quater']) ? ( $_GET['quater'] == 1 ?? 'selected') : ''}} value="1">Quý 1</option>
              <option {{ isset($_GET['quater']) ? ( $_GET['quater'] == 2 ?? 'selected') : ''}} value="2">Quý 2</option>
              <option {{ isset($_GET['quater']) ? ( $_GET['quater'] == 3 ?? 'selected') : ''}} value="3">Quý 3</option>
              <option {{ isset($_GET['quater']) ? ( $_GET['quater'] == 4 ?? 'selected') : ''}} value="4">Quý 4</option>
              </select>
        </div>
        <div class="form-group">
            <label>Năm</label>
        <input type="number" class="form-control" min="2000" max="2099" name="year" step="1" value="{{ $_GET['year'] ?? 2019}}" />

        </div>
          <button type="submit" class="btn btn-primary">Lọc</button>
        </form>
      </div>
      </div>
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Thống kê KPI theo các tháng {{ $department['department_name']}}</h3>
        </div>
        <div class="box-body ">
          <canvas id="kpi_depart_months" width="100" height="15" style="height: 500 !important;"></canvas>
        </div>
      </div>
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Thống kê KPI theo các tiêu chí {{ $department['department_name']}}</h3>
        </div>
        <div class="box-body ">
            <canvas id="canvas" width="100" height="15" style="height: 500 !important;"></canvas>
        </div>
      </div>

     

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
                        $kpi_employees =  json_decode($result)->data;
                        $index = 1;
                      for ($i= count($kpi_employees) -1; $i > count($kpi_employees) - 6; $i--) { 
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
     

</div>

<!-- /.box-body -->

</div>
<!-- /.box -->

<!-- /.row -->

</section>  
     

@endsection

@push('js')
<script src="{{  asset('bower_components/select2/dist/js/select2.full.min.js') }}"></script>
 <!-- InputMask -->
 <script src="{{  asset('plugins/input-mask/jquery.inputmask.js') }}"></script>
 <script src="{{  asset('plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
 <script src="{{  asset('plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
 <!-- date-range-picker -->
 <script src="{{  asset('bower_components/moment/min/moment.min.js') }}"></script>
 <script src="{{  asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
 <!-- bootstrap datepicker -->
 <script src="{{  asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
 <!-- bootstrap color picker -->
 <script src="{{  asset('bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
 <!-- bootstrap time picker -->
 <script src="{{  asset('plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
 <!-- datatable -->
 <!-- iCheck 1.0.1 -->
 <script src="{{  asset('plugins/iCheck/icheck.min.js') }}"></script>
 <!-- FastClick -->
 <script src="{{  asset('bower_components/fastclick/lib/fastclick.js') }}"></script>

 <!-- FLOT CHARTS -->
 <script src="{{  asset('bower_components/Flot/jquery.flot.js') }}"></script>
 <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
 <script src="{{  asset('bower_components/Flot/jquery.flot.resize.js') }}"></script>
 <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
 <script src="{{  asset('bower_components/Flot/jquery.flot.pie.js') }}"></script>
 <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
 <script src="{{  asset('bower_components/Flot/jquery.flot.categories.js') }}"></script>

 <!-- DataTables -->
 <script src="{{  asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
 <script src="{{  asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
 <!-- SlimScroll -->
 <script src="{{  asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
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

<?php 

$criterias_name = '';

$criterias_kpi_reality = '';

$criterias_kpi_standard = '';

foreach($criterias_kpi_department as $criteria_kpi_department ){
  $criterias_name .= '"' . $criteria_kpi_department->name . '",';

  $criterias_kpi_reality .= '' . $criteria_kpi_department->complete_rating . ',';

  $criterias_kpi_standard .= ' 1,';
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
			labels: [<?php echo $criterias_name;?>],
			datasets: [{
				type: 'line',
				label: 'Tiêu chí KPI của công ty',
				borderColor: window.chartColors.blue,
				borderWidth: 2,
				data: [<?php echo $criterias_kpi_standard; ?>]
			}, {
				type: 'bar',
				label: 'KPI từng phòng ban',
				backgroundColor: window.chartColors.red,
				data: [<?php echo $criterias_kpi_reality; ?>],
				borderColor: 'white',
				borderWidth: 2
			}
  ]

		};

    var data_kpi_depart_months = {
			labels: ['Tháng 1', ' Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
			datasets: [ {
				type: 'bar',
				label: 'KPI phòng ban theo tháng',
				backgroundColor: window.chartColors.green,
				data: [
          <?= $KPI_depart_months[1] ?>,
					<?= $KPI_depart_months[2] ?>,
					<?= $KPI_depart_months[3] ?>,
					<?= $KPI_depart_months[4] ?>,
					<?= $KPI_depart_months[5] ?>,
					<?= $KPI_depart_months[6] ?>,
					<?= $KPI_depart_months[7] ?>,
          <?= $KPI_depart_months[8] ?>,
					<?= $KPI_depart_months[9] ?>,
					<?= $KPI_depart_months[10] ?>,
					<?= $KPI_depart_months[11] ?>,
					<?= $KPI_depart_months[12] ?>
				],
				borderColor: 'white',
				borderWidth: 2
			}
  ]

		};
		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
      var ctx_kpi_depart_months = document.getElementById('kpi_depart_months').getContext('2d');
      ctx.height = 500;
      console.log(ctx);
			var mixedChart = new Chart(ctx, {
				type: 'bar',
				data: chartData,
				options: {
					responsive: true,
					tooltips: {
						mode: 'index',
						intersect: true
					},
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero:true,
                      min: 0,
                      max: 1   
                  }
              }]
          }
				}
			});

      var mixedChart = new Chart(ctx_kpi_depart_months, {
				type: 'bar',
				data: data_kpi_depart_months,
				options: {
					responsive: true,
					tooltips: {
						mode: 'index',
						intersect: true
					},
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero:true,
                      min: 0,
                      max: 1   
                  }
              }]
          }
				}
			});
		};

    $('#sel_depart').change(function(){
        let id = $('#sel_depart').val()
        console.log(id);
        
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
@endpush
