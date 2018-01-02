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
          <a href="" target="_blank" data-toggle="tooltip" title="" class="btn btn-info" data-original-title="In hóa đơn">
            <i class="fa fa-print"></i>
          </a> 
          <a href="" target="_blank" data-toggle="tooltip" title="" class="btn btn-info" data-original-title="In danh sách vận chuyển">
            <i class="fa fa-truck"></i>
          </a>
          <a href="" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Sửa">
            <i class="fa fa-pencil"></i>
          </a>
          <a href="" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Trở về">
            <i class="fa fa-reply"></i>
          </a>
        </div>
        <h1>Đơn hàng</h1>
        <ul class="breadcrumb">
          <li><a href="http://localhost:81/opencart/admin/index.php?route=common/dashboard&amp;user_token=LRLhUr6HXulMIMPm8PxCIoxiwTLSHiq5">Trang chủ</a></li>
          <li><a href="http://localhost:81/opencart/admin/index.php?route=sale/order&amp;user_token=LRLhUr6HXulMIMPm8PxCIoxiwTLSHiq5&amp;sort=o.order_id&amp;order=ASC">Đơn hàng</a></li>
        </ul>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-shopping-cart"></i> Chi tiết đơn hàng</h3>
            </div>
            <table class="table">
              <tbody>
                <tr>
                  <td style="width: 1%;"><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Store"><i class="fa fa-shopping-cart fa-fw"></i></button></td>
                  <td><a href="http://localhost:81/opencart/" target="_blank">Opencart VN</a></td>
                </tr>
                <tr>
                  <td><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Ngày thêm:"><i class="fa fa-calendar fa-fw"></i></button></td>
                  <td>29/12/2017</td>
                </tr>
                <tr>
                  <td><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Phương thức thanh toán:"><i class="fa fa-credit-card fa-fw"></i></button></td>
                  <td>Cash On Delivery</td>
                </tr>
                <tr>
                  <td><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Phương thức vận chuyển:"><i class="fa fa-truck fa-fw"></i></button></td>
                  <td>Flat Shipping Rate</td>
                </tr>
              </tbody>

            </table>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-user"></i> Customer Details</h3>
            </div>
            <table class="table">
              <tbody><tr>
                <td style="width: 1%;"><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Khách hàng:"><i class="fa fa-user fa-fw"></i></button></td>
                <td>                tung tung
                </td>
              </tr>
              <tr>
                <td><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Nhóm khách hàng:"><i class="fa fa-group fa-fw"></i></button></td>
                <td>Default</td>
              </tr>
              <tr>
                <td><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Email:"><i class="fa fa-envelope-o fa-fw"></i></button></td>
                <td><a href="mailto:tungle251@gmail.com">tungle251@gmail.com</a></td>
              </tr>
              <tr>
                <td><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Số điện thoại:"><i class="fa fa-phone fa-fw"></i></button></td>
                <td>123</td>
              </tr>
            </tbody></table>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-cog"></i> Options</h3>
            </div>
            <table class="table">
              <tbody>
                <tr>
                  <td>Hoá đơn</td>
                  <td id="invoice" class="text-right">INV-2017-001</td>
                  <td style="width: 1%;" class="text-center">                  <button disabled="disabled" class="btn btn-success btn-xs"><i class="fa fa-refresh"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>Điểm thưởng:</td>
                  <td class="text-right">0</td>
                  <td class="text-center">                  <button disabled="disabled" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>Liên kết:
                  </td>
                  <td class="text-right">0 đ</td>
                  <td class="text-center">                  <button disabled="disabled" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="fa fa-info-circle"></i> Chi tiết đơn hàng</h3>
        </div>
        <div class="panel-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <td style="width: 50%;" class="text-left">Payment Address</td>
                <td style="width: 50%;" class="text-left">Shipping Address</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-left">tung tung<br>ád<br>ádasdasdasdasdas<br>ádasdasdasdasdas<br>ádasdasdasdasdas 12<br>Dong Nai<br>Viet Nam</td>
                <td class="text-left">tung tung<br>ád<br>ádasdasdasdasdas<br>ádasdasdasdasdas<br>ádasdasdasdasdas 12<br>Dong Nai<br>Viet Nam</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-bordered">
            <thead>
              <tr>
                <td class="text-left">Sản phẩm</td>
                <td class="text-left">Mẫu</td>
                <td class="text-right">Số lượng</td>
                <td class="text-right">Đơn vị giá</td>
                <td class="text-right">Tổng cộng</td>
              </tr>
            </thead>
            <tbody>

              <tr>
                <td class="text-left"><a href="http://localhost:81/opencart/admin/index.php?route=catalog/product/edit&amp;user_token=LRLhUr6HXulMIMPm8PxCIoxiwTLSHiq5&amp;product_id=47">HP LP3065</a> </td>
                <td class="text-left">Product 21</td>
                <td class="text-right">1</td>
                <td class="text-right">9,000,000 đ</td>
                <td class="text-right">9,000,000 đ</td>
              </tr>
              <tr>
                <td colspan="4" class="text-right">Sub-Total</td>
                <td class="text-right">9,000,000 đ</td>
              </tr>
              <tr>
                <td colspan="4" class="text-right">Flat Shipping Rate</td>
                <td class="text-right">5 đ</td>
              </tr>
              <tr>
                <td colspan="4" class="text-right">Total</td>
                <td class="text-right">9,000,005 đ</td>
              </tr>
            </tbody>

          </table>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="fa fa-comment-o"></i> Thêm lịch sử đặt hàng</h3>
        </div>
        <div class="panel-body">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-history" data-toggle="tab">Lịch sử</a></li>
            <li><a href="#tab-additional" data-toggle="tab"></a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab-history">
              <div id="history"><div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <td class="text-left">Ngày thêm</td>
                      <td class="text-left">Bình luận</td>
                      <td class="text-left">Trạng thái</td>
                      <td class="text-left">Khách hàng đã thông báo</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="text-left">29/12/2017</td>
                      <td class="text-left"></td>
                      <td class="text-left">Pending</td>
                      <td class="text-left">Không</td>
                    </tr>
                    <tr>
                      <td class="text-left">29/12/2017</td>
                      <td class="text-left"></td>
                      <td class="text-left">Pending</td>
                      <td class="text-left">Không</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="row">
                <div class="col-sm-6 text-left"></div>
                <div class="col-sm-6 text-right">Hiển thị từ 1 đến 2 của 2 (1 trang)</div>
              </div>
            </div>
            <br>
            <fieldset>
              <legend>Add Order History</legend>
              <form class="form-horizontal">
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-order-status">Tình trạng đơn hàng</label>
                  <div class="col-sm-10">
                    <select name="order_status_id" id="input-order-status" class="form-control">




                      <option value="7">Canceled</option>
                      
                      

                      
                      <option value="9">Canceled Reversal</option>
                      
                      

                      
                      <option value="13">Chargeback</option>
                      
                      

                      
                      <option value="5">Complete</option>
                      
                      

                      
                      <option value="8">Denied</option>
                      
                      

                      
                      <option value="14">Expired</option>
                      
                      

                      
                      <option value="10">Failed</option>
                      
                      

                      
                      <option value="1" selected="selected">Pending</option>
                      
                      

                      
                      <option value="15">Processed</option>
                      
                      

                      
                      <option value="2">Processing</option>
                      
                      

                      
                      <option value="11">Refunded</option>
                      
                      

                      
                      <option value="12">Reversed</option>
                      
                      

                      
                      <option value="3">Shipped</option>
                      
                      

                      
                      <option value="16">Voided</option>
                      
                      


                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-override"><span data-toggle="tooltip" title="" data-original-title="If the customers order is being blocked from changing the order status due to an anti-fraud extension enable override.">Override</span></label>
                  <div class="col-sm-10">
                    <div class="checkbox">
                      <input type="checkbox" name="override" value="1" id="input-override">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-notify">Thông báo cho khách hàng</label>
                  <div class="col-sm-10">
                    <div class="checkbox">
                      <input type="checkbox" name="notify" value="1" id="input-notify">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-comment">Bình luận</label>
                  <div class="col-sm-10">
                    <textarea name="comment" rows="8" id="input-comment" class="form-control"></textarea>
                  </div>
                </div>
              </form>
            </fieldset>
            <div class="text-right">
              <button id="button-history" data-loading-text="Đang tải..." class="btn btn-primary"><i class="fa fa-plus-circle"></i> Thêm lịch sử</button>
            </div>
          </div>
          <div class="tab-pane" id="tab-additional">                                     <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <td colspan="2">Browser</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Địa chỉ IP:</td>
                  <td>::1</td>
                </tr>
                <tr>
                  <td>Tên tài khoản đại lý:</td>
                  <td>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36</td>
                </tr>
                <tr>
                  <td>Chấp nhận ngôn ngữ:</td>
                  <td>vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5</td>
                </tr>
              </tbody>

            </table>
          </div>
        </div>
      </div>
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

