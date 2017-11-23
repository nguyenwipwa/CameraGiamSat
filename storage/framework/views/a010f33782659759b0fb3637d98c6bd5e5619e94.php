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
 						<?php if(($user = Auth::user())==null): ?>
 						<div id="top-hotline" style="float:right;">
 							<div class="name">
 								<a class="fa fa-user aDangNhap" href="#" data-toggle="modal" data-target=".login-register-form"> Đăng nhập</a>
 							</div>
 						</div>
 						<?php else: ?>
 						<div id="top-hotline" style="float:right;">
 							<div class="name">
 								<a class="fa fa-user aDangNhap" href="<?php echo e(route('profile')); ?>" > <?php echo e($user->name); ?></a>
 							</div>
 							<div class="name">
 								<a class="fa fa-key" href="<?php echo e(route('logoutUser')); ?>" > Đăng xuất</a>
 							</div>
 						</div>
 						<?php endif; ?>
 						<div id="top-hotline" style="float:right;">
 							<div class="name">
 								<a class="name_cart" href="<?php echo e(route('cartDetail')); ?>">Giỏ hàng (<b><?php echo e(Cart::count()); ?></b> sản phẩm)</a>
 							</div>
 						</div>

 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>
 <?php echo $__env->make('index.user.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
