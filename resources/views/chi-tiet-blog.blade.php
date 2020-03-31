@extends('layouts/master-layout') @section('main')
<section class="box-100 slide-home">
    <picture>
        <source media="(max-width: 600px)" srcset="application/upload/new/dich-vu-quang-cao-facebook2.jpg">
            <source media="(min-width: 768px)" srcset="application/upload/new/gioi-thieu-quang-cao-sieu-toc1.jpg">
                <img class="img-responsive" src="application/upload/new/gioi-thieu-quang-cao-sieu-toc1.jpg" title="Facebook Marketing" alt="Facebook Marketing">
            </picture>
            <div class="fix-content-slide d-flex align-items-center justify-content-center">
                <div class="col-md-12 title_text title_text1 text-slide">{{$chitiet->title}}
                    <div class="breadcrumb-slide">
                        <span>Dịch vụ</span>/ {{$chitiet->name}} <span></span></div>
                    </div>
                </div>
            </section>
            <section class="box-100 breadc">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
                                    <li class="breadcrumb-item"><a href="facebook-marketing/index.html">{{$chitiet->cat_blog}}</a></li>
                                    <li class="breadcrumb-item"><a href="index.html">{{$chitiet->name}}</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <section class="box-100 wapper wapper-detail">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <article class="box-100 noidung">
                                        <h1 class="h_detail">{{$chitiet->title}}</h1>
                                        <div class="w-75 float-left divauthor">
                                            <div>By <a href="#" title="Võ Tuấn Hải">Võ Tuấn Hải</a> - Lượt xem : {{$chitiet->view}}</div>
                                            <div class="font-italic">Ngày đăng: {{$chitiet->created_at}}</div>
                                        </div>
                                        <div class="w-25 float-right mb-2 wp-side-menu text-right">
                                            <!--style="margin-top: -100px;"-->
                                            <a href="http://www.facebook.com/sharer.php?u=https://quangcaosieutoc.com/chay-quang-cao-facebook/" class="wp-side-menu-item wp-side-menu-item-fb" style="top: 0px;" rel="nofollow" target="_blank">
                                                <i class="fa fa-facebook wo-icon" aria-hidden="true"></i></a>
                                                <a href="http://twitter.com/share?url=https://quangcaosieutoc.com/chay-quang-cao-facebook/" class="wp-side-menu-item wp-side-menu-item-tw" style="top:36px;" rel="nofollow" target="_blank">
                                                    <i class="fa fa-twitter wo-icon" aria-hidden="true"></i></a>
                                                    <a href="http://pinterest.com/pin/create/button/?url=https://quangcaosieutoc.com/chay-quang-cao-facebook/" class="wp-side-menu-item wp-side-menu-item-pin" style="top:72px;" rel="nofollow" target="_blank">
                                                        <i class="fa fa-pinterest-p wo-icon" aria-hidden="true"></i></a>
                                                        <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://quangcaosieutoc.com/chay-quang-cao-facebook/" class="wp-side-menu-item wp-side-menu-item-lin" style="top: 108px;" rel="nofollow" target="_blank">
                                                            <i class="fa fa-linkedin wo-icon" aria-hidden="true"></i></a>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="content">
                                                           {!!$chitiet->content!!}
                                                       </div>
                                                   </article>
                                               </div>
                                           </div>

                                       </div>
                                       <div class="col-lg-4 col-md-4 col-sm-12 col-12 right-border ">
                                        <div id="dangky"></div>
                                        <div class="box-100 content-left mt-4-box">
                                            <div class="title_left">
                                                <span class="name_sv name_sv1">Sale Khủng năm mới 2020</span>
                                                <br /><span class="desc_sv desc_sv1">Tặng Miễn Phí Website Chuẩn SEO</span>
                                                <div class="row pl-sm-2 pr-sm-2 m-0" id="clock"></div>
                                            </div>
                                            <form method="post" class="form_tuyendung contact-left pop_dv" name="frmRegister" id="frmRegister">
                                                <div class="step_2">

                                                    <div class="form-group" id="input-fullname">

                                                        <input type="text" class="form-control fullname" name="fullname" placeholder="Họ và tên" value="" pattern=".{6,}" tabindex="1" autocomplete="off" required>

                                                    </div>

                                                    <div class="form-group" id="input-phone">

                                                        <input type="number" class="form-control phone" name="phone" placeholder="Số điện thoại" value="" pattern="(\+?\d[- .]*){7,16}" tabindex="2" autocomplete="off" required>

                                                    </div>

                                                    <div class="form-group" id="input-email">

                                                        <input type="text" class="form-control email" name="email" placeholder="Địa chỉ email" value="" tabindex="3" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" autocomplete="off" required>

                                                    </div>

                                                    <div class="form-group" id="input-message">

                                                        <input type="text" class="form-control message message" name="message" placeholder="Ghi chú" value="" pattern=".{6,}" tabindex="4" autocomplete="off" required>

                                                    </div>

                                                </div>

                                                <div class="form-group step_2" style="margin-bottom:0; text-align:center;">

                                                    <input type="hidden" name="nick_fb" value="" />

                                                    <input type="hidden" name="linhvuc" value="dv0" />

                                                    <input type="hidden" name="website" value="" />

                                                    <input type="hidden" name="ngansach" value="" />

                                                    <input type="hidden" name="idu" value="dv0" />
                                                    <button type="button" onclick="javascript:formRegisterDefault('frmRegister');" class="w-100 btn btn-primary translate btn_dv text-uppercase">Đăng ký ngay</button>

                                                </div>

                                                <div class="box-100 successfull_dichvu error"></div>

                                            </form>

                                        </div>


                                        <script src="style/js/countdown.js"></script>
                                        <script type="text/javascript">
                                            var date = new Date(new Date().valueOf() + 1 * 24 * 60 * 60 * 1000);
                                            $('#clock').countdown(date, function(event) {
                                                $(this).html(event.strftime('<div class="col-md-3 col-sm-3 col-3 div-count"><span>%D</span><span>NGÀY</span></div><div class="col-md-3 col-sm-3 col-3 div-count"><span>%H</span><span>GIỜ</span></div><div class="col-md-3 col-sm-3 col-3 div-count"><span>%M</span><span>PHÚT</span></div><div class="col-md-3 col-sm-3 col-3 div-count"><span>%S</span><span>GIÂY</span></div>'));
                                            });
                                        </script>
                                        <div class="box-100 content-left">
                                            <table border="1" cellpadding="1" cellspacing="1" style="width:500px">
                                                <tbody>
                                                    <tr>
                                                        <td style="text-align:center"><span style="font-size:28px"><strong><span style="color:#ff0000">Hotline:</span></strong>
                                                        </span><span style="font-size:36px"><strong><span style="color:#ff0000"> <a href="tel:0901349349">0901 349 349</a></span></strong>
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <br>
                                </div>

                                <script src="style/js/jquery-scrolltofixed-min.js" type="text/javascript"></script>
                                <script>
                                    $(document).ready(function() {
                                        var summaries = $('.fixbar');
                                        summaries.each(function(i) {
                                            var summary = $(summaries[i]);
                                            var next = summaries[i + 1];

                                            summary.scrollToFixed({
                                                marginTop: $('.navbar-fixed-top').outerHeight(true) + 50,
                                                limit: function() {
                                                    var limit = 0;
                                                    if (next) {
                                                        limit = $(next).offset().top - $(this).outerHeight(true) - 50;
                                                    } else {
                                                        limit = $('#footer').offset().top - $(this).outerHeight(true) - 200;
                                                    }
                                                    return limit;
                                                },
                                                zIndex: 2
                                            });
                                        });
                                    });
                                </script>
                            </div>
                            <!--end left-->
                        </div>
                    </div>
                </section>
                <style>
                    .table {
                        text-align: left;
                    }

                    .table tr:first-child {
                        background-color: #009900;
                        color: #ffffe0;
                    }

                    .table tr {
                        background-color: hsla(0, 0%, 80%, 0.56);
                    }

                    .table tr:nth-child(even) {
                        background-color: rgba(119, 187, 220, 0.45);
                    }

                    .table tr td {
                        padding: 8px 5px;
                    }

                    .table tr td:last-child {
                        color: #f00;
                    }

                    .table tr:first-child td {
                        color: #ffffe0;
                    }

                    .abc {
                        color: #0a45db;
                    }

                    .abd {
                        color: #da0326;
                        text-decoration: underline;
                    }

                    .abe {
                        color: #da0326;
                    }

                    .chudofont25 {
                        color: #dd0606;
                        font-size: 26px;
                        text-align: center
                    }

                    .chudo {
                        color: #dd0606;
                    }

                    .chuxanhdam {
                        color: #0a45db;
                        font-size: 26px;
                        text-align: center
                    }
                </style>
              
                <script>
                    $(document).ready(function() {
                        $('div.divform').each(function() {
                            var id = $(this).attr('id');
                            var urlAjax = "load-form/index.blade.php";
                            $.ajax({
                                type: "POST",
                                url: urlAjax,
                                data: {
                                    id: id,
                                    idsp: 4990
                                },
                                success: function(result) {
                                    $('#' + id).html(result);
                                }
                            });
                        });
                    });
                </script>
                @stop()