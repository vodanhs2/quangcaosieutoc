 @extends('admin/layouts/master-layout')
@section('main')
  <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Khóa Học</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Khóa Học</li>
              <li class="breadcrumb-item active" aria-current="page">Danh sách Khóa Học</li>
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
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                 <a href="{{route('education_add')}}" class="btn btn-outline-primary" title="">Thêm</a>
                </div>
                <div class="table-responsive p-3">
                  <table class="table table-bordered table-hover" id="dataTableHover">
                    <thead class="thead-light">
                      <tr>
                                        <th>Tên</th>
                                        
                                          <th>Ảnh</th>
                                        <th>Thể loại</th>
                                        <th>Giá</th>
                                        <th>Giá sale</th>
                                        <th>Ngày tạo</th>
                                        <th >Hành động</th>

                                    </tr>
                    </thead>
                    <tbody>
                      @foreach($education as $s)
                      <tr>
                        <td>{{$s->name}}</td>
                       
                        <td><img src="{{url('uploads')}}/{{$s->image}}" width="80px"></td>
                        <td>{{$s->cate_education}}</td>
                        <td>{{number_format($s->price)}}</td>
                        <td>{{number_format($s->price -($s->price*$s->sale_price/100))}}</td>
                        <td>{{$s->created_at}}</td>
                        <td>
                          <a href="{{route('education_edit',['id'=>$s->id])}}" class="btn btn-primary" title="">Sửa</a>
                          <a href="{{route('education_del',['id'=>$s->id])}}" class="btn btn-danger" title=""  onclick="return confirm('Hành động sẽ xóa khóa học này! bạn có muốn tiếp tục?')">Xóa</a>
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