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
          <div class="pull-right"><a href="<?php echo e(route('phieugiamgia.form',[0])); ?>" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Thêm"><i class="fa fa-plus"></i></a>
            <button type="button" data-toggle="tooltip" title="" class="btn btn-danger" onclick="confirm('Xóa/gỡ cài đặt không thể hoàn tác! Bạn có chắc bạn muốn làm điều này?') ? $('#form-banner').submit() : false;" data-original-title="Xoá"><i class="fa fa-trash-o"></i></button>
          </div>
          <h1>Phiếu giảm giá</h1>
          <ul class="breadcrumb">
            <li><a href="#">Bán hàng</a></li>
            <li><a href="<?php echo e(route('phieugiamgia')); ?>">Phiếu giảm giá</a></li>
          </ul>
        </div>
      </div>
    </section>
    <div class="container-fluid">
      <?php if(session('status')): ?>
      <div class="alert alert-success">
        <?php echo e(session('status')); ?>

      </div>
      <?php endif; ?>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="fa fa-list"></i> Danh sách phiếu giảm giá</h3>
        </div>
        <div class="panel-body">
          <form action="http://localhost/opencart/admin/index.php?route=marketing/coupon/delete&amp;user_token=H7TBoaOlLtSfbCTAEdPVnKuC7kmEgjKK" method="post" enctype="multipart/form-data" id="form-coupon">
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
                  <?php $__currentLoopData = $listSalesOff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td class="text-center">                    <input type="checkbox" name="selected[]" value="<?php echo e($value->id); ?>">
                    </td>
                    <td class="text-left"><?php echo e($value->title); ?></td>
                    <td class="text-left"><?php echo e($value->key); ?></td>
                    <td class="text-right"><?php echo e($value->percent); ?> %</td>
                    <td class="text-left"><?php echo e($value->status=='1' ? 'Kích hoạt' : 'Vô hiệu hóa'); ?></td>
                    <td class="text-right"><a href="<?php echo e(route('phieugiamgia.form',[$value->id])); ?>" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Sửa"><i class="fa fa-pencil"></i></a></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
          </form>
          <div class="row">
            <div class="col-sm-6 text-left"></div>
            <div class="col-sm-6 text-right"><?php echo e($listSalesOff->render()); ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>