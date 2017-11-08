        <div id="top">
          <div id="fb-root"></div>
          <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));</script>

          <div id="top-menu" class="hidden-sm hidden-xs">
            <link rel="stylesheet"  type="text/css" href="<?php echo e(asset('public1/css/hover-min.css')); ?>">
            <script src="<?php echo e(asset('public1/js/classic.js')); ?>"></script>
            <link rel="stylesheet" href="<?php echo e(asset('public1/css/classic.css')); ?>">
            <?php echo $__env->make("../menuHeader", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </div>
          <div class="container hidden-xs hidden-sm">
            <div class="row top-header" id="ScrollTo">
              <div class="col-xs-12">
                <div class="row">
                  <div class="col-xs-12 col-md-3">
                    <div id="logo">
                      <a href="<?php echo e(url('/')); ?>">
                        <img title="LẮP ĐẶT CAMERA QUAN SÁT GIÁ RẺ" alt="Camera FPT Việt Nam tự hào Nhà cung cấp thiết bị camera giám sát giá rẻ uy tín trên toàn quốc" src="http://fptcamera.vn/resources/uploads/images/automatic/logo/logo-fpt-camera-giam-sat.png">
                      </a>
                    </div>
                  </div>
                  <div class="col-xs-12 col-md-6">
                    <img style="width:100%;margin-top:25px;" alt="Cam kết dịch vụ" src="http://fptcamera.vn/resources/ui_images/client/background/promise.png">
                  </div>
                  <div class="col-xs-12 col-md-3">
                    <div id="hotline">
                      <div class="name">Tư vấn lắp đặt camera</div>
                      <div class="clear"></div>
                      <div class="phone">
                        <a href="tel:024.6328.2964">024.6328.2964</a>
                        <a href="tel:0984 489 688">0984 489 688</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

                    <!-- <div class="row hidden-xs hidden-sm hidden-md">
                        <div class="col-xs-12 col-xs-offset-0 col-md-10 col-md-offset-1">
                            <div id="menu">
                                <ul><li class="hasChild"  ><a href="http://fptcamera.vn/camera-giam-sat">Camara giam sat</a><ul><li  ><a href="http://fptcamera.vn/camera-ip">Camara IP</a></li></ul></li></ul>                                <div class="clear"></div>
                            </div>
                        </div>
                      </div> -->
                    </div>
                    <div class="container-fluid">
                      <div class="row hidden-md hidden-lg">
                        <nav class="navbar navbar-inverse navbar-fixed-top custom-navbar">
                          <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>

                              <a class="navbar-brand" href="http://fptcamera.vn/">
                                <img alt="Camera FPT Việt Nam tự hào Nhà cung cấp thiết bị camera giám sát giá rẻ uy tín trên toàn quốc" src="http://fptcamera.vn/resources/ui_images/client/background/logo_mobile.png">
                              </a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" aria-expanded="false" id="bs-example-navbar-collapse-1">
                              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true" style="position: fixed; top:40px; right: 0; border: none; padding: 3px; margin-right: 5px;">
                                <i class="fa fa-times-circle" style="font-size: 25px;"></i>
                              </button>
                              <ul class="nav navbar-nav"><li><a href="http://fptcamera.vn/camera-tron-bo"><img src = http://fptcamera.vn/resources/uploads/images/automatic/danh-muc-san-pham//lap-dat-camera-tron-bo.png />&nbsp;&nbsp;Camera trọn bộ</a></li><li><a href="http://fptcamera.vn/camera-giam-sat"><img src = http://fptcamera.vn/resources/uploads/images/automatic/danh-muc-san-pham//camera-giam-sat.png />&nbsp;&nbsp;Camera giám sát</a></li><li><a href="http://fptcamera.vn/dau-ghi-hinh-camera"><img src = http://fptcamera.vn/resources/uploads/images/automatic/danh-muc-san-pham//dau-ghi-hinh-camera-quan-sat.png />&nbsp;&nbsp;Đầu ghi hình camera</a></li><li><a href="http://fptcamera.vn/phu-kien-camera"><img src = http://fptcamera.vn/resources/uploads/images/automatic/danh-muc-san-pham//phu-kien-camera.png />&nbsp;&nbsp;Phụ kiện camera</a></li><li><a href="http://fptcamera.vn/thiet-bi-an-ninh"><img src = http://fptcamera.vn/resources/uploads/images/automatic/danh-muc-san-pham//camera-thiet-bi-an-ninh.png />&nbsp;&nbsp;Thiết bị an ninh</a></li><li><a href="http://fptcamera.vn/may-cham-cong"><img src = http://fptcamera.vn/resources/uploads/images/automatic/danh-muc-san-pham//may-cham-cong-gia-re.png />&nbsp;&nbsp;Máy chấm công</a></li><li><a href="http://fptcamera.vn/tong-dai-bo-dam"><img src = http://fptcamera.vn/resources/uploads/images/automatic/danh-muc-san-pham//78-32.png />&nbsp;&nbsp;Tổng đài - Bộ đàm</a></li><li><a href="http://fptcamera.vn/thiet-bi-van-phong"><img src = http://fptcamera.vn/resources/uploads/images/automatic/danh-muc-san-pham//thiet-bi-van-phong.png />&nbsp;&nbsp;Thiết bị văn phòng</a></li><li><a href="http://fptcamera.vn/tin-tuc/tin-camera"><i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;tin tức</a></li></ul>                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                          </nav>
                        </div>
                      </div>                            <div class="container menu_bg">
                        <div class="row menu_bg">
                          <div class="col-xs-12 menu_bg">
                            <div class="row">
                              <div class="col-md-4 col-lg-3 hidden-xs hidden-sm" style="padding-right:0;">
                                <div id="prd-cate-list">
                                  <div class="prd-cate-header">
                                    <span>Danh mục sản phẩm<i class="fa fa-chevron-circle-down"></i></span>
                                  </div>
                                  <ul class="sub-page">
                                    <ul>
                                     <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <?php if($cate->id_root == 0 && $cate->status==1): ?>
                                     <li><a href="<?php echo e(url('/category/'.$cate->id.'/1')); ?>"><img alt = "<?php echo e($cate->name); ?>" src = "http://fptcamera.vn/resources/uploads/images/automatic/danh-muc-san-pham//<?php echo $cate->icon; ?>" /><span class="mc_title"><?php echo e($cate->name); ?><i class="fa fa-chevron-right hidden-md"></i></span></a>
                                      <ul>
                                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($cate->id == $cate1->id_root && $cate1->status==1): ?>
                                        <li><a href="<?php echo e(url('/category/'.$cate1->id.'/1')); ?>"><img alt = "<?php echo e($cate1->name); ?>" src = http://fptcamera.vn/resources/uploads/images/automatic/danh-muc-san-pham// /><span class="mc_title"><?php echo e($cate1->name); ?><i class="fa fa-chevron-right hidden-md"></i></span></a>
                                          <ul>
                                           <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                           <?php if($cate1->id == $cate2->id_root && $cate2->status==1): ?>
                                           <li><a href="<?php echo e(url('/category/'.$cate2->id.'/1')); ?>"><img alt = "<?php echo e($cate2->name); ?>" src = http://fptcamera.vn/resources/uploads/images/automatic/danh-muc-san-pham// /><span class="mc_title"><?php echo e($cate2->name); ?><i class="fa fa-chevron-right hidden-md"></i></span></a>
                                            <div class="clear"></div>
                                          </li>
                                          <?php endif; ?>
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                        <div class="clear"></div>
                                      </li>
                                      <?php endif; ?>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                    <div class="clear"></div>
                                  </li>
                                  <?php endif; ?>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <div class="clear"></div>
                              </ul>
                            </div>
                          </div>
                          <div class="col-xs-12 col-md-8 col-lg-9">
                            <div class="row">
                              <div class="col-xs-12 col-lg-8" style="padding:0;">
                                <div id="searchform">
                                  <form action="http://fptcamera.vn/tim-kiem" accept-charset="utf-8" method="get">                                                <img style="display: none;" class="loader" src="http://fptcamera.vn/resources/ui_images/client/background/loader.gif"/>
                                    <input type="text" name="t" value="" id="searchSgg" class="searchfield" onkeyup="lookup()" autocomplete="off" placeholder="Tìm kiếm sản phẩm ..."  />                                                <input type="submit" name="submit_search" value="Tìm kiếm" id="search_btn" class="searchbutton" />                                                <div class="clear"></div>
                                    <div class="autoSuggestionsList_l" id="autoSuggestionsList">
                                    </div>
                                  </form>                                        </div>
                                </div>
                                <div class="col-lg-4 hidden-xs hidden-sm hidden-md" style="padding-left:0;">
                                  <button type="button" class="btn btn-danger button-support" data-toggle="modal" data-target="#supportonlineModal"><img src="http://fptcamera.vn/resources/ui_images/client/background/yahoo-smile.png">&nbsp;Hỗ trợ trực tuyến</button>
                                </div>
                              </div>
                            </div>
                            <div class="clear"></div>
                          </div>
                        </div>
                      </div>
                    </div>                <div class="clear"></div>
                  </div>