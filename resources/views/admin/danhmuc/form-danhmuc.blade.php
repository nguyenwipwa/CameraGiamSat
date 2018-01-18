@extends('admin.layout.app')
@section('script')
<link href="{{asset('resources/views/admin/css/stylesheet.css')}}" rel="stylesheet" type="text/css" />
<script src="{{asset('resources/views/admin/js/common.js')}}" type="text/javascript"></script>

@endsection
<!-- Content Wrapper. Contains page content -->
@section('content')
<div id="content">
  <div class="content-wrapper">
    <section class="content-header">
      <div class="page-header">
        <div class="container-fluid">
          <div class="pull-right">
            <button type="submit" form="form-coupon" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Lưu"><i class="fa fa-save"></i></button>
            <a href="{{ route('danhsachmenu') }}" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Trở về"><i class="fa fa-reply"></i></a></div>
            <h1>Quản lý danh mục</h1>
            <ul class="breadcrumb">
              <li><a href="#">Quản lý Menu</a></li>
              <li><a href="{{ route('danhsachmenu') }}">Danh sách Menu</a></li>
            </ul>
          </div>
        </div>
      </section>
      <div class="container-fluid">     <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="fa fa-pencil"></i> Sửa danh mục Menu</h3>
        </div>
        <div class="panel-body">
          <form action="{{ route('add.category') }}" method="post" enctype="multipart/form-data" id="form-coupon" class="form-horizontal" onsubmit="return checkForm()">
            {{ csrf_field() }}
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab-general" data-toggle="tab">Tổng quan</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab-general">
                <div class="form-group required">
                  <input type="hidden" name="id" value="{{ $cate->id or 0 }}">
                  <label class="col-sm-2 control-label" for="input-name">Tên danh mục</label>
                  <div class="col-sm-10">
                    <input type="text" id="name" name="name" value="{{ $cate->name or '' }}" placeholder="Tên danh mục" id="input-name" class="form-control" required="true">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-type"><span data-toggle="tooltip" title="" data-original-title="Tên danh mục cha chứa danh mục này.">Danh mục cha</span></label>
                  @php
                  $cate = $cate==null ? (object) ['id_root'=>'0', 'status'=> '0', 'icon'=>'']: $cate;
                  @endphp
                  <div class="col-sm-10">
                    <select name="id_root" id="input-tax-class" class="form-control">
                      <option value="0" {{($cate->id_root)==0 ? 'selected="selected"' : ''}}> --Không-- </option>
                      @foreach ($listCate as $element)
                      <option {{$cate->id_root==$element->id ? 'selected="selected"' : ''}} value="{{$element->id}}">---{{$element->name}}</option>
                      @foreach ($element->getCategoryByIdToot($element->id)  as $element2)
                      <option {{$cate->id_root==$element2->id ? 'selected="selected"' : ''}} value="{{$element2->id}}"> --------{{$element2->name}} </option>
                      @endforeach
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-status">Trạng thái</label>
                  <div class="col-sm-10">
                    <select name="status" id="input-status" class="form-control">
                      <option {{ ($cate->status or $cate->status) =='1' ? "selected='selected'" : '' }} value="1">Kích hoạt</option>
                      <option {{ ($cate->status or $cate->status) =='0' ? 'selected="selected"' : "" }} value="0">Chưa kích hoạt</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ảnh</label>
                  <div class="col-sm-10">
                    <input style="cursor: pointer;" value="{{ $cate->icon }}" class="form-control" readonly="readonly" name="icon" id="img" onclick="$('#file').click()">
                    <input accept="image/*" class="hidden" type="file" id="file" value="" id="input-image" onchange="$('#img').val($(this).val())">
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function checkForm(){
    if($('#name').val()=='') 
      return false;
    else return true;
  }
</script>
@endsection