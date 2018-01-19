<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('resources/views/admin/ckeditor/ckeditor.js')); ?>"></script>
<link href="<?php echo e(asset('resources/views/admin/css/stylesheet.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div id="content">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="page-header" style="border-bottom: 1px solid #c3c2c2">
        <div class="container-fluid">
          <div class="pull-right">
            <button type="submit" form="form-product" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Lưu"><i class="fa fa-save"></i></button>
            <a href="<?php echo e(route('danhsachsanpham')); ?>" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Trở về"><i class="fa fa-reply"></i></a></div>
            <h1>Quản lý sản phẩm</h1>
            <ul class="breadcrumb">
              <li><a href="<?php echo e(route('admin')); ?>">Trang chủ</a></li>
              <li><a href="<?php echo e(route('danhsachsanpham')); ?>">Quản lý sản phẩm</a></li>
            </ul>
          </div>
        </div>
        <div class="container-fluid">  
         <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-pencil"></i> Thêm sản phẩm</h3>
          </div>
          <div class="panel-body">
            <form action="<?php echo e(route('themsanpham')); ?>" method="post" enctype="multipart/form-data" id="form-product" class="form-horizontal">
              <?php echo e(csrf_field()); ?>

              <ul class="nav nav-tabs">
                <li class="active"><a href="#tab-general" data-toggle="tab">Tổng quan</a></li>
                <li><a href="#tab-data" data-toggle="tab">Dữ liệu</a></li>
                <li><a href="#tab-links" data-toggle="tab">Liên kết</a></li>
                
                
                
                
                <li><a href="#tab-design" data-toggle="tab"></a></li>
              </ul>
              
              <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
              <div class="tab-content">
                <div class="tab-pane active" id="tab-general">

                  <div class="tab-content">               
                   <div class="tab-pane active" id="language2">
                    <div class="form-group required">
                      <label class="col-sm-2 control-label" for="input-name2">Tên sản phẩm </label>
                      <div class="col-sm-10">
                        <input type="text" name="name" value="<?php echo e($product->name); ?>" placeholder="Tên sản phẩm" id="input-name2" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="input-description2">Chi tiết sản phẩm</label>
                      <div class="col-sm-10">
                        <textarea name="detail_product" placeholder="Mô tả" id="input-description2" data-toggle="summernote" data-lang="" class="form-control" style="display: none;"><?php echo e($product->detail_product); ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="input-description2">Thông số kỹ thuật</label>
                      <div class="col-sm-10">
                        <textarea name="digital" placeholder="Mô tả" id="input-description2" data-toggle="summernote" data-lang="" class="form-control" style="display: none;"><?php echo e($product->digital); ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="input-name2">Hình ảnh</label>
                      <div class="col-sm-10">
                        <input style="cursor: pointer;" value="<?php echo e($product->img); ?>" class="form-control" readonly="readonly" name="icon" id="img" onclick="$('#file').click()">
                        <input accept="image/*" class="hidden" type="file" id="file" name="fImage" value="" onchange="$('#img').val($(this).val())">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-data">

                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-price">Giá</label>
                  <div class="col-sm-10">
                    <input type="text" name="price" value="<?php echo e($product->price); ?>" placeholder="Giá" id="input-price" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-quantity">Số lượng</label>
                  <div class="col-sm-10">
                    <input type="text" name="quatity" value="<?php echo e($product->quatity); ?>" placeholder="Số lượng" id="input-quantity" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-status">Trạng thái</label>
                  <div class="col-sm-10">
                    <select name="status" id="input-status" class="form-control">
                      
                      <option value="1" <?php echo e($product->status==1 ? "selected" : " "); ?>>Kích hoạt</option>
                      <option value="0" <?php echo e($product->status!=1 ? "selected" : " "); ?>>Vô hiệu hóa</option>
                      
                    </select>
                  </div>
                </div>

              </div>
              <div class="tab-pane" id="tab-links">
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-manufacturer"><span data-toggle="tooltip" title="" data-original-title="(Tự động hoàn thành)">Nhà sản xuất</span></label>
                  <div class="col-sm-10">
                    <input type="text" name="provider" value="" placeholder="Nhà sản xuất" id="input-manufacturer" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>
                    <input type="hidden" name="manufacturer_id" value="0">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-tax-class">Danh mục </label>
                  <div class="col-sm-10">
                    <select name="cate" id="input-tax-class" class="form-control">

                      <?php $__currentLoopData = $listCate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($e->id); ?>" <?php echo e($product->id_category==$e->id ? 'selected="selected"' : ''); ?>> <?php echo e($e->name); ?> </option>
                      <?php $__currentLoopData = $e->getCategoryByIdToot($e->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option <?php echo e($product->id_category==$element->id ? 'selected="selected"' : ''); ?> value="<?php echo e($element->id); ?>">---<?php echo e($element->name); ?></option>
                      <?php $__currentLoopData = $element->getCategoryByIdToot($element->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option <?php echo e($product->id_category==$element2->id ? 'selected="selected"' : ''); ?> value="<?php echo e($element2->id); ?>"> --------<?php echo e($element2->name); ?> </option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
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