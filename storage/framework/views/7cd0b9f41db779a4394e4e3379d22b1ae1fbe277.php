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
			<?php echo $__env->make('../../index.carts.tableCart', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
		
		<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.subClient', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>