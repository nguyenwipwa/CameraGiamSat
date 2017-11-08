
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

	<?php echo $__env->make("link.index", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-66346872-1', 'auto');
		ga('send', 'pageview');

	</script>


	<script type="text/javascript">
		function lookup(keyword) {
			var keyword = document.getElementById("searchSgg").value;
			if(keyword.length == 0) {
				$('#autoSuggestionsList').fadeOut(400);
			} else {
				$.post("http://fptcamera.vn/ajaxhandle/client_products_ajaxhandler/Ajax_Get_All_Product_Client", 
					{keyword : keyword},
					function(data){
						if(data.length > 14) {
							$('#autoSuggestionsList').fadeIn(400);
	               			// var obj = jQuery.parseJSON(data);
	               			var obj = JSON.parse(data);
	               			var strhtml = '';
			                //$('#autoSuggestionsList').html(data['message']);
			                strhtml += '<div class="sgg-outer">';
			                for(var index in obj) {
			                    //alert(obj.message[1].label);
			                    //alert(obj.length());
			                    for(var i=0;i<obj[index].length;i++) {
			                        //alert(obj.message[i].value);
			                        //append
			                        strhtml += '<div class="sgg-row">';
			                        strhtml += '<div class="sgg-image"><img width="50" height="50" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/thumbs/' + obj.message[i].Image + '"/></div>';
			                        strhtml += '<div class="sgg-right">';
			                        strhtml += '<div class="sgg-title"><a href="http://fptcamera.vn/' + obj.message[i].Slug + '">' + obj.message[i].Title + '</a></div>';
			                        strhtml += '<div class="sgg-sellprice">' + parseFloat(obj.message[i].SellPrice).toFixed().replace(/./g, function(c, i, a) {return i && c !== "." && ((a.length - i) % 3 === 0) ? '.' + c : c;}) + ' đ</div>';
			                        strhtml += '</div>';
			                        strhtml += '</div>';
			                    }
			                }
			                strhtml += '</div>';
			                $('#autoSuggestionsList').html(strhtml);
			            } else {
			            	var strhtml = '';
			            	strhtml += '<div class="sgg-outer">';
			            	strhtml += '<div class="sgg-row">';
			            	strhtml += '<div class="sgg-title"><a>Không có sản phẩm nào tương ứng</a></div>';
			            	strhtml += '</div>';
			            	strhtml += '</div>';
			            	$('#autoSuggestionsList').html(strhtml);
			            }
			        });
	       		// Ajax_Suggestion(keyword);
	       	}
	       }
	   </script>        <link rel="stylesheet" type="text/css" href="http://fptcamera.vn/resources/stylesheets/client/social-likes_birman.css" />
	   <script src="http://fptcamera.vn/resources/js/client/social-likes.min.js"></script>
	   <!-- CSS and Jquery end here -->
	</head>
	<body lang="vi">
		<div id="wrapper">
			<h1 style="display:none;"><b>Lắp đặt camera quan sát giá rẻ </b>,<b> camera FPT</b></h1>
			<h2 style="display: none;">Tư vấn lắp đặt camera</h2>
			<!-- Top start here -->
			<div id="top">
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>

				<div id="top-menu" class="hidden-sm hidden-xs">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-7">
										<div id="top-hotline">
											<div class="name">
												<a href="http://fptcamera.vn/camera-giam-sat-tot">Sản phẩm bán chạy</a>|
												<a href="http://fptcamera.vn/lap-dat-camera-khuyen-mai">Sản phẩm khuyến mại</a>|
												<a href="http://fptcamera.vn/camera-quan-sat-moi">Sản phẩm mới</a><img style="margin:-4px 0 0 2px;" src="http://fptcamera.vn/resources/ui_images/client/background/new.gif">
											</div>
										</div>
									</div>
									<div class="col-xs-5">
										<div id="top-hotline" style="float:right;">
											<div class="name">
												<a class="name_cart" href="http://fptcamera.vn/gio-hang">Giỏ hàng (<b>0</b> sản phẩm)</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div style="margin-top:50px;" class='hidden-lg hidden-md'>
					<div class="mobileslider">
						<ul class="slides">
							<li>
								<a href="#">
									<img alt="camera quan sát trên điện thoại" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/lap-dat-camera-quan-sat-fpt.jpg" />
									<div class="clear"></div>
								</a>
							</li>
							<li>
								<a href="#">
									<img alt="camera quan sát trên điện thoại 2" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/camera-quan-sat-tren-dien-thoai-2.jpg" />
									<div class="clear"></div>
								</a>
							</li>
							<li>
								<a target="_blank" href="http://fptcamera.vn/tin-tuc/xem-camera-giam-sat-qua-dien-thoai">
									<img alt="xem camera trên điện thoại di động" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/xem-camera-tren-dien-thoai-di-dong.jpg" />
									<div class="clear"></div>
								</a>
							</li>
							<li>
								<a href="#">
									<img alt="Đầu ghi hình camera quan sát" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/dau-ghi-hinh-camera-quan-sat1.jpg" />
									<div class="clear"></div>
								</a>
							</li>
						</ul>
						<div class="clear"></div>
					</div>
				</div>
				<div class="container hidden-xs hidden-sm">
					<div class="row top-header" id="ScrollTo">
						<div class="col-xs-12">
							<div class="row">
								<div class="col-xs-12 col-md-3">
									<div id="logo">
										<a href="http://fptcamera.vn/">
											<img title="LẮP ĐẶT CAMERA QUAN SÁT GIÁ RẺ" alt="Camera FPT Việt Nam tự hào Nhà cung cấp thiết bị camera giám sát giá rẻ uy tín trên toàn quốc" src="http://fptcamera.vn/resources/uploads/images/automatic/logo/logo-fpt-camera-giam-sat.png">
										</a>
									</div>
								</div>
								<div class="col-xs-12 col-md-6">
									<img style="width:100%;margin-top:25px;" alt="Cam kết dịch vụ" src="http://fptcamera.vn/resources/ui_images/client/background/promise.png">
								</div>
								<div class="col-xs-12 col-md-3">
									<div id="hotline">
										<div class="name">Tư vấn lắp đặt camera</div>
										<div class="clear"></div>
										<div class="phone">
											<a href="tel:024.6328.2964">024.6328.2964</a>
											<a href="tel:0984 489 688">0984 489 688</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

                    <!-- <div class="row hidden-xs hidden-sm hidden-md">
                        <div class="col-xs-12 col-xs-offset-0 col-md-10 col-md-offset-1">
                            <div id="menu">
                                <ul><li class="hasChild"  ><a href="http://fptcamera.vn/camera-giam-sat">Camara giam sat</a><ul><li  ><a href="http://fptcamera.vn/camera-ip">Camara IP</a></li></ul></li></ul>                                <div class="clear"></div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="container-fluid">
                	<div class="row hidden-md hidden-lg">
                		<nav class="navbar navbar-inverse navbar-fixed-top custom-navbar">
                			<div class="container-fluid">
                				<!-- Brand and toggle get grouped for better mobile display -->
                				<div class="navbar-header">
                					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                						<span class="sr-only">Toggle navigation</span>
                						<span class="icon-bar"></span>
                						<span class="icon-bar"></span>
                						<span class="icon-bar"></span>
                					</button>

                					<a class="navbar-brand" href="http://fptcamera.vn/">
                						<img alt="Camera FPT Việt Nam tự hào Nhà cung cấp thiết bị camera giám sát giá rẻ uy tín trên toàn quốc" src="http://fptcamera.vn/resources/ui_images/client/background/logo_mobile.png">
                					</a>
                				</div>

                				<!-- Collect the nav links, forms, and other content for toggling -->
                				<div class="collapse navbar-collapse" aria-expanded="false" id="bs-example-navbar-collapse-1">
                					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true" style="position: fixed; top:40px; right: 0; border: none; padding: 3px; margin-right: 5px;">
                						<i class="fa fa-times-circle" style="font-size: 25px;"></i>
                					</button>
                					<ul class="nav navbar-nav"><li><a href="http://fptcamera.vn/camera-tron-bo"><img src = http://fptcamera.vn/resources/uploads/images/automatic/danh-muc-san-pham//lap-dat-camera-tron-bo.png />&nbsp;&nbsp;Camera trọn bộ</a></li><li><a href="http://fptcamera.vn/camera-giam-sat"><img src = http://fptcamera.vn/resources/uploads/images/automatic/danh-muc-san-pham//camera-giam-sat.png />&nbsp;&nbsp;Camera giám sát</a></li><li><a href="http://fptcamera.vn/dau-ghi-hinh-camera"><img src = http://fptcamera.vn/resources/uploads/images/automatic/danh-muc-san-pham//dau-ghi-hinh-camera-quan-sat.png />&nbsp;&nbsp;Đầu ghi hình camera</a></li><li><a href="http://fptcamera.vn/phu-kien-camera"><img src = http://fptcamera.vn/resources/uploads/images/automatic/danh-muc-san-pham//phu-kien-camera.png />&nbsp;&nbsp;Phụ kiện camera</a></li><li><a href="http://fptcamera.vn/thiet-bi-an-ninh"><img src = http://fptcamera.vn/resources/uploads/images/automatic/danh-muc-san-pham//camera-thiet-bi-an-ninh.png />&nbsp;&nbsp;Thiết bị an ninh</a></li><li><a href="http://fptcamera.vn/may-cham-cong"><img src = http://fptcamera.vn/resources/uploads/images/automatic/danh-muc-san-pham//may-cham-cong-gia-re.png />&nbsp;&nbsp;Máy chấm công</a></li><li><a href="http://fptcamera.vn/tong-dai-bo-dam"><img src = http://fptcamera.vn/resources/uploads/images/automatic/danh-muc-san-pham//78-32.png />&nbsp;&nbsp;Tổng đài - Bộ đàm</a></li><li><a href="http://fptcamera.vn/thiet-bi-van-phong"><img src = http://fptcamera.vn/resources/uploads/images/automatic/danh-muc-san-pham//thiet-bi-van-phong.png />&nbsp;&nbsp;Thiết bị văn phòng</a></li><li><a href="http://fptcamera.vn/tin-tuc/tin-camera"><i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;tin tức</a></li></ul>                                </div><!-- /.navbar-collapse -->
                				</div><!-- /.container-fluid -->
                			</nav>
                		</div>
                	</div>                <div class="clear"></div>
                </div>
                <!-- Top end here -->
                <div class="container menu_bg">
                	<div class="row menu_bg">
                		<div class="col-xs-12 col-xs-offset-0 menu_bg">
                			<div class="row">
                				<div class="col-md-4 col-lg-3 hidden-xs hidden-sm" style="padding-right:0;">
                					<div id="prd-cate-list">
                						<div class="prd-cate-header">
                							<span>Danh mục sản phẩm<i class="fa fa-chevron-circle-down"></i></span>
                						</div>
                						<ul class="main-page equalheightbanner">
                							<ul>
                								<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                								<?php if($cate->id_root == 0 && $cate->status==1): ?>
                								<li><a href="<?php echo e(url('/category/'.$cate->id.'/1')); ?>"><img alt = "<?php echo e($cate->name); ?>" src = "http://fptcamera.vn/resources/uploads/images/automatic/danh-muc-san-pham//<?php echo $cate->icon; ?>" /><span class="mc_title"><?php echo e($cate->name); ?><i class="fa fa-chevron-right hidden-md"></i></span></a>
                									<ul>
                										<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                										<?php if($cate->id == $cate1->id_root && $cate1->status==1): ?>
                										<li><a href="<?php echo e(url('/category/'.$cate1->id.'/1')); ?>"><img alt = "<?php echo e($cate1->name); ?>" src = http://fptcamera.vn/resources/uploads/images/automatic/danh-muc-san-pham// /><span class="mc_title"><?php echo e($cate1->name); ?><i class="fa fa-chevron-right hidden-md"></i></span></a>
                											<ul>
                												<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                												<?php if($cate1->id == $cate2->id_root && $cate2->status==1): ?>
                												<li><a href="<?php echo e(url('/category/'.$cate2->id.'/1')); ?>"><img alt = "<?php echo e($cate2->name); ?>" src = http://fptcamera.vn/resources/uploads/images/automatic/danh-muc-san-pham// /><span class="mc_title"><?php echo e($cate2->name); ?><i class="fa fa-chevron-right hidden-md"></i></span></a>
                													<div class="clear"></div>
                												</li>
                												<?php endif; ?>
                												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                											</ul>
                											<div class="clear"></div>
                										</li>
                										<?php endif; ?>
                										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                									</ul>
                									<div class="clear"></div>
                								</li>
                								<?php endif; ?>
                								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                							</ul>
                						</ul>
                					</div>
                				</div>
                				<div class="col-xs-12 col-md-8 col-lg-9">
                					<div class="row">
                						<div class="col-xs-12 col-lg-8" style="padding:0;">
                							<div id="searchform">
                								<form action="http://fptcamera.vn/tim-kiem" accept-charset="utf-8" method="get">                                                <img style="display: none;" class="loader" src="http://fptcamera.vn/resources/ui_images/client/background/loader.gif"/>
                									<input type="text" name="t" value="" id="searchSgg" class="searchfield" onkeyup="lookup()" autocomplete="off" placeholder="Tìm kiếm sản phẩm ..."  />                                                <input type="submit" name="submit_search" value="Tìm kiếm" id="search_btn" class="searchbutton" />                                                <div class="clear"></div>
                									<div class="autoSuggestionsList_l" id="autoSuggestionsList">
                									</div>
                								</form>                                        </div>
                								<div id="banner" class="hidden-xs hidden-sm equalheightbanner">
                									<div class="bannerslider">
                										<ul class="slides">
                											<li>
                												<a href="#">
                													<img title="công ty lắp đặt camera uy tín" alt="Dịch vụ lắp đặt camera quan sát uy tín giá rẻ tại FPT việt nam đạt chất lượng hàng đầu. Khuyến mãi lắp đặt trọn gói không phát sinh" src="http://fptcamera.vn/resources/uploads/images/automatic/banner/chung-nhan-dai-ly-camera-hikvision.jpg" />
                													<div class="clear"></div>
                												</a>
                											</li>
                											<li>
                												<a target="_blank" href="http://fptcamera.vn/tin-tuc/lap-dat-mang-fpt-cap-quang-tai-fpt-viet-nam">
                													<img title="lắp đặt mạng FPT" alt="lap-dat-mang-fpt" src="http://fptcamera.vn/resources/uploads/images/automatic/banner/lap-dat-mang-fpt.jpg" />
                													<div class="clear"></div>
                												</a>
                											</li>
                											<li>
                												<a target="_blank" href="http://fptcamera.vn/tron-bo-camera-gia-re">
                													<img title="lắp đặt camera trọn bộ gía rẻ" alt="Lắp đặt camera benco trọn bộ dịch vụ của FPT VIỆT NAM quý khách không phải phát sinh bất kỳ chi phí nào. Camera an ninh uy tín" src="http://fptcamera.vn/resources/uploads/images/automatic/banner/camera-benco-gia-re.jpg" />
                													<div class="clear"></div>
                												</a>
                											</li>
                										</ul>
                										<div class="clear"></div>
                									</div>
                								</div>
                							</div>
                							<div class="col-lg-4 hidden-xs hidden-sm hidden-md" style="padding-left:0;">
                								<button type="button" class="btn btn-danger button-support" data-toggle="modal" data-target="#supportonlineModal"><img src="http://fptcamera.vn/resources/ui_images/client/background/yahoo-smile.png">&nbsp;Hỗ trợ trực tuyến</button>
                								<a class="b_a" href="http://fptcamera.vn/tin-tuc/lap-dat-mang-fpt-cap-quang-tai-fpt-viet-nam"><img alt="Lắp camera, Internet FPT" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/lap-mang-fpt.jpg"></a>
                								<a class="b_a" href="http://fptcamera.vn/tin-tuc/chuong-trinh-doi-camera-cu-lay-camera-moi-tai-fpt"><img alt="Lắp đặt camera tặng báo trộm" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/doi_camera_cu_lay_moi.jpg"></a>
                							</div>
                						</div>
                					</div>
                					<div class="clear"></div>
                					<div class="col-xs-12 hidden-xs hidden-sm">
                						<div id="sub-menu">
                							<div class="row">
                								<div class="col-xs-12 col-lg-7">
                									<div class="contain">
                										<a 
                										href='http://fptcamera.vn/tin-tuc/gioi-thieu'                                                     >Sơ lược công ty</a>
                										<a 
                										href='http://fptcamera.vn/tin-tuc/chinh-sach'                                                     >Chính sách ưu đãi</a>
                										<a 
                										href='http://fptcamera.vn/tin-tuc/tin-camera'                                                     >Tin camera</a>
                										<a 
                										href='http://fptcamera.vn/lien-he'                                                     >Liên hệ</a>
                									</div>
                								</div>
                								<div class="col-lg-5 hidden-xs hidden-sm hidden-md">
                									<div class="newsslider">
                										<ul class="slides">
                											<li>
                												<a href="http://fptcamera.vn/tin-tuc/lap-dat-camera-giam-sat-khu-cong-nghiep">Lắp đặt camera giám sát khu công nghiệp</a>
                											</li>
                											<li>
                												<a href="http://fptcamera.vn/tin-tuc/lap-dat-camera-quan-sat-tai-bac-giang">lắp đặt camera quan sát tại  Bắc Giang</a>
                											</li>
                											<li>
                												<a href="http://fptcamera.vn/tin-tuc/lap-dat-camera-gia-dinh-gia-bao-nhieu">lap dat camera gia dinh gia bao nhieu</a>
                											</li>
                											<li>
                												<a href="http://fptcamera.vn/tin-tuc/lap-dat-camera-quan-sat-cho-nha-xuong-can-luu-y-gi-">Lắp đặt camera quan sát cho nhà xưởng cần lưu ý gì?</a>
                											</li>
                											<li>
                												<a href="http://fptcamera.vn/tin-tuc/chuong-trinh-doi-camera-cu-lay-camera-moi-tai-fpt">Chương trình đổi camera cũ lấy camera mới tại FPT</a>
                											</li>
                											<li>
                												<a href="http://fptcamera.vn/tin-tuc/lap-dat-camera-tai-bac-ninh">Lắp đặt camera tại Bắc Ninh</a>
                											</li>
                											<li>
                												<a href="http://fptcamera.vn/tin-tuc/chi-phi-lap-dat-camera-quan-sat-tron-goi-tai-ha-noi">Chi phí lắp đặt camera quan sát trọn gói tại hà nội</a>
                											</li>
                											<li>
                												<a href="http://fptcamera.vn/tin-tuc/tu-van-lap-dat-camera-quan-sat-an-toan-gia-dinh">Tư vấn lắp đặt camera quan sát an toàn gia đình</a>
                											</li>
                											<div class="clear"></div>
                										</ul>
                										<div class="clear"></div>
                									</div>
                								</div>
                							</div>
                						</div>
                					</div>
                					<div class="clear"></div>
                					<div class="col-xs-12">
                						<ul class="nav nav-tabs custom-tabs " role="tablist">
                							<li role="presentation" class="active"><a href="http://fptcamera.vn/dau-ghi-hinh-camera">Đầu ghi hình camera</a></li>
                							<li class="hidden-xs hidden-sm" role="presentation"><a href="http://fptcamera.vn/dau-ghi-hinh-4-kenh">Đầu ghi hình 4 Kênh</a></li>
                							<li class="hidden-xs hidden-sm" role="presentation"><a href="http://fptcamera.vn/dau-ghi-hinh-benco">Đầu ghi hình BENCO</a></li>
                							<li class="hidden-xs hidden-sm" role="presentation"><a href="http://fptcamera.vn/dau-ghi-hinh-8-kenh">Đầu ghi hình 8 Kênh</a></li>
                							<li class="hidden-xs hidden-sm" role="presentation"><a href="http://fptcamera.vn/dau-ghi-hinh-gia-re">Đầu ghi hình giá rẻ</a></li>
                						</ul>
                						<div class="tab-content ">
                							<div role="tabpanel" class="tab-pane active" id="dmsp-dau-ghi-hinh-camera">
                								<div class="row">
                									<div class="col-xs-12 col-lg-9">
                										<div class="row">
                											<div class="col-xs-6 col-sm-4 col-lg-3 ">
                												<div class="thumbnail products">
                													<a href="http://fptcamera.vn/dau-hikvision-16-kenh-turbo-hd-3-0-ds-8116hqhi-f8-n"><img alt="Đầu HIKVISION 16 Kênh Turbo HD 3.0 DS-8116HQHI-F8/N" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/dau-ghi-hinh-HIKVISION-16-KENH-DS-8116HQHI-F8-N.jpg"></a>
                													<div class="caption">
                														<a href="http://fptcamera.vn/dau-hikvision-16-kenh-turbo-hd-3-0-ds-8116hqhi-f8-n"><h3>Đầu HIKVISION 16 Kênh Turbo HD 3.0 DS-8116HQHI-F8/N</h3></a>
                														<div class="clear"></div>
                														<span class="new-price">29.000.000 đ</span>
                														<span class="old-price">35.000.000 đ</span>
                													</div>
                												</div>
                											</div>
                											<div class="col-xs-6 col-sm-4 col-lg-3 hidden-xs hidden-sm hidden-md">
                												<div class="thumbnail products">
                													<a href="http://fptcamera.vn/dau-ghi-ip-32-kenh-hang-hikvision-ds-7732ni-e4"><img alt="Đầu ghi IP 32 Kênh hãng HIKVISION DS-7732NI-E4" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/dau-ghi-hinh-hikvision-32-kenh-ip-DS-7732NI-E4.jpg"></a>
                													<div class="caption">
                														<a href="http://fptcamera.vn/dau-ghi-ip-32-kenh-hang-hikvision-ds-7732ni-e4"><h3>Đầu ghi IP 32 Kênh hãng HIKVISION DS-7732NI-E4</h3></a>
                														<div class="clear"></div>
                														<span class="new-price">9.980.000 đ</span>
                														<span class="old-price">1.120.000 đ</span>
                													</div>
                												</div>
                											</div>
                											<div class="col-xs-6 col-sm-4 col-lg-3 hidden-xs hidden-sm hidden-md">
                												<div class="thumbnail products">
                													<a href="http://fptcamera.vn/dau-ghi-hinh-hdpro-4-kenh-ahd-hdp-1700ahd"><img alt="dau-ghi-hinh-4-kenh-hdpro-HDP-1700AHD" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/dau-ghi-hinh-4-kenh-hdpro-HDP-1700AHD.jpg"></a>
                													<div class="caption">
                														<a href="http://fptcamera.vn/dau-ghi-hinh-hdpro-4-kenh-ahd-hdp-1700ahd"><h3>Đầu Ghi Hình HDPRO 4 Kênh AHD HDP-1700AHD</h3></a>
                														<div class="clear"></div>
                														<span class="new-price">1.599.000 đ</span>
                														<span class="old-price">2.120.000 đ</span>
                													</div>
                												</div>
                											</div>
                											<div class="col-xs-6 col-sm-4 col-lg-3 hidden-xs hidden-sm hidden-md">
                												<div class="thumbnail products">
                													<a href="http://fptcamera.vn/dau-ghi-hd-cvi-4-kenh-dahua-hcvr4104c-v2"><img alt="dau-ghi-hinh-hdcvi-dahua-HCVR4104C-V2" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/dau-ghi-hinh-hdcvi-dahua-HCVR4104C-V2.jpg"></a>
                													<div class="caption">
                														<a href="http://fptcamera.vn/dau-ghi-hd-cvi-4-kenh-dahua-hcvr4104c-v2"><h3>Đầu Ghi HD-CVI 4 Kênh DAHUA HCVR4104C-V2</h3></a>
                														<div class="clear"></div>
                														<span class="new-price">1.650.000 đ</span>
                														<span class="old-price">2.180.000 đ</span>
                													</div>
                												</div>
                											</div>
                										</div>
                									</div>
                									<div class="col-md-3 hidden-xs hidden-sm hidden-md">
                										<a class="b_a2" href="http://fptcamera.vn/dau-ghi-hinh-gia-re"><img alt="dau-ghi-hinh-camera-DVR" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/dau-ghi-hinh-camera-DVR.jpg"></a>

                									</div>
                								</div>
                							</div>
                						</div>
                						<ul class="nav nav-tabs custom-tabs hidden-xs hidden-sm" role="tablist">
                							<li role="presentation" class="active"><a href="http://fptcamera.vn/phu-kien-camera">Phụ kiện camera</a></li>
                							<li class="hidden-xs hidden-sm" role="presentation"><a href="http://fptcamera.vn/o-luu-du-lieu-camera">Ổ lưu dữ liệu Camera</a></li>
                							<li class="hidden-xs hidden-sm" role="presentation"><a href="http://fptcamera.vn/nguon-camera">Nguồn Camera</a></li>
                							<li class="hidden-xs hidden-sm" role="presentation"><a href="http://fptcamera.vn/day-cap-camera">Dây cáp Camera</a></li>
                						</ul>
                						<div class="tab-content hidden-xs hidden-sm">
                							<div role="tabpanel" class="tab-pane active" id="dmsp-phu-kien-camera">
                								<div class="row">
                									<div class="col-xs-12 col-lg-9">
                										<div class="row">
                											<div class="col-xs-6 col-sm-4 col-lg-3 ">
                												<div class="thumbnail products">
                													<a href="http://fptcamera.vn/nguon-tong-camera-12v-5a"><img alt="nguon-tong-12V-5A-gia-re" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/nguon-tong-12V-5A-gia-re.jpg"></a>
                													<div class="caption">
                														<a href="http://fptcamera.vn/nguon-tong-camera-12v-5a"><h3>Nguồn Tổng Camera 12V-5A</h3></a>
                														<div class="clear"></div>
                														<span class="new-price">250.000 đ</span>
                														<span class="old-price">275.000 đ</span>
                													</div>
                												</div>
                											</div>
                											<div class="col-xs-6 col-sm-4 col-lg-3 ">
                												<div class="thumbnail products">
                													<a href="http://fptcamera.vn/vo-bao-ve-camera-ngoai-troi-kk02"><img alt="vo-bao-ve-kk02" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/vo-bao-ve-kk02.jpg"></a>
                													<div class="caption">
                														<a href="http://fptcamera.vn/vo-bao-ve-camera-ngoai-troi-kk02"><h3>Vỏ Bảo Vệ Camera Ngoài Trời KK02</h3></a>
                														<div class="clear"></div>
                														<span class="new-price">190.000 đ</span>
                														<span class="old-price"></span>
                													</div>
                												</div>
                											</div>
                											<div class="col-xs-6 col-sm-4 col-lg-3 ">
                												<div class="thumbnail products">
                													<a href="http://fptcamera.vn/day-tin-hieu-dong-truc-cable-5c"><img alt="day-tin-hieu-cab-5c-camera" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/day-tin-hieu-cab-5c-chuyen-cho-camera.jpg"></a>
                													<div class="caption">
                														<a href="http://fptcamera.vn/day-tin-hieu-dong-truc-cable-5c"><h3>Dây Tín Hiệu Đồng Trục Cable 5C</h3></a>
                														<div class="clear"></div>
                														<span class="new-price">6.000 đ</span>
                														<span class="old-price"></span>
                													</div>
                												</div>
                											</div>
                											<div class="col-xs-6 col-sm-4 col-lg-3 hidden-sm hidden-md">
                												<div class="thumbnail products">
                													<a href="http://fptcamera.vn/hdd-chuyen-dung-seagate-1tb"><img alt="hdd-seagate-1t" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/hdd-seagate-1t.jpg"></a>
                													<div class="caption">
                														<a href="http://fptcamera.vn/hdd-chuyen-dung-seagate-1tb"><h3>HDD Chuyên Dụng SEAGATE 1TB</h3></a>
                														<div class="clear"></div>
                														<span class="new-price">1.350.000 đ</span>
                														<span class="old-price">1.450.000 đ</span>
                													</div>
                												</div>
                											</div>
                										</div>
                									</div>
                									<div class="col-md-3 hidden-xs hidden-sm hidden-md">
                										<a class="b_a2" href="http://fptcamera.vn/phu-kien-camera"><img alt="phu-kien-camera-quan-sat" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/phu-kien-camera-quan-sat.jpg"></a>

                									</div>
                								</div>
                							</div>
                						</div>
                						<ul class="nav nav-tabs custom-tabs hidden-xs hidden-sm" role="tablist">
                							<li role="presentation" class="active"><a href="http://fptcamera.vn/thiet-bi-an-ninh">Thiết bị an ninh</a></li>
                							<li class="hidden-xs hidden-sm" role="presentation"><a href="http://fptcamera.vn/chuong-cua-camera">Chuông cửa camera</a></li>
                							<li class="hidden-xs hidden-sm" role="presentation"><a href="http://fptcamera.vn/thiet-bi-chong-trom">Thiết bị chống trộm</a></li>
                						</ul>
                						<div class="tab-content hidden-xs hidden-sm">
                							<div role="tabpanel" class="tab-pane active" id="dmsp-thiet-bi-an-ninh">
                								<div class="row">
                									<div class="col-xs-12 col-lg-9">
                										<div class="row">
                											<div class="col-xs-6 col-sm-4 col-lg-3 ">
                												<div class="thumbnail products">
                													<a href="http://fptcamera.vn/camera-chuong-cua-samsung-sht-cw610e-en"><img alt="camera-chuong-cua-samsung-SHT-CW610E-EN" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/camera-chuong-cua-samsung-SHT-CW610E-EN.jpg"></a>
                													<div class="caption">
                														<a href="http://fptcamera.vn/camera-chuong-cua-samsung-sht-cw610e-en"><h3>Camera Chuông Cửa SAMSUNG SHT-CW610E/EN</h3></a>
                														<div class="clear"></div>
                														<span class="new-price">1.530.000 đ</span>
                														<span class="old-price">1.800.000 đ</span>
                													</div>
                												</div>
                											</div>
                											<div class="col-xs-6 col-sm-4 col-lg-3 ">
                												<div class="thumbnail products">
                													<a href="http://fptcamera.vn/bao-trom-khong-day-karassn-ks-258b"><img alt="bao-trom-khong-day-Karassn-KS-258B" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/bao-trom-khong-day-Karassn-KS-258B.jpg"></a>
                													<div class="caption">
                														<a href="http://fptcamera.vn/bao-trom-khong-day-karassn-ks-258b"><h3>Báo Trộm Không Dây Karassn KS-258B</h3></a>
                														<div class="clear"></div>
                														<span class="new-price">950.000 đ</span>
                														<span class="old-price">1.000.000 đ</span>
                													</div>
                												</div>
                											</div>
                											<div class="col-xs-6 col-sm-4 col-lg-3 ">
                												<div class="thumbnail products">
                													<a href="http://fptcamera.vn/bao-trom-thong-minh-karassn-ks-899gsm"><img alt="bao-trom-thong-minh-Karassn-KS-899GSM" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/bao-trom-thong-minh-Karassn-KS-899GSM.jpg"></a>
                													<div class="caption">
                														<a href="http://fptcamera.vn/bao-trom-thong-minh-karassn-ks-899gsm"><h3>Báo Trộm Thông Minh Karassn KS-899GSM</h3></a>
                														<div class="clear"></div>
                														<span class="new-price">3.350.000 đ</span>
                														<span class="old-price">3.500.000 đ</span>
                													</div>
                												</div>
                											</div>
                										</div>
                									</div>
                									<div class="col-md-3 hidden-xs hidden-sm hidden-md">
                										<a class="b_a2" href="http://fptcamera.vn/thiet-bi-an-ninh"><img alt="lap-camera-khuyen-mai-bao-trom" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/lap-camera-khuyen-mai-bao-trom.jpg"></a>

                									</div>
                								</div>
                							</div>
                						</div>
                						<ul class="nav nav-tabs custom-tabs hidden-xs hidden-sm" role="tablist">
                							<li role="presentation" class="active"><a href="http://fptcamera.vn/may-cham-cong">Máy chấm công</a></li>
                							<li class="hidden-xs hidden-sm" role="presentation"><a href="http://fptcamera.vn/500-van-tay">500 Vân tay</a></li>
                							<li class="hidden-xs hidden-sm" role="presentation"><a href="http://fptcamera.vn/3000-van-tay">3000 Vân tay</a></li>
                							<li class="hidden-xs hidden-sm" role="presentation"><a href="http://fptcamera.vn/van-tay-the-tu-cam-ung">Vân tay & Thẻ từ cảm ứng</a></li>
                						</ul>
                						<div class="tab-content hidden-xs hidden-sm">
                							<div role="tabpanel" class="tab-pane active" id="dmsp-may-cham-cong">
                								<div class="row">
                									<div class="col-xs-12 col-lg-9">
                										<div class="row">
                											<div class="col-xs-6 col-sm-4 col-lg-3 ">
                												<div class="thumbnail products">
                													<a href="http://fptcamera.vn/may-cham-cong-van-tay-wise-eye-wse-268"><img alt="may-cham-cong-van-tay-WISE-EYE-WSE-268" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/may-cham-cong-van-tay-WISE-EYE-WSE-268.jpg"></a>
                													<div class="caption">
                														<a href="http://fptcamera.vn/may-cham-cong-van-tay-wise-eye-wse-268"><h3>Máy Chấm Công Vân Tay WISE EYE WSE-268</h3></a>
                														<div class="clear"></div>
                														<span class="new-price">2.600.000 đ</span>
                														<span class="old-price">2.900.000 đ</span>
                													</div>
                												</div>
                											</div>
                											<div class="col-xs-6 col-sm-4 col-lg-3 ">
                												<div class="thumbnail products">
                													<a href="http://fptcamera.vn/may-cham-cong-van-tay-the-wise-eye-808"><img alt="may-cham-cong-van-tay-WISE-EYE-808" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/may-cham-cong-van-tay-WISE-EYE-808.jpg"></a>
                													<div class="caption">
                														<a href="http://fptcamera.vn/may-cham-cong-van-tay-the-wise-eye-808"><h3>Máy Chấm Công Vân Tay + Thẻ WISE EYE 808</h3></a>
                														<div class="clear"></div>
                														<span class="new-price">3.450.000 đ</span>
                														<span class="old-price">3.900.000 đ</span>
                													</div>
                												</div>
                											</div>
                											<div class="col-xs-6 col-sm-4 col-lg-3 ">
                												<div class="thumbnail products">
                													<a href="http://fptcamera.vn/may-cham-cong-van-tay-the-ronald-jack-x628"><img alt="may-cham-cong-van-tay-RONALD-JACK-X628" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/may-cham-cong-van-tay-RONALD-JACK-X628.jpg"></a>
                													<div class="caption">
                														<a href="http://fptcamera.vn/may-cham-cong-van-tay-the-ronald-jack-x628"><h3>Máy Chấm Công Vân Tay - Thẻ RONALD JACK X628</h3></a>
                														<div class="clear"></div>
                														<span class="new-price">3.400.000 đ</span>
                														<span class="old-price">3.900.000 đ</span>
                													</div>
                												</div>
                											</div>
                											<div class="col-xs-6 col-sm-4 col-lg-3 hidden-sm hidden-md">
                												<div class="thumbnail products">
                													<a href="http://fptcamera.vn/may-cham-cong-van-tay-the-ronald-jack-x938-c"><img alt="may-cham-cong-RONALD-JACK-X-938-C" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/may-cham-cong-RONALD-JACK-X-938-C.jpg"></a>
                													<div class="caption">
                														<a href="http://fptcamera.vn/may-cham-cong-van-tay-the-ronald-jack-x938-c"><h3>Máy Chấm Công Vân Tay - Thẻ RONALD JACK X938-C</h3></a>
                														<div class="clear"></div>
                														<span class="new-price">3.550.000 đ</span>
                														<span class="old-price">3.890.000 đ</span>
                													</div>
                												</div>
                											</div>
                										</div>
                									</div>
                									<div class="col-md-3 hidden-xs hidden-sm hidden-md">
                										<a class="b_a2" href="http://fptcamera.vn/may-cham-cong"><img alt="may-cham-cong-van-tay-the-gia-re" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/may-cham-cong-van-tay-the-gia-re.jpg"></a>

                									</div>
                								</div>
                							</div>
                						</div>
                						<ul class="nav nav-tabs custom-tabs hidden-xs hidden-sm" role="tablist">
                							<li role="presentation" class="active"><a href="http://fptcamera.vn/tong-dai-bo-dam">Tổng đài - Bộ đàm</a></li>
                							<li class="hidden-xs hidden-sm" role="presentation"><a href="http://fptcamera.vn/bo-dam-iradio">Bộ đàm IRADIO</a></li>
                							<li class="hidden-xs hidden-sm" role="presentation"><a href="http://fptcamera.vn/bo-dam-kenwood">Bộ đàm KENWOOD</a></li>
                						</ul>
                						<div class="tab-content hidden-xs hidden-sm">
                							<div role="tabpanel" class="tab-pane active" id="dmsp-tong-dai-bo-dam">
                								<div class="row">
                									<div class="col-xs-12 col-lg-9">
                										<div class="row">
                											<div class="col-xs-6 col-sm-4 col-lg-3 ">
                												<div class="thumbnail products">
                													<a href="http://fptcamera.vn/bo-dam-cam-tay-iradio-ir-668"><img alt="bo-dam-cam-tay-IRADIO-IR-668" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/bo-dam-cam-tay-IRADIO-IR-668.jpg"></a>
                													<div class="caption">
                														<a href="http://fptcamera.vn/bo-dam-cam-tay-iradio-ir-668"><h3>Bộ Đàm Cầm Tay IRADIO IR-668</h3></a>
                														<div class="clear"></div>
                														<span class="new-price">800.000 đ</span>
                														<span class="old-price">900.000 đ</span>
                													</div>
                												</div>
                											</div>
                											<div class="col-xs-6 col-sm-4 col-lg-3 ">
                												<div class="thumbnail products">
                													<a href="http://fptcamera.vn/bo-dam-kenwood-tk-3107"><img alt="bo-dam-kenwood-tk-3170" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/bo-dam-kenwood-tk-3107.jpg"></a>
                													<div class="caption">
                														<a href="http://fptcamera.vn/bo-dam-kenwood-tk-3107"><h3>Bộ Đàm KENWOOD TK-3107</h3></a>
                														<div class="clear"></div>
                														<span class="new-price">1.650.000 đ</span>
                														<span class="old-price">1.700.000 đ</span>
                													</div>
                												</div>
                											</div>
                											<div class="col-xs-6 col-sm-4 col-lg-3 ">
                												<div class="thumbnail products">
                													<a href="http://fptcamera.vn/bo-dam-kenwood-tk-2000"><img alt="bo-dam-kenwood-tk-2000" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/bo-dam-kenwood-tk-2000.jpg"></a>
                													<div class="caption">
                														<a href="http://fptcamera.vn/bo-dam-kenwood-tk-2000"><h3>Bộ Đàm KENWOOD TK-2000</h3></a>
                														<div class="clear"></div>
                														<span class="new-price">1.880.000 đ</span>
                														<span class="old-price">2.100.000 đ</span>
                													</div>
                												</div>
                											</div>
                											<div class="col-xs-6 col-sm-4 col-lg-3 hidden-sm hidden-md">
                												<div class="thumbnail products">
                													<a href="http://fptcamera.vn/bo-dam-kenwood-tk-3102s"><img alt="bo-dam-kenwood-tk-3102s" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/bo-dam-kenwood-tk-3102s.jpg"></a>
                													<div class="caption">
                														<a href="http://fptcamera.vn/bo-dam-kenwood-tk-3102s"><h3>Bộ Đàm KENWOOD TK-3102S</h3></a>
                														<div class="clear"></div>
                														<span class="new-price">1.200.000 đ</span>
                														<span class="old-price">1.300.000 đ</span>
                													</div>
                												</div>
                											</div>
                										</div>
                									</div>
                									<div class="col-md-3 hidden-xs hidden-sm hidden-md">
                										<a class="b_a2" href="http://fptcamera.vn/bo-dam-kenwood"><img alt="bo-dam-tong-dai-gia-re-fpt" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/bo-dam-tong-dai-gia-re-fpt.jpg"></a>

                									</div>
                								</div>
                							</div>
                						</div>
                						<ul class="nav nav-tabs custom-tabs hidden-xs hidden-sm" role="tablist">
                							<li role="presentation" class="active"><a href="http://fptcamera.vn/thiet-bi-van-phong">Thiết bị văn phòng</a></li>
                							<li class="hidden-xs hidden-sm" role="presentation"><a href="http://fptcamera.vn/phu-kien-may-chieu">Phụ kiện máy chiếu</a></li>
                							<li class="hidden-xs hidden-sm" role="presentation"><a href="http://fptcamera.vn/may-chieu-sony">Máy chiếu SONY</a></li>
                						</ul>
                						<div class="tab-content hidden-xs hidden-sm">
                							<div role="tabpanel" class="tab-pane active" id="dmsp-thiet-bi-van-phong">
                								<div class="row">
                									<div class="col-xs-12 col-lg-9">
                										<div class="row">
                											<div class="col-xs-6 col-sm-4 col-lg-3 ">
                												<div class="thumbnail products">
                													<a href="http://fptcamera.vn/may-chieu-sony-vpl-dx122"><img alt="may-chieu-sony-VPL-DX-122" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/may-chieu-sony-VPL-DX-122.jpg"></a>
                													<div class="caption">
                														<a href="http://fptcamera.vn/may-chieu-sony-vpl-dx122"><h3>Máy Chiếu SONY VPL-DX122</h3></a>
                														<div class="clear"></div>
                														<span class="new-price">11.400.000 đ</span>
                														<span class="old-price">11.800.000 đ</span>
                													</div>
                												</div>
                											</div>
                											<div class="col-xs-6 col-sm-4 col-lg-3 ">
                												<div class="thumbnail products">
                													<a href="http://fptcamera.vn/may-chieu-sony-vpl-dx-102"><img alt="may-chieu-sony-VPL-DX-102" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/may-chieu-sony-VPL-DX-102.jpg"></a>
                													<div class="caption">
                														<a href="http://fptcamera.vn/may-chieu-sony-vpl-dx-102"><h3>Máy Chiếu SONY VPL-DX 102</h3></a>
                														<div class="clear"></div>
                														<span class="new-price">9.200.000 đ</span>
                														<span class="old-price">9.500.000 đ</span>
                													</div>
                												</div>
                											</div>
                											<div class="col-xs-6 col-sm-4 col-lg-3 ">
                												<div class="thumbnail products">
                													<a href="http://fptcamera.vn/man-chieu-treo-tuong-cac-loai"><img alt="man-may-chieu-gia-re" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/man-may-chieu-gia-re.jpg"></a>
                													<div class="caption">
                														<a href="http://fptcamera.vn/man-chieu-treo-tuong-cac-loai"><h3>Màn Chiếu Treo tường Các Loại</h3></a>
                														<div class="clear"></div>
                														<span class="new-price">Liên hệ</span>
                														<span class="old-price"></span>
                													</div>
                												</div>
                											</div>
                										</div>
                									</div>
                									<div class="col-md-3 hidden-xs hidden-sm hidden-md">
                										<a class="b_a2" href="http://fptcamera.vn/thiet-bi-van-phong"><img alt="may-chieu-sony-chinh-hang" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/may-chieu-sony-chinh-hang.jpg"></a>

                									</div>
                								</div>
                							</div>
                						</div>
                					</div>
                					<div class="col-xs-12 hidden-xs hidden-sm">
                						<div class="text-header">Camera các hãng</div>
                						<div class="galleryslider">
                							<ul class="slides">
                								<li>
                									<a href="http://fptcamera.vn/camera-vantech"><img alt="Camera Vantech Giá Rẻ" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/camera-vantech.jpg"/></a>
                								</li>
                								<li>
                									<a href="http://fptcamera.vn/camera-benco"><img alt="Camera Benco Giá Rẻ" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/camera-hang-benco1.jpg"/></a>
                								</li>
                								<li>
                									<a href="http://fptcamera.vn/camera-dahua"><img alt="Camera Dahua Đài Loan" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/camera-dahua.jpg"/></a>
                								</li>
                								<li>
                									<a href="http://fptcamera.vn/camera-questek"><img alt="Camera Questek Việt Nam" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/camera-questek.jpg"/></a>
                								</li>
                								<li>
                									<a href="http://fptcamera.vn/camera-hikvision"><img alt="Camera HIKVISION" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/camera-hikvision-dai-loan.jpg"/></a>
                								</li>
                								<li>
                									<a href="http://fptcamera.vn/camera-spyeye"><img alt="Camera Spyeye" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/camera-spyeye-gia-re1.jpg"/></a>
                								</li>
                								<li>
                									<a href="http://fptcamera.vn/camera-avtech"><img alt="Camera AVTECH ĐÀI LOAN" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/camera-samsung.jpg"/></a>
                								</li>
                								<li>
                									<a href="http://fptcamera.vn/camera-kce"><img alt="Camera KCE HÀN QUỐC" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/camera-KCE-han-quoc.jpg"/></a>
                								</li>
                								<li>
                									<a href="http://fptcamera.vn/camera-kce"><img alt="Camera SAMSUNG HÀN QUỐC" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/camera-hang-samsung.jpg"/></a>
                								</li>
                								<div class="clear"></div>
                							</ul>
                							<div class="clear"></div>
                						</div>
                					</div>
                					<div class="col-xs-12 hidden-xs hidden-sm">
                						<div class="text-header">Chấp nhận thanh toán</div>
                						<img style="width:100%;margin:10px 0;" alt="Chấp nhận thanh toán" src="http://fptcamera.vn/resources/ui_images/client/background/payments.png">
                					</div>
                				</div>
                			</div>
                		</div>
                	</div>

                	<!-- Bottom end here -->
                	<?php echo $__env->make("index.bottom", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                	<?php echo $__env->make("index.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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

			$('#prd-cate-list .main-page > ul > li').hover(function () {
				$(this).children('ul').stop(true, true).delay(200).fadeIn(500);
			}, function () {
				$(this).children('ul').stop(true, true).fadeOut(500);
			});

		</script>


		<!-- Subiz -->
		<script type='text/javascript'>window._sbzq||function(e){e._sbzq=[];var t=e._sbzq;t.push(["_setAccount",50848]);var n=e.location.protocol=="https:"?"https:":"http:";var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//static.subiz.com/public/js/loader.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)}(window);</script>


	</body>
	</html>