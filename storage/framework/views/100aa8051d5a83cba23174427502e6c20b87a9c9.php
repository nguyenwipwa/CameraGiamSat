<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Camera Store | 3TP</title>
	<!-- Tell the browser to be responsive to screen width -->
	<?php echo $__env->make('admin.link', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->yieldContent('script'); ?>
</head>
<body class="skin-blue sidebar-mini">
	<div class="wrapper">
		<div id="top">
			<?php echo $__env->make('admin.layout.top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
		<!-- Left side column. contains the logo and sidebar -->
		<div id="left">
			<?php echo $__env->make('admin.layout.left', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
		<!-- Content Wrapper. Contains page content -->
		<div id="content">
			<?php echo $__env->yieldContent('content'); ?>
		</div>
		<div id="bottom">
			<?php echo $__env->make('admin.layout.bottom', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
		<div class="control-sidebar-bg"></div>
	</div><!-- ./wrapper -->
</body>
</html>
