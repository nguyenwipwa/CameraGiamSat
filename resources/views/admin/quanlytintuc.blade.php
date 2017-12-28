@extends('admin.layout.app')
@section('script')
<link href="{{asset('resources/views/admin/css/stylesheet.css')}}" rel="stylesheet" type="text/css" />
<script src="{{ asset('public/admin/ckeditor/ckeditor.js') }}"></script>

@endsection
@section('content')
<div id="content">
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<div class="page-header">
				<div class="container-fluid">
					<div class="pull-right">
						<button type="button" data-toggle="tooltip" title="" onclick="$('#filter-news').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg" data-original-title="Lọc"><i class="fa fa-filter"></i></button>
						<a href="http://localhost/opencart/admin/index.php?route=news/news/add&amp;user_token=J4lAsHL9NSBlFhVdZ63ZhssBvr5tmXr0" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Thêm"><i class="fa fa-plus"></i></a>
						<button type="submit" form="form-news" formaction="http://localhost/opencart/admin/index.php?route=news/news/copy&amp;user_token=J4lAsHL9NSBlFhVdZ63ZhssBvr5tmXr0" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Sao chép"><i class="fa fa-copy"></i></button>
						<button type="button" form="form-news" formaction="http://localhost/opencart/admin/index.php?route=news/news/delete&amp;user_token=J4lAsHL9NSBlFhVdZ63ZhssBvr5tmXr0" data-toggle="tooltip" title="" class="btn btn-danger" onclick="confirm('Xóa/gỡ cài đặt không thể hoàn tác! Bạn có chắc bạn muốn làm điều này?') ? $('#form-news').submit() : false;" data-original-title="Xoá"><i class="fa fa-trash-o"></i></button>
					</div>
					<h1>Quản lý tin tức</h1>
					<ul class="breadcrumb">
						<li><a href="http://localhost/opencart/admin/index.php?route=common/dashboard&amp;user_token=J4lAsHL9NSBlFhVdZ63ZhssBvr5tmXr0">Trang chủ</a></li>
						<li><a href="http://localhost/opencart/admin/index.php?route=news/news&amp;user_token=J4lAsHL9NSBlFhVdZ63ZhssBvr5tmXr0">Quản lý tin tức</a></li>
					</ul>
				</div>
			</div>
			<div class="container-fluid">    
				@if (Session::has('message'))
				{{-- <div class="alert alert-info" id="notify">{{ Session::get('message') }}</div> --}}
				<div id="notify" class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> Thành công: Bạn đã sửa đổi tin tức!
					<button type="button" class="close" data-dismiss="alert">×</button>
				</div>
				@endif       
				<div class="row">
					<div id="filter-news" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title"><i class="fa fa-filter"></i> Bộ lọc</h3>
							</div>
							<div class="panel-body">
								<div class="form-group">
									<label class="control-label" for="input-name">Tên tin tức</label>
									<input type="text" name="filter_name" value="" placeholder="Tên tin tức" id="input-name" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
								</div>
								<div class="form-group">
									<label class="control-label" for="input-status">Trạng thái</label>
									<select name="filter_status" id="input-status" class="form-control">
										<option value=""></option>
										<option value="1">Kích hoạt</option>
										<option value="0">Vô hiệu hóa</option>
									</select>
								</div>
								<div class="form-group text-right">
									<button type="button" id="button-filter" class="btn btn-default"><i class="fa fa-filter"></i> Lọc</button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-9 col-md-pull-3 col-sm-12">
						<div class="panel panel-default">
							
							<div class="panel-heading">
								<h3 class="panel-title"><i class="fa fa-list"></i> Danh sách tin tức</h3>
							</div>
							<div class="panel-body">
								<form action="http://localhost/opencart/admin/index.php?route=news/news/delete&amp;user_token=J4lAsHL9NSBlFhVdZ63ZhssBvr5tmXr0" method="post" enctype="multipart/form-data" id="form-news">
									<div class="table-responsive">
										<table class="table table-bordered table-hover">
											<thead>
												<tr>
													<td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);">
													</td>
													<td class="text-center">Hình ảnh</td>
													<td class="text-left">                                                <a href="http://localhost/opencart/admin/index.php?route=news/news&amp;user_token=J4lAsHL9NSBlFhVdZ63ZhssBvr5tmXr0&amp;sort=nd.name&amp;order=DESC">Tên tin tức</a> </td>
													<td class="text-left">                                                <a href="http://localhost/opencart/admin/index.php?route=news/news&amp;user_token=J4lAsHL9NSBlFhVdZ63ZhssBvr5tmXr0&amp;sort=n.status&amp;order=DESC">Trạng thái</a> </td>
													<td class="text-right">Thao tác</td>
												</tr>
											</thead>
											<tbody>
												@foreach($listNews as $row)
												<tr>
													<td class="text-center">                                                        <input type="checkbox" name="selected[]" value="1">
													</td>
													<td class="text-center"> <img style="width: 50px;height: 50px;" src="{{ asset('public/images/tin-tuc/'.$row->img) }}" alt="" class="img-thumbnail"> </td>
													<td class="text-left">{{ $row->title }}</td>
													<td class="text-left">{{ $row->status==1?'Kích hoạt' : 'Chưa kích hoạt' }} {{$row->id}}</td>
													<td class="text-right"><a href="{{route('suatintuc1',['id' => $row->id])}}" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Sửa"><i class="fa fa-pencil"></i></a></td>
												</tr>
												@endforeach
											</tbody>

										</table>
									</div>
								</form>
								<div class="row">
									<div class="col-sm-6 text-left">Hiển thị từ 1 đến 19 của 19 (1 trang)</div>
									<div class="col-sm-6 text-right">{{ $listNews->render() }}</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<script type="text/javascript"><!--
			$('#button-filter').on('click', function () {
				var url = '';

				var filter_name = $('input[name=\'filter_name\']').val();

				if (filter_name) {
					url += '&filter_name=' + encodeURIComponent(filter_name);
				}
				var filter_status = $('select[name=\'filter_status\']').val();

				if (filter_status !== '') {
					url += '&filter_status=' + encodeURIComponent(filter_status);
				}

				location = 'index.php?route=news/news&user_token=J4lAsHL9NSBlFhVdZ63ZhssBvr5tmXr0' + url;
			});
			//--></script>
			<script type="text/javascript"><!--
        // IE and Edge fix!
        $('button[form=\'form-news\']').on('click', function (e) {
        	$('#form-news').attr('action', $(this).attr('formaction'));
        });

        $('input[name=\'filter_name\']').autocomplete({
        	'source': function (request, response) {
        		$.ajax({
        			url: 'index.php?route=news/news/autocomplete&user_token=J4lAsHL9NSBlFhVdZ63ZhssBvr5tmXr0&filter_name=' + encodeURIComponent(request),
        			dataType: 'json',
        			success: function (json) {
        				response($.map(json, function (item) {
        					return {
        						label: item['name'],
        						value: item['news_id']
        					}
        				}));
        			}
        		});
        	},
        	'select': function (item) {
        		$('input[name=\'filter_name\']').val(item['label']);
        	}
        });

        //--></script>
        <script type="text/javascript">
        	$(document).ready(function(){
        		setTimeout(function(){
        			$('#notify').fadeOut( "slow" );
        		}, 3000);
        	});

        </script>
    </div>
</section>
</div>
@endsection