 <div class="container-fluid">
 	<div class="row hidden-md hidden-lg">
 		<nav class="navbar navbar-inverse navbar-fixed-top custom-navbar">
 			<div class="container-fluid">
 				<!-- Brand and toggle get grouped for better mobile display -->
 				<div class="navbar-header">
 					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
 						<span class="sr-only">Toggle navigation</span>
 						<span class="icon-bar"></span>
 						<span class="icon-bar"></span>
 						<span class="icon-bar"></span>
 					</button>
 					<?php if(($user = Auth::user())==null): ?>
 					<a class="navbar-brand" href="http://fptcamera.vn/">
 						<img alt="Camera FPT Việt Nam tự hào Nhà cung cấp thiết bị camera giám sát giá rẻ uy tín trên toàn quốc" src="http://fptcamera.vn/resources/ui_images/client/background/logo_mobile.png">
 					</a>
 					<?php endif; ?>
 					<div class="navbar-brand" id="top-hotline" style="float:right;">
 						<div class="name">
 							<?php if(($user = Auth::user())==null): ?>
 							<a class="fa fa-user" href="#" data-toggle="modal" data-target=".login-register-form"> Đăng nhập</a>
 							<?php else: ?>
 							<a class="fa fa-user aDangNhap" href="#" > <?php echo e($user->name); ?></a>
 							<a class="fa fa-key" href="<?php echo e(route('logoutUser')); ?>" > Đăng xuất</a>
 							<?php endif; ?>
 						</div>
 					</div>
 				</div>
 				<!-- Collect the nav links, forms, and other content for toggling -->
 				<div class="collapse navbar-collapse" aria-expanded="false" id="bs-example-navbar-collapse-1">
 					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true" style="position: fixed; top:40px; right: 0; border: none; padding: 3px; margin-right: 5px;">
 						<i class="fa fa-times-circle" style="font-size: 25px;"></i>
 					</button>
 					<ul class="nav navbar-nav">
 						<div class="name">
 							<a class="dropdown-toggle" href="JavaScript::void(0)" id="menu1" type="button" data-toggle="dropdown">Kiểm tra đơn hàng
 								<span class="caret"></span></a>
 								<div class="dropdown-menu" role="menu" aria-labelledby="menu1" style="padding: 5px">
 									<input id="code_order_search" class="form-control" placeholder="Nhập mã đơn hàng" type="text" name="code_order" style="color: red">
 									<button type="button" class="form-control btn btn-danger" id="btnKiemTraDonHang"> Kiểm tra </button>
 								</div>
 							</div>
 							<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 							<?php if($cate->id_root == 0 && $cate->status==1): ?>
 							<li><a href="<?php echo e(url('/category/'.$cate->id.'/1')); ?>"><img src = "<?php echo e(asset('public/images/danh-muc-san-pham/'.$cate->icon)); ?>"/>&nbsp;&nbsp;<?php echo $cate->name; ?></a></li>
 							<?php endif; ?>
 							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 						</ul>
 					</div>
 					<!-- /.navbar-collapse -->
 				</div>
 				<!-- /.container-fluid -->
 			</nav>
 		</div>
 	</div>
 	<script type="text/javascript">
 		$('#btnKiemTraDonHang').click(function(){
 			location.href = '<?php echo e(url('kiem-tra-don-hang')); ?>/'+$('#code_order_search').val(); 		
 		})
 	</script>