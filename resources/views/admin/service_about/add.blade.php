 @extends('admin/layouts/master-layout')
 @section('main')
 <!-- Container Fluid-->
 <div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Blog</h1>
     <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Trang chủ</a></li>
      <li class="breadcrumb-item">Dich Vụ</li>
        <li class="breadcrumb-item">Giới thiệu chung</li>
      <li class="breadcrumb-item active" aria-current="page">Thêm mới</li>
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
          <legend>Thêm Mới Giới Thiệu </legend>
          
             <div class="form-group">
            <label for="">Nội dung phần đầu (header)</label>
            <textarea name="content_header" class="ckeditor form-control is-invalid" placeholder="nhập nội dung"></textarea>
              
          </div>
            <div class="form-group">
            <label for="">Nội dung phần cuối (footer)</label>
            <textarea name="content_footer" class="ckeditor form-control @if($errors->has('content'))is-invalid @endif" placeholder="nhập nội dung"></textarea>
             
          </div>
            
           <a href="{{route('service_about')}}" class="btn btn-danger">Hủy</a>
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
  $('select#gioi-thieu').change(function(event) {
    /* Act on the event */
    if ($('select#gioi-thieu').val() ==0) {
   $('label#name').html('Tên Công Ty(*)');
    }else if($('select#gioi-thieu').val() ==2){
       $('label#name').html('Tên Nhân Viên(*):');
    }else{
        $('label#name').html('Tên CEO(*):');
    }

    if ($('select#gioi-thieu').val() ==0) {
      $('#iframe-youtube').css('display', 'block');
    }else{
       $('#iframe-youtube').css('display', 'none');
    }
  }); 
</script>
@stop()