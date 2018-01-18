<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 pad-btm">
            <div class="row">
                <div class="col-md-3 hidden-xs hidden-sm">
                    <div class="header">
                        <span><?php echo e($name_cate); ?></span>
                    </div>
                    <div class="body">
                      <?php $__currentLoopData = $menu_left; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      
                      <a class="sort_list" href="<?php echo e(url('/category/'.$element->id.'/1')); ?>"><?php echo e($element->name); ?></a>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
                  </div>
              </div>
              <div class="col-xs-12 col-md-9">
                <!-- <div class="article_header my-breadcrumb"><ol class="breadcrumb"><li><a href="http://fptcamera.vn/">Trang chủ</a></li><li><a href="http://fptcamera.vn/thiet-bi-van-phong">Thiết bị văn phòng</a></li></ol></div> -->
                <div class="clear"></div>
                <div class="header4">
                    <h1><?php echo e($name_cate); ?></h1>
                    <h2 style="display:none;"><?php echo e($name_cate); ?></h2>
                    <div class="clear"></div>
                    <select style="float:right;margin-top:3px;" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                        <option value="http://fptcamera.vn/thiet-bi-van-phong">Sắp xếp theo</option>
                        <option value="http://fptcamera.vn/thiet-bi-van-phong/?o=p-asc">Giá tăng dần</option>
                        <option value="http://fptcamera.vn/thiet-bi-van-phong/?o=p-desc">Giá giảm dần</option>
                    </select>
                </div>
                <div class="description2"></div>
                <div class="clear"></div>
                <div class="product_list">
                    <div class="row">
                     <?php $__currentLoopData = $list_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     
                     <div class="col-xs-6 col-sm-4 col-lg-3">
                        <div class="thumbnail products">
                            <a href="<?php echo e(url('/detail-product/'.$e->id)); ?>">
                                <img alt="may-chieu-sony-VPL-DX-122" src="<?php echo e(asset('public/images/san-pham/'.$e->img)); ?>">
                            </a>
                            <div class="caption">
                                <a href="<?php echo e(url('/detail-product/'.$e->id)); ?>">
                                    <h3><?php echo e($e->name); ?></h3>
                                </a>
                                <div class="clear"></div>
                                <span class="new-price"><?php echo e(number_format($e->price)); ?> VNĐ</span>
                                
                                    
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                </div>
                <div class="clear"></div>
                <div class="pagination">
                    <ul class='pagination'>
                        <li class='disabled'>
                            <?php for($i = 1; $i <= $page_number ; $i++): ?>
                            
                            <li class='<?php if($page==$i) echo 'active'; ?>'>
                                <a href='<?php echo e(url('/category/'.$id_category.'/'.$i)); ?>'><?php echo e($i); ?>

                                    <span class='sr-only'></span>
                                </a>
                            </li>
                            <?php endfor; ?>

                        </li>
                        <li>
                            <a href="#">Last &rsaquo;</a>
                        </li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.subClient', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>