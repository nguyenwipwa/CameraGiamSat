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
	<?php echo $__env->make('../../link.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<link rel="stylesheet" type="text/css" href="http://fptcamera.vn/resources/stylesheets/client/jquery.bootstrap-touchspin.css" />
	<script src="http://fptcamera.vn/resources/js/client/jquery.bootstrap-touchspin.min.js"></script>
	<!-- CSS and Jquery end here -->
</head>
<body lang="vi">
	<div id="wrapper">
		<!-- Top start here -->
		<?php echo $__env->make('../../index.topsub', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<!-- Top end here -->
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="header">
						<span>Giỏ hàng</span>
					</div>
					<table id="cart">
						<tr>
							<td style="background:#fff;">
								<span>Xin vui lòng điền thông tin dưới đây để chúng tôi thực hiện giao hàng tới cho bạn</span>
								<form action="http://fptcamera.vn/don-hang" method="post" accept-charset="utf-8">                                        <div class="form_label_input">
									<label for="fullname">Họ tên<span class="required"> * </span></label>
									<input type="text" name="fullname" id="fullname" value="" >
								</div>
								<div class="form_label_input">
									<label for="phone">Điện thoại<span class="required"> * </span></label>
									<input type="text" name="phone" id="phone" value="" >
								</div>
								<div class="form_label_input">
									<label for="email">Email</label>
									<input type="text" name="email" id="email" value="" >
								</div>
								<div class="form_label_input">
									<label for="address">Địa chỉ<span class="required"> * </span></label>
									<textarea style="width:100%;height:100px" name="address" id="address"></textarea>
								</div>
								<input name="submit_guest" class="form_label_submit btn3" type="submit" value="Bước tiếp theo" >
							</form>                                    </td>
						</tr>
						<tr class="no-border">
							<td colspan="7">
								<input class="btn2" type="button" value="Trở về giỏ hàng" onclick="location.href='http://fptcamera.vn/gio-hang'" />
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="clear"></div>
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
										<li><a href="http://fptcamera.vn/tin-tuc/xem-camera-giam-sat-qua-dien-thoai">Xem camera giám sát qua điện thoại</a></li>
										<li><a href="http://fptcamera.vn/tin-tuc/xem-camera-quan-sat-qua-may-tinh">Xem camera quan sát qua máy tính</a></li>
										<li><a href="http://fptcamera.vn/tin-tuc/download-tai-lieu">Download tài liệu</a></li>
										<li><a href="http://fptcamera.vn/tin-tuc/hd-cai-dat-phan-mem-teamviewer">HD cài đặt phần mềm Teamviewer</a></li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-md-4 col-lg-3">
								<div class="social-claim2">
									<div class="claim_header">Thông tin công ty</div>
									<ul>
										<li><a href="http://fptcamera.vn/tin-tuc/gioi-thieu">Giới thiệu</a></li>
										<li><a href="http://fptcamera.vn/tin-tuc/tuyen-dung">Tuyển dụng</a></li>
										<li><a href="http://fptcamera.vn/tin-tuc/chinh-sach">Chính sách</a></li>
									</ul>
									<div id="social_us">
										<div class="social_us_header">Kết nối với chúng tôi</div>
										<div id="f_social">
											<a target="_blank" rel="nofollow" href="https://www.facebook.com/FptCamera.vn">
												<img src="http://fptcamera.vn/resources/ui_images/client/background/social/f_fb.png">
											</a>
											<a target="_blank" rel="nofollow" href="https://plus.google.com//+FptCamera">
												<img src="http://fptcamera.vn/resources/ui_images/client/background/social/f_gplus.png">
											</a>
											<a target="_blank" rel="nofollow" href="https://www.youtube.com/c/FptCamera">
												<img src="http://fptcamera.vn/resources/ui_images/client/background/social/f_yt.png">
											</a>
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
													<td><img alt="" src="/resources/uploads/images/anhtintuc/tro-giup.png" style="width: 68px; height: 81px;" /></td>
													<td style="vertical-align: middle;">
														<p><span style="color:#333333;"><span style="font-size:14px;">Tư vấn bán hàng</span></span></p>

														<p><span style="color:#ba0000;"><span style="font-size:20px;"><strong>0984 489 688</strong></span></span></p>
													</td>
												</tr>
												<tr>
													<td colspan="2">
														<hr /><span style="color:#555555;"><span style="font-size:13px;"><img alt="" src="/resources/uploads/images/anhtintuc/life_saver.png" />&nbsp; Chăm sóc và hỗ trợ sau bán hàng</span></span></td>
													</tr>
													<tr>
														<td colspan="2" style="text-align: center;"><span style="color:#B22222;"><strong><span style="font-size:16px;">(04)6328 2964</span></strong></span></td>
													</tr>
													<tr>
														<td colspan="2"><span style="font-size:13px;"><span style="color:#555555;"><img alt="" src="/resources/uploads/images/anhtintuc/mailer.png" />&nbsp; fptcamera.vn@gmail.com</span></span></td>
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
			<div class="container-fluid bg-footer">
				<div class="row">
					<div class="col-xs-12 col-xs-offset-0 col-md-10 col-md-offset-1">
						<div class="row">
							<div class="col-md-2 hidden-xs hidden-sm">
								<div class="f-logo">
									<a href="http://fptcamera.vn/">
										<img title="LẮP ĐẶT CAMERA QUAN SÁT GIÁ RẺ" alt="Camera FPT Việt Nam tự hào Nhà cung cấp thiết bị camera giám sát giá rẻ uy tín trên toàn quốc" src="http://fptcamera.vn/resources/uploads/images/automatic/logo/logo-fpt-camera-giam-sat.png">
									</a>
								</div>
							</div>
							<div class="col-xs-12 col-md-5">
								<div class="f-address">
									<p><span style="color:#ff6600;"><strong>LẮP ĐẶT CAMERA&nbsp;DỊCH VỤ&nbsp;FPT&nbsp;&nbsp;VIỆT NAM TẠI HÀ NỘI</strong></span><span style="color:#FF8C00;"><strong>&nbsp;</strong></span><br />
										Địa chỉ : <span style="color:#FFD700;">Số 12 Ngõ 18/46 Định Công Thượng, Q.Hoàng Mai, TP. Hà Nội</span><br />
										Điện thoại : <span style="color:#FFD700;">024&nbsp;6328 2964 &nbsp;- 0919 654 688</span><br />
										Website : <span style="color:#FFD700;">http://fptcamera.vn</span></p>

										<p><strong><span style="color:#ff6600;">LẮP ĐẶT CAMERA CHI NHÁNH QUẢNG NINH</span></strong><br />
											Địa chỉ : <span style="color:#FFD700;">Số 42 Trần Hưng Đạo, TP. Hạ Long, Quảng Ninh</span><br />
											Điện thoại :&nbsp;<span style="color:#FFD700;">&nbsp; 0971 767 258</span></p>

											<p><strong><span style="color: rgb(255, 102, 0);">LẮP ĐẶT CAMERA CHI NHÁNH TP.HCM</span></strong><br />
												Địa chỉ :&nbsp;<span style="color: rgb(255, 215, 0);">Số 81 Nguyễn Oanh, Quận Gò Vấp, TP.HCM</span><br />
												Điện thoại :&nbsp;<span style="color: rgb(255, 215, 0);">&nbsp;&nbsp;</span><span style="color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 12.8px;">&nbsp;</span><span style="color: rgb(255, 215, 0);">0907 903 171</span></p>

												<p><span style="color:#FF8C00;">Giới thiệu dịch vụ </span><a href="https://sites.google.com/site/camerafptvietnam/"><span style="color:#FF8C00;">lắp đặt camera</span></a><span style="color:#FF8C00;"> của FPT Việt Nam</span></p>

												<p><em>Trước nhu cầu của thị trường và mở rộng ngành dịch vụ Công ty FPT Việt Nam được sáng lập hoạt động kết hợp với Tập đoàn FPT triển khai lắp đặt Internet Cáp quang – Camera giám sát tại&nbsp;khắp các tỉnh thành cả nước. "Hiện chúng tôi đang phát triển kết hợp với một số <strong>đơn vị lắp đặt camera uy tín</strong> tạo nên một thị trường dịch vụ công nghệ uy tín trên toàn quốc".</em></p>

												<p>&nbsp;</p>
											</div>
										</div>
										<div class="col-xs-12 col-md-5">
											<div class="f-address">
												<p><strong><span style="color:#FF8C00;">Trụ sở&nbsp;FPT VN CO., LTD</span></strong><br style="font-size: 14px; line-height: 22.3999996185303px;" />
													<span style="font-size: 14px; line-height: 22.3999996185303px;">Địa chỉ : <span style="color:#FFD700;">KCN THUẬN THÀNH, TP. Bắc Ninh</span></span><br />
													Điện thoại: <span style="color:#FFD700;">0222&nbsp;3505 475</span></p>

													<p><strong><span style="color: rgb(255, 102, 0);">LẮP ĐẶT CAMERA CHI NHÁNH LẠNG SƠN</span></strong><br />
														Địa chỉ : <span style="color: rgb(255, 215, 0);">Thất Khê, Tràng Định, Lạng Sơn</span><br />
														Điện thoại :&nbsp;<span style="color: rgb(255, 215, 0);">&nbsp; 0949 696 692</span></p>

														<p>&nbsp;</p>

														<p><span style="color:#FF8C00;">Hiện chúng tôi có các điểm dịch vụ như: </span></p>

														<p><a href="http://fptcamera.vn/tin-tuc/lap-dat-camera-khu-cong-nghiep-vsip-bac-ninh"><span style="color:#cccccc;">Lắp đặt camera tại Bắc Ninh</span></a><span style="color:#cccccc;">, </span><a href="http://fptcamera.vn/tin-tuc/lap-camera-truong-tieu-hoc-ngo-sy-lien-bac-giang"><span style="color:#cccccc;">Lắp đặt camera tại Bắc Giang</span></a><span style="color:#cccccc;">, </span><a href="http://fptcamera.vn/tin-tuc/lap-dat-camera-quan-dong-da-ha-noi"><span style="color:#cccccc;">Lắp đặt camera tại Hà Nội</span></a><span style="color:#cccccc;">, lắp đặt camera tại Vĩnh Phúc, </span><a href="http://fptcamera.vn/tin-tuc/lap-camera-giam-sat-tai-hung-yen"><span style="color:#cccccc;">lắp đặt camera tại hưng yên</span></a><span style="color:#cccccc;">, Lắp đặt camera tại Hải Dương, Lắp đặt camera tại Lạng Sơn, Lắp đặt camera tại Thanh Hóa, Lắp đặt camera tại &nbsp;Hải Phòng, Lắp đặt camera tại Đà Nẵng, Lắp đặt camera TP HCM…<br />
														Quý khách cần lắp đặt camera, Internet vui lòng liên hệ để được tư vấn lắp đặt.&nbsp;</span></p>

														<p>&nbsp;</p>

														<p style="text-align: right;"><img alt="camera fpt đang ký bộ công thương" src="/resources/uploads/images/camera-fpt-thong-bao-bo-cong-thuong.png" /></p>
													</div>
												</div>
											</div>
										</div>
										<div class="clear"></div>
									</div>
								</div>
								<div class="container">
									<div class="row">
										<div class="col-xs-12 col-xs-offset-0 col-md-10 col-md-offset-1">
											<div class="f-copyright">Copyright © 2015. All Rights Reserved by FPT Camera</div>
										</div>
										<div class="clear"></div>
									</div>
								</div>

								<div style="display: none">
									<!-- Histats.com  START  (standard)-->
									<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
									<a href="http://www.histats.com" target="_blank" title="" ><script  type="text/javascript" >
										try {Histats.start(1,3313430,4,438,112,75,"00011111");
										Histats.track_hits();} catch(err){};
									</script></a>
									<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?3313430&101" alt="" border="0"></a></noscript>
									<!-- Histats.com  END  -->
								</div>                <div class="clear"></div>
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
										<p class="title">Mr: Xuân</p>											<p>Tư vấn bán hàng</p>											<p>Tel: 098 448 9688</p>																						
										<a style="float:left" href="skype:kd_fptcamera?chat" class="icons skype"><i style="font-size:25px;margin-left:10px;" class="fa fa-skype"></i></a>
									</div>
								</div>
								<div class="col-xs-6 col-md-4">
									<div class="hotline">
										<p class="title">Mr: Quang Trung</p>											<p>Tư vấn bán hàng</p>											<p>Tel: 0988 043 400</p>																						
										<a style="float:left" href="skype:kd_fptcamera?chat" class="icons skype"><i style="font-size:25px;margin-left:10px;" class="fa fa-skype"></i></a>
									</div>
								</div>
								<div class="col-xs-6 col-md-4">
									<div class="hotline">
										<p class="title">Mr: Trung</p>											<p>Chi nhánh Sài Gòn</p>											<p>Tel: 0907 903 171</p>																						
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


			$(window).resize(function(){
				equalheight('.thumbnail.products');
				equalheight('.thumbnail.news');
				equalheight('.equalheight1');
				equalheight('.equalheightbanner');
			});

			$('#menu ul > li').hover(function () {
				$(this).children('ul').stop(true, true).delay(200).fadeIn(300);
			}, function () {
				$(this).children('ul').stop(true, true).fadeOut(300);
			});

			$('#prd-cate-list .sub-page > ul > li').hover(function () {
				$(this).children('ul').stop(true, true).delay(200).fadeIn(300);
			}, function () {
				$(this).children('ul').stop(true, true).fadeOut(300);
			});

			$('#prd-cate-list').hover(function () {
				$(this).children('ul.sub-page').stop(true, true).delay(200).slideDown(300);
			}, function () {
				$(this).children('ul.sub-page').stop(true, true).slideUp(300);
			});

			$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
				event.preventDefault(); 
				event.stopPropagation(); 
				$(this).parent().siblings().removeClass('open');
				$(this).parent().toggleClass('open');
			});

			$('.scrollfix').scrollFix({fixTop:40});

			if ($(window).scrollTop() != "0")
				$("#go_top").fadeIn("slow");
			var scrollDiv = $("#go_top");
			$(window).scroll(function () {
				if ($(window).scrollTop() == "0")
					$(scrollDiv).fadeOut("slow")
				else
					$(scrollDiv).fadeIn("slow")
			});
			$("#go_top").click(function () {
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
				verticaldownclass: 'glyphicon glyphicon-minus'
			});

			function clear_cart() {
				var result = confirm('Bạn muốn hủy giỏ hàng ?');
				if(result) {
					window.location = "http://fptcamera.vn/removecart/all";
				}else{
                    return false; // cancel button
                }
            }
        </script>
    </body>
    </html>