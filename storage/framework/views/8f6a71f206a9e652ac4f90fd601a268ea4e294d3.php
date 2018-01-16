<?php $__env->startSection('script'); ?>
<link href="<?php echo e(asset('resources/views/admin/css/stylesheet.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<script type="text/javascript">
  $(document).ready(function() {
    var danhmucmenu=[];
    <?php $__currentLoopData = $listCate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($row->id_root==0): ?>
    danhmucmenu.push($row->name);
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  });
</script>
<div id="content">
  <div class="content-wrapper">
    <section class="content-header">
      <div class="page-header">
        <div class="container-fluid">
          <div class="pull-right">
            <button type="submit" form="form-coupon" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Lưu"><i class="fa fa-save"></i></button>
            <a href="<?php echo e(route('danhsachmenu')); ?>" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Trở về"><i class="fa fa-reply"></i></a></div>
            <h1>Quản lý danh mục</h1>
            <ul class="breadcrumb">
              <li><a href="#">Quản lý Menu</a></li>
              <li><a href="<?php echo e(route('danhsachmenu')); ?>">Danh sách Menu</a></li>
            </ul>
          </div>
        </div>
      </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <?php if(session('status')): ?>
        <div class="alert alert-success">
          <?php echo e(session('status')); ?>

        </div>
        <?php endif; ?>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-list"></i> Danh sách danh mục</h3>
          </div>
          <div class="panel-body">
            <form action="http://localhost/opencart/admin/index.php?route=news/category/delete&amp;user_token=R94rZ1nsVBrQ2iH5qTwXVAs0dr0LuFak" method="post" enctype="multipart/form-data" id="form-category">
              <div class="table-responsive">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></td>
                      <td class="text-left">                    <a href="http://localhost/opencart/admin/index.php?route=news/category&amp;user_token=R94rZ1nsVBrQ2iH5qTwXVAs0dr0LuFak&amp;sort=name&amp;order=DESC" class="asc">Tên danh mục</a>
                      </td>
                      <td class="text-right">                    <a href="http://localhost/opencart/admin/index.php?route=news/category&amp;user_token=R94rZ1nsVBrQ2iH5qTwXVAs0dr0LuFak&amp;sort=sort_order&amp;order=DESC">Thứ tự</a>
                      </td>
                      <td class="text-right">Tác vụ</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if($listCate): ?>
                    <?php $__currentLoopData = $listCate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td class="text-center">
                        <input type="checkbox" name="selected[]" value="<?php echo e($category->id); ?>" />
                      </td>
                      <td class="text-left"><?php echo e($category->name); ?></td>
                      <td class="text-right"><?php echo e($category->id_root); ?></td>
                      <td class="text-right"><a href="<?php echo e(route('edit.category',[$category->id])); ?>" data-toggle="tooltip" title="" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                        <button type="button" data-toggle="tooltip" title="" class="btn btn-danger" onclick="confirm('Xóa/gỡ cài đặt không thể hoàn tác! Bạn có chắc bạn muốn làm điều này?') ? $('#form-category').submit() : false;" data-original-title="Xoá"><i class="fa fa-trash-o"></i></button>
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                    <tr>
                      <td class="text-center" colspan="4">K co</td>
                    </tr>
                    <?php endif; ?>
                  </tbody>
                </table>
              </div>
            </form>
            <div class="row">
              <div class="col-sm-6 text-left"></div>
              <div class="col-sm-6 text-right"><?php echo $listCate->render(); ?></div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /.content -->
  </div>
</div><!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>