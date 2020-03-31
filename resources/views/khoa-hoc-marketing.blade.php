@extends('layouts/master-layout') @section('main')
<section class="box-100 slide-home">
    <picture>
        <source media="(max-width: 600px)" srcset="application/upload/new/dich-vu-dao-tao-quang-cao-sieu-toc.jpg">
        <source media="(min-width: 768px)" srcset="application/upload/new/banner-trang-trong-dao-tao.png">
        <img class="img-responsive" src="application/upload/new/banner-trang-trong-dao-tao.png" title="" alt="">
    </picture>
    <div class="fix-content-slide d-flex align-items-center justify-content-center">
        <div class="col-md-12 title_text title_text1 text-slide">Đào Tạo</div>
    </div>
</section>
<section class="box-100 wapper wapper-service">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <article class="noidung">
                    <h1 style="text-align:center"><span style="font-size:36px"><span style="color:#27ae60"><strong>@foreach($lienhe as $l){{$l->name}}@endforeach</strong></span></span></h1>

                    <h2 style="text-align:center"><span style="color:#2980b9"><em><span style="font-size:18px">Học Viện Đ&agrave;o&nbsp;Tạo Marketing Online Tr&ecirc;n Nền Tảng Giải Ph&aacute;p &quot;<strong>Ma Trận Marketing Bao V&acirc;y</strong>&quot;. </span></em></span></h2>

                    <h2 style="text-align:center"><span style="font-size:18px"><img alt="Quảng Cáo Siêu Tốc Academy" src="upload/MATRAN/ai-phu-hop_4.png" style="height:20px; width:20px" />&nbsp;</span><em><span style="font-size:18px">Phần lớn&nbsp;thời lượng của c&aacute;c kh&oacute;a học được <strong>CEO V&Otilde; TUẤN HẢI</strong> trực tiếp hướng dẫn. 80% l&agrave; thực h&agrave;nh, 20% l&yacute; thuyết thực tế. Xuy&ecirc;n suốt kh&oacute;a học l&agrave; c&aacute;c case study thực tế m&agrave; Quảng C&aacute;o Si&ecirc;u Tốc đ&atilde; trực tiếp trải qua v&agrave; đ&atilde;&nbsp;triển khai cho kh&aacute;ch h&agrave;ng. Cam kết c&oacute; kết quả ngay trong kh&oacute;a học.</span></em></h2>

                    <p style="text-align:justify"><em><span style="font-size:18px"><img alt="CEO VÕ TUẤN HẢI" src="upload/MATRAN/vo-tuan-hai_1.png" style="float:left; height:716px; margin:15px; width:500px" /></span></em><span style="font-size:18px"><img alt="Quảng Cáo Siêu Tốc Academy" src="upload/MATRAN/ai-phu-hop_4.png" style="height:20px; width:20px" />&nbsp;Sau<strong> hơn 10 năm</strong> trực tiếp tư vấn chiến lược v&agrave; thực hiện giải ph&aacute;p marketing online h&agrave;ng trăm kh&aacute;ch h&agrave;ng lớn nhỏ.&nbsp;<strong>CEO V&otilde; Tuấn Hải</strong>&nbsp;của ch&uacute;ng t&ocirc;i nghi&ecirc;n cứu v&agrave; t&igrave;m ra được điểm chung của c&aacute;c m&ocirc; h&igrave;nh đ&atilde; tư vấn v&agrave; triển khai đạt hiệu quả tr&ecirc;n mong đợi,&nbsp;kết hợp với xu hướng c&ocirc;ng nghệ 4.0, CEO của ch&uacute;ng t&ocirc;i đ&atilde;&nbsp;s&aacute;ng tạo ra giải ph&aacute;p&nbsp;</span></p>

                    <h3 style="text-align:center"><span style="font-size:22px"><span style="color:#c0392b"><strong><em>MA TRẬN MARKETING BAO V&Acirc;Y</em></strong></span></span></h3>

                    <h4 style="text-align:justify"><span style="color:#2980b9"><span style="font-size:18px"><em>Giải ph&aacute;p marketing tổng lực dựa tr&ecirc;n phương thức bao v&acirc;y ma trận gi&uacute;p: Đ&aacute;nh bật đối thủ, dẫn đầu ph&acirc;n kh&uacute;c v&agrave;&nbsp;chiếm lĩnh t&acirc;m tr&iacute; kh&aacute;ch h&agrave;ng.</em></span></span></h4>

                    <p style="text-align:justify"><span style="font-size:18px"><img alt="Quảng Cáo Siêu Tốc Academy" src="upload/MATRAN/ai-phu-hop_4.png" style="height:20px; width:20px" /> Ch&uacute;ng t&ocirc;i&nbsp;đ&atilde; trực tiếp &aacute;p dụng giải ph&aacute;p n&agrave;y cho c&aacute;c m&ocirc; h&igrave;nh khởi nghiệp kh&aacute;c của&nbsp;<strong>CEO V&otilde; Tuấn Hải</strong>&nbsp;v&agrave; mang đến nhiều th&agrave;nh c&ocirc;ng lớn. Giải ph&aacute;p n&agrave;y cũng gi&uacute;p nhiều kh&aacute;ch h&agrave;ng của&nbsp;<strong>Quảng C&aacute;o Si&ecirc;u Tốc</strong>&nbsp;th&agrave;nh c&ocirc;ng.&nbsp;</span></p>

                    <p style="text-align:justify"><span style="font-size:18px"><img alt="Quảng Cáo Siêu Tốc Academy" src="upload/MATRAN/ai-phu-hop_4.png" style="height:20px; width:20px" />&nbsp;Ch&iacute;nh v&igrave; thế&nbsp;c&aacute;c kh&oacute;a đ&agrave;o tạo của <strong>Quảng C&aacute;o Si&ecirc;u Tốc </strong>đa số đều được xoay quanh giải ph&aacute;p &quot;<strong>Ma Trận Marketing Bao V&acirc;y</strong>&quot;. Mỗi kh&oacute;a học l&agrave; một mảnh gh&eacute;p của giải ph&aacute;p, mỗi mảnh gh&eacute;p lại&nbsp;c&oacute; những ưu điểm v&agrave; nhược điểm nổi bật m&agrave; trong c&aacute;c kh&oacute;a học sẽ được CEO V&otilde; Tuấn Hải trực tiếp b&oacute;c t&aacute;ch, ph&acirc;n t&iacute;ch v&agrave; chia sẻ cụ thể cho học vi&ecirc;n.</span></p>

                    <p style="text-align:justify"><span style="font-size:18px"><img alt="Các khóa học" src="upload/MATRAN/ai-phu-hop_3.png" style="height:20px; width:20px" />&nbsp;<strong>Quảng C&aacute;o Si&ecirc;u Tốc Academy</strong> c&oacute; 4 loại kh&oacute;a học ch&iacute;nh:</span></p>

                    <p style="text-align:justify"><span style="font-size:18px">1. C&aacute;c kh&oacute;a đ&agrave;o tạo offline<br />
2. C&aacute;c kh&oacute;a đ&agrave;o tạo online<br />
3. C&aacute;c kh&oacute;a đ&agrave;o tạo Inhouse theo y&ecirc;u cầu của doanh nghiệp<br />
4. Kh&oacute;a coaching - 1 k&egrave;m 1 - Cam kết học xong ra nghề</span></p>

                    <p style="text-align:justify"><span style="font-size:18px"><img alt="Quảng Cáo Siêu Tốc Academy" src="upload/MATRAN/ai-phu-hop_4.png" style="height:20px; width:20px" />&nbsp;Click để xem chi tiết về: Giải<strong> </strong>Ph&aacute;p <a href="ma-tran-marketing-bao-vay/index.html"  target="_blank"><strong>MA TRẬN MARKETING BAO V&Acirc;Y</strong></a></span></p>

                    <p style="text-align:justify"><span style="font-size:18px"><img alt="Quảng Cáo Siêu Tốc Academy" src="upload/MATRAN/ai-phu-hop_4.png" style="height:20px; width:20px" />&nbsp;Click để xem chi tiết về: Chuy&ecirc;n Gia Marketing <a href="http://chuyengiamarketing.com/chuyen-gia-marketing-la-ai/" rel="nofollow" target="_blank"><strong>V&Otilde; TUẤN HẢI</strong></a></span></p>
                </article>
            </div>
        </div>
    </div>
</section>
<section class="box-100 service wapper">
    <div class="container">
        <div class="row row-daotao">
          @foreach($danhmuc as $dm)
            <div class="col-md-12 col-sm-12 col-12">
                <div class="title_text title-daotao">{{$dm->name}}</div>
            </div>
            @foreach($khoahoc as $kh)
            @if ($kh->cat_id==$dm->id)
              {{-- expr --}}
            <figure class="col-md-4 col-sm-6 col-6">
                <div class="box-100 item-product itemdaotao" style="background-color:#{{$kh->background}}">
                    <a href="{{route('chi-tiet-khoa-hoc',['id'=>$kh->id,'slug'=>$kh->slug])}}" title="{{$kh->name}}" target="_blank">
                        <picture>
                            <source media="(max-width: 1199px)" srcset="{{url('uploads')}}/{{$kh->image}}">
                            <source media="(min-width: 1200px)" srcset="{{url('uploads')}}/{{$kh->image}}">
                            <img class="lazyload img-thumbnail" src="{{url('uploads')}}/{{$kh->image}}" alt="{{$kh->name}}" title="{{$kh->name}}">
                        </picture>
                    </a>
                    <figcaption>
                        <h2 class="title-h2"><a href="khoa-hoc-dung-phim-voi-adobe-premiere/index.html" title="{{$kh->name}}" target="_blank">{{$kh->name}}</a></h2>
                        <div class="giangvien">{{$kh->description}}</div>
                        <div class="chucvu">CEO - VÕ TUẤN HẢI</div>
                        <div class="price">
                            <div class="pull-left current">{{number_format($kh->price-($kh->price*$kh->sale_price/100))}}<u>đ</u></div>
                            <div class="pull-right"><del>{{number_format($kh->price)}}<u>đ</u></del><span> ({{$kh->sale_price}}%)</span></div>
                        </div>
                    </figcaption>
                </div>
            </figure>
             @endif
            @endforeach
          @endforeach
        </div>
    </div>
</section>
<section class="box-100 wapper wapper-khoahoc">
    <div class="container">
        <article class="noidung">
            <h2 style="font-style:normal; margin-left:0px; margin-right:0px; text-align:center"><span style="font-size:28px"><strong><span style="color:#2980b9">HỌC HIỆU QUẢ = Học Chiến Lược Xuất Sắc + Học Gi&aacute;o Tr&igrave;nh B&agrave;i Bản + Học Kinh Nghiệm Thực Tế&nbsp;</span></strong></span></h2>

            <p style="margin-left:0px; margin-right:0px; text-align:center"><span style="font-size:18px"><strong>Quảng C&aacute;o Si&ecirc;u Tốc</strong> sau nhiều năm thực chiến với những kế hoạch marketing cho ch&iacute;nh c&aacute;c thương hiệu con v&agrave; kh&aacute;ch h&agrave;ng của m&igrave;nh, ch&uacute;ng t&ocirc;i đ&uacute;c kết những kinh nghiệm lại th&agrave;nh những bộ gi&aacute;o tr&igrave;nh chỉnh chu nhất, nhưng case study thực tế nhất, tất cả ch&uacute;ng sẽ được <strong>CEO V&Otilde; TUẤN HẢI</strong> trực tiếp chia sẻ cho c&aacute;c học vi&ecirc;n. </span></p>

            <p style="margin-left:0px; margin-right:0px; text-align:center"><span style="font-size:18px">Tất cả c&aacute;c m&ocirc;n học được&nbsp;x&acirc;y dựng tr&ecirc;n nền tảng giải ph&aacute;p &quot;<strong>Ma Trận Marketing Bao V&acirc;y</strong>&quot;. C&aacute;c kh&oacute;a học kết hợp sẽ&nbsp;tạo n&ecirc;n một quy tr&igrave;nh gồm 3 bước:</span></p>
        </article>
        <div class="row align-items-center row-khoahoc">
            <figure class="col-md-4 col-sm-4 col-12 item-loiich">
                <div class="div-loiich">
                    <i class="fa fa-comments-o" style="border:solid 1px #f3945d; color:#f3945d;"></i>
                </div>
                <figcaption>
                    <div class="title_loiich">Hoàn Thiện Hệ Thống</div>
                    <div class="desc_loiich">
                        <p><span style="font-size:16px">Tập trung ho&agrave;n thiện v&agrave; tối ưu to&agrave;n bộ&nbsp;hệ thống online của&nbsp;Brand</span></p>
                    </div>
                </figcaption>
            </figure>
            <figure class="col-md-4 col-sm-4 col-12 item-loiich">
                <div class="div-loiich">
                    <i class="fa fa-bullhorn" style="border:solid 1px #be71dd; color:#be71dd;"></i>
                </div>
                <figcaption>
                    <div class="title_loiich">Kéo Traffic</div>
                    <div class="desc_loiich">
                        <p><span style="font-size:16px">K&eacute;o Traff&iacute;c Từ Kh&aacute;ch H&agrave;ng T&igrave;m Năng &amp; Từ Kh&aacute;ch H&agrave;ng Của Đối Thủ</span></p>
                    </div>
                </figcaption>
            </figure>
            <figure class="col-md-4 col-sm-4 col-12 item-loiich">
                <div class="div-loiich">
                    <i class="fa fa-heart-o" style="border:solid 1px #18baba; color:#18baba;"></i>
                </div>
                <figcaption>
                    <div class="title_loiich">Ma Trận Bao Vây</div>
                    <div class="desc_loiich">
                        <p><span style="font-size:16px">Thực hiện giải ph&aacute;p Ma Trận Bao V&acirc;y Đa Tầng. Chiếm lĩnh t&acirc;m tr&iacute; kh&aacute;ch h&agrave;ng</span></p>
                    </div>
                </figcaption>
            </figure>
        </div>
        <article class="noidung">
            <p style="text-align:center"><span style="font-size:18px">Kết quả chỉ đến khi bạn tiếp thu kiến thức v&agrave; h&agrave;nh động quyết liệt, h&atilde;y &aacute;p dụng kiến thức học được&nbsp;v&agrave;o thực tiển doanh nghiệp của bạn.&nbsp;<span style="color:#d35400">Th&agrave;nh C&ocirc;ng Kh&ocirc;ng D&agrave;nh Cho Những Người Lười Nh&aacute;c</span></span>
            </p>
            <div style="text-align:center;"><a class="btn btn-secondary btn-secondary-2 translate" href="dang-ky-tu-van/index.html" target="_blank" title="Tư vấn chiến lược tổng thể"><i class="fa fa-comment-o" aria-hidden="true"></i> Tư vấn chiến lược tổng thể</a></div>
        </article>
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
<section class="box-100 noidung danhgia">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="title_h1">Tham gia bình luận</div>
            </div>
            <div class="col-sm-3">
                <div class="global-average-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                    <div class="title-danhgia">Đánh giá trung bình</div>
                    <span class="number"><span  itemprop="ratingValue">5</span>/5</span>
                    <meta itemprop="reviewCount" content="1">
                    <meta itemprop="itemreviewed" content="Đào Tạo" />
                    <p>
                        <span class="nowrap attr-stars">
<i class="fa fa-star fa-2"></i>
<i class="fa fa-star fa-2"></i>
<i class="fa fa-star fa-2"></i>
<i class="fa fa-star fa-2"></i>
<i class="fa fa-star fa-2"></i>
</span>
                    </p>
                </div>
            </div>
            <div class="col-sm-9 noti">
                <p style="text-align:center"><em>&quot;<span style="color:#e74c3c">Lấy Kh&aacute;ch H&agrave;ng L&agrave;m Trọng T&acirc;m, Đặt Lợi &Iacute;ch V&agrave; Mong Muốn Của Kh&aacute;ch H&agrave;ng L&ecirc;n H&agrave;ng Đầu</span>&quot; </em></p>

                <p style="text-align:center"><strong>Quảng C&aacute;o Si&ecirc;u Tốc</strong> lu&ocirc;n lu&ocirc;n tr&acirc;n trọng từng &yacute; kiến của bạn. Nếu bạn c&oacute; thắc mắc cần giải đ&aacute;p, h&atilde;y để lại b&igrave;nh luận b&ecirc;n dưới, ch&uacute;ng t&ocirc;i sẽ trả lời bạn trong thời gian sớm nhất. Hoặc gọi ngay hotline: <a href="tel:0901349349"><strong>0901 349 349</strong></a></p>
            </div>
            <div class="box-comment">
                <form method="post" class="comment_rating" name="comment_rating" id="comment_rating">
                    <div class="col-md-12 col-12 box_com step_2">
                        <div class="form-group mb-3" id="input-tieude">
                            <input type="text" class="form-control tieude" id="tieude" name="tieude" value="" placeholder="Tiêu đề" pattern=".{6,}" tabindex="11" required title="Tiêu đề không để trống">
                        </div>

                    </div>
                    <div class="col-md-12 col-12 step_2">
                        <div class="form-group mb-3" id="input-message_comment">
                            <textarea type="text" class="form-control message_comment" id="message_comment" name="message_comment" value="" placeholder="Nội dung" pattern=".{6,}" tabindex="12" onclick="Showmessage();" required title="Nội dung không để trống"></textarea>
                        </div>
                    </div>
                    <div class="container box_com">
                        <div class="row">
                            <div class="col-md-4 col-12 step_2">
                                <div class="form-group">
                                    <div class="input-group mb-3" id="input-fullname_comment">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control fullname_comment" name="fullname_comment" placeholder="Họ và tên *" value="" pattern=".{6,}" tabindex="13" required title="Họ và tên không để trống">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12 step_2">
                                <div class="form-group">
                                    <div class="input-group mb-3" id="input-email_comment">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-map-marker"></i></span>
                                        </div>
                                        <input type="text" class="form-control email_comment" name="email_comment" id="email_comment" value="" placeholder="Email" tabindex="14" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required title="Email không để trống">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-12 step_2">
                                <div class="form-group">
                                    <div class="input-group mb-3" id="input-phone_comment">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
                                        </div>
                                        <input type="text" class="form-control phone_comment" name="phone_comment" id="phone_comment" value="" placeholder="Điện thoại *" pattern="(\+?\d[- .]*){7,16}" tabindex="15" required title="Điện thoại không để trống">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <div class="hoantat" style="margin-top:0; text-align:center;">
                                        <div class="rating step_2">
                                            <label>Đánh giá của bạn: </label>
                                            <div class="star-rating">
                                                <span class="fa fa-star-o" data-rating="1"></span>
                                                <span class="fa fa-star-o" data-rating="2"></span>
                                                <span class="fa fa-star-o" data-rating="3"></span>
                                                <span class="fa fa-star-o" data-rating="4"></span>
                                                <span class="fa fa-star-o" data-rating="5"></span>
                                                <input type="hidden" name="rating_value" id="rating_value" class="rating_value" value="5">
                                            </div>
                                        </div>
                                        <div class="step_2">
                                            <input type="hidden" class="id_comment" name="id_comment" value="1145">
                                            <input type="hidden" class="group_id" name="group_id" value="1145">
                                            <button type="button" onclick="javascript:formComment('comment_rating');" class="btn btn-info btn-comment btn-cart">Gửi bình luận và đánh giá</button>
                                        </div>
                                    </div>
                                    <!--end tamtinh-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-100 sucesss-comment error"></div>
                </form>
            </div>
            <script>
                var $star_rating = $('.star-rating .fa');
                var SetRatingStar = function() {
                    return $star_rating.each(function() {
                        if (parseInt($star_rating.siblings('input.rating_value').val()) >= parseInt($(this).data('rating'))) {
                            return $(this).removeClass('fa-star-o').addClass('fa-star');
                        } else {
                            return $(this).removeClass('fa-star').addClass('fa-star-o');
                        }
                    });
                };
                $star_rating.on('click', function() {
                    $star_rating.siblings('input.rating_value').val($(this).data('rating'));
                    return SetRatingStar();
                });
                SetRatingStar();
                $(document).ready(function() {});
            </script>
            <script type="text/javascript">
                //formRegister
                function formComment(form) {
                    var idForm = "#" + form;
                    var urlAjax = "gui-comment-daotao/index.html";
                    var textBtn = $(idForm + ' .step_2 .btn').val();
                    $.ajax({
                        type: "POST",
                        url: urlAjax,
                        data: $(idForm).serialize(),
                        dataType: "json",
                        cache: false,
                        beforeSend: function() {
                            $(idForm + ' .form-group input').removeClass('is-invalid');
                            $(idForm + ' .alert').remove();
                            $(idForm + ' .step_2 .btn').val('Đang gửi thông tin...').attr('disabled', 'disabled');
                            $('body').append('<div class="page-loading"><div class="loader-loading"></div></div>');
                        },
                        success: function(result) {
                            if (result.error) {
                                if (result.error.form_id) {
                                    $(idForm + ' .error').prepend('<div class="alert alert-danger mt-1">' + result.error.form_id + '</div>');
                                } else {
                                    $.each(result.error, function(key, value) {
                                        if (value != '') {
                                            $(idForm + ' #input-' + key + ' input').addClass('is-invalid');
                                        }
                                    })
                                    $(idForm + ' .error').prepend('<div class="alert alert-danger mt-1">Vui lòng điền đầy đủ các thông tin bắt buộc</div>');
                                }
                            } else {
                                $(idForm + ' .error').html(
                                    '<div class="mt-1">Cảm ơn bạn đã gửi bình luận và đánh giá về bài viết</div>'
                                );
                                $('.step_2').addClass('d-none');
                                $(idForm + ' .step_2 .btn').addClass('d-none');
                            }
                            $(idForm + ' .step_2 .btn').val(textBtn).removeAttr('disabled', 'disabled');
                            $('body .page-loading').remove();
                        }
                    });
                }
            </script>
            <div class="col-lg-12 col-sm-12 col-12 show-comment detail_4" style="max-height:500px; overflow:hidden;">
                <div id="test-list13">
                    <ul class="ul list">
                    </ul>
                </div>
            </div>
            <!--end show-comment-->
            <div class="box-100 ab__hpd_more ab__hpd_more_4" onclick="showFunction('4')"><span>Xem bình luận khác</span></div>
            <div class="box-100 ab__hpd_close ab__hpd_close_4 d-none" onclick="hiddenFunction('4');scrollToElm('4');return false;"><span>Thu gọn bình luận</span></div>
        </div>
    </div>
</section>
<section class="box-100 tuyendung">
    <img class="lazyload img-responsive" title="Gia Nhập Đại Gia Đình Quảng Cáo Siêu Tốc" alt="Gia Nhập Đại Gia Đình Quảng Cáo Siêu Tốc" src="application/upload/partner/tuyen-dung.png" />
    <div class="content-tuyendung">
        <div class="row-tuyendung">
            <div>
                <p><span style="color:#e74c3c"><span style="font-size:24px">Gia Nhập&nbsp;Đại Gia Đ&igrave;nh </span></span>
                </p>

                <p><span style="font-size:36px"><strong>QUẢNG C&Aacute;O SI&Ecirc;U TỐC</strong></span></p><a class="btn btn-secondary btn-secondary-2 translate" href="tuyen-dung/index.html" title="Gia Nhập Đại Gia Đình Quảng Cáo Siêu Tốc">Gia nhập ngay</a>
            </div>
        </div>
    </div>
</section>
@stop()