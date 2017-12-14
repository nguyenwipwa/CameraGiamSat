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
                            {{-- {{$news->id}} --}}
                            <h3 class="panel-title"><i class="fa fa-pencil"></i> Thêm tin tức</h3>
                        </div>
                        <div class="panel-body">
                            <form action="{{route('suatintuc',['id'=>$news->id])}}" method="POST" enctype="multipart/form-data" id="form-news" class="form-horizontal">
                               {{ csrf_field() }}

                               <div class="tab-content">
                                   <div class="tab-pane active" id="tab-general">
                                      <div class="tab-content">                                   
                                         <div class="tab-pane active" id="language2">
                                            <div class="form-group required">
                                              <label class="col-sm-2 control-label"  for="input-name2">Tên tin tức</label>
                                              <div class="col-sm-10">
                                                <input type="text" name="title" value="{{$news->title}}" required="true" placeholder="Tên tin tức" id="input-name2" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                           <label class="col-sm-2 control-label" for="input-description2">Nội dung</label>
                                           <div class="col-sm-10">
                                              <textarea name="content" placeholder="Mô tả" id="input-description2" data-toggle="summernote" data-lang="" class="form-control" style="display: none;">{{$news_descrip->content}}</textarea>
                                          </div>	
                                      </div>
                                      <div class="form-group required">
                                         <label class="col-sm-2 control-label" for="input-meta-title2">Mô tả</label>
                                         <div class="col-sm-10">
                                            <textarea name="description" rows="5" placeholder="Thẻ meta Mô tả" id="input-meta-description2" class="form-control">{{$news->decription}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                       <label class="col-sm-2 control-label" for="input-meta-description2">Hình ảnh</label>
                                       <div class="col-sm-10">
                                          <input type="file" name="fImage" rows="5" value="{{$news->img}}" placeholder="" id="" class="form-control"></input>
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
          <script type="text/javascript" src="{{asset('resources/views/admin/js/opencart.js')}}"></script>


    </div>
</section>
</div>

@endsection

