<?php $__env->startSection('script'); ?>
<link href="<?php echo e(asset('resources/views/admin/css/stylesheet.css')); ?>" rel="stylesheet" type="text/css" />
<script src="<?php echo e(asset('resources/views/admin/js/common.js')); ?>" type="text/javascript"></script>

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
            <a href="<?php echo e(route('danhsachmenu')); ?>" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Trở về"><i class="fa fa-reply"></i></a></div>
            <h1>Quản lý danh mục</h1>
            <ul class="breadcrumb">
              <li><a href="#">Quản lý Menu</a></li>
              <li><a href="<?php echo e(route('danhsachmenu')); ?>">Danh sách Menu</a></li>
            </ul>
          </div>
        </div>
      </section>
      <div class="container-fluid">     <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="fa fa-pencil"></i> Sửa danh mục Menu</h3>
        </div>
        <div class="panel-body">
          <form action="<?php echo e(route('add.category')); ?>" method="post" enctype="multipart/form-data" id="form-coupon" class="form-horizontal" onsubmit="return checkForm()">
            <?php echo e(csrf_field()); ?>

            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab-general" data-toggle="tab">Tổng quan</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab-general">
                <div class="form-group required">
                  <input type="hidden" name="id" value="<?php echo e(isset($cate->id) ? $cate->id : 0); ?>">
                  <label class="col-sm-2 control-label" for="input-name">Tên danh mục</label>
                  <div class="col-sm-10">
                    <input type="text" id="name" name="name" value="<?php echo e(isset($cate->name) ? $cate->name : ''); ?>" placeholder="Tên danh mục" id="input-name" class="form-control" required="true">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-type"><span data-toggle="tooltip" title="" data-original-title="Tên danh mục cha chứa danh mục này.">Danh mục cha</span></label>
                  <?php
                  $cate = $cate==null ? (object) ['id_root'=>'0', 'status'=> '0', 'icon'=>'']: $cate;
                  ?>
                  <div class="col-sm-10">
                    <select name="id_root" id="input-tax-class" class="form-control">
                      <option value="0" <?php echo e(($cate->id_root)==0 ? 'selected="selected"' : ''); ?>> --Không-- </option>
                      <?php $__currentLoopData = $listCate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option <?php echo e($cate->id_root==$element->id ? 'selected="selected"' : ''); ?> value="<?php echo e($element->id); ?>">---<?php echo e($element->name); ?></option>
                      <?php $__currentLoopData = $element->getCategoryByIdToot($element->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option <?php echo e($cate->id_root==$element2->id ? 'selected="selected"' : ''); ?> value="<?php echo e($element2->id); ?>"> --------<?php echo e($element2->name); ?> </option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-status">Trạng thái</label>
                  <div class="col-sm-10">
                    <select name="status" id="input-status" class="form-control">
                      <option <?php echo e(($cate->status or $cate->status) =='1' ? "selected='selected'" : ''); ?> value="1">Kích hoạt</option>
                      <option <?php echo e(($cate->status or $cate->status) =='0' ? 'selected="selected"' : ""); ?> value="0">Chưa kích hoạt</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Ảnh</label>
                  <div class="col-sm-10">
                    <input style="cursor: pointer;" value="<?php echo e($cate->icon); ?>" class="form-control" readonly="readonly" name="icon" id="img" onclick="$('#file').click()">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>