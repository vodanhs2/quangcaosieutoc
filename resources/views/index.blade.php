@extends('layouts/master-layout')
@section('main')
<section class="box-100 slide-home">
   <div data-ride="carousel" class="carousel carousel-fade" id="carousel-example-captions" data-interval="5000">
      <div role="listbox" class="carousel-inner">
         @foreach($banner as $b)
         <div class="carousel-item carousel-item-slide {{$b->location==1? 'active' :''}} ">
            <img class="img-responsive" src="{{url('uploads')}}/{{$b->image}}">
            <div class="carousel-caption">
               {!!$b->title!!}
               <a class="btn btn-primary" href="{{$b->link}}" target="_blank">Xem ngay</a>
            </div>
         </div>
         @endforeach
      </div>
      <a data-slide="prev" role="button" href="#carousel-example-captions" class="left carousel-control"></a>
      <a data-slide="next" role="button" href="#carousel-example-captions" class="right carousel-control"></a>
   </div>
   <script>
      $(document).ready(function() {
          var myCarousels = $("#carousel-example-captions");
          myCarousels.each(function(index, element) {
              var myCarousel = $("#" + $(element).attr('id'));
              myCarousel.append("<ol class='carousel-indicators'></ol>");
              var indicators = $("#" + $(element).attr('id') + " .carousel-indicators");
              $("#" + $(element).attr('id') + " .carousel-inner").children(".carousel-item").each(function(index) {
                          //console.log(index);
                          (index === 0) ?
                          indicators.append("<li data-target='#" + $(element).attr('id') + "' data-slide-to='" + index + "' class='active'></li>"):
                          indicators.append("<li data-target='#" + $(element).attr('id') + "' data-slide-to='" + index + "'></li>");
                      });
          });
      });
   </script>
</section>
<section class="box-100 about">
   <div class="container">
      <div class="row">
         @foreach($gioithieu as $gt)
         @if($gt->status==0)
         {{-- expr --}}
         <div class="col-md-12 col-sm-12 col-xs-12">
            <h1 class="title_h1">{{$gt->name}}</h1>
            <article class="col-lg-12 col-md-12 col-12  summany max-width">
               {!!$gt->content!!}
               <p style="text-align:center">
                  @if($gt->video!='')
                  {!!$gt->video!!}
                  @else
                  <img src="{{url('uploads')}}/{{$gt->image}}" width="100%" >
                  @endif
               </p>
               <a class="btn btn-primary translate" href="{{route('gioi-thieu')}}" title="{{$gt->name}}">Xem thêm</a>
            </article>
         </div>
         @endif
         @endforeach
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
<section class="box-100 service">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <h2 class="title_h1 title50">Dịch vụ của @foreach($lienhe as $lh){{$lh->name}}@endforeach</h2>
         </div>
       @foreach($dichvu as $dv)
            <figure class="col-md-4 col-sm-4 col-6 col-xs6">
                <div class="box-100 item-product">
                    <a href="ma-tran-marketing-bao-vay/index.html">
                        <picture>
                            <source media="(max-width: 1199px)" srcset="{{url('uploads')}}/{{$dv->image}}">
                            <source media="(min-width: 1200px)" srcset="{{url('uploads')}}/{{$dv->image}}">
                            <img class="lazyload img-thumbnail" src="{{url('uploads')}}/{{$dv->image}}" alt="{{$dv->name}}" title="{{$dv->name}}">
                        </picture>
                    </a>
                    <figcaption>
                        <h2 class="title-h2"><a href="ma-tran-marketing-bao-vay/index.html" title="MARKETING BAO VÂY">{{$dv->name}}</a></h2>
                        <div class="summany line-clamp">{!!$dv->description!!}</div>
                        <div class="time-product">Ngày tạo:{{$dv->created_at}}</div>
                        <a class="btn btn-secondary translate" href="{{route('chi-tiet-dich-vu',['slug' =>$dv->slug,'id'=>$dv->id])}} " title="MARKETING BAO VÂY">[ Xem thêm ]</a>
                    </figcaption>
                </div>
            </figure>
            @endforeach
      </div>
   </div>
</section>
<section class="box-100 phuongphap">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <h2 class="title_h1 title50">Phương pháp của @foreach($lienhe as $lh){{$lh->name}}@endforeach</h2>
         </div>
         <figure class="col-md-4 col-sm-12 col-xs-4">
            <div class="box-100">
               <picture>
                  <source media="(max-width: 1199px)" srcset="application/upload/about_new/thumbs/minh-bach.png">
                  <source media="(min-width: 1200px)" srcset="application/upload/about_new/thumbs/minh-bach.png">
                  <img class="lazyload img-thumbnail" src="application/upload/about_new/thumbs/minh-bach.png" alt="Minh bạch trong triển khai">
               </picture>
               <figcaption>
                  <h3 class="title-h2">Minh bạch trong triển khai</h3>
                  <div class="summany">
                     <p>Chỉ lựa chọn c&aacute;ch l&agrave;m b&agrave;i bản - n&oacute;i kh&ocirc;ng với thủ thuật, blackhat, b&ugrave;ng tiền, click ảo. Tất cả c&aacute;c chiến dịch của ch&uacute;ng t&ocirc;i đều được b&aacute;o c&aacute;o minh bạch cho kh&aacute;ch h&agrave;ng định kỳ</p>
                  </div>
               </figcaption>
            </div>
         </figure>
         <figure class="col-md-4 col-sm-12 col-xs-4">
            <div class="box-100">
               <picture>
                  <source media="(max-width: 1199px)" srcset="application/upload/about_new/thumbs/bai-ban.png">
                  <source media="(min-width: 1200px)" srcset="application/upload/about_new/thumbs/bai-ban.png">
                  <img class="lazyload img-thumbnail" src="application/upload/about_new/thumbs/bai-ban.png" alt="Bài bản trong quy trình">
               </picture>
               <figcaption>
                  <h3 class="title-h2">Bài bản trong quy trình</h3>
                  <div class="summany">
                     <p>Kh&ocirc;ng chỉ dừng lại ở việc nhận y&ecirc;u cầu v&agrave; chạy quảng c&aacute;o - ch&uacute;ng t&ocirc;i nghi&ecirc;n cứu, ph&acirc;n t&iacute;ch v&agrave; tư vấn, c&ugrave;ng bạn t&igrave;m ra những giải ph&aacute;p Digital Marketing thực sự hiệu quả cho doanh nghiệp</p>
                  </div>
               </figcaption>
            </div>
         </figure>
         <figure class="col-md-4 col-sm-12 col-xs-4">
            <div class="box-100">
               <picture>
                  <source media="(max-width: 1199px)" srcset="application/upload/about_new/thumbs/tong-the.png">
                  <source media="(min-width: 1200px)" srcset="application/upload/about_new/thumbs/tong-the.png">
                  <img class="lazyload img-thumbnail" src="application/upload/about_new/thumbs/tong-the.png" alt="Tổng thể trong giải pháp">
               </picture>
               <figcaption>
                  <h3 class="title-h2">Tổng thể trong giải pháp</h3>
                  <div class="summany">
                     <p>Lấy giải ph&aacute;p &quot;Ma Trận Marketing Bao V&acirc;y&quot;&nbsp;l&agrave;m nền tảng trọng t&acirc;m, ch&uacute;ng t&ocirc;i&nbsp;gi&uacute;p bạn triển khai hệ thống Digital Marketing để tối ưu chi ph&iacute;, tăng lợi nhuận/thương hiệu một c&aacute;ch bền vững.</p>
                  </div>
               </figcaption>
            </div>
         </figure>
      </div>
   </div>
</section>
<section class="box-100 about wapper khachhang">
   <div class="container">
      <div class="row" style="margin:0;overflow:hidden;">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="title_h1 title_kh title50">Khách hàng tiêu biểu</div>
         </div>
         <div class="col-md-3 col-sm-4 col-xs-4 box-partner">
            <div class="partner">
               <picture>
                  <source media="(max-width: 1199px)" srcset="application/upload/partner/thumbs/petrolimex-logo.png">
                  <source media="(min-width: 1200px)" srcset="application/upload/partner/thumbs/petrolimex-logo.png">
                  <img class="lazyload img-thumbnail" src="application/upload/partner/thumbs/petrolimex-logo.png" alt="Tập đoàn Xăng dầu Việt Nam (Petrolimex)">
               </picture>
            </div>
         </div>
         <div class="col-md-3 col-sm-4 col-xs-4 box-partner">
            <div class="partner">
               <picture>
                  <source media="(max-width: 1199px)" srcset="application/upload/partner/thumbs/dong-phuong-group-logo.png">
                  <source media="(min-width: 1200px)" srcset="application/upload/partner/thumbs/dong-phuong-group-logo.png">
                  <img class="lazyload img-thumbnail" src="application/upload/partner/thumbs/dong-phuong-group-logo.png" alt="Đông Phương Group">
               </picture>
            </div>
         </div>
         <div class="col-md-3 col-sm-4 col-xs-4 box-partner">
            <div class="partner">
               <picture>
                  <source media="(max-width: 1199px)" srcset="application/upload/partner/thumbs/thaco-truong-hai-logo-1.png">
                  <source media="(min-width: 1200px)" srcset="application/upload/partner/thumbs/thaco-truong-hai-logo-1.png">
                  <img class="lazyload img-thumbnail" src="application/upload/partner/thumbs/thaco-truong-hai-logo-1.png" alt="KIA THACO">
               </picture>
            </div>
         </div>
         <div class="col-md-3 col-sm-4 col-xs-4 box-partner">
            <div class="partner">
               <picture>
                  <source media="(max-width: 1199px)" srcset="application/upload/partner/thumbs/logo-phovip.png">
                  <source media="(min-width: 1200px)" srcset="application/upload/partner/thumbs/logo-phovip.png">
                  <img class="lazyload img-thumbnail" src="application/upload/partner/thumbs/logo-phovip.png" alt="Nội Thất Phố Vip">
               </picture>
            </div>
         </div>
         <div class="col-md-3 col-sm-4 col-xs-4 box-partner">
            <div class="partner">
               <picture>
                  <source media="(max-width: 1199px)" srcset="application/upload/partner/thumbs/logo-novotel-saigon-min.jpg">
                  <source media="(min-width: 1200px)" srcset="application/upload/partner/thumbs/logo-novotel-saigon-min.jpg">
                  <img class="lazyload img-thumbnail" src="application/upload/partner/thumbs/logo-novotel-saigon-min.jpg" alt="Khách Sạn Novotel Saigon Centre">
               </picture>
            </div>
         </div>
         <div class="col-md-3 col-sm-4 col-xs-4 box-partner">
            <div class="partner">
               <picture>
                  <source media="(max-width: 1199px)" srcset="application/upload/partner/thumbs/hoa-binh-logo.png">
                  <source media="(min-width: 1200px)" srcset="application/upload/partner/thumbs/hoa-binh-logo.png">
                  <img class="lazyload img-thumbnail" src="application/upload/partner/thumbs/hoa-binh-logo.png" alt="Địa Ốc Hòa Bình">
               </picture>
            </div>
         </div>
         <div class="col-md-3 col-sm-4 col-xs-4 box-partner">
            <div class="partner">
               <picture>
                  <source media="(max-width: 1199px)" srcset="application/upload/partner/thumbs/logo-dai-hoc-can-tho.png">
                  <source media="(min-width: 1200px)" srcset="application/upload/partner/thumbs/logo-dai-hoc-can-tho.png">
                  <img class="lazyload img-thumbnail" src="application/upload/partner/thumbs/logo-dai-hoc-can-tho.png" alt="Trường Đại Học Cần Thơ (CTU)">
               </picture>
            </div>
         </div>
         <div class="col-md-3 col-sm-4 col-xs-4 box-partner">
            <div class="partner">
               <picture>
                  <source media="(max-width: 1199px)" srcset="application/upload/partner/thumbs/benh-vien-tham-my-sai-gon-logo-2.png">
                  <source media="(min-width: 1200px)" srcset="application/upload/partner/thumbs/benh-vien-tham-my-sai-gon-logo-2.png">
                  <img class="lazyload img-thumbnail" src="application/upload/partner/thumbs/benh-vien-tham-my-sai-gon-logo-2.png" alt="Bệnh Viện Thẩm Mỹ Sài Gòn">
               </picture>
            </div>
         </div>
         <div class="col-md-3 col-sm-4 col-xs-4 box-partner">
            <div class="partner">
               <picture>
                  <source media="(max-width: 1199px)" srcset="application/upload/partner/thumbs/dai-hoc-phan-thiet-logo.png">
                  <source media="(min-width: 1200px)" srcset="application/upload/partner/thumbs/dai-hoc-phan-thiet-logo.png">
                  <img class="lazyload img-thumbnail" src="application/upload/partner/thumbs/dai-hoc-phan-thiet-logo.png" alt="Trường Đại Học Phan Thiết">
               </picture>
            </div>
         </div>
         <div class="col-md-3 col-sm-4 col-xs-4 box-partner">
            <div class="partner">
               <picture>
                  <source media="(max-width: 1199px)" srcset="application/upload/partner/thumbs/nha-khoa-smile-logo.png">
                  <source media="(min-width: 1200px)" srcset="application/upload/partner/thumbs/nha-khoa-smile-logo.png">
                  <img class="lazyload img-thumbnail" src="application/upload/partner/thumbs/nha-khoa-smile-logo.png" alt="Nha Khoa Smile HT">
               </picture>
            </div>
         </div>
         <div class="col-md-3 col-sm-4 col-xs-4 box-partner">
            <div class="partner">
               <picture>
                  <source media="(max-width: 1199px)" srcset="application/upload/partner/thumbs/cat-tuong-group-logo-1.png">
                  <source media="(min-width: 1200px)" srcset="application/upload/partner/thumbs/cat-tuong-group-logo-1.png">
                  <img class="lazyload img-thumbnail" src="application/upload/partner/thumbs/cat-tuong-group-logo-1.png" alt="Tập Đoàn Bất Động Sản Cát Tường">
               </picture>
            </div>
         </div>
         <div class="col-md-3 col-sm-4 col-xs-4 box-partner">
            <div class="partner">
               <picture>
                  <source media="(max-width: 1199px)" srcset="application/upload/partner/thumbs/dai-hoc-quoc-van-sai-gon.png">
                  <source media="(min-width: 1200px)" srcset="application/upload/partner/thumbs/dai-hoc-quoc-van-sai-gon.png">
                  <img class="lazyload img-thumbnail" src="application/upload/partner/thumbs/dai-hoc-quoc-van-sai-gon.png" alt="Hệ Thống Trường Quốc Văn Sài Gòn">
               </picture>
            </div>
         </div>
         <div class="col-md-3 col-sm-4 col-xs-4 box-partner">
            <div class="partner">
               <picture>
                  <source media="(max-width: 1199px)" srcset="application/upload/partner/thumbs/compumax-logo1.png">
                  <source media="(min-width: 1200px)" srcset="application/upload/partner/thumbs/compumax-logo1.png">
                  <img class="lazyload img-thumbnail" src="application/upload/partner/thumbs/compumax-logo1.png" alt="CÔNG TY TNHH TM GIA BẢO AB (Compumax)">
               </picture>
            </div>
         </div>
         <div class="col-md-3 col-sm-4 col-xs-4 box-partner">
            <div class="partner">
               <picture>
                  <source media="(max-width: 1199px)" srcset="application/upload/partner/thumbs/logo-ata-2.png">
                  <source media="(min-width: 1200px)" srcset="application/upload/partner/thumbs/logo-ata-2.png">
                  <img class="lazyload img-thumbnail" src="application/upload/partner/thumbs/logo-ata-2.png" alt="Quà Tặng Doanh Nhiệp ATA">
               </picture>
            </div>
         </div>
         <div class="col-md-3 col-sm-4 col-xs-4 box-partner">
            <div class="partner">
               <picture>
                  <source media="(max-width: 1199px)" srcset="application/upload/partner/thumbs/logo-vikor-1.png">
                  <source media="(min-width: 1200px)" srcset="application/upload/partner/thumbs/logo-vikor-1.png">
                  <img class="lazyload img-thumbnail" src="application/upload/partner/thumbs/logo-vikor-1.png" alt="Thời Trang Vikor">
               </picture>
            </div>
         </div>
         <div class="col-md-3 col-sm-4 col-xs-4 box-partner">
            <div class="partner">
               <picture>
                  <source media="(max-width: 1199px)" srcset="application/upload/partner/thumbs/saigon-xinh-spa-logo-1.png">
                  <source media="(min-width: 1200px)" srcset="application/upload/partner/thumbs/saigon-xinh-spa-logo-1.png">
                  <img class="lazyload img-thumbnail" src="application/upload/partner/thumbs/saigon-xinh-spa-logo-1.png" alt="Sài Gòn Xinh Spa">
               </picture>
            </div>
         </div>
         <div class="col-md-3 col-sm-4 col-xs-4 box-partner">
            <div class="partner">
               <picture>
                  <source media="(max-width: 1199px)" srcset="application/upload/partner/thumbs/dong-giao-logo.png">
                  <source media="(min-width: 1200px)" srcset="application/upload/partner/thumbs/dong-giao-logo.png">
                  <img class="lazyload img-thumbnail" src="application/upload/partner/thumbs/dong-giao-logo.png" alt="Đồng Giao Production">
               </picture>
            </div>
         </div>
         <div class="col-md-3 col-sm-4 col-xs-4 box-partner">
            <div class="partner">
               <picture>
                  <source media="(max-width: 1199px)" srcset="application/upload/partner/thumbs/logo-yanfan-4.png">
                  <source media="(min-width: 1200px)" srcset="application/upload/partner/thumbs/logo-yanfan-4.png">
                  <img class="lazyload img-thumbnail" src="application/upload/partner/thumbs/logo-yanfan-4.png" alt="Công ty TNHH SX-TM-DV Trần Phát">
               </picture>
            </div>
         </div>
         <div class="col-md-3 col-sm-4 col-xs-4 box-partner">
            <div class="partner">
               <picture>
                  <source media="(max-width: 1199px)" srcset="application/upload/partner/thumbs/vu-duong-logo-1.png">
                  <source media="(min-width: 1200px)" srcset="application/upload/partner/thumbs/vu-duong-logo-1.png">
                  <img class="lazyload img-thumbnail" src="application/upload/partner/thumbs/vu-duong-logo-1.png" alt="Công ty TNHH TM Dịch Vụ Tin Học Vũ Dương">
               </picture>
            </div>
         </div>
         <div class="col-md-3 col-sm-4 col-xs-4 box-partner">
            <div class="partner">
               <picture>
                  <source media="(max-width: 1199px)" srcset="application/upload/partner/thumbs/qhouse-logo.png">
                  <source media="(min-width: 1200px)" srcset="application/upload/partner/thumbs/qhouse-logo.png">
                  <img class="lazyload img-thumbnail" src="application/upload/partner/thumbs/qhouse-logo.png" alt="Nhà Thầu Dự Án QHouse.vn">
               </picture>
            </div>
         </div>
      </div>
      <a class="btn btn-secondary btn-secondary-2 translate" href="{{route('khach-hang')}}" title="Khách hàng">Xem thêm khách hàng</a>
   </div>
</section>
<section class="box-100 about ykien">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="title_h1">Ý kiến phản hồi từ khách hàng</div>
            <div class="text-note">
               <p>Sự h&agrave;i l&ograve;ng của kh&aacute;ch h&agrave;ng ch&iacute;nh l&agrave; th&agrave;nh c&ocirc;ng lớn nhất của ch&uacute;ng t&ocirc;i</p>
            </div>
         </div>
         <div class="col-md-10 col-sm-12 col-xs-12 offset-md-1">
            <div data-ride="carousel" class="carousel" id="carousel-example-ykien" data-interval="false">
               <div role="listbox" class="carousel-inner">
                  <div class="carousel-item carousel-item-ykien active">
                     <img alt="Công Ty Xây Dựng Địa Ốc Hòa Bình" src="application/upload/ykien/thumbs/hoa-binh-khach-hang.png">
                     <div class="carousel-caption-ykien">
                        <i class="fa fa-quote-left pull-left" aria-hidden="true"></i>
                        <div style="clear:both"></div>
                        <p style="text-align:justify">Chiến lược marketing của Quảng C&aacute;o Si&ecirc;u Tốc thực sự ấn tượng v&agrave; ph&ugrave; hợp với những sản phẩm c&ocirc;ng ty đang kinh doanh. C&aacute;c chiến dịch do Quảng C&aacute;o Si&ecirc;u Tốc tư vấn đ&atilde; gi&uacute;p ch&uacute;ng t&ocirc;i đưa được nhiều hạng mục dự &aacute;n lớn tới những nh&agrave; đầu tư quy m&ocirc;. Kết quả đạt đ&uacute;ng k&igrave; vọng m&agrave; c&ocirc;ng ty mong muốn.&nbsp;&nbsp;</p>
                        <div class="fullname-ykien">Công Ty Xây Dựng Địa Ốc Hòa Bình</div>
                        <i class="fa fa-quote-right pull-right" aria-hidden="true"></i>
                     </div>
                  </div>
                  <div class="carousel-item carousel-item-ykien ">
                     <img alt="Đồng Giao Production" src="application/upload/ykien/thumbs/khach-hang-dong-giao.png">
                     <div class="carousel-caption-ykien">
                        <i class="fa fa-quote-left pull-left" aria-hidden="true"></i>
                        <div style="clear:both"></div>
                        <p style="text-align:justify">Kh&aacute;ch h&agrave;ng t&igrave;m đến ch&uacute;ng t&ocirc;i nhiều hơn từ khi &aacute;p dụng chiến lược Marketing Bao V&acirc;y của Quảng C&aacute;o Si&ecirc;u Tốc. Ngo&agrave;i ra, c&aacute;c nh&acirc;n vi&ecirc;n của Quảng C&aacute;o Si&ecirc;u Tốc đ&atilde; hỗ trợ t&ocirc;i rất nhiệt t&igrave;nh. Website cũng rất dễ sử dụng v&agrave; quản l&iacute;.</p>
                        <div class="fullname-ykien">Đồng Giao Production</div>
                        <i class="fa fa-quote-right pull-right" aria-hidden="true"></i>
                     </div>
                  </div>
                  <div class="carousel-item carousel-item-ykien ">
                     <img alt="Công Ty TNHH Trần Phát" src="application/upload/ykien/thumbs/khach-hang-tran-phat.png">
                     <div class="carousel-caption-ykien">
                        <i class="fa fa-quote-left pull-left" aria-hidden="true"></i>
                        <div style="clear:both"></div>
                        <p style="text-align:justify">H&atilde;y thử trải nghiệm giải ph&aacute;p b&aacute;n h&agrave;ng của Quảng C&aacute;o Si&ecirc;u Tốc, chắc chắn bạn sẽ kh&ocirc;ng thất vọng. Chiến dịch Marketing bao v&acirc;y do Quảng C&aacute;o Si&ecirc;u Tốc tư vấn ho&agrave;n to&agrave;n ph&ugrave; hợp với đặc th&ugrave; của c&ocirc;ng ty, ng&acirc;n s&aacute;ch được ph&acirc;n phối ph&ugrave; hợp, đơn h&agrave;ng mỗi ng&agrave;y tăng trưởng t&iacute;ch cực.</p>
                        <div class="fullname-ykien">Công Ty TNHH Trần Phát</div>
                        <i class="fa fa-quote-right pull-right" aria-hidden="true"></i>
                     </div>
                  </div>
                  <div class="carousel-item carousel-item-ykien ">
                     <img alt="Quà Tặng Doanh Nghiệp ATA" src="application/upload/ykien/thumbs/khach-hang-ata.png">
                     <div class="carousel-caption-ykien">
                        <i class="fa fa-quote-left pull-left" aria-hidden="true"></i>
                        <div style="clear:both"></div>
                        <p style="text-align:justify">T&ocirc;i rất h&agrave;i l&ograve;ng khi hợp t&aacute;c với Quảng C&aacute;o Si&ecirc;u Tốc, giải ph&aacute;p Marketing Bao V&acirc;y gi&uacute;p c&aacute;c k&ecirc;nh b&aacute;n h&agrave;ng trực tuyến thu h&uacute;t được nhiều kh&aacute;ch h&agrave;ng hơn.&nbsp;</p>
                        <div class="fullname-ykien">Quà Tặng Doanh Nghiệp ATA</div>
                        <i class="fa fa-quote-right pull-right" aria-hidden="true"></i>
                     </div>
                  </div>
               </div>
               <a data-slide="prev" role="button" href="#carousel-example-ykien" class="left carousel-control"></a>
               <a data-slide="next" role="button" href="#carousel-example-ykien" class="right carousel-control"></a>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="box-100 about daotao">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="text-note max-width">
               <h2 style="text-align:center"><span style="font-size:36px"><span style="color:#27ae60"><strong>@foreach($lienhe as $lh){{$lh->name}}@endforeach</strong></span></span></h2>
               <p style="text-align:center"><span style="color:#2980b9"><em><span style="font-size:18px">Học Viện Đ&agrave;o&nbsp;Tạo Marketing Online Tr&ecirc;n Nền Tảng Giải Ph&aacute;p &quot;<strong>Ma Trận Marketing Bao V&acirc;y</strong>&quot;. </span></em>
                  </span>
               </p>
               <p style="text-align:center"><em><span style="font-size:18px">Phần lớn thời lượng của các khóa học được <STRONG>CEO VÕ TUẤN HẢI</STRONG> trực tiếp hướng dẫn. 80% là thực hành, 20% lý thuyết thực tế. Xuyên suốt khóa học là các case study thực tế mà Quảng Cáo Siêu Tốc đã trực tiếp trải qua và đã triển khai cho khách hàng. Cam kết có kết quả ngay trong khóa học.</span></em></p>
               <p style="text-align:center">&nbsp;</p>
            </div>
         </div>
         @foreach($khoahoc as $kh)
         <figure class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
            <div class="tuvan">
               <a href="{{route('chi-tiet-khoa-hoc',['id'=>$kh->id,'slug'=>$kh->slug])}}">
                  <img class="lazyload img-responsive" src="{{url('uploads')}}/{{$kh->image}}" alt="{{$kh->name}}">
                  <figcaption>
                     <div>
                        <h4 class="title_h3">{{$kh->name}}</h4>
                        <div class="summany d-none d-md-block">
                           <div class="line-clamp">{{$kh->description}}</div>
                        </div>
                     </div>
                  </figcaption>
               </a>
            </div>
         </figure>
         @endforeach
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
<link href='style/photo/simplelightbox.min.css' rel='stylesheet' type='text/css'>
<link href='style/photo/demo.css' rel='stylesheet' type='text/css'>
<section class="box-100 album about album-daotao">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="title_h1 tilel-img title_text title-img">Hình ảnh khóa học</div>
         </div>
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row gallery">
               <figure class="col-md-4 col-sm-4 col-xs-6 col-xs6">
                  <div class="box-100 item-product">
                     <a href="application/upload/album/dao-tao-marketing-online-9611.jpg" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 1">
                        <picture>
                           <source media="(max-width: 600px)" srcset="application/upload/album/dao-tao-marketing-online-9611.jpg">
                           <source media="(min-width: 1200px)" srcset="application/upload/album/dao-tao-marketing-online-9611_380x253.jpg">
                           <img class="lazyload img-thumbnail" src="application/upload/album/dao-tao-marketing-online-9611_380x253.jpg" alt="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 1" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 1">
                        </picture>
                     </a>
                  </div>
               </figure>
               <figure class="col-md-4 col-sm-4 col-xs-6 col-xs6">
                  <div class="box-100 item-product">
                     <a href="application/upload/album/dao-tao-zalo-marketing-cho-fpt-telecom-6715.jpg" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 2">
                        <picture>
                           <source media="(max-width: 600px)" srcset="application/upload/album/dao-tao-zalo-marketing-cho-fpt-telecom-6715.jpg">
                           <source media="(min-width: 1200px)" srcset="application/upload/album/dao-tao-zalo-marketing-cho-fpt-telecom-6715_380x253.jpg">
                           <img class="lazyload img-thumbnail" src="application/upload/album/dao-tao-zalo-marketing-cho-fpt-telecom-6715_380x253.jpg" alt="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 2" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 2">
                        </picture>
                     </a>
                  </div>
               </figure>
               <figure class="col-md-4 col-sm-4 col-xs-6 col-xs6">
                  <div class="box-100 item-product">
                     <a href="application/upload/album/hoi-thao-marketing-4-0-tai-dai-hoc-tai-chinh-2072.jpg" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 3">
                        <picture>
                           <source media="(max-width: 600px)" srcset="application/upload/album/hoi-thao-marketing-4-0-tai-dai-hoc-tai-chinh-2072.jpg">
                           <source media="(min-width: 1200px)" srcset="application/upload/album/hoi-thao-marketing-4-0-tai-dai-hoc-tai-chinh-2072_380x253.jpg">
                           <img class="lazyload img-thumbnail" src="application/upload/album/hoi-thao-marketing-4-0-tai-dai-hoc-tai-chinh-2072_380x253.jpg" alt="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 3" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 3">
                        </picture>
                     </a>
                  </div>
               </figure>
               <figure class="col-md-4 col-sm-4 col-xs-6 col-xs6">
                  <div class="box-100 item-product">
                     <a href="application/upload/album/dao-tao-zalo-marketing-2019-6739.jpg" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 4">
                        <picture>
                           <source media="(max-width: 600px)" srcset="application/upload/album/dao-tao-zalo-marketing-2019-6739.jpg">
                           <source media="(min-width: 1200px)" srcset="application/upload/album/dao-tao-zalo-marketing-2019-6739_380x253.jpg">
                           <img class="lazyload img-thumbnail" src="application/upload/album/dao-tao-zalo-marketing-2019-6739_380x253.jpg" alt="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 4" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 4">
                        </picture>
                     </a>
                  </div>
               </figure>
               <figure class="col-md-4 col-sm-4 col-xs-6 col-xs6">
                  <div class="box-100 item-product">
                     <a href="application/upload/album/dao-tao-ve-seo-marketing-9442.jpg" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 5">
                        <picture>
                           <source media="(max-width: 600px)" srcset="application/upload/album/dao-tao-ve-seo-marketing-9442.jpg">
                           <source media="(min-width: 1200px)" srcset="application/upload/album/dao-tao-ve-seo-marketing-9442_380x253.jpg">
                           <img class="lazyload img-thumbnail" src="application/upload/album/dao-tao-ve-seo-marketing-9442_380x253.jpg" alt="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 5" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 5">
                        </picture>
                     </a>
                  </div>
               </figure>
               <figure class="col-md-4 col-sm-4 col-xs-6 col-xs6">
                  <div class="box-100 item-product">
                     <a href="application/upload/album/dao-tao-marketing-online-hang-jojo-2-67.jpg" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 6">
                        <picture>
                           <source media="(max-width: 600px)" srcset="application/upload/album/dao-tao-marketing-online-hang-jojo-2-67.jpg">
                           <source media="(min-width: 1200px)" srcset="application/upload/album/dao-tao-marketing-online-hang-jojo-2-67_380x253.jpg">
                           <img class="lazyload img-thumbnail" src="application/upload/album/dao-tao-marketing-online-hang-jojo-2-67_380x253.jpg" alt="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 6" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 6">
                        </picture>
                     </a>
                  </div>
               </figure>
               <figure class="col-md-4 col-sm-4 col-xs-6 col-xs6">
                  <div class="box-100 item-product">
                     <a href="application/upload/album/dao-tao-marketing-online-hang-jojo-7881.jpg" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 7">
                        <picture>
                           <source media="(max-width: 600px)" srcset="application/upload/album/dao-tao-marketing-online-hang-jojo-7881.jpg">
                           <source media="(min-width: 1200px)" srcset="application/upload/album/dao-tao-marketing-online-hang-jojo-7881_380x253.jpg">
                           <img class="lazyload img-thumbnail" src="application/upload/album/dao-tao-marketing-online-hang-jojo-7881_380x253.jpg" alt="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 7" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 7">
                        </picture>
                     </a>
                  </div>
               </figure>
               <figure class="col-md-4 col-sm-4 col-xs-6 col-xs6">
                  <div class="box-100 item-product">
                     <a href="application/upload/album/dao-tao-chien-luoc-marketing-cho-fpt-telecom-6889.jpg" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 8">
                        <picture>
                           <source media="(max-width: 600px)" srcset="application/upload/album/dao-tao-chien-luoc-marketing-cho-fpt-telecom-6889.jpg">
                           <source media="(min-width: 1200px)" srcset="application/upload/album/dao-tao-chien-luoc-marketing-cho-fpt-telecom-6889_380x253.jpg">
                           <img class="lazyload img-thumbnail" src="application/upload/album/dao-tao-chien-luoc-marketing-cho-fpt-telecom-6889_380x253.jpg" alt="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 8" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 8">
                        </picture>
                     </a>
                  </div>
               </figure>
               <figure class="col-md-4 col-sm-4 col-xs-6 col-xs6">
                  <div class="box-100 item-product">
                     <a href="application/upload/album/dao-tao-google-markeitng-2875.jpg" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 9">
                        <picture>
                           <source media="(max-width: 600px)" srcset="application/upload/album/dao-tao-google-markeitng-2875.jpg">
                           <source media="(min-width: 1200px)" srcset="application/upload/album/dao-tao-google-markeitng-2875_380x253.jpg">
                           <img class="lazyload img-thumbnail" src="application/upload/album/dao-tao-google-markeitng-2875_380x253.jpg" alt="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 9" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 9">
                        </picture>
                     </a>
                  </div>
               </figure>
               <figure class="col-md-4 col-sm-4 col-xs-6 col-xs6">
                  <div class="box-100 item-product">
                     <a href="application/upload/album/dao-tao-zalo-marketing-144.jpg" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 10">
                        <picture>
                           <source media="(max-width: 600px)" srcset="application/upload/album/dao-tao-zalo-marketing-144.jpg">
                           <source media="(min-width: 1200px)" srcset="application/upload/album/dao-tao-zalo-marketing-144_380x253.jpg">
                           <img class="lazyload img-thumbnail" src="application/upload/album/dao-tao-zalo-marketing-144_380x253.jpg" alt="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 10" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 10">
                        </picture>
                     </a>
                  </div>
               </figure>
               <figure class="col-md-4 col-sm-4 col-xs-6 col-xs6">
                  <div class="box-100 item-product">
                     <a href="application/upload/album/dao-tao-seo-google-9619.jpg" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 11">
                        <picture>
                           <source media="(max-width: 600px)" srcset="application/upload/album/dao-tao-seo-google-9619.jpg">
                           <source media="(min-width: 1200px)" srcset="application/upload/album/dao-tao-seo-google-9619_380x253.jpg">
                           <img class="lazyload img-thumbnail" src="application/upload/album/dao-tao-seo-google-9619_380x253.jpg" alt="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 11" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 11">
                        </picture>
                     </a>
                  </div>
               </figure>
               <figure class="col-md-4 col-sm-4 col-xs-6 col-xs6">
                  <div class="box-100 item-product">
                     <a href="application/upload/album/dao-tao-ve-ky-nang-viet-quang-cao-383.jpg" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 12">
                        <picture>
                           <source media="(max-width: 600px)" srcset="application/upload/album/dao-tao-ve-ky-nang-viet-quang-cao-383.jpg">
                           <source media="(min-width: 1200px)" srcset="application/upload/album/dao-tao-ve-ky-nang-viet-quang-cao-383_380x253.jpg">
                           <img class="lazyload img-thumbnail" src="application/upload/album/dao-tao-ve-ky-nang-viet-quang-cao-383_380x253.jpg" alt="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 12" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 12">
                        </picture>
                     </a>
                  </div>
               </figure>
            </div>
         </div>
      </div>
   </div>
</section>
<script type="text/javascript" src="style/photo/simple-lightbox.js"></script>
<script>
   $(function() {
       var $gallery = $('.gallery a').simpleLightbox();
   
       $gallery.on('show.simplelightbox', function() {
           console.log('Requested for showing');
       })
       .on('shown.simplelightbox', function() {
           console.log('Shown');
       })
       .on('close.simplelightbox', function() {
           console.log('Requested for closing');
       })
       .on('closed.simplelightbox', function() {
           console.log('Closed');
       })
       .on('change.simplelightbox', function() {
           console.log('Requested for change');
       })
       .on('next.simplelightbox', function() {
           console.log('Requested for next');
       })
       .on('prev.simplelightbox', function() {
           console.log('Requested for prev');
       })
       .on('nextImageLoaded.simplelightbox', function() {
           console.log('Next image loaded');
       })
       .on('prevImageLoaded.simplelightbox', function() {
           console.log('Prev image loaded');
       })
       .on('changed.simplelightbox', function() {
           console.log('Image changed');
       })
       .on('nextDone.simplelightbox', function() {
           console.log('Image changed to next');
       })
       .on('prevDone.simplelightbox', function() {
           console.log('Image changed to prev');
       })
       .on('error.simplelightbox', function(e) {
           console.log('No image found, go to the next/prev');
           console.log(e);
       });
   });
</script>
<section class="box-100 tuyendung">
   <img class="lazyload img-responsive" title="Gia Nhập Đại Gia Đình Quảng Cáo Siêu Tốc" alt="Gia Nhập Đại Gia Đình Quảng Cáo Siêu Tốc" src="application/upload/partner/tuyen-dung.png" />
   <div class="content-tuyendung">
      <div class="row-tuyendung">
         <div>
            <p><span style="color:#e74c3c"><span style="font-size:24px">Gia Nhập&nbsp;Đại Gia Đ&igrave;nh </span></span>
            </p>
            <p><span style="font-size:36px"><strong>QUẢNG C&Aacute;O SI&Ecirc;U TỐC</strong></span></p>
            <a class="btn btn-secondary btn-secondary-2 translate" href="tuyen-dung/index.blade.php" title="Gia Nhập Đại Gia Đình Quảng Cáo Siêu Tốc">Gia nhập ngay</a>
         </div>
      </div>
   </div>
</section>
@stop()