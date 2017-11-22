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
    			<?php $__currentLoopData = $thanhPho; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    			<option value="<?php echo e($key->id); ?>"><?php echo e($key->name); ?></option>
    			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
	<button id="btnConfirm" class="btn btn-warning btnSubmit" name="btnConfirm" type="submit" class="btn" value="Tiếp tục mua hàng"><span>Tiếp tục mua hàng</span>
	</button>
	<input type="hidden" id="" name="btnConfirm" value="1">
</div>

</form>