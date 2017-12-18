 <div id="top-menu" class="hidden-sm hidden-xs">
 	<div class="container">
 		<div class="row">
 			<div class="col-xs-12">
 				<div class="row">
 					<div class="col-xs-7">
 						<div id="top-hotline">
 							<div class="name">
 								<a href="<?php echo e(url('/')); ?>">Camera giám sát</a>|
 								<div id="top-hotline" style="float:right;">
 									<div class="name">
 										<a class="dropdown-toggle" href="JavaScript::void(0)" id="menu1" type="button" data-toggle="dropdown">Kiểm tra đơn hàng
 											<span class="caret"></span></a>
 											<form method="get" action="" class="dropdown-menu" role="menu" aria-labelledby="menu1" style="padding: 5px">
 												<input id="code_order" class="form-control" type="text" name="code_order" style="color: red">
 												<button type="button" class="form-control btn btn-danger" id="btnKiemTraDonHang"> Kiểm tra </button>
 											</form>
 										</div>
 									</div>
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
 	<script type="text/javascript">
 		$('#btnKiemTraDonHang').click(function(){
 			location.href = '<?php echo e(url('kiem-tra-don-hang')); ?>/'+$('#code_order').val(); 		
 		})
 	</script>
 	<?php echo $__env->make('index.user.user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
