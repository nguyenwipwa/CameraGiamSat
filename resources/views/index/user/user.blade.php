 <!-- Login / Register Modal-->
 <div class="modal fade login-register-form" role="dialog">
 	<div class="modal-dialog modal-md">
 		<div class="modal-content">
 			<div class="modal-header">
 				<button type="button" class="close" data-dismiss="modal">
 					<span class="fa fa-remove"></span>
 				</button>
 				<ul class="nav nav-tabs ">
 					<li class="active"><a id="tabLogin" data-toggle="tab" href="#login-form"> Đăng nhập <span class="fa fa-user"></span></a></li>
 					<li><a id="tabRegister" data-toggle="tab" href="#registration-form"> Đăng kí <span class="fa fa-pencil"></span></a></li>
 				</ul>
 			</div>
 			<div class="modal-body">
 				<div class="tab-content">
 					<div id="login-form" class="tab-pane fade in active">
 						<div class="alert alert-danger print-error-msg-login" style="display:none">
 							<ul></ul>
 						</div>
 						<form action="{{ route('loginUser') }}" id="myFormLogin" method="POST" accept-charset="UTF-8">
 							{{ csrf_field() }}
 							<div class="form-group">
 								<label for="email">Email:</label>
 								<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
 							</div>
 							<div class="form-group">
 								<label for="pwd">Mật khẩu:</label>
 								<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
 							</div>
 							<div class="form-group">
 								<div class="checkbox">
 									<label><input type="checkbox" name="remember"> Ghi nhớ</label>
 									<a data-toggle="tab" href="#forgot-form" for="pwd">Quên mật khẩu</a>
 								</div>
 							</div>
 							<button type="submit" id="btnLogin" class="btn btn-default">Đăng nhập</button>
 						</form>
 					</div>
 					<div id="forgot-form" class="tab-pane fade in fade">
                              <div class="alert alert-danger print-error-msg-forgot" style="display:none">
                                   <ul></ul>
                              </div>
                              <form action="{{ route('password.email') }}" id="forgot-form1" method="POST" accept-charset="UTF-8">
                                  {{ csrf_field() }}
                                  <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                               </div>
                               <button type="submit" class="btn btn-default">Xác nhận</button>
                          </form>
                     </div>
                     <div id="registration-form" class="tab-pane fade">
                       <div class="alert alert-danger print-error-msg" style="display:none">
                           <ul></ul>
                      </div>
 						<!-- @if(count($errors)>0)
 						<script type="text/javascript">
 							$('.aDangNhap').click();
 							$('#tabRegister').click();
 						</script>
 						<div class="alert alert-danger">
 							@foreach($errors->all() as $er)
 							{{ $er }} <br/>
 							@endforeach
 						</div>
 						@endif -->
 						<form id="myForm" action="{{ route('addUser') }}" method="post" accept-charset="UTF-8">
 							{{ csrf_field() }}
 							<div class="form-group">
 								<label for="name">Tên bạn:</label>
 								<input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
 							</div>
 							<div class="form-group">
 								<label for="newemail">Email:</label>
 								<input type="email" class="form-control" id="newemail" placeholder="Enter new email" name="email">
 							</div>
 							<div class="form-group">
 								<label for="newpwd">Mật khẩu:</label>
 								<input type="password" class="form-control" id="newpwd" placeholder="New password" name="password">
 							</div>
 							<div class="form-group">
 								<label for="newpwd">Nhập lại Mật khẩu:</label>
 								<input type="password" class="form-control" id="newpwd" placeholder="New password" name="passwordAgain">
 							</div>
 							<div class="form-group">
 								<label for="newpwd">Số điện thoại:</label>
 								<input type="text" class="form-control" id="newpwd" placeholder="Số điện thoại" name="numberPhone">
 							</div>
 							<div class="form-group">
 								<label for="newpwd">Địa chỉ:</label>
 								<input type="text" class="form-control" id="newpwd" placeholder="Địa chỉ" name="address">
 							</div>
 							<div class="form-group">
 								<label for="newemail">Thành phố:</label>
 								<select class="form-control" id="sel1" name="id_tp">
 									@foreach(DB::select('SELECT * from thanhpho') as $key)
 									<option value="{{ $key->id }}">{{ $key->name }}</option>
 									@endforeach
 								</select>
 							</div>
 							<button type="submit"  id="btnReg" class="btn btn-default">Đăng kí</button>
 						</form>
 					</div>

 				</div>
 			</div>
 			<!--                                    <div class="modal-footer">-->
 				<!--                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
 				<!--                                    </div>-->
 			</div>
 		</div>
 	</div>
     <div id="wait" style="display:none;width:69px;height:89px;position:absolute;top:20%;left:50%;padding:2px; z-index: 99999">
          <img src='{{ asset("public/images/ui_images/ajax-loading.gif") }}' width="64" height="64" />
     </div>
     <style type="text/css">
     .modal-header {
        padding: 0;
   }
   .modal-header .close {
        padding: 10px 15px;
   }
   .modal-header ul {
        border: none;
   }
   .modal-header ul li {
        margin: 0;
   }
   .modal-header ul li a {
        border: none;
        border-radius: 0;
   }
   .modal-header ul li.active a {
        color: #e12f27;
   }
   .modal-header ul li a:hover {
        border: none;
   }
   .modal-header ul li a span {
        margin-left: 10px;
   }
   .modal-body .form-group {
        margin-bottom: 10px;
   }

</style>

<script>

     // wait for the DOM to be loaded
     $(document).ready(function() {

       $("#forgot-form1").submit(function(e){
          e.preventDefault();
          $.ajax({
               url: "{{route('password.email')}}",
               type:'POST',
               data: $('#forgot-form1').serialize(),
               success: function(data) {
                    if($.isEmptyObject(data.error)){
                         alert(data.success);
                         location.reload();
                    }else{
                         printErrorMsg(data.error, $(".print-error-msg-forgot"));
                    }
               }
          });

     }); 

       $("#myForm").submit(function(e){
            e.preventDefault();
            $.ajax({
             url: "{{ route('addUser') }}",
             type:'POST',
             data: $('#myForm').serialize(),
             success: function(data) {
              if($.isEmptyObject(data.error)){
               alert(data.success);
               location.reload();
          }else{
               printErrorMsg(data.error, $(".print-error-msg"));
          }
     }
});

       }); 

       $("#myFormLogin").submit(function(e){
            e.preventDefault();
            $.ajax({
             url: "{{ route('loginUser') }}",
             type:'POST',
             data: $('#myFormLogin').serialize(),
             success: function(data) {
              if($.isEmptyObject(data.error)){
               // alert(data.success);
               location.reload();
          }else{
               printErrorMsg(data.error,$(".print-error-msg-login"));
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