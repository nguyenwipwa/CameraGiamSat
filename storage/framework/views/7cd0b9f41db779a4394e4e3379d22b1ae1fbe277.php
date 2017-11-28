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
	<meta name="ICBM" content="20.984321, 105.818546" /> <?php echo $__env->make('../../link.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<link rel="stylesheet" type="text/css" href="http://fptcamera.vn/resources/stylesheets/client/jquery.bootstrap-touchspin.css" />
	<script src="http://fptcamera.vn/resources/js/client/jquery.bootstrap-touchspin.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/stylesheets/product.css')); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/stylesheets/shopping.css')); ?>" />

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
						<span>Kiểm tra thông tin nhận hàng</span>
					</div>
					<?php if(!Auth::check()): ?>
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tbody>
							<tr class="hidden-xs hidden-sm">
								<td  width="45%" valign="top">
									<?php echo $__env->make('../../index.carts.loginForm', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
								</td>
								<td valign="top" style="padding-left:20px;">
									<?php echo $__env->make('../../index.carts.inputForm', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
								</td>
							</tr>
							<tr class="hidden-md hidden-lg">
								<td>
									<?php echo $__env->make('../../index.carts.loginForm', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
								</td>
							</tr>
							<tr class="hidden-md hidden-lg">
								<td>
									<?php echo $__env->make('../../index.carts.inputForm', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
								</td>
							</tr>
						</tbody>
					</table>
					<?php endif; ?>

					<?php if(($user = Auth::user())!=null): ?>
					<table id="cart" class="hidden-xs hidden-sm">
						<tbody>
							<tr>
								<td colspan="2">
									<span class="cart_3_header">Hoàn tất đơn hàng</span>
								</td>
							</tr>
							<tr>
								<td style="width:40%;">
									<form action="<?php echo e(route('payment1')); ?>" method="post" accept-charset="utf-8">
										<?php echo e(csrf_field()); ?>

										<span class="circle">1</span>
										<span style="font-weight:bold;color:#555;">Thông tin thanh toán</span>
										<div class="form_label_input">
											<label style="font-weight:bold" for="fullname">Khách hàng</label>
											<span><input class="form-control" type="text" name="fullname" value="<?php echo e($user->name); ?>" /></span>
										</div>
										<div class="form_label_input">
											<label style="font-weight:bold" for="phone">Số điện thoại</label>
											<span><input class="form-control" type="text" name="phone" value="<?php echo e($user->phone_number); ?>"  /></span>
										</div>
										<div class="form_label_input">
											<label style="font-weight:bold" for="email">Email</label>
											<span><input class="form-control" type="text" name="email" value="<?php echo e($user->email); ?>"  /></span>
										</div>
										<div class="form_label_input"><label style="font-weight:bold" for="address">Địa chỉ</label>
											<span>
												<input class="form-control" type="text" name="address" value="<?php echo e($user->address->address); ?>"  /></span>
											</div>
											<div class="form_label_input"><label style="font-weight:bold" for="address">Thành phố</label>
												<span>
													<input class="form-control" type="text" name="thanhpho" value="<?php echo e($user->address->thanhpho->name); ?>"  /></span>
												</div>
												<span class="circle">2</span>
												<span style="font-weight:bold;color:#555;">Địa chỉ giao hàng</span>
												<div class="form_label_input">
													<label style="font-weight:bold;vertical-align:top;" for="ship_address">Địa chỉ</label>
													<span>
														<input class="form-control" type="text" name="ship_address" value="<?php echo e($user->address->address); ?>, <?php echo e($user->address->thanhpho->name); ?>"  /></span>
													</div>
													<input type="submit" value="Mua hàng" class="btn3" style="float:right">
												</form>
											</td>
											<td style="vertical-align:top">
												<span class="circle">4</span>
												<span style="font-weight:bold;color:#555;">Xác nhận đơn hàng</span>
												<table id="cart" class="inside">
													<tbody>
														<tr>
															<td colspan="2" class="text_center">Sản phẩm</td>
															<td class="text_right">Giá</td>
														</tr>
														<?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
														<tr>
															<td class="text_center">
																<img class="cart_img" src="<?php echo e(asset('public/images/san-pham/'.$row->options->img)); ?>">
															</td>
															<td><?php echo e($row->name); ?></td>
															<td class="text_right">
																<span style="display:block;color:red;font-weight:bold;margin: 0 0 5px 0;"><?php echo e(number_format($row->price)); ?> VNĐ</span>
																<span>Số lượng: <?php echo e($row->qty); ?></span>
															</td>
														</tr>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														<td class="text_right" colspan="2">
															<strong>Tổng cộng:</strong>
														</td>
														<td class="text_right" colspan="2">
															<span style="display:block;color:red;font-weight:bold;"><?php echo e(Cart::total()); ?> VNĐ</span>
														</td>
													</tr>
												</tbody>
											</table>
											<input type="submit" name="submit_cart" value="Mua hàng" class="btn3" style="float:right">
										</td>
									</tr>
									<tr class="no-border">
										<td colspan="7">
											<input class="float_left btn2" type="button" value="Trở về giỏ hàng" onclick="location.href='<?php echo e(route('cartDetail')); ?>'">
										</td>
									</tr>
								</tbody>
							</table>
							<?php endif; ?>

                    <!-- <table id="cart">
						<tr>
							<td style="background:#fff;">
								<span>Xin vui lòng điền thông tin dưới đây để chúng tôi thực hiện giao hàng tới cho bạn</span>
								<form action="<?php echo e(route('payment')); ?>" method="post" accept-charset="utf-8">                                        <div class="form_label_input">
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
					</table> -->
				</div>
			</div>
			<div class="clear"></div>
		</div>

		<!-- Bottom end here -->
		<?php echo $__env->make('../../index.bottom', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php echo $__env->make('../../index.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
						</button>
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
										<p class="title">Mr: Quang Trung</p>
										<p>Tư vấn bán hàng</p>
										<p>Tel: 0988 043 400</p>
										<a style="float:left" href="skype:kd_fptcamera?chat" class="icons skype"><i style="font-size:25px;margin-left:10px;" class="fa fa-skype"></i></a>
									</div>
								</div>
								<div class="col-xs-6 col-md-4">
									<div class="hotline">
										<p class="title">Mr: Trung</p>
										<p>Chi nhánh Sài Gòn</p>
										<p>Tel: 0907 903 171</p>
										<a style="float:left" href="skype:kd_fptcamera?chat" class="icons skype"><i style="font-size:25px;margin-left:10px;" class="fa fa-skype"></i></a>
									</div>
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
			$(".cart_qty").TouchSpin({
				verticalbuttons: true,
				verticalupclass: 'glyphicon glyphicon-plus',
				verticaldownclass: 'glyphicon glyphicon-minus'
			});

			function clear_cart() {
				var result = confirm('Bạn muốn hủy giỏ hàng ?');
				if (result) {
					window.location = "http://fptcamera.vn/removecart/all";
				} else {
                return false; // cancel button
            }
        }
    </script>
</body>

</html>