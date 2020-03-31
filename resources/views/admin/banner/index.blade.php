 @extends('admin/layouts/master-layout')
 @section('main')
 <!-- Container Fluid-->
 <div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">tài khoản</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Home</a></li>
      <li class="breadcrumb-item">tài khoản</li>
      <li class="breadcrumb-item active" aria-current="page">danh sách tài khoản</li>
    </ol>
  </div>

  <!-- Row -->
  <!-- DataTable with Hover -->
  <div class="card mb-4 p-4">
    <div class="add mb-4 ">
       <form action="{{route('banner_add')}}" id="form-add" method="POST" role="form">
        @csrf
     <button type="submit" onclick="add_banner()" class="btn-outline-primary btn">Thêm Banner</button>
     </form>
   </div>
   <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
     <?php $n=0; ?>
      @foreach($banner as $b)
       <?php $n++; ?>
      <a class="nav-item nav-link <?= $n==1 ?'active' :''; ?>" id="nav-home-tab<?= $n; ?>" data-toggle="tab" href="#nav-home<?= $n; ?>" role="tab" aria-controls="nav-home<?= $n; ?>" aria-selected="true">banner <?= $n; ?></a>
      @endforeach
    </div>
  </nav>

  <div class="tab-content" id="nav-tabContent">
      <?php $m=0; ?>
   @foreach($banner as $b)
    <?php $m++; ?>
    <div class="tab-pane fade  <?= $m==1 ?'show active' :''; ?>" id="nav-home<?= $m; ?>" role="tabpanel" aria-labelledby="nav-home-tab<?= $m; ?>">
     <div class="card mb-4 p-4">
      <div class="del-banner">
      <a href="{{route('banner_del',['id'=>$b->id])}}" class="btn btn-outline-danger" style="float: right;"  onclick="return confirm('Hành động sẽ xóa banner này! bạn có muốn tiếp tục?')">Xóa banner này</a>
      </div>
      <form action="{{route('banner_edit',['id'=>$b->id])}}" method="POST" role="form">
        @csrf
        <div class="img-banner">
         <img src="{{url('uploads')}}/{{$b->image}}" id="show-image<?= $m; ?>" style="margin: 10px 0" class="img-fluid" width="200px">
       </div>
       <div class="form-group">
        <label for="">Ảnh banner(*)</label>
        <div class="input-group">
          <input type="text" value="{{url('uploads')}}/{{$b->image}}" class="form-control @if($errors->has('image'))is-invalid @endif" name="image" id="image<?= $m; ?>" placeholder="Trống" readonly> @if($errors->has('image'))
          <div class="invalid-feedback">
            {{$errors->first('image')}}
          </div>
          @endif
          <span class="input-group-btn">
            <a href="#modal-file<?= $m; ?>" data-toggle ="modal" class="btn btn-primary">Chọn file</a>
          </span>
        </div>
      </div>
      <div class="form-group">
        <label for="">tiêu đề</label>
        <textarea name="title" placeholder="nhập nội dung" class="ckeditor form-control  ">{{$b->title}}</textarea>

      </div>
      <div class="form-group" >
        <label for="" id="name">Đường link liên kết</label>
        <input type="text" class="form-control " value="{{$b->link}}" name="link" >

      </div>

      
      <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
  </div>
  </div>
   @endforeach
</div>
</div>
</div>
</div>
</div>
<!--Row-->

</div>
<script type="text/javascript">
  function countItem(){
    var item = $('#nav-tab').children().length;
    return item;
  }

  function add_banner(){
    var n = countItem();
    n++;
    $('#nav-tab').append('<a class="nav-item nav-link" id="nav-home-tab'+n+'" data-toggle="tab" href="#nav-home'+n+'" role="tab" aria-controls="nav-home'+n+'" aria-selected="true">banner '+n+' </a> ');
    $('#nav-tabContent').append(' <div class="tab-pane fade" id="nav-home'+n+'" role="tabpanel" aria-labelledby="nav-home-tab'+n+'">  </div>');
    $('#form-add').append('<input type="number" name="location" value="'+n+'" placeholder="" style="display:none;">');
  }
</script>
{{--============================= --}}
<script type="text/javascript">
  @if(session('thongbao'))
  alert('{{session('thongbao')}}');
  @endif
</script>
<!---Container Fluid-->
@stop()
@section('js')

<!-- Modal -->
 <?php $g=0; ?>
   @foreach($banner as $b)
    <?php $g++; ?>
<div class="modal fade" id="modal-file<?= $g;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable|modal-dialog-centered modal-sm|modal-lg|modal-xl" style="max-width: 10000px !important;width:85%" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Quản lý file</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe src="{{asset('filemanager')}}/dialog.php?field_id=image<?= $g;?>" style="width: 100%;height: 500px;overflow: auto"></iframe>
      </div>

    </div>
  </div>
</div>
@endforeach

<script type="text/javascript" >
   <?php $h=0; ?>
   @foreach($banner as $b)
    <?php $h++; ?>
  $('#modal-file<?= $h;?>').on('hide.bs.modal', function(event) {
   var img = $('input#image<?= $h;?>').val();
   $('img#show-image<?= $h;?>').attr('src', img);
 });
  @endforeach
</script>
@stop()