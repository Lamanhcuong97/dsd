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
 <style>
  .loading{
    width: 100px;
    position: absolute;
    z-index: 999;
    left: 45%;
    top: 69%;
    display: none;
  }

</style>
@endpush
@push('footer')
    {{-- <script src="{{ asset('js/format_managements/index.js') }}"></script> --}}
@endpush
@section('content')

<?php
  $list_user = (array) json_decode(@file_get_contents('http://18.217.21.235:8083/api/v1/userOrganization/findByOrganization?organizationId=' . $id));
  // dd($list_user);
  $list_employee = array();
  foreach($list_user as $user){
    $user_info = json_decode(@file_get_contents('http://it4883dms3.pagekite.me/api/users/' . $user->userId));
    // dd($user_info);
    $list_employee[] = $user_info;
  }
  // dd($list_employee);
  
  function callAPI($method, $url, $data){
    $curl = curl_init();

    switch ($method){
      case "POST":
        curl_setopt($curl, CURLOPT_POST, 1);
        if ($data)
          curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        break;
      case "PUT":
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
        if ($data)
          curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
        break;
      default:
        if ($data)
          $url = sprintf("%s?%s", $url, http_build_query($data));
    }

   // OPTIONS:
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'APIKEY: 111111111111111111111',
      'Content-Type: application/json',
   ));
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER , false);
   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

   // EXECUTE:
   $result = curl_exec($curl);
   if(!$result){die("Connection Failure");}
   curl_close($curl);
   return $result;
}

 $list_labels = callAPI('POST', 'https://falling-frog-38743.pktriot.net/api/labels/search?offset=0&limit=40', "{}");
 $list_labels = json_decode($list_labels);


?>
   
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
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="csllapse"><i class="fa fa-minus"></i></button>
         
      </div>
    </div>  
    <!-- /.box-header -->
    <div class="box-body">
    <form id="create_task_form" action="{{ route('taocongviec.store')}}" method="POST">
      @csrf
        <div class="form-group">
          <label>Tên công việc</label>
          <input type="text" class="form-control" required id="name"  data-parsley-type="text" name="name" placeholder="Tên công việc...">
        </div>
        <div class="form-group">
          <label>Mô tả:</label>
          <textarea class="form-control" required id="description" name="description" rows="5" placeholder="Mô tả ..."></textarea>
        </div>
        <div class="form-group">
          <label>Nhân viên thực hiện</label>
          <select class="form-control" id="doer" name="doer" style="width: 100%;">
            <?php for ($i =0; $i< count($list_employee); $i++){ ?>
              <option value='<?= $list_employee[$i]->id; ?>,<?= $list_employee[$i]->name; ?>'>
                <?php echo ($list_employee[$i]->name)?>
              </option>
            <?php } ?> 
          </select>
        </div>
        <div class="form-group">
          <label>Các nhân viên liên quan</label>
          <select class="form-control select2" multiple="multiple"  id="doers_related" name="coDoers[]" data-placeholder="Chọn các nhân viên"
          style="width: 100%;">
            <?php for ($i =0; $i< count($list_employee); $i++){?>
              <option value='<?= $list_employee[$i]->id; ?>,<?= $list_employee[$i]->name; ?>'>
                <?php echo ($list_employee[$i]->name)?>
              </option>
            <?php } ?> 
          </select>
        </div>
        <div class="form-group">
          <label>Người kiểm tra</label>
          <select class="form-control select2" id="reviewer" name="reviewer" style="width: 100%;">
            @foreach($list_employee as $employee)
              <option value='<?= $employee->id; ?>,<?= $employee->name; ?>'> 
              {{ $employee->name }}</option>
            @endforeach
          </select>
        </div>
        <!-- /.form-group -->
        <div class="form-group">
          <label>Ngày bắt đầu:</label>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input type="text" required class="form-control pull-right" data-parsley-type="text" id="start_date" name="start" value="">
          </div>
          <!-- /.input group -->
        </div>
        <div class="form-group">
          <label>Deadline:</label>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
              <input type="text" required class="form-control pull-right" data-parsley-type="text" name="due" id="deadline"  value="">
          </div>
          <!-- /.input group -->
        </div>
        <!-- /.col -->
    
        <div class="form-group">
          <label>Nhãn công việc</label>
          <select class="form-control select2" required id="type_task"  multiple="multiple" name="labels[]" style="width: 100%;">
          <?php 
              for ($i =0; $i < count($list_labels); $i++){?>
              <option value='<?= $list_labels[$i]->_id; ?>'> 
                
                <?php echo ($list_labels[$i]->name)?></option>
            <?php } ?> 

          </select>
        </div>
        <input type="hidden" name="type" value="individual">
        <input type="hidden" name="departmentId" value="<?php echo($id); ?>">
        <!-- <input type="hidden" name="status" value="doing"> -->
      <div class="form-group">
        <!-- /.col -->
        <button type="submit" class="btn btn-block btn-success btn-create">Tạo công việc</button>
      </div>
    </form>
    <!-- /.row -->
  </div>
  <!-- /.box-body -->

</div>
<!-- /.box -->

<!-- /.row -->

</section>

@endsection

@push('js')
 <!-- Bootstrap 3.3.7 -->
 <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
 <!-- Select2 -->
 <script src="{{ asset('bower_components/select2/dist/js/select2.full.min.js') }}"></script>
 <!-- InputMask -->
 <script src="{{ asset('plugins/input-mask/jquery.inputmask.js') }}"></script>
 <script src="{{ asset('plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
 <script src="{{ asset('plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
 <!-- date-range-picker -->
 <script src="{{ asset('bower_components/moment/min/moment.min.js') }}"></script>
 <script src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
 <!-- bootstrap datepicker -->
 <script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
 <!-- bootstrap color picker -->
 <script src="{{ asset('bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
 <!-- bootstrap time picker -->
 <script src="{{ asset('plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
 <!-- SlimScroll -->
 <script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
 <!-- iCheck 1.0.1 -->
 <script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>
 <!-- FastClick -->
 <script src="{{ asset('bower_components/fastclick/lib/fastclick.js') }}"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
 <!-- Page script -->
 <script>
  $(function () {

    
    $('#create_task_form').validate({ // initialize the plugin
        rules: {
            task_name: {
                required: true
            },
            description: {
                required: true,
            },
            start_date: {
                required: true,
            },
            deadline: {
                required: true,
            },
            department: {
                required: true,
            }
        }
    });

    $('#start_date').change(function(){
          start_date = $('#start_date').val();
          start_date = new Date(start_date);
          start_date = start_date.toISOString();
          $(this).attr('value', start_date);

    })

    $('#department').change(function(){
          departments = $('#department').val();
          departments = JSON.parse(departments);
          $(this).attr('value', departments);
          console.log($(this).val())
    })

    $('#deadline').change(function(){
          deadline =  $('#deadline').val();
          deadline = new Date(deadline);
          deadline = deadline.toISOString();
          $(this).attr('value', deadline);
    })

    $('#deadline').datepicker({
      autoclose: true
    })

    $('#start_date').datepicker({
      autoclose: true
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
