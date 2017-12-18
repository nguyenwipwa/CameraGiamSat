
@extends('layouts.subClient')
@section('script')
<link rel="stylesheet" type="text/css" href="{{asset('public/stylesheets/box.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('public/stylesheets/member.css')}}" />
@endsection
@section('content')
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
									<div class="titleL"><h1>Lịch sử đơn hàng</h1></div>
									<div class="titleR"></div>
									<div class="clear"></div>
								</div>
								<div class="mid-content">
									<div id="Member">
										@foreach($listOrder as $key => $e)
										<div>
											<a type="button" href="javascript::void(0)" class="lead" data-toggle="collapse" data-target="#{{ $e->code_order }}">{{ $key+1 }}. {{ $e->code_order }} ({{ $e->created_at }})</a>
										</div>
										<div class="clear"></div>
										<div id="{{ $e->code_order }}" class="collapse">
											<div><p class=""><strong >Trạng thái:</strong> <span class="label label-{{ $e->getProcess()->id==1 ? 'info' : 'success' }}">{{ $e->getProcess()->process }}</span></p></div>
											<table id="cart" class="inside">
												<tbody>
													<tr>
														<td colspan="2" class="text_center">Sản phẩm</td>
														<td class="text_right">Giá</td>
													</tr>
													@foreach($e->getListOrderDetail() as $orderDetail)
													@php
													$product = $orderDetail->getProduct();
													@endphp
													<tr>
														<td class="text_center">
															<img class="cart_img" src="{{ asset('public/images/san-pham/'.$product->img) }}">
														</td>
														<td>{{ $product->name }}</td>
														<td class="text_right">
															<span style="display:block;color:red;font-weight:bold;margin: 0 0 5px 0;">{{ number_format($orderDetail->unit_price) }} VNĐ</span>
															<span>Số lượng: {{ $orderDetail->quatity }}</span>
														</td>
													</tr>
													@endforeach
													<tr>
														<td class="text_right" colspan="1">
															<strong>Mã giảm giá:</strong>
														</td>
														<td class="text_right" colspan="1">
															{{ $e->key_sales_off }} {{ $e->getSalesOff()==null ? '' : '(-'.$e->getSalesOff()->percent.'%)' }}
														</td>
													</tr>
													<tr>
														<td class="text_right" colspan="2">
															<strong>Tổng cộng:</strong>
														</td>
														<td class="text_right" colspan="2">
															<span id="tongtien" class="tongtien" style="display:block;color:red;font-weight:bold;">{{ number_format($e->total) }} VNĐ</span>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										@endforeach
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
		@endsection