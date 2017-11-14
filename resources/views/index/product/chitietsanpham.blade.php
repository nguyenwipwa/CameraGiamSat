<!DOCTYPE html>
<html class="no-js" lang="vi">

<head>
    <!-- CSS and Jquery start here -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lắp đặt trọn bộ camera HD Việt nam giá rẻ</title>
    <meta name="description" content="Giải pháp lắp đặt trọn gói camera thương hiệu Benco Việt Nam phù hợp cho gia đình, cửa hàng, công ty. Dịch vụ lắp đặt của FPT bảo hành tận nơi 24 tháng.">
    <meta property="fb:app_id" content="" />
    <meta name="DC.title" content="Camera FPT Việt Nam" />
    <meta name="geo.region" content="VN-HN" />
    <meta name="geo.placename" content="Hà nội" />
    <meta name="geo.position" content="20.984321;105.818546" />
    <meta name="ICBM" content="20.984321, 105.818546" />
    @include("../../.link.index")
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-66346872-1', 'auto');
        ga('send', 'pageview');
    </script>
    <script type="text/javascript">
        function lookup(keyword) {
            var keyword = document.getElementById("searchSgg").value;
            if (keyword.length == 0) {
                $('#autoSuggestionsList').fadeOut(400);
            } else {
                $.post("http://fptcamera.vn/ajaxhandle/client_products_ajaxhandler/Ajax_Get_All_Product_Client", {
                    keyword: keyword
                }, function(data) {
                    if (data.length > 14) {
                                    $('#autoSuggestionsList').fadeIn(400); // var obj = jQuery.parseJSON(data); var obj = JSON.parse(data); var strhtml = ''; //$('#autoSuggestionsList').html(data['message']); strhtml += '<div class="sgg-outer">'; for(var index in obj) { //alert(obj.message[1].label); //alert(obj.length()); for(var i=0;i<obj[index].length;i++) { //alert(obj.message[i].value); //append strhtml += '<div class="sgg-row">'; strhtml += '<div class="sgg-image"><img width="50" height="50" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/thumbs/' + obj.message[i].Image + '"/></div>'; strhtml += '<div class="sgg-right">'; strhtml += '<div class="sgg-title"><a href="http://fptcamera.vn/' + obj.message[i].Slug + '">' + obj.message[i].Title + '</a></div>'; strhtml += '<div class="sgg-sellprice">' + parseFloat(obj.message[i].SellPrice).toFixed().replace(/./g, function(c, i, a) {return i && c !== "." && ((a.length - i) % 3 === 0) ? '.' + c : c;}) + ' đ</div>'; strhtml += '</div>'; strhtml += '</div>'; } } strhtml += '</div>'; $('#autoSuggestionsList').html(strhtml); } else { var strhtml = ''; strhtml += '<div class="sgg-outer">'; strhtml += '<div class="sgg-row">'; strhtml += '<div class="sgg-title"><a>Không có sản phẩm nào tương ứng</a></div>'; strhtml += '</div>'; strhtml += '</div>'; $('#autoSuggestionsList').html(strhtml); } }); // Ajax_Suggestion(keyword); } }
                                </script>
                                <meta property="og:image" content="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/lap-dat-camera-gia-re-benco.jpg" />
                                <link rel="stylesheet" type="text/css" href="http://fptcamera.vn/resources/stylesheets/client/social-likes_birman.css" />
                                <link rel="stylesheet" type="text/css" href="http://fptcamera.vn/resources/stylesheets/client/jquery.bootstrap-touchspin.css" />
                                <script src="http://fptcamera.vn/resources/js/client/social-likes.min.js"></script>
                                <script src="http://fptcamera.vn/resources/js/client/jquery.bootstrap-touchspin.min.js"></script>
                                <script src="http://fptcamera.vn/resources/js/client/responsive-tabs.js"></script>
                                <!-- CSS and Jquery end here -->
                            </head>

                            <body lang="vi">
                                <div id="wrapper">
                                    <!-- Top start here -->
                                    @include("../../index.topsub")
                                    <!-- Top end here -->
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xs-12 pad-btm">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div id="ScrollTo2" class="article_header my-breadcrumb">
                                                            <ol class="breadcrumb">
                                                                <li><a href="http://fptcamera.vn/">Trang chủ</a>
                                                                </li>
                                                                <li><a href="http://fptcamera.vn/camera-tron-bo">Camera trọn bộ</a>
                                                                </li>
                                                            </ol>
                                                        </div>
                                                        <div class="clear"></div>
                                                        <div class="row">
                                                            <div class="col-xs-12 col-md-7">
                                                                <div class="" style="width:100%;background:#fff;border:1px solid #ccc;padding:10px;">
                                                                    <a data-toggle="modal" data-target=".bs-example-modal-lg"> <img style="cursor:pointer;display:block;margin:0 auto;background:#fff;" alt="{{ $product->name }}" src="{{ asset('public/images/san-pham/'.$product->img) }}"> </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-md-5">

                                                                <div class="prd-desc equalheight1">
                                                                    <h1 class="header2"> {{ $product->name }}</h1>
                                                                    <div class="clear"></div>
                                                                    <p>Mã sản phẩm: <b>{{ $product->id }}</b>
                                                                    </p>
                                                                    <p>Thương hiệu: <a href="http://fptcamera.vn/benco-viet-nam">{{ $thuonghieu==null ? 'VANTECH' : $thuonghieu->name }}</a>
                                                                    </p>
                                                                    <p>Giá thị trường: <span class='detail-oldprice'>{{ number_format(($product->price*1.1)) }}đ</span>
                                                                    </p>
                                                                    <p>Giá bán: <span class='detail-price'>{{ number_format($product->price) }} đ</span>
                                                                    </p>
                                                                    <p>Tình trạng: <span class='detail-stock'>Còn hàng</span>
                                                                    </p>
                                                                    <p>Bảo hành: <span class='detail-stock'>24 Tháng</span>
                                                                    </p>
                                                                    <div class="clear"></div>
                                                                    <div style="float:left;" class="social-likes" data-url="http://fptcamera.vn/lap-dat-camera-gia-re-bo-1-den-8-mat">
                                                                        <div class="facebook" title="Share link on Facebook">Facebook</div>
                                                                        <div class="plusone" title="Share link on Google+">Google+</div>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <form action="{{route('addCart')}}" class="addcart" method="post" accept-charset="utf-8">
                                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                        <input type="hidden" name="id" value="{{ $product->id }}" />
                                                                        <input type="hidden" name="name" value="{{ $product->name }}" />
                                                                        <input type="hidden" name="price" value="{{ $product->price }}" />
                                                                        <input type="hidden" name="img" value="{{ $product->img }}" />
                                                                        <p>Số lượng: <span class='detail-spinner'> <input type="text" name="qty" value="" class="cart_qty" /> </span>
                                                                        </p>
                                                                        <input type="submit" name="action" value="Mua ngay" class="cart_submit" />
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-md-9">
                                                        <div class="hidden-xs">
                                                            <ul class="nav nav-tabs custom-tabs2" role="tablist">
                                                                <li role="presentation" class="active"><a href="#chitiet" aria-controls="chitiet" role="tab" data-toggle="tab">Chi tiết sản phẩm</a>
                                                                </li>
                                                                <li role="presentation"><a href="#thongso" aria-controls="thongso" role="tab" data-toggle="tab">Thông số kỹ thuật</a>
                                                                </li>
                                                            </ul>
                                                            <div class="tab-content">
                                                                {!! html_entity_decode($product->detail_product) !!}
                                                                {!! html_entity_decode($product->digital) !!}
                                                            </div>
                                                            <div id="tags"> <span><i class="fa fa-tags"></i>Xem thêm</span> <a href="http://fptcamera.vn/tag-san-pham/bo-camera-gia-re">bộ camera giá rẻ</a> <a href="http://fptcamera.vn/tag-san-pham/lap-dat-camera-gia-re">lắp đặt camera giá rẻ</a> <a href="http://fptcamera.vn/tag-san-pham/camera-gia-re">camera gia re</a> </div>
                                                        </div> <span class="header3">Sản phẩm liên quan</span>
                                                        <div class="row">
                                                            @foreach($random as $e)
                                                            <div class="col-xs-6 col-sm-4">
                                                                <div class="thumbnail products">
                                                                    <a href="{{ url('/detail-product/'.$e->id) }}"><img alt="{{ $e->name }}" src="{{ asset('public/images/san-pham/'.$e->img) }}">
                                                                    </a>
                                                                    <div class="caption"> <a href="{{ url('/detail-product/'.$e->id) }}"><h3>{{ $e->name }}</h3></a>
                                                                        <div class="clear"></div>
                                                                        <div class="row">
                                                                            <div class="col-xs-12"><span class="new-price">{!!number_format($e->price) !!} đ</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-md-3"> <span class="header3">Sản phẩm cùng danh mục</span>
                                                        @foreach($sanpham as $e)
                                                        <div class="media products">
                                                            <div class="media-left">
                                                                <a href="{{ url('/detail-product/'.$e->id) }}"> <img class="media-object" alt="{{ $e->name }}" src="{{ asset('public/images/san-pham/'.$e->img) }}"> </a>
                                                            </div>
                                                            <div class="media-body">
                                                                <a href="{{ url('/detail-product/'.$e->id) }}">
                                                                    <h4 class="media-heading">{{ $e->name }}</h4> </a> <span class="media-price">{{number_format($e->price)}} đ</span> </div>
                                                                </div>
                                                                @endforeach 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Bottom end here -->
                                            <div id="bottom">
                                                <div class="container bg-social">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-md-4 col-lg-3">
                                                                    <div class="social-claim">
                                                                        <div class="claim_header">Cam kết</div>
                                                                        <div class="claim">Sản phẩm hàng hóa chính hãng, đa dạng, phong phú</div>
                                                                        <div class="claim">Luôn luôn giá rẻ và khuyến mại không ngừng</div>
                                                                        <div class="claim">Dịch vụ chăm sóc khách hàng uy tín, tận tâm</div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 col-md-4 col-lg-3">
                                                                    <div class="social-claim2">
                                                                        <div class="claim_header">Hỗ trợ khách hàng</div>
                                                                        <ul>
                                                                            <li><a href="http://fptcamera.vn/tin-tuc/xem-camera-giam-sat-qua-dien-thoai">Xem camera giám sát qua điện thoại</a>
                                                                            </li>
                                                                            <li><a href="http://fptcamera.vn/tin-tuc/xem-camera-quan-sat-qua-may-tinh">Xem camera quan sát qua máy tính</a>
                                                                            </li>
                                                                            <li><a href="http://fptcamera.vn/tin-tuc/download-tai-lieu">Download tài liệu</a>
                                                                            </li>
                                                                            <li><a href="http://fptcamera.vn/tin-tuc/hd-cai-dat-phan-mem-teamviewer">HD cài đặt phần mềm Teamviewer</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 col-md-4 col-lg-3">
                                                                    <div class="social-claim2">
                                                                        <div class="claim_header">Thông tin công ty</div>
                                                                        <ul>
                                                                            <li><a href="http://fptcamera.vn/tin-tuc/gioi-thieu">Giới thiệu</a>
                                                                            </li>
                                                                            <li><a href="http://fptcamera.vn/tin-tuc/tuyen-dung">Tuyển dụng</a>
                                                                            </li>
                                                                            <li><a href="http://fptcamera.vn/tin-tuc/chinh-sach">Chính sách</a>
                                                                            </li>
                                                                        </ul>
                                                                        <div id="social_us">
                                                                            <div class="social_us_header">Kết nối với chúng tôi</div>
                                                                            <div id="f_social">
                                                                                <a target="_blank" rel="nofollow" href="https://www.facebook.com/FptCamera.vn"> <img src="http://fptcamera.vn/resources/ui_images/client/background/social/f_fb.png"> </a>
                                                                                <a target="_blank" rel="nofollow" href="https://plus.google.com//+FptCamera"> <img src="http://fptcamera.vn/resources/ui_images/client/background/social/f_gplus.png"> </a>
                                                                                <a target="_blank" rel="nofollow" href="https://www.youtube.com/c/FptCamera"> <img src="http://fptcamera.vn/resources/ui_images/client/background/social/f_yt.png"> </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 col-md-4 col-lg-3 hidden-md">
                                                                    <div class="social-claim2">
                                                                        <div class="claim_header">Tổng đài trợ giúp</div>
                                                                        <div style="margin:10px;">
                                                                            <table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td><img alt="" src="/resources/uploads/images/anhtintuc/tro-giup.png" style="width: 68px; height: 81px;" />
                                                                                        </td>
                                                                                        <td style="vertical-align: middle;">
                                                                                            <p><span style="color:#333333;"><span style="font-size:14px;">Tư vấn bán hàng</span></span>
                                                                                            </p>
                                                                                            <p><span style="color:#ba0000;"><span style="font-size:20px;"><strong>0984 489 688</strong></span></span>
                                                                                            </p>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td colspan="2">
                                                                                            <hr /><span style="color:#555555;"><span style="font-size:13px;"><img alt="" src="/resources/uploads/images/anhtintuc/life_saver.png" />&nbsp; Chăm sóc và hỗ trợ sau bán hàng</span></span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td colspan="2" style="text-align: center;"><span style="color:#B22222;"><strong><span style="font-size:16px;">(04)6328 2964</span>
                                                                                        </strong>
                                                                                    </span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2"><span style="font-size:13px;"><span style="color:#555555;"><img alt="" src="/resources/uploads/images/anhtintuc/mailer.png" />&nbsp; fptcamera.vn@gmail.com</span></span>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @include('../../index.footer')
                                    <div style="display: none">
                                        <!-- Histats.com START (standard)-->
                                        <script type="text/javascript">
                                            document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));
                                        </script>
                                        <a href="http://www.histats.com" target="_blank" title="">
                                            <script type="text/javascript">
                                                try {
                                                    Histats.start(1, 3313430, 4, 438, 112, 75, "00011111");
                                                    Histats.track_hits();
                                                } catch (err) {};
                                            </script>
                                        </a>
                                        <noscript>
                                            <a href="http://www.histats.com" target="_blank"><img src="http://sstatic1.histats.com/0.gif?3313430&101" alt="" border="0">
                                            </a>
                                        </noscript>
                                        <!-- Histats.com END -->
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <!-- Bottom end here -->
                            </div>
                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                            </button>
                                            <h4 class="modal-title" id="myModalLabel">Lắp đặt camera giá rẻ bộ 1 đến 8 mắt</h4> </div>
                                            <div class="modal-body"> <img style="display:block;margin:0 auto;" alt="Lắp đặt camera giá rẻ bộ 1 đến 8 mắt" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/lap-dat-camera-gia-re-benco.jpg"> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sticky-container hidden-xs hidden-md">
                                    <!-- <ul class="sticky"> <li> <a rel="no-follow" target="_blank" href=""> <p>Facebook</p> <img src="http://fptcamera.vn/resources/ui_images/client/background/social/fb.jpg" /> </a> </li> <li> <a rel="no-follow" target="_blank" href=""> <p>Google+</p> <img src="http://fptcamera.vn/resources/ui_images/client/background/social/gplus.jpg" /> </a> </li> <li> <a rel="no-follow" target="_blank" href=""> <p>Twitter</p> <img src="http://fptcamera.vn/resources/ui_images/client/background/social/tt.jpg" /> </a> </li> <li> <a rel="no-follow" target="_blank" href=""> <p>Youtube</p> <img src="http://fptcamera.vn/resources/ui_images/client/background/social/yt.jpg" /> </a> </li> </ul> -->
                                </div>
                                <div class="sticky-buttons hidden-xs hidden-md">
                                    <!-- <a data-toggle="modal" data-target="#supportonlineModal">Hỗ trợ trực tuyến</a> -->
                                    <!-- <a data-toggle="modal" data-target="#hotlineModal">HOTLINE</a> -->
                                </div>
                                <!-- <div class="modal fade" id="hotlineModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h4 class="modal-title" id="myModalLabel">HOTLINE</h4> </div> <div class="modal-body"> <div class="row"> <div id="modal_hotline_list"> <div class="col-xs-4"> <div class="hotline"> <span class="phone">Hotline 1</span> <span class="title">024.6328.2964</span> </div> </div> <div class="col-xs-4"> <div class="hotline"> <span class="phone">Hotline 2</span> <span class="title">0984 489 688</span> </div> </div> </div> </div> </div> <div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button> </div> </div> </div> </div> -->
                                <div class="modal fade" id="supportonlineModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel">Hỗ trợ trực tuyến</h4> </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div id="modal_hotline_list">
                                                            <div class="col-xs-6 col-md-4">
                                                                <div class="hotline">
                                                                    <p class="title">Mr: Xuân</p>
                                                                    <p>Tư vấn bán hàng</p>
                                                                    <p>Tel: 098 448 9688</p> <a style="float:left" href="skype:kd_fptcamera?chat" class="icons skype"><i style="font-size:25px;margin-left:10px;" class="fa fa-skype"></i></a> </div>
                                                                </div>
                                                                <div class="col-xs-6 col-md-4">
                                                                    <div class="hotline">
                                                                        <p class="title">Mr: Thành</p>
                                                                        <p>Tư vấn bán hàng</p>
                                                                        <p>Tel: 0971.767.285</p> <a style="float:left" href="skype:kd_fptcamera?chat" class="icons skype"><i style="font-size:25px;margin-left:10px;" class="fa fa-skype"></i></a> </div>
                                                                    </div>
                                                                    <div class="col-xs-6 col-md-4">
                                                                        <div class="hotline">
                                                                            <p class="title">Mr: Duy</p>
                                                                            <p>Chi nhánh Sài Gòn</p>
                                                                            <p>Tel: 0931.588.886</p> <a style="float:left" href="skype:kd_fptcamera?chat" class="icons skype"><i style="font-size:25px;margin-left:10px;" class="fa fa-skype"></i></a> </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="go_top" class="hidden-xs hidden-sm"><i class="fa fa-arrow-circle-up"></i>
                                                </div>
                                                <div id="fixed-bottom" class="hidden-lg hidden-md">
                                                    <div id="call-xs-sm"><a href="tel:0984 489 688"><i class="fa fa-phone">&nbsp;&nbsp;</i>Gọi 0984 489 688</a>
                                                    </div>
                                                </div>
                                                <script type="text/javascript" charset="utf-8">
                                                    $(window).load(function() {
                                                        equalheight('.thumbnail.products');
                                                        equalheight('.thumbnail.news');
                                                        equalheight('.equalheight1');
                                                        equalheight('.equalheightbanner');
                                                    });
                                                    $(window).resize(function() {
                                                        equalheight('.thumbnail.products');
                                                        equalheight('.thumbnail.news');
                                                        equalheight('.equalheight1');
                                                        equalheight('.equalheightbanner');
                                                    });
                                                    $('#menu ul > li').hover(function() {
                                                        $(this).children('ul').stop(true, true).delay(200).fadeIn(300);
                                                    }, function() {
                                                        $(this).children('ul').stop(true, true).fadeOut(300);
                                                    });
                                                    $('#prd-cate-list .sub-page > ul > li').hover(function() {
                                                        $(this).children('ul').stop(true, true).delay(200).fadeIn(300);
                                                    }, function() {
                                                        $(this).children('ul').stop(true, true).fadeOut(300);
                                                    });
                                                    $('#prd-cate-list').hover(function() {
                                                        $(this).children('ul.sub-page').stop(true, true).delay(200).slideDown(300);
                                                    }, function() {
                                                        $(this).children('ul.sub-page').stop(true, true).slideUp(300);
                                                    });
                                                    $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
                                                        event.preventDefault();
                                                        event.stopPropagation();
                                                        $(this).parent().siblings().removeClass('open');
                                                        $(this).parent().toggleClass('open');
                                                    });
                                                    $('.scrollfix').scrollFix({
                                                        fixTop: 40
                                                    });
                                                    if ($(window).scrollTop() != "0") $("#go_top").fadeIn("slow");
                                                    var scrollDiv = $("#go_top");
                                                    $(window).scroll(function() {
                                                        if ($(window).scrollTop() == "0") $(scrollDiv).fadeOut("slow")
                                                            else $(scrollDiv).fadeIn("slow")
                                                        });
                                                    $("#go_top").click(function() {
                                                        $("html, body").animate({
                                                            scrollTop: $("#ScrollTo").offset().top
                                                        }, "slow")
                                                    });
                                                    $('.mobileslider').flexslider({
                                                        animation: "fade",
                                                        animationLoop: true,
                                                        directionNav: false,
                                                        controlNav: false,
                                                    });
                                                    $(".cart_qty").TouchSpin({
                                                        verticalbuttons: true,
                                                        verticalupclass: 'glyphicon glyphicon-plus',
                                                        verticaldownclass: 'glyphicon glyphicon-minus',
                                                        initval: 1,
                                                        min: 1
                                                    });
                                                    $("#go_top").click(function() {
                                                        $("html, body").animate({
                                                            scrollTop: $("#ScrollTo2").offset().top
                                                        }, "slow")
                                                    });
                                                    $(window).load(function() {
                                                        $('.panel-collapse').each(function() {
                                                            if ($(this).prop('scrollHeight') < 500) {
                                                                $(this).find('.tab-readmore').remove();
                                                            }
                                                        });
                                                    });
                                                    $(".tab-readmore").click(function() {
                                                        $(this).parents('.panel-collapse').css('max-height', 'none');
                                                        $(this).remove();
                                                    });
                                                    (function($) {
                                                        fakewaffle.responsiveTabs(['xs', 'sm']);
                                                    })(jQuery);
                                                </script>
                                            </body>

                                            </html>