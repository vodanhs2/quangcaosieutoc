 @extends('admin/layouts/master-layout')
 @section('main')
 <!-- Container Fluid-->
 <div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Blog</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Trang chủ</a></li>
      <li class="breadcrumb-item">Blog</li>
      <li class="breadcrumb-item active" aria-current="page">Thêm blog</li>
    </ol>
  </div>

  <!-- Row -->
  <div class="row">
    <!-- DataTable with Hover -->
    <div class="col-md-12">
      <div class="card mb-4 p-4">
       @if(session('thongbao'))
       <div class="alert alert-success">
        {{session('thongbao')}}
      </div>
      @endif
      <form action="" method="POST" role="form">
        @csrf
        <legend>Sửa Khách Hàng </legend>

        <div class="form-group">
          <label for="">Tên Khách Hàng(*)</label>
          <input type="text" class="form-control  @if($errors->has('name'))is-invalid @endif" name="name"  value="{{$cus->name}}" placeholder="nhập tên khách hàng" >
          @if($errors->has('name'))
          <div class="invalid-feedback">
            {{$errors->first('name')}}
          </div>
          @endif
        </div>


        <style>
          .errors{
            color: red
          }
        </style>
        <div class="form-group">
          <label for="">Ảnh đại diện</label>
          <div class="input-group">
            <input type="text" class="form-control @if($errors->has('image'))is-invalid @endif" value="{{url('uploads')}}/{{$cus->image}}" name="image" id="image" placeholder="Trống" readonly>
            @if($errors->has('image'))
            <div class="invalid-feedback">
              {{$errors->first('image')}}
            </div>
            @endif
            <span class="input-group-btn">
              <a href="#modal-file" data-toggle ="modal" class="btn btn-primary">Chọn file</a>
            </span>
          </div>

          <img src="{{url('uploads')}}/{{$cus->image}}" id="show-image" style="margin: 10px 0" class="img-fluid">
        </div>
        <div class="form-group">
          <label for="">Nội dung(*)</label>
          <textarea name="content" class="ckeditor form-control @if($errors->has('content'))is-invalid @endif" placeholder="nhập nội dung">{{$cus->content}}</textarea>
          @if($errors->has('content'))
          <div class="invalid-feedback">
            {{$errors->first('content')}}
          </div>
          @endif
        </div>

        <a href="{{route('service')}}" class="btn btn-danger">Hủy</a>
        <button type="submit" class="btn btn-primary">Thêm</button>
      </form>
    </div>
  </div>
</div>
<!--Row-->

</div>
<!---Container Fluid-->
@stop()
@section('js')

<!-- Modal -->
<div class="modal fade" id="modal-file" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable|modal-dialog-centered modal-sm|modal-lg|modal-xl" style="max-width: 10000px !important;width:85%" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Quản lý file</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe src="{{asset('filemanager/dialog.php?field_id=image')}}" style="width: 100%;height: 500px;overflow: auto"></iframe>
      </div>

    </div>
  </div>
</div>
<script type="text/javascript" >
  $('#modal-file').on('hide.bs.modal', function(event) {
   var img = $('input#image').val();
   $('img#show-image').attr('src', img);
 });
</script>
@stop()