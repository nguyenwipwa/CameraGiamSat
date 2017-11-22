<script type="text/javascript">
	function checkform(f) {
		var re = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,5})$/gi;


		if (f.d_name.value == '') {
			alert("Vui lòng nhập họ tên");
			f.d_name.focus();
			return false;
		}

		if (f.d_address.value == '') {
			alert("Vui lòng nhập địa chỉ");
			f.d_address.focus();
			return false;
		}

		var d_email = f.d_email.value;
		if (d_email == '') {
			alert("Vui lòng nhập email");
			f.d_email.focus();
			return false;
		}

		if (d_email != '' && d_email.match(re) == null) {
			alert("Email không hợp lệ");
			f.d_email.focus();
			return false;
		}



		if (f.d_phone.value == '') {
			alert("Vui lòng nhập điện thoại");
			f.d_phone.focus();
			return false;
		}



		return true;
	}
</script>
<br>
<div class="shopping_title"><span>Khách hàng mới</span>
</div>

<form method="post" action="/san-pham/checkout_address.html" name="f_shopping" onsubmit="return checkform(this)">
	<div style="padding-bottom:8px;">Hãy nhập thông tin của bạn cho việc xác nhận hóa đơn và giao hàng</div>
	<table width="100%" cellspacing="0" cellpadding="2" border="0" class="tbl_from">

		<tbody>
			<tr>
				<td width="150" class="td1">Họ tên (<span class="font_err">*</span>)</td>
				<td>
					<input type="text" style="width:98%;" id="d_name" class="textfiled" name="d_name" value="">
				</td>
			</tr>


			<tr>
				<td class="td1">Địa chỉ (Số nhà, đường) (<span class="font_err">*</span>)</td>
				<td class="td2">
					<input type="text" style="width:98%;" class="textfiled" name="d_address" value="">
				</td>
			</tr>

            <!--<tr>
        <td  class="td1" >Quốc gia</td>
        <td  class="td2">  </td>
    </tr>-->
    <tr>
    	<td class="td1">Thành phố </td>
    	<td class="td2">
    		<select name="city" id="city" class="select" style="width: style=&quot;width:99%;&quot; px;" d_city="">
    			<option value="" selected="">Chọn --</option>
    			<option value="2">Hồ Chí Minh</option>
    			<option value="1">Hà nội</option>
    			<option value="4">Đà Nẵng</option>
    			<option value="3">Hải phòng</option>
    			<option value="5">Cần Thơ</option>
    			<option value="51">Bình Dương</option>
    			<option value="49">Khánh Hòa</option>
    			<option value="60">Bà Rịa - Vũng Tàu</option>
    			<option value="45">Gia Lai</option>
    			<option value="24">Quảng Ninh</option>
    			<option value="59">An Giang</option>
    			<option value="26">Bắc Giang</option>
    			<option value="19">Bắc Cạn</option>
    			<option value="68">Bạc Liêu</option>
    			<option value="25">Bắc Ninh</option>
    			<option value="63">Bến Tre</option>
    			<option value="44">Bình Định</option>
    			<option value="52">Bình Phước</option>
    			<option value="55">Bình Thuận</option>
    			<option value="69">Cà Mau</option>
    			<option value="6">Cao Bằng</option>
    			<option value="47">Đắk Lắk</option>
    			<option value="48">Đắk Nông</option>
    			<option value="16">Điện Biên</option>
    			<option value="56">Đồng Nai</option>
    			<option value="58">Đồng Tháp</option>
    			<option value="10">Hà Giang</option>
    			<option value="31">Hà Nam</option>
    			<option value="27">Hà Tây</option>
    			<option value="37">Hà Tĩnh</option>
    			<option value="29">Hải Dương</option>
    			<option value="67">Hậu Giang</option>
    			<option value="28">Hòa Bình</option>
    			<option value="30">Hưng Yên</option>
    			<option value="62">Kiên Giang</option>
    			<option value="43">Kon Tum</option>
    			<option value="7">Lai Châu</option>
    			<option value="50">Lâm Đồng</option>
    			<option value="17">Lạng Sơn</option>
    			<option value="8">Lào Cai</option>
    			<option value="57">Long An</option>
    			<option value="32">Nam Định</option>
    			<option value="36">Nghệ An</option>
    			<option value="35">Ninh Bình</option>
    			<option value="53">Ninh Thuận</option>
    			<option value="22">Phú Thọ</option>
    			<option value="46">Phú Yên</option>
    			<option value="38">Quảng Bình</option>
    			<option value="41">Quảng Nam</option>
    			<option value="42">Quảng Ngãi</option>
    			<option value="39">Quảng Trị</option>
    			<option value="66">Sóc Trăng</option>
    			<option value="21">Sơn La</option>
    			<option value="54">Tây Ninh</option>
    			<option value="33">Thái Bình</option>
    			<option value="18">Thái Nguyên</option>
    			<option value="34">Thanh Hóa</option>
    			<option value="40">Thừa Thiên - Huế</option>
    			<option value="61">Tiền Giang</option>
    			<option value="65">Trà Vinh</option>
    			<option value="9">Tuyên Quang</option>
    			<option value="64">Vĩnh Long</option>
    			<option value="23">Vĩnh Phúc</option>
    			<option value="20">Yên Bái</option>
    		</select>
    	</td>
    </tr>
    <tr>
    	<td class="td1">E-mail (<span class="font_err">*</span>)</td>
    	<td class="td2">
    		<input type="text" style="width:98%;" class="textfiled" name="d_email" value="">
    	</td>
    </tr>
    <tr>
    	<td class="td1">Điện thoại (<span class="font_err">*</span>)</td>
    	<td class="td2">
    		<input type="text" style="width:98%;" class="textfiled" name="d_phone" value=""> </td>
    	</tr>

    </tbody>
</table>
<br>
<div class="extButton" align="right">
	<button id="btnConfirm" name="btnConfirm" type="submit" class="btn" value="Tiếp tục mua hàng"><span>Tiếp tục mua hàng</span>
	</button>
	<input type="hidden" id="" name="btnConfirm" value="1">
</div>

</form>