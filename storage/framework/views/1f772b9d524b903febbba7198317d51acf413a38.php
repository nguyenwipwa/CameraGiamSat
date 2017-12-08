<!DOCTYPE html>
<html>
<head>
	<title>Xác nhận hóa đơn</title>
</head>
<body>
	<style>
	table{

	}
	td{
		border: 1px solid black;
	}
</style>
<h1 style="color: green"> Xác nhận hóa đơn có mã: <?php echo e($auth_order->code_order); ?>

	<p>Click vào link này để xác thực hóa đơn mua hàng (Nếu không xác thực trong vòng 3h thì đơn hàng sẽ bị hủy bỏ): <?php echo e(route('auth.order',[$auth_order->id_order,$auth_order->code_order,$auth_order->key])); ?> </p>
</h1>
<span class="circle">4</span>
<span style="font-weight:bold;color:#555;">Xác nhận đơn hàng</span>
<table id="cart" class="inside" style="border: 1px solid black;">
	<tbody>
		<tr>
			<td colspan="2" class="text_center" style="border: 1px solid black;">Sản phẩm</td>
			<td class="text_right" style="border: 1px solid black;">Giá</td>
		</tr>
		<?php $__currentLoopData = $listCart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td class="text_center" style="border: 1px solid black;">
				<img class="cart_img" src="http://127.0.0.1/a/CameraGiamSat/public/images/san-pham/lap-dat-camera-gia-re-ha-noi.jpg">
			</td>
			<td style="border: 1px solid black;"><?php echo e($value->name); ?></td>
			<td class="text_right" style="border: 1px solid black;">
				<span style="display:block;color:red;font-weight:bold;margin: 0 0 5px 0;"><?php echo e($value->price); ?></span>
				<span>Số lượng: <?php echo e($value->qty); ?></span>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>
<p>Click vào link này để kích hoạt tài khoản: <?php echo e(route('auth.order',[$auth_order->id_order,$auth_order->code_order,$auth_order->key])); ?> </p> -->
</td>
</body>
</html>
