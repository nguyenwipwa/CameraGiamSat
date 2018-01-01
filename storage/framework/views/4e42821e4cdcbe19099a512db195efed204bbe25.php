<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('public/admin/ckeditor/ckeditor.js')); ?>"></script>
<script src=" <?php echo e(asset('public/admin/js/danhsachsanpham.js')); ?>"></script>
<script src=" <?php echo e(asset('public/admin/js/functionsp.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin/js/jquery.quicksearch.js')); ?>"></script>
<link rel="stylesheet" type="text/css" href=" <?php echo e(asset('public/admin/css/danhsachsanpham.css')); ?>">
<link href="<?php echo e(asset('resources/views/admin/css/stylesheet.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<!-- Content Wrapper. Contains page content -->
<?php $__env->startSection('content'); ?>
<div id="content">
  <div class="content-wrapper">
    <section class="content-header">
      <div class="page-header">
        <div class="container-fluid">
          <div class="pull-right">
            <button type="submit" form="form-coupon" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Lưu"><i class="fa fa-save"></i></button>
            <a href="<?php echo e(route('phieugiamgia')); ?>" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Trở về"><i class="fa fa-reply"></i></a></div>
            <h1>Phiếu giảm giá</h1>
            <ul class="breadcrumb">
              <li><a href="#">Trang chủ</a></li>
              <li><a href="<?php echo e(route('phieugiamgia')); ?>">Phiếu giảm giá</a></li>
            </ul>
          </div>
        </div>
      </section>
      <div class="container-fluid">     <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="fa fa-pencil"></i> Sửa phiếu giảm giá</h3>
        </div>
        <div class="panel-body">
          <form action="<?php echo e(route('phieugiamgia.add')); ?>" method="post" enctype="multipart/form-data" id="form-coupon" class="form-horizontal">
            <?php echo e(csrf_field()); ?>

            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab-general" data-toggle="tab">Tổng quan</a></li>
              <li><a href="#tab-history" data-toggle="tab">Lịch sử</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab-general">
                <div class="form-group required">
                  <input type="hidden" name="id" value="<?php echo e(isset($saleOff->id) ? $saleOff->id : 0); ?>">
                  <label class="col-sm-2 control-label" for="input-name">Tên phiếu giảm giá</label>
                  <div class="col-sm-10">
                    <input type="text" name="title" value="<?php echo e(isset($saleOff->title) ? $saleOff->title : ''); ?>" placeholder="Tên phiếu giảm giá" id="input-name" class="form-control">
                  </div>
                </div>
                <div class="form-group required">
                  <label class="col-sm-2 control-label" for="input-code"><span data-toggle="tooltip" title="" data-original-title="Mã khách hàng nhập vào đã được giảm giá.">Mã</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="key" value="<?php echo e(isset($saleOff->key) ? $saleOff->key : ''); ?>" placeholder="Mã" id="input-code" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-type"><span data-toggle="tooltip" title="" data-original-title="Tỷ lệ phần trăm hoặc số tiền cố định.">Kiểu</span></label>
                  <div class="col-sm-10">
                    <select name="type" id="input-type" class="form-control" disabled="">
                      <option value="P" selected="selected">Tỷ lệ phần trăm</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-discount">Giảm giá</label>
                  <div class="col-sm-10">
                    <input type="text" name="discount" value="<?php echo e(isset($saleOff->percent) ? $saleOff->percent : '0'); ?>" placeholder="Giảm giá" id="input-discount" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-discount">Số lượng</label>
                  <div class="col-sm-10">
                    <input type="text" name="number" value="<?php echo e(isset($saleOff->number) ? $saleOff->number : '1'); ?>" placeholder="Giảm giá" id="input-discount" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-status">Trạng thái</label>
                  <div class="col-sm-10">
                    <select name="status" id="input-status" class="form-control">
                      <option <?php echo e(isset($saleOff->status) ? $saleOff->status : '1' ==1 ? "selected='selected'" : ''); ?> value="1">Kích hoạt</option>
                      <option <?php echo e(isset($saleOff->status) ? $saleOff->status : '1' ==0 ? 'selected="selected"' : ""); ?> value="0">Vô hiệu hóa</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-history">
                <fieldset>
                  <legend>Coupon History</legend>
                  <div id="history"><div class="table-responsive">
                    <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <td class="text-right">ID đơn hàng</td>
                          <td class="text-left">Khách hàng</td>
                          <td class="text-right">Số lượng</td>
                          <td class="text-left">Ngày tạo</td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-center" colspan="4">Không có kết quả!</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 text-left"></div>
                    <div class="col-sm-6 text-right">Showing 0 to 0 of 0 (0 Pages)</div>
                  </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>