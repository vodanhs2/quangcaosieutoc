 @extends('admin/layouts/master-layout')
 @section('main')
 <!-- Container Fluid-->
 <div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Liên hệ</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Trang chủ</a></li>
      <li class="breadcrumb-item">Liên Hệ</li>
      <li class="breadcrumb-item active" aria-current="page">Thêm liên hệ</li>
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
          <legend>Sửa liên hệ </legend>
         
          <div class="form-group" >
            <label for="" id="name">Tên Công Ty(*)</label>
            <input type="text" class="form-control  @if($errors->has('name'))is-invalid @endif" name="name" value="{{$hotline->name}}"  placeholder="nhập tên" >
            @if($errors->has('name'))
            <div class="invalid-feedback">
                        {{$errors->first('name')}}
                      </div>
            @endif
          </div>
          
          
          <style>
            .errors{
              color: red;
            }
          </style>
              <div class="form-group">
            <label for="">Ảnh Logo(*)</label>
            <div class="input-group">
              <input type="text" value="{{url('uploads')}}/{{$hotline->logo}}" class="form-control @if($errors->has('image'))is-invalid @endif" name="image" id="image" placeholder="Trống" readonly>
               @if($errors->has('image'))
            <div class="invalid-feedback">
                        {{$errors->first('image')}}
                      </div>
            @endif
              <span class="input-group-btn">
                <a href="#modal-file" data-toggle ="modal" class="btn btn-primary">Chọn file</a>
              </span>
            </div>
            <img src="{{url('uploads')}}/{{$hotline->logo}}" id="show-image" style="margin: 10px 0" class="img-fluid">
          </div>
              <div class="form-group" >
            <label for="" >Số điện thoại(*)</label>
            <input type="number" class="form-control  @if($errors->has('phone'))is-invalid @endif" name="phone" value="{{$hotline->phone}}"  placeholder="nhập số điện thoại" >
            @if($errors->has('phone'))
            <div class="invalid-feedback">
                        {{$errors->first('phone')}}
                      </div>
            @endif
          </div>
            <div class="form-group" >
            <label for="" >Email(*)</label>
            <input type="text" class="form-control  @if($errors->has('email'))is-invalid @endif" {{$hotline->email}} name="email"  value="{{$hotline->email}}"  placeholder="nhập email" >
            @if($errors->has('email'))
            <div class="invalid-feedback">
                        {{$errors->first('email')}}
                      </div>
            @endif
          </div>
            <div class="form-group" >
            <label for="">Địa chỉ(*)</label>
           <textarea name="address" class="ckeditor form-control @if($errors->has('address'))is-invalid @endif">{!!$hotline->address!!}</textarea>
            @if($errors->has('address'))
            <div class="invalid-feedback">
                        {{$errors->first('address')}}
                      </div>
            @endif
          </div>
            <div class="form-group" >
            <label for="" id="name">Link website(*)</label>
            <input type="text" class="form-control  @if($errors->has('website'))is-invalid @endif" name="website" value="{{$hotline->website}}"  placeholder="nhập link website" >
            @if($errors->has('website'))
            <div class="invalid-feedback">
                        {{$errors->first('website')}}
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