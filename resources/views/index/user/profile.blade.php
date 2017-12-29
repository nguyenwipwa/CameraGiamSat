
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
											if (f.password.value !='' && f.password.value != f.re_password.value ) {
												alert("Xác nhật khẩu không đúng");
												f.re_password.focus();
												return false;
											} 
											if (f.name.value == '' ) {
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
										@if (session('status'))
										<div class="alert alert-success">
											{{ session('status') }}
										</div>
										@endif
										<form  action="{{ route('update.user') }}" id="frmMember" method="post" onsubmit="return checkform(this);" enctype="multipart/form-data">
											{{ csrf_field() }}
											<table cellspacing="0" cellpadding="0" border="0">
												<tbody>
													<tr>
														<td>E-mail <font color="red">*</font></td>
														<td>	<input class="form-control" type="text" style="width:300px;" value="nguyenwipwa@gmail.com" class="textfiled" name="email" id="email_address" readonly="readonly"></td>
													</tr>
													<tr>
														<td><b>Đổi mật khẩu mới.</b></td>
														<td><span class="font_err">Điền mật khẩu mới để thay đổi mật khẩu (Nếu để trống sẽ giữ lại mật khẩu cũ) </span></td>
													</tr>
													<tr>
														<td>Mật khẩu  </td>
														<td><input class="form-control" type="password" style="width:300px;" class="textfiled" name="password"></td>
													</tr>
													<tr>
														<td>Xác nhận mật khẩu </td>
														<td>	<input class="form-control" type="password" style="width:300px;" class="textfiled" name="re_password">	</td>
													</tr>
													<tr>      
														<td>Họ tên <font color="red">*</font></td>
														<td><input class="form-control" type="text" value="{{ Auth::user()->name }}" class="textfiled" name="name" id="full_name" style="width:300px;"></td> 
													</tr>
													<tr>		
														<td>Điện thoại <font color="red">*</font></td>
														<td><input class="form-control" type="text" style="width:300px;" class="textfiled" value="{{ Auth::user()->phone_number }}" name="phone"> </td>
													</tr>
													<tr>      
														<td>Địa chỉ </td>
														<td><input class="form-control" type="text" value="{{ Auth::user()->address()->address }}" class="textfiled" name="address" id="address" style="width:300px;"></td>
													</tr>
													<tr>      
														<td>Thành phố </td>
														<td><select class="form-control" name="city" id="city" class="select" style="width:302px;" onchange="CityChange(this.value);">
															@foreach(DB::select('SELECT * from thanhpho') as $key)
															<option {{ $key->id==Auth::user()->address()->thanhPho()->id ? 'selected' : '' }} value="{{ $key->id }}">{{ $key->name }}</option>
															@endforeach
														</select></td> 
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
						<!-- Layout right -->
						@include('../../index.user.layoutRight')
					</div>
				</div>
			</div>
		</div>
		@endsection