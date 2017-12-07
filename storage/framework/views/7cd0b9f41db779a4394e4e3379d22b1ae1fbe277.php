<?php $__env->startSection('script'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/stylesheets/product.css')); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/stylesheets/shopping.css')); ?>" />
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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
				<form action="<?php echo e(route('payment1')); ?>" method="post" accept-charset="utf-8">
					<tbody>
						<input type="hidden" name="id_user" value="<?php echo e($user->id); ?>">
						<tr>
							<td colspan="2">
								<span class="cart_3_header">Hoàn tất đơn hàng</span>
							</td>
						</tr>
						<tr>
							<td style="width:40%;">
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
													<tr>
														<td class="text_right" colspan="1">
															<strong>Mã giảm giá:</strong>
														</td>
														<td class="text_right" colspan="1">
															<a href="javascript::00" onclick="$('.input_keyoff').css('display', 'block'); $(this).hide()"> Áp mã giảm giá </a>
															<input id="key_sales_off" class="input_keyoff form-control" style="display: none;"  name="key_off" placeholder="Nhập mã giảm giá">
														</td>
														<td class="text_right" colspan="1">
															<input onclick="ocChoLang()" id="btnApdung" class="input_keyoff" style="display: none;" type="button" name="" value="Áp dụng">
														</td>
													</tr>
													<tr id="giamgia" style="display: none;">
														<td class="text_right" colspan="1">
															<strong>Tiền được giảm:</strong>
														</td>
														<td class="text_right" colspan="1">
															<span id="phamTramGiam" style="display:block;color:green;font-weight:bold;"></span>
														</td>
														<td class="text_right" colspan="1">
															<span id="tiengiam" style="display:block;color:blue;font-weight:bold;"><?php echo e(Cart::total()); ?> VNĐ</span>
														</td>
													</tr>
													<tr>
														<td class="text_right" colspan="2">
															<strong>Tổng cộng:</strong>
														</td>
														<td class="text_right" colspan="2">
															<span id="tongtien" style="display:block;color:red;font-weight:bold;"><?php echo e(Cart::total()); ?> VNĐ</span>
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
							</form>
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
		<script type="text/javascript">
			function ocChoLang(){
				// alert($('meta[name="csrf-token"]').attr('content'));
				$.ajax({
					url: "<?php echo e(route('get.sale.off')); ?>",
					type:'POST',
					data: {
						'key': $('#key_sales_off').val(),
						'_token': $('meta[name="csrf-token"]').attr('content'),
					},
					success: function(data) {
						if(data.status=="error"){
							alert(data.message);
							// location.reload();
						}else{
							// alert(data.status);
							$('#giamgia').css('display', 'table-row');
							var tien = (data.message.percent*0.01) * <?php echo e(Cart::total1()); ?>;
							$('#phamTramGiam').html("-"+data.message.percent + "%");
							$('#tiengiam').html("-" + tien.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + " VNĐ");
							$('#tongtien').html((<?php echo e(Cart::total1()); ?> - tien).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + " VNĐ");
						}
					}
				});
			}
		</script>
		<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.subClient', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>