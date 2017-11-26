        <div id="top">
          <div id="fb-root"></div>
          <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));</script>
          <?php echo $__env->make('index.layouts.topmenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <div class="container hidden-xs hidden-sm">
            <div class="row top-header" id="ScrollTo">
              <div class="col-xs-12">
                <div class="row">
                  <div class="col-xs-12 col-md-3">
                    <div id="logo">
                      <a href="<?php echo e(url('/')); ?>">
                        <img title="LẮP ĐẶT CAMERA QUAN SÁT GIÁ RẺ" alt="Camera FPT Việt Nam tự hào Nhà cung cấp thiết bị camera giám sát giá rẻ uy tín trên toàn quốc" src="<?php echo e(asset('public/images/ui_images/logo.jpg')); ?>">
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
                    <!-- Menu -->
                    <?php echo $__env->make('index.layouts.collapse', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <!-- End Menu -->                      
                    <div class="container menu_bg">
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
                                   <li><a href="<?php echo e(url('/category/'.$cate->id.'/1')); ?>"><img alt = "<?php echo e($cate->name); ?>" src = "<?php echo e(asset('public/images/danh-muc-san-pham/'.$cate->icon)); ?>" /><span class="mc_title"><?php echo e($cate->name); ?><i class="fa fa-chevron-right hidden-md"></i></span></a>
                                    <ul>
                                      <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <?php if($cate->id == $cate1->id_root && $cate1->status==1): ?>
                                      <li><a href="<?php echo e(url('/category/'.$cate1->id.'/1')); ?>"><img alt = "<?php echo e($cate1->name); ?>" src = "" /><span class="mc_title"><?php echo e($cate1->name); ?><i class="fa fa-chevron-right hidden-md"></i></span></a>
                                        <ul>
                                         <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <?php if($cate1->id == $cate2->id_root && $cate2->status==1): ?>
                                         <li><a href="<?php echo e(url('/category/'.$cate2->id.'/1')); ?>"><img alt = "<?php echo e($cate2->name); ?>" src = "" /><span class="mc_title"><?php echo e($cate2->name); ?><i class="fa fa-chevron-right hidden-md"></i></span></a>
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
                                <form action="<?php echo e(route('search')); ?>" accept-charset="utf-8" method="get">
                                  <img style="display: none;" class="loader" src="http://fptcamera.vn/resources/ui_images/client/background/loader.gif"/>
                                  <input type="text" name="key" value="" id="searchbutton" class="searchfield" onkeyup="lookup()" autocomplete="off" placeholder="Tìm kiếm sản phẩm ..."  />
                                  <input type="submit" name="submit_search" value="Tìm kiếm" id="search_smt" class="searchbutton" />
                                  <div class="clear"></div>
                                  <div class="autoSuggestionsList_l" id="autoSuggestionsList">
                                  </div>
                                </form>
                              </div>
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
                </div>                
                <div class="clear"></div>
              </div>
