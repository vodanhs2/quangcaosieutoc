 @extends('admin/layouts/master-layout')
 @section('main')
 <!-- Container Fluid-->
 <div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Giới thiệu chung dịch vụ</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Trang chủ</a></li>
      <li class="breadcrumb-item">Dich Vụ</li>
      <li class="breadcrumb-item active" aria-current="page">Giới thiệu chung</li>
    </ol>
  </div>

  <!-- Row -->
  <div class="row">
    <!-- DataTable with Hover -->

    <div class="col-lg-12">

     @if(session('thongbao'))
     <div class="alert alert-success">
      {{session('thongbao')}}
    </div>
    @endif
    @foreach($service_about as $s)
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
     <a href="{{route('service_about_add')}}" class="btn btn-outline-primary" title="">Thêm</a>
     <a href="{{route('service_about_edit',['id'=>$s->id])}}" class="btn btn-outline-success" title="">Sửa</a>
     <a href="{{route('service_about_del',['id'=>$s->id])}}"  onclick="return confirm('Hành động sẽ xóa Dịch vụ này! bạn có muốn tiếp tục?')" class="btn btn-outline-danger" title="">Xóa</a>
   </div>
   <div class="panel panel-primary">
    <div class="panel-heading">
      <h5 style="font-weight: bold" class="panel-title alert alert-info">Nội dung phần đầu(header)</h5>
    </div>
    <div class="panel-body">
      {!!$s->content_header!!}
    </div>
  </div>
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h5 style="font-weight: bold" class="panel-title alert alert-info">Nội dung phần cuối(footer)</h5>
    </div>
    <div class="panel-body">
      {!!$s->content_footer!!}
    </div>
  </div>
  @endforeach
</div>
</div>

<!--Row-->

</div>
<!---Container Fluid-->
@stop()