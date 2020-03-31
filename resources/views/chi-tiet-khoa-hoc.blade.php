@extends('layouts/master-layout') @section('main')
<section class="box-100 slide-home d-flex align-items-center" style="background-image:url(https://quangcaosieutoc.com/style/images/banner-khoahoc.png); background-size:cover;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 offset-lg-5 offset-md-5 top-daotao">
                <article class="box-100 noidung-daotao">
                    {!!$chitiet->content_1!!}
                </article>
                <div class="diengia"><img src="https://quangcaosieutoc.com/application/upload/new/digital-marketing-bao-vay.png" title="Khóa DIGITAL MARKETING BAO VÂY" alt="Khóa DIGITAL MARKETING BAO VÂY"></div>
            </div>
            <div class="col-lg-11 ">
                <div class="bg"><img src="https://quangcaosieutoc.com/style/images/banner_bg.png" title="Khóa DIGITAL MARKETING BAO VÂY" alt="Khóa DIGITAL MARKETING BAO VÂY"></div>
            </div>
        </div>
    </div>
</section>
@if($chitiet->content_2!='')
<section class="box-100 ceo section1">
    <div class="container">

        {!!$chitiet->content_2!!}

    </div>
</section>
@endif @if($chitiet->content_3!='')
<section class="box-100 wapper section2 section2-even">
    <div class="container" style="position:relative;">
        {!!$chitiet->content_3!!}
    </div>
</section>
@endif @if($chitiet->content_4!='')
<section class="box-100 wapper section2 section2-odd">
    <div class="container" style="position:relative;">
        {!!$chitiet->content_4!!}
    </div>
</section>
@endif @if($chitiet->content_5!='')
<section class="box-100 ceo section1">
    <div class="container">
        {!!$chitiet->content_5!!}
    </div>
</section>
@endif @if($chitiet->content_6!='')
<section class="box-100">
    {!!$chitiet->content_6!!}
</section>
@endif() @if($chitiet->content_7!='')
<section class="box-100 daotao wapper wapper-agenda">
    <div class="container">
        {!!$chitiet->content_7!!}
    </div>
</section>
@endif
<section class="box-100 ceo section1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 summany">
                <div class="box-100">
                    <div id="GROUP721">
                        <div id="HEADLINE705">
                            <h2 style="text-align:center; text-transform: uppercase;"><span style="font-size:28px"><span style="color:#ffff00"><strong>CAM KẾT SAU {{$chitiet->name}}</strong></span></span></h2>
                        </div>
                    </div>

                    <p style="text-align:justify"><img alt="Kết quả sau khóa học" src="https://quangcaosieutoc.com//upload/check.png" style="height:20px; width:20px" />&nbsp;<span style="font-size:18px"> Thực hành áp dụng kiến thức thực tế cho sản phẩm của học viên ngay tại lớp, dễ dàng, không cần kĩ năng chuyên sâu, bạn chỉ cần biết sử dụng máy tính.</span></p>

                    <p style="text-align:justify"><span style="font-size:18px"><img alt="Kết quả sau khóa học" src="https://quangcaosieutoc.com//upload/check.png" style="height:20px; width:20px" /> Cập nhật kiến thức, kĩ năng Digital Marketing theo xu hướng mới nhất 2019, đảm bảo sử dụng thành thạo các công cụ hỗ trợ phân tích, tìm kiếm KH.</span></p>

                    <p style="text-align:justify"><img alt="Kết quả sau khóa học" src="https://quangcaosieutoc.com//upload/check.png" style="height:20px; width:20px" />&nbsp; <span style="font-size:18px"> Kiểm chứng được hiệu quả trong suốt thời gian học, đồng thời  hỗ trợ học viên liên lục sau khóa học, giảng viên tư vấn nhiệt tình.</span></p>

                    <p style="text-align:justify"><img alt="Kết quả sau khóa học" src="https://quangcaosieutoc.com//upload/check.png" style="height:20px; width:20px" />&nbsp;<span style="font-size:18px">Được giảm giá 10% khi tham gia các khóa học marketing khác
                    </strong> kh&aacute;c</span>
                </p>

                <table align="center" style="width:100%">
                    <tbody>
                        <tr>
                            <td style="text-align:center">
                                <p><img alt="CAM KẾT SAU KHÓA HỌC" src="https://quangcaosieutoc.com//upload/cam-ket-khoa-hoc.png" style="height:199px; width:200px" /></p>
                            </td>
                            <td style="text-align:center"><img alt="KỸ NĂNG THỰC TẾ" src="https://quangcaosieutoc.com//upload/ki-nang.png" style="height:199px; width:200px" /></td>
                            <td style="text-align:center"><img alt="HỔ TRỢ LIÊN TỤC" src="https://quangcaosieutoc.com//upload/ho-tro-hoc-vien.png" style="height:199px; width:200px" /></td>
                        </tr>
                        <tr>
                            <td style="text-align:center"><span style="color:#ffffff"><strong>Tăng Trưởng Doanh Số</strong></span></td>
                            <td style="text-align:center"><span style="color:#ffffff"><strong>Kĩ Năng Thực Tế</strong></span></td>
                            <td style="text-align:center"><span style="color:#ffffff"><strong>Hỗ Trợ Li&ecirc;n Tục&nbsp;</strong></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</section>
@if($chitiet->content_8!='')
<section class="box-100 wapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-sm-12 col-12"><!--align-self-center-->
                <article class="summany noidung">
                  {!!$chitiet->content_8!!}
              </article>
          </div>
      </div>
  </div>
</section>
@endif
<section class="box-100 phuongphap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-6 col-md6">
                <!--align-self-center-->
                <article class="summany summany-section3">
                    <div id="HEADLINE723">
                        <h3><span style="color:#ffff00"><span style="font-size:28px"><strong>CAM KẾT C&Oacute; KẾT QUẢ NGAY TẠI LỚP</strong></span></span></h3>
                    </div>

                    <div id="HEADLINE724">
                        <h3><span style="font-size:22px">Bạn ho&agrave;n to&agrave;n c&oacute; thể tự m&igrave;nh triển khai một chiến dịch Marketing ho&agrave;n chỉnh.</span></h3>
                    </div>
                </article>
            </div>
            <div class="col-md-4 col-sm-4 col-4 imgceo">
                <div class="btn btn-success translate" onclick="scrollToElm('wapper-thanhtoan');">Đăng ký ngay</div>
            </div>
        </div>
    </div>
</section>
<section class="box-100 wapper-thanhtoan detail_wapper-thanhtoan">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-7 col-sm-7 col-12">
                <div class="box-100 box-thanhtoan">
                    <div class="box-100 title-taikhoan">Thông tin tài khoản</div>
                    <div class="box-100 item-taikhoan">
                        <div class="title-tk">1.Chuyển khoản</div>
                        <div class="detail-thanhtoan">
                            <p>Lưu &yacute;: Để tr&aacute;nh nhầm lẫn th&ocirc;ng tin, khi chuyển khoản anh/ chị vui l&ograve;ng ghi nội dung chuyển khoản theo mẫu: TENKHOAHOC_Hoten_Sdt&nbsp;
                                <br /> VD: TENKHOAHOC_Nguyen Van A_01292912929</p>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="item_image">
                                        <div class="image_title">Ngân hàng Đông Á - Gò Vấp – HCM</div>
                                        <div class="image_desc">
                                            <p>Số TK: <b>010 437 4420</b></p>
                                            <p></p>Chủ TK: VÕ TUẤN HẢI
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="item_image">
                                        <div class="image_title">Vietcombank - Tân Bình – HCM</div>
                                        <div class="image_desc">
                                            <p>Số TK: <b>044 1000 615 914</b></p>
                                            <p></p>Chủ TK: VÕ TUẤN HẢI
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end item-taikhoan-->
                        <div class="box-100 item-taikhoan">
                            <div class="title-tk">2.Nộp tiền mặt trực tiếp tại</div>
                            <div class="detail-thanhtoan">
                                <p>399B Trường Chinh, Phường. 14, Quận.T&acirc;n B&igrave;nh, TP. Hồ Ch&iacute; Minh</p>
                            </div>
                        </div>
                        <!--end item-taikhoan-->
                    </div>
                </div>
                <div class="col-md-5 col-sm-5 col-12 dangKy">
                    <div class="title-dangky"><span>Đăng ký</span> học ngay</div>
                    <form method="post" action="{{ route('form_education_add',['id'=>$chitiet->id]) }}" name="form_tuyendung" class="form_khoahoc contact-left" id="form_tuyendung">
                        @csrf
                        <div class="step_2">
                            <div class="form-group" id="input-fullname">
                                <input type="text" class="form-control fullname" name="fullname" placeholder="Họ và tên" value="" pattern=".{6,}" required tabindex="1" autocomplete="off">
                            </div>
                            <div class="form-group" id="input-phone">
                                <input type="text" class="form-control phone" name="phone" placeholder="Số điện thoại" value="" pattern="(\+?\d[- .]*){7,16}" required tabindex="2" autocomplete="off">
                            </div>
                            <div class="form-group" id="input-email">
                                <input type="text" class="form-control email" name="email" placeholder="Địa chỉ email" value="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required tabindex="3" autocomplete="off">
                            </div>
                            
                            <div class="form-group" id="input-message">
                                <input type="number" class="form-control message" name="quantity" placeholder="Số lượng vé" value="" tabindex="4" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group step_2 text-center">
                            <button type=""  class="form-control btn btn-warning">Đăng ký ngay</button>
                        </div>
                        @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                        @endif
                        <div class="box-100 successfull_tv status-us error"></div>
                    </form>
                    <div class="hotLine"><i class="fa fa-mobile"></i><a href="tel:0901 349 349" title="0901 349 349">0901 349 349</a></div>
                </div>
            </div>
        </div>
    </section>

    <section class="box-100 ceo-daotao ceo-detail-daotao">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-sm-12 col-12">
                    <div class="title_text">THÔNG TIN GIẢNG VIÊN</div>
                </div>
                @foreach($gioithieu as $g)
                @if($g->status==1)
                <div class="col-md-6 col-sm-6 col-7 noidung">
                 <h1 class="title_h1" style="color: yellow;">{{$g->name}}</h1>
                 {!!$g->content!!}
             </div>
             <div class="col-md-5 col-sm-5 col-5">
                <article class="noidung" style="text-align:center;">
                    <img class="lazyload img-thumbnail img-ceo-daotao" src="{{url('uploads')}}/{{$g->image}}" title="THÔNG TIN GIẢNG VIÊN" alt="THÔNG TIN GIẢNG VIÊN" />
                </article>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>
<section class="thongke coutdown">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="box-tk">
                    <img class="lazyload img-thumbnail" src="https://quangcaosieutoc.com/style/images/img-slogan-1.png" title="Học viên Quảng Cáo Siêu Tốc" alt="Học viên Quảng Cáo Siêu Tốc" />
                    <div class="count-tk">
                        <span class="timer counter-number appear" data-to="1500" data-speed="7000">1500</span> <span>+</span>
                        <br />Học viên
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="box-tk">
                    <img class="lazyload img-thumbnail" src="https://quangcaosieutoc.com/style/images/img-slogan-2.png" title="Khách hàng Quảng Cáo Siêu Tốc" alt="Khách hàng Quảng Cáo Siêu Tốc" />
                    <div class="count-tk">
                        <span class="timer counter-number appear" data-to="1000" data-speed="7000">1000</span> <span>+</span>
                        <br />Khách hàng
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="box-tk">
                    <img class="lazyload img-thumbnail" src="https://quangcaosieutoc.com/style/images/img-slogan-3.png" title="Khách hàng hài lòng về Quảng Cáo Siêu Tốc" alt="Khách hàng hài lòng về Quảng Cáo Siêu Tốc" />
                    <div class="count-tk">
                        <span class="timer counter-number appear" data-to="98" data-speed="7000">98</span> <span>%</span>
                        <br />Hài lòng
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<link href='https://quangcaosieutoc.com/style/photo/simplelightbox.min.css' rel='stylesheet' type='text/css'>
<link href='https://quangcaosieutoc.com/style/photo/demo.css' rel='stylesheet' type='text/css'>

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
                            <a href="https://quangcaosieutoc.com/application/upload/album/dao-tao-marketing-online-9611.jpg" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 1">
                                <picture>
                                    <source media="(max-width: 600px)" srcset="https://quangcaosieutoc.com/application/upload/album/dao-tao-marketing-online-9611.jpg">
                                        <source media="(min-width: 1200px)" srcset="https://quangcaosieutoc.com/application/upload/album/dao-tao-marketing-online-9611_380x253.jpg">
                                            <img class="lazyload img-thumbnail" src="https://quangcaosieutoc.com/application/upload/album/dao-tao-marketing-online-9611_380x253.jpg" alt="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 1" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 1">
                                        </picture>
                                    </a>
                                </div>
                            </figure>

                            <figure class="col-md-4 col-sm-4 col-xs-6 col-xs6">
                                <div class="box-100 item-product">
                                    <a href="https://quangcaosieutoc.com/application/upload/album/dao-tao-zalo-marketing-cho-fpt-telecom-6715.jpg" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 2">
                                        <picture>
                                            <source media="(max-width: 600px)" srcset="https://quangcaosieutoc.com/application/upload/album/dao-tao-zalo-marketing-cho-fpt-telecom-6715.jpg">
                                                <source media="(min-width: 1200px)" srcset="https://quangcaosieutoc.com/application/upload/album/dao-tao-zalo-marketing-cho-fpt-telecom-6715_380x253.jpg">
                                                    <img class="lazyload img-thumbnail" src="https://quangcaosieutoc.com/application/upload/album/dao-tao-zalo-marketing-cho-fpt-telecom-6715_380x253.jpg" alt="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 2" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 2">
                                                </picture>
                                            </a>
                                        </div>
                                    </figure>

                                    <figure class="col-md-4 col-sm-4 col-xs-6 col-xs6">
                                        <div class="box-100 item-product">
                                            <a href="https://quangcaosieutoc.com/application/upload/album/hoi-thao-marketing-4-0-tai-dai-hoc-tai-chinh-2072.jpg" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 3">
                                                <picture>
                                                    <source media="(max-width: 600px)" srcset="https://quangcaosieutoc.com/application/upload/album/hoi-thao-marketing-4-0-tai-dai-hoc-tai-chinh-2072.jpg">
                                                        <source media="(min-width: 1200px)" srcset="https://quangcaosieutoc.com/application/upload/album/hoi-thao-marketing-4-0-tai-dai-hoc-tai-chinh-2072_380x253.jpg">
                                                            <img class="lazyload img-thumbnail" src="https://quangcaosieutoc.com/application/upload/album/hoi-thao-marketing-4-0-tai-dai-hoc-tai-chinh-2072_380x253.jpg" alt="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 3" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 3">
                                                        </picture>
                                                    </a>
                                                </div>
                                            </figure>

                                            <figure class="col-md-4 col-sm-4 col-xs-6 col-xs6">
                                                <div class="box-100 item-product">
                                                    <a href="https://quangcaosieutoc.com/application/upload/album/dao-tao-zalo-marketing-2019-6739.jpg" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 4">
                                                        <picture>
                                                            <source media="(max-width: 600px)" srcset="https://quangcaosieutoc.com/application/upload/album/dao-tao-zalo-marketing-2019-6739.jpg">
                                                                <source media="(min-width: 1200px)" srcset="https://quangcaosieutoc.com/application/upload/album/dao-tao-zalo-marketing-2019-6739_380x253.jpg">
                                                                    <img class="lazyload img-thumbnail" src="https://quangcaosieutoc.com/application/upload/album/dao-tao-zalo-marketing-2019-6739_380x253.jpg" alt="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 4" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 4">
                                                                </picture>
                                                            </a>
                                                        </div>
                                                    </figure>

                                                    <figure class="col-md-4 col-sm-4 col-xs-6 col-xs6">
                                                        <div class="box-100 item-product">
                                                            <a href="https://quangcaosieutoc.com/application/upload/album/dao-tao-ve-seo-marketing-9442.jpg" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 5">
                                                                <picture>
                                                                    <source media="(max-width: 600px)" srcset="https://quangcaosieutoc.com/application/upload/album/dao-tao-ve-seo-marketing-9442.jpg">
                                                                        <source media="(min-width: 1200px)" srcset="https://quangcaosieutoc.com/application/upload/album/dao-tao-ve-seo-marketing-9442_380x253.jpg">
                                                                            <img class="lazyload img-thumbnail" src="https://quangcaosieutoc.com/application/upload/album/dao-tao-ve-seo-marketing-9442_380x253.jpg" alt="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 5" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 5">
                                                                        </picture>
                                                                    </a>
                                                                </div>
                                                            </figure>

                                                            <figure class="col-md-4 col-sm-4 col-xs-6 col-xs6">
                                                                <div class="box-100 item-product">
                                                                    <a href="https://quangcaosieutoc.com/application/upload/album/dao-tao-marketing-online-hang-jojo-2-67.jpg" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 6">
                                                                        <picture>
                                                                            <source media="(max-width: 600px)" srcset="https://quangcaosieutoc.com/application/upload/album/dao-tao-marketing-online-hang-jojo-2-67.jpg">
                                                                                <source media="(min-width: 1200px)" srcset="https://quangcaosieutoc.com/application/upload/album/dao-tao-marketing-online-hang-jojo-2-67_380x253.jpg">
                                                                                    <img class="lazyload img-thumbnail" src="https://quangcaosieutoc.com/application/upload/album/dao-tao-marketing-online-hang-jojo-2-67_380x253.jpg" alt="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 6" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 6">
                                                                                </picture>
                                                                            </a>
                                                                        </div>
                                                                    </figure>

                                                                    <figure class="col-md-4 col-sm-4 col-xs-6 col-xs6">
                                                                        <div class="box-100 item-product">
                                                                            <a href="https://quangcaosieutoc.com/application/upload/album/dao-tao-marketing-online-hang-jojo-7881.jpg" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 7">
                                                                                <picture>
                                                                                    <source media="(max-width: 600px)" srcset="https://quangcaosieutoc.com/application/upload/album/dao-tao-marketing-online-hang-jojo-7881.jpg">
                                                                                        <source media="(min-width: 1200px)" srcset="https://quangcaosieutoc.com/application/upload/album/dao-tao-marketing-online-hang-jojo-7881_380x253.jpg">
                                                                                            <img class="lazyload img-thumbnail" src="https://quangcaosieutoc.com/application/upload/album/dao-tao-marketing-online-hang-jojo-7881_380x253.jpg" alt="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 7" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 7">
                                                                                        </picture>
                                                                                    </a>
                                                                                </div>
                                                                            </figure>

                                                                            <figure class="col-md-4 col-sm-4 col-xs-6 col-xs6">
                                                                                <div class="box-100 item-product">
                                                                                    <a href="https://quangcaosieutoc.com/application/upload/album/dao-tao-chien-luoc-marketing-cho-fpt-telecom-6889.jpg" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 8">
                                                                                        <picture>
                                                                                            <source media="(max-width: 600px)" srcset="https://quangcaosieutoc.com/application/upload/album/dao-tao-chien-luoc-marketing-cho-fpt-telecom-6889.jpg">
                                                                                                <source media="(min-width: 1200px)" srcset="https://quangcaosieutoc.com/application/upload/album/dao-tao-chien-luoc-marketing-cho-fpt-telecom-6889_380x253.jpg">
                                                                                                    <img class="lazyload img-thumbnail" src="https://quangcaosieutoc.com/application/upload/album/dao-tao-chien-luoc-marketing-cho-fpt-telecom-6889_380x253.jpg" alt="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 8" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 8">
                                                                                                </picture>
                                                                                            </a>
                                                                                        </div>
                                                                                    </figure>

                                                                                    <figure class="col-md-4 col-sm-4 col-xs-6 col-xs6">
                                                                                        <div class="box-100 item-product">
                                                                                            <a href="https://quangcaosieutoc.com/application/upload/album/dao-tao-google-markeitng-2875.jpg" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 9">
                                                                                                <picture>
                                                                                                    <source media="(max-width: 600px)" srcset="https://quangcaosieutoc.com/application/upload/album/dao-tao-google-markeitng-2875.jpg">
                                                                                                        <source media="(min-width: 1200px)" srcset="https://quangcaosieutoc.com/application/upload/album/dao-tao-google-markeitng-2875_380x253.jpg">
                                                                                                            <img class="lazyload img-thumbnail" src="https://quangcaosieutoc.com/application/upload/album/dao-tao-google-markeitng-2875_380x253.jpg" alt="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 9" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 9">
                                                                                                        </picture>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </figure>

                                                                                            <figure class="col-md-4 col-sm-4 col-xs-6 col-xs6">
                                                                                                <div class="box-100 item-product">
                                                                                                    <a href="https://quangcaosieutoc.com/application/upload/album/dao-tao-zalo-marketing-144.jpg" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 10">
                                                                                                        <picture>
                                                                                                            <source media="(max-width: 600px)" srcset="https://quangcaosieutoc.com/application/upload/album/dao-tao-zalo-marketing-144.jpg">
                                                                                                                <source media="(min-width: 1200px)" srcset="https://quangcaosieutoc.com/application/upload/album/dao-tao-zalo-marketing-144_380x253.jpg">
                                                                                                                    <img class="lazyload img-thumbnail" src="https://quangcaosieutoc.com/application/upload/album/dao-tao-zalo-marketing-144_380x253.jpg" alt="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 10" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 10">
                                                                                                                </picture>
                                                                                                            </a>
                                                                                                        </div>
                                                                                                    </figure>

                                                                                                    <figure class="col-md-4 col-sm-4 col-xs-6 col-xs6">
                                                                                                        <div class="box-100 item-product">
                                                                                                            <a href="https://quangcaosieutoc.com/application/upload/album/dao-tao-seo-google-9619.jpg" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 11">
                                                                                                                <picture>
                                                                                                                    <source media="(max-width: 600px)" srcset="https://quangcaosieutoc.com/application/upload/album/dao-tao-seo-google-9619.jpg">
                                                                                                                        <source media="(min-width: 1200px)" srcset="https://quangcaosieutoc.com/application/upload/album/dao-tao-seo-google-9619_380x253.jpg">
                                                                                                                            <img class="lazyload img-thumbnail" src="https://quangcaosieutoc.com/application/upload/album/dao-tao-seo-google-9619_380x253.jpg" alt="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 11" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 11">
                                                                                                                        </picture>
                                                                                                                    </a>
                                                                                                                </div>
                                                                                                            </figure>

                                                                                                            <figure class="col-md-4 col-sm-4 col-xs-6 col-xs6">
                                                                                                                <div class="box-100 item-product">
                                                                                                                    <a href="https://quangcaosieutoc.com/application/upload/album/dao-tao-ve-ky-nang-viet-quang-cao-383.jpg" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 12">
                                                                                                                        <picture>
                                                                                                                            <source media="(max-width: 600px)" srcset="https://quangcaosieutoc.com/application/upload/album/dao-tao-ve-ky-nang-viet-quang-cao-383.jpg">
                                                                                                                                <source media="(min-width: 1200px)" srcset="https://quangcaosieutoc.com/application/upload/album/dao-tao-ve-ky-nang-viet-quang-cao-383_380x253.jpg">
                                                                                                                                    <img class="lazyload img-thumbnail" src="https://quangcaosieutoc.com/application/upload/album/dao-tao-ve-ky-nang-viet-quang-cao-383_380x253.jpg" alt="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 12" title="Hình Ảnh Khóa Học Tại Quảng Cáo Siêu Tốc 12">
                                                                                                                                </picture>
                                                                                                                            </a>
                                                                                                                        </div>
                                                                                                                    </figure>

                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
                                                                                                <script type="text/javascript" src="https://quangcaosieutoc.com/style/photo/simple-lightbox.js"></script>
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
                                                                                                <section class="box-100 wapper-service">
                                                                                                </section>

                                                                                                <section class="box-100 service wapper" style="padding-top:20px; margin-bottom:20px;">
                                                                                                    <div class="container">
                                                                                                        <div class="row row-daotao">
                                                                                                            <div class="col-md-12 col-sm-12 col-12">
                                                                                                                <div class="title_text">Khóa học khác</div>
                                                                                                            </div>
                                                                                                            @foreach($danhmuc as $dm)
                                                                                                            @foreach($khoahoc as $kh)
                                                                                                            @if($kh->cat_id==$dm->id)
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

                                                                                                        <section class="box-100 noidung danhgia">
                                                                                                            <div class="container">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                                                                                        <div class="title_h1">Tham gia bình luận</div>
                                                                                                                    </div>
                                                                                                                    <div class="col-sm-3">
                                                                                                                        <div class="global-average-rating">
                                                                                                                            <div class="title-danhgia">Đánh giá trung bình</div>
                                                                                                                            <span class="number">5/5</span>
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
                                                                                                                            <div class="col-md-12 col-12 box_com step_3">
                                                                                                                                <div class="form-group mb-3" id="input-tieude">
                                                                                                                                    <input type="text" class="form-control tieude" id="tieude" name="tieude" value="" placeholder="Tiêu đề" pattern=".{6,}" tabindex="11" required title="Tiêu đề không để trống">
                                                                                                                                </div>

                                                                                                                            </div>
                                                                                                                            <div class="col-md-12 col-12 step_3">
                                                                                                                                <div class="form-group mb-3" id="input-message_comment">
                                                                                                                                    <textarea type="text" class="form-control message_comment" id="message_comment" name="message_comment" value="" placeholder="Nội dung" pattern=".{6,}" tabindex="12" onclick="Showmessage();" required title="Nội dung không để trống"></textarea>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="container box_com">
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-md-4 col-12 step_3">
                                                                                                                                        <div class="form-group">
                                                                                                                                            <div class="input-group mb-3" id="input-fullname_comment">
                                                                                                                                                <div class="input-group-prepend">
                                                                                                                                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                                                                                                                                </div>
                                                                                                                                                <input type="text" class="form-control fullname_comment" name="fullname_comment" placeholder="Họ và tên *" value="" pattern=".{6,}" tabindex="13" required title="Họ và tên không để trống">
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>

                                                                                                                                    <div class="col-md-4 col-12 step_3">
                                                                                                                                        <div class="form-group">
                                                                                                                                            <div class="input-group mb-3" id="input-email_comment">
                                                                                                                                                <div class="input-group-prepend">
                                                                                                                                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-map-marker"></i></span>
                                                                                                                                                </div>
                                                                                                                                                <input type="text" class="form-control email_comment" name="email_comment" id="email_comment" value="" placeholder="Email" tabindex="14" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required title="Email không để trống">
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>

                                                                                                                                    <div class="col-md-4 col-12 step_3">
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
                                                                                                                                                <div class="rating step_3">
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
                                                                                                                                                <div class="step_3">
                                                                                                                                                    <input type="hidden" class="id_comment" name="id_comment" value="1304">
                                                                                                                                                    <input type="hidden" class="group_id" name="group_id" value="0">
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
                    var urlAjax = "https://quangcaosieutoc.com/gui-comment/";
                    var textBtn = $(idForm + ' .step_3 .btn').val();
                    $.ajax({
                        type: "POST",
                        url: urlAjax,
                        data: $(idForm).serialize(),
                        dataType: "json",
                        cache: false,
                        beforeSend: function() {
                            $(idForm + ' .form-group input').removeClass('is-invalid');
                            $(idForm + ' .alert').remove();
                            $(idForm + ' .step_3 .btn').val('Đang gửi thông tin...').attr('disabled', 'disabled');
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
                                $('.step_3').addClass('d-none');
                                $(idForm + ' .step_3 .btn').addClass('d-none');
                            }
                            $(idForm + ' .step_3 .btn').val(textBtn).removeAttr('disabled', 'disabled');
                            $('body .page-loading').remove();
                        }
                    });
                }
            </script>
            <div class="col-lg-12 col-sm-12 col-12 show-comment detail_4" style="max-height:500px; overflow:hidden;">
                <div id="test-list13">
                    <ul class="ul list">
                        <li class="li name">
                            <div class="name-comment">
                                <div class="avata">XX</div>
                            </div>
                            <div class="r-message">
                                <div class="r-legend">
                                    <span class="r-author">
                                        <span class="cm-ajax cm-tooltip">
                                          <i class="fa fa-user"></i> Xuân Xuân</span>
                                      </span>
                                      <span class="r-date">
                                          <i class="fa fa-clock-o"></i> 21-06-2019</span>
                                          <span class="nowrap attr-stars1">                    
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </div>
                                    <div class="content-post">
                                        <p>Kh&oacute;a học cực kỳ chất lượng . . .</p>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end show-comment-->
                <div class="box-100 ab__hpd_more ab__hpd_more_4" onclick="showFunction('4')"><span>Xem bình luận khác</span></div>
                <div class="box-100 ab__hpd_close ab__hpd_close_4 d-none" onclick="hiddenFunction('4');scrollToElm('4');return false;"><span>Thu gọn bình luận</span></div>
            </div>
        </div>
    </section>
    @stop()