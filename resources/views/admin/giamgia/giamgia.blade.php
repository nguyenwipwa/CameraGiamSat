@extends('admin.layout.app')
@section('script')
<script src="{{ asset('public/admin/ckeditor/ckeditor.js') }}"></script>
<script src=" {{ asset('public/admin/js/danhsachsanpham.js') }}"></script>
<script src=" {{ asset('public/admin/js/functionsp.js') }}"></script>
<script src="{{ asset('public/admin/js/jquery.quicksearch.js') }}"></script>
<link rel="stylesheet" type="text/css" href=" {{ asset('public/admin/css/danhsachsanpham.css') }}">
<link href="{{asset('resources/views/admin/css/stylesheet.css')}}" rel="stylesheet" type="text/css" />
@endsection
<!-- Content Wrapper. Contains page content -->
@section('content')
<div id="content">
  <div class="content-wrapper">
    <section class="content-header">
      <div class="page-header">
        <div class="container-fluid">
          <div class="pull-right"><a href="{{ route('phieugiamgia.form',[0]) }}" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Thêm"><i class="fa fa-plus"></i></a>
            <button type="button" data-toggle="tooltip" title="" class="btn btn-danger" onclick="confirm('Xóa/gỡ cài đặt không thể hoàn tác! Bạn có chắc bạn muốn làm điều này?') ? $('#form-coupon').submit() : false;" data-original-title="Xoá"><i class="fa fa-trash-o"></i></button>
          </div>
          <h1>Phiếu giảm giá</h1>
          <ul class="breadcrumb">
            <li><a href="#">Bán hàng</a></li>
            <li><a href="{{ route('phieugiamgia') }}">Phiếu giảm giá</a></li>
          </ul>
        </div>
      </div>
    </section>
    <div class="container-fluid">
      @if (session('status'))
      <div class="alert alert-success">
        {{ session('status') }}
      </div>
       @endif
      @if (session('error'))
      <div class="alert alert-danger">
        {{ session('error') }}
      </div>
      @endif
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="fa fa-list"></i> Danh sách phiếu giảm giá</h3>
        </div>
        <div class="panel-body">
          <form action="{{ route('xoa.giamgia') }}" method="post" enctype="multipart/form-data" id="form-coupon">
            {{ csrf_field() }}
            <div class="table-responsive">
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></td>
                    <td class="text-left">                    <a  class="asc">Tên phiếu giảm giá</a>
                    </td>
                    <td class="text-left">                    <a >Mã</a>
                    </td>
                    <td class="text-right">                    <a >Giảm giá</a>
                    </td>
                    <td class="text-left">                    <a >Trạng thái</a>
                    </td>
                    <td class="text-right">Thao tác</td>
                  </tr>
                </thead>
                <tbody>
                  @foreach($listSalesOff as $key => $value)
                  <tr>
                    <td class="text-center">                    
                      <input type="checkbox" name="selected[]" value="{{ $value->id }}">
                    </td>
                    <td class="text-left">{{ $value->title }}</td>
                    <td class="text-left">{{ $value->key }}</td>
                    <td class="text-right">{{ $value->percent }} %</td>
                    <td class="text-left">{{ $value->status=='1' ? 'Kích hoạt' : 'Vô hiệu hóa' }}</td>
                    <td class="text-right"><a href="{{ route('phieugiamgia.form',[$value->id]) }}" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Sửa"><i class="fa fa-pencil"></i></a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </form>
          <div class="row">
            <div class="col-sm-6 text-left"></div>
            <div class="col-sm-6 text-right">{{ $listSalesOff->render() }}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection