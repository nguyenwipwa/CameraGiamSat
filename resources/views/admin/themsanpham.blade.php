@extends('admin.layout.app');
@section('script')
<script src="{{ asset('resources/views/admin/ckeditor/ckeditor.js') }}"></script>
<link href="{{asset('resources/views/admin/css/stylesheet.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

<div id="content">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="page-header" style="border-bottom: 1px solid #c3c2c2">
        <div class="container-fluid">
          <div class="pull-right">
            <button type="submit" form="form-product" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Lưu"><i class="fa fa-save"></i></button>
            <a href="http://localhost:81/opencart/admin/index.php?route=catalog/product&amp;user_token=woJZfB09PyGgGMMohXrVpLzzLUiA9QQd" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Trở về"><i class="fa fa-reply"></i></a></div>
            <h1>Quản lý sản phẩm</h1>
            <ul class="breadcrumb">
              <li><a href="http://localhost:81/opencart/admin/index.php?route=common/dashboard&amp;user_token=woJZfB09PyGgGMMohXrVpLzzLUiA9QQd">Trang chủ</a></li>
              <li><a href="http://localhost:81/opencart/admin/index.php?route=catalog/product&amp;user_token=woJZfB09PyGgGMMohXrVpLzzLUiA9QQd">Quản lý sản phẩm</a></li>
            </ul>
          </div>
        </div>
        <div class="container-fluid">     <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-pencil"></i> Thêm sản phẩm</h3>
          </div>
          <div class="panel-body">
            <form action="http://localhost:81/opencart/admin/index.php?route=catalog/product/add&amp;user_token=woJZfB09PyGgGMMohXrVpLzzLUiA9QQd" method="post" enctype="multipart/form-data" id="form-product" class="form-horizontal">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tab-general" data-toggle="tab">Tổng quan</a></li>
                <li><a href="#tab-data" data-toggle="tab">Dữ liệu</a></li>
                <li><a href="#tab-links" data-toggle="tab">Liên kết</a></li>
                <li><a href="#tab-attribute" data-toggle="tab">Thuộc tính</a></li>
                {{-- <li><a href="#tab-option" data-toggle="tab">Tuỳ chọn</a></li> --}}
                <li><a href="#tab-recurring" data-toggle="tab">Trả hàng</a></li>
                <li><a href="#tab-discount" data-toggle="tab">Giảm giá</a></li>
                <li><a href="#tab-special" data-toggle="tab">Khuyến mãi</a></li>
                <li><a href="#tab-image" data-toggle="tab">Hình ảnh</a></li>
                <li><a href="#tab-reward" data-toggle="tab">Điểm thưởng</a></li>
                {{-- <li><a href="#tab-seo" data-toggle="tab">SEO</a></li> --}}
                <li><a href="#tab-design" data-toggle="tab"></a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab-general">

                  <div class="tab-content">                <div class="tab-pane active" id="language2">
                    <div class="form-group required">
                      <label class="col-sm-2 control-label" for="input-name2">Tên sản phẩm</label>
                      <div class="col-sm-10">
                        <input type="text" name="product_description[2][name]" value="" placeholder="Tên sản phẩm" id="input-name2" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="input-description2">Mô tả</label>
                      <div class="col-sm-10">
                        <textarea name="product_description[2][description]" placeholder="Mô tả" id="input-description2" data-toggle="summernote" data-lang="" class="form-control" style="display: none;"></textarea>
                      </div>
                    </div>
                    <div class="form-group required">
                      <label class="col-sm-2 control-label" for="input-meta-title2">Thẻ meta Tiêu đề</label>
                      <div class="col-sm-10">
                        <input type="text" name="product_description[2][meta_title]" value="" placeholder="Thẻ meta Tiêu đề" id="input-meta-title2" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="input-meta-description2">Thẻ meta Mô tả</label>
                      <div class="col-sm-10">
                        <textarea name="product_description[2][meta_description]" rows="5" placeholder="Thẻ meta Mô tả" id="input-meta-description2" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="input-meta-keyword2">Thẻ meta Từ khóa </label>
                      <div class="col-sm-10">
                        <textarea name="product_description[2][meta_keyword]" rows="5" placeholder="Thẻ meta Từ khóa " id="input-meta-keyword2" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="input-tag2"><span data-toggle="tooltip" title="" data-original-title="ngăn cách bằng dấu phẩy">Sản phẩm Tags</span></label>
                      <div class="col-sm-10">
                        <input type="text" name="product_description[2][tag]" value="" placeholder="Sản phẩm Tags" id="input-tag2" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-data">
                <div class="form-group required">
                  <label class="col-sm-2 control-label" for="input-model">Mã sản phẩm</label>
                  <div class="col-sm-10">
                    <input type="text" name="model" value="" placeholder="Mã sản phẩm" id="input-model" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-sku"><span data-toggle="tooltip" title="" data-original-title="Giữ đơn vị trong kho">SKU</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="sku" value="" placeholder="SKU" id="input-sku" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-upc"><span data-toggle="tooltip" title="" data-original-title="Mã sản phẩm chung">UPC</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="upc" value="" placeholder="UPC" id="input-upc" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-ean"><span data-toggle="tooltip" title="" data-original-title="Số điều khoản Châu Âu">EAN</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="ean" value="" placeholder="EAN" id="input-ean" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-jan"><span data-toggle="tooltip" title="" data-original-title="Số điều khoản Nhật Bản">JAN</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="jan" value="" placeholder="JAN" id="input-jan" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-isbn"><span data-toggle="tooltip" title="" data-original-title="International Standard Book Number">ISBN</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="isbn" value="" placeholder="ISBN" id="input-isbn" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-mpn"><span data-toggle="tooltip" title="" data-original-title="Manufacturer Part Number">MPN</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="mpn" value="" placeholder="MPN" id="input-mpn" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-location">Địa điểm</label>
                  <div class="col-sm-10">
                    <input type="text" name="location" value="" placeholder="Địa điểm" id="input-location" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-price">Giá</label>
                  <div class="col-sm-10">
                    <input type="text" name="price" value="" placeholder="Giá" id="input-price" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-tax-class">Loại thuế</label>
                  <div class="col-sm-10">
                    <select name="tax_class_id" id="input-tax-class" class="form-control">
                      <option value="0"> ---Không--- </option>




                      <option value="9">Taxable Goods</option>




                      <option value="10">Downloadable Products</option>




                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-quantity">Số lượng</label>
                  <div class="col-sm-10">
                    <input type="text" name="quantity" value="1" placeholder="Số lượng" id="input-quantity" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-minimum"><span data-toggle="tooltip" title="" data-original-title="Yêu cầu số lượng đặt hàng tối thiểu">Số lượng tối thiểu</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="minimum" value="1" placeholder="Số lượng tối thiểu" id="input-minimum" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-subtract">Trừ trong kho</label>
                  <div class="col-sm-10">
                    <select name="subtract" id="input-subtract" class="form-control">




                      <option value="1" selected="selected">Có</option>
                      <option value="0">Không</option>




                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-stock-status"><span data-toggle="tooltip" title="" data-original-title="Trạng thái hiển thị khi một sản phẩm hết hàng trong kho">Trạng thái hết hàng</span></label>
                  <div class="col-sm-10">
                    <select name="stock_status_id" id="input-stock-status" class="form-control">




                      <option value="6">2-3 Days</option>




                      <option value="7">In Stock</option>




                      <option value="5">Out Of Stock</option>




                      <option value="8">Pre-Order</option>




                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Yêu cầu giao hàng</label>
                  <div class="col-sm-10">
                    <label class="radio-inline">                     <input type="radio" name="shipping" value="1" checked="checked">
                      Có
                    </label>
                    <label class="radio-inline">                     <input type="radio" name="shipping" value="0">
                      Không
                    </label>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-date-available">Ngày có sẵn</label>
                  <div class="col-sm-3">
                    <div class="input-group date">
                      <input type="text" name="date_available" value="2017-12-11" placeholder="Ngày có sẵn" data-date-format="YYYY-MM-DD" id="input-date-available" class="form-control">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                      </span></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-length">Kích thước (Dài x Rộng x Cao)</label>
                    <div class="col-sm-10">
                      <div class="row">
                        <div class="col-sm-4">
                          <input type="text" name="length" value="" placeholder="Chiều dài" id="input-length" class="form-control">
                        </div>
                        <div class="col-sm-4">
                          <input type="text" name="width" value="" placeholder="Chiều rộng" id="input-width" class="form-control">
                        </div>
                        <div class="col-sm-4">
                          <input type="text" name="height" value="" placeholder="Chiều cao" id="input-height" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-length-class">Đơn vị Chiều dài</label>
                    <div class="col-sm-10">
                      <select name="length_class_id" id="input-length-class" class="form-control">




                        <option value="1" selected="selected">Centimeter</option>




                        <option value="2">Millimeter</option>




                        <option value="3">Inch</option>




                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-weight">Trọng lượng</label>
                    <div class="col-sm-10">
                      <input type="text" name="weight" value="" placeholder="Trọng lượng" id="input-weight" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-weight-class">Đơn vị trọng lượng</label>
                    <div class="col-sm-10">
                      <select name="weight_class_id" id="input-weight-class" class="form-control">




                        <option value="1" selected="selected">Kilogram</option>




                        <option value="2">Gram</option>




                        <option value="5">Pound </option>




                        <option value="6">Ounce</option>




                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-status">Trạng thái</label>
                    <div class="col-sm-10">
                      <select name="status" id="input-status" class="form-control">




                        <option value="1" selected="selected">Kích hoạt</option>
                        <option value="0">Vô hiệu hóa</option>




                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-sort-order">Thứ tự</label>
                    <div class="col-sm-10">
                      <input type="text" name="sort_order" value="1" placeholder="Thứ tự" id="input-sort-order" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-links">
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-manufacturer"><span data-toggle="tooltip" title="" data-original-title="(Tự động hoàn thành)">Nhà sản xuất</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="manufacturer" value="" placeholder="Nhà sản xuất" id="input-manufacturer" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                      <input type="hidden" name="manufacturer_id" value="0">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-tax-class">Danh mục</label>
                    <div class="col-sm-10">
                      <select name="tax_class_id" id="input-tax-class" class="form-control">
                        @foreach ($listCate as $e)
                        <option value="{{$e->id}}" {{$selected==$e->id ? 'selected="selected"' : ''}}> {{$e->name}} </option>
                        @foreach ($e->getCategoryByIdToot($e->id) as $element)
                        <option {{$selected==$element->id ? 'selected="selected"' : ''}} value="{{$element->id}}"> ---{{$element->name}} </option>
                        @foreach ($element->getCategoryByIdToot($element->id)  as $element2)
                        <option {{$selected==$element2->id ? 'selected="selected"' : ''}} value="{{$element2->id}}"> --------{{$element2->name}} </option>
                        @endforeach
                        @endforeach
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-filter"><span data-toggle="tooltip" title="" data-original-title="(Tự động hoàn toàn)">Bộ lọc</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="filter" value="" placeholder="Bộ lọc" id="input-filter" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                      <div id="product-filter" class="well well-sm" style="height: 150px; overflow: auto;"> </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Cửa hàng</label>
                    <div class="col-sm-10">
                      <div class="well well-sm" style="height: 150px; overflow: auto;">                     <div class="checkbox">
                        <label>                         <input type="checkbox" name="product_store[]" value="0" checked="checked">
                          Mặc định
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-download"><span data-toggle="tooltip" title="" data-original-title="(Tự động hoàn toàn)">Tải xuống</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="download" value="" placeholder="Tải xuống" id="input-download" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                    <div id="product-download" class="well well-sm" style="height: 150px; overflow: auto;"> </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-related"><span data-toggle="tooltip" title="" data-original-title="(Tự động hoàn toàn)">Sản phẩm liên quan</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="related" value="" placeholder="Sản phẩm liên quan" id="input-related" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                    <div id="product-related" class="well well-sm" style="height: 150px; overflow: auto;"> </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-attribute">
                <div class="table-responsive">
                  <table id="attribute" class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <td class="text-left">Thuộc tính</td>
                        <td class="text-left">Văn bản</td>
                        <td></td>
                      </tr>
                    </thead>
                    <tbody>

                    </tbody>

                    <tfoot>
                      <tr>
                        <td colspan="2"></td>
                        <td class="text-right"><button type="button" onclick="addAttribute();" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Thêm thuộc tính"><i class="fa fa-plus-circle"></i></button></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
              <div class="tab-pane" id="tab-option">
                <div class="row">
                  <div class="col-sm-2">
                    <ul class="nav nav-pills nav-stacked" id="option">
                      <li>
                        <input type="text" name="option" value="" placeholder="Tuỳ chọn" id="input-option" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                      </li>
                    </ul>
                  </div>
                  <div class="col-sm-10">
                    <div class="tab-content">                                          </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-recurring">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <td class="text-left">Hồ sơ định kỳ</td>
                        <td class="text-left">Nhóm khách hàng</td>
                        <td class="text-left"></td>
                      </tr>
                    </thead>
                    <tbody>

                    </tbody>

                    <tfoot>
                      <tr>
                        <td colspan="2"></td>
                        <td class="text-left"><button type="button" onclick="addRecurring()" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Thêm trả hàng"><i class="fa fa-plus-circle"></i></button></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
              <div class="tab-pane" id="tab-discount">
                <div class="table-responsive">
                  <table id="discount" class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <td class="text-left">Nhóm khách hàng</td>
                        <td class="text-right">Số lượng</td>
                        <td class="text-right">Mức ưu tiên</td>
                        <td class="text-right">Giá</td>
                        <td class="text-left">Ngày bắt đầu</td>
                        <td class="text-left">Ngày kết thúc</td>
                        <td></td>
                      </tr>
                    </thead>
                    <tbody>

                    </tbody>

                    <tfoot>
                      <tr>
                        <td colspan="6"></td>
                        <td class="text-left"><button type="button" onclick="addDiscount();" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Thêm giảm giá"><i class="fa fa-plus-circle"></i></button></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
              <div class="tab-pane" id="tab-special">
                <div class="table-responsive">
                  <table id="special" class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <td class="text-left">Nhóm khách hàng</td>
                        <td class="text-right">Mức ưu tiên</td>
                        <td class="text-right">Giá</td>
                        <td class="text-left">Ngày bắt đầu</td>
                        <td class="text-left">Ngày kết thúc</td>
                        <td></td>
                      </tr>
                    </thead>
                    <tbody>

                    </tbody>

                    <tfoot>
                      <tr>
                        <td colspan="5"></td>
                        <td class="text-left"><button type="button" onclick="addSpecial();" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Thêm khuyến mãi"><i class="fa fa-plus-circle"></i></button></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
              <div class="tab-pane" id="tab-image">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <td class="text-left">Hình ảnh</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-left"><a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="http://localhost:81/opencart/image/cache/no_image-100x100.png" alt="" title="" data-placeholder="http://localhost:81/opencart/image/cache/no_image-100x100.png"></a>
                          <input type="hidden" name="image" value="" id="input-image"></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="table-responsive">
                    <table id="images" class="table table-striped table-bordered table-hover">
                      <thead>
                        <tr>
                          <td class="text-left">Hình ảnh bổ sung</td>
                          <td class="text-right">Thứ tự</td>
                          <td></td>
                        </tr>
                      </thead>
                      <tbody>

                      </tbody>

                      <tfoot>
                        <tr>
                          <td colspan="2"></td>
                          <td class="text-left"><button type="button" onclick="addImage();" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Thêm hình ảnh"><i class="fa fa-plus-circle"></i></button></td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
                <div class="tab-pane" id="tab-reward">
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-points"><span data-toggle="tooltip" title="" data-original-title="Số điểm cần thiết để mua sản phẩm này. Nếu bạn không muốn sản phẩm này được mua bằng điểm đặt giá trị là 0.">Điểm</span></label>
                    <div class="col-sm-10">
                      <input type="text" name="points" value="" placeholder="Điểm" id="input-points" class="form-control">
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <td class="text-left">Nhóm khách hàng</td>
                          <td class="text-right">Điểm thưởng</td>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td class="text-left">Default</td>
                          <td class="text-right"><input type="text" name="product_reward[1][points]" value="" class="form-control"></td>
                        </tr>
                      </tbody>

                    </table>
                  </div>
                </div>
{{-- <div class="tab-pane" id="tab-seo">
  <div class="alert alert-info"><i class="fa fa-info-circle"></i> Không sử dụng khoảng trắng, thay vào đó hãy sử dụng dấu - và đảm bảo từ khóa là duy nhất.</div>            
  <div class="table-responsive">
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <td class="text-left">Cửa hàng</td>
          <td class="text-left">Từ khóa để SEO</td>
      </tr>
  </thead>
  <tbody>
    <tr>
        <td class="text-left">Mặc định</td>
        <td class="text-left">                      <div class="input-group"><span class="input-group-addon"><img src="language/vi-vn/vi-vn.png" title="Việt Nam"></span>
            <input type="text" name="product_seo_url[0][2]" value="" placeholder="Từ khóa để SEO" class="form-control">
        </div>

    </td>
</tr>
</tbody>

</table>
</div>
</div> --}}
<div class="tab-pane" id="tab-design">
  <div class="table-responsive">
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <td class="text-left">Cửa hàng</td>
          <td class="text-left">Ghi đè Layout</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text-left">Mặc định</td>
          <td class="text-left"><select name="product_layout[0]" class="form-control">
            <option value=""></option>




            <option value="10">Affiliate</option>




            <option value="2">Chi tiết sản phẩm</option>




            <option value="15">Chi tiết tin tức</option>




            <option value="3">Danh mục sản phẩm</option>




            <option value="14">Danh mục tin tức</option>




            <option value="5">Hãng sản xuất</option>




            <option value="8">Liên hệ</option>




            <option value="4">Mặc định</option>




            <option value="9">Sitemap</option>




            <option value="12">So sánh sản phẩm</option>




            <option value="6">Tài khoản</option>




            <option value="7">Thanh toán</option>




            <option value="13">Tìm kiếm sản phẩm</option>




            <option value="1">Trang chủ</option>




            <option value="11">Trang thông tin</option>




          </select></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</div>
</form>
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
<script type="text/javascript" src="{{asset('resources/views/admin/js/opencart.js')}}"></script>


</div>
</section>
</div>

@endsection

