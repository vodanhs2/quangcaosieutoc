@extends('layouts/master-layout')
@section('main')
<section class="box-100 slide-home">

	<picture>

		<source media="(max-width: 600px)" srcset="application/upload/partner/khach-hang-cua-quang-cao-sieu-toc.jpg">

			<source media="(min-width: 768px)" srcset="application/upload/partner/khach-hang-tieu-bieu-cua-quang-cao-sieu-toc.jpg">

				<img class="img-responsive" src="application/upload/partner/khach-hang-tieu-bieu-cua-quang-cao-sieu-toc.jpg" title="KHÁCH HÀNG TIÊU BIỂU CỦA QUẢNG CÁO SIÊU TỐC" alt="KHÁCH HÀNG TIÊU BIỂU CỦA QUẢNG CÁO SIÊU TỐC">

			</picture>

			<div class="fix-content-slide d-flex align-items-center justify-content-center">

				<div class="col-md-12 title_text title_text1 text-slide">Khách hàng Tiêu Biểu</div></div>

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
								<img class="lazyload img-thumbnail" src="style/images/img-slogan-2.png" title="Khách hàng Quảng Cáo Siêu Tốc" alt="Khách hàng Quảng Cáo Siêu Tốc"/>
								<div class="count-tk">
									<span class="timer counter-number appear" data-to="1000" data-speed="7000">1000</span> <span>+</span>
									<br />Khách hàng
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-4">
							<div class="box-tk">
								<img class="lazyload img-thumbnail" src="style/images/img-slogan-3.png" title="Khách hàng hài lòng về Quảng Cáo Siêu Tốc" alt="Khách hàng hài lòng về Quảng Cáo Siêu Tốc"/>
								<div class="count-tk">
									<span class="timer counter-number appear" data-to="98" data-speed="7000">98</span> <span>%</span>
									<br />Hài lòng
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="box-100 wapper">

				<div class="container">

					<div class="row">

						<div class="col-lg-12 col-md-12 col-sm-12 col-12">

							<h1 class="title_text">Dưới đây là một số khách hàng tiêu biểu của Quảng Cáo Siêu Tốc</h1>

						</div>

					</div>

				</div>

				<link rel='stylesheet' href='daneden.github.io/animate.css/animate.min.css'>
				<style type="text/css" media="screen">
					.khachhang:nth-child(odd){
						flex-direction: row-reverse !important;
					}
				</style>
				@foreach($khachhang as $kh)
				<div class="align-items-center d-flex khachhang">

					<div class="col-md-6 col-sm-6 col-12 img-kh wow zoomIn">

						<img class="img-thumbnail" src="{{url('uploads')}}/{{$kh->image}}" title="{{$kh->name}}" alt="{{$kh->name}}"/>

					</div>

					<div class="col-lg-6 col-md-6 col-sm-6 col-12 text-kh">

						<h2 class="title_ceo wow fadeInDown">{{$kh->name}}</h2>

						<article class="summany wow fadeInRight" data-wow-delay=".25s">
							{!!$kh->content!!}
						</article>


						</div>

					</div>
				@endforeach





					<script src='cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js'></script>

					<script>new WOW().init();</script>

				</section></div>
			</div><!--end container-->
		</section><!--end about-->
		@stop()