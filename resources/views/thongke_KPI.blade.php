@extends('layout')
@section('title')
    Thống kê KPI công ty
@endsection
@push('header')
    {{-- <link rel="stylesheet" href="{{ asset('css/format_managements/index.css') }}"> --}}
@endpush
@push('footer')
    {{-- <script src="{{ asset('js/format_managements/index.js') }}"></script> --}}
@endpush
@section('content')
   <!-- SELECT2 EXAMPLE -->
   <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title" style="margin: 20px 0;">Thống kê KPI của các phòng ban</h3>
      <form action="" method="GET" role="form" class="form-inline">
         
        <div class="form-group">
          <label>Tháng</label>
          <select class="form-control" name="month" >
            <option disabled selected value>Lựa chọn phòng ban</option>
            <option {{ isset($_GET['month']) ? ($_GET['month'] == 1 ? 'selected' : '') : ''}} value="1">Tháng 1</option>
            <option {{ isset($_GET['month']) ? ($_GET['month'] == 2 ? 'selected' : '') : ''}} value="2">Tháng 2</option>
            <option {{ isset($_GET['month']) ? ($_GET['month'] == 3 ? 'selected' : '') : ''}} value="3">Tháng 3</option>
            <option {{ isset($_GET['month']) ? ($_GET['month'] == 4 ? 'selected' : '') : ''}} value="4">Tháng 4</option>
            <option {{ isset($_GET['month']) ? ($_GET['month'] == 5 ? 'selected' : '') : ''}} value="5">Tháng 5</option>
            <option {{ isset($_GET['month']) ? ($_GET['month'] == 6 ? 'selected' : '') : ''}} value="6">Tháng 6</option>
            <option {{ isset($_GET['month']) ? ($_GET['month'] == 7 ? 'selected' : '') : ''}} value="7">Tháng 7</option>
            <option {{ isset($_GET['month']) ? ($_GET['month'] == 8 ? 'selected' : '') : ''}} value="8">Tháng 8</option>
            <option {{ isset($_GET['month']) ? ($_GET['month'] == 9 ? 'selected' : '') : ''}} value="9">Tháng 9</option>
            <option {{ isset($_GET['month']) ? ($_GET['month'] == 10 ? 'selected' : '') : ''}} value="10">Tháng 10</option>
            <option {{ isset($_GET['month']) ? ($_GET['month'] == 11 ? 'selected' : '') : ''}} value="11">Tháng 11</option>
            <option {{ isset($_GET['month']) ? ($_GET['month'] == 12 ? 'selected' : '') : ''}} value="12">Tháng 12</option>

          </select>
      </div>
      <div class="form-group">
          <label>Quý</label>
          <select class="form-control" name="quarter">
            <option disabled selected value>Lựa chọn quý</option>
            <option {{ isset($_GET['quarter']) ? ( $_GET['quarter'] == 1 ? 'selected' : '') : ''}} value="1">Quý 1</option>
            <option {{ isset($_GET['quarter']) ? ( $_GET['quarter'] == 2 ? 'selected' : '') : ''}} value="2">Quý 2</option>
            <option {{ isset($_GET['quarter']) ? ( $_GET['quarter'] == 3 ? 'selected' : '') : ''}} value="3">Quý 3</option>
            <option {{ isset($_GET['quarter']) ? ( $_GET['quarter'] == 4 ? 'selected' : '') : ''}} value="4">Quý 4</option>
            </select>
      </div>
      <div class="form-group">
          <label>Năm</label>
      <input type="number" class="form-control" min="2000" max="2099" name="year" step="1" value="{{ $_GET['year'] ?? 2019}}" />

      </div>

          <button type="submit" class="btn btn-primary">Lọc <i class="fa fa-refresh"></i></button>
      </form>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <canvas id="canvas" height="105"></canvas>
    </div>
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

@endsection

@push('js')
<!-- FLOT CHARTS -->
<script src="{{asset('bower_components/Flot/jquery.flot.js')}}"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="{{asset('bower_components/Flot/jquery.flot.resize.js')}}"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="{{asset('bower_components/Flot/jquery.flot.pie.js')}}"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="{{asset('bower_components/Flot/jquery.flot.categories.js')}}"></script>

<!-- DataTables -->
<script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- Sparkline -->
<script src="{{asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- ChartJS -->


<?php 
  
  $list_department = (array) json_decode(file_get_contents('http://206.189.34.124:5000/api/group8/departments'))->departments;
  $list_name_depart = '';
  $kpi_depart = '';
  if(isset($_GET['month']) && isset($_GET['year']) ){
    foreach($list_department as $department){
      $list_name_depart .= " '" .$department->department_name . "', ";
      $result_kpi_depart =  file_get_contents('http://18.217.21.235:8083/api/v1/departmentKPI/getDepartmentKPIByMonth?month='. $_GET['month']. '&year='. $_GET['year'].'&departmentId=' . $department->id);
      if( $result_kpi_depart != false ){
          $data =json_decode($result_kpi_depart)->data;
          isset($data->kpiValue) ? $kpi_depart .=  " " . $data->kpiValue . "," : '0, ';
      }
     
    }
  }elseif(isset($_GET['quarter']) && isset($_GET['year'])){
    foreach($list_department as $department){
      $list_name_depart .= " '" .$department->department_name . "', ";
      $result_kpi_depart = @file_get_contents('http://18.217.21.235:8083/api/v1/departmentKPI/getDepartmentKPIByMonth?quarter='. $_GET['quarter']. '&year='. $_GET['year'].'&departmentId=' . $department->id);
      if( $result_kpi_depart != false ){
          $data =json_decode($result_kpi_depart)->data;
          isset($data->kpiValue) ? $kpi_depart .=  " " . $data->kpiValue . "," : '0, ';
      }
    }
  }elseif(isset($_GET['year'])){
    foreach($list_department as $department){
      $list_name_depart .= " '" .$department->department_name . "', ";
      $result_kpi_depart = @file_get_contents('http://18.217.21.235:8083/api/v1/departmentKPI/getDepartmentKPIByMonth?year='. $_GET['year'].'&departmentId=' . $department->id);
      if( $result_kpi_depart != false ){
          $data =json_decode($result_kpi_depart)->data;
          isset($data->kpiValue) ? $kpi_depart .=  " " . $data->kpiValue . "," : '0, ';
      }
    }
  }else{
    foreach($list_department as $department){
      $list_name_depart .= " '" .$department->department_name . "', ";
      $result_kpi_depart = @file_get_contents('http://18.217.21.235:8083/api/v1/departmentKPI/getDepartmentKPIByMonth?month=12&year=2019&departmentId=' . $department->id);
      if( $result_kpi_depart != false ){
          $data =json_decode($result_kpi_depart)->data;
          isset($data->kpiValue) ? $kpi_depart .=  " " . $data->kpiValue . "," : '0, ';
      }
    }
  }


  rtrim($list_name_depart, ", ");
  rtrim($kpi_depart, ", ");


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
			labels: [<?php echo $list_name_depart; ?>],
			datasets: [{
				type: 'line',
				label: 'KPI của công ty',
				borderColor: window.chartColors.blue,
				borderWidth: 2,
				data: [
				0.70,
				0.70,
				0.70,
				0.70,
				0.70,
				0.70,
				0.70,
        0.70,
        0.70,
        0.70,
        0.70,
        0.70
				]
			}, {
				type: 'bar',
				label: 'KPI từng phòng ban',
				backgroundColor: window.chartColors.red,
				data: [
				<?= $kpi_depart ?>,
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
@endpush