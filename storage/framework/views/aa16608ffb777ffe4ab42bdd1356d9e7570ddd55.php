<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 pad-btm">
            <div class="row">
                <div class="col-xs-12">
                    <div id="ScrollTo2" class="article_header my-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="{'/'}">Trang chủ</a>
                            </li>
                            <li><a href="#">Camera trọn bộ</a>
                            </li>
                        </ol>
                    </div>
                    <div class="clear"></div>
                    <div class="row">
                        <div class="col-xs-12 col-md-7">
                            <div class="" style="width:100%;background:#fff;border:1px solid #ccc;padding:10px;">
                                <a data-toggle="modal" data-target=".bs-example-modal-lg"> <img style="cursor:pointer;display:block;margin:0 auto;background:#fff;" alt="<?php echo e($product->name); ?>" src="<?php echo e(asset('public/images/san-pham/'.$product->img)); ?>"> </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-5">

                            <div class="prd-desc equalheight1">
                                <h1 class="header2"> <?php echo e($product->name); ?></h1>
                                <div class="clear"></div>
                                <p>Mã sản phẩm: <b><?php echo e($product->id); ?></b>
                                </p>
                                <p>Thương hiệu: <a href="http://fptcamera.vn/benco-viet-nam"><?php echo e($thuonghieu==null ? 'VANTECH' : $thuonghieu->name); ?></a>
                                </p>
                                <p>Giá thị trường: <span class='detail-oldprice'><?php echo e(number_format(($product->price*1.1))); ?>đ</span>
                                </p>
                                <p>Giá bán: <span class='detail-price'><?php echo e(number_format($product->price)); ?> đ</span>
                                </p>
                                <p>Tình trạng: <span class='detail-stock'>Còn hàng</span>
                                </p>
                                <p>Bảo hành: <span class='detail-stock'>24 Tháng</span>
                                </p>
                                <div class="clear"></div>
                                <div style="float:left;" class="social-likes" data-url="#/lap-dat-camera-gia-re-bo-1-den-8-mat">
                                   <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FNongLamUniversity%2F&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId=1859647834306977" width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                               </div>
                               <div class="clear"></div>
                               <form action="<?php echo e(route('addCart')); ?>" class="addcart" method="post" accept-charset="utf-8">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="hidden" name="id" value="<?php echo e($product->id); ?>" />
                                <input type="hidden" name="name" value="<?php echo e($product->name); ?>" />
                                <input type="hidden" name="price" value="<?php echo e($product->price); ?>" />
                                <input type="hidden" name="img" value="<?php echo e($product->img); ?>" />
                                <p>Số lượng: <span class='detail-spinner'> 
                                    <div class="input-group bootstrap-touchspin">
                                        <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                                        <input type="number" name="qty" value="1" min="1" class="cart_qty form-control" style="display: block;">
                                        <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                                    </div>                                            
                                </span>
                            </p>
                            <input type="submit" name="action" value="Mua ngay" class="cart_submit" />
                        </form>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="col-xs-12 col-md-9">
            <div class="hidden-xs">
                <ul class="nav nav-tabs custom-tabs2" role="tablist">
                    <li role="presentation" class="active"><a href="#chitiet" aria-controls="chitiet" role="tab" data-toggle="tab">Chi tiết sản phẩm</a>
                    </li>
                    <li role="presentation"><a href="#thongso" aria-controls="thongso" role="tab" data-toggle="tab">Thông số kỹ thuật</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <?php echo html_entity_decode($product->detail_product); ?>

                    <?php echo html_entity_decode($product->digital); ?>

                </div>

            </div> 
            <div class="fb-comments" data-href="<?php echo e(url()->current()); ?>" 
                data-width="auto" data-numposts="5"></div>
                <span class="header3">Sản phẩm liên quan</span>
                <div class="row">
                    <?php $__currentLoopData = $random; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xs-6 col-sm-4">
                        <div class="thumbnail products">
                            <a href="<?php echo e(url('/detail-product/'.$e->id)); ?>"><img alt="<?php echo e($e->name); ?>" src="<?php echo e(asset('public/images/san-pham/'.$e->img)); ?>">
                            </a>
                            <div class="caption"> <a href="<?php echo e(url('/detail-product/'.$e->id)); ?>"><h3><?php echo e($e->name); ?></h3></a>
                                <div class="clear"></div>
                                <div class="row">
                                    <div class="col-xs-12"><span class="new-price"><?php echo number_format($e->price); ?> đ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="col-xs-12 col-md-3"> <span class="header3">Sản phẩm cùng danh mục</span>
                <?php $__currentLoopData = $sanpham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="media products">
                    <div class="media-left">
                        <a href="<?php echo e(url('/detail-product/'.$e->id)); ?>"> <img class="media-object" alt="<?php echo e($e->name); ?>" src="<?php echo e(asset('public/images/san-pham/'.$e->img)); ?>"> </a>
                    </div>
                    <div class="media-body">
                        <a href="<?php echo e(url('/detail-product/'.$e->id)); ?>">
                            <h4 class="media-heading"><?php echo e($e->name); ?></h4> </a> <span class="media-price"><?php echo e(number_format($e->price)); ?> đ</span> </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
    .media-body {
        width: auto;
    }
    .prd-desc .cart_qty {
        width: 100px;
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.subClient', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>