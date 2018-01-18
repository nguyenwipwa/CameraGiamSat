<!DOCTYPE html>
<html>
<head>
	<title>Đã thanh toán Paypal</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<h2> Xin chờ giây lát... <h2>
		<script type="text/javascript">
			$(document).ready(function(){
				window.opener.document.getElementById('process').value = '7';
				window.opener.document.getElementById('addOrder').click();
				
				window.close();
			});
		</script>
</body>
</html>