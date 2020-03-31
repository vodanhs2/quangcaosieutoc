@extends('layouts/master-layout') @section('main')
<section class="box-100 slide-home ">
    <picture>
        <source media="(max-width: 600px)" srcset="application/upload/new/gioi-thieu-quang-cao-sieu-toc-mobile.jpg">
        <source media="(min-width: 768px)" srcset="application/upload/new/gioi-thieu-quang-cao-sieu-toc.jpg">
        <img class="img-responsive" src="application/upload/new/gioi-thieu-quang-cao-sieu-toc.jpg" title="Giới Thiệu Về Quảng Cáo Siêu Tốc" alt="Giới Thiệu Về Quảng Cáo Siêu Tốc">
    </picture>
    <div class="fix-content-slide d-flex align-items-center justify-content-center">
        <div class="col-md-12 title_text title_text1 text-slide">Về chúng tôi</div>
    </div>
</section>
<section class="box-100 wapper wapper-about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                @foreach($gioithieu as $g) @if($g->status==0)
                <article class="noidung">
                    <h1 class="title_h1">{{$g->name}}</h1> {!!$g->content!!}

                </article>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12 left-detail pt-md-4">
                <div class="embed-responsive embed-responsive-16by9">
                    @if($g->video!='') {!!$g->video!!} @else
                    <img src="{{url('uploads')}}/{{$g->image}}" width="100%"> @endif
                </div>
                @endif @endforeach
            </div>
        </div>
    </div>
</section>
<section class="box-100 ceo">
    <div class="container">
        @foreach($gioithieu as $g) @if($g->status==1)
        <div class="row align-items-center">
            <div class="col-md-5 col-sm-5 col-xs-5 imgceo">
                <img class="lazyload img-thumbnail" title="{{$g->name}}" alt="{{$g->name}}" src="{{url('uploads')}}/{{$g->image}}" />
            </div>
            <div class="col-md-7 col-sm-7 col-xs-7 col-md6">
                <!--align-self-center-->
                <h2 class="title_h1 title-ceo">{{$g->name}}</h2>
                <hr>
                <article class="summany" style="overflow:hidden;margin-left: -30px">
                    <ul>
                        {!!$g->content!!}
                    </ul>
                    <a class="btn btn-primary translate" href="http://chuyengiamarketing.com/chuyen-gia-marketing-la-ai/" title="{{$g->name}}" target="_blank" rel="nofollow">Xem thêm</a>
                </article>
            </div>
        </div>
        @endif @endforeach
    </div>
</section>
<section class="box-100 trongtam">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <h4><span style="font-size:40px"><em><span style="font-family:Calibri"><em><span style="color:#f1c40f">@foreach($lienhe as $h){{$h->name}}@endforeach</span> không ngừng nỗ lực mỗi ngày</em></span></em></span></h4>

                <p><span style="font-size:28px"><em><span style="font-family:Calibri"><em>”Không Sợ Mình Thua Người Khác, Chỉ Sợ Mình Hôm Nay Không Hơn Ngày Hôm Qua</em></span></em><span style="font-family:Calibri"><em><span style="font-family:Calibri"><em>&rdquo;</em></span></em>
                    </span>
                    </span>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="box-100 wapper wapper-relation">
    <div class="container">
        <div class="row">
            <figure class="col-md-6 col-sm-6 col-12">
                <div class="row">
                    <div class="col-lg-4  col-sm-4 col-3 img-relation float-lg-left">
                        <picture>
                            <source media="(max-width: 1199px)" srcset="application/upload/new/tam-nhin-cua-quang-cao-sieu-toc.png">
                            <source media="(min-width: 1200px)" srcset="application/upload/new/tam-nhin-cua-quang-cao-sieu-toc.png">
                            <img class="lazyload img-thumbnail" src="application/upload/new/tam-nhin-cua-quang-cao-sieu-toc.png" alt="Tầm Nhìn">
                        </picture>
                    </div>
                    <div class="col-lg-8 col-sm-8 col-9 float-lg-right">
                        <figcaption>
                            <h3 class="title-h3">Tầm Nhìn</h3>
                            <div class="summany line-clamp">ĐĐến năm 2023 @foreach($lienhe as $h){{$h->name}}@endforeach là sự lựa chọn số 1 của khách hàng cá nhân và doanh nghiệp SME khi họ cần tư vấn và thực hiện giải pháp marketing online tại Việt Nam</div>
                        </figcaption>
                    </div>

                </div>
            </figure>
            <figure class="col-md-6 col-sm-6 col-12">
                <div class="row">
                    <div class="col-lg-4  col-sm-4 col-3 img-relation float-lg-left">
                        <picture>
                            <source media="(max-width: 1199px)" srcset="application/upload/new/su-menh-cua-quang-cao-sieu-toc.png">
                            <source media="(min-width: 1200px)" srcset="application/upload/new/su-menh-cua-quang-cao-sieu-toc.png">
                            <img class="lazyload img-thumbnail" src="application/upload/new/su-menh-cua-quang-cao-sieu-toc.png" alt="Sứ Mệnh">
                        </picture>
                    </div>
                    <div class="col-lg-8 col-sm-8 col-9 float-lg-right">
                        <figcaption>
                            <h3 class="title-h3">Sứ Mệnh</h3>
                            <div class="summany line-clamp">@foreach($lienhe as $h){{$h->name}}@endforeach ra đời với sứ mệnh: "Giúp cho các cá nhân và doanh nghiệp SME ở Việt Nam kinh doanh hiệu quả hơn"</div>
                        </figcaption>
                    </div>

                </div>
            </figure>
            <figure class="col-md-6 col-sm-6 col-12">
                <div class="row">
                    <div class="col-lg-4  col-sm-4 col-3 img-relation float-lg-left">
                        <picture>
                            <source media="(max-width: 1199px)" srcset="application/upload/new/gia-tri-cot-loi-cua-quang-cao-sieu-toc.png">
                            <source media="(min-width: 1200px)" srcset="application/upload/new/gia-tri-cot-loi-cua-quang-cao-sieu-toc.png">
                            <img class="lazyload img-thumbnail" src="application/upload/new/gia-tri-cot-loi-cua-quang-cao-sieu-toc.png" alt="Giá Trị Cốt Lỗi">
                        </picture>
                    </div>
                    <div class="col-lg-8 col-sm-8 col-9 float-lg-right">
                        <figcaption>
                            <h3 class="title-h3">Giá Trị Cốt Lỗi</h3>
                            <div class="summany line-clamp">TÍN - TÂM - TRÍ - NHÂN. @foreach($lienhe as $h){{$h->name}}@endforeach đặt chữ TÍN lên vị trí hàng đầu, lấy chữ TÍN làm vũ khí cạnh tranh và bảo vệ chữ TÍN như bảo vệ danh dự của chính mình</div>
                        </figcaption>
                    </div>

                </div>
            </figure>
            <figure class="col-md-6 col-sm-6 col-12">
                <div class="row">
                    <div class="col-lg-4  col-sm-4 col-3 img-relation float-lg-left">
                        <picture>
                            <source media="(max-width: 1199px)" srcset="application/upload/new/phuong-cham-cua-quang-cao-sieu-toc.png">
                            <source media="(min-width: 1200px)" srcset="application/upload/new/phuong-cham-cua-quang-cao-sieu-toc.png">
                            <img class="lazyload img-thumbnail" src="application/upload/new/phuong-cham-cua-quang-cao-sieu-toc.png" alt="Phương Châm">
                        </picture>
                    </div>
                    <div class="col-lg-8 col-sm-8 col-9 float-lg-right">
                        <figcaption>
                            <h3 class="title-h3">Phương Châm</h3>
                            <div class="summany line-clamp">Lấy kh&aacute;ch h&agrave;ng l&agrave;m trung t&acirc;m, đặt lợi &iacute;ch v&agrave; mong muốn của kh&aacute;ch h&agrave;ng l&ecirc;n h&agrave;ng đầu. Từng bước n&acirc;ng cao tr&igrave;nh độ đội ngũ cả về t&acirc;m lẫn t&agrave;i.</div>
                        </figcaption>
                    </div>

                </div>
            </figure>
        </div>
    </div>
</section>
<section class="thongke coutdown">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="box-tk">
                    <img class="lazyload img-thumbnail" src="style/images/img-slogan-1.png" title="Học viên Quảng Cáo Siêu Tốc" alt="Học viên Quảng Cáo Siêu Tốc" />
                    <div class="count-tk">
                        <span class="timer counter-number appear" data-to="1500" data-speed="7000">1500</span> <span>+</span>
                        <br />Học viên
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="box-tk">
                    <img class="lazyload img-thumbnail" src="style/images/img-slogan-2.png" title="Khách hàng Quảng Cáo Siêu Tốc" alt="Khách hàng Quảng Cáo Siêu Tốc" />
                    <div class="count-tk">
                        <span class="timer counter-number appear" data-to="1000" data-speed="7000">1000</span> <span>+</span>
                        <br />Khách hàng
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="box-tk">
                    <img class="lazyload img-thumbnail" src="style/images/img-slogan-3.png" title="Khách hàng hài lòng về Quảng Cáo Siêu Tốc" alt="Khách hàng hài lòng về Quảng Cáo Siêu Tốc" />
                    <div class="count-tk">
                        <span class="timer counter-number appear" data-to="98" data-speed="7000">98</span> <span>%</span>
                        <br />Hài lòng
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="box-100 wapper wapper-doingu">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <h2 class="title_text">Đội ngũ quản lý</h2>
            </div>
        </div>
        <div class="row">
            @foreach($gioithieu as $g) @if($g->status==2)
            <figure class="col-md-3 col-sm-6 col-6 doingu">
                <picture>
                    <source media="(max-width: 600px)" srcset="{{url('uploads')}}/{{$g->image}}">
                    <source media="(min-width: 1200px)" srcset="{{url('uploads')}}/{{$g->image}}">
                    <img class="img-thumbnail" src="{{url('uploads')}}/{{$g->image}}">
                </picture>
                <figcaption>
                    <div class="title-h5">{{$g->name}}</div>
                    {!!$g->content!!}</figcaption>
            </figure>
            @endif @endforeach
        </div>
    </div>
</section>
<section class="box-100 about ykien">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-12">
                <h2 class="title_text title_text1">@foreach($lienhe as $h){{$h->name}}@endforeach giúp gì trong việc kinh doanh online của bạn</h2>
                <div class="text-note">
                    <p>@foreach($lienhe as $h){{$h->name}}@endforeach luôn lấy khách hàng làm trọng tâm, đặt lợi ích mà mong muốn của khách hàng lên hàng đầu.</p>
                </div>
            </div>
            <figure class="col-lg-3 col-md-3 col-sm-6 col-6 item-service">
                <picture>
                    <source media="(max-width: 1199px)" srcset="application/upload/service/thumbs/phan-tich-thi-truong.png">
                    <source media="(min-width: 1200px)" srcset="application/upload/service/thumbs/phan-tich-thi-truong.png">
                    <img class="lazyload img-thumbnail" src="application/upload/service/thumbs/phan-tich-thi-truong.png" alt="Phân Tích Thị Trường" title="Phân Tích Thị Trường">
                </picture>
                <figcaption>
                    <h3 class="title-h6">Phân Tích Thị Trường</h3>
                    <div class="summany">
                        <ul>
                            <li>
                                <div>Ph&acirc;n t&iacute;ch ngh&agrave;nh h&agrave;ng</div>
                            </li>
                            <li>Ph&acirc;n t&iacute;ch kh&aacute;ch h&agrave;ng</li>
                            <li>Ph&acirc;n t&iacute;ch đối thủ cạnh tranh</li>
                            <li>
                                <div>Ph&acirc;n t&iacute;ch ch&iacute;nh bản th&acirc;n&nbsp;thương hiệu</div>
                            </li>
                        </ul>
                    </div>
                </figcaption>
            </figure>
            <figure class="col-lg-3 col-md-3 col-sm-6 col-6 item-service">
                <picture>
                    <source media="(max-width: 1199px)" srcset="application/upload/service/thumbs/la-ke-hoach-marketing.png">
                    <source media="(min-width: 1200px)" srcset="application/upload/service/thumbs/la-ke-hoach-marketing.png">
                    <img class="lazyload img-thumbnail" src="application/upload/service/thumbs/la-ke-hoach-marketing.png" alt="Lập Kế Hoạch Marketing" title="Lập Kế Hoạch Marketing">
                </picture>
                <figcaption>
                    <h3 class="title-h6">Lập Kế Hoạch Marketing</h3>
                    <div class="summany">
                        <ul>
                            <li>
                                <div>Big Idea</div>
                            </li>
                            <li>Th&ocirc;ng điệp truyền th&ocirc;ng</li>
                            <li>Kế hoạch k&eacute;o v&agrave; giữ kh&aacute;ch h&agrave;ng</li>
                            <li>Kế hoạch cạnh tranh với đối thủ</li>
                        </ul>
                    </div>
                </figcaption>
            </figure>
            <figure class="col-lg-3 col-md-3 col-sm-6 col-6 item-service">
                <picture>
                    <source media="(max-width: 1199px)" srcset="application/upload/service/thumbs/toi-uu-he-thong.png">
                    <source media="(min-width: 1200px)" srcset="application/upload/service/thumbs/toi-uu-he-thong.png">
                    <img class="lazyload img-thumbnail" src="application/upload/service/thumbs/toi-uu-he-thong.png" alt="Tạo & Tối Ưu Hệ Thống" title="Tạo & Tối Ưu Hệ Thống">
                </picture>
                <figcaption>
                    <h3 class="title-h6">Tạo & Tối Ưu Hệ Thống</h3>
                    <div class="summany">
                        <ul>
                            <li>
                                <div>Tạo dựng hệ thống Online</div>
                            </li>
                            <li>
                                <div>Ph&aacute;t triển nội dung cho hệ thống</div>
                            </li>
                            <li>
                                <div>Tối ưu hệ thống online</div>
                            </li>
                            <li>Định hướng ph&aacute;t triển hệ thống</li>
                        </ul>
                    </div>
                </figcaption>
            </figure>
            <figure class="col-lg-3 col-md-3 col-sm-6 col-6 item-service">
                <picture>
                    <source media="(max-width: 1199px)" srcset="application/upload/service/thumbs/thuc-thi-ke-hoach.png">
                    <source media="(min-width: 1200px)" srcset="application/upload/service/thumbs/thuc-thi-ke-hoach.png">
                    <img class="lazyload img-thumbnail" src="application/upload/service/thumbs/thuc-thi-ke-hoach.png" alt="Thực Thi Kế Hoạch" title="Thực Thi Kế Hoạch">
                </picture>
                <figcaption>
                    <h3 class="title-h6">Thực Thi Kế Hoạch</h3>
                    <div class="summany">
                        <ul>
                            <li>
                                <div>Google Ads, SEO, Cốc Cốc Ads</div>
                            </li>
                            <li>Facebook Ads, Zalo Ads</li>
                            <li>
                                <div>Youtube Ads, Email Marketing</div>
                            </li>
                            <li>
                                <div><strong>Ma Trận Marketing Bao V&acirc;y</strong></div>
                            </li>
                        </ul>
                    </div>
                </figcaption>
            </figure>
        </div>
    </div>
</section>
<section class="box-100 phuongphap">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h2 class="title_h1 title50">QUẢNG CÁO SIÊU TỐC CAM KẾT</h2></div>
            <figure class="col-md-3 col-sm-6 col-xs-4">
                <div class="box-100">
                    <picture>
                        <source media="(max-width: 1199px)" srcset="application/upload/content/nhiet-tam-tu-van.png">
                        <source media="(min-width: 1200px)" srcset="application/upload/content/nhiet-tam-tu-van.png">
                        <img class="lazyload img-thumbnail" src="application/upload/content/nhiet-tam-tu-van.png" alt="nhiệt tâm tư vấn" title="nhiệt tâm tư vấn">
                    </picture>
                    <figcaption>
                        <h3 class="title-h2">Nhiệt tâm tư vấn</h3>
                        <div class="summany">
                            <p><span style="font-size:16px">@foreach($lienhe as $h){{$h->name}}@endforeach luôn luôn nhiệt tâm trong việc phân tích và tư vấn giải pháp cho khách hàng</span></p>
                        </div>
                    </figcaption>
                </div>
            </figure>
            <figure class="col-md-3 col-sm-6 col-xs-4">
                <div class="box-100">
                    <picture>
                        <source media="(max-width: 1199px)" srcset="application/upload/content/het-minh-thuc-thi.png">
                        <source media="(min-width: 1200px)" srcset="application/upload/content/het-minh-thuc-thi.png">
                        <img class="lazyload img-thumbnail" src="application/upload/content/het-minh-thuc-thi.png" alt="hết mình thực thi" title="hết mình thực thi">
                    </picture>
                    <figcaption>
                        <h3 class="title-h2">Hết mình thực thi</h3>
                        <div class="summany">
                            <p><span style="font-size:16px">Toàn thể đội ngũ của  @foreach($lienhe as $h){{$h->name}}@endforeach ccam kết hết mình thực thi giải pháp vì khách hàng phục vụ</span></p>
                        </div>
                    </figcaption>
                </div>
            </figure>
            <figure class="col-md-3 col-sm-6 col-xs-4">
                <div class="box-100">
                    <picture>
                        <source media="(max-width: 1199px)" srcset="application/upload/content/bao-cao.png">
                        <source media="(min-width: 1200px)" srcset="application/upload/content/bao-cao.png">
                        <img class="lazyload img-thumbnail" src="application/upload/content/bao-cao.png" alt="trung thực báo cáo" title="trung thực báo cáo">
                    </picture>
                    <figcaption>
                        <h3 class="title-h2">Trung thực báo cáo</h3>
                        <div class="summany">
                            <p><span style="font-size:16px">Trong tất cả c&aacute;c chiến dịch d&ugrave; lớn hay nhỏ ch&uacute;ng t&ocirc;i lu&ocirc;n cam kết số liệu b&aacute;o c&aacute;o l&agrave; trung thực 100%</span></p>
                        </div>
                    </figcaption>
                </div>
            </figure>
            <figure class="col-md-3 col-sm-6 col-xs-4">
                <div class="box-100">
                    <picture>
                        <source media="(max-width: 1199px)" srcset="application/upload/content/hoan-tien.png">
                        <source media="(min-width: 1200px)" srcset="application/upload/content/hoan-tien.png">
                        <img class="lazyload img-thumbnail" src="application/upload/content/hoan-tien.png" alt="hoàn tiền" title="hoàn tiền">
                    </picture>
                    <figcaption>
                        <h3 class="title-h2">Hoàn tiền</h3>
                        <div class="summany">
                            <p><span style="font-size:16px">Ch&uacute;ng t&ocirc;i&nbsp;cam kết ho&agrave;n tiền nếu quảng c&aacute;o kh&ocirc;ng ổn định cho&nbsp;những chiến dịch cam kết theo thời gian</span></p>
                        </div>
                    </figcaption>
                </div>
            </figure>
        </div>
    </div>
</section>

@stop()