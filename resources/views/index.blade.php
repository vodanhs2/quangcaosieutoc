@extends('layouts/master-layout')
@section('main')
    <section class="box-100 slide-home">
        <div data-ride="carousel" class="carousel carousel-fade" id="carousel-example-captions" data-interval="5000">
            <div role="listbox" class="carousel-inner">
                <div class="carousel-item carousel-item-slide active">
                    <img class="img-responsive" alt="Về QUẢNG CÁO SIÊU TỐC" src="application/upload/banner/doi-ngu-quang-cao-sieu-toc.jpg">
                    <div class="carousel-caption">
                        <p><span style="color:#f1c40f"><span style="font-size:48px"><strong>QUẢNG C&Aacute;O SI&Ecirc;U TỐC. Com</strong></span></span>
                        </p>

                        <p><span style="font-size:24px"><em>CEO V&otilde; Tuấn Hải - <strong>Hơn 11 năm </strong>tư vấn v&agrave; thực thi giải ph&aacute;p marketing online tổng thể cho c&aacute;c c&aacute; nh&acirc;n v&agrave; doanh nghiệp SME ở Việt Nam.&nbsp;</em></span></p>

                        <p>&nbsp;</p> <a class="btn btn-primary" href="gioi-thieu-quang-cao-sieu-toc/index.blade.php" title="Về QUẢNG CÁO SIÊU TỐC" target="_blank">Xem ngay</a>
                    </div>
                </div>
                <div class="carousel-item carousel-item-slide ">
                    <img class="img-responsive" alt="MA TRẬN MARKETING BAO VÂY" src="application/upload/banner/ma-tran-marketing-bao-vay-quang-cao-sieu-toc.jpg">
                    <div class="carousel-caption">
                        <p><u><span style="font-size:22px">GIẢI PH&Aacute;P</span></u></p>

                        <p><span style="font-size:48px"><span style="color:#f1c40f"><strong>&quot;MA TRẬN MARKETING BAO V&Acirc;Y&quot;</strong></span></span>
                        </p>

                        <p><em><span style="font-size:20px">L&agrave; giải ph&aacute;p marketing tổng lực do <strong>CEO V&Otilde; TUẤN HẢI</strong> s&aacute;ng lập gi&uacute;p:&nbsp;</span></em></p>

                        <p><span style="font-size:24px"><img alt="yes" src="Style_admin/ckeditor/plugins/smiley/images/thumbs_up.png" style="height:23px; width:23px" title="yes" />&nbsp;Đ&aacute;nh bật đối thủ</span></p>

                        <p><span style="font-size:24px"><img alt="yes" src="Style_admin/ckeditor/plugins/smiley/images/thumbs_up.png" style="height:23px; width:23px" title="yes" />&nbsp;Dẫn đầu ph&acirc;n kh&uacute;c</span></p>

                        <p><span style="font-size:24px"><img alt="yes" src="Style_admin/ckeditor/plugins/smiley/images/thumbs_up.png" style="height:23px; width:23px" title="yes" />&nbsp;Chiếm lĩnh t&acirc;m tr&iacute; kh&aacute;ch h&agrave;ng</span></p> <a class="btn btn-primary" href="ma-tran-marketing-bao-vay/index.blade.php" title="MA TRẬN MARKETING BAO VÂY" target="_self">Xem ngay</a>
                    </div>
                </div>
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

                <div class="col-md-12 col-sm-12 col-xs-12">

                    <h1 class="title_h1">Về QUẢNG CÁO SIÊU TỐC</h1>

                    <article class="col-lg-12 col-md-12 col-12  summany max-width">
                        <p style="text-align:justify"><span style="font-size:18px"><strong>Quảng C&aacute;o Si&ecirc;u Tốc</strong> l&agrave; một thương hiệu của <strong>C&Ocirc;NG TY QUỐC TẾ DMV</strong>, được s&aacute;ng lập bởi anh <strong>V&otilde; Tuấn Hải</strong> với hơn <strong>11 năm kinh nghiệm</strong> digital marketing. <strong>Quảng C&aacute;o Si&ecirc;u Tốc</strong> ra đời với sứ mệnh: &quot;<em>Gi&uacute;p cho c&aacute;c c&aacute; nh&acirc;n v&agrave; doanh nghiệp SME ở Việt Nam kinh doanh hiệu quả hơn</em>&quot;. </span></p>

                        <p style="text-align:justify"><span style="font-size:18px"><strong>Quảng C&aacute;o Si&ecirc;u Tốc</strong>&nbsp;đ&atilde; v&agrave; đang cung cấp c&aacute;c dịch vụ digital marketing&nbsp;cho c&aacute;c c&aacute; nh&acirc;n v&agrave; doanh nghiệp SME. Kh&ocirc;ng chỉ dừng lại ở việc chạy quảng c&aacute;o th&ocirc;ng thường, ch&uacute;ng t&ocirc;i tư vấn chiến lược v&agrave; cung cấp giải ph&aacute;p marketing online tổng thể cho kh&aacute;ch h&agrave;ng. T&ugrave;y v&agrave;o đặc th&ugrave; từng sản phẩm/ dịch vụ, t&ugrave;y v&agrave;o mục ti&ecirc;u v&agrave; thời điểm ch&uacute;ng t&ocirc;i sẽ tư vấn chiến lược v&agrave; sử dụng c&aacute;c c&ocirc;ng cụ online kết hợp kh&aacute;c nhau để đem đến hiệu quả tốt nhất cho kh&aacute;ch h&agrave;ng.</span></p>

                        <p style="text-align:center">
                            <iframe frameborder="0" height="480" src="https://www.youtube.com/embed/HOzQIvYUx0I" width="850"></iframe>
                        </p>
                        <a class="btn btn-primary translate" href="gioi-thieu/index.blade.php" title="Về QUẢNG CÁO SIÊU TỐC">Xem thêm</a>

                    </article>

                </div>

            </div>

        </div>

    </section>

    <section class="box-100 ceo">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-sm-5 col-xs-5 imgceo">
                    <img class="lazyload img-thumbnail" title="VỀ CEO & FOUNDER: VÕ TUẤN HẢI" alt="VỀ CEO & FOUNDER: VÕ TUẤN HẢI" src="application/upload/partner/ceo-vo-tuan-hai.jpg" />
                </div>
                <div class="col-md-7 col-sm-7 col-xs-7 col-md6">
                    <!--align-self-center-->
                    <h2 class="title_h1 title-ceo">VỀ CEO & FOUNDER: VÕ TUẤN HẢI</h2>
                    <article class="summany">
                        <p><span style="color:#ffff00"><em>Chuy&ecirc;n gia marketing 11 năm kinh nghiệm</em></span></p>

                        <hr />

                        <ul>
                            <li><strong><font color="#ffff00">PH&Oacute; THỦ TƯỚNG</font></strong><strong>&nbsp;</strong>&amp;<strong> Đo&agrave;n Đại Biểu Cấp Cao</strong>&nbsp;<span style="color:#ffff00;">Đến Tận Nh&agrave; Thăm</span> M&ocirc; H&igrave;nh L&agrave;m Marketing 21/8/2014</li>
                            <li>S&aacute;ng Lập Giải Ph&aacute;p &quot;<strong>Ma Trận Marketing Bao V&acirc;y</strong>&quot;</li>
                            <li>S&aacute;ng Lập <strong>Websieutoc.Vn</strong> - Tạo&nbsp;Web: Nhanh - Đẹp - Chuy&ecirc;n Nghiệp</li>
                            <li>S&aacute;ng Lập <strong>Quảng C&aacute;o Si&ecirc;u Tốc Academy</strong> - Học Viện Đ&agrave;o Tạo Marketing Online</li>
                            <li>Giảng Vi&ecirc;n Cao Cấp&nbsp;Tại C&aacute;c Học Viện Digital Marketing H&agrave;ng Đầu VN</li>
                            <li>Nhiều Lần Xuất Hiện Tr&ecirc;n&nbsp;<strong>VTV3</strong>, <strong>THVL1</strong>, <strong>THVL2</strong>, <strong>Thời B&aacute;o Kinh Tế Việt Nam</strong>,..</li>
                            <hr />
                            <li><span style="color:#ffff00;">Di Động: <strong>0987 087 034</strong><strong> - </strong>Email: tuanhaikh@gmail.com</span></li>
                        </ul><a class="btn btn-primary translate" href="http://chuyengiamarketing.com/chuyen-gia-marketing-la-ai/" title="VỀ CEO & FOUNDER: VÕ TUẤN HẢI" target="_blank" rel="nofollow">Xem thêm</a>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="box-100 service">

        <div class="container">

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h2 class="title_h1 title50">Dịch vụ của quảng cáo siêu tốc</h2></div>

                <figure class="col-md-4 col-sm-4 col-6 col-xs6">

                    <div class="box-100 item-product">

                        <a href="ma-tran-marketing-bao-vay/index.blade.php">
                            <picture>

                                <source media="(max-width: 1199px)" srcset="application/upload/new/ma-tran-marketing-bao-vay1.jpg">

                                <source media="(min-width: 1200px)" srcset="application/upload/new/ma-tran-marketing-bao-vay1.jpg">

                                <img class="lazyload img-thumbnail" src="application/upload/new/ma-tran-marketing-bao-vay1.jpg" alt="MARKETING BAO VÂY">

                            </picture>

                        </a>

                        <figcaption>

                            <h3 class="title-h2"><a href="ma-tran-marketing-bao-vay/index.blade.php">MARKETING BAO VÂY</a></h3>

                            <div class="summany line-clamp">Giải ph&aacute;p marketing tổng lực gi&uacute;p: Đ&aacute;nh bật đối thủ, dẫn đầu ph&acirc;n kh&uacute;c &amp; chiếm lĩnh t&acirc;m tr&iacute; kh&aacute;ch h&agrave;ng. Giải ph&aacute;p do CEO V&otilde; Tuấn Hải đ&uacute;c kết hơn 10 năm kinh nghiệm&nbsp;s&aacute;ng lập</div>

                            <div class="time-product">Từ Năm: 2018</div>

                            <a class="btn btn-secondary translate" href="ma-tran-marketing-bao-vay/index.blade.php">[ Xem thêm ]</a>

                        </figcaption>

                    </div>

                </figure>

                <figure class="col-md-4 col-sm-4 col-6 col-xs6">

                    <div class="box-100 item-product">

                        <a href="bang-gia-quang-cao-facebook/index.blade.php">
                            <picture>

                                <source media="(max-width: 1199px)" srcset="application/upload/new/dich-vu-quang-cao-facebook.jpg">

                                <source media="(min-width: 1200px)" srcset="application/upload/new/dich-vu-quang-cao-facebook.jpg">

                                <img class="lazyload img-thumbnail" src="application/upload/new/dich-vu-quang-cao-facebook.jpg" alt="Quảng Cáo Facebook">

                            </picture>

                        </a>

                        <figcaption>

                            <h3 class="title-h2"><a href="bang-gia-quang-cao-facebook/index.blade.php">Quảng Cáo Facebook</a></h3>

                            <div class="summany line-clamp">Dịch Vụ Facebook của Quảng C&aacute;o Si&ecirc;u Tốc bao gồm: Quảng C&aacute;o Facebook Ads, Sản Xuất Video B&aacute;n H&agrave;ng, Quản Trị Nội Dung KOLs, Quản Trị Nội Dung Fanpage</div>

                            <div class="time-product">Từ Năm: 2014</div>

                            <a class="btn btn-secondary translate" href="bang-gia-quang-cao-facebook/index.blade.php">[ Xem thêm ]</a>

                        </figcaption>

                    </div>

                </figure>

                <figure class="col-md-4 col-sm-4 col-6 col-xs6">

                    <div class="box-100 item-product">

                        <a href="bang-gia-quang-cao-google/index.blade.php">
                            <picture>

                                <source media="(max-width: 1199px)" srcset="application/upload/new/dich-vu-quang-cao-google.jpg">

                                <source media="(min-width: 1200px)" srcset="application/upload/new/dich-vu-quang-cao-google.jpg">

                                <img class="lazyload img-thumbnail" src="application/upload/new/dich-vu-quang-cao-google.jpg" alt="Quảng cáo Google">

                            </picture>

                        </a>

                        <figcaption>

                            <h3 class="title-h2"><a href="bang-gia-quang-cao-google/index.blade.php">Quảng cáo Google</a></h3>

                            <div class="summany line-clamp">C&aacute;c dịch vụ Google Ads được&nbsp;Quảng C&aacute;o Si&ecirc;u Tốc triển khai từ năm 2009&nbsp; bao gồm c&aacute;c dịch vụ ch&iacute;nh sau: Google Adwords Search, Google Display Network, Google Remarketing, Google Shopping</div>

                            <div class="time-product">Từ năm : 2009</div>

                            <a class="btn btn-secondary translate" href="bang-gia-quang-cao-google/index.blade.php">[ Xem thêm ]</a>

                        </figcaption>

                    </div>

                </figure>

                <figure class="col-md-4 col-sm-4 col-6 col-xs6">

                    <div class="box-100 item-product">

                        <a href="quang-cao-zalo/index.blade.php">
                            <picture>

                                <source media="(max-width: 1199px)" srcset="application/upload/new/dich-vu-quang-cao-zalo.jpg">

                                <source media="(min-width: 1200px)" srcset="application/upload/new/dich-vu-quang-cao-zalo.jpg">

                                <img class="lazyload img-thumbnail" src="application/upload/new/dich-vu-quang-cao-zalo.jpg" alt="Quảng Cáo Zalo">

                            </picture>

                        </a>

                        <figcaption>

                            <h3 class="title-h2"><a href="quang-cao-zalo/index.blade.php">Quảng Cáo Zalo</a></h3>

                            <div class="summany line-clamp">Dịch vụ quảng c&aacute;o Zalo của Quảng C&aacute;o Si&ecirc;u Tốc bao gồm: Quảng c&aacute;o tăng lượt quan t&acirc;m OA, quảng c&aacute;o click về của h&agrave;ng tr&ecirc;n OA, quảng c&aacute;o video, quảng c&aacute;o click về website</div>

                            <div class="time-product">Từ 2015</div>

                            <a class="btn btn-secondary translate" href="quang-cao-zalo/index.blade.php">[ Xem thêm ]</a>

                        </figcaption>

                    </div>

                </figure>

                <figure class="col-md-4 col-sm-4 col-6 col-xs6">

                    <div class="box-100 item-product">

                        <a href="bang-gia-quang-cao-youtube/index.blade.php">
                            <picture>

                                <source media="(max-width: 1199px)" srcset="application/upload/new/dich-vu-quang-cao-youtube.jpg">

                                <source media="(min-width: 1200px)" srcset="application/upload/new/dich-vu-quang-cao-youtube.jpg">

                                <img class="lazyload img-thumbnail" src="application/upload/new/dich-vu-quang-cao-youtube.jpg" alt="Quảng Cáo Youtube">

                            </picture>

                        </a>

                        <figcaption>

                            <h3 class="title-h2"><a href="bang-gia-quang-cao-youtube/index.blade.php">Quảng Cáo Youtube</a></h3>

                            <div class="summany line-clamp">C&aacute;c dịch vụ Quảng C&aacute;o Youtube của Quảng C&aacute;o Si&ecirc;u Tốc bao gồm: Quảng c&aacute;o video đệm&nbsp;6 gi&acirc;y, quảng c&aacute;o video 15 gi&acirc;y kh&ocirc;ng thể bỏ qua, quảng c&aacute;o video 30 gi&acirc;y</div>

                            <div class="time-product">Từ 2015</div>

                            <a class="btn btn-secondary translate" href="bang-gia-quang-cao-youtube/index.blade.php">[ Xem thêm ]</a>

                        </figcaption>

                    </div>

                </figure>

                <figure class="col-md-4 col-sm-4 col-6 col-xs6">

                    <div class="box-100 item-product">

                        <a href="dich-vu-seo/index.blade.php">
                            <picture>

                                <source media="(max-width: 1199px)" srcset="application/upload/new/dich-vu-seo2.jpg">

                                <source media="(min-width: 1200px)" srcset="application/upload/new/dich-vu-seo2.jpg">

                                <img class="lazyload img-thumbnail" src="application/upload/new/dich-vu-seo2.jpg" alt="Dịch Vụ SEO Google">

                            </picture>

                        </a>

                        <figcaption>

                            <h3 class="title-h2"><a href="dich-vu-seo/index.blade.php">Dịch Vụ SEO Google</a></h3>

                            <div class="summany line-clamp">Dịch Vụ SEO của Quảng C&aacute;o Si&ecirc;u Tốc bao gồm: Dịch vụ SEO từ kh&oacute;a, dịch vụ SEO tổng thể, dịch vụ SEO google Maps, dịch vụ SEO Fanpage, dịch vụ SEO Youtube</div>

                            <div class="time-product">Từ 2010</div>

                            <a class="btn btn-secondary translate" href="dich-vu-seo/index.blade.php">[ Xem thêm ]</a>

                        </figcaption>

                    </div>

                </figure>

                <figure class="col-md-4 col-sm-4 col-6 col-xs6">

                    <div class="box-100 item-product">

                        <a href="quang-cao-coc-coc/index.blade.php">
                            <picture>

                                <source media="(max-width: 1199px)" srcset="application/upload/new/dich-vu-quang-cao-coc-coc2.jpg">

                                <source media="(min-width: 1200px)" srcset="application/upload/new/dich-vu-quang-cao-coc-coc2.jpg">

                                <img class="lazyload img-thumbnail" src="application/upload/new/dich-vu-quang-cao-coc-coc2.jpg" alt="Quảng Cáo Cốc Cốc">

                            </picture>

                        </a>

                        <figcaption>

                            <h3 class="title-h2"><a href="quang-cao-coc-coc/index.blade.php">Quảng Cáo Cốc Cốc</a></h3>

                            <div class="summany line-clamp">Dịch vụ quảng c&aacute;o Cốc Cốc của Quảng C&aacute;o Si&ecirc;u Tốc bao gồm: Search ads,&nbsp;Search banner ads,&nbsp;Newtab banner,&nbsp;Video ads,&nbsp;Browser skin,&nbsp;Video skin</div>

                            <div class="time-product">Từ 2015</div>

                            <a class="btn btn-secondary translate" href="quang-cao-coc-coc/index.blade.php">[ Xem thêm ]</a>

                        </figcaption>

                    </div>

                </figure>

                <figure class="col-md-4 col-sm-4 col-6 col-xs6">

                    <div class="box-100 item-product">

                        <a href="dich-vu-thiet-ke-website/index.blade.php">
                            <picture>

                                <source media="(max-width: 1199px)" srcset="application/upload/new/dich-vu-thiet-ke-web.jpg">

                                <source media="(min-width: 1200px)" srcset="application/upload/new/dich-vu-thiet-ke-web.jpg">

                                <img class="lazyload img-thumbnail" src="application/upload/new/dich-vu-thiet-ke-web.jpg" alt="Thiết Kế Website">

                            </picture>

                        </a>

                        <figcaption>

                            <h3 class="title-h2"><a href="dich-vu-thiet-ke-website/index.blade.php">Thiết Kế Website</a></h3>

                            <div class="summany line-clamp">Dịch vụ thiết kế web của Quảng C&aacute;o Si&ecirc;u Tốc bao gồm: Thiết kế website MẪU, thiết kế website theo y&ecirc;u cầu, thiết kế web chuẩn SEO, thiết kế websiet th&acirc;n thiện MOBILE</div>

                            <div class="time-product">Từ 2009</div>

                            <a class="btn btn-secondary translate" href="dich-vu-thiet-ke-website/index.blade.php">[ Xem thêm ]</a>

                        </figcaption>

                    </div>

                </figure>

                <figure class="col-md-4 col-sm-4 col-6 col-xs6">

                    <div class="box-100 item-product">

                        <a href="dich-vu-sms-marketing/index.blade.php">
                            <picture>

                                <source media="(max-width: 1199px)" srcset="application/upload/new/dich-vu-sms-marketing.jpg">

                                <source media="(min-width: 1200px)" srcset="application/upload/new/dich-vu-sms-marketing.jpg">

                                <img class="lazyload img-thumbnail" src="application/upload/new/dich-vu-sms-marketing.jpg" alt="Dịch Vụ SMS Marketing">

                            </picture>

                        </a>

                        <figcaption>

                            <h3 class="title-h2"><a href="dich-vu-sms-marketing/index.blade.php">Dịch Vụ SMS Marketing</a></h3>

                            <div class="summany line-clamp">Dịch vụ SMS Marketing của Quảng C&aacute;o Si&ecirc;u Tốc sẽ v&ocirc; c&ugrave;ng hiệu quả khi&nbsp;được phục vụ v&agrave;o việc chăm s&oacute;c kh&aacute;ch h&agrave;ng cũ v&agrave; gởi th&ocirc;ng điệp đến kh&aacute;ch h&agrave;ng t&igrave;m năng.</div>

                            <div class="time-product">Từ 2017</div>

                            <a class="btn btn-secondary translate" href="dich-vu-sms-marketing/index.blade.php">[ Xem thêm ]</a>

                        </figcaption>

                    </div>

                </figure>

                <figure class="col-md-4 col-sm-4 col-6 col-xs6">

                    <div class="box-100 item-product">

                        <a href="dich-vu-email-marketing/index.blade.php">
                            <picture>

                                <source media="(max-width: 1199px)" srcset="application/upload/new/dich-vu-email-marketing1.jpg">

                                <source media="(min-width: 1200px)" srcset="application/upload/new/dich-vu-email-marketing1.jpg">

                                <img class="lazyload img-thumbnail" src="application/upload/new/dich-vu-email-marketing1.jpg" alt="Email Marketing">

                            </picture>

                        </a>

                        <figcaption>

                            <h3 class="title-h2"><a href="dich-vu-email-marketing/index.blade.php">Email Marketing</a></h3>

                            <div class="summany line-clamp">Email Marketing bao nhi&ecirc;u năm nay vẫn l&agrave; k&ecirc;nh tiếp cận kh&aacute;ch h&agrave;ng v&ocirc; c&ugrave;ng hiệu quả. Khi c&oacute; được một chiến lược ph&ugrave; hợp,n&oacute; sẽ gi&uacute;p tăng doanh số vượt trội</div>

                            <div class="time-product">Từ 2017</div>

                            <a class="btn btn-secondary translate" href="dich-vu-email-marketing/index.blade.php">[ Xem thêm ]</a>

                        </figcaption>

                    </div>

                </figure>

                <figure class="col-md-4 col-sm-4 col-6 col-xs6">

                    <div class="box-100 item-product">

                        <a href="thiet-ke-app/index.blade.php">
                            <picture>

                                <source media="(max-width: 1199px)" srcset="application/upload/new/dich-vu-thiet-ke-app.jpg">

                                <source media="(min-width: 1200px)" srcset="application/upload/new/dich-vu-thiet-ke-app.jpg">

                                <img class="lazyload img-thumbnail" src="application/upload/new/dich-vu-thiet-ke-app.jpg" alt="Thiết Kế APP">

                            </picture>

                        </a>

                        <figcaption>

                            <h3 class="title-h2"><a href="thiet-ke-app/index.blade.php">Thiết Kế APP</a></h3>

                            <div class="summany line-clamp">Dịch vụ thiết kế APP của Quảng C&aacute;o Si&ecirc;u Tốc bao gồm: Thiết kế APP tr&ecirc;n nền tảng&nbsp;IOS, thiết kế APP&nbsp; tr&ecirc;n nền tảng Andriod, thiết kế APP theo y&ecirc;u cầu, thiết kế APP theo g&oacute;i c&oacute; sẵn</div>

                            <div class="time-product">Từ 2018</div>

                            <a class="btn btn-secondary translate" href="thiet-ke-app/index.blade.php">[ Xem thêm ]</a>

                        </figcaption>

                    </div>

                </figure>

                <figure class="col-md-4 col-sm-4 col-6 col-xs6">

                    <div class="box-100 item-product">

                        <a href="tu-van-chien-luoc-digital-marketing/index.blade.php">
                            <picture>

                                <source media="(max-width: 1199px)" srcset="application/upload/new/tu-van-chien-luoc-marketing.jpg">

                                <source media="(min-width: 1200px)" srcset="application/upload/new/tu-van-chien-luoc-marketing.jpg">

                                <img class="lazyload img-thumbnail" src="application/upload/new/tu-van-chien-luoc-marketing.jpg" alt="Chiến Lược Marketing">

                            </picture>

                        </a>

                        <figcaption>

                            <h3 class="title-h2"><a href="tu-van-chien-luoc-digital-marketing/index.blade.php">Chiến Lược Marketing</a></h3>

                            <div class="summany line-clamp">Quảng C&aacute;o Si&ecirc;u Tốc ph&acirc;n t&iacute;ch, tư vấn v&agrave; lập chiến lược marketing tổng thể cho kh&aacute;ch h&agrave;ng, lấy marketing online l&agrave;m nền tảng th&uacute;c đẩy thương hiệu v&agrave; doanh số</div>

                            <div class="time-product">Từ Năm: 2017</div>

                            <a class="btn btn-secondary translate" href="tu-van-chien-luoc-digital-marketing/index.blade.php">[ Xem thêm ]</a>

                        </figcaption>

                    </div>

                </figure>

            </div>

        </div>

    </section>

    <section class="box-100 phuongphap">

        <div class="container">

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h2 class="title_h1 title50">Phương pháp của quảng cáo siêu tốc</h2></div>

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
            <a class="btn btn-secondary btn-secondary-2 translate" href="khach-hang/index.blade.php" title="Khách hàng">Xem thêm khách hàng</a>

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
                        <h2 style="text-align:center"><span style="font-size:36px"><span style="color:#27ae60"><strong>QUẢNG C&Aacute;O SI&Ecirc;U TỐC ACADEMY</strong></span></span></h2>

                        <p style="text-align:center"><span style="color:#2980b9"><em><span style="font-size:18px">Học Viện Đ&agrave;o&nbsp;Tạo Marketing Online Tr&ecirc;n Nền Tảng Giải Ph&aacute;p &quot;<strong>Ma Trận Marketing Bao V&acirc;y</strong>&quot;. </span></em>
                            </span>
                        </p>

                        <p style="text-align:center"><em><span style="font-size:18px">Phần lớn&nbsp;thời lượng của c&aacute;c kh&oacute;a học được <strong>CEO V&Otilde; TUẤN HẢI</strong> trực tiếp hướng dẫn. 80% l&agrave; thực h&agrave;nh, 20% l&yacute; thuyết thực tế. Xuy&ecirc;n suốt kh&oacute;a học l&agrave; c&aacute;c case study thực tế m&agrave; Quảng C&aacute;o Si&ecirc;u Tốc đ&atilde; trực tiếp trải qua v&agrave; đ&atilde;&nbsp;triển khai cho kh&aacute;ch h&agrave;ng. Cam kết c&oacute; kết quả ngay trong kh&oacute;a học.</span></em></p>

                        <p style="text-align:center">&nbsp;</p>
                    </div>

                </div>

                <figure class="col-lg-4 col-md-6 col-sm-6 col-xs-6">

                    <div class="tuvan">

                        <a href="khoa-hoc-marketing-online/index.blade.php">

                            <img class="lazyload img-responsive" src="application/upload/new/khoa-hoc-digital-marketing-bao-vay-2019.jpg" alt="Khóa DIGITAL MARKETING BAO VÂY">

                            <figcaption>

                                <div>

                                    <h4 class="title_h3">Khóa DIGITAL MARKETING BAO VÂY</h4>

                                    <div class="summany d-none d-md-block">
                                        <div class="line-clamp">Học Marketing Online thực tế kh&ocirc;ng kh&oacute;, nhưng quan trọng nhất,&nbsp;c&aacute;c bạn phải&nbsp;t&igrave;m v&agrave; chọn được kh&oacute;a học chất lượng. Bạn c&oacute; thể t&igrave;m thấy h&agrave;ng trăm&nbsp;kh&oacute;a</div>
                                    </div>

                                </div>

                            </figcaption>

                        </a>

                    </div>

                </figure>

                <figure class="col-lg-4 col-md-6 col-sm-6 col-xs-6">

                    <div class="tuvan">

                        <a href="khoa-hoc-zalo-marketing/index.blade.php">

                            <img class="lazyload img-responsive" src="application/upload/new/khoa-hoc-zalo-bap-vay-2019.jpg" alt="Tại Sao Là Học Khóa ZALO BAO VÂY?">

                            <figcaption>

                                <div>

                                    <h4 class="title_h3">Tại Sao Là Học Khóa ZALO BAO VÂY?</h4>

                                    <div class="summany d-none d-md-block">
                                        <div class="line-clamp">Chọn c&aacute;ch ph&aacute;t triển kinh doanh tr&ecirc;n Zalo chắc chắn&nbsp;l&agrave; một quyết định đ&uacute;ng đắn. Khi đ&atilde; chọn Zalo, việc bạn cần l&agrave;m l&uacute;c n&agrave;y đ&oacute; ch&iacute;nh l&agrave; phải l&agrave;m</div>
                                    </div>

                                </div>

                            </figcaption>

                        </a>

                    </div>

                </figure>

                <ul class="col-lg-4 col-md-12 col-sm-12 ul-daotao">

                    <li>

                        <div class="row align-items-center">

                            <div class="col-md5">
                                <a href="khoa-hoc-facebook-marketing/index.blade.php"><img class="lazyload img-responsive" src="application/upload/new/khoa-hoc-facebook-bao-vay-2019.jpg" alt="Tại Sao Là Khóa FACEBOOK BAO VÂY ?"></a>
                            </div>

                            <div class="col-md7">

                                <h4><a href="khoa-hoc-facebook-marketing/index.blade.php">Tại Sao Là Khóa FACEBOOK BAO VÂY ?</a></h4>

                                <div class="summany line-clamp">Vậy bạn c&oacute; thể t&igrave;m thấy những kiến thức, kinh nghiệm l&agrave;m quảng c&aacute;o n&agrave;y ở đ&acirc;u. Đ&oacute; ch&iacute;nh l&agrave; từ c&aacute;c kh&oacute;a học facebook marketing đang được kh&aacute; nhiều</div>

                            </div>

                        </div>

                    </li>

                    <li>

                        <div class="row align-items-center">

                            <div class="col-md5">
                                <a href="khoa-hoc-google-adwords/index.blade.php"><img class="lazyload img-responsive" src="application/upload/new/khoa-hoc-google-bao-vay.jpg" alt="Khóa GOOGLE ADWORDS BAO VÂY"></a>
                            </div>

                            <div class="col-md7">

                                <h4><a href="khoa-hoc-google-adwords/index.blade.php">Khóa GOOGLE ADWORDS BAO VÂY</a></h4>

                                <div class="summany line-clamp">Hiện tại DMV đang l&agrave; một trong số c&aacute;c đơn vị cung cấp c&aacute;c kh&oacute;a học về digital marketing được xem l&agrave; uy t&iacute;n v&agrave; chất lượng nhất hiện n&agrave;y, kh&ocirc;ng chỉ ri&ecirc;ng tại TP. Hồ</div>

                            </div>

                        </div>

                    </li>

                    <li>

                        <div class="row align-items-center">

                            <div class="col-md5">
                                <a href="dao-tao-seo-khoa-hoc-chuyen-sau/index.blade.php"><img class="lazyload img-responsive" src="application/upload/new/khoa-hoc-seo-bao-vay.jpg" alt="KHÓA HỌC SEO  GOOGLE BAO VÂY"></a>
                            </div>

                            <div class="col-md7">

                                <h4><a href="dao-tao-seo-khoa-hoc-chuyen-sau/index.blade.php">KHÓA HỌC SEO  GOOGLE BAO VÂY</a></h4>

                                <div class="summany line-clamp">SEO l&agrave; kĩ thuật chuy&ecirc;n s&acirc;u đưa website doanh nghiệp xuất hiện đầu ti&ecirc;n&nbsp;khi t&igrave;m kiếm tr&ecirc;n Google. Về cơ bản, traffic đổ về website sẽ tỉ lệ thuận với số đơn h&agrave;ng, nếu bạn</div>

                            </div>

                        </div>

                    </li>

                </ul>

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

                    <p><span style="font-size:36px"><strong>QUẢNG C&Aacute;O SI&Ecirc;U TỐC</strong></span></p><a class="btn btn-secondary btn-secondary-2 translate" href="tuyen-dung/index.blade.php" title="Gia Nhập Đại Gia Đình Quảng Cáo Siêu Tốc">Gia nhập ngay</a>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a class="site-logo__link" href="index.blade.php" title="Logo Quảng Cáo Siêu Tốc"><img src="application/upload/banner/logo-menu-mibile4.png" title="Logo Quảng Cáo Siêu Tốc" alt="Logo Quảng Cáo Siêu Tốc" /></a>
                    <div class="contact-footer">
                        <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
                            <tbody>
                                <tr>
                                    <td><img alt="Công Ty Quốc Tế DMV" src="upload/icon/cty.jpg" style="height:33px; width:33px" /></td>
                                    <td>C&Ocirc;NG TY QUỐC TẾ DMV
                                        <br /> MST: 0312991187</td>
                                </tr>
                                <tr>
                                    <td><img alt="Địa chỉ trụ sở" src="upload/icon/map.jpg" style="height:33px; width:33px" /></td>
                                    <td>Trụ sở: 836/10 Hương Lộ 2, Phường B&igrave;nh Trị Đ&ocirc;ng A, Q.B&igrave;nh T&acirc;n, TP.HCM</td>
                                </tr>
                                <tr>
                                    <td><img alt="Đại chỉ văn phòng 2" src="upload/icon/map.jpg" style="height:33px; width:33px" /></td>
                                    <td>Văn ph&ograve;ng 2: Lầu 3, T&ograve;a Nh&agrave; VC House, 399B Trường Chinh, Phường 14, Quận T&acirc;n B&igrave;nh, TP.HCM</td>
                                </tr>
                                <tr>
                                    <td><img alt="Hotline tư vấn" src="upload/icon/phone_1.jpg" style="height:33px; width:33px" /></td>
                                    <td>Tư vấn &amp; B&aacute;o gi&aacute;
                                        <br />
                                        <span style="color:#f1c40f"><span style="font-size:18px"><strong>0901 349 349</strong></span></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img alt="Email báo giá" src="upload/icon/mail.jpg" style="height:33px; width:33px" /></td>
                                    <td>baogia@dmvgroup.vn
                                        <br /> doquyen@dmv.com.vn
                                    </td>
                                </tr>
                                <tr>
                                    <td><img alt="" src="upload/icon/website.jpg" style="height:33px; width:33px" /></td>
                                    <td>quangcaosieutoc.com
                                        <br /> dmvgroup.vn
                                    </td>
                                </tr>
                                <tr>
                                    <td><img alt="" src="upload/icon/olock.jpg" style="height:33px; width:33px" /></td>
                                    <td>S&aacute;ng từ: 8h00 &divide; 12h00
                                        <br /> Chiều từ: 13h30 &divide; 17h30</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-100 title_footer">Danh mục dịch vụ</div>
                    <div class="ul-footer">
                        <a href="ma-tran-marketing-bao-vay/index.blade.php" title="Ma Trận Marketing Bao Vây" target="_self" rel="nofollow"><i class="fa fa-angle-right" aria-hidden="true"></i> Ma Trận Marketing Bao Vây</a>
                        <a href="bang-gia-quang-cao-google/index.blade.php" title="Dịch vụ quảng cáo Google" target="_self" rel="nofollow"><i class="fa fa-angle-right" aria-hidden="true"></i> Dịch vụ quảng cáo Google</a>
                        <a href="quang-cao-zalo/index.blade.php" title="Dịch vụ quảng cáo Zalo" target="_self" rel="nofollow"><i class="fa fa-angle-right" aria-hidden="true"></i> Dịch vụ quảng cáo Zalo</a>
                        <a href="bang-gia-quang-cao-facebook/index.blade.php" title="Dịch vụ quảng cáo Facebook" target="_self" rel="nofollow"><i class="fa fa-angle-right" aria-hidden="true"></i> Dịch vụ quảng cáo Facebook</a>
                        <a href="dich-vu-seo/index.blade.php" title="Dịch vụ SEO Google" target="_self" rel="nofollow"><i class="fa fa-angle-right" aria-hidden="true"></i> Dịch vụ SEO Google</a>
                        <a href="quang-cao-coc-coc/index.blade.php" title="Dịch vụ quảng cáo Cốc Cốc" target="_self" rel="nofollow"><i class="fa fa-angle-right" aria-hidden="true"></i> Dịch vụ quảng cáo Cốc Cốc</a>
                        <a href="bang-gia-quang-cao-youtube/index.blade.php" title="Dịch vụ quảng cáo Youtube" target="_self" rel="nofollow"><i class="fa fa-angle-right" aria-hidden="true"></i> Dịch vụ quảng cáo Youtube</a>
                        <a href="blog/index.blade.php" title="Blog chia sẻ kiến thức Marketing" target="_self" rel="nofollow"><i class="fa fa-angle-right" aria-hidden="true"></i> Blog chia sẻ kiến thức Marketing</a>
                    </div>
                    <div class="box-100 title_footer">Quy định chung</div>
                    <div class="ul-footer">
                        <a href="chinh-sach-bao-mat/index.blade.php" title="Chính sách bảo mật thông tin" rel="nofollow"><i class="fa fa-angle-right" aria-hidden="true"></i> Chính sách bảo mật thông tin</a>
                        <a href="chinh-sach-doi-tra/index.blade.php" title="Chính sách đổi trả" rel="nofollow"><i class="fa fa-angle-right" aria-hidden="true"></i> Chính sách đổi trả</a>
                    </div>
                    <div class="box-100 title_footer">Phương thức thanh toán</div>
                    <div class="ul-footer">
                        <a href="huong-dan-thanh-toan/index.blade.php" title="Hướng dẫn thanh toán" rel="nofollow"><i class="fa fa-angle-right" aria-hidden="true"></i> Hướng dẫn thanh toán</a>
                    </div>
                    <div class="box-100 noluc">Quảng Cáo Siêu Tốc không ngừng nổ lực hàng ngày nhằm đem đến cho khách hàng chất lượng dịch vụ và hiệu quả cao nhất.</div>
                </div>
                <div class="col-md-4">
                    <div class="box-100 note-footer">
                        <h5><span style="font-size:16px"><strong>Quảng C&aacute;o Si&ecirc;u Tốc</strong>&nbsp;ra đời với sứ mệnh: &quot;<em>Gi&uacute;p cho c&aacute;c c&aacute; nh&acirc;n v&agrave; doanh nghiệp SME ở Việt Nam kinh doanh hiệu quả hơn</em>&quot;.</span></h5></div>
                    <div class="contact-footer contact-footer-right">
                        <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
                            <tbody>
                                <tr>
                                    <td><span style="color:#48b465"><span style="font-size:16px">LI&Ecirc;N HỆ KỸ THUẬT</span></span>
                                        <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
                                            <tbody>
                                                <tr>
                                                    <td><img alt="Điện thoại tư vấn" src="upload/icon/sam-xanh-small.jpg" style="float:left; height:24px; width:24px" /><strong>0901 349 349</strong></td>
                                                    <td><img alt="" src="upload/icon/phone-xanh-small.jpg" style="float:left; height:24px; width:24px" />&nbsp;<span style="color:#f1c40f"><strong>0901 349 349</strong></span></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><img alt="" src="upload/icon/mail-xanh-small.jpg" style="float:left; height:24px; width:24px" />doquyen@dmv.com.vn</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span style="color:#9933cc"><span style="font-size:16px">LI&Ecirc;N HỆ B&Aacute;O GI&Aacute;</span></span>
                                        <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
                                            <tbody>
                                                <tr>
                                                    <td><img alt="Hotline" src="upload/icon/phone-tim--small.jpg" style="float:left; height:24px; width:24px" /><strong>0901 349 349&nbsp;</strong></td>
                                                    <td><img alt="Email báo giá" src="upload/icon/mail-tim-small.jpg" style="float:left; height:24px; width:24px" />baogia@dmvgroup.vn</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span style="color:#c67625"><span style="font-size:16px">LI&Ecirc;N HỆ TƯ VẤN</span></span>
                                        <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
                                            <tbody>
                                                <tr>
                                                    <td><img alt="Hotline tư vấn" src="upload/icon/phone-cam-small.jpg" style="float:left; height:24px; width:24px" /><strong>0901 349 349</strong></td>
                                                    <td><img alt="Email tư vấn" src="upload/icon/mail-cam-small.jpg" style="float:left; height:24px; width:24px" />doquyen@dmv.com.vn</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="rss/index.blade.php" title="Quảng cáo siêu tốc">
                                            <div class="rss-xxl"></div>RSS</a>
                                    </td>
                                    <td>
                                        <div class="sharefooter text-right">
                                            <a href="https://www.facebook.com/quangcaosieutoc/" target="_blank" title="Quảng cáo siêu tốc" rel="nofollow"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="https://twitter.com/Quangcaosieutoc" target="_blank" title="Quảng cáo siêu tốc" rel="nofollow"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="https://www.pinterest.com/quangcaoonline/" target="_blank" title="Quảng cáo siêu tốc" rel="nofollow"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                            <a href="https://www.youtube.com/channel/UCS9OEkX-RzO0bxyZhrYQFRg" target="_blank" title="Quảng cáo siêu tốc" rel="nofollow"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                            <a href="https://sites.google.com/view/quangcaosieutocdmv" target="_blank" title="Quảng cáo siêu tốc" rel="nofollow"><i class="fa fa-google"></i></a>
                                            <a href="https://quangcaosieutoc.tumblr.com/" target="_blank" title="Quảng cáo siêu tốc" rel="nofollow"><span class="share-tumblr"></span></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-100 copyright">
            <h6><span style="color:#ffffff;"><span style="font-size:18px"><strong>Quảng C&aacute;o Si&ecirc;u Tốc</strong>&nbsp;Lấy Kh&aacute;ch H&agrave;ng L&agrave;m Trọng T&acirc;m - Đặt Lợi &Iacute;ch V&agrave; Mong Muốn Của Kh&aacute;ch H&agrave;ng L&ecirc;n H&agrave;ng Đầu&nbsp;</span></span></h6>

            <p>&nbsp;<img alt="Quảng cáo siêu tốc" class="bct" src="upload/icon/dathongbao.png" style="height:46px; width:150px" title="Quảng cáo siêu tốc" />
                <a href="http://www.dmca.com/Protection/Status.aspx?ID=66764547-d918-46f1-b351-79ea5c6797b0" rel="nofollow" target="_blank"><img alt="" src="upload/icon/dmca_protected_16_120.png" style="height:39px; width:121px" /></a>
            </p>

            <p><span style="font-size:16px">Powered by <strong>Quảng C&aacute;o Si&ecirc;u Tốc</strong></span></p>

            <p><span style="font-size:14px"><span style="color:#f1c40f;">G&oacute;p &Yacute; &amp; Khiếu Nại Đến CEO</span> <span style="color:#ffffff;">:</span> <span style="color:#66cc00;">tuanhaikh@gmail.com </span><span style="color:#ffffff;">-</span><span style="color:#66cc00;"> </span><span style="color:#f1c40f;">0987 087 034 (Mr.Hải)</span></span>
            </p>
        </div>
    </footer>
    <script src="style/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="style/js/jquery.lazyload.min.js"></script>
    <script type="text/javascript">
        var lazyImage = "style/images/404.png";
    </script>
    <script src="style/js/jquery.appear.js"></script>
    <script src="style/js/jquery.countTo.js"></script>
    <script src="style/js/main.js"></script>
    <div class="quick-support d-none d-sm-block">
        <div class="quick-alo-phone quick-alo-green quick-alo-show ">
            <a rel="nofollow" href="tel:0901 349 349">
                <div class="quick-alo-ph-circle-fill"></div>
                <div class="quick-alo-ph-img-circle"><span class="message-alo"></span></div>
            </a>
            <a rel="nofollow" class="tel" href="tel:0901 349 349">0901 349 349</a>
            <a rel="nofollow" href="http://zalo.me/0901349349" title="Chat Zalo" class="d-inline-block" style="padding-right:0.1rem;" target="_blank">
                <img width="40" height="40" src="style/images/zalo-mb.png" class="img-fluid" data-img-full="style/images/zalo-hover.png">
            </a>
        </div>
    </div>

  @stop()