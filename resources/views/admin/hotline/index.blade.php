 @extends('admin/layouts/master-layout')
 @section('main')
 <!-- Container Fluid-->
 <div class="container-fluid" id="container-wrapper">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Khách Hàng</h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="./">Trang Chủ</a></li>
      <li class="breadcrumb-item">Khách Hàng</li>
      <li class="breadcrumb-item active" aria-current="page">Danh sách Khách Hàng</li>
    </ol>
  </div>

  <!-- Row -->
  <div class="row">
    <!-- DataTable with Hover -->

    <div class="col-lg-12">
      <div class="card mb-4">
       @if(session('thongbao'))
       <div class="alert alert-success">
        {{session('thongbao')}}
      </div>
      @endif
     
     <div class="table-responsive p-3">
      <table class="table table-bordered table-hover" id="dataTableHover">
        <thead class="thead-light">
          <tr>
            <th>Tên Công Ty</th>

            <th>Ảnh Logo</th>
            <th>phone</th>

            <th>Email</th>
            <th>Địa Chỉ</th>
            <th>link website</th>
            <th >Hành động</th>

          </tr>
        </thead>
        <tbody>
          @foreach($hotline as $h)
          <tr>
            <td>{{$h->name}}</td>

            <td><img src="{{url('uploads')}}/{{$h->logo}}" width="80px"></td>
            <td>{{$h->phone}}</td>
            <td>{{$h->email}}</td>
            <td>{!!$h->address!!}</td>
            <td>{{$h->website}}</td>
            <td>
              <a href="{{route('hotline_edit',['id'=>$h->id])}}" class="btn btn-primary" title="">Sửa</a>
              <a href="{{route('hotline_del',['id'=>$h->id])}}" class="btn btn-danger" title=""  onclick="return confirm('Hành động sẽ xóa liên hệ này! bạn có muốn tiếp tục?')">Xóa</a>
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