<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('public/admin/ckeditor/ckeditor.js')); ?>"></script>
<script src=" <?php echo e(asset('public/admin/js/danhsachsanpham.js')); ?>"></script>
<script src=" <?php echo e(asset('public/admin/js/functionsp.js')); ?>"></script>
<script src="<?php echo e(asset('public/admin/js/jquery.quicksearch.js')); ?>"></script>
<link rel="stylesheet" type="text/css" href=" <?php echo e(asset('public/admin/css/danhsachsanpham.css')); ?>">
<link href="<?php echo e(asset('resources/views/admin/css/stylesheet.css')); ?>" rel="stylesheet" type="text/css" />

<link href="http://localhost/opencart/admin/view/stylesheet/bootstrap.css" type="text/css" rel="stylesheet" />
<link href="http://localhost/opencart/admin/view/javascript/bootstrap/css/bootstrap.vertical-tabs.min.css" type="text/css" rel="stylesheet" />
<link href="http://localhost/opencart/admin/view/javascript/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
<script src="http://localhost/opencart/admin/view/javascript/jquery/datetimepicker/moment/moment.min.js" type="text/javascript"></script>
<script src="http://localhost/opencart/admin/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js" type="text/javascript"></script>
<script src="http://localhost/opencart/admin/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<link href="http://localhost/opencart/admin/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" />
<link type="text/css" href="view/stylesheet/stylesheet.css" rel="stylesheet" media="screen" />
<script src="http://localhost/opencart/admin/view/javascript/common.js" type="text/javascript"></script>
<?php $__env->stopSection(); ?>
<!-- Content Wrapper. Contains page content -->
<?php $__env->startSection('content'); ?>
<div id="content">
  <div class="content-wrapper">
    <section class="content-header">
      <div class="page-header">
       <div class="container-fluid">
        <div class="pull-right">
          <button type="submit" form="form-banner" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Lưu"><i class="fa fa-save"></i></button>
          <a href="<?php echo e(route('quanlybanner')); ?>" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Trở về"><i class="fa fa-reply"></i></a></div>
          <h1>Banners</h1>
          <ul class="breadcrumb">
            <li><a href="#">Phần mở rộng</a></li>
            <li><a href="<?php echo e(route('quanlybanner')); ?>">Banners</a></li>
          </ul>
        </div>
      </div>
    </section>
    <div class="container-fluid">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="fa fa-pencil"></i> Sửa banner</h3>
        </div>
        <div class="panel-body">
          <form action="http://localhost/opencart/admin/index.php?route=design/banner/edit&amp;user_token=pE0BrW2kjG5BxTrT02BjF5nyYuWxdam5&amp;banner_id=9" method="post" enctype="multipart/form-data" id="form-banner" class="form-horizontal">
            <div class="form-group required">
              <label class="col-sm-2 control-label" for="input-name">Tên banner</label>
              <div class="col-sm-10">
                <input type="text" name="name" disabled="" value="Banner Center" placeholder="Tên banner" id="input-name" class="form-control">
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
            <br>
            <ul class="nav nav-tabs" id="language">
              <li class="active"><a href="#language2" data-toggle="tab" aria-expanded="true">Danh sách hình</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="language2">
                <table id="images2" class="table table-striped table-bordered table-hover">
                  <thead>
                    <tr>
                      <td class="text-left">Tiêu đề</td>
                      <td class="text-left">Liên kết</td>
                      <td class="text-center">Hình ảnh</td>
                      <td class="text-center">Cài đặt</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $listSlider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr id="image-row0">
                      <td class="text-left"><input type="text" name="banner_image[<?php echo e($e->id); ?>][0][title]" value="<?php echo e($e->title); ?>" placeholder="Tiêu đề" class="form-control">
                      </td>
                      <td class="text-left" style="width: 30%;"><input type="text" name="banner_image[2][0][link]" value="<?php echo e($e->href); ?>" placeholder="Liên kết" class="form-control"></td>
                      <td class="text-center"><a href="" id="thumb-image0" data-toggle="image" class="img-thumbnail" data-original-title="" title="" aria-describedby="popover158063"><img style="width: 100px; height: 100px" src="<?php echo e(asset('public/images/slider/'.$e->img)); ?>" alt="" title="" data-placeholder="<?php echo e(asset('public/images/slider/no_image-100x100.png')); ?>"></a>
                        <input type="hidden" name="banner_image[2][0][image]" value="catalog/demo/banners/banner-2.png" id="input-image0"></td>
                        <td class="text-left"><button type="button" onclick="$('#image-row0, .tooltip').remove();" data-toggle="tooltip" title="" class="btn btn-danger" data-original-title="Gỡ bỏ"><i class="fa fa-minus-circle"></i></button></td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <td colspan="3"></td>
                          <td class="text-left"><button type="button" onclick="addImage('2');" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Thêm banner"><i class="fa fa-plus-circle"></i></button></td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript"><!--
    var image_row = 2;

    function addImage(language_id) {
      html  = '<tr id="image-row' + image_row + '">';
      html += '  <td class="text-left"><input type="text" name="banner_image[' + language_id + '][' + image_row + '][title]" value="" placeholder="Tiêu đề" class="form-control" /></td>';  
      html += '  <td class="text-left" style="width: 30%;"><input type="text" name="banner_image[' + language_id + '][' + image_row + '][link]" value="" placeholder="Liên kết" class="form-control" /></td>';  
      html += '  <td class="text-center"><a href="" id="thumb-image' + image_row + '" data-toggle="image" class="img-thumbnail"><img src="http://localhost/opencart/image/cache/no_image-100x100.png" alt="" title="" data-placeholder="http://localhost/opencart/image/cache/no_image-100x100.png" /></a><input type="hidden" name="banner_image[' + language_id + '][' + image_row + '][image]" value="" id="input-image' + image_row + '" /></td>';
      html += '  <td class="text-right" style="width: 10%;"><input type="text" name="banner_image[' + language_id + '][' + image_row + '][sort_order]" value="" placeholder="Sắp xếp" class="form-control" /></td>';
      html += '  <td class="text-left"><button type="button" onclick="$(\'#image-row' + image_row  + ', .tooltip\').remove();" data-toggle="tooltip" title="Gỡ bỏ" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';
      html += '</tr>';

      $('#images' + language_id + ' tbody').append(html);

      image_row++;
    }
    //--></script> 
    <script type="text/javascript"><!--
    $('#language a:first').tab('show');
    //--></script> 
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>