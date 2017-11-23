<?php if($user==null): ?>
<div id="top-hotline" style="float:right;">
	<div class="name">
		<a class="fa fa-user aDangNhap" href="#" data-toggle="modal" data-target=".login-register-form"> Đăng nhập</a>
	</div>
</div>
<?php else: ?>
<div id="top-hotline" style="float:right;">
	<div class="name">
		<a class="fa fa-user aDangNhap" href="#" > $user->name</a>
	</div>
</div>
<?php endif; ?>