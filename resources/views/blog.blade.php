@extends('layouts/master-layout') @section('main')
<section class="box-100 slide-home">
    <picture>
        <source media="(max-width: 600px)" srcset="application/upload/new/dich-vu-quang-cao-facebook2.jpg">
        <source media="(min-width: 768px)" srcset="application/upload/new/gioi-thieu-quang-cao-sieu-toc1.jpg">
        <img class="img-responsive" src="application/upload/new/gioi-thieu-quang-cao-sieu-toc1.jpg" title="Facebook Marketing" alt="Facebook Marketing">
    </picture>
    <div class="fix-content-slide d-flex align-items-center justify-content-center">
        <div class="col-md-12 title_text title_text1 text-slide">Facebook Marketing
            <div class="breadcrumb-slide">
                <span>Home</span> / <span>Blog</span>
            </div>
        </div>
    </div>
</section>
<section class="box-100 breadc">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('trang-chu')}}" title="Home">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('danh-muc-tin-tuc')}}" title="Blog">Blog</a></li>
                        <li class="breadcrumb-item active">
                            <h1>{{$danhmuc->name}}</h1></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="box-100 service wapper-service" style="padding-top:25px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="row" id="block">
                  @foreach($blog_by_id as $b)
                    <figure class="col-md-4 col-sm-4 col-6 col-xs6">
                        <div class="item-product box-100">
                            <a href="{{route('chi-tiet-tin-tuc',['id'=>$b->id,'slug'=>$b->slug])}}">
                                <picture>
                                    <source media="(max-width: 1199px)" srcset="{{url('uploads')}}/{{$b->image}}">
                                    <source media="(min-width: 1200px)" srcset="{{url('uploads')}}/{{$b->image}}">
                                    <img class="lazyload img-thumbnail" src="{{url('uploads')}}/{{$b->image}}" alt="{{$b->name}}" title="{{$b->name}}">
                                </picture>
                            </a>
                            <figcaption>
                                <h2 class="title-h2"><a href="{{route('chi-tiet-tin-tuc',['id'=>$b->id,'slug'=>$b->slug])}}" title="{{$b->name}}">{{$b->name}}</a></h2>
                                <div class="summany line-clamp">{{$b->description}}</div>
                                <a class="btn btn-secondary translate" href="{{route('chi-tiet-tin-tuc',['id'=>$b->id,'slug'=>$b->slug])}}" title="{{$b->name}}">[ Xem thêm ]</a>
                            </figcaption>
                        </div>
                    </figure>
                    @endforeach
                </div>
               
            </div>
        </div>
    </div>
</section>
<script>
    $(function() {
        $url = 'index.html';
        $more = $('#more_s');
        $start = 20; // 20 kết quả mặc định
        $text_default = $more.text();
        var group_id = '1125';
        var group_cat = '938';
        $more.click(function() {
            if (!$(this).hasClass('clicked')) {
                $(this).addClass('clicked').text('Đang tải dữ liệu');
                $go_to = $('.item-col12:last').offset().top;
                $.get(
                    $url + 'show-pagination-cat/', {
                        start: $start,
                        group_id: group_id,
                        group_cat: group_cat
                    },
                    function(data) {
                        if (data) {
                            $('#block').append(data);
                            $more.removeClass('clicked').html($text_default);
                            $('html, body').animate({
                                scrollTop: $go_to
                            }, 800);
                            $start += 5; // 10 giá trị load ra
                        } else {
                            $more.remove();
                        }
                    }
                );
            }

        });
    });
</script>
<script type="text/javascript">
    function isEmail(email) {
        var isValid = false;
        var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (regex.test(email)) {
            isValid = true;
        }
        return isValid;
    }

    function CheckValue_dv() {
        var o = document.pop_dv;
        if (o.fullname_dv.value == '') {
            o.fullname_dv.value = '';
            o.fullname_dv.focus();
            return false;
        } else if (o.phone_dv.value == 'Điện thoại *' || o.phone_dv.value == '') {
            o.phone_dv.value = '';
            o.phone_dv.focus();
            return false;
        } else if (o.email_dv.value == 'Email' || o.email_dv.value == '') {
            o.email_dv.value = '';
            o.email_dv.focus();
            return false;
        } else if (!isEmail(o.email_dv.value)) {
            o.email_dv.value = '';
            o.email_dv.focus();
            return false;
        } //else if(o.dichvu_dv.value =='Dịch vụ' || o.dichvu_dv.value==''){
        //  o.dichvu_dv.value = '';
        //  o.dichvu_dv.focus();
        //  return false;
        //}
        else if (o.message_dv.value == 'Vấn đề cần tư vấn' || o.message_dv.value == '') {
            o.message_dv.value = '';
            o.message_dv.focus();
            return false;
        } else {
            var fullname_dv = $(".fullname_dv").val();
            var phone_dv = $(".phone_dv").val();
            var email_dv = $(".email_dv").val();
            var dichvu_dv = '0'
            var message_dv = $(".message_dv").val();
            var nick_fb = '';
            var linhvuc = '';
            var website = '';
            var ngansach = '';
            var idu = 'dv1';
            $.ajax({
                url: 'https://quangcaosieutoc.com/dang-ky-dich-vu/',
                type: 'post',
                data: 'fullname=' + fullname_dv + '&phone=' + phone_dv + '&email=' + email_dv + '&nick_fb=' + nick_fb + '&linhvuc=' + dichvu_dv + '&website=' + website + '&ngansach=' + ngansach + '&message=' + message_dv + '&idu=' + dichvu_dv,
                beforeSend: function() {
                    $('.loader_first').show();
                },
                success: function(data) {
                    $(".pop_dv").hide();
                    $(".successfull_dichvu").html('<p class="p-2">Cảm ơn bạn đã gửi thông tin, Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất.</p>');
                },
                complete: function() {
                    $('.loader_first').hide();
                }
            });
            return false;
        }
    }
</script>
@stop()