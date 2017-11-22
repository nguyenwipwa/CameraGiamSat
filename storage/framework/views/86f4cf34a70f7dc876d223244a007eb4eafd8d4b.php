<script language="javascript">
	function checkLog(f) {	
		if (f.username.value == '') 	{
			alert("Vui lòng nhập Tài khoản");
			f.username.focus();
			return false;
		}

		if (f.password.value == '') {
			alert("Vui lòng nhập mật khẩu");
			f.password.focus();
			return false;
		}

		return true;
	}
</script>
<br>
<form method="post" action="/member/login.html/aHR0cDovL3d3dy52aWVudGhvbmdob2FuZ2dpYS5jb20vc2FuLXBoYW0vY2hlY2tvdXRfYWRkcmVzcy5odG1s" name="fLogin" onsubmit="return checkLog(this)">
	<div class="shopping_title"><span>Đăng nhập thành viên</span></div>
	<table width="100%" border="0" cellspacing="2" cellpadding="2" class="tbl_from">
		<tbody><tr>
			<td width="100px" class="td1">Email</td>
			<td><input type="text" size="25" class="textfiled" name="email" style="width:100%" onfocus="if(this.value=='') this.value='';" onblur="if(this.value=='') this.value='';" value=""></td>
		</tr>
		<tr>
			<td width="100px" class="td1">Mật khẩu</td>
			<td><input type="password" size="25" class="textfiled" name="password" style="width:100%" ></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="checkbox" name="ch_remember" id="ch_remember" value="1" checked="checked">&nbsp; <span class="font_err">Ghi nhớ đăng nhập</span> | <a href="/member/forget_pass.html/aHR0cDovL3d3dy52aWVudGhvbmdob2FuZ2dpYS5jb20vc2FuLXBoYW0vY2hlY2tvdXRfYWRkcmVzcy5odG1s"><b>Bạn quên mật khẩu ?</b></a></td>
		</tr>
		<tr>
			<td></td>
			<td><button id="btnLogin" name="btnLogin" type="submit" class="btn" value="Đăng nhập"><span>Đăng nhập</span></button> <input type="hidden" name="do_login" value="1"> &nbsp; </td>
		</tr>
	</tbody></table>
</form>