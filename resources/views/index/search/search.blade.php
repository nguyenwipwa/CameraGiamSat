
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

	@include("../../.link.index")

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
	   </script>        <link rel="stylesheet" type="text/css" href="http://fptcamera.vn/resources/stylesheets/client/flexslider.css" />
	   <link rel="stylesheet" type="text/css" href="http://fptcamera.vn/resources/stylesheets/client/social-likes_birman.css" />
	   <script src="http://fptcamera.vn/resources/js/client/jquery.flexslider-min.js"></script>
	   <script src="http://fptcamera.vn/resources/js/client/social-likes.min.js"></script>
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
							<div class="col-xs-12 col-md-9">
								<div class="article_header my-breadcrumb">
									<ol class="breadcrumb"><li><a href="http://fptcamera.vn/">Trang chủ</a></li><li><a href="http://fptcamera.vn/tim-kiem?t=m%C3%A1y&submit_search=T%C3%ACm+ki%E1%BA%BFm">Tìm kiếm sản phẩm</a></li></ol>
								</div>
								<div class="clear"></div>
								<div class="description2">
								</div>
								<div class="product_list">
									<div class="row">
										<div class="col-xs-6 col-sm-4 col-lg-3">
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
										<div class="col-xs-6 col-sm-4 col-lg-3">
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
										<div class="col-xs-6 col-sm-4 col-lg-3">
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
										<div class="col-xs-6 col-sm-4 col-lg-3">
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
										<div class="col-xs-6 col-sm-4 col-lg-3">
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
										<div class="col-xs-6 col-sm-4 col-lg-3">
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
									</div>
								</div>
							</div>
							<div class="col-md-3 hidden-xs hidden-sm">
								<div class="header" style="margin-top:0;">
									<span>Sản phẩm bán chạy</span>
								</div>
								<div class="media products">
									<div class="media-left">
										<a href="http://fptcamera.vn/camera-ip-wifi-khong-day-vantech-vt-6300a">
											<img class="media-object" alt="Camera IP Wifi Không Dây VANTECH VT-6300A" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/camera-ip-wifi-khong-day-vantech-vt-6300A.jpg">
										</a>
									</div>
									<div class="media-body">
										<a href="http://fptcamera.vn/camera-ip-wifi-khong-day-vantech-vt-6300a">
											<h4 class="media-heading">Camera IP Wifi Không Dây VANTECH VT-6300A</h4>
										</a>
										<span class="media-price">1.250.000 đ</span>
									</div>
								</div>
								<div class="media products">
									<div class="media-left">
										<a href="http://fptcamera.vn/lap-dat-camera-gia-re-bo-1-den-8-mat">
											<img class="media-object" alt="Lắp đặt camera giá rẻ bộ 1 đến 8 mắt" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/lap-dat-camera-gia-re-benco.jpg">
										</a>
									</div>
									<div class="media-body">
										<a href="http://fptcamera.vn/lap-dat-camera-gia-re-bo-1-den-8-mat">
											<h4 class="media-heading">Lắp đặt camera giá rẻ bộ 1 đến 8 mắt</h4>
										</a>
										<span class="media-price">2.199.000 đ</span>
									</div>
								</div>
								<div class="media products">
									<div class="media-left">
										<a href="http://fptcamera.vn/lap-2-camera-hikvision">
											<img class="media-object" alt="lap-2-camera-hikvision" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/lap-2-camera-hikvision.jpg">
										</a>
									</div>
									<div class="media-body">
										<a href="http://fptcamera.vn/lap-2-camera-hikvision">
											<h4 class="media-heading">Lắp 2 Camera HIKVISION</h4>
										</a>
										<span class="media-price">4.299.000 đ</span>
									</div>
								</div>
								<div class="media products">
									<div class="media-left">
										<a href="http://fptcamera.vn/lap-dat-camera-gia-re">
											<img class="media-object" alt="lap-dat-camera-gia-re-ha-noi" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/lap-dat-camera-gia-re-ha-noi.jpg">
										</a>
									</div>
									<div class="media-body">
										<a href="http://fptcamera.vn/lap-dat-camera-gia-re">
											<h4 class="media-heading">Lắp đặt camera giá rẻ</h4>
										</a>
										<span class="media-price">2.199.000 đ</span>
									</div>
								</div>
								<div class="media products">
									<div class="media-left">
										<a href="http://fptcamera.vn/lap-dat-tron-bo-4-camera-gia-re">
											<img class="media-object" alt="Lắp Đặt Trọn Bộ 4 Camera Giá Rẻ" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/lap-dat-tron-bo-4-camera-gia-re.jpg">
										</a>
									</div>
									<div class="media-body">
										<a href="http://fptcamera.vn/lap-dat-tron-bo-4-camera-gia-re">
											<h4 class="media-heading">Lắp Đặt Trọn Bộ 4 Camera Giá Rẻ</h4>
										</a>
										<span class="media-price">4.899.000 đ</span>
									</div>
								</div>
								<div class="media products">
									<div class="media-left">
										<a href="http://fptcamera.vn/lap-dat-tron-bo-2-camera-hd">
											<img class="media-object" alt="Lắp đặt trọn bộ 2 camera HD" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/lap-dat-tron-bo-2-camera-AHD.jpg">
										</a>
									</div>
									<div class="media-body">
										<a href="http://fptcamera.vn/lap-dat-tron-bo-2-camera-hd">
											<h4 class="media-heading">Lắp đặt Trọn Bộ 2 Camera HD</h4>
										</a>
										<span class="media-price">4.299.000 đ</span>
									</div>
								</div>
								<div class="clear"></div>
								<div class="header">
									<span>Tin tức mới</span>
								</div>
								<div class="media news longer">
									<div class="media-left">
										<a href="http://fptcamera.vn/tin-tuc/lap-dat-camera">
											<img class="media-object" alt="Lắp đặt camera" src="http://fptcamera.vn/resources/uploads/images/automatic/tin-tuc/lap-dat-camera.jpg">
										</a>
									</div>
									<div class="media-body">
										<a href="http://fptcamera.vn/tin-tuc/lap-dat-camera">
											<h4 class="media-heading longer"><i class="fa fa-angle-right hidden-lg hidden-md">&nbsp;</i>Lắp đặt camera</h4>
										</a>
									</div>
								</div>
								<div class="media news longer">
									<div class="media-left">
										<a href="http://fptcamera.vn/tin-tuc/cach-tat-camera">
											<img class="media-object" alt="Cách tắt camera trong nhà và phòng chống" src="http://fptcamera.vn/resources/uploads/images/automatic/tin-tuc/trom-tat-camera-giam-sat.jpg">
										</a>
									</div>
									<div class="media-body">
										<a href="http://fptcamera.vn/tin-tuc/cach-tat-camera">
											<h4 class="media-heading longer"><i class="fa fa-angle-right hidden-lg hidden-md">&nbsp;</i>cách tắt camera</h4>
										</a>
									</div>
								</div>
								<div class="media news longer">
									<div class="media-left">
										<a href="http://fptcamera.vn/tin-tuc/lap-dat-camera-giam-sat-tai-soc-son">
											<img class="media-object" alt="Lắp đặt camera giám sát tại Sóc Sơn" src="http://fptcamera.vn/resources/uploads/images/automatic/tin-tuc/lap-dat-camera-truong-hoc-mai-dinh-soc-son.jpg">
										</a>
									</div>
									<div class="media-body">
										<a href="http://fptcamera.vn/tin-tuc/lap-dat-camera-giam-sat-tai-soc-son">
											<h4 class="media-heading longer"><i class="fa fa-angle-right hidden-lg hidden-md">&nbsp;</i>Lắp đặt camera giám sát tại Sóc Sơn</h4>
										</a>
									</div>
								</div>
								<div class="media news longer">
									<div class="media-left">
										<a href="http://fptcamera.vn/tin-tuc/camera-quan-sat-khi-mat-dien">
											<img class="media-object" alt="camera quan sat khi mat dien" src="http://fptcamera.vn/resources/uploads/images/automatic/tin-tuc/camera-bi-tat-dien.jpg">
										</a>
									</div>
									<div class="media-body">
										<a href="http://fptcamera.vn/tin-tuc/camera-quan-sat-khi-mat-dien">
											<h4 class="media-heading longer"><i class="fa fa-angle-right hidden-lg hidden-md">&nbsp;</i>camera quan sat khi mat dien</h4>
										</a>
									</div>
								</div>
								<div class="media news longer">
									<div class="media-left">
										<a href="http://fptcamera.vn/tin-tuc/lay-du-lieu-tu-o-cung-camera">
											<img class="media-object" alt="lấy dữ liệu từ ổ cứng camera" src="http://fptcamera.vn/resources/uploads/images/automatic/tin-tuc/lam-sao-de-lay-du-lieu-tu-o-ung-camera.jpg">
										</a>
									</div>
									<div class="media-body">
										<a href="http://fptcamera.vn/tin-tuc/lay-du-lieu-tu-o-cung-camera">
											<h4 class="media-heading longer"><i class="fa fa-angle-right hidden-lg hidden-md">&nbsp;</i>lấy dữ liệu từ ổ cứng camera</h4>
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
											<h4 class="media-heading longer"><i class="fa fa-angle-right hidden-lg hidden-md">&nbsp;</i>​lam sao de biet camera dang hoat dong</h4>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Bottom end here -->
			@include('../../index.bottom')
			@include('../../index.footer')
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