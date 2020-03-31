 @extends('admin/layouts/master-layout')
 @section('main')
 <!-- Container Fluid-->
 <div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Thể Loại</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Trang chủ</a></li>
      <li class="breadcrumb-item active" aria-current="page">Thêm thể loại</li>
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
        <legend>Thêm Danh Mục Khóa Học</legend>
        <div class="form-group">
          <label for="">Tên Danh Mục(*)</label>
          <input type="text" class="form-control  @if($errors->has('name'))is-invalid @endif" name="name"  placeholder="nhập tên thể loại" >
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
        <a href="{{route('service')}}" class="btn btn-danger">Hủy</a>
        <button type="submit" class="btn btn-primary">Thêm</button>
      </form>
      <hr>
      <div class="table-responsive p-3">
        <legend>Danh sách thể loại</legend>
        <table class="table table-bordered table-hover" id="dataTableHover">
          <thead class="thead-light">
            <tr>
              <th>Tên</th>
             
              <th>Ngày tạo</th>

              <th >Hành động</th>

            </tr>
          </thead>
          <tbody>
            @foreach($cats as $c)
            <tr>
              <td>{{$c->name}}</td>
             
              <td>{{$c->created_at}}</td>
              <td>
                
              <a href="{{route('Cate_Education_del',['id'=>$c->id ])}}" class="btn btn-danger" title=""  onclick="return confirm('Hành động sẽ xóa thể loại này đồng thời xóa các sản phẩm trong thể loại này! bạn có muốn tiếp tục?')">Xóa</a>
            </td>
          </tr>

          @endforeach

        </tbody>
      </table>
    </div>
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