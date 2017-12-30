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
        <div class="pull-right"><a href="http://localhost/opencart/admin/index.php?route=design/banner/add&amp;user_token=maHWa3q1nnI8TRUdWKUp0c1g5rYSNlDV" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Thêm"><i class="fa fa-plus"></i></a>
          <button type="button" data-toggle="tooltip" title="" class="btn btn-danger" onclick="confirm('Xóa/gỡ cài đặt không thể hoàn tác! Bạn có chắc bạn muốn làm điều này?') ? $('#form-banner').submit() : false;" data-original-title="Xoá"><i class="fa fa-trash-o"></i></button>
        </div>
        <h1>Banners</h1>
        <ul class="breadcrumb">
          <li><a href="http://localhost/opencart/admin/index.php?route=common/dashboard&amp;user_token=maHWa3q1nnI8TRUdWKUp0c1g5rYSNlDV">Trang chủ</a></li>
          <li><a href="http://localhost/opencart/admin/index.php?route=design/banner&amp;user_token=maHWa3q1nnI8TRUdWKUp0c1g5rYSNlDV">Banners</a></li>
        </ul>
      </div>
    </div>
  </section>
  <div class="container-fluid">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-list"></i> Danh sách Banner</h3>
      </div>
      <div class="panel-body">
        <form action="http://localhost/opencart/admin/index.php?route=design/banner/delete&amp;user_token=maHWa3q1nnI8TRUdWKUp0c1g5rYSNlDV" method="post" enctype="multipart/form-data" id="form-banner">
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></td>
                  <td class="text-left">                    <a href="http://localhost/opencart/admin/index.php?route=design/banner&amp;user_token=maHWa3q1nnI8TRUdWKUp0c1g5rYSNlDV&amp;sort=name&amp;order=DESC" class="asc">Tên banner</a>
                  </td>
                  <td class="text-left">                    <a href="http://localhost/opencart/admin/index.php?route=design/banner&amp;user_token=maHWa3q1nnI8TRUdWKUp0c1g5rYSNlDV&amp;sort=status&amp;order=DESC">Trạng thái</a>
                  </td>
                  <td class="text-right">Thao tác</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">                    <input type="checkbox" name="selected[]" value="9">
                  </td>
                  <td class="text-left">Banner dưới combo danh mục sản phẩm</td>
                  <td class="text-left">Kích hoạt</td>
                  <td class="text-right"><a href="http://localhost/opencart/admin/index.php?route=design/banner/edit&amp;user_token=maHWa3q1nnI8TRUdWKUp0c1g5rYSNlDV&amp;banner_id=9" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Sửa"><i class="fa fa-pencil"></i></a></td>
                </tr>
                <tr>
                  <td class="text-center">                    <input type="checkbox" name="selected[]" value="6">
                  </td>
                  <td class="text-left">HP Products</td>
                  <td class="text-left">Kích hoạt</td>
                  <td class="text-right"><a href="http://localhost/opencart/admin/index.php?route=design/banner/edit&amp;user_token=maHWa3q1nnI8TRUdWKUp0c1g5rYSNlDV&amp;banner_id=6" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Sửa"><i class="fa fa-pencil"></i></a></td>
                </tr>
                <tr>
                  <td class="text-center">                    <input type="checkbox" name="selected[]" value="8">
                  </td>
                  <td class="text-left">Manufacturers</td>
                  <td class="text-left">Kích hoạt</td>
                  <td class="text-right"><a href="http://localhost/opencart/admin/index.php?route=design/banner/edit&amp;user_token=maHWa3q1nnI8TRUdWKUp0c1g5rYSNlDV&amp;banner_id=8" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Sửa"><i class="fa fa-pencil"></i></a></td>
                </tr>
                <tr>
                  <td class="text-center">                    <input type="checkbox" name="selected[]" value="7">
                  </td>
                  <td class="text-left">Slideshow trang chủ</td>
                  <td class="text-left">Kích hoạt</td>
                  <td class="text-right"><a href="http://localhost/opencart/admin/index.php?route=design/banner/edit&amp;user_token=maHWa3q1nnI8TRUdWKUp0c1g5rYSNlDV&amp;banner_id=7" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Sửa"><i class="fa fa-pencil"></i></a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </form>
        <div class="row">
          <div class="col-sm-6 text-left"></div>
          <div class="col-sm-6 text-right">Hiển thị từ 1 đến 4 của 4 (1 trang)</div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>