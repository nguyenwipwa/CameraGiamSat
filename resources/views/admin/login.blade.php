<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<!-- For-Mobile-Apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Cosmo Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //For-Mobile-Apps -->
	<!-- Style --> <link rel="stylesheet" href="{{asset('resources/views/admin/css/style.css')}}" type="text/css" media="all" />
</head>
<body>
	<div class="container">
		<h1>Admin</h1>
		<div class="contact-form">
			<div class="signin">
				@if (session('status'))
				<div class="alert alert-success" style="color: red; ">
					{{ session('status') }}
				</div>
				@endif
				<form action="{{ route('login.admin.post') }}" method="post">
					{{ csrf_field() }}
					<input name="email" type="email" class="user" placeholder="Email"  />
					<input name="password" type="password" class="pass" placeholder="Password" />
					<input type="submit" value="LOGIN" />
					<p>Not a member? <a href="#">Signup now >></a> </p>
				</form>
			</div>
		</div>
	</div>
	<div class="footer">
		<p>Copyright &copy; 2015 Cosmo Login Form. All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
	</div>
</body>
</html>