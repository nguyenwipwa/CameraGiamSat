
@extends('layouts.subClient')
@section('script')
<link rel="stylesheet" type="text/css" href="{{asset('public/stylesheets/box.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('public/stylesheets/member.css')}}" />
@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12 pad-btm">
			<div class="row">
				<div class="col-xs-12 col-md-9">
					<div class="article_header my-breadcrumb">
						<ol class="breadcrumb"><li><a href="http://fptcamera.vn/">Thông tin cá nhân</a></li><li><a href="http://fptcamera.vn/tim-kiem?t=m%C3%A1y&submit_search=T%C3%ACm+ki%E1%BA%BFm">Tìm kiếm sản phẩm</a></li></ol>
					</div>
					<div class="clear"></div>
					<div class="description2">
					</div>
					<div class="product_list">
						<div class="row">
							<div class="box_mid col-xs-12 col-sm-12 col-lg-12">
								<div class="mid-title">
									<div class="titleL"><h1>Cập nhật thông tin tài khoản</h1></div>
									<div class="titleR"></div>
									<div class="clear"></div>
								</div>
								<div class="mid-content">

									<script language="javascript">
										function checkform(f) {			
											var re =/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,5})$/gi;
											if (f.pass.value !='' && f.pass.value != f.re_password.value ) {
												alert("Xác nhật khẩu không đúng");
												f.re_password.focus();
												return false;
											} 
											if (f.full_name.value == '' ) {
												alert("Vui lòng nhập Họ tên");
												f.l_name.focus();
												return false;
											}
											if (f.phone.value == '' ) {
												alert("Vui lòng nhập Điện thoại");
												f.phone.focus();
												return false;
											}
											return true;
										}
									</script>
									<div id="Member">
										<form action="/member/update_account.html" name="frmMember" id="frmMember" method="post" onsubmit="return checkform(this);" enctype="multipart/form-data">

											<table cellspacing="0" cellpadding="0" border="0">
												<tbody><tr>
													<td width="30%">Tên thành viên</td>
													<td>[ <span class="fMgroup"><span class="fGroup" style="color:#ababab">Free Member</span> </span> ] </td>
												</tr>
												<tr>
													<td>E-mail <font color="red">*</font></td>
													<td>	<input type="text" style="width:300px;" value="nguyenwipwa@gmail.com" class="textfiled" name="email_address" id="email_address" readonly="readonly" disabled="disabled"></td>
												</tr>
												<tr>
													<td><b>Đổi mật khẩu mới.</b></td>
													<td><span class="font_err">Điền mật khẩu mới để thay đổi mật khẩu (Nếu để trống sẽ giữ lại mật khẩu cũ) </span></td>
												</tr>
												<tr>
													<td>Mật khẩu  </td>
													<td><input type="password" style="width:300px;" class="textfiled" name="pass"></td>
												</tr>
												<tr>
													<td>Xác nhận mật khẩu </td>
													<td>	<input type="password" style="width:300px;" class="textfiled" name="re_password">	</td>
												</tr>
												<tr>
													<td>Avatar</td>
													<td><input name="chk_upload" type="hidden" value="1"><input name="image" type="file" id="image" size="30" maxlength="250"> (*.jpg,*.gif,*.png) Only ! </td>
												</tr>
												<tr>      
													<td>Họ tên <font color="red">*</font></td>
													<td><input type="text" value="Trọng Nguyễn Văn" class="textfiled" name="full_name" id="full_name" style="width:300px;"></td> 
												</tr>
												<tr>
													<td>Giới tính <font color="red">*</font></td>
													<td><input name="gender" id="gender" type="radio" value="1" align="absmiddle"> Nam &nbsp; <input name="gender" id="gender" type="radio" value="2" align="absmiddle"> Nữ &nbsp; </td>
												</tr>

												<tr>		
													<td>Điện thoại <font color="red">*</font></td>
													<td><input type="text" style="width:300px;" class="textfiled" value="1632635825" name="phone"> </td>
												</tr>
												<tr>      
													<td>Địa chỉ </td>
													<td><input type="text" value="Gò dưa" class="textfiled" name="address" id="address" style="width:300px;"></td>
												</tr>
												<tr>      
													<td>Thành phố </td>
													<td><select name="city" id="city" class="select" style="width:302px;" onchange="CityChange(this.value);"><option value="" selected="">Chọn thành phố</option>@foreach(DB::select('SELECT * from thanhpho') as $key)
														<option value="{{ $key->id }}">{{ $key->name }}</option>
														@endforeach
													</select></td> 
												</tr>     
												<tr>      
													<td>Quận huyện </td>
													<td><span id="ext_state"><select name="state" id="state" class="select" style="width:302px;" onchange="StateChange(this.value);"><option value="" selected="">Chọn quận huyện</option></select></span></td>
												</tr>
												<tr>      
													<td>Phường xã </td>
													<td><span id="ext_ward"><select name="ward" id="ward" class="select" style="width:302px;"><option value="0" selected="">Chọn phường xã</option></select></span></td>
												</tr>
												<tr>
													<td></td>
													<td class="last">
														<button id="btnEdit" name="btnEdit" type="submit" class="btn_member btn-danger" value="Cập nhật"><span>Cập nhật</span></button>&nbsp;&nbsp;				      <button id="btnReset" name="btnReset" type="reset" class="btn_member btn-danger" value="Nhập lại"><span>Nhập lại</span></button> 
													</td>
												</tr>
											</tbody></table>
										</form>
									</div>

								</div>          
							</div>
						</div>
					</div>
					<div class="clear"></div>
							<!-- <div class="pagination">
							</div> -->
						</div>
						<div class="col-md-3 hidden-xs hidden-sm">
							<div class="header">
								<span>Danh mục tùy chọn</span>
							</div>
							<div class="media news longer">
								<div class="media-left">
									<a href="http://fptcamera.vn/tin-tuc/lap-dat-camera">
										<img class="media-object" alt="Lắp đặt camera" src="http://fptcamera.vn/resources/uploads/images/automatic/tin-tuc/lap-dat-camera.jpg">
									</a>
								</div>
								<div class="media-body">
									<a href="http://fptcamera.vn/tin-tuc/lap-dat-camera">
										<h4 class="media-heading longer"><i class="fa fa-angle-right hidden-lg hidden-md">&nbsp;</i>Thông tin cá nhân</h4>
									</a>
								</div>
							</div>
							<div class="media news longer">
								<div class="media-left">
									<a href="http://fptcamera.vn/tin-tuc/-lam-sao-de-biet-camera-dang-hoat-dong">
										<img class="media-object" alt="​lam sao de biet camera dang hoat dong" src="http://fptcamera.vn/resources/uploads/images/automatic/tin-tuc/cach-nhan-biet-camera-co-hoat-dong-khong.jpg">
									</a>
								</div>
								<div class="media-body">
									<a href="{{ route('list.order') }}">
										<h4 class="media-heading longer"><i class="fa fa-angle-right hidden-lg hidden-md">&nbsp;</i>​Quản lý đơn hàng</h4>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endsection