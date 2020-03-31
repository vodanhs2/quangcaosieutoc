@extends('layouts/master-layout') @section('main')
<section class="box-100 slide-home">
    <picture>
        <source media="(max-width: 600px)" srcset="application/upload/partner/lien-he-quang-cao-sieu-toc1.jpg">
            <source media="(min-width: 768px)" srcset="application/upload/partner/lien-he-quang-cao-sieu-toc.jpg">
                <img class="img-responsive" src="application/upload/partner/lien-he-quang-cao-sieu-toc.jpg" title="Liên Hệ QUẢNG CÁO SIÊU TỐC" alt="Liên Hệ QUẢNG CÁO SIÊU TỐC">
            </picture>
            <div class="fix-content-slide d-flex align-items-center justify-content-center">
                <div class="col-md-12 title_text title_text1 text-slide">Liên Hệ QUẢNG CÁO SIÊU TỐC</div>
            </div>
        </section>
        <section class="box-100 breadc">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
                                <li class="breadcrumb-item active">
                                    <h1>Liên Hệ @foreach($lienhe as $h){{$h->name}}@endforeach</h1></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <section class="box-100 wapper" style="padding-bottom:0;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="box-100 contact-right ">
                                <p class="title-text"><span>Thông tin liên hệ</span></p>
                                @foreach($lienhe as $h)
                                <div class="noidung">
                                    <p style="text-align:center"><img alt="{{$h->name}}" src="{{url('uploads')}}/{{$h->logo}}" style="height:229px; width:375px" /></p>
                                    <h2 style="text-align:center"><span style="font-size:36px"><span style="color:#e74c3c"><strong>{{$h->name}}</strong></span></span></h2>
                                    <p>
                                      {!!$h->address!!}
                                  </p>
                                  <p><strong>Hotline:</strong>&nbsp;<strong><span style="color:#ff0000"><span style="font-size:24px">{{$h->phone}}</span></span><span style="font-size:18px"><span style="color:#c0392b">&nbsp;</span></span></strong></p>

                                  <p><strong>Email:</strong> {{$h->email}}</p>

                                  <p><strong>Website:</strong>&nbsp;<a href="{{$h->website}}">{{$h->website}}</a>&nbsp;</p>
                              </div>
                              @endforeach
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="box-100 contact-right contact-left">
                            <p class="title-text"><span>Form liên hệ</span></p>
                             @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                        @endif
                            <form action="{{ route('form_hotline_add') }}" enctype="multipart/form-data" id="form-sec" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                @csrf
                                <div class="map" style="text-align:center; font-size:20px; margin-bottom:10px; color:#f44336;"></div>
                                <div class="form-group ">
                                    <label>Họ và tên</label>
                                    <input type="text" class="form-control" name="fullname" value="" pattern=".{6,}" required tabindex="1" autocomplete="off">
                                </div>
                                <div class="form-group ">
                                    <label>Số điện thoại</label>
                                    <input type="number" class="form-control" name="phone" value="" pattern="(\+?\d[- .]*){7,16}" required tabindex="2" autocomplete="off">
                                </div>
                                <div class="form-group ">
                                    <label>Địa chỉ email</label>
                                    <input type="text" class="form-control" name="email" value="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required tabindex="3" autocomplete="off">
                                </div>
                                <div class="form-group ">
                                    <label>Chủ đề</label>
                                    <input type="text" class="form-control" name="title" value="" required tabindex="4" autocomplete="off">
                                </div>
                                <div class="form-group ">
                                    <label>Nội dung</label>
                                    <textarea type="text" class="form-control" rows="10" name="content" pattern=".{6,}" required tabindex="5" autocomplete="off"></textarea>
                                </div>
                                <div class="form-group" style="text-align:center;">
                                    <input type='submit' name="contact" value="Gửi liên hệ" id="contact" class="btn btn-primary" />
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>   
        
        @stop()