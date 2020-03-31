    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin')}}">
        <div class="sidebar-brand-icon">
          <img src="admin/img/logo/logo2.png">
        </div>
        <div class="sidebar-brand-text mx-3">RuangAdmin</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('admin')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Bảng điều khiển</span></a>
        </li>
        <hr class="sidebar-divider">
        <div class="sidebar-heading">
          Chức năng
        </div>
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
          aria-expanded="true" aria-controls="collapseBootstrap">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Quản Lý Dịch Vụ</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Quản Lý Dịch Vụ</h6>
            <a class="collapse-item"  href="{{ route('service_about') }}">Giới Thiệu Chung</a>
            <a class="collapse-item" href="{{route('service_add')}}">Thêm</a>
            <a class="collapse-item" href="{{route('service')}}">Danh sách</a>
            
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Blog"
        aria-expanded="true" aria-controls="Blog">
        <i class="far fa-fw fa-window-maximize"></i>
        <span>Quản Lý Blog</span>
      </a>
      <div id="Blog" class="collapse" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Quản Lý Blog</h6>
          <a class="collapse-item" href="{{route('Cate_Blog_add')}}">Thêm Thể Loại</a>
          <a class="collapse-item" href="{{route('blog_add')}}">Thêm</a>
          <a class="collapse-item" href="{{route('blog')}}">Danh sách</a>

        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#education"
      aria-expanded="true" aria-controls="education">
      <i class="far fa-fw fa-window-maximize"></i>
      <span>Quản Lý Khóa Học</span>
    </a>
    <div id="education" class="collapse" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Quản Lý khóa học</h6>
        <a class="collapse-item" href="{{route('Cate_Education_add')}}">Thêm danh mục</a>
        <a class="collapse-item" href="{{route('education_add')}}">Thêm</a>
        <a class="collapse-item" href="{{route('education')}}">Danh sách</a>

      </div>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#customer" aria-expanded="true"
    aria-controls="customer">
    <i class="fas fa-fw fa-table"></i>
    <span>Quản Lý Khách Hàng</span>
  </a>
  <div id="customer" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Quản Lý Khách Hàng</h6>
      <a class="collapse-item" href="{{route('customer_add')}}">Thêm</a>
      <a class="collapse-item" href="{{route('customer')}}">Danh sách</a>
    </div>
  </div>
</li>
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#about" aria-expanded="true"
  aria-controls="about">
  <i class="fas fa-fw fa-table"></i>
  <span>Giới Thiệu</span>
</a>
<div id="about" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
  <div class="bg-white py-2 collapse-inner rounded">
    <h6 class="collapse-header">Giới Thiệu</h6>
    <a class="collapse-item" href="{{route('about',['status'=>0])}}">Giới Thiệu Công Ty</a>
    <a class="collapse-item" href="{{route('about',['status'=>1])}}">Giới Thiệu CEO </a>
    <a class="collapse-item" href="{{route('about',['status'=>2])}}">Giới Thiệu Nhân Viên </a>
  </div>
</div>
</li>
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#hotline" aria-expanded="true"
  aria-controls="hotline">
  <i class="fas fa-fw fa-table"></i>
  <span>Liên Hệ</span>
</a>
<div id="hotline" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
  <div class="bg-white py-2 collapse-inner rounded">
    <h6 class="collapse-header">Liên Hệ</h6>
    <a class="collapse-item" href="{{route('hotline_add')}}">Thêm</a>
    <a class="collapse-item" href="{{route('hotline')}}">Danh sách</a>
  </div>
</div>
</li>
<hr class="sidebar-divider">
<div class="sidebar-heading">
các form đăng ký
</div>
<li class="nav-item">
  <a class="nav-link" href="{{route('form_education')}}">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Đăng Ký Khóa Học</span><span class="badge badge-danger" style="font-size: 11px;position: absolute;right: 15px ">{{$count_form_education}}</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{route('form_service')}}">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Đăng Ký Dịch Vụ </span><span class="badge badge-danger" style="font-size: 11px;position: absolute;right: 15px ">{{$count_form_service}}</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{route('form_hotline')}}">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Danh Sách Liên Hệ</span><span class="badge badge-danger" style="font-size: 11px;position: absolute;right: 15px ">{{$count_form_hotline}}</span>
  </a>
</li>
@if(Auth::user()->lever==1)
<hr class="sidebar-divider">
<div class="sidebar-heading">
 Quản trị
</div>
<li class="nav-item">
  <a class="nav-link" href="{{route('user')}}">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Quản lý tài khoản</span>
  </a>
</li>
@endif
<hr class="sidebar-divider">
<div class="version" id="version-ruangadmin"></div>
</ul>
    <!-- Sidebar -->