<!Doctype html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="content-language" content="vi" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="theme-color" content="#49b665" />
    <title>QUẢNG CÁO SIÊU TỐC. COM | Giải Pháp Marketing Online HIỆU QUẢ</title>
    <link rel="canonical" href="index.blade.php" />
    <link href="favicon.ico" rel="icon" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <link rel="stylesheet" href="style/css/bootstrap.css">
    <link rel="stylesheet" href="style/css/font-awesome.css">
    <link href="style/css/fonts.css" rel="stylesheet" type="text/css">
    <link href="style/css/menu_pc.css" rel="stylesheet" type="text/css">
    <link href="style/css/main.css" rel="stylesheet" type="text/css">
    <link href="style/css/main_detail.css" rel="stylesheet" type="text/css">
   
</head>
<body>
@include('layouts.header')
@yield('main')
@include('layouts.footer')
 <script type="text/javascript" src="style/js/jquery-1.9.1.min.js"></script>
    <script src="style/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="style/js/jquery.lazyload.min.js"></script>
    <script src="style/js/jquery.appear.js"></script>
    <script src="style/js/jquery.countTo.js"></script>
    <script src="style/js/main.js"></script>
    <script>
        function Fn_close() {

            $('.banner-notif').remove();

        }
    </script>

    <script async="async">
        function youTubes_makeDynamic() {

            var $ytIframes = $('iframe[src*="youtube.com"]');

            $ytIframes.each(function(i, e) {

                var $ytFrame = $(e);

                var ytKey;
                var tmp = $ytFrame.attr('src').split(/\//);
                tmp = tmp[tmp.length - 1];
                tmp = tmp.split('?');
                ytKey = tmp[0];

                var tmpimg = $ytFrame.attr('id');

                if (tmpimg != undefined) {

                    var img = "https://quangcaosieutoc.com/" + tmpimg;

                } else {

                    var img = 'https://img.youtube.com/vi/' + ytKey + '/maxresdefault.jpg';

                }

                var $ytLoader = $('<div class="ytLoader">');

                $ytLoader.append($('<img class="cover" width="800" src="' + img + '">'));

                $ytLoader.append($('<div class="playBtn"><img src="style/images/btn-video.svg"></div>'));

                $ytLoader.data('$ytFrame', $ytFrame);

                $ytFrame.replaceWith($ytLoader);

                $ytLoader.click(function() {

                    var $ytFrame = $ytLoader.data('$ytFrame');

                    $ytFrame.attr('src', $ytFrame.attr('src') + '?autoplay=1');

                    $ytLoader.replaceWith($ytFrame);

                });

            });

        };

        $(document).ready(function() {
            youTubes_makeDynamic()
        });
    </script>
</body>

<!-- Mirrored from quangcaosieutoc.com/bang-gia-quang-cao-facebook/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Mar 2020 07:25:31 GMT -->

</html>