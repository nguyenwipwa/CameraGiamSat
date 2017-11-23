
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

	<?php echo $__env->make("../../.link.index", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/stylesheets/box.css')); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/stylesheets/member.css')); ?>" />
	
	<!-- CSS and Jquery end here -->
</head>
<body lang="vi">
	<div id="wrapper">
		<!-- Top start here -->
		<?php echo $__env->make("../../index.topsub", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<!-- Top end here -->
		<div class="container">
			<div class="row">
				<div class="col-xs-12 pad-btm">
					<div class="row">
						<div class="col-xs-12 col-md-9">
							<div class="article_header my-breadcrumb">
								<ol class="breadcrumb"><li><a href="http://fptcamera.vn/">Thông tin cá nhân</a></li><li><a href="http://fptcamera.vn/tim-kiem?t=m%C3%A1y&submit_search=T%C3%ACm+ki%E1%BA%BFm">Tìm kiếm sản phẩm</a></li></ol>
							</div>
							<div class="clear"></div>
							<div class="description2">
							</div>
							<div class="product_list">
								<div class="row">
									<div class="box_mid col-xs-12 col-sm-12 col-lg-12">
										<div class="mid-title">
											<div class="titleL"><h1>Cập nhật thông tin tài khoản</h1></div>
											<div class="titleR"></div>
											<div class="clear"></div>
										</div>
										<div class="mid-content">

											<script language="javascript">
												function checkform(f) {			
													var re =/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,5})$/gi;
													if (f.pass.value !='' && f.pass.value != f.re_password.value ) {
														alert("Xác nhật khẩu không đúng");
														f.re_password.focus();
														return false;
													} 
													if (f.full_name.value == '' ) {
														alert("Vui lòng nhập Họ tên");
														f.l_name.focus();
														return false;
													}
													if (f.phone.value == '' ) {
														alert("Vui lòng nhập Điện thoại");
														f.phone.focus();
														return false;
													}
													return true;
												}
											</script>
											<div id="Member">
												<form action="/member/update_account.html" name="frmMember" id="frmMember" method="post" onsubmit="return checkform(this);" enctype="multipart/form-data">

													<table cellspacing="0" cellpadding="0" border="0">
														<tbody><tr>
															<td width="30%">Tên thành viên</td>
															<td>[ <span class="fMgroup"><span class="fGroup" style="color:#ababab">Free Member</span> </span> ] </td>
														</tr>
														<tr>
															<td>E-mail <font color="red">*</font></td>
															<td>	<input type="text" style="width:300px;" value="nguyenwipwa@gmail.com" class="textfiled" name="email_address" id="email_address" readonly="readonly" disabled="disabled"></td>
														</tr>
														<tr>
															<td><b>Đổi mật khẩu mới.</b></td>
															<td><span class="font_err">Điền mật khẩu mới để thay đổi mật khẩu (Nếu để trống sẽ giữ lại mật khẩu cũ) </span></td>
														</tr>
														<tr>
															<td>Mật khẩu  </td>
															<td><input type="password" style="width:300px;" class="textfiled" name="pass"></td>
														</tr>
														<tr>
															<td>Xác nhận mật khẩu </td>
															<td>	<input type="password" style="width:300px;" class="textfiled" name="re_password">	</td>
														</tr>
														<tr>
															<td>Avatar</td>
															<td><input name="chk_upload" type="hidden" value="1"><input name="image" type="file" id="image" size="30" maxlength="250"> (*.jpg,*.gif,*.png) Only ! </td>
														</tr>
														<tr>      
															<td>Họ tên <font color="red">*</font></td>
															<td><input type="text" value="Trọng Nguyễn Văn" class="textfiled" name="full_name" id="full_name" style="width:300px;"></td> 
														</tr>
														<tr>
															<td>Giới tính <font color="red">*</font></td>
															<td><input name="gender" id="gender" type="radio" value="1" align="absmiddle"> Nam &nbsp; <input name="gender" id="gender" type="radio" value="2" align="absmiddle"> Nữ &nbsp; </td>
														</tr>

														<tr>		
															<td>Điện thoại <font color="red">*</font></td>
															<td><input type="text" style="width:300px;" class="textfiled" value="1632635825" name="phone"> </td>
														</tr>
														<tr>      
															<td>Địa chỉ </td>
															<td><input type="text" value="Gò dưa" class="textfiled" name="address" id="address" style="width:300px;"></td>
														</tr>
														<tr>      
															<td>Thành phố </td>
															<td><select name="city" id="city" class="select" style="width:302px;" onchange="CityChange(this.value);"><option value="" selected="">Chọn thành phố</option><?php $__currentLoopData = DB::select('SELECT * from thanhpho'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																<option value="<?php echo e($key->id); ?>"><?php echo e($key->name); ?></option>
																<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
															</select></td> 
														</tr>     
														<tr>      
															<td>Quận huyện </td>
															<td><span id="ext_state"><select name="state" id="state" class="select" style="width:302px;" onchange="StateChange(this.value);"><option value="" selected="">Chọn quận huyện</option></select></span></td>
														</tr>
														<tr>      
															<td>Phường xã </td>
															<td><span id="ext_ward"><select name="ward" id="ward" class="select" style="width:302px;"><option value="0" selected="">Chọn phường xã</option></select></span></td>
														</tr>
														<tr>
															<td></td>
															<td class="last">
																<button id="btnEdit" name="btnEdit" type="submit" class="btn_member btn-danger" value="Cập nhật"><span>Cập nhật</span></button>&nbsp;&nbsp;				      <button id="btnReset" name="btnReset" type="reset" class="btn_member btn-danger" value="Nhập lại"><span>Nhập lại</span></button> 
															</td>
														</tr>
													</tbody></table>
												</form>
											</div>

										</div>          
									</div>
								</div>
							</div>
							<div class="clear"></div>
							<!-- <div class="pagination">
							</div> -->
						</div>
						<div class="col-md-3 hidden-xs hidden-sm">
							<div class="header">
								<span>Danh mục tùy chọn</span>
							</div>
							<div class="media news longer">
								<div class="media-left">
									<a href="http://fptcamera.vn/tin-tuc/lap-dat-camera">
										<img class="media-object" alt="Lắp đặt camera" src="http://fptcamera.vn/resources/uploads/images/automatic/tin-tuc/lap-dat-camera.jpg">
									</a>
								</div>
								<div class="media-body">
									<a href="http://fptcamera.vn/tin-tuc/lap-dat-camera">
										<h4 class="media-heading longer"><i class="fa fa-angle-right hidden-lg hidden-md">&nbsp;</i>Thông tin cá nhân</h4>
									</a>
								</div>
							</div>
							<div class="media news longer">
								<div class="media-left">
									<a href="http://fptcamera.vn/tin-tuc/-lam-sao-de-biet-camera-dang-hoat-dong">
										<img class="media-object" alt="​lam sao de biet camera dang hoat dong" src="http://fptcamera.vn/resources/uploads/images/automatic/tin-tuc/cach-nhan-biet-camera-co-hoat-dong-khong.jpg">
									</a>
								</div>
								<div class="media-body">
									<a href="http://fptcamera.vn/tin-tuc/-lam-sao-de-biet-camera-dang-hoat-dong">
										<h4 class="media-heading longer"><i class="fa fa-angle-right hidden-lg hidden-md">&nbsp;</i>​Quản lý đơn hàng</h4>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Bottom end here -->
		<?php echo $__env->make('../../index.bottom', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo $__env->make('../../index.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
										<p class="title">Mr: Thành</p>											<p>Tư vấn bán hàng</p>											<p>Tel: 0971.767.285</p>
										<a style="float:left" href="skype:kd_fptcamera?chat" class="icons skype"><i style="font-size:25px;margin-left:10px;" class="fa fa-skype"></i></a>
									</div>
								</div>
								<div class="col-xs-6 col-md-4">
									<div class="hotline">
										<p class="title">Mr: Duy</p>											<p>Chi nhánh Sài Gòn</p>											<p>Tel: 0931.588.886</p>
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
			});        </script>
		</body>
		</html>