<div class="container-fluid bg-footer">
	<div class="row">
		<div class="col-xs-12 col-xs-offset-0 col-md-10 col-md-offset-1">
			<div class="row">
				<div class="col-md-2 hidden-xs hidden-sm">
					<div class="f-logo">
						<a href="http://fptcamera.vn/">
							<img title="LẮP ĐẶT CAMERA QUAN SÁT GIÁ RẺ" alt="Camera FPT Việt Nam tự hào Nhà cung cấp thiết bị camera giám sát giá rẻ uy tín trên toàn quốc" src="http://fptcamera.vn/resources/uploads/images/automatic/logo/logo-fpt-camera-giam-sat.png">
						</a>
					</div>
				</div>
				@foreach($contact as $value)
				<div class="col-xs-12 col-md-5">
					<!-- <div class="f-address"> -->
						{!!$value->content!!}
						<!-- </div> -->
					</div>
					@endforeach
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-xs-offset-0 col-md-10 col-md-offset-1">
				<div class="f-copyright">Copyright © 2015. All Rights Reserved by Nguyen Van Trong</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div style="display: none">
		<!-- Histats.com  START  (standard)-->
		<script type="text/javascript">
			document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));
		</script>
		<a href="http://www.histats.com" target="_blank" title="">
			<script type="text/javascript">
				try {
					Histats.start(1, 3313430, 4, 438, 112, 75, "00011111");
					Histats.track_hits();
				} catch (err) {};
			</script>
		</a>
		<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?3313430&101" alt="" border="0"></a></noscript>
		<!-- Histats.com  END  -->
	</div>
	<div class="clear"></div>

	<div class="modal fade" id="dangnhap" role="dialog" style="z-index: 99999;">
		<div class="modal-dialog" >

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div id="title" class="panle-title text-center" > <span class="textbold"> Đăng nhập</span> </div>
				</div>
				<div class="modal-body" style="padding:40px 50px;">
					<form role="form" id="formdn">
						<div class="form-group">
							<label for="usrname"><span class="glyphicon glyphicon-user"></span> Tên đăng nhập</label>
							<input type="text" required class="form-control" id="usrname" name="userdn" placeholder="Tên đăng nhập">
						</div>
						<div class="form-group">
							<label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Mật khẩu</label>
							<input type="text" class="form-control" id="psw" name="passdn" placeholder="Mật khẩu">
						</div>
						<div class="checkbox">
							<label><input type="checkbox" value="" checked>Ghi nhớ</label>
						</div>
						<button type="button" onclick="dangnhap(userdn.value, passdn.value)" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Đăng nhập</button>
					</form>
				</div>
				<div class="modal-footer">
					<button id="thoatdn" type="button" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove btnthoat"></span> Cancel</button>
					<p><a href="#"  data-toggle="modal" data-target="#dangki" onclick="$('#thoatdn').click()">Đăng kí</a></p>
					<p> <a href="#">Quên mật khẩu</a></p>
				</div>
			</div>

		</div>
	</div> 
	<div id="dangki" class="modal fade" role="dialog" style="z-index: 999999;">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content" style="width: 500px;">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div id="title" class="panle-title text-center" > <span class="textbold"> Đăng kí</span> </div>
				</div>
				<div class="modal-body">
					<div>
						<form id="formdk" action="#" method="post" accept-charset="utf-8">
							<div class="themsp" style="width: 100%;">
								<div id=""> <label class="lbthem"> Họ tên</label> <input id="namedk" type="text" name="dname" value="" placeholder="Họ tên" class="input-sm form-control" required>
								</div>
								<div > <label class="lbthem"> Tên đăng nhập</label> <input id="duser"  type="text" name="duser" value="" placeholder="Tên đăng nhập" class="input-sm form-control" required>
								</div>
								<div id=""> <label class="lbthem"> Email</label> <input id="demail" type="text" name="demail" value="" placeholder="Email" class="input-sm form-control" required>
								</div>
								<div id=""> <label class="lbthem"> Mật khẩu</label> <input id="dpass" type="password" name="dpass" value="" placeholder="Mật khẩu" class="input-sm form-control" required>
								</div>
								<div id=""> <label class="lbthem"> Nhập lại mật khẩu</label> <input id="drepass"  type="password" name="drepass" value="" placeholder="Nhập lại mật khẩu" class="input-sm form-control" required>
								</div>
							</div>
							<div style="margin-left: 45%"> <input type="button" onclick="dangki(dname.value,duser.value,demail.value,dpass.value);" id="bdk" class="btn btn-info" value="Cập nhật">  <button type="button" class="btn btn-info btnthoat" data-dismiss="modal">Thoát</button>
							</div>
						</form>
					</div>
				</div>
			</div>