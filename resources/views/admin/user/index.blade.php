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

   <nav>
     <div class="nav nav-tabs" id="nav-tab" role="tablist">
       <a class="nav-item nav-link {{$errors==''?'' : 'active'}}" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Danh Sách</a>
       <a class="nav-item nav-link {{$errors==''?'active' : ''}}" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Thêm</a>
     </div>
   </nav>
   <div class="tab-content" id="nav-tabContent">
     <div class="tab-pane fade {{$errors==''?'' : 'show active'}}" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
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
                                        <th>Tên</th>
                                        
                                          <th>email</th>
                                        <th>cấp bậc</th>
                                        
                                        <th>Ngày tạo</th>
                                        <th >Hành động</th>

                                    </tr>
                    </thead>
                    <tbody>
                     @foreach($user as $u)
                      <tr>
                        <td>{{$u->name}}</td>
                       
                        <td>{{$u->email}}</td>
                        <td>{{$u->lever==1 ?'quản trị viên' :'cộng tác viên'}}</td>
                        <td>{{$u->created_at}}</td>
                        <td>
                          <a href="{{route('user_edit',['id'=>$u->id])}}" class="btn btn-primary" title="">Sửa</a>
                          <a href="{{route('user_del',['id'=>$u->id])}}" class="btn btn-danger" title=""  onclick="return confirm('Hành động sẽ xóa blog này! bạn có muốn tiếp tục?')">Xóa</a>
                        </td>
                      </tr>
                      @endforeach
                    
                    
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
     </div>
     <div class="tab-pane fade {{$errors==''?'show active' : ''}}" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
      <div class="card mb-4 p-4">
        <form action="{{route('user_add')}}" method="POST" role="form">
          @csrf
          <legend>Thêm tài khoản</legend>
          <style type="text/css" media="screen">
            .errors{
              color: red;
            }
          </style>
          <div class="form-group">
            <label for="">Tên</label>
            <input type="text" name="name" class="form-control" id="" placeholder="nhập tên">
            @if($errors->has('name'))
            <div class="errors">
                        {{$errors->first('name')}}
                      </div>
            @endif
          </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" class="form-control" id="" placeholder="nhập email">
            @if($errors->has('email'))
            <div class="errors">
                        {{$errors->first('email')}}
                      </div>
            @endif
          </div>
          <div class="form-group">
            <label for="">Cấp bậc:</label>
            <select name="lever">
              <option value="1">Quản trị viên</option>
              <option value="0">Công tác viên</option>
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
  </div>
</div>
<!--Row-->

</div>

<!---Container Fluid-->
@stop()