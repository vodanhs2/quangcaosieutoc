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
          <legend>Sửa tài khoản</legend>
          <style type="text/css" media="screen">
            .errors{
              color: red;
            }
          </style>
          <div class="form-group">
            <label for="">Tên</label>
            <input type="text" name="name" value="{{$user->name}}" class="form-control" id="" readonly placeholder="nhập tên">
            @if($errors->has('name'))
            <div class="errors">
                        {{$errors->first('name')}}
                      </div>
            @endif
          </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" value="{{$user->email}}" class="form-control" id="" readonly placeholder="nhập email">
            @if($errors->has('email'))
            <div class="errors">
                        {{$errors->first('email')}}
                      </div>
            @endif
          </div>
          <div class="form-group">
            <label for="">Cấp bậc:</label>
            <select name="lever">
              <option value="1" {{$user->lever==1 ? 'selected' : ''}}>Quản trị viên</option>
              <option value="0" {{$user->lever==0 ? 'selected' : ''}}>Công tác viên</option>
            </select>
          </div>
           <div class="form-group">
            <label for="">Mật khẩu</label>
            <input type="password" class="form-control" name="password" id="" placeholder="nhập pass">
            @if($errors->has('password'))
            <div class="errors">
                        {{$errors->first('password')}}
                      </div>
            @endif
          </div>
            <div class="form-group">
            <label for="">Nhập lại mật khẩu</label>
            <input type="password" class="form-control" name="re_password" id="" placeholder="nhập lại pass">
            @if($errors->has('re_password'))
            <div class="errors">
                        {{$errors->first('re_password')}}
                      </div>
            @endif
          </div>
        
          <button type="submit" class="btn btn-primary">Lưu</button>
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

@stop()