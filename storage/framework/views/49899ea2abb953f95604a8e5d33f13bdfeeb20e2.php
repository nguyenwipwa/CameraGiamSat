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
			<?php echo $__env->make('../../index.carts.tableCart', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
	</div>
	<div class="clear"></div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.subClient', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>