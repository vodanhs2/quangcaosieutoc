@extends('layouts/master-layout')
@section('main')
<section class="box-100 slide-home">
<picture>
  <source media="(max-width: 600px)" srcset="style/images/about.jpg">
  <source media="(min-width: 768px)" srcset="style/images/about.jpg">
  <img class="img-responsive" src="style/images/about.jpg" title="Hỏi Đáp Cùng Chuyên Gia" alt="Hỏi Đáp Cùng Chuyên Gia">
</picture>
<div class="fix-content-slide d-flex align-items-center justify-content-center">
<div class="col-md-12 title_text title_text1 text-slide">Hỏi Đáp Cùng Chuyên Gia</div></div>
</section>
<section class="box-100 breadc">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
    <li class="breadcrumb-item active"><h1>Hỏi Đáp Cùng Chuyên Gia</h1></li>
  </ol>
</nav>
</div>
</div>
</div>
</section>
<section class="box-100 wapper">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-12 col-12">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<article class="box-100 noidung">
<h2><span style="font-size:16px">- <em>Những <strong>c&aacute; nh&acirc;n</strong></em> hoặc <strong><em>chủ doanh nghiệp</em></strong> đang sử dụng marketing online để b&aacute;n h&agrave;ng v&agrave; c&oacute; nhiều thắc mắc</span></h2>

<h2><span style="font-size:16px">- <em>Những <strong>marketer</strong></em><strong> </strong>đang triển khai marketing online cho c&ocirc;ng ty thường xuy&ecirc;n vấp phải những trở ngại về chiến lược, về tối ưu h&oacute;a c&ocirc;ng cụ</span></h2>

<h2><span style="font-size:16px">- <em>Những <strong>newbie</strong></em><strong>&nbsp;</strong>digital marketing đang t&igrave;m kiếm một định hướng ph&aacute;t triển cho tương lai, t&igrave;m hiểu về c&aacute;c c&ocirc;ng cụ digital marketing</span></h2>

<h2><span style="font-size:16px">Nếu bạn thuộc nh&oacute;m đối tượng tr&ecirc;n th&igrave; đ&acirc;y l&agrave; cơ hội ng&agrave;n v&agrave;ng cho bạn, h&atilde;y đặt c&acirc;u hỏi cho chuy&ecirc;n gia marketing&nbsp;<strong>V&Otilde; TUẤN HẢI</strong>&nbsp;về những vấn đề m&agrave; bạn đang thắc mắc trong digital marketing, chuy&ecirc;n gia của ch&uacute;ng t&ocirc;i sẽ gỡ rối gi&uacute;p bạn. <strong>Xem qua profile của chuy&ecirc;n gia&nbsp;<a href="http://chuyengiamarketing.com/chuyen-gia-marketing-la-ai/" target="_blank"><span style="color:#ff0000">tại đ&acirc;y</span></a>&nbsp;</strong></span></h2></article>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<form method="post" name="comment_cauhoi" class="contact-left contact-cauhoi" id="comment_cauhoi">
<div class="row">
<div class="col-md-5 col-xs-12 step_2">
<div class="form-group" id="input-name_cauhoi">
<label>Họ và tên</label>
<input type="text" class="form-control name_cauhoi" name="name_cauhoi" id="name_cauhoi" value="" pattern=".{6,}" required title="Họ và tên không để trống">
</div>
<div class="form-group" id="input-email_cauhoi">
<label>Địa chỉ email</label> 
<input type="text" class="form-control email_cauhoi" name="email_cauhoi" id="email_cauhoi" value="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required title="Email không để trống">
</div>
<div class="form-group" id="input-phone_cauhoi">            
<label>Số điện thoại</label>
<input type="text" class="form-control phone_cauhoi" name="phone_cauhoi" id="phone_cauhoi" value="" pattern="(\+?\d[- .]*){7,16}" required title="Số điện thoại không để trống">
</div>
<div class="form-group" id="input-website_cauhoi">            
<label id="load_page">Website/Facebook</label>
<input type="text" class="form-control website_cauhoi" name="website_cauhoi" id="website_cauhoi" value="" pattern=".{6,}">
</div>
</div><!--end col-md-6-->
<div class="col-md-7 col-xs-12">
<div class="step_2">
<div class="form-group" id="input-loaihinh_cauhoi">
<label>Chủ đề</label>
<select class="form-control loaihinh_cauhoi" name="loaihinh_cauhoi" size="1" id="loaihinh_cauhoi" required>
<option value="">-- Chọn chủ đề --</option>
<option value="1">Facebook</option>
<option value="2">Google</option>
<option value="5">Youtube</option>
<option value="6">Zalo</option>
<option value="7">Cốc cốc</option>
<option value="12">Website</option>
<option value="13">Danh mục khác</option>
</select>
</div>
<div class="form-group" id="input-content_cauhoi">            
<label>Nội dung</label>
<textarea type="text" class="form-control content_cauhoi" rows="6" name="content_cauhoi" id="content_cauhoi" style="height:150px;"></textarea>
</div>
</div>
<div class="form-group step_2">
<button type="button" onclick="javascript:formFaqs('comment_cauhoi');" class="form-control btn btn-warning buttoms">Gửi câu hỏi</button>
</div>
</div><!--end col-md-6-->
</div>
<div class="box-100 statusdt_comment status-cauhoi status-us error"></div>
</form>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<div class="noidung"><div class="title_h1 title_giaidap">Giải đáp thắc mắc</div></div>

<div id="exTab1">
<ul class="nav nav-tabs nav-pills" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" href="#all" role="tab" data-toggle="tab">Tất cả</a>
  </li>
  <li class="nav-item"><a class="nav-link" href="#tab1" data-toggle="tab">Facebook</a></li>
<li class="nav-item"><a class="nav-link" href="#tab2" data-toggle="tab">Google</a></li>
<li class="nav-item"><a class="nav-link" href="#tab3" data-toggle="tab">Youtube</a></li>
<li class="nav-item"><a class="nav-link" href="#tab4" data-toggle="tab">Zalo</a></li>
<li class="nav-item"><a class="nav-link" href="#tab5" data-toggle="tab">Cốc cốc</a></li>
<li class="nav-item"><a class="nav-link" href="#tab6" data-toggle="tab">Website</a></li>
<li class="nav-item"><a class="nav-link" href="#tabkhac" data-toggle="tab">Mục khác</a></li></ul>
<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active show" id="all">
  <div class="show-comment detail_all" style="max-height:1000px; overflow:hidden;">            
            <div id="test-list13">
			            <ul class="ul list">
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">NT</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> NGUYỄN MINH TRÍ</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 30-10-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Youtube )
                    </span>
                    </div>
                    <div class="content-post">em muốn seo kênh của em về vlogs anh ạ</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 30-10-2018</span>
                        </div>
                        <div class="content-post"><p>
 Bạn ch&aacute;t với bộ phận kỹ thuật b&ecirc;n m&igrave;nh ở gốc dưới b&ecirc;n phải nh&eacute;.</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">NC</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Nguyễn Văn Cường</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 10-10-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục  )
                    </span>
                    </div>
                    <div class="content-post">phí khóa học là bao nhiêu và học xong có kiếm tiền được ko</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 30-10-2018</span>
                        </div>
                        <div class="content-post"><p>
 Cho hỏi bạn cần học kh&oacute;a học n&agrave;o vậy bạn ?</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">nt</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> nguyễn văn thành</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 27-09-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Youtube )
                    </span>
                    </div>
                    <div class="content-post">tôi cân quảng cáo trên yotube</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 30-10-2018</span>
                        </div>
                        <div class="content-post"><p>
 Sẽ c&oacute; bộ ph&acirc;n ads youtube gọi điện tư vấn cho bạn nh&eacute;<br />
 <br />
 Thank&#39;s bạn</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">bd</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> bui van dat</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 20-08-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Facebook )
                    </span>
                    </div>
                    <div class="content-post">anh chi co the lay lai mk cho em cai tk goole tuvip37@gmail.com dc k</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 30-10-2018</span>
                        </div>
                        <div class="content-post"><p>
 Quảng C&aacute;o Si&ecirc;u Tốc kh&ocirc;ng hổ trợ trường hợp của bạn được nh&eacute;. Bạn c&oacute; thể t&igrave;m c&aacute;ch giải quyết tr&ecirc;n google. Ch&uacute;c bạn th&agrave;nh c&ocirc;ng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">NT</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Nguyễn Anh Tuấn</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 08-07-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Facebook )
                    </span>
                    </div>
                    <div class="content-post">Hi mr Võ Tuấn Hải,
Tôi có chút thắc mắc cần hỏi kinh nghiệm của chuyên gia lý giúp đỡ
1, Tôi chạy quảng cáo mà không ra comment phải làm thế nào?
2, khi bắt đầu lên 1 chiến dịch xong có nên sao chép nhiều nhóm quảng cáo ra ngay để giảm giá thầu không ? hay phải lên nhiều chiến dịch trước sau đó mới chọn 1 chiến dịch để sao chép nhóm quảng cáo?
3, Nếu chiến dịch có tỉ lệ CRT cao mà chưa có cmt cao tôi có nên tăng ngân sách cho dịch đó không?
4, để tối ưu giá thầu nên sao chép nhiều chiến dịch hay</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 30-10-2018</span>
                        </div>
                        <div class="content-post"><p>
 Trường hợp của bạn, bạn n&ecirc;n ch&aacute;t với bộ phận support của Quảng C&aacute;o Si&ecirc;u Tốc, bạn gởi k&egrave;m t&ecirc;n fanpage, link b&agrave;i viết đang chạy quảng c&aacute;o, nh&oacute;m kh&aacute;ch h&agrave;ng bạn muốn nhấm đến. Ch&uacute;ng t&ocirc;i sẽ gi&uacute;p bạn giải đ&aacute;p<br />
 <br />
 Tr&acirc;n trọng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">VT</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Vương Cẩm Tú</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 18-06-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Facebook )
                    </span>
                    </div>
                    <div class="content-post">Trước đây mình chạy quảng cáo page bình thường nhưng gần 2 tuần trở lại đây ko chạy được nữa, nội dung bị báo chứa 18 , mình đã tìm hiểu mà sao vẫn ko giải quyết được, nhờ tư vấn giúp mình , tks</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 30-10-2018</span>
                        </div>
                        <div class="content-post"><p>
 Bạn ch&aacute;t với bộ phận support ở gốc dưới b&ecirc;n phải của web quangcaosieutoc.com nh&eacute;. C&aacute;c bạn support sẽ hướng dẫn bạn c&aacute;ch giải quyết nh&eacute;. Ch&uacute;c bạn may mắn</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">NV</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Ngô Đức Vượng</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 01-06-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Facebook )
                    </span>
                    </div>
                    <div class="content-post">Mình muốn hỏi mua tk facebook business manager cấp 2</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 30-10-2018</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn, Quảng C&aacute;o Si&ecirc;u Tốc kh&ocirc;ng b&aacute;n t&agrave;i khoản ads bạn nh&eacute;</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">Nk</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Nguyễn thị thanh kiều</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 06-05-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Facebook )
                    </span>
                    </div>
                    <div class="content-post">Làm cách nèo để có thu nhập đều?
Làm cách nèo khách hàng thích thú với sản phẩm mình ?
Là cách nào để bài viết của mình được mọi người chú ý?
Làm cách nèo để tư vấn về.một sp,?</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 29-05-2018</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn</p>
<p>
 Những c&acirc;u hỏi của bạn l&agrave; những c&acirc;u hỏi hết sức chung chung. Mỗi sản phẩm, dịch vụ, mỗi thời điểm v&agrave; tuỳ v&agrave; ng&acirc;n s&aacute;ch quảng c&aacute;o l&agrave; bao nhi&ecirc;u th&igrave; sẽ c&oacute; c&aacute;ch l&agrave;m kh&aacute;c nhau chứ kh&ocirc;ng c&oacute; 1 c&ocirc;ng thức n&agrave;o chung &aacute;p dụng cho tất cả. Những c&acirc;u hỏi kiểu n&agrave;y bạn ho&agrave;n to&agrave;n c&oacute; thể search tr&ecirc;n google v&agrave; đọc tham khảo được.</p>
<p>
 Tốt nhất bạn n&ecirc;n tham gia c&aacute;c kho&aacute; học b&aacute;n h&agrave;ng online bạn sẽ hiểu r&otilde; hơn.</p>
<p>
 Ch&uacute;c bạn th&agrave;nh c&ocirc;ng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">tx</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> thanh xuân</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 01-05-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Zalo )
                    </span>
                    </div>
                    <div class="content-post">em muốn chạy quảng cáo trên zalo và facebook nhưng chưa biết bắt đầu từ đâu? em mong anh giúp ạ</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 29-05-2018</span>
                        </div>
                        <div class="content-post"><p>
 Bạn n&ecirc;n bắt đầu bằng việc hiểu kh&aacute;ch h&agrave;ng của bạn trước, bạn cần phải nắm rỏ kh&aacute;ch h&agrave;ng của m&igrave;nh l&agrave; ai, ở đ&acirc;u, h&agrave;nh vi của họ l&agrave; g&igrave;, v&igrave; sao họ phải mua sản phẩm của bạn... ?</p>
<p>
 Tiếp theo bạn cần t&igrave;m hiểu kỹ về đối thủ của bạn l&agrave; những ai? Điểm mạnh v&agrave; điểm yếu của họ l&agrave; g&igrave; ? Họ d&ugrave;ng k&ecirc;nh n&agrave;o để tiếp cận kh&aacute;ch h&agrave;ng v&agrave; bạn h&agrave;ng ?</p>
<p>
 Sau khi bạn đ&atilde; t&igrave;m hiểu kỹ đối thủ của bạn, bạn h&atilde;y so với ch&iacute;nh bạn để biết được m&igrave;nh hơn đối thủ ở chổ n&agrave;o ? Yếu hơn chổ n&agrave;o ? Từ đ&oacute; mới đưa ra phương &aacute;n b&aacute;n h&agrave;ng dựa v&agrave;o nguồn lực của bạn ?</p>
<p>
 Bạn cần gởi cho T&ocirc;i xem th&ocirc;ng tin sản phẩm của bạn, ng&acirc;n s&aacute;ch dự kiến để quảng c&aacute;o, t&ocirc;i sẽ tư vấn cho bạn n&ecirc;n d&ugrave;ng k&ecirc;nh n&agrave;o để b&aacute;n h&agrave;ng v&agrave; d&ugrave;ng n&oacute; như thế n&agrave;o ?</p>
<p>
 Ch&uacute;c bạn th&agrave;nh c&ocirc;ng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">NV</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Nguyễn Vịnh</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 20-04-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục  )
                    </span>
                    </div>
                    <div class="content-post">Em chào anh!
Cho em hỏi chút ạ, hiện tại em đang muốn học 1 khóa học nhằm mục đích:
- Làm video marketting, giới thiệu về thương hiệu công ty, qua đó thêm cho mục đích tuyển dụng nhân sự của bên em.
- Em sắp tạo một trang fanpage trên FB nhằm mục đích bán hàng Ạ.
Anh có thể tư vấn cho em khóa học để đáp ứng được 2 mục đích của em trên k ạ, em cảm ơn anh!</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 29-05-2018</span>
                        </div>
                        <div class="content-post"><p>
 Sắp tới T&ocirc;i c&oacute; một kho&aacute; học dạy về phần n&agrave;y, bộ phận gi&aacute;o vụ sẽ li&ecirc;n hệ với bạn khi c&oacute; lịch khai giảng nh&eacute;</p>
<p>
 Cảm ơn bạn rất nhiều</p>
<p>
 Ch&uacute;c bạn th&agrave;nh c&ocirc;ng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">?</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> đặng công lực</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 12-04-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Zalo )
                    </span>
                    </div>
                    <div class="content-post">Mình muốn quảng cáo mảng gel titan nga. bên mình có nhận chạy mảng này không ạ?
nội dung chạy thì cần chuẩn bị những gì ạ</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 15-04-2018</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn, sản phẩm của bạn l&agrave; sản phẩm thuộc h&agrave;ng cấm quảng c&aacute;o, bạn n&ecirc;n c&acirc;n nhắc sử dụng SEO nh&eacute;. Ng&acirc;n s&aacute;ch sẽ tương đối lớn cho sản phẩm của bạn, v&igrave; độ canh tranh rất cao. Tr&acirc;n trọng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">NM</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Nguyễn Minh</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 07-04-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Zalo )
                    </span>
                    </div>
                    <div class="content-post">Cho Em hỏi khi quảng cáo hình thức Zalo official Account thì nên chạy 1 chiến dịch lớn nhiều ngày hay Tạo nhiều chiến dịch chạy trong 1 ngày sẽ tốt hơn, Và cho E hỏi thêm về cách thức phân phối giá bid vì có người đặt 1.300đ vẫn phân phối rất tốt mà có người 3.000đ vẫn không phân phối. Em cảm ơn</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 15-04-2018</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn</p>
<p>
 Việc c&agrave;i đặt quảng c&aacute;o zalo theo h&igrave;nh thức ng&acirc;n s&aacute;ch ng&agrave;y hay ng&acirc;n s&aacute;ch trọn đời l&agrave; do mục ti&ecirc;u của bạn</p>
<p>
 Nếu bạn cần ph&acirc;n ph&aacute;t quảng c&aacute;o nhanh nhất c&oacute; thể th&igrave; chọn h&igrave;nh thức ph&acirc;n ph&aacute;t quảng c&aacute;o trọn đời&nbsp;</p>
<p>
 C&ograve;n nếu bạn muốn kh&ocirc;ng chế mức ng&acirc;n s&aacute;ch 1 ng&agrave;y cố định l&agrave; bao nhi&ecirc;u đ&oacute; th&ocirc;i th&igrave; bạn d&ugrave;ng h&igrave;nh thức theo ng&agrave;y.<br />
 <br />
 T&ugrave;y theo c&aacute;ch bạn target m&agrave; sẽ c&oacute; gi&aacute; quảng c&aacute;o kh&aacute;c nhau, chỉ lưu &yacute; bạn l&agrave; Zalo hiện vẫn chưa th&ocirc;ng minh được như Facebook ở phần target v&agrave; t&iacute;nh tiền<br />
 <br />
 Tr&acirc;n trọng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">Lb</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Le quoc nhat binh</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 07-04-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Facebook )
                    </span>
                    </div>
                    <div class="content-post">Em muốn đăng ký 1 khoá học facebook marketing tại nhà vì e đang bán 1 shop nón áo quần thể thao cần chạy ads page mà không tiện đi học trực tiếp tại trung tâm. Em xin hoi khoá học bên mình gồm những nội dung gì và sau khoá học sẽ nắm chắc những kỹ năng ntn về chạy quảng cáo facebook ads bán hàng online ạ?mong được tư vấn kỹ và sớm nhất. Tks</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 15-04-2018</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn, để nhận được gi&aacute;o tr&igrave;nh Facebook Marketing bạn v&agrave;o web https://quangcaosieutoc.com bạn chờ 20 gi&acirc;y sẽ c&oacute; 1 popup hiện l&ecirc;n, bạn điền th&ocirc;ng tin v&agrave; gi&aacute;o tr&igrave;nh sẽ được gởi qua mail cho bạn</p>
<p>
 Ch&uacute;c bạn th&agrave;nh c&ocirc;ng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">LB</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Lâm Quốc Bảo</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 31-03-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Youtube )
                    </span>
                    </div>
                    <div class="content-post">Ad cho em hỏi làm sao để phần mô tả có dòng chữ Liên Minh Huyền Thoại ạ?Phải gắn thẻ tên game hay sao ạ?Thank ad trước^^</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 07-04-2018</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn</p>
<p>
 Ch&uacute;ng t&ocirc;i chỉ giải đ&aacute;p c&aacute;c vấn đề li&ecirc;n quan đến marketing online th&ocirc;i bạn nh&eacute;</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">nt</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> nguyễn thanh thảo</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 27-03-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Facebook )
                    </span>
                    </div>
                    <div class="content-post">em bán hàng qua facebook,gần đây em bị cướp đơn hàng,em rất buồn,bao nhiêu khách coment đặt hàng bị người khác cướp.em phải làm sao.có cách nào ẩn comment củ khách chỉ mình em thấy ko ạ.
em cảm ơn ạ</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 07-04-2018</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn Thảo</p>
<p>
 Vấn đề cướp kh&aacute;ch tr&ecirc;n facebook l&agrave; chuyện rất hay xảy ra. Để giảm thiểu chuyện n&agrave;y bạn c&oacute; thể đọc qua b&agrave;i viết:&nbsp;https://quangcaosieutoc.com/cach-an-binh-luan-cach-chong-cuop-khach-hang-tren-facebook/</p>
<p>
 Ch&uacute;c bạn th&agrave;nh c&ocirc;ng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">PN</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Phuoc Nguyen</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 20-03-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Zalo )
                    </span>
                    </div>
                    <div class="content-post">Em là sale bất động sản. Em đã đầu tư vào bài viết và chi phí quảng cáo trên zalo ad nhưng chưa thấy hiệu quả. Lượt xem khá ít và ít người quan tâm.
Mong anh có thể gợi ý cho em về marketing zalo ạ
thanks</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 25-03-2018</span>
                        </div>
                        <div class="content-post"><p>
 Sẽ c&oacute; nh&acirc;n vi&ecirc;n phụ tr&aacute;ch Zalo gọi điện v&agrave; tư vấn cho bạn nh&eacute;</p>
<p>
 Thank&#39;s bạn</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">NB</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Nguyen Binh</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 09-03-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục  )
                    </span>
                    </div>
                    <div class="content-post">Chào thầy,
Em đang quan tâm đến khóa học bán hàng trên Amazon
mong thầy tư vấn</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 25-03-2018</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn B&igrave;nh</p>
<p>
 Hiện tại kh&oacute;a hoc n&agrave;y b&ecirc;n mifh chưa mở lớp, khi n&agrave;o c&oacute; lịch sẽ c&oacute; bộ phận gi&aacute;o vụ li&ecirc;n hệ bạn nh&eacute;</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">nt</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> như trang</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 08-01-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Facebook )
                    </span>
                    </div>
                    <div class="content-post">chào anh hải. hiện tại hoàn cảnh của em là nuôi con nhỏ. chồng đi làm ăn xa cả năm mới về đôi ba lần. nội ngoại ko có ai phụ giúp. con ốm đau suốt ngày vất vả quá. em đã tìm mọi nơi để học kinh doanh online nhưng ko thành. em ko có thời gian đi học chỉ mua các gói học online facebook cơ bản đến chuyên sâu. sau khi học xong tiến hành chạy quảng cáo nhưng chỉ thấy có lượng người tiếp cận tầm 2000 người. ít người like, ko có comment và share và ko có ai mua hàng, trong khi fb của em full 5000 bạn,</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 22-02-2018</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn, Facebook c&aacute; nh&acirc;n của bạn c&oacute; 5000 bạn điều đ&oacute; kh&ocirc;ng c&oacute; nghĩa bạn b&aacute;n được h&agrave;ng, c&ograve;n phụ thuộc v&agrave;o tương t&aacute;c cao hay kh&ocirc;ng nữa. C&ograve;n Fanpage bạn cần cho m&igrave;nh xem content v&agrave; target của bạn ra sao nh&eacute;, bạn c&oacute; thể chụp h&igrave;nh chi tiết hơn gởi v&agrave;o mail: tuanhaikh@gmail.com để m&igrave;nh xem qua, sau đ&oacute; sẽ c&oacute; hướng giải quyết gi&uacute;p bạn</p>
<p>
 Thank&#39;s bạn</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">HP</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Huỳnh Lâm Phát</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 01-01-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục  )
                    </span>
                    </div>
                    <div class="content-post">Thưa Thầy, Em học cách làm Tiếp thị liên kết, nên em muốn biết thông tin về khóa học ạ. XIN CHÂN THÀNH CẢM ƠN THẦY. CHÚC THẦY CÓ THẬT NHIỀU SỨC KHỎE Ạ.</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 22-02-2018</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn, hiện tại m&igrave;nh chưa mở kh&oacute;a dạy về tiếp thị li&ecirc;n kết, bạn c&oacute; thể xem qua tr&ecirc;n c&aacute;c trang web kh&aacute;c nh&eacute;. L&ecirc;n google gỏ &quot;kh&oacute;a học tiếp thị li&ecirc;n kết&quot; đầy ấy m&agrave;</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">GN</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Giang Thành Nhân</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 06-12-2017</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Facebook )
                    </span>
                    </div>
                    <div class="content-post">Em muốn được tư vấn vế fb ads</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 07-12-2017</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn Nh&acirc;n, sẽ c&oacute; nh&acirc;n vi&ecirc;n tư vấn của Quảng C&aacute;o Si&ecirc;u Tốc gọi điện tư vấn cho bạn nh&eacute;</p>
<p>
 Tr&acirc;n trọng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">LH</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Lê Thị Hương</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 04-12-2017</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Cốc cốc )
                    </span>
                    </div>
                    <div class="content-post">Anh Hải cho em hỏi Cốc Cốc có những loại quảng cáo nào ? và nên dùng loại nào cho hiệu quả ạ ?</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 04-12-2017</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn L&ecirc; Thị Hương</p>
<p>
 Cốc Cốc c&oacute; rất nhiều h&igrave;nh thức quảng c&aacute;o v&agrave; mỗi loại lại c&oacute; ưu v&agrave; nhược điểm kh&aacute;c nhau, nhưng nh&igrave;n chung th&igrave; c&oacute; 3 loại ch&iacute;nh như sau</p>
<p>
 1. Quảng C&aacute;o Cốc Cốc Search</p>
<p>
 2. Quảng C&aacute;o Cốc Cốc Banner</p>
<p>
 3. Quảng C&aacute;o Cốc Cốc Video</p>
<p>
 4. Quảng C&aacute;o Cốc Cốc ICO</p>
<p>
 Bạn c&oacute; thể xem chi tiết tại đ&acirc;y:&nbsp;https://quangcaosieutoc.com/quang-cao-coc-coc/</p>
<p>
 C&ograve;n về loại n&agrave;o hiệu quả hơn th&igrave; c&ograve;n t&ugrave;y bạn ạ, t&ugrave;y v&agrave;o KPI l&agrave; g&igrave; ? Ng&acirc;n s&aacute;ch bao nhiều ?,... nữa</p>
<p>
 Ch&uacute;c bạn th&agrave;nh c&ocirc;ng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">VM</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Võ Cao Minh</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 04-12-2017</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Website )
                    </span>
                    </div>
                    <div class="content-post">Anh Hải ơi cho em hỏi
Em muốn làm 1 website để bán hàng online, em nên bắt đầu từ đâu ?
Xin anh cho em lời khuyên
Cảm ơn anh nhiều</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 04-12-2017</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn V&otilde; Cao Minh</p>
<p>
 M&igrave;nh c&oacute; v&agrave;i lời khuy&ecirc;n cho bạn như sau:&nbsp;</p>
<p>
 1. Bạn cần t&igrave;m hiểu thật kỹ về thị trường, sản phẩm bạn đang b&aacute;n về ph&acirc;n kh&uacute;c kh&aacute;ch h&agrave;ng, định vị sản phẩm, về ưu điểm v&agrave; nhược điểm của sản phẩm,...</p>
<p>
 2. Bạn cần chọn ra 5 đối thủ trực tiếp c&oacute; c&ugrave;ng mức gi&aacute; v&agrave; c&oacute; m&ocirc; h&igrave;nh kinh doanh tương tự như m&ocirc; h&igrave;nh kinh doanh của bạn, h&atilde;y xem thật kỹ website của họ xem họ hay chổ n&agrave;o, dỡ chổ n&agrave;o. H&atilde;y bỏ thời gian để đến d&ograve; gi&aacute; v&agrave; m&ocirc; h&igrave;nh của họ.</p>
<p>
 3. Sau khi đ&atilde; hiểu rỏ thị trường, kh&aacute;ch h&agrave;ng, hiểu rỏ đối thủ bạn h&atilde;y r&uacute;t ra cho m&igrave;nh nhận định bạn cần phải l&agrave;m g&igrave;? l&uacute;c n&agrave;y bạn h&atilde;y li&ecirc;n hệ đơn vị l&agrave;m web để tr&igrave;nh b&agrave;y &yacute; tưởng v&agrave; nhờ họ tư vấn th&ecirc;m cho bạn</p>
<p>
 Ch&uacute;c bạn th&agrave;nh c&ocirc;ng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">KL</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Kim Luyến</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 04-12-2017</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Zalo )
                    </span>
                    </div>
                    <div class="content-post">Anh Hải ơi cho em hỏi, quảng cáo zalo và quảng cáo facebook cái nào hiệu quả hơn vậy anh</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 04-12-2017</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o Luyến</p>
<p>
 C&acirc;u hỏi của em l&agrave; một c&acirc;u hỏi kh&aacute; chung chung rất kh&oacute; c&oacute; đ&aacute;p &aacute;n ch&iacute;nh x&aacute;c v&igrave; định nghĩa hiệu quả l&agrave; g&igrave; nữa (Đơn h&agrave;ng hay Thương hiệu)???</p>
<p>
 Nhưng anh sẽ chia sẽ quan điểm c&aacute; nh&acirc;n thế n&agrave;y nh&eacute;</p>
<p>
 Nếu em chi 10 triệu cho zalo v&agrave; 10 triệu cho facebook. V&iacute; dụ em b&aacute;n quần &aacute;o thời trang, fanpage mới v&agrave; OA mới, KPI l&agrave; đơn h&agrave;ng</p>
<p>
 Th&igrave; theo kinh nghiệm anh đ&atilde; triển khai th&igrave; Facebook sẽ c&oacute; đơn nhiều hơn Zalo với c&ugrave;ng số tiền như vậy</p>
<p>
 Ch&uacute;c em th&agrave;nh c&ocirc;ng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">NQ</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Nguyễn Minh Quý</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 04-12-2017</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Google )
                    </span>
                    </div>
                    <div class="content-post">Chào anh Hải
Em đang làm SEO, em nghe nói có một trường phái SEO không cần backlink, em được biết anh là người làm SEO chú trọng đến onpage. Anh chia sẽ giúp em nhé. Cảm ơn anh</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 04-12-2017</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn Minh Qu&yacute;</p>
<p>
 Đ&uacute;ng như bạn n&oacute;i, m&igrave;nh l&agrave;m SEO theo định hướng chuy&ecirc;n về content v&igrave; theo m&igrave;nh google lu&ocirc;n lu&ocirc;n hướng đến người d&ugrave;ng, v&agrave; khi người dung search từ kh&oacute;a tr&ecirc;n google c&aacute;i họ cần t&igrave;m l&agrave; một web c&oacute; nội dung chất lượng chứ kh&ocirc;ng phải cần t&igrave;m web c&oacute; backlink chất lượng, cho n&ecirc;n google b&acirc;y giờ hoặc sau n&agrave;y vẫn sẽ ưu ti&ecirc;n cho nội dung (Quan điểm c&aacute; nh&acirc;n)</p>
<p>
 C&ograve;n về việc SEO kh&ocirc;ng backlink c&oacute; thể đ&uacute;ng hoặc sai t&ugrave;y trường hợp. Trong trường hợp bạn SEO từ kh&oacute;a c&oacute; độ cạnh tranh &lt; 25 th&igrave; bạn c&oacute; thể kh&ocirc;ng cần backlink m&agrave; chỉ cần nội dung chất lượng, code chuẩn, li&ecirc;n kết nội bộ tốt,.. bạn c&oacute; thể đ&atilde; l&ecirc;n top (M&igrave;nh đ&atilde; l&agrave;m rất nhiều lần v&agrave; đ&atilde; th&agrave;nh c&ocirc;ng). C&ograve;n nếu bạn SEO c&aacute;c từ kh&oacute;a kh&oacute; nếu kh&ocirc;ng c&oacute; backlink bạn rất kh&oacute; để l&ecirc;n top google. V&igrave; l&agrave;m SEO cũng giống như con người, l&agrave;m giỏi th&ocirc;i chưa đủ, l&agrave;m giỏi phải k&egrave;m với c&oacute; mối quan hệ rộng r&atilde;i, quan hệ với những người giỏi th&igrave; m&igrave;nh c&agrave;ng c&oacute; tầm hơn.&nbsp;<br />
 <br />
 Chốt: SEO từ kh&oacute;a dễ c&oacute; thể kh&ocirc;ng cần backlin vẫn top, c&ograve;n từ kh&oacute;a kh&oacute; nhất định phải cần backlink</p>
<p>
 Ch&uacute;c bạn th&agrave;nh c&ocirc;ng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">NC</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Nguyễn Ngọc Châu</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 04-12-2017</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Facebook )
                    </span>
                    </div>
                    <div class="content-post">Chào chuyên gia, em là sinh viên mới ra trường, em muốn bán quần áo trên facebook để kiếm tiền. Em nên bắt đầu từ đâu ? Em cảm ơn ạ</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 04-12-2017</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn Ngọc Ch&acirc;u</p>
<p>
 M&igrave;nh c&oacute; 1 lời khuy&ecirc;n cho bạn v&igrave; bạn l&agrave; người mới bắt đầu kinh doanh online nguồn vốn sẽ hạn chế</p>
<p>
 1. Chọn cho m&igrave;nh một thị trường ng&aacute;ch</p>
<p>
 2. Bạn cần chọn cho m&igrave;nh một ph&acirc;n kh&uacute;c kh&aacute;ch h&agrave;ng cụ thể</p>
<p>
 3. Bạn chọn một sản phẩm ng&aacute;ch, đừng tập trung đại tr&agrave; theo kiểu c&aacute;i g&igrave; em cũng b&aacute;n&nbsp;</p>
<p>
 Bạn &iacute;t vốn h&atilde;y tận dụng tất cả c&aacute;c nguồn miễn ph&iacute; c&oacute; thể để bạn h&agrave;ng, như d&ugrave;ng facebook c&aacute; nh&acirc;n, forum,..</p>
<p>
 Sau đ&oacute; bạn h&atilde;y tạo cho m&igrave;nh một fanpage, chỉnh chu từ h&igrave;nh ảnh đến nội dung v&agrave; mời bạn b&egrave; của bạn like page</p>
<p>
 Bạn c&oacute; thể tự thực hiện chạy ads (nếu tự tin) hoặc thu&ecirc; đơn vị chạy ads cho bạn</p>
<p>
 Nhờ c&aacute;c anh/chị đi trước tư vấn hướng dẫn bạn để bạn ho&agrave;n thiện hơn&nbsp;</p>
<p>
 Ch&uacute;c bạn th&agrave;nh c&ocirc;ng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">?</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Đăng Khoa</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 21-11-2017</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Youtube )
                    </span>
                    </div>
                    <div class="content-post">Em chào Anh
Em có kế hoạch làm vlog travel trên kenh youtube ,em đã đọc và tim hiểu về wed của quangcaosieutoc , em sẻ đầu tư cho video của mình và tạo lượt view nhiều nhất có thể ,sau đó em có thể hợp tác quảng cáo với trang của mình được hay không, về kiến thức và tư duy em nghi như vậy rất mong được sự phản hồi và sự góp ý chân thành của phía công ty. Em đã lên kế hoạch travel nhiều năm không về VN nên cần những thu nhập từ việc review . Rất mong nhận được sự phản hồi của công ty.</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 04-12-2017</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o Khoa</p>
<p>
 Việc đầu ti&ecirc;n của bạn l&agrave; cần x&acirc;y dựng cho m&igrave;nh một k&ecirc;nh youtube, sau đ&oacute; x&acirc;y dựng những đoạn video chất lượng tr&ecirc;n k&ecirc;nh. Việc quan trọng nhất l&agrave; bạn n&ecirc;n thống nhất nội dung tr&ecirc;n k&ecirc;nh, kh&ocirc;ng n&ecirc;n l&agrave;m 1 k&ecirc;nh thập cẩm m&agrave; h&atilde;y tập trung v&agrave;o một ngh&aacute;ch cụ thể, sau đ&oacute; cần l&ecirc;n lịch &uacute;p video định kỳ. Thời gian đầu tạo k&ecirc;nh sẽ rất kh&oacute; khăn v&agrave; số view sẽ rất &iacute;t nhưng bạn h&atilde;y ki&ecirc;n nhẫn, cứ định kỳ &uacute;p video như kế hoạch.&nbsp;</p>
<p>
 Trong c&aacute;c đoạn video bạn n&ecirc;n bi&ecirc;n tập để nhắc đến k&ecirc;nh trong nội dung, c&oacute; thể bằng giọng n&oacute;i hoặc text v&agrave; thực hiện chia sẽ tr&ecirc;n c&aacute;c k&ecirc;nh MXH kh&aacute;c để tạo sức h&uacute;t về k&ecirc;nh youtube</p>
<p>
 Nếu đoạn video n&agrave;o bạn muốn l&agrave;m quảng c&aacute;o th&igrave; bạn n&ecirc;n bi&ecirc;n tập dồn phần quan trọng nhất, hay nhất ra 30 gi&acirc;y đầu ti&ecirc;n để tạo cuốn h&uacute;t để kh&aacute;ch xem hết video, v&agrave; c&oacute; một điều l&agrave; khi bạn chọn h&igrave;nh tức quảng c&aacute;o true view của youtube th&igrave; bạn chỉ phải trả ph&iacute; khi người d&ugrave;ng xem qua 30 gi&acirc;y. H&atilde;y cố gắn tận dụng điều n&agrave;y.</p>
<p>
 Quảng C&aacute;o Si&ecirc;u Tốc h&acirc;n hạnh đồng h&agrave;nh c&ugrave;ng bạn</p>
<p>
 Ch&uacute;c bạn th&agrave;nh c&ocirc;ng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">LN</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Lê Hoàng Thanh Nhàn</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 20-11-2017</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Facebook )
                    </span>
                    </div>
                    <div class="content-post">Nếu chạy quảng cáo trên Fb để quảng cáo chô một app ứng dụng trong vòng 6 tháng có thể tốn tổng cộng bao nhiêu chi phí ạ?</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 04-12-2017</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn, quảng c&aacute;o facebook hoặc cho bất cứ một k&ecirc;nh n&agrave;o kh&aacute;c kh&ocirc;ng c&oacute; mức gi&aacute; cố định l&agrave; bao nhi&ecirc;u. Điều n&agrave;y phụ thuộc v&agrave;o KPIs m&agrave; hai b&ecirc;n thỏa thuận với nhau.&nbsp;</p>
<p>
 Bạn c&oacute; thể gọi số:028.6656 5252 để được nh&acirc;n vi&ecirc;n của Quảng C&aacute;o Si&ecirc;u Tốc tư vấn cụ thể cho bạn nh&eacute;</p>
<p>
 Ch&uacute;c bạn th&agrave;nh c&ocirc;ng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        </ul>
            </div>
        </div><!--end show-comment-->
  <div class="box-100 ab__hpd_more ab__hpd_more_all" onclick="showFunction1('all')"><span>Xem thêm</span></div>
  </div>
<div role="tabpanel" class="tab-pane fade" id="tab1">
<div class="show-comment detail_1" style="max-height:1000px; overflow:hidden;">            
            <div id="test-list13">
			            <ul class="ul list">
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">bd</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> bui van dat</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 20-08-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Facebook )
                    </span>
                    </div>
                    <div class="content-post">anh chi co the lay lai mk cho em cai tk goole tuvip37@gmail.com dc k</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 30-10-2018</span>
                        </div>
                        <div class="content-post"><p>
 Quảng C&aacute;o Si&ecirc;u Tốc kh&ocirc;ng hổ trợ trường hợp của bạn được nh&eacute;. Bạn c&oacute; thể t&igrave;m c&aacute;ch giải quyết tr&ecirc;n google. Ch&uacute;c bạn th&agrave;nh c&ocirc;ng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">NT</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Nguyễn Anh Tuấn</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 08-07-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Facebook )
                    </span>
                    </div>
                    <div class="content-post">Hi mr Võ Tuấn Hải,
Tôi có chút thắc mắc cần hỏi kinh nghiệm của chuyên gia lý giúp đỡ
1, Tôi chạy quảng cáo mà không ra comment phải làm thế nào?
2, khi bắt đầu lên 1 chiến dịch xong có nên sao chép nhiều nhóm quảng cáo ra ngay để giảm giá thầu không ? hay phải lên nhiều chiến dịch trước sau đó mới chọn 1 chiến dịch để sao chép nhóm quảng cáo?
3, Nếu chiến dịch có tỉ lệ CRT cao mà chưa có cmt cao tôi có nên tăng ngân sách cho dịch đó không?
4, để tối ưu giá thầu nên sao chép nhiều chiến dịch hay</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 30-10-2018</span>
                        </div>
                        <div class="content-post"><p>
 Trường hợp của bạn, bạn n&ecirc;n ch&aacute;t với bộ phận support của Quảng C&aacute;o Si&ecirc;u Tốc, bạn gởi k&egrave;m t&ecirc;n fanpage, link b&agrave;i viết đang chạy quảng c&aacute;o, nh&oacute;m kh&aacute;ch h&agrave;ng bạn muốn nhấm đến. Ch&uacute;ng t&ocirc;i sẽ gi&uacute;p bạn giải đ&aacute;p<br />
 <br />
 Tr&acirc;n trọng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">VT</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Vương Cẩm Tú</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 18-06-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Facebook )
                    </span>
                    </div>
                    <div class="content-post">Trước đây mình chạy quảng cáo page bình thường nhưng gần 2 tuần trở lại đây ko chạy được nữa, nội dung bị báo chứa 18 , mình đã tìm hiểu mà sao vẫn ko giải quyết được, nhờ tư vấn giúp mình , tks</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 30-10-2018</span>
                        </div>
                        <div class="content-post"><p>
 Bạn ch&aacute;t với bộ phận support ở gốc dưới b&ecirc;n phải của web quangcaosieutoc.com nh&eacute;. C&aacute;c bạn support sẽ hướng dẫn bạn c&aacute;ch giải quyết nh&eacute;. Ch&uacute;c bạn may mắn</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">NV</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Ngô Đức Vượng</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 01-06-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Facebook )
                    </span>
                    </div>
                    <div class="content-post">Mình muốn hỏi mua tk facebook business manager cấp 2</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 30-10-2018</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn, Quảng C&aacute;o Si&ecirc;u Tốc kh&ocirc;ng b&aacute;n t&agrave;i khoản ads bạn nh&eacute;</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">Nk</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Nguyễn thị thanh kiều</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 06-05-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Facebook )
                    </span>
                    </div>
                    <div class="content-post">Làm cách nèo để có thu nhập đều?
Làm cách nèo khách hàng thích thú với sản phẩm mình ?
Là cách nào để bài viết của mình được mọi người chú ý?
Làm cách nèo để tư vấn về.một sp,?</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 29-05-2018</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn</p>
<p>
 Những c&acirc;u hỏi của bạn l&agrave; những c&acirc;u hỏi hết sức chung chung. Mỗi sản phẩm, dịch vụ, mỗi thời điểm v&agrave; tuỳ v&agrave; ng&acirc;n s&aacute;ch quảng c&aacute;o l&agrave; bao nhi&ecirc;u th&igrave; sẽ c&oacute; c&aacute;ch l&agrave;m kh&aacute;c nhau chứ kh&ocirc;ng c&oacute; 1 c&ocirc;ng thức n&agrave;o chung &aacute;p dụng cho tất cả. Những c&acirc;u hỏi kiểu n&agrave;y bạn ho&agrave;n to&agrave;n c&oacute; thể search tr&ecirc;n google v&agrave; đọc tham khảo được.</p>
<p>
 Tốt nhất bạn n&ecirc;n tham gia c&aacute;c kho&aacute; học b&aacute;n h&agrave;ng online bạn sẽ hiểu r&otilde; hơn.</p>
<p>
 Ch&uacute;c bạn th&agrave;nh c&ocirc;ng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">Lb</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Le quoc nhat binh</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 07-04-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Facebook )
                    </span>
                    </div>
                    <div class="content-post">Em muốn đăng ký 1 khoá học facebook marketing tại nhà vì e đang bán 1 shop nón áo quần thể thao cần chạy ads page mà không tiện đi học trực tiếp tại trung tâm. Em xin hoi khoá học bên mình gồm những nội dung gì và sau khoá học sẽ nắm chắc những kỹ năng ntn về chạy quảng cáo facebook ads bán hàng online ạ?mong được tư vấn kỹ và sớm nhất. Tks</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 15-04-2018</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn, để nhận được gi&aacute;o tr&igrave;nh Facebook Marketing bạn v&agrave;o web https://quangcaosieutoc.com bạn chờ 20 gi&acirc;y sẽ c&oacute; 1 popup hiện l&ecirc;n, bạn điền th&ocirc;ng tin v&agrave; gi&aacute;o tr&igrave;nh sẽ được gởi qua mail cho bạn</p>
<p>
 Ch&uacute;c bạn th&agrave;nh c&ocirc;ng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">nt</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> nguyễn thanh thảo</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 27-03-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Facebook )
                    </span>
                    </div>
                    <div class="content-post">em bán hàng qua facebook,gần đây em bị cướp đơn hàng,em rất buồn,bao nhiêu khách coment đặt hàng bị người khác cướp.em phải làm sao.có cách nào ẩn comment củ khách chỉ mình em thấy ko ạ.
em cảm ơn ạ</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 07-04-2018</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn Thảo</p>
<p>
 Vấn đề cướp kh&aacute;ch tr&ecirc;n facebook l&agrave; chuyện rất hay xảy ra. Để giảm thiểu chuyện n&agrave;y bạn c&oacute; thể đọc qua b&agrave;i viết:&nbsp;https://quangcaosieutoc.com/cach-an-binh-luan-cach-chong-cuop-khach-hang-tren-facebook/</p>
<p>
 Ch&uacute;c bạn th&agrave;nh c&ocirc;ng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">nt</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> như trang</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 08-01-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Facebook )
                    </span>
                    </div>
                    <div class="content-post">chào anh hải. hiện tại hoàn cảnh của em là nuôi con nhỏ. chồng đi làm ăn xa cả năm mới về đôi ba lần. nội ngoại ko có ai phụ giúp. con ốm đau suốt ngày vất vả quá. em đã tìm mọi nơi để học kinh doanh online nhưng ko thành. em ko có thời gian đi học chỉ mua các gói học online facebook cơ bản đến chuyên sâu. sau khi học xong tiến hành chạy quảng cáo nhưng chỉ thấy có lượng người tiếp cận tầm 2000 người. ít người like, ko có comment và share và ko có ai mua hàng, trong khi fb của em full 5000 bạn,</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 22-02-2018</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn, Facebook c&aacute; nh&acirc;n của bạn c&oacute; 5000 bạn điều đ&oacute; kh&ocirc;ng c&oacute; nghĩa bạn b&aacute;n được h&agrave;ng, c&ograve;n phụ thuộc v&agrave;o tương t&aacute;c cao hay kh&ocirc;ng nữa. C&ograve;n Fanpage bạn cần cho m&igrave;nh xem content v&agrave; target của bạn ra sao nh&eacute;, bạn c&oacute; thể chụp h&igrave;nh chi tiết hơn gởi v&agrave;o mail: tuanhaikh@gmail.com để m&igrave;nh xem qua, sau đ&oacute; sẽ c&oacute; hướng giải quyết gi&uacute;p bạn</p>
<p>
 Thank&#39;s bạn</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">GN</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Giang Thành Nhân</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 06-12-2017</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Facebook )
                    </span>
                    </div>
                    <div class="content-post">Em muốn được tư vấn vế fb ads</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 07-12-2017</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn Nh&acirc;n, sẽ c&oacute; nh&acirc;n vi&ecirc;n tư vấn của Quảng C&aacute;o Si&ecirc;u Tốc gọi điện tư vấn cho bạn nh&eacute;</p>
<p>
 Tr&acirc;n trọng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">NC</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Nguyễn Ngọc Châu</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 04-12-2017</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Facebook )
                    </span>
                    </div>
                    <div class="content-post">Chào chuyên gia, em là sinh viên mới ra trường, em muốn bán quần áo trên facebook để kiếm tiền. Em nên bắt đầu từ đâu ? Em cảm ơn ạ</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 04-12-2017</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn Ngọc Ch&acirc;u</p>
<p>
 M&igrave;nh c&oacute; 1 lời khuy&ecirc;n cho bạn v&igrave; bạn l&agrave; người mới bắt đầu kinh doanh online nguồn vốn sẽ hạn chế</p>
<p>
 1. Chọn cho m&igrave;nh một thị trường ng&aacute;ch</p>
<p>
 2. Bạn cần chọn cho m&igrave;nh một ph&acirc;n kh&uacute;c kh&aacute;ch h&agrave;ng cụ thể</p>
<p>
 3. Bạn chọn một sản phẩm ng&aacute;ch, đừng tập trung đại tr&agrave; theo kiểu c&aacute;i g&igrave; em cũng b&aacute;n&nbsp;</p>
<p>
 Bạn &iacute;t vốn h&atilde;y tận dụng tất cả c&aacute;c nguồn miễn ph&iacute; c&oacute; thể để bạn h&agrave;ng, như d&ugrave;ng facebook c&aacute; nh&acirc;n, forum,..</p>
<p>
 Sau đ&oacute; bạn h&atilde;y tạo cho m&igrave;nh một fanpage, chỉnh chu từ h&igrave;nh ảnh đến nội dung v&agrave; mời bạn b&egrave; của bạn like page</p>
<p>
 Bạn c&oacute; thể tự thực hiện chạy ads (nếu tự tin) hoặc thu&ecirc; đơn vị chạy ads cho bạn</p>
<p>
 Nhờ c&aacute;c anh/chị đi trước tư vấn hướng dẫn bạn để bạn ho&agrave;n thiện hơn&nbsp;</p>
<p>
 Ch&uacute;c bạn th&agrave;nh c&ocirc;ng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">LN</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Lê Hoàng Thanh Nhàn</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 20-11-2017</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Facebook )
                    </span>
                    </div>
                    <div class="content-post">Nếu chạy quảng cáo trên Fb để quảng cáo chô một app ứng dụng trong vòng 6 tháng có thể tốn tổng cộng bao nhiêu chi phí ạ?</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 04-12-2017</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn, quảng c&aacute;o facebook hoặc cho bất cứ một k&ecirc;nh n&agrave;o kh&aacute;c kh&ocirc;ng c&oacute; mức gi&aacute; cố định l&agrave; bao nhi&ecirc;u. Điều n&agrave;y phụ thuộc v&agrave;o KPIs m&agrave; hai b&ecirc;n thỏa thuận với nhau.&nbsp;</p>
<p>
 Bạn c&oacute; thể gọi số:028.6656 5252 để được nh&acirc;n vi&ecirc;n của Quảng C&aacute;o Si&ecirc;u Tốc tư vấn cụ thể cho bạn nh&eacute;</p>
<p>
 Ch&uacute;c bạn th&agrave;nh c&ocirc;ng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        </ul>
            </div>
        </div><!--end show-comment-->
  <div class="box-100 ab__hpd_more ab__hpd_more_1" onclick="showFunction1('1')"><span>Xem thêm</span></div>
</div>
<div role="tabpanel" class="tab-pane fade" id="tab2">
<div class="show-comment detail_2" style="max-height:1000px; overflow:hidden;">            
            <div id="test-list13">
			            <ul class="ul list">
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">NQ</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Nguyễn Minh Quý</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 04-12-2017</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Google )
                    </span>
                    </div>
                    <div class="content-post">Chào anh Hải
Em đang làm SEO, em nghe nói có một trường phái SEO không cần backlink, em được biết anh là người làm SEO chú trọng đến onpage. Anh chia sẽ giúp em nhé. Cảm ơn anh</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 04-12-2017</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn Minh Qu&yacute;</p>
<p>
 Đ&uacute;ng như bạn n&oacute;i, m&igrave;nh l&agrave;m SEO theo định hướng chuy&ecirc;n về content v&igrave; theo m&igrave;nh google lu&ocirc;n lu&ocirc;n hướng đến người d&ugrave;ng, v&agrave; khi người dung search từ kh&oacute;a tr&ecirc;n google c&aacute;i họ cần t&igrave;m l&agrave; một web c&oacute; nội dung chất lượng chứ kh&ocirc;ng phải cần t&igrave;m web c&oacute; backlink chất lượng, cho n&ecirc;n google b&acirc;y giờ hoặc sau n&agrave;y vẫn sẽ ưu ti&ecirc;n cho nội dung (Quan điểm c&aacute; nh&acirc;n)</p>
<p>
 C&ograve;n về việc SEO kh&ocirc;ng backlink c&oacute; thể đ&uacute;ng hoặc sai t&ugrave;y trường hợp. Trong trường hợp bạn SEO từ kh&oacute;a c&oacute; độ cạnh tranh &lt; 25 th&igrave; bạn c&oacute; thể kh&ocirc;ng cần backlink m&agrave; chỉ cần nội dung chất lượng, code chuẩn, li&ecirc;n kết nội bộ tốt,.. bạn c&oacute; thể đ&atilde; l&ecirc;n top (M&igrave;nh đ&atilde; l&agrave;m rất nhiều lần v&agrave; đ&atilde; th&agrave;nh c&ocirc;ng). C&ograve;n nếu bạn SEO c&aacute;c từ kh&oacute;a kh&oacute; nếu kh&ocirc;ng c&oacute; backlink bạn rất kh&oacute; để l&ecirc;n top google. V&igrave; l&agrave;m SEO cũng giống như con người, l&agrave;m giỏi th&ocirc;i chưa đủ, l&agrave;m giỏi phải k&egrave;m với c&oacute; mối quan hệ rộng r&atilde;i, quan hệ với những người giỏi th&igrave; m&igrave;nh c&agrave;ng c&oacute; tầm hơn.&nbsp;<br />
 <br />
 Chốt: SEO từ kh&oacute;a dễ c&oacute; thể kh&ocirc;ng cần backlin vẫn top, c&ograve;n từ kh&oacute;a kh&oacute; nhất định phải cần backlink</p>
<p>
 Ch&uacute;c bạn th&agrave;nh c&ocirc;ng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        </ul>
            </div>
        </div><!--end show-comment-->
  <div class="box-100 ab__hpd_more ab__hpd_more_2" onclick="showFunction1('2')"><span>Xem thêm</span></div>
</div>
<div role="tabpanel" class="tab-pane fade" id="tab3">
<div class="show-comment detail_3" style="max-height:1000px; overflow:hidden;">            
            <div id="test-list13">
			            <ul class="ul list">
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">NT</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> NGUYỄN MINH TRÍ</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 30-10-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Youtube )
                    </span>
                    </div>
                    <div class="content-post">em muốn seo kênh của em về vlogs anh ạ</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 30-10-2018</span>
                        </div>
                        <div class="content-post"><p>
 Bạn ch&aacute;t với bộ phận kỹ thuật b&ecirc;n m&igrave;nh ở gốc dưới b&ecirc;n phải nh&eacute;.</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">nt</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> nguyễn văn thành</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 27-09-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Youtube )
                    </span>
                    </div>
                    <div class="content-post">tôi cân quảng cáo trên yotube</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 30-10-2018</span>
                        </div>
                        <div class="content-post"><p>
 Sẽ c&oacute; bộ ph&acirc;n ads youtube gọi điện tư vấn cho bạn nh&eacute;<br />
 <br />
 Thank&#39;s bạn</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">LB</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Lâm Quốc Bảo</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 31-03-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Youtube )
                    </span>
                    </div>
                    <div class="content-post">Ad cho em hỏi làm sao để phần mô tả có dòng chữ Liên Minh Huyền Thoại ạ?Phải gắn thẻ tên game hay sao ạ?Thank ad trước^^</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 07-04-2018</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn</p>
<p>
 Ch&uacute;ng t&ocirc;i chỉ giải đ&aacute;p c&aacute;c vấn đề li&ecirc;n quan đến marketing online th&ocirc;i bạn nh&eacute;</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">?</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Đăng Khoa</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 21-11-2017</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Youtube )
                    </span>
                    </div>
                    <div class="content-post">Em chào Anh
Em có kế hoạch làm vlog travel trên kenh youtube ,em đã đọc và tim hiểu về wed của quangcaosieutoc , em sẻ đầu tư cho video của mình và tạo lượt view nhiều nhất có thể ,sau đó em có thể hợp tác quảng cáo với trang của mình được hay không, về kiến thức và tư duy em nghi như vậy rất mong được sự phản hồi và sự góp ý chân thành của phía công ty. Em đã lên kế hoạch travel nhiều năm không về VN nên cần những thu nhập từ việc review . Rất mong nhận được sự phản hồi của công ty.</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 04-12-2017</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o Khoa</p>
<p>
 Việc đầu ti&ecirc;n của bạn l&agrave; cần x&acirc;y dựng cho m&igrave;nh một k&ecirc;nh youtube, sau đ&oacute; x&acirc;y dựng những đoạn video chất lượng tr&ecirc;n k&ecirc;nh. Việc quan trọng nhất l&agrave; bạn n&ecirc;n thống nhất nội dung tr&ecirc;n k&ecirc;nh, kh&ocirc;ng n&ecirc;n l&agrave;m 1 k&ecirc;nh thập cẩm m&agrave; h&atilde;y tập trung v&agrave;o một ngh&aacute;ch cụ thể, sau đ&oacute; cần l&ecirc;n lịch &uacute;p video định kỳ. Thời gian đầu tạo k&ecirc;nh sẽ rất kh&oacute; khăn v&agrave; số view sẽ rất &iacute;t nhưng bạn h&atilde;y ki&ecirc;n nhẫn, cứ định kỳ &uacute;p video như kế hoạch.&nbsp;</p>
<p>
 Trong c&aacute;c đoạn video bạn n&ecirc;n bi&ecirc;n tập để nhắc đến k&ecirc;nh trong nội dung, c&oacute; thể bằng giọng n&oacute;i hoặc text v&agrave; thực hiện chia sẽ tr&ecirc;n c&aacute;c k&ecirc;nh MXH kh&aacute;c để tạo sức h&uacute;t về k&ecirc;nh youtube</p>
<p>
 Nếu đoạn video n&agrave;o bạn muốn l&agrave;m quảng c&aacute;o th&igrave; bạn n&ecirc;n bi&ecirc;n tập dồn phần quan trọng nhất, hay nhất ra 30 gi&acirc;y đầu ti&ecirc;n để tạo cuốn h&uacute;t để kh&aacute;ch xem hết video, v&agrave; c&oacute; một điều l&agrave; khi bạn chọn h&igrave;nh tức quảng c&aacute;o true view của youtube th&igrave; bạn chỉ phải trả ph&iacute; khi người d&ugrave;ng xem qua 30 gi&acirc;y. H&atilde;y cố gắn tận dụng điều n&agrave;y.</p>
<p>
 Quảng C&aacute;o Si&ecirc;u Tốc h&acirc;n hạnh đồng h&agrave;nh c&ugrave;ng bạn</p>
<p>
 Ch&uacute;c bạn th&agrave;nh c&ocirc;ng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        </ul>
            </div>
        </div><!--end show-comment-->
  <div class="box-100 ab__hpd_more ab__hpd_more_3" onclick="showFunction1('3')"><span>Xem thêm</span></div>
</div>
<div role="tabpanel" class="tab-pane fade" id="tab4">
<div class="show-comment detail_4" style="max-height:1000px; overflow:hidden;">            
            <div id="test-list13">
			            <ul class="ul list">
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">tx</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> thanh xuân</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 01-05-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Zalo )
                    </span>
                    </div>
                    <div class="content-post">em muốn chạy quảng cáo trên zalo và facebook nhưng chưa biết bắt đầu từ đâu? em mong anh giúp ạ</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 29-05-2018</span>
                        </div>
                        <div class="content-post"><p>
 Bạn n&ecirc;n bắt đầu bằng việc hiểu kh&aacute;ch h&agrave;ng của bạn trước, bạn cần phải nắm rỏ kh&aacute;ch h&agrave;ng của m&igrave;nh l&agrave; ai, ở đ&acirc;u, h&agrave;nh vi của họ l&agrave; g&igrave;, v&igrave; sao họ phải mua sản phẩm của bạn... ?</p>
<p>
 Tiếp theo bạn cần t&igrave;m hiểu kỹ về đối thủ của bạn l&agrave; những ai? Điểm mạnh v&agrave; điểm yếu của họ l&agrave; g&igrave; ? Họ d&ugrave;ng k&ecirc;nh n&agrave;o để tiếp cận kh&aacute;ch h&agrave;ng v&agrave; bạn h&agrave;ng ?</p>
<p>
 Sau khi bạn đ&atilde; t&igrave;m hiểu kỹ đối thủ của bạn, bạn h&atilde;y so với ch&iacute;nh bạn để biết được m&igrave;nh hơn đối thủ ở chổ n&agrave;o ? Yếu hơn chổ n&agrave;o ? Từ đ&oacute; mới đưa ra phương &aacute;n b&aacute;n h&agrave;ng dựa v&agrave;o nguồn lực của bạn ?</p>
<p>
 Bạn cần gởi cho T&ocirc;i xem th&ocirc;ng tin sản phẩm của bạn, ng&acirc;n s&aacute;ch dự kiến để quảng c&aacute;o, t&ocirc;i sẽ tư vấn cho bạn n&ecirc;n d&ugrave;ng k&ecirc;nh n&agrave;o để b&aacute;n h&agrave;ng v&agrave; d&ugrave;ng n&oacute; như thế n&agrave;o ?</p>
<p>
 Ch&uacute;c bạn th&agrave;nh c&ocirc;ng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">?</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> đặng công lực</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 12-04-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Zalo )
                    </span>
                    </div>
                    <div class="content-post">Mình muốn quảng cáo mảng gel titan nga. bên mình có nhận chạy mảng này không ạ?
nội dung chạy thì cần chuẩn bị những gì ạ</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 15-04-2018</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn, sản phẩm của bạn l&agrave; sản phẩm thuộc h&agrave;ng cấm quảng c&aacute;o, bạn n&ecirc;n c&acirc;n nhắc sử dụng SEO nh&eacute;. Ng&acirc;n s&aacute;ch sẽ tương đối lớn cho sản phẩm của bạn, v&igrave; độ canh tranh rất cao. Tr&acirc;n trọng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">NM</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Nguyễn Minh</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 07-04-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Zalo )
                    </span>
                    </div>
                    <div class="content-post">Cho Em hỏi khi quảng cáo hình thức Zalo official Account thì nên chạy 1 chiến dịch lớn nhiều ngày hay Tạo nhiều chiến dịch chạy trong 1 ngày sẽ tốt hơn, Và cho E hỏi thêm về cách thức phân phối giá bid vì có người đặt 1.300đ vẫn phân phối rất tốt mà có người 3.000đ vẫn không phân phối. Em cảm ơn</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 15-04-2018</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn</p>
<p>
 Việc c&agrave;i đặt quảng c&aacute;o zalo theo h&igrave;nh thức ng&acirc;n s&aacute;ch ng&agrave;y hay ng&acirc;n s&aacute;ch trọn đời l&agrave; do mục ti&ecirc;u của bạn</p>
<p>
 Nếu bạn cần ph&acirc;n ph&aacute;t quảng c&aacute;o nhanh nhất c&oacute; thể th&igrave; chọn h&igrave;nh thức ph&acirc;n ph&aacute;t quảng c&aacute;o trọn đời&nbsp;</p>
<p>
 C&ograve;n nếu bạn muốn kh&ocirc;ng chế mức ng&acirc;n s&aacute;ch 1 ng&agrave;y cố định l&agrave; bao nhi&ecirc;u đ&oacute; th&ocirc;i th&igrave; bạn d&ugrave;ng h&igrave;nh thức theo ng&agrave;y.<br />
 <br />
 T&ugrave;y theo c&aacute;ch bạn target m&agrave; sẽ c&oacute; gi&aacute; quảng c&aacute;o kh&aacute;c nhau, chỉ lưu &yacute; bạn l&agrave; Zalo hiện vẫn chưa th&ocirc;ng minh được như Facebook ở phần target v&agrave; t&iacute;nh tiền<br />
 <br />
 Tr&acirc;n trọng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">PN</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Phuoc Nguyen</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 20-03-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Zalo )
                    </span>
                    </div>
                    <div class="content-post">Em là sale bất động sản. Em đã đầu tư vào bài viết và chi phí quảng cáo trên zalo ad nhưng chưa thấy hiệu quả. Lượt xem khá ít và ít người quan tâm.
Mong anh có thể gợi ý cho em về marketing zalo ạ
thanks</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 25-03-2018</span>
                        </div>
                        <div class="content-post"><p>
 Sẽ c&oacute; nh&acirc;n vi&ecirc;n phụ tr&aacute;ch Zalo gọi điện v&agrave; tư vấn cho bạn nh&eacute;</p>
<p>
 Thank&#39;s bạn</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">KL</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Kim Luyến</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 04-12-2017</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Zalo )
                    </span>
                    </div>
                    <div class="content-post">Anh Hải ơi cho em hỏi, quảng cáo zalo và quảng cáo facebook cái nào hiệu quả hơn vậy anh</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 04-12-2017</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o Luyến</p>
<p>
 C&acirc;u hỏi của em l&agrave; một c&acirc;u hỏi kh&aacute; chung chung rất kh&oacute; c&oacute; đ&aacute;p &aacute;n ch&iacute;nh x&aacute;c v&igrave; định nghĩa hiệu quả l&agrave; g&igrave; nữa (Đơn h&agrave;ng hay Thương hiệu)???</p>
<p>
 Nhưng anh sẽ chia sẽ quan điểm c&aacute; nh&acirc;n thế n&agrave;y nh&eacute;</p>
<p>
 Nếu em chi 10 triệu cho zalo v&agrave; 10 triệu cho facebook. V&iacute; dụ em b&aacute;n quần &aacute;o thời trang, fanpage mới v&agrave; OA mới, KPI l&agrave; đơn h&agrave;ng</p>
<p>
 Th&igrave; theo kinh nghiệm anh đ&atilde; triển khai th&igrave; Facebook sẽ c&oacute; đơn nhiều hơn Zalo với c&ugrave;ng số tiền như vậy</p>
<p>
 Ch&uacute;c em th&agrave;nh c&ocirc;ng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        </ul>
            </div>
        </div><!--end show-comment-->
  <div class="box-100 ab__hpd_more ab__hpd_more_4" onclick="showFunction1('4')"><span>Xem thêm</span></div>
</div>
<div role="tabpanel" class="tab-pane fade" id="tab5">
<div class="show-comment detail_5" style="max-height:1000px; overflow:hidden;">            
            <div id="test-list13">
			            <ul class="ul list">
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">LH</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Lê Thị Hương</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 04-12-2017</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Cốc cốc )
                    </span>
                    </div>
                    <div class="content-post">Anh Hải cho em hỏi Cốc Cốc có những loại quảng cáo nào ? và nên dùng loại nào cho hiệu quả ạ ?</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 04-12-2017</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn L&ecirc; Thị Hương</p>
<p>
 Cốc Cốc c&oacute; rất nhiều h&igrave;nh thức quảng c&aacute;o v&agrave; mỗi loại lại c&oacute; ưu v&agrave; nhược điểm kh&aacute;c nhau, nhưng nh&igrave;n chung th&igrave; c&oacute; 3 loại ch&iacute;nh như sau</p>
<p>
 1. Quảng C&aacute;o Cốc Cốc Search</p>
<p>
 2. Quảng C&aacute;o Cốc Cốc Banner</p>
<p>
 3. Quảng C&aacute;o Cốc Cốc Video</p>
<p>
 4. Quảng C&aacute;o Cốc Cốc ICO</p>
<p>
 Bạn c&oacute; thể xem chi tiết tại đ&acirc;y:&nbsp;https://quangcaosieutoc.com/quang-cao-coc-coc/</p>
<p>
 C&ograve;n về loại n&agrave;o hiệu quả hơn th&igrave; c&ograve;n t&ugrave;y bạn ạ, t&ugrave;y v&agrave;o KPI l&agrave; g&igrave; ? Ng&acirc;n s&aacute;ch bao nhiều ?,... nữa</p>
<p>
 Ch&uacute;c bạn th&agrave;nh c&ocirc;ng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        </ul>
            </div>
        </div><!--end show-comment-->
  <div class="box-100 ab__hpd_more ab__hpd_more_5" onclick="showFunction1('5')"><span>Xem thêm</span></div>
</div>
<div role="tabpanel" class="tab-pane fade" id="tab6">
<div class="show-comment detail_6" style="max-height:1000px; overflow:hidden;">            
            <div id="test-list13">
			            <ul class="ul list">
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">VM</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Võ Cao Minh</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 04-12-2017</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục Website )
                    </span>
                    </div>
                    <div class="content-post">Anh Hải ơi cho em hỏi
Em muốn làm 1 website để bán hàng online, em nên bắt đầu từ đâu ?
Xin anh cho em lời khuyên
Cảm ơn anh nhiều</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 04-12-2017</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn V&otilde; Cao Minh</p>
<p>
 M&igrave;nh c&oacute; v&agrave;i lời khuy&ecirc;n cho bạn như sau:&nbsp;</p>
<p>
 1. Bạn cần t&igrave;m hiểu thật kỹ về thị trường, sản phẩm bạn đang b&aacute;n về ph&acirc;n kh&uacute;c kh&aacute;ch h&agrave;ng, định vị sản phẩm, về ưu điểm v&agrave; nhược điểm của sản phẩm,...</p>
<p>
 2. Bạn cần chọn ra 5 đối thủ trực tiếp c&oacute; c&ugrave;ng mức gi&aacute; v&agrave; c&oacute; m&ocirc; h&igrave;nh kinh doanh tương tự như m&ocirc; h&igrave;nh kinh doanh của bạn, h&atilde;y xem thật kỹ website của họ xem họ hay chổ n&agrave;o, dỡ chổ n&agrave;o. H&atilde;y bỏ thời gian để đến d&ograve; gi&aacute; v&agrave; m&ocirc; h&igrave;nh của họ.</p>
<p>
 3. Sau khi đ&atilde; hiểu rỏ thị trường, kh&aacute;ch h&agrave;ng, hiểu rỏ đối thủ bạn h&atilde;y r&uacute;t ra cho m&igrave;nh nhận định bạn cần phải l&agrave;m g&igrave;? l&uacute;c n&agrave;y bạn h&atilde;y li&ecirc;n hệ đơn vị l&agrave;m web để tr&igrave;nh b&agrave;y &yacute; tưởng v&agrave; nhờ họ tư vấn th&ecirc;m cho bạn</p>
<p>
 Ch&uacute;c bạn th&agrave;nh c&ocirc;ng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        </ul>
            </div>
        </div><!--end show-comment-->
  <div class="box-100 ab__hpd_more ab__hpd_more_6" onclick="showFunction1('6')"><span>Xem thêm</span></div>
</div>
<div role="tabpanel" class="tab-pane fade" id="tabkhac">
<div class="show-comment detail_tabkhac" style="max-height:1000px; overflow:hidden;">            
            <div id="test-list13">
			            <ul class="ul list">
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">NC</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Nguyễn Văn Cường</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 10-10-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục  )
                    </span>
                    </div>
                    <div class="content-post">phí khóa học là bao nhiêu và học xong có kiếm tiền được ko</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 30-10-2018</span>
                        </div>
                        <div class="content-post"><p>
 Cho hỏi bạn cần học kh&oacute;a học n&agrave;o vậy bạn ?</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">NV</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Nguyễn Vịnh</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 20-04-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục  )
                    </span>
                    </div>
                    <div class="content-post">Em chào anh!
Cho em hỏi chút ạ, hiện tại em đang muốn học 1 khóa học nhằm mục đích:
- Làm video marketting, giới thiệu về thương hiệu công ty, qua đó thêm cho mục đích tuyển dụng nhân sự của bên em.
- Em sắp tạo một trang fanpage trên FB nhằm mục đích bán hàng Ạ.
Anh có thể tư vấn cho em khóa học để đáp ứng được 2 mục đích của em trên k ạ, em cảm ơn anh!</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 29-05-2018</span>
                        </div>
                        <div class="content-post"><p>
 Sắp tới T&ocirc;i c&oacute; một kho&aacute; học dạy về phần n&agrave;y, bộ phận gi&aacute;o vụ sẽ li&ecirc;n hệ với bạn khi c&oacute; lịch khai giảng nh&eacute;</p>
<p>
 Cảm ơn bạn rất nhiều</p>
<p>
 Ch&uacute;c bạn th&agrave;nh c&ocirc;ng</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">NB</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Nguyen Binh</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 09-03-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục  )
                    </span>
                    </div>
                    <div class="content-post">Chào thầy,
Em đang quan tâm đến khóa học bán hàng trên Amazon
mong thầy tư vấn</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 25-03-2018</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn B&igrave;nh</p>
<p>
 Hiện tại kh&oacute;a hoc n&agrave;y b&ecirc;n mifh chưa mở lớp, khi n&agrave;o c&oacute; lịch sẽ c&oacute; bộ phận gi&aacute;o vụ li&ecirc;n hệ bạn nh&eacute;</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        <li class="li name">
            	<div class="name-comment name-faqs">
				<div class="avata">HP</div>
				</div>            	
                <div class="r-message message-faqs">
                	<div class="r-legend">
                    <span class="r-author">
                    <span class="cm-ajax cm-tooltip">
                    <i class="fa fa-user"></i> Huỳnh Lâm Phát</span>
                    </span>
                    <span class="r-date">
                    <i class="fa fa-clock-o"></i> 01-01-2018</span>
                    <span class="nowrap attr-stars1" style="font-size:14px; font-style:italic; font-weight:bold;">                    
                    ( Chuyên mục  )
                    </span>
                    </div>
                    <div class="content-post">Thưa Thầy, Em học cách làm Tiếp thị liên kết, nên em muốn biết thông tin về khóa học ạ. XIN CHÂN THÀNH CẢM ƠN THẦY. CHÚC THẦY CÓ THẬT NHIỀU SỨC KHỎE Ạ.</div>
                    <div class="anser_comment r-message">
                    	<div class="r-legend">
                        <span class="r-author">
                        <span class="cm-ajax cm-tooltip">
                        <i class="fa fa-user"></i> Võ Tuấn Hải</span>
                        </span>
                        <span class="r-date">
                        <i class="fa fa-clock-o"></i> 22-02-2018</span>
                        </div>
                        <div class="content-post"><p>
 Ch&agrave;o bạn, hiện tại m&igrave;nh chưa mở kh&oacute;a dạy về tiếp thị li&ecirc;n kết, bạn c&oacute; thể xem qua tr&ecirc;n c&aacute;c trang web kh&aacute;c nh&eacute;. L&ecirc;n google gỏ &quot;kh&oacute;a học tiếp thị li&ecirc;n kết&quot; đầy ấy m&agrave;</p></div>
                    </div><!--end anser_comment-->                </div>
            </li>
                        </ul>
            </div>
        </div><!--end show-comment-->
  <div class="box-100 ab__hpd_more ab__hpd_more_tabkhac" onclick="showFunction1('tabkhac')"><span>Xem thêm</span></div>
</div>
</div>
</div>
</div>
</div>
<script>
function showFunction1(id){
	var n = $('.detail_'+id).css("max-height");
	var a = Math.round(n.replace(/,|p|x/g,''));
	var b = Math.round(a + 200);
	$('.detail_'+id).css({overflow: "hidden","max-height" : b+"px"}).show(400);
}
</script>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-12 right-border ">
<div class="box-100 d-none d-md-block">
<form id="form" class="search-box" name="form" method="get" action="https://quangcaosieutoc.com/tim-kiem/">
<input type="text" name="tukhoa" id="tukhoa" class="form-control tukhoa" placeholder="Tìm kiếm" autocomplete="off">
<input type="submit" id="tk" value=" ">            
</form>
</div><div class="box-100 content-left">
<table border="1" cellpadding="1" cellspacing="1" style="width:500px">
 <tbody>
  <tr>
   <td style="text-align:center"><span style="font-size:28px"><strong><span style="color:#ff0000">Hotline:</span></strong></span><span style="font-size:36px"><strong><span style="color:#ff0000"> <a href="tel:0901349349">0901 349 349</a></span></strong></span></td>
  </tr>
 </tbody>
</table>
<br></div><div class="box-100 chuyengia">
<i style="background-image:url(https://quangcaosieutoc.com/application/upload/partner/chuyengia.png"></i>
<span class="desc_sv" style="line-height:1.4;"><p>C&aacute;c c&aacute; nh&acirc;n, doanh nghiệp, marketer đang sử dụng marketing online để b&aacute;n h&agrave;ng v&agrave; c&oacute; nhiều thắc mắc nhưng kh&ocirc;ng biết hỏi ai ?</p></span>
<div class="xemthem-cg">
<a class="btn" href="index.html" title="QUẢNG CÁO SIÊU TỐC.Com">Gửi câu hỏi</a>
<a class="btn xemngay" href="index.html#status-cauhoi" title="QUẢNG CÁO SIÊU TỐC.Com">Xem trả lời</a>
</div>
</div>
</div><!--end left--></div>
</div>
</section>
<script type="text/javascript">
//formRegister
function formFaqs(form) {
var idForm  = "#" + form;
var urlAjax = "gui-cau-hoi-thanh-cong/index.html";
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
success: function(result){
if(result.error) {
if(result.error.form_id) {
$(idForm + ' .error').prepend('<div class="alert alert-danger mt-1">'+ result.error.form_id +'</div>');
} else {
$.each(result.error, function(key, value) {
if(value!=''){
$(idForm + ' #input-'+ key + ' input').addClass('is-invalid');
}
})
$(idForm + ' .error').prepend('<div class="alert alert-danger mt-1">Vui lòng điền đầy đủ các thông tin bắt buộc</div>');
}
} else {
$(idForm + ' .error').html(
'<div>Cảm ơn bạn đã đặt câu hỏi cho tôi.<br>Tôi sẽ trả lời bạn trong thời gian sớm nhất.<br>Bạn nhớ theo dõi ở phần "giải đáp thắc mắc" nhé!</div>'
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
@stop()