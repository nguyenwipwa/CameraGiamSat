@extends('admin.layout.app')
@section('script')
<script src="{{ asset('resources/views/admin/ckeditor/ckeditor.js') }}"></script>
<link href="{{asset('resources/views/admin/css/stylesheet.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

<div id="content">
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<div class="page-header">
				<div class="container-fluid">
					<div class="pull-right">
						<button type="submit" form="form-news" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Lưu"><i class="fa fa-save"></i></button>
						<a href="http://localhost:81/opencart/admin/index.php?route=news/news&amp;user_token=Q74z2jgRxLnsqsV2GZuYnCGtkxJGToGo" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Trở về"><i class="fa fa-reply"></i></a></div>
						<h1>Quản lý tin tức</h1>
						<ul class="breadcrumb">
							<li><a href="http://localhost:81/opencart/admin/index.php?route=common/dashboard&amp;user_token=Q74z2jgRxLnsqsV2GZuYnCGtkxJGToGo">Trang chủ</a></li>
							<li><a href="http://localhost:81/opencart/admin/index.php?route=news/news&amp;user_token=Q74z2jgRxLnsqsV2GZuYnCGtkxJGToGo">Quản lý tin tức</a></li>
						</ul>
					</div>
				</div>
				<div class="container-fluid">         
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-pencil"></i> Thêm tin tức</h3>
						</div>
						<div class="panel-body">
							<form action="{{ route('themtintuc') }}" method="POST" enctype="multipart/form-data" id="form-news" class="form-horizontal">
               {{ csrf_field() }}
               <div class="tab-content">
                 <div class="tab-pane active" id="tab-general">
                  <div class="tab-content">                                   
                   <div class="tab-pane active" id="language2">
                    <div class="form-group required">
                      <label class="col-sm-2 control-label"  for="input-name2">Tên tin tức</label>
                      <div class="col-sm-10">
                        <input type="text" name="title" value="" required="true" placeholder="Tên tin tức" id="input-name2" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                     <label class="col-sm-2 control-label" for="input-description2">Nội dung</label>
                     <div class="col-sm-10">
                      <textarea name="content" placeholder="Mô tả" id="input-description2" data-toggle="summernote" data-lang="" class="form-control" style="display: none;"></textarea>

                    </div>	
                  </div>
                  <div class="form-group required">
                   <label class="col-sm-2 control-label" for="input-meta-title2">Mô tả</label>
                   <div class="col-sm-10">
                    <textarea name="description" rows="5" placeholder="Thẻ meta Mô tả" id="input-meta-description2" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group">
                 <label class="col-sm-2 control-label" for="input-meta-description2">Hình ảnh</label>
                 <div class="col-sm-10">
                  <input type="file" name="fImage" rows="5" placeholder="Thẻ meta Mô tả" id="input-meta-description2" class="form-control"></input>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </form>
  </div>
</div>
</div>
<link href="{{asset('resources/views/admin/bootstrap.css')}}" rel="stylesheet"/>
<link href="{{asset('resources/views/admin/css/codemirror.css')}}" rel="stylesheet"/>
<link href="{{asset('resources/views/admin/css/monokai.css')}}" rel="stylesheet"/>
<script type="text/javascript" src="{{asset('resources/views/admin/js/codemirror.js')}}"></script>
<script type="text/javascript" src="{{asset('resources/views/admin/js/xml.js')}}"></script>
<script type="text/javascript" src="{{asset('resources/views/admin/js/formatting.js')}}"></script>
<script type="text/javascript" src="{{asset('resources/views/admin/js/summernote/summernote.js')}}"></script>
<link href="{{asset('resources/views/admin/js/summernote/summernote.css')}}" rel="stylesheet"/>
<script type="text/javascript" src="{{asset('resources/views/admin/js/summernote/summernote-image-attributes.js')}}"></script>
<script type="text/javascript" src="{{asset('resources/views/admin/js/opencart.js')}}"></script>>

<script type="text/javascript"><!--
        // Category
        $('input[name=\'category\']').autocomplete({
        	'source': function (request, response) {
        		$.ajax({
        			url: 'index.php?route=news/category/autocomplete&user_token=Q74z2jgRxLnsqsV2GZuYnCGtkxJGToGo&filter_name=' + encodeURIComponent(request),
        			dataType: 'json',
        			success: function (json) {
        				response($.map(json, function (item) {
        					return {
        						label: item['name'],
        						value: item['category_id']
        					}
        				}));
        			}
        		});
        	},
        	'select': function (item) {
        		$('input[name=\'category\']').val('');

        		$('#news-category' + item['value']).remove();

        		$('#news-category').append('<div id="news-category' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="news_category[]" value="' + item['value'] + '" /></div>');
        	}
        });

        $('#news-category').delegate('.fa-minus-circle', 'click', function () {
        	$(this).parent().remove();
        });

        // Downloads
        $('input[name=\'download\']').autocomplete({
        	'source': function (request, response) {
        		$.ajax({
        			url: 'index.php?route=news/download/autocomplete&user_token=Q74z2jgRxLnsqsV2GZuYnCGtkxJGToGo&filter_name=' + encodeURIComponent(request),
        			dataType: 'json',
        			success: function (json) {
        				response($.map(json, function (item) {
        					return {
        						label: item['name'],
        						value: item['download_id']
        					}
        				}));
        			}
        		});
        	},
        	'select': function (item) {
        		$('input[name=\'download\']').val('');

        		$('#news-download' + item['value']).remove();

        		$('#news-download').append('<div id="news-download' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="news_download[]" value="' + item['value'] + '" /></div>');
        	}
        });

        $('#news-download').delegate('.fa-minus-circle', 'click', function () {
        	$(this).parent().remove();
        });

        // Related
        $('input[name=\'related\']').autocomplete({
        	'source': function (request, response) {
        		$.ajax({
        			url: 'index.php?route=news/news/autocomplete&user_token=Q74z2jgRxLnsqsV2GZuYnCGtkxJGToGo&filter_name=' + encodeURIComponent(request),
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
        		$('input[name=\'related\']').val('');

        		$('#news-related' + item['value']).remove();

        		$('#news-related').append('<div id="news-related' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="news_related[]" value="' + item['value'] + '" /></div>');
        	}
        });

        $('#news-related').delegate('.fa-minus-circle', 'click', function () {
        	$(this).parent().remove();
        });
        //--></script>
        <script type="text/javascript"><!--
        var image_row = 0;

        function addImage() {
        	html = '<tr id="image-row' + image_row + '">';
        	html += '  <td class="text-left"><a href="" id="thumb-image' + image_row + '"data-toggle="image" class="img-thumbnail"><img src="http://localhost:81/opencart/image/cache/no_image-100x100.png" alt="" title="" data-placeholder="http://localhost:81/opencart/image/cache/no_image-100x100.png" /></a><input type="hidden" name="news_image[' + image_row + '][image]" value="" id="input-image' + image_row + '" /></td>';
        	html += '  <td class="text-right"><input type="text" name="news_image[' + image_row + '][sort_order]" value="" placeholder="Thứ tự" class="form-control" /></td>';
        	html += '  <td class="text-left"><button type="button" onclick="$(\'#image-row' + image_row + '\').remove();" data-toggle="tooltip" title="Gỡ bỏ" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';
        	html += '</tr>';

        	$('#images tbody').append(html);

        	image_row++;
        }
        //--></script>

        <script type="text/javascript"><!--
        $('.date').datetimepicker({
        	language: 'vi',
        	pickTime: false
        });

        $('.time').datetimepicker({
        	language: 'vi',
        	pickDate: false
        });

        $('.datetime').datetimepicker({
        	language: 'vi',
        	pickDate: true,
        	pickTime: true
        });
        //--></script>
        <script type="text/javascript"><!--
        $('#language a:first').tab('show');
        $('#option a:first').tab('show');
        //--></script>
      </div>
    </section>
  </div>

  @endsection

