<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('resources/views/admin/ckeditor/ckeditor.js')); ?>"></script>
<link href="<?php echo e(asset('resources/views/admin/css/stylesheet.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div id="content">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <div class="page-header">
      <div class="container-fluid">
        <div class="pull-right"><a href="http://localhost:81/opencart/admin/index.php?route=sale/order&amp;user_token=LRLhUr6HXulMIMPm8PxCIoxiwTLSHiq5" class="btn btn-default"><i class="fa fa-reply"></i> Trở về</a></div>
        <h1>Đơn hàng</h1>
        <ul class="breadcrumb">
          <li><a href="">Trang chủ</a></li>
          <li><a href="">Đơn hàng</a></li>
        </ul>
      </div>
    </div>
    <div class="container-fluid">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="fa fa-pencil"></i> Chỉnh sửa đơn hàng</h3>
        </div>
        <div class="panel-body">
          <form class="form-horizontal" action="<?php echo e(route('suadonhang1',[$order->id])); ?>" method="post" >
            <?php echo e(csrf_field()); ?> 
            <ul id="order" class="nav nav-tabs nav-justified">
              <li class="active"><a href="#tab-customer" data-toggle="tab">1. Thông tin khách hàng</a></li>
              <li class=""><a href="#tab-cart" data-toggle="tab">2. Sản phẩm</a></li>
              <li class=""><a href="#tab-payment" data-toggle="tab">3. Chi tiết thanh toán</a></li>
              
              <li class=""><a href="#tab-total" data-toggle="tab">4. Tổng cộng</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab-customer">
                <div class="form-group required">
                  <label class="col-sm-2 control-label" for="input-firstname">Tên</label>
                  <div class="col-sm-10">
                    <input type="text" name="firstname" readonly value="<?php echo e($order->name_customer); ?>" id="input-firstname" class="form-control">
                  </div>
                </div>
                <div class="form-group required">
                  <label class="col-sm-2 control-label" for="input-lastname">Họ</label>
                  <div class="col-sm-10">
                    <input type="text" name="lastname" readonly value="<?php echo e($order->name_customer); ?>" id="input-lastname" class="form-control">
                  </div>
                </div>
                <div class="form-group required">
                  <label class="col-sm-2 control-label" for="input-email">Email</label>
                  <div class="col-sm-10">
                    <input type="text" name="email" readonly value="<?php echo e($order->email); ?>" id="input-email" class="form-control">
                  </div>
                </div>
                <div class="form-group required">
                  <label class="col-sm-2 control-label" for="input-telephone">Số điện thoại</label>
                  <div class="col-sm-10">
                    <input type="text" name="telephone" readonly value="<?php echo e($order->phone_number); ?>" id="input-telephone" class="form-control">
                  </div>
                </div>
                <div class="text-right">
                  <button type="button" id="button-customer" data-loading-text="Đang tải..." class="btn btn-primary"><i class="fa fa-arrow-right"></i> Tiếp tục</button>
                </div>
              </div>
              <div class="tab-pane" id="tab-cart">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <td class="text-left">Sản phẩm</td>
                        <td class="text-left">Mẫu</td>
                        <td class="text-right">Số lượng</td>
                        <td class="text-right">Đơn vị giá</td>
                        <td class="text-right">Tổng cộng</td>
                        <td>Tác vụ</td>
                      </tr>
                    </thead>
                    <tbody id="cart">
                      <tr>
                        <td class="text-left"><?php echo e($product->name); ?><br>
                          <input type="hidden" name="" value="47">
                        </td>
                        <td class="text-left"><?php echo e($product->id); ?></td>
                        <td class="text-right">1
                          <input type="hidden" name="product[0][quantity]" value="<?php echo e($order_detail->quatity); ?>"></td>
                          <td class="text-right"><?php echo e($product->price); ?></td>
                          <td class="text-right"><?php echo e($product->price*$order_detail->quatity); ?></td>
                          <td class="text-center"></td>
                        </tr>
                      </tbody></table>
                    </div>
                    <ul class="nav nav-tabs nav-justified">
                      <li class="active"><a href="#tab-product" data-toggle="tab">Sản phẩm</a></li>
                      <li><a href="#tab-voucher" data-toggle="tab">Phiếu quà tặng</a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="tab-product">
                        <fieldset>
                          <legend>Thêm sản phẩm</legend>
                          <div class="form-group">
                            <label class="col-sm-2 control-label" for="input-product">Chọn sản phẩm</label>
                            <div class="col-sm-10">
                              <select type="text" name="product" value="" id="input-product" class="form-control" autocomplete="off">
                                <?php $__currentLoopData = $allproduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                

                                <option>
                                  <?php echo e($element->name); ?>

                                </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </select>
                              
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label" for="input-quantity">Số lượng</label>
                            <div class="col-sm-10">
                              <input type="text" name="quantity" value="1" id="input-quantity" class="form-control">
                            </div>
                          </div>
                          <div id="option"></div>
                        </fieldset>

                      </div>
                      <div class="tab-pane" id="tab-voucher">
                        <fieldset>
                          <legend>Thêm phiếu khuyến mãi</legend>
                          <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-to-name">Tên người nhận</label>
                            <div class="col-sm-10">
                              <input type="text" name="to_name" value="" id="input-to-name" class="form-control">
                            </div>
                          </div>
                          <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-to-email">Email của người nhận</label>
                            <div class="col-sm-10">
                              <input type="text" name="to_email" value="" id="input-to-email" class="form-control">
                            </div>
                          </div>
                          <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-from-name">Tên người gửi</label>
                            <div class="col-sm-10">
                              <input type="text" name="from_name" value="" id="input-from-name" class="form-control">
                            </div>
                          </div>
                          <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-from-email">Người gửi Email</label>
                            <div class="col-sm-10">
                              <input type="text" name="from_email" value="" id="input-from-email" class="form-control">
                            </div>
                          </div>
                          <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-theme">Chứng nhận chủ đề quà tặng</label>
                            <div class="col-sm-10">
                              <select name="voucher_theme_id" id="input-theme" class="form-control">
                                <option value="7">Birthday</option>
                                <option value="6">Christmas</option>
                                <option value="8">General</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label" for="input-message">Thông báo</label>
                            <div class="col-sm-10">
                              <textarea name="message" rows="5" id="input-message" class="form-control"></textarea>
                            </div>
                          </div>
                          <div class="form-group required">
                            <label class="col-sm-2 control-label" for="input-amount">Số lượng</label>
                            <div class="col-sm-10">
                              <input type="text" name="amount" value="1" id="input-amount" class="form-control">
                            </div>
                          </div>
                        </fieldset>
                        <div class="text-right">
                          <button type="button" id="button-voucher-add" data-loading-text="Đang tải..." class="btn btn-primary"><i class="fa fa-plus-circle"></i> Thêm phiếu quà tặng</button>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-sm-6 text-left">
                        <button type="button" onclick="$('a[href=\'#tab-customer\']').tab('show');" class="btn btn-default"><i class="fa fa-arrow-left"></i> Trở lại</button>
                      </div>
                      <div class="col-sm-6 text-right">
                        <button type="button" id="button-cart" class="btn btn-primary"><i class="fa fa-arrow-right"></i> Tiếp tục</button>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="tab-payment">

                    <div class="form-group required">
                      <label class="col-sm-2 control-label" for="input-payment-firstname">Tên</label>
                      <div class="col-sm-10">
                        <input type="text" name="firstname" readonly value="<?php echo e($order->name_customer); ?>" id="input-payment-firstname" class="form-control">
                      </div>
                    </div>
                    <div class="form-group required">
                      <label class="col-sm-2 control-label" for="input-payment-lastname">Họ</label>
                      <div class="col-sm-10">
                        <input type="text" name="lastname" readonly value="<?php echo e($order->name_customer); ?>" id="input-payment-lastname" class="form-control">
                      </div>
                    </div>

                    <div class="form-group required">
                      <label class="col-sm-2 control-label" for="input-payment-address-1">Địa chỉ 1</label>
                      <div class="col-sm-10">
                        <input type="text" name="address_1" readonly value="<?php echo e($order->address); ?>" id="input-payment-address-1" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="input-payment-address-2">Địa chỉ 2</label>
                      <div class="col-sm-10">
                        <input type="text" name="address_2" readonly value="<?php echo e($order->address); ?>" id="input-payment-address-2" class="form-control">
                      </div>
                    </div>
                    <div class="form-group required">
                      <label class="col-sm-2 control-label" for="input-payment-city">Thành phố</label>
                      <div class="col-sm-10">
                        <input type="text" name="city" readonly value="<?php echo e($thanhpho->name); ?>" id="input-payment-city" class="form-control">
                      </div>
                    </div>


                    
                    <div class="row">
                      <div class="col-sm-6 text-left">
                        <button type="button" onclick="$('a[href=\'#tab-cart\']').tab('show');" class="btn btn-default"><i class="fa fa-arrow-left"></i> Trở lại</button>
                      </div>
                      <div class="col-sm-6 text-right">
                        <button type="button" id="button-payment-address" data-loading-text="Đang tải..." class="btn btn-primary"><i class="fa fa-arrow-right"></i> Tiếp tục</button>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="tab-total">

                    <fieldset>
                      <legend>Chi tiết đơn hàng</legend>

                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-order-status">Tình trạng đơn hàng</label>
                        <div class="col-sm-10">
                          <select name="process" id="input-order-status" class="form-control">
                            <option value="<?php echo e($process2->id); ?>"  selected="selected"><?php echo e($process2->process); ?></option>
                            <?php $__currentLoopData = $process; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($element->id); ?>"><?php echo e($element->process); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                          </select>
                          <input type="hidden" name="order_id" value="1">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-order-status">Trạng thái</label>
                        <div class="col-sm-10">
                          <select readonly name="acitve" id="input-order-status" class="form-control">
                           <option value="1" <?php echo e($order->active==1 ? 'selected' : ''); ?> >Kích hoạt</option>
                           <option value="0" <?php echo e($order->active!=1 ? 'selected' : ''); ?> >Chưa kích hoạt</option>
                         </select>
                         <input type="hidden" name="order_id" value="1">
                       </div>
                     </div>
                     <div class="form-group">
                      <label class="col-sm-2 control-label" for="input-coupon">Mã đơn hàng</label>
                      <div class="col-sm-10">
                        <div class="input-group">
                          <input type="text" name="code_order" readonly value="<?php echo e($order->code_order); ?>" id="input-coupon" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="input-reward">Thưởng</label>
                      <div class="col-sm-10">
                        <div class="input-group">
                          <input type="text" name="reward" value="" id="input-reward" data-loading-text="Đang tải..." class="form-control">
                          <span class="input-group-btn">
                            <button type="button" id="button-reward" data-loading-text="Đang tải..." class="btn btn-primary"></button>
                          </span></div>
                        </div>
                      </div>


                    </fieldset>
                    <div class="row">
                      <div class="col-sm-6 text-left">
                        <button type="button" onclick="$('select[name=\'shipping_method\']').prop('disabled') ? $('a[href=\'#tab-payment\']').tab('show') : $('a[href=\'#tab-shipping\']').tab('show');" class="btn btn-default"><i class="fa fa-arrow-left"></i> Trở lại</button>
                      </div>
                      <div class="col-sm-6 text-right">
                        <button type="button" id="button-refresh" data-toggle="tooltip" title="" data-loading-text="Đang tải..." class="btn btn-warning" data-original-title="Cập nhật mới"><i class="fa fa-refresh"></i></button>
                        <button type="submit" id="button-save" class="btn btn-primary"><i class="fa fa-check-circle"></i> Lưu</button>
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
  </div>
</form>
</div>

</div>

</div>
<link href="<?php echo e(asset('resources/views/admin/bootstrap.css')); ?>" rel="stylesheet"/>
<link href="<?php echo e(asset('resources/views/admin/css/codemirror.css')); ?>" rel="stylesheet"/>
<link href="<?php echo e(asset('resources/views/admin/css/monokai.css')); ?>" rel="stylesheet"/>
<script type="text/javascript" src="<?php echo e(asset('resources/views/admin/js/codemirror.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('resources/views/admin/js/xml.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('resources/views/admin/js/formatting.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('resources/views/admin/js/summernote/summernote.js')); ?>"></script>
<link href="<?php echo e(asset('resources/views/admin/js/summernote/summernote.css')); ?>" rel="stylesheet"/>
<script type="text/javascript" src="<?php echo e(asset('resources/views/admin/js/summernote/summernote-image-attributes.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('resources/views/admin/js/opencart.js')); ?>"></script>


</div>
</section>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>