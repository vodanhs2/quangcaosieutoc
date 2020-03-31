<!DOCTYPE html>
<html lang="en">

<head>
  <base href="{{asset('')}}" target="_blank, _self, _parent, _top">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{asset('img/logo/logo.png')}}" rel="icon">
  <title>RuangAdmin - DataTables</title>
  <link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('admin/css/ruang-admin.min.css')}}" rel="stylesheet">
  <link href="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_pickcolor/css/pick-a-color-1.2.3.min.css">

  {{--  <link href="{{asset('admin/color-picker/classic.min.css')}}" rel="stylesheet">
   <link href="{{asset('admin/color-picker/monolith.min.css')}}" rel="stylesheet">
   <link href="{{asset('admin/color-picker/nano.min.css')}}" rel="stylesheet"> --}}
</head>

<body id="page-top">
   <div id="wrapper">
      @include('admin.layouts.menu')
     <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        @include('admin.layouts.header')
        @yield('main')
    </div>
     @include('admin.layouts.footer')
     </div>
   </div>
     <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('admin/js/ruang-admin.min.js')}}"></script>
  <script src="{{asset('admin/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('admin/js/demo/chart-area-demo.js')}}"></script>  
    <!-- Page level plugins -->
  <script src="{{asset('admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  <script src="admin/tinymce/tinymce.min.js"></script>
    <script src="admin/tinymce/config.js"></script>
    <!-- Page level custom scripts -->
      <!-- ck -->
    <script src="admin/ckeditor/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <script src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_pickcolor/js/pick-a-color-1.2.3.min.js"></script>
   <script src="http://hocwebgiare.com/thiet_ke_web_chuan_demo/bootstrap_pickcolor/js/tinycolor-0.9.15.min.js"></script>
{{--     <script src="admin/color-picker/pickr.min.js"></script>
 --}}  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>
 
        @yield('js')
</body>

</html>