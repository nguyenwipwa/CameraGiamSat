<?php $__env->startSection('script'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/stylesheets/box.css')); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/stylesheets/member.css')); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-xs-12 pad-btm">
			<div class="row">
				<div class="col-xs-12 col-md-9">
					<div class="article_header my-breadcrumb">
						<ol class="breadcrumb"><li><a href="">Lịch sử đơn hàng</a></li></ol>
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
										<?php $__empty_1 = true; $__currentLoopData = $listOrder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
										<div>
											<a type="button" href="javascript::void(0)" class="lead" data-toggle="collapse" data-target="#<?php echo e($e->code_order); ?>"><?php echo e($key+1); ?>. <?php echo e($e->code_order); ?> (<?php echo e($e->created_at); ?>)</a>
										</div>
										<div class="clear"></div>
										<div id="<?php echo e($e->code_order); ?>" class="collapse">
											<div><p class=""><strong >Trạng thái:</strong> <span class="label label-<?php echo e($e->getProcess()->info); ?>"><?php echo e($e->getProcess()->process); ?></span>
												<?php if($e->getProcess()->id == 1): ?>
												<a class="btn btn-danger" onclick="showDialog('<?php echo e($e->code_order); ?>')" > Hủy đơn hàng </a>
												<?php endif; ?>
											</p>
										</div>
										<table id="cart" class="inside">
											<tbody>
												<tr>
													<td colspan="2" class="text_center">Sản phẩm</td>
													<td class="text_right">Giá</td>
												</tr>
												<?php $__currentLoopData = $e->getListOrderDetail(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $orderDetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<?php
												$product = $orderDetail->getProduct();
												?>
												<tr>
													<td class="text_center">
														<img class="cart_img" src="<?php echo e(asset('public/images/san-pham/'.$product->img)); ?>">
													</td>
													<td><?php echo e($product->name); ?></td>
													<td class="text_right">
														<span style="display:block;color:red;font-weight:bold;margin: 0 0 5px 0;"><?php echo e(number_format($orderDetail->unit_price)); ?> VNĐ</span>
														<span>Số lượng: <?php echo e($orderDetail->quatity); ?></span>
													</td>
												</tr>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
												<tr>
													<td class="text_right" colspan="1">
														<strong>Mã giảm giá:</strong>
													</td>
													<td class="text_right" colspan="2">
														<?php echo e($e->key_sales_off); ?> <?php echo e($e->getSalesOff()==null ? '' : '(-'.$e->getSalesOff()->percent.'%)'); ?>

													</td>
												</tr>
												<tr>
													<td class="text_right" colspan="2">
														<strong>Tổng cộng:</strong>
													</td>
													<td class="text_right" colspan="2">
														<span id="tongtien" class="tongtien" style="display:block;color:red;font-weight:bold;"><?php echo e(number_format($e->total)); ?> VNĐ</span>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
									<p class="lead">Không có đơn hàng</p>
									<?php endif; ?>
								</div>
							</div>          
						</div>
					</div>
				</div>
				<div class="clear"></div>
							<!-- <div class="pagination">
							</div> -->
						</div>
						<!-- Layout right -->
						<?php echo $__env->make('../../index.user.layoutRight', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			function showDialog(code_order){
				bootbox.confirm({
					size: "small",
					message: "Bạn muốn hủy bỏ đơn hàng này?",
					buttons: {
						confirm: {
							label: 'Đồng ý',
							className: 'btn-success'
						},
						cancel: {
							label: 'Quay lại',
							className: 'btn-danger'
						}
					},
					callback: function (result) {
						if(result){
							$.ajax({
								url: '<?php echo e(url('huy-don-hang')); ?>/'+ code_order,
								type:'GET',
								success: function(data) {
									if(data.status=='success'){
										alert(data.message);
										location.reload();
									}else{
										printErrorMsg(data.error, $(".print-error-msg-forgot"));
									}
								}
							});
							// location.href = '<?php echo e(url('huy-don-hang')); ?>/'+ code_order;
						}
					}
				});
			}
		</script>
		<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.subClient', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>