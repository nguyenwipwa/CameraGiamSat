<table id="cart" class="hidden-xs hidden-sm">
	
	<form id="formThanhToan" action="<?php echo e(route('payment1')); ?>" method="post" accept-charset="utf-8">
		<tbody>
			<input type="hidden" name="id_user" value="<?php echo e($user->id); ?>">
			<tr>
				<td colspan="2">
					<span class="cart_3_header">Hoàn tất đơn hàng</span>
					<input id="code_order" type="hidden" name="code_order" value="MDH_<?php echo e(time()); ?>">
				</td>
			</tr>
			<tr>
				<td style="width:40%;">
					<?php echo e(csrf_field()); ?>

					<span class="circle">1</span>
					<span style="font-weight:bold;color:#555;">Thông tin thanh toán</span>
					<div class="form_label_input">
						<label style="font-weight:bold" for="fullname">Khách hàng <span class="required"> * </span></label>
						<span><input class="form-control" type="text" name="fullname" value="<?php echo e($user->name); ?>" /></span>
					</div>
					<div class="form_label_input">
						<label style="font-weight:bold" for="phone">Điện thoại  <span class="required"> * </span></label>
						<span><input class="form-control" type="text" name="phone" value="<?php echo e($user->phone_number); ?>"  /></span>
					</div>
					<div class="form_label_input">
						<label style="font-weight:bold" for="email">Email <span class="required"> * </span></label>
						<span><input class="form-control" type="text" name="email" value="<?php echo e($user->email); ?>"  /></span>
					</div>
					<div class="form_label_input"><label style="font-weight:bold" for="address">Địa chỉ <span class="required"> * </span></label>
						<span>
							<input class="form-control" type="text" name="address" value="<?php echo e($user->address->address); ?>"  /></span>
						</div>
						<div class="form_label_input"><label style="font-weight:bold" for="address">Thành phố <span class="required"> * </span></label>
							<span>
								<input class="form-control" type="text" name="thanhpho" value="<?php echo e($user->address->thanhpho->name); ?>"  /></span>
							</div>
							<span class="circle">2</span>
							<span style="font-weight:bold;color:#555;">Địa chỉ giao hàng </span>
							<div class="form_label_input">
								<label style="font-weight:bold;vertical-align:top;" for="ship_address">Địa chỉ <span class="required"> * </span></label>
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
												<input id="key_sales_off"  class="input_keyoff form-control" style="display: none;"  name="key_sales_off" placeholder="Nhập mã giảm giá">
											</td>
											<td class="text_right" colspan="1">
												<input onclick="ocChoLang()" id="btnApdung" class="input_keyoff" style="display: none;" type="button" name="" value="Áp dụng">
											</td>
										</tr>
										<tr id="giamgia" class="giamgia" style="display: none;">
											<td class="text_right" colspan="1">
												<strong>Tiền được giảm:</strong>
											</td>
											<td class="text_right" colspan="1">
												<span id="phamTramGiam" class="phamTramGiam" style="display:block;color:green;font-weight:bold;"></span>
											</td>
											<td class="text_right" colspan="1">
												<span id="tiengiam" class="tiengiam" style="display:block;color:blue;font-weight:bold;"><?php echo e(Cart::total()); ?> VNĐ</span>
											</td>
										</tr>
										<tr>
											<td class="text_right" colspan="2">
												<strong>Tổng cộng:</strong>
											</td>
											<td class="text_right" colspan="2">
												<span id="tongtien" class="tongtien" style="display:block;color:red;font-weight:bold;"><?php echo e(Cart::total()); ?> VNĐ</span>
											</td>
										</tr>
									</tbody>
								</table>
								<input id="addOrder" type="submit" name="submit_cart" value="Mua hàng" class="btn3" style="float:right">
								<a id="nganluong" class="nganluong" target="_blank" href="https://www.nganluong.vn/button_payment.php?receiver=trongitnlu@gmail.com&product_name=camera&price=200&return_url=google.com&comments='ngoncom'"><img src="https://www.nganluong.vn/css/newhome/img/button/pay-lg.png"border="0" /></a>
								<a id="apaypal" href="javascript::void(0)" onclick="openRequestedPopup('<?php echo e(url('gio-hang/paypal')); ?>/MDH_<?php echo e(time()); ?>/<?php echo e(Cart::total1()); ?>')">
									<img src="https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif" align="left" style="margin-right:7px;">
								</a>
							</td>
						</tr>
						<tr class="no-border">
							<td colspan="7">
								<input class="float_left btn2" type="button" value="Trở về giỏ hàng" onclick="location.href='<?php echo e(route('cartDetail')); ?>'">
							</td>
						</tr>
					</tbody>
				</form>
				<script type="text/javascript">
				var windowObjectReference = null; // global variable
				function openRequestedPopup(strUrl) {

					if(windowObjectReference == null || windowObjectReference.closed) {
						windowObjectReference = window.open(strUrl, 'Thanh Toán',
							"status=yes,toolbar=no,menubar=no,location=yes");
						windowObjectReference.focus();
					};
				}
			</script>
		</table>

		<table id="cart" class="hidden-md hidden-lg">
			<tbody>
				<form id="formThanhToanTiny" action="" method="post" accept-charset="utf-8"><tr>
					<td>
						<span class="cart_3_header">Hoàn tất đơn hàng</span>
						<input type="hidden" name="id_user" value="<?php echo e($user->id); ?>">
						<input id="code_order1" type="hidden" name="code_order" value="MDH_<?php echo e(time()); ?>">
					</td>
				</tr>
				<tr>
					<td style="width:40%;">
						<?php echo e(csrf_field()); ?>

						<span class="circle">1</span>
						<span style="font-weight:bold;color:#555;">Thông tin thanh toán</span>
						<div class="form_label_input">
							<label style="font-weight:bold" for="fullname">Khách hàng <span class="required"> * </span></label>
							<span><input class="form-control" type="text" name="fullname" value="<?php echo e($user->name); ?>" /></span>
						</div>
						<div class="form_label_input">
							<label style="font-weight:bold" for="phone">Điện thoại <span class="required"> * </span></label>
							<span><input class="form-control" type="text" name="phone" value="<?php echo e($user->phone_number); ?>"  /></span>
						</div>
						<div class="form_label_input">
							<label style="font-weight:bold" for="email">Email <span class="required"> * </span></label>
							<span><input class="form-control" type="text" name="email" value="<?php echo e($user->email); ?>"  /></span>
						</div>
						<div class="form_label_input"><label style="font-weight:bold" for="address">Địa chỉ <span class="required"> * </span></label>
							<span>
								<input class="form-control" type="text" name="address" value="<?php echo e($user->address->address); ?>"  /></span>
							</div>
							<div class="form_label_input"><label style="font-weight:bold" for="address">Thành phố <span class="required"> * </span></label>
								<span>
									<input class="form-control" type="text" name="thanhpho" value="<?php echo e($user->address->thanhpho->name); ?>"  /></span>
								</div>
								<span class="circle">2</span>
								<span style="font-weight:bold;color:#555;">Địa chỉ giao hàng</span>
								<div class="form_label_input">
									<label style="font-weight:bold;vertical-align:top;" for="ship_address">Địa chỉ <span class="required"> * </span></label>
									<span>
										<input class="form-control" type="text" name="ship_address" value="<?php echo e($user->address->address); ?>, <?php echo e($user->address->thanhpho->name); ?>"  /></span>
									</div>
								</td>
							</tr>
							<tr>
								<td style="vertical-align:top">
									<span class="circle">3</span><span style="font-weight:bold;color:#555;">Xác nhận đơn hàng</span>

									<table id="cart" class="inside">
										<tbody>
											<?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<tr>
												<td class="text_center">
													<img class="cart_img" src="<?php echo e(asset('public/images/san-pham/'.$row->options->img)); ?>">
												</td>
											</tr>
											<tr>
												<td><b><?php echo e($row->name); ?></b></td>
											</tr>
											<tr>
												<td class="text_right">
													<span style="display:block;color:red;font-weight:bold;margin: 0 0 5px 0;"><?php echo e(number_format($row->price)); ?> VNĐ</span>
													<span>Số lượng: <?php echo e($row->qty); ?></span>
												</td>
											</tr>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											<tr>
												<td class="text_right" colspan="1">
													<strong>Mã giảm giá</strong>
												</td>
											</tr>
											<tr>
												<td class="text_right" colspan="1">
													<a href="javascript::void(0)" onclick="$('.input_keyoff').css('display', 'block'); $(this).hide()"> Áp mã giảm giá </a>
													<input id="key_sales_off1"  class="input_keyoff form-control" style="display: none;"  name="key_sales_off" placeholder="Nhập mã giảm giá">
												</td>
											</tr>
											<tr>
												<td class="text_right" colspan="1">
													<input onclick="formTiny()" id="btnApdung" class="input_keyoff" style="display: none;" type="button" name="" value="Áp dụng">
												</td>
											</tr>
											<tr id="giamgia" class="giamgia" style="display: none;">
												<td class="text_right" colspan="1">
													<strong>Tiền được giảm</strong>
												</td>
											</tr>
											<tr class="giamgia" style="display: none;">
												<td class="text_right" colspan="1">
													<span id="phamTramGiam" class="phamTramGiam" style="display:block;color:green;font-weight:bold;"></span>
												</td>
											</tr>
											<tr class="giamgia" style="display: none;">
												<td class="text_right" colspan="1">
													<span id="tiengiam" class="tiengiam" style="display:block;color:blue;font-weight:bold;"><?php echo e(Cart::total()); ?> VNĐ</span>
												</td>
											</tr>
											<tr>
												<td class="text_right" colspan="2"><strong>Tổng cộng:</strong></td>
											</tr>
											<tr>
												<td class="text_right" colspan="2">
													<span id="tongtien" class="tongtien"  style="display:block;color:red;font-weight:bold;"><?php echo e(Cart::total()); ?> VNĐ</span>
												</td>
											</tr>
										</tbody></table>
										<a id="nganluong" class="nganluong" target="_blank" href="https://www.nganluong.vn/button_payment.php?receiver=trongitnlu@gmail.com&product_name=camera&price=200&return_url=google.com&comments='ngoncom'"><img src="https://www.nganluong.vn/css/newhome/img/button/pay-lg.png"border="0" /></a>
										<a id="apaypal" href="javascript::void(0)" onclick="openRequestedPopup('<?php echo e(url('gio-hang/paypal')); ?>/MDH_<?php echo e(time()); ?>/<?php echo e(Cart::total1()); ?>')">
											<img src="https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif" align="left" style="margin-right:7px;">
										</a>
										<input id="" type="submit" name="submit_cart" value="Mua hàng" class="btn3" style="float:right">                                                                            
									</tr>
									<tr class="no-border">
										<td colspan="7">
											<input class="float_left btn2" type="button" value="Trở về giỏ hàng" onclick="location.href='<?php echo e(route('cartDetail')); ?>'">
										</td>
									</tr>
								</form>

							</tbody>
						</table>
						<script type="text/javascript">
							var tenKhacHang = $("input[name='fullname']").val()+"\n"+ $("input[name='phone']").val();
							var priceNganLuong =  <?php echo e(Cart::total1()); ?>;
							var code_order = $('#code_order').val();

							var linka = "https://www.nganluong.vn/button_payment.php?receiver=trongitnlu@gmail.com&product_name="+code_order+"&price="+priceNganLuong+"&return_url=google.com&comments="+tenKhacHang+"";
							$(document).ready(function(){
								$('.nganluong').attr('href', linka);
								$('#HD_Paypal').val(code_order);
								$('#pricePaypal').val(priceNganLuong);
							});

							function ocChoLang(){
								$.ajax({
									url: "<?php echo e(route('get.sale.off')); ?>",
									type:'POST',
									data: {
						// 'data': $('#formThanhToan').serialize(),
						'key': $('#key_sales_off').val(),
						'_token': $('meta[name="csrf-token"]').attr('content'),
					},
					success: function(data) {
						if(data.status=="error"){
							alert(data.message);
							// location.reload();
						}else{
							// alert(data.status);
							$('.giamgia').css('display', 'table-row');
							var tien = (data.message.percent*0.01) * <?php echo e(Cart::total1()); ?>;
							$('.phamTramGiam').html("-"+data.message.percent + "%");
							$('.tiengiam').html("-" + tien.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + " VNĐ");
							$('.tongtien').html((<?php echo e(Cart::total1()); ?> - tien).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + " VNĐ");
							var linka = "https://www.nganluong.vn/button_payment.php?receiver=trongitnlu@gmail.com&product_name="+code_order+"&price="+(<?php echo e(Cart::total1()); ?> - tien)+"&return_url=google.com&comments="+tenKhacHang+"";
							$('.nganluong').attr('href', linka);
							$('#pricePaypal').val(<?php echo e(Cart::total1()); ?> - tien);
							$('#apaypal').attr('onclick', "openRequestedPopup('<?php echo e(url('gio-hang/paypal')); ?>/"+code_order+"/"+(<?php echo e(Cart::total1()); ?> - tien)+"')");
						}
					}
				});
							}
							function formTiny(){
								$.ajax({
									url: "<?php echo e(route('get.sale.off')); ?>",
									type:'POST',
									data: {
						// 'data': $('#formThanhToan').serialize(),
						'key': $('#key_sales_off1').val(),
						'_token': $('meta[name="csrf-token"]').attr('content'),
					},
					success: function(data) {
						if(data.status=="error"){
							alert(data.message);
							// location.reload();
						}else{
							// alert(data.status);
							$('.giamgia').css('display', 'table-row');
							var tien = (data.message.percent*0.01) * <?php echo e(Cart::total1()); ?>;
							$('.phamTramGiam').html("-"+data.message.percent + "%");
							$('.tiengiam').html("-" + tien.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + " VNĐ");
							$('.tongtien').html((<?php echo e(Cart::total1()); ?> - tien).toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") + " VNĐ");
							var linka = "https://www.nganluong.vn/button_payment.php?receiver=trongitnlu@gmail.com&product_name="+code_order+"&price="+(<?php echo e(Cart::total1()); ?> - tien)+"&return_url=google.com&comments="+tenKhacHang+"";
							$('.nganluong').attr('href', linka);
						}
					}
				});
							}
							$("#formThanhToan").submit(function(e){
								e.preventDefault();
								$.ajax({
									url: "<?php echo e(route('payment1')); ?>",
									type:'POST',
									data: $('#formThanhToan').serialize() +"&key_sales_off=" + $("#key_sales_off").val(),
									success: function(data) {
										if($.isEmptyObject(data.error)){
											alert(data.message);
											location.href='<?php echo e(url('/')); ?>';
										}else{
											alert(data.message);
										}
									}
								});
							}); 
							$("#formThanhToanTiny").submit(function(e){
								e.preventDefault();
								$.ajax({
									url: "<?php echo e(route('payment1')); ?>",
									type:'POST',
									data: $('#formThanhToanTiny').serialize() +"&key_sales_off=" + $("#key_sales_off1").val(),
									success: function(data) {
										if($.isEmptyObject(data.error)){
											alert(data.message);
											location.href='<?php echo e(url('/')); ?>';
										}else{
											alert(data.message);
										}
									}
								});
							}); 
						</script>