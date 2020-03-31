@extends('layouts/master-layout') @section('main')
<section class="box-100 slide-home">
    <picture>
        <source media="(max-width: 600px)" srcset="application/upload/partner/blog-quangcao-sieu-toc.jpg">
        <source media="(min-width: 768px)" srcset="application/upload/partner/blo-quang-cao-sieu-toc.jpg">
        <img class="img-responsive" src="application/upload/partner/blo-quang-cao-sieu-toc.jpg" title="Blog" alt="Blog">
    </picture>
    <div class="fix-content-slide d-flex align-items-center justify-content-center">
        <div class="col-md-12 title_text title_text1 text-slide">Blog
            <div class="breadcrumb-slide">
                <span><a href="index.html" title="Home">Home</a></span> / <span>Blog</span>
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
                        <li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="box-100 wapper pt-4">
    <style>
        .wp-blog p {
            margin-bottom: 0;
        }
    </style>
    <div class="container" id="block">
      @foreach($cat_blog as $cat)
        <div class="row mb-3 mb-lg-0">
            <figure class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="w-100 wp-blog rounded-bottom">
                    <a href="{{route('tin-tuc',['id'=>$cat->id,'slug'=>$cat->slug])}}" title="{{$cat->name}}" class="w-100 d-inline-block text-center">
                        <picture>
                            <source media="(max-width: 1199px)" srcset="{{url('uploads')}}/{{$cat->image}}">
                            <source media="(min-width: 1200px)" srcset="{{url('uploads')}}/{{$cat->image}}">
                            <img class="lazyload img-thumbnail" src="{{url('uploads')}}/{{$cat->image}}" alt="{{$cat->name}}" title="{{$cat->name}}">
                        </picture>
                    </a>
                    <figcaption class="w-100 d-inline-block background-purple rounded-bottom p-2">
                        <h2 class="title-blog font-weight-bold mt-2 mb-2"><a href="{{route('tin-tuc',['id'=>$cat->id,'slug'=>$cat->slug])}}" title="{{$cat->name}}">{{$cat->tilte}}</a></h2>
                        <div class="summany">
                           {!!$cat->summary!!}

                        </div>
                    </figcaption>
                </div>
            </figure>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="w-50 p-2 text-white title-relation-blog position-relative">Bài viết mới nhất</div>
                <ul class="ul-blog">
                  @foreach($blog as $b)
                  @if($b->cat_id==$cat->id)
                    <li class="background-purple rounded p-2 mt-2 title-blog"><a class="d-block font-weight-bold" href="{{route('chi-tiet-tin-tuc',['id'=>$b->id,'slug'=>$b->slug])}}" title="{{$b->title}}">{{$b->title}}</a>
                        <span class="pr-2 date-add">Ngày đăng: {{$b->created_at}}</span></li>
                        @endif
                    @endforeach
                </ul>
                <div class="w-50 p-2 text-white title-relation-blog  position-relative mt-4">Bài viết được quan tâm</div>
                <ul class="ul-blog">
                    @foreach($blog as $b)
                  @if($b->cat_id==$cat->id && $b->location==1)
                  <li class="background-purple rounded p-2 mt-2 title-blog"><a class="d-block font-weight-bold" href="{{route('chi-tiet-tin-tuc',['id'=>$b->id,'slug'=>$b->slug])}}" title="{{$b->title}}">{{$b->title}}</a>
                        <span class="pr-2 date-add">Ngày đăng: {{$b->created_at}}</span></li>
                          @endif
                    @endforeach
                </ul>
            </div>
        </div>
        @endforeach
           </div>
</section>
<script>
    $(function() {
        $url = 'index.html';
        $more = $('#more_s');
        $start = 20; // 20 kết quả mặc định
        $text_default = $more.text();
        $more.click(function() {
            if (!$(this).hasClass('clicked')) {
                $(this).addClass('clicked').text('Đang tải dữ liệu');
                $go_to = $('.row:last').offset().top;
                $.get(
                    $url + 'show-blog-pagination/', {
                        start: $start
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
@stop()