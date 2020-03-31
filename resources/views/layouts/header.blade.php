
<header id="masthead" class="site-header default transparent box-100" role="banner">
    <div class="header-container transparent invert header-btn-visibility">
        <div class="header-container_wrap container">
            <div class="header-container__flex">
                <div class="site-branding">
                    <div class="site-logo site-logo--image">
                        @foreach($lienhe as $h)
                        <a class="site-logo__link" href="{{route('trang-chu')}}" title="LOGO {{$h->name}}"><img src="{{url('uploads')}}/{{$h->logo}}" title="LOGO {{$h->name}}" alt="LOGO {{$h->name}}" /></a>
                        @endforeach
                    </div>
                </div>
                <nav id="site-navigation" class="main-navigation position-relative">
                    <ul id="main-menu" class="menu">
                        <li><a href="{{route('trang-chu')}}" title="Trang Chủ">Trang Chủ</a></li>
                        <li><a href="{{route('gioi-thieu')}}" title="Về chúng tôi" target="_blank">Về Chúng Tôi</a></li>
                        <li class="menu-item-has-children"><a href="{{route('dich-vu')}}" title="dịch vụ">Dịch Vụ</a>
                            <ul class="sub-menu w-100 rounded">
                              <li class="w-100 text-center text-dark li-matran bg-ebebeb"><a class="text-uppercase p-2" href="{{route('dich-vu')}}" title="Dịch Vụ">Dịch Vụ<span class="w-100 d-block mt-2 summany text-none font-weight-normal text-dark"><p>Các chủ doanh nghiệp đang đầu đầu vì phòng Marketing hoạt đồng không hiệu quả ? Đăng ký ngay các giải pháp  giúp: Đánh bật đối thủ, dẫn đầu phân khúc, chiếm lĩnh tâm trí khách hàng. <span style="color:#e74c3c;">Xem Ngay</span></p></span>
                              </a>
                          </li>
                          <li class="d-flex justify-content-between p-2">
                              @foreach($dichvu_noibat as $dv)
                              <div class="div-submenu text-dark ">
                                <a class="text-uppercase font-weight-bold" href="{{route('chi-tiet-dich-vu',['id'=>$dv->id,'slug'=>$dv->slug])}}" title="Quảng Cáo Facebook">{{$dv->name}}<span class="w-100 d-block mt-2 summany text-none font-weight-normal"><p style="text-align: justify;">{{$dv->description}}<span style="color:#e74c3c;">Xem Ngay</span></p></span></a>
                            </div> 
                            @endforeach
                        </li>
                    </ul>
                </li>
                <li><a href="{{route('khoa-hoc')}}" title="Khóa học marketing">Khóa Học Marketing</a>
                </li>
                <li class="menu-item-has-children"><a href="{{route('danh-muc-tin-tuc')}}" title="Blog">Blog</a>
                    <ul class="sub-menu w-100 rounded">
                        <!--style="opacity: 1;visibility: initial;left: 0;transform: translateY(0px);"-->
                        <li class="w-100 text-center text-dark p-2 li-matran bg-ebebeb"><span class="w-100 d-inline-block"><p style="text-align: center;"><a href="{{route('blog')}}"><span style="color:#27ae60;"><strong><span style="font-size:22px;">BLOG</span></strong>
                        </span>
                    </a>
                </p>

                <p> chia sẽ kiến thức về digital marketing hoàn toàn miễn phí, với mong muốn giúp các cá nhân và doanh nghiệp SME ở Việt Nam kinh doanh hiệu quả hơn.</p>
            </span>
        </li>
        <li class="d-flex justify-content-between p-2">
            @foreach($cat_blog_noibat as $c)
            <div class="div-submenu div-submenu-blog text-dark p-1">
                <a class="text-uppercase font-weight-bold" href="facebook-marketing/index.html" title="Facebook Marketing">{{$c->name}}</a>
                <ul class="ul-submenu">
                    @foreach($blog as $b)
                    @if($b->cat_id==$c->id&&$b->location==1)
                    <li><a class="position-relative" href="chay-quang-cao-facebook/index.html" title="Cách Chạy Quảng Cáo Facebook">{{$b->name}}</a></li>
                    @endif
                    @endforeach
                </ul>
            </div>
             @endforeach
        </li>
    </ul>
</li>
<li><a href="{{route('khach-hang')}}" title="Khách hàng">Khách Hàng</a></li>
<li><a href="{{route('tuyen-dung')}}" title="Tuyển dụng">Tuyển Dụng</a></li>
<li><a href="{{route('lien-he')}}" title="Liên hệ" target="_blank">Liên Hệ</a></li>
</ul>
</nav>
</div>
</div>
</div>
<!-- .header-container -->
</header>
