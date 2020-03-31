
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
             @foreach($lienhe as $h)
             <a class="site-logo__link" href="{{route('trang-chu')}}" title="LOGO {{$h->name}}"><img src="{{url('uploads')}}/{{$h->logo}}" title="LOGO {{$h->name}}" alt="LOGO {{$h->name}}" /></a>
             @endforeach
             <div class="contact-footer">
              @foreach($lienhe as $h)
              <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
                <tbody>
                    <tr>
                        <td><img alt="Công Ty Quốc Tế DMV" src="upload/icon/cty.jpg" style="height:33px; width:33px" /></td>
                        <td>{{$h->name}}</td>
                    </tr>
                    <tr>
                        <td><img alt="Địa chỉ trụ sở" src="upload/icon/map.jpg" style="height:33px; width:33px" /></td>
                        <td>{!!$h->address!!}</td>
                    </tr>
                    <tr>
                        <td><img alt="Hotline tư vấn" src="upload/icon/phone_1.jpg" style="height:33px; width:33px" /></td>
                        <td>Tư vấn &amp; B&aacute;o gi&aacute;
                            <br />
                            <span style="color:#f1c40f"><span style="font-size:18px"><strong>{{$h->phone}}</strong></span></span>
                        </td>
                    </tr>
                    <tr>
                        <td><img alt="Email báo giá" src="upload/icon/mail.jpg" style="height:33px; width:33px" /></td>
                        <td>{{$h->email}}</td>
                    </tr>
                    <tr>
                        <td><img alt="" src="upload/icon/website.jpg" style="height:33px; width:33px" /></td>
                        <td>{{$h->website}}</td>
                    </tr>
                    <tr>
                        <td><img alt="" src="upload/icon/olock.jpg" style="height:33px; width:33px" /></td>
                        <td>S&aacute;ng từ: 8h00 &divide; 12h00
                            <br /> Chiều từ: 13h30 &divide; 17h30</td>
                        </tr>
                    </tbody>
                </table>
                @endforeach
            </div>
        </div>
        <div class="col-md-4">
            <div class="box-100 title_footer">Danh mục dịch vụ</div>
            <div class="ul-footer">
                @foreach($dichvu as $dv)
                <a href="ma-tran-marketing-bao-vay/index.html" title="Ma Trận Marketing Bao Vây" target="_self" rel="nofollow"><i class="fa fa-angle-right" aria-hidden="true"></i> {{$dv->name}}</a>
                @endforeach
            </div>
              {{--   <div class="box-100 title_footer">Quy định chung</div>
                <div class="ul-footer">
                    <a href="chinh-sach-bao-mat/index.html" title="Chính sách bảo mật thông tin" rel="nofollow"><i class="fa fa-angle-right" aria-hidden="true"></i> Chính sách bảo mật thông tin</a>
                    <a href="chinh-sach-doi-tra/index.html" title="Chính sách đổi trả" rel="nofollow"><i class="fa fa-angle-right" aria-hidden="true"></i> Chính sách đổi trả</a>
                </div>
                <div class="box-100 title_footer">Phương thức thanh toán</div>
                <div class="ul-footer">
                    <a href="huong-dan-thanh-toan/index.html" title="Hướng dẫn thanh toán" rel="nofollow"><i class="fa fa-angle-right" aria-hidden="true"></i> Hướng dẫn thanh toán</a>
                </div> --}}
                <div class="box-100 noluc">@foreach($lienhe as $h){{$h->name}}@endforeach không ngừng nổ lực hàng ngày nhằm đem đến cho khách hàng chất lượng dịch vụ và hiệu quả cao nhất.</div>
            </div>
            <div class="col-md-4">
                <div class="box-100 note-footer">
                    >@foreach($lienhe as $h)
                    <h5><span style="font-size:16px"><strong>@foreach($lienhe as $h){{$h->name}}@endforeach ra đời với sứ mệnh: &quot;<em>Gi&uacute;p cho c&aacute;c c&aacute; nh&acirc;n v&agrave; doanh nghiệp SME ở Việt Nam kinh doanh hiệu quả hơn</em>&quot;.</span></h5></div>
                        <div class="contact-footer contact-footer-right">
                            <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
                                <tbody>
                                    <tr>
                                        <td><span style="color:#48b465"><span style="font-size:16px">LIÊN HỆ KỸ THUẬT</span></span>
                                            <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
                                                <tbody>
                                                    <tr>
                                                        <td><img alt="Điện thoại tư vấn" src="upload/icon/sam-xanh-small.jpg" style="float:left; height:24px; width:24px" /><strong>{{$h->phone}}</strong></td>
                                                        <td><img alt="" src="upload/icon/phone-xanh-small.jpg" style="float:left; height:24px; width:24px" />&nbsp;<span style="color:#f1c40f"><strong>{{$h->phone}}</strong></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2"><img alt="" src="upload/icon/mail-xanh-small.jpg" style="float:left; height:24px; width:24px" />{{$h->email}}</td>
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
                                                        <td><img alt="Hotline" src="upload/icon/phone-tim--small.jpg" style="float:left; height:24px; width:24px" /><strong>{{$h->phone}}</strong></td>
                                                        <td><img alt="Email báo giá" src="upload/icon/mail-tim-small.jpg" style="float:left; height:24px; width:24px" />{{$h->email}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span style="color:#c67625"><span style="font-size:16px">LIÊN HỆ TƯ VẤN</span></span>
                                            <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
                                                <tbody>
                                                    <tr>
                                                        <td><img alt="Hotline tư vấn" src="upload/icon/phone-cam-small.jpg" style="float:left; height:24px; width:24px" /><strong>{{$h->phone}}</strong></td>
                                                        <td><img alt="Email tư vấn" src="upload/icon/mail-cam-small.jpg" style="float:left; height:24px; width:24px" />{{$h->email}}</td>
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
                                            <a href="#" title="Quảng cáo siêu tốc">
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
                        @endforeach
                    </div>
                </div>
                <div class="box-100 copyright">
                    <h6><span style="color:#ffffff;"><span style="font-size:18px"><strong>@foreach($lienhe as $h){{$h->name}}@endforeach</strong> Lấy Khách Hàng Làm Trọng Tâm - Đặt Lợi Ích Và Mong Muốn Của Khách Hàng Lên Hàng Đầu </span></span></h6>

                    <p>&nbsp;<img alt="Quảng cáo siêu tốc" class="bct" src="upload/icon/dathongbao.png" style="height:46px; width:150px" title="Quảng cáo siêu tốc" />
                        <a href="http://www.dmca.com/Protection/Status.aspx?ID=66764547-d918-46f1-b351-79ea5c6797b0" rel="nofollow" target="_blank"><img alt="" src="upload/icon/dmca_protected_16_120.png" style="height:39px; width:121px" /></a>
                    </p>

                    <p><span style="font-size:14px"><span style="color:#f1c40f;">G&oacute;p &Yacute; &amp; Khiếu Nại Đến CEO</span> <span style="color:#ffffff;">:</span> <span style="color:#66cc00;">tuanhaikh@gmail.com </span><span style="color:#ffffff;">-</span><span style="color:#66cc00;"> </span><span style="color:#f1c40f;">0987 087 034 (Mr.Hải)</span></span>
                    </p>
                </div>
            </footer>
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

            <div class="modal fade" id="global-modal1" role="dialog">

                <div class="modal-dialog modal-lg">

                    <!--Modal Content-->

                    <div class="modal-content">

                        <div class="modal-header" style="text-align:center;"><img class="quatang" src="style/images/qua-tang.png" alt="Quảng cáo siêu tốc" title="Quảng cáo siêu tốc">Đăng Ký Nhận FREE: Giáo Trình Facebook Marketing Từ A-Z

                            <button type="button" class="close" style="margin-top:-15px;" data-dismiss="modal" aria-label="Close">

                                <span aria-hidden="true">×</span>

                            </button>

                        </div>

                        <div class="modal-body" style="text-align:center;">

                            <div class="left-ebook">
                                <img src="application/upload/partner/biasach3.png" alt="Giáo Trình Facebook Marketing Từ A-Z Từ Chuyên Gia Võ Tuấn Hải" title="Giáo Trình Facebook Marketing Từ A-Z Từ Chuyên Gia Võ Tuấn Hải">

                            </div>

                            <div class="right-ebook">

                                <form method="post" name="mcembedded_ebook" class="mailchimp-ebook" id="form-sec" onsubmit="return CheckValue_ebook();">

                                    <div class="loader" style="display: none;"></div>

                                    <label><span>Họ và tên</span></label>

                                    <input name="fname_ebook" class="form-control fname_ebook" id="fname_ebook" tabindex="20" pattern=".{6,}" placeholder="Họ và tên" required autofocus title="" type="text">

                                    <label><span>Email</span></label>

                                    <input name="email_ebook" class="form-control email_ebook" id="email_ebook" tabindex="21" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Địa chỉ Email" title="Vui lòng nhập email hợp lệ!" type="email" required>

                                    <label><span>Điện thoại</span></label>

                                    <input name="phone_ebook" class="form-control phone_ebook" id="phone_ebook" tabindex="22" pattern="(\+?\d[- .]*){7,16}" placeholder="Số điện thoại" title="Vui lòng nhập số điện thoại!" type="text">

                                    <label><span>Mã captcha</span></label>

                                    <div class="col-xs6">

                                        <input type="text" style="font-size:17px;" class="form-control captcha" name="captcha" tabindex="23" id="captcha" value="" title="vui lòng nhập mã captcha" required>

                                        <span id="Info"></span>

                                    </div>

                                    <div class="col-xs6 col-xs61">

                                        <div class="captcha success"> <img src="captchas/images/1583652193.8237.jpg" width="110" height="28" style="border:0;" alt=" " /></div>

                                    </div>

                                    <input type="hidden" class="captchas" name="captchas" id="captchas" value="457">

                                    <button name="submit" tabindex="24" type="submit" class="send-ebook buttoms_ebook"><img src="style/images/dangkyngay.gif" alt="Quảng cáo siêu tốc" title="Quảng cáo siêu tốc"></button>

                                    <div class="ajaxloader_ebook"><img src="style/images/bx_loader.gif" alt="Quảng cáo siêu tốc" title="Quảng cáo siêu tốc" /></div>

                                </form>

                            </div>

                            <div class="successfull-ebook"></div>

                            <div class="modal-footer ebook-footer d-none d-md-block">

                                <img class="quatang" src="style/images/logo-sieutoc.png" alt="Quảng cáo siêu tốc" title="Quảng cáo siêu tốc">

                                <div class="footer-ebook-hidden">
                                    <div class="key"></div>Lưu ý: Giáo trình sẽ được gửi qua email đăng ký!</div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
