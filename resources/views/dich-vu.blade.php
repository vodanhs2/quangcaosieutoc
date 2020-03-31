@extends('layouts/master-layout') @section('main')
<section class="box-100 slide-home">
  <picture>
    <source media="(max-width: 600px)" srcset="application/upload/partner/gioi-thieu-ve-quang-cao-sieu-toc.jpg">
      <source media="(min-width: 768px)" srcset="application/upload/partner/banner-trang-trong-gioi-thieu.png">
        <img class="img-responsive" src="application/upload/partner/banner-trang-trong-gioi-thieu.png" title="Dịch Vụ Của Quảng Cáo Siêu Tốc" alt="Dịch Vụ Của Quảng Cáo Siêu Tốc">
      </picture>
      <div class="fix-content-slide d-flex align-items-center justify-content-center">
        <div class="col-md-12 title_text title_text1 text-slide">Dịch Vụ Của Quảng Cáo Siêu Tốc</div>
      </div>
    </section>
    <section class="box-100 wapper wapper-service">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12">
            @foreach($service_about as $s)
            <article class="noidung">
              {!!$s->content_header!!}
            </article>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    <section class="box-100 service wapper">
      <div class="container">
        <div class="row">
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
                <h2 class="title_h1 title50">QUẢNG CÁO SIÊU TỐC CAM KẾT</h2></div>
                <figure class="col-md-3 col-sm-6 col-xs-4">
                  <div class="box-100">
                    <picture>
                      <source media="(max-width: 1199px)" srcset="application/upload/content/nhiet-tam-tu-van.png">
                        <source media="(min-width: 1200px)" srcset="application/upload/content/nhiet-tam-tu-van.png">
                          <img class="lazyload img-thumbnail" src="application/upload/content/nhiet-tam-tu-van.png" alt="nhiệt tâm tư vấn" title="nhiệt tâm tư vấn">
                        </picture>
                        <figcaption>
                          <h3 class="title-h2">Nhiệt tâm tư vấn</h4><div class="summany"><p><span style="font-size:16px">Quảng C&aacute;o Si&ecirc;u Tốc&nbsp;lu&ocirc;n lu&ocirc;n nhiệt t&acirc;m trong việc ph&acirc;n t&iacute;ch v&agrave; tư vấn giải ph&aacute;p&nbsp;cho kh&aacute;ch h&agrave;ng</span></p></div>
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
                                <h3 class="title-h2">Hết mình thực thi</h4><div class="summany"><p><span style="font-size:16px">To&agrave;n thể đội ngũ&nbsp;của Quảng C&aacute;o Si&ecirc;u Tốc cam kết hết m&igrave;nh thực thi giải ph&aacute;p v&igrave; kh&aacute;ch h&agrave;ng phục vụ</span></p></div>
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
                                      <h3 class="title-h2">Trung thực báo cáo</h4><div class="summany"><p><span style="font-size:16px">Trong tất cả c&aacute;c chiến dịch d&ugrave; lớn hay nhỏ ch&uacute;ng t&ocirc;i lu&ocirc;n cam kết số liệu b&aacute;o c&aacute;o l&agrave; trung thực 100%</span></p></div>
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
                                            <h3 class="title-h2">Hoàn tiền</h4><div class="summany"><p><span style="font-size:16px">Ch&uacute;ng t&ocirc;i&nbsp;cam kết ho&agrave;n tiền nếu quảng c&aacute;o kh&ocirc;ng ổn định cho&nbsp;những chiến dịch cam kết theo thời gian</span></p></div>
                                            </figcaption>
                                          </div>
                                        </figure>
                                      </div>
                                    </div>
                                  </section><section class="box-100 wapper">
                                    <div class="container">
                                      <div class="row">
                                        <div class="col-lg-12 col-md-12 col-12"> 
                                          @foreach($service_about as $s)
                                          <article class="noidung">
                                            {!!$s->content_footer!!}
                                          </article>
                                          @endforeach
                                        </div>
                                      </div>
                                    </div>
                                  </section>

                                  <script src="style/js/jquery.validate.js" type="text/javascript"></script>
