@extends('layouts.subClient')
@section('script')
<link rel="stylesheet" type="text/css" href="{{asset('public/stylesheets/product.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('public/stylesheets/shopping.css')}}" />
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="header">
				<span>Kiểm tra thông tin nhận hàng</span>
			</div>
			@include('../../index.carts.tableCart')
		</div>
	</div>
	<div class="clear"></div>
</div>
@endsection