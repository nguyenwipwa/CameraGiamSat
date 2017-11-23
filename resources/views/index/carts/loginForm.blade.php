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
<form method="post" action="{{ route('loginUser') }}" name="fLogin" id="fLogin" onsubmit="return checkLog(this)">
	{{ csrf_field() }}

	<div class="shopping_title"><span>Đăng nhập thành viên</span></div>
	<div class="alert alert-danger print-error-flog" style="display:none">
		<ul></ul>
	</div>
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
			<td><input type="checkbox" name="ch_remember" id="ch_remember" value="1" checked="checked">&nbsp; <span class="font_err">Ghi nhớ đăng nhập</span> | <a href="{{route('password.request')}}"><b>Bạn quên mật khẩu ?</b></a></td>
		</tr>
		<tr>
			<td></td>
			<td><button id="btnLogin" class="btn btn-warning btnSubmit" name="btnLogin" type="submit" class="btn" value="Đăng nhập"><span>Đăng nhập</span></button> <input type="hidden" name="do_login" value="1"> &nbsp; </td>
		</tr>
	</tbody></table>
</form>

<script>

     // wait for the DOM to be loaded
     $(document).ready(function() {
     	$("#fLogin").submit(function(e){
     		e.preventDefault();
     		$.ajax({
     			url: "{{ route('loginUser') }}",
     			type:'POST',
     			data: $('#fLogin').serialize(),
     			success: function(data) {
     				if($.isEmptyObject(data.error)){
     					alert(data.success);
     					location.reload();
     				}else{
     					printErrorMsg(data.error,$(".print-error-flog"));
     				}
     			}
     		});

     	}); 
     	function printErrorMsg(msg, object) {
     		alert("Có gì đó sai sai, xin thử lại!");
     		object.find("ul").html('');
     		object.css('display','block');
     		$.each( msg, function( key, value ) {
     			object.find("ul").append('<li>'+value+'</li>');
     		});
     	}
     });
 </script>

 <script>
 	$(document).ready(function(){
 		$(document).ajaxStart(function(){
 			$("#wait").css("display", "block");
 		});
 		$(document).ajaxComplete(function(){
 			$("#wait").css("display", "none");
 		});
 		$("#forgot-form1").submit(function(){
 			$("#wait").css("display", "block");
 		});
 	});
 </script>

 <div id="wait" style="display:none;width:69px;height:89px;position:absolute;top:20%;left:50%;padding:2px; z-index: 99999"><img src='{{ asset("public/images/ui_images/ajax-loading.gif") }}' width="64" height="64" /><br>Loading..</div>

 <style type="text/css">
 #wait.fixed {
 	bottom: 0;
 	right: 0;
 	width: 100%;
 	height: 9%;
 	background-color: pink;
 	text-align: center

 }

</style>