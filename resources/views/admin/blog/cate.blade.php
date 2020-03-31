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
        <legend>Thêm thể loại</legend>
        <div class="form-group">
          <label for="">Tên Thể Loại(*)</label>
          <input type="text" class="form-control  @if($errors->has('name'))is-invalid @endif" name="name"  placeholder="nhập tên thể loại" >
          @if($errors->has('name'))
          <div class="invalid-feedback">
            {{$errors->first('name')}}
          </div>
          @endif
        </div>
         <div class="form-group">
          <label for="">Tiêu đề Thể Loại(*)</label>
          <input type="text" class="form-control  @if($errors->has('title'))is-invalid @endif" name="title"  placeholder="nhập tiêu đề thể loại" >
          @if($errors->has('title'))
          <div class="invalid-feedback">
            {{$errors->first('title')}}
          </div>
          @endif
        </div>
        <style>
          .errors{
            color: red
          }
        </style>
        <div class="form-group">
          <label for="">Tóm tắt dich vụ(*)</label>
          <textarea  name="summary" class="form-control" ></textarea>
          @if($errors->has('summary'))
          
          <div class="errors">{{$errors->first('summary')}}</div>

          @endif
        </div>


        <div class="form-group">
          <label for="">Ảnh Đại Diện(*)</label>
          <div class="input-group">
            <input type="text" class="form-control @if($errors->has('image'))is-invalid @endif" name="image" id="image" placeholder="Trống" readonly>
            @if($errors->has('image'))
            <div class="invalid-feedback">
              {{$errors->first('image')}}
            </div>
            @endif
            <span class="input-group-btn">
              <a href="#modal-file" data-toggle ="modal" class="btn btn-primary">Chọn file</a>
            </span>
          </div>

          <img src="" id="show-image" style="margin: 10px 0" class="img-fluid">
        </div>
        <div class="form-group">
          <label for="">Hiển thị:</label>
          <input type="radio" name="status" value="1" placeholder="" checked>Có
          <input type="radio" name="status" value="0" placeholder="">Không
        </div>
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
              <th>Tiêu Đề</th>
              <th>Ảnh</th>
              <th>Tóm Tắt</th>

              <th>Ngày tạo</th>

              <th >Hành động</th>

            </tr>
          </thead>
          <tbody>
            @foreach($cats as $c)
            <tr>
              <td>{{$c->name}}</td>
              <td>{{$c->title}}</td>
              <td><img src="{{url('uploads')}}/{{$c->image}}" width="80px"></td>
              <td>{{$c->summary}}</td>
              <td>{{$c->created_at}}</td>
              <td>
                @if($c->status==1)
                <a class="btn btn-info"
                href="{{route('Cate_Blog_update_status',['id' =>$c->id,'status'=>0])}}"
                onclick="return confirm('Hành động sẽ ẩn thể loại này! bạn có muốn tiếp tục?')">Ẩn</a>
                @else
                <a class="btn btn-warning"
                href="{{route('Cate_Blog_update_status',['id' =>$c->id,'status'=>1])}}"
                onclick="return confirm('Hành động sẽ hiển thị thể loại này! bạn có muốn tiếp tục?')">Hiển
              thị</a>

              @endif
              <a href="{{route('Cate_Blog_del',['id'=>$c->id ])}}" class="btn btn-danger" title=""  onclick="return confirm('Hành động sẽ xóa thể loại này đồng thời xóa các sản phẩm trong thể loại này! bạn có muốn tiếp tục?')">Xóa</a>
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