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
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <div id="content">
      <div class="page-header">
        <div class="container-fluid">
          <div class="pull-right">
            <button type="button" data-toggle="tooltip" title="" onclick="$('#filter-product').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg" data-original-title="Lọc"><i class="fa fa-filter"></i></button>
            <a href="{{-- {{ url('/admin/themsanpham.html') }} --}}" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Thêm"><i class="fa fa-plus"></i></a>
            <button type="submit" form="form-product" formaction="http://localhost/opencart/admin/index.php?route=catalog/product/copy&amp;user_token=R94rZ1nsVBrQ2iH5qTwXVAs0dr0LuFak" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Sao chép"><i class="fa fa-copy"></i></button>
            <button type="button" form="form-product"  data-toggle="tooltip" title="" class="btn btn-danger" onclick="confirm('Xóa/gỡ cài đặt không thể hoàn tác! Bạn có chắc bạn muốn làm điều này?') ? $('#form-product').submit() : false;" data-original-title="Xoá"><i class="fa fa-trash-o"></i></button>
          </div>
          <h1>Quản lý đơn hàng</h1>
          <ul class="breadcrumb">
            <li><a href="http://localhost/opencart/admin/index.php?route=common/dashboard&amp;user_token=R94rZ1nsVBrQ2iH5qTwXVAs0dr0LuFak">Trang chủ</a></li>
            <li><a href="http://localhost/opencart/admin/index.php?route=catalog/product&amp;user_token=R94rZ1nsVBrQ2iH5qTwXVAs0dr0LuFak">Quản lý Đơn hàng </a></li>
          </ul>
        </div>
      </div>
      <div class="container-fluid">        <div class="row">
        <div id="filter-product" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-filter"></i> Bộ lọc</h3>
            </div>
            <div class="panel-body">
              <div class="form-group">
                <label class="control-label" for="input-name">Tên đơn hàng</label>
                <input type="text" name="filter_name" value="" placeholder="Tên sản phẩm" id="input-name" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
              </div>
              <div class="form-group">
                <label class="control-label" for="input-model">Mã sản phẩm</label>
                <input type="text" name="filter_model" value="" placeholder="Mã sản phẩm" id="input-model" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
              </div>
              <div class="form-group">
                <label class="control-label" for="input-price">Giá</label>
                <input type="text" name="filter_price" value="" placeholder="Giá" id="input-price" class="form-control">
              </div>
              <div class="form-group">
                <label class="control-label" for="input-quantity">Số lượng</label>
                <input type="text" name="filter_quantity" value="" placeholder="Số lượng" id="input-quantity" class="form-control">
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
              <h3 class="panel-title"><i class="fa fa-list"></i> Danh sách đơn hàng</h3>
            </div>
            <div class="panel-body">
              <form action="{{route('xoaall')}}" method="post" enctype="multipart/form-data" id="form-product">
                {{ csrf_field() }}
                <div class="table-responsive">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></td>
                        <td class="text-right"> <a href="http://localhost:81/opencart/admin/index.php?route=sale/order&amp;user_token=lpNDo2YYaWJZcGIfdBXdeLtxkLOyo2qs&amp;sort=o.order_id&amp;order=ASC" class="desc">ID đơn hàng</a> </td>
                        <td class="text-left"> <a href="">Khách hàng</a> </td>
                        <td class="text-left"> <a href="">Trạng thái</a> </td>
                        <td class="text-right"> <a href="">Tổng cộng</a> </td>
                        <td class="text-left"> <a href="">Ngày thêm</a> </td>
                        <td class="text-left"> <a href="">Ngày chỉnh sửa</a> </td>
                        <td class="text-right">Tác vụ</td>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($listOrders as $element)
                     <tr>
                      <td class="text-center">                  
                       <input type="checkbox" name="selected[]" value="{{$element->id}}">
                       <input type="hidden" name="shipping_code[]" value="flat.flat"></td>
                       <td class="text-right">{{$element->id}}</td>
                       <td class="text-left">{{$element->name_customer}}</td>
                       <td class="text-left">{{$element->active == 1 ? "Kích hoạt" :  "Không kích hoạt"}}</td>
                       <td class="text-right">{{$element->total}}</td>
                       <td class="text-left">{{$element->created_at}}</td>
                       <td class="text-left">{{$element->updated_at}}</td>
                       <td class="text-right">
                        <div style="min-width: 120px;">
                          <div class="btn-group"> <a href="{{route('chitietdonhang',[$element->id])}}" data-toggle="tooltip" title="" class="btn btn-xprimary" data-original-title="Xem"><i class="fa fa-eye"></i>
                          </a>
                          <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></button>
                          <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href=""><i class="fa fa-pencil"></i> Sửa</a></li>
                            <li><a href="{{route('xoadonhangspam',[$element->id])}}"><i class="fa fa-trash-o"></i> Xoá</a></li>
                          </ul>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
                @endforeach
              </table>
            </div>
          </form>
          <div class="row">
{{-- 
                <div class="col-sm-6 text-left">Hiển thị từ {{ $listProduct->currentPage() }} đến   {{ $listProduct->lastPage() }} trang </div>
                <div class="col-sm-6 text-right">{{ $listProduct->render() }}</div> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript"><!--
    $('#button-filter').on('click', function() {
      var url = '';

      var filter_name = $('input[name=\'filter_name\']').val();

      if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
      }

      var filter_model = $('input[name=\'filter_model\']').val();

      if (filter_model) {
        url += '&filter_model=' + encodeURIComponent(filter_model);
      }

      var filter_price = $('input[name=\'filter_price\']').val();

      if (filter_price) {
        url += '&filter_price=' + encodeURIComponent(filter_price);
      }

      var filter_quantity = $('input[name=\'filter_quantity\']').val();

      if (filter_quantity) {
        url += '&filter_quantity=' + encodeURIComponent(filter_quantity);
      }

      var filter_status = $('select[name=\'filter_status\']').val();

      if (filter_status !== '') {
        url += '&filter_status=' + encodeURIComponent(filter_status);
      }

      location = 'index.php?route=catalog/product&user_token=R94rZ1nsVBrQ2iH5qTwXVAs0dr0LuFak' + url;
    });
    //--></script>
    <script type="text/javascript"><!--
// IE and Edge fix!
$('button[form=\'form-product\']').on('click', function(e) {
  $('#form-product').attr('action', $(this).attr('formaction'));
});

$('input[name=\'filter_name\']').autocomplete({
  'source': function(request, response) {
    $.ajax({
      url: 'index.php?route=catalog/product/autocomplete&user_token=R94rZ1nsVBrQ2iH5qTwXVAs0dr0LuFak&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response($.map(json, function(item) {
          return {
            label: item['name'],
            value: item['product_id']
          }
        }));
      }
    });
  },
  'select': function(item) {
    $('input[name=\'filter_name\']').val(item['label']);
  }
});

$('input[name=\'filter_model\']').autocomplete({
  'source': function(request, response) {
    $.ajax({
      url: 'index.php?route=catalog/product/autocomplete&user_token=R94rZ1nsVBrQ2iH5qTwXVAs0dr0LuFak&filter_model=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response($.map(json, function(item) {
          return {
            label: item['model'],
            value: item['product_id']
          }
        }));
      }
    });
  },
  'select': function(item) {
    $('input[name=\'filter_model\']').val(item['label']);
  }
});
//--></script></div>

</div><!-- /.content-wrapper -->

</div>
@endsection