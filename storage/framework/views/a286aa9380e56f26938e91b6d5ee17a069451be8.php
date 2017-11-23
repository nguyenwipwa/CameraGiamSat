<?php if(($user = Auth::user())==null): ?>
<div id="top-hotline" style="float:right;">
	<div class="name">
		<a class="fa fa-user aDangNhap" href="#" data-toggle="modal" data-target=".login-register-form"> Đăng nhập</a>
	</div>
</div>
<?php else: ?>
<div id="top-hotline" style="float:right;">
	<div class="name">
		<a class="fa fa-user aDangNhap" href="#" > <?php echo e($user->name); ?></a>
	</div>
	<div class="name">
		<a class="fa fa-key" href="<?php echo e(route('logoutUser')); ?>" > Đăng xuất</a>
	</div>
</div>
<?php endif; ?>