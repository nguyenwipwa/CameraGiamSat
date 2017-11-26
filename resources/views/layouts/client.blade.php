<!DOCTYPE html>
<html class="no-js" lang="vi">

<head>
	<!-- CSS and Jquery start here -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LẮP ĐẶT CAMERA QUAN SÁT GIÁ RẺ UY TÍN TẠI FPT VN</title>
	<meta name="description" content="Công ty FPT Việt Nam cung cấp lắp đặt camera quan sát, lắp camera chống trộm cho gia đình, camera giám sát cửa hàng… lắp camera giá rẻ, uy tín toàn quốc.">
	<meta property="fb:app_id" content="" />
	<meta name="DC.title" content="Camera FPT Việt Nam" />
	<meta name="geo.region" content="VN-HN" />
	<meta name="geo.placename" content="Hà nội" />
	<meta name="geo.position" content="20.984321;105.818546" />
	<meta name="ICBM" content="20.984321, 105.818546" />
	@include("link.index")

	<link rel="stylesheet" type="text/css" href="{{asset('public/stylesheets/social-likes_birman.css')}}" />
	<script src="{{asset('public/js/social-likes.min.js')}}"></script>
	<!-- CSS and Jquery end here -->
</head>

<body lang="vi">
	<div id="wrapper">
		<h1 style="display:none;"><b>Lắp đặt camera quan sát giá rẻ </b>,<b> camera FPT</b></h1>
		<h2 style="display: none;">Tư vấn lắp đặt camera</h2>
		<!-- Top start here -->
		@include("index.top")
		<!-- Top end here -->
		@yield('content')
		<!-- Bottom end here -->
		@include("index.bottom")

		@include("index.footer")
	</div>
	<!-- Bottom end here -->
</div>
<div class="sticky-container hidden-xs hidden-md">
        <!-- <ul class="sticky">
                <li>
                    <a rel="no-follow" target="_blank" href="">
                        <p>Facebook</p>
                        <img src="http://fptcamera.vn/resources/ui_images/client/background/social/fb.jpg" />
                    </a>
                </li>
                <li>
                    <a rel="no-follow" target="_blank" href="">
                        <p>Google+</p>
                        <img src="http://fptcamera.vn/resources/ui_images/client/background/social/gplus.jpg" />
                    </a>
                </li>
                <li>
                    <a rel="no-follow" target="_blank" href="">
                        <p>Twitter</p>
                        <img src="http://fptcamera.vn/resources/ui_images/client/background/social/tt.jpg" />
                    </a>
                </li>
                <li>
                    <a rel="no-follow" target="_blank" href="">
                        <p>Youtube</p>
                        <img src="http://fptcamera.vn/resources/ui_images/client/background/social/yt.jpg" />
                    </a>
                </li>
            </ul> -->
        </div>
        <div class="sticky-buttons hidden-xs hidden-md">
        	<!-- <a data-toggle="modal" data-target="#supportonlineModal">Hỗ trợ trực tuyến</a> -->
        	<!-- <a data-toggle="modal" data-target="#hotlineModal">HOTLINE</a> -->
        </div>
    <!-- <div class="modal fade" id="hotlineModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">HOTLINE</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div id="modal_hotline_list">
                                                                    <div class="col-xs-4">
                                        <div class="hotline">
                                            <span class="phone">Hotline 1</span>
                                            <span class="title">024.6328.2964</span>
                                        </div>
                                    </div>
                                                                    <div class="col-xs-4">
                                        <div class="hotline">
                                            <span class="phone">Hotline 2</span>
                                            <span class="title">0984 489 688</span>
                                        </div>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="modal fade" id="supportonlineModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        				<h4 class="modal-title" id="myModalLabel">Hỗ trợ trực tuyến</h4>
        			</div>
        			<div class="modal-body">
        				<div class="row">
        					<div id="modal_hotline_list">
        						<div class="col-xs-6 col-md-4">
        							<div class="hotline">
        								<p class="title">Mr: Xuân</p>
        								<p>Tư vấn bán hàng</p>
        								<p>Tel: 098 448 9688</p>
        								<a style="float:left" href="skype:kd_fptcamera?chat" class="icons skype"><i style="font-size:25px;margin-left:10px;" class="fa fa-skype"></i></a>
        							</div>
        						</div>
        						<div class="col-xs-6 col-md-4">
        							<div class="hotline">
        								<p class="title">Mr: Thành</p>
        								<p>Tư vấn bán hàng</p>
        								<p>Tel: 0971.767.285</p>
        								<a style="float:left" href="skype:kd_fptcamera?chat" class="icons skype"><i style="font-size:25px;margin-left:10px;" class="fa fa-skype"></i></a>
        							</div>
        						</div>
        						<div class="col-xs-6 col-md-4">
        							<div class="hotline">
        								<p class="title">Mr: Duy</p>
        								<p>Chi nhánh Sài Gòn</p>
        								<p>Tel: 0931.588.886</p>
        								<a style="float:left" href="skype:kd_fptcamera?chat" class="icons skype"><i style="font-size:25px;margin-left:10px;" class="fa fa-skype"></i></a>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <div id="go_top" class="hidden-xs hidden-sm"><i class="fa fa-arrow-circle-up"></i></div>
        <div id="fixed-bottom" class="hidden-lg hidden-md">
        	<div id="call-xs-sm"><a href="tel:0984 489 688"><i class="fa fa-phone">&nbsp;&nbsp;</i>Gọi 0984 489 688</a></div>
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

        	$('.scrollfix').scrollFix({ fixTop: 40 });

        	if ($(window).scrollTop() != "0")
        		$("#go_top").fadeIn("slow");
        	var scrollDiv = $("#go_top");
        	$(window).scroll(function() {
        		if ($(window).scrollTop() == "0")
        			$(scrollDiv).fadeOut("slow")
        		else
        			$(scrollDiv).fadeIn("slow")
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
        	$('.bannerslider').flexslider({
        		animation: "fade",
        		animationLoop: true,
        		directionNav: false,
        	});

        	$('.galleryslider').flexslider({
        		animation: "slide",
        		itemWidth: 122,
        		controlNav: false,
        	});

        	$('.newsslider').flexslider({
        		animation: "slide",
        		direction: "vertical",
        		controlNav: false,
        		directionNav: false,
        		slideshowSpeed: 3000,
        	});

        	$('#prd-cate-list .main-page > ul > li').hover(function() {
        		$(this).children('ul').stop(true, true).delay(200).fadeIn(500);
        	}, function() {
        		$(this).children('ul').stop(true, true).fadeOut(500);
        	});
        </script>
        <!-- Subiz -->
        <script type='text/javascript'>window._sbzq||function(e){e._sbzq=[];var t=e._sbzq;t.push(["_setAccount",50848]);var n=e.location.protocol=="https:"?"https:":"http:";var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//static.subiz.com/public/js/loader.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)}(window);</script>
    </body>

    </html>