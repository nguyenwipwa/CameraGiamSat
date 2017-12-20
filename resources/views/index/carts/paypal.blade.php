<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title>Thanh Toán</title>
</head>
<body>
	<form id="payform" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
		<h2> Xin chờ giây lát... </h2>
		<!-- Nhập địa chỉ email người nhận tiền (người bán) -->
		<input type="hidden" name="business" value="nguyenwipwa@gmail.com">

		<!-- tham số cmd có giá trị _xclick chỉ rõ cho paypal biết là người dùng nhất nút thanh toán -->
		<input type="hidden" name="cmd" value="_xclick">

		<!-- Thông tin mua hàng. -->
		<input id="HD_Paypal" type="hidden" name="item_name" value="ad">
		<!--Trị giá của giỏ hàng, vì paypal không hỗ trợ tiền việt nên phải đổi ra tiền $-->
		<input id="pricePaypal" style="display: none;" class="hidden" type="number" name="amount" placeholder="Nhập số tiền vào" value="{{ $total }}">
		<!--Loại tiền-->
		<input type="hidden" name="currency_code" value="USD">

		<!--Đường link mình cung cấp cho Paypal biết để sau khi xử lí thành công nó sẽ chuyển về theo đường link này-->
		<input type="hidden" name="return" value="{{ route('paypal.success') }}">
		<!--Đường link mình cung cấp cho Paypal biết để nếu  xử lí KHÔNG thành công nó sẽ chuyển về theo đường link này-->
		<input type="hidden" name="cancel_return" value="http://localhost/demothanhtoanonline/loi.html">
		<!-- Nút bấm. -->
		<input style="display: none;" id="btnpaypal" type="submit" name="submit" value="Thanh toán quay Paypal">
	</form>
</body>

<script type="text/javascript">
	$(document).ready(function(){
		$('#btnpaypal').click();
	});
	function changeparent()
	{
		window.opener.document.getElementById('text1').value="Value changed.."
	}
</script>
</html>