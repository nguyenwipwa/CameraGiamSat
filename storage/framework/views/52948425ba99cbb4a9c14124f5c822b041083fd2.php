<!DOCTYPE html>
<html class="no-js" lang="vi">
<head>
  <!-- CSS and Jquery start here -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Phân phối thiết bị văn phòng - Máy chiếu các loại</title>
  <meta name="description" content="Chúng tôi chuyên cung cấp các loại máy chiếu văn phòng cho trường học, phòng họp.... ">
  <meta property="fb:app_id" content="" />
  <meta name="DC.title" content="Camera FPT Việt Nam" />
  <meta name="geo.region" content="VN-HN" />
  <meta name="geo.placename" content="Hà nội" />
  <meta name="geo.position" content="20.984321;105.818546" />
  <meta name="ICBM" content="20.984321, 105.818546" />

  <?php echo $__env->make("../../.link.index", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/stylesheets/social-likes_birman.css')); ?>" />
  <script src="<?php echo e(asset('public/js/social-likes.min.js')); ?>"></script>
  
  <!-- CSS and Jquery end here -->
</head>
<body lang="vi">
  <div id="wrapper">
    <!-- Top start here -->
    <?php echo $__env->make("index.topsub", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Top end here -->
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
                                                            <!-- <div class="article_header my-breadcrumb">
                                    <ol class="breadcrumb"><li><a href="http://fptcamera.vn/">Trang chủ</a></li><li><a href="http://fptcamera.vn/thiet-bi-van-phong">Thiết bị văn phòng</a></li></ol>
                                  </div> -->
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
                                  <div class="description2">
                                  </div>
                                  <div class="clear"></div>
                                  <div class="product_list">
                                    <div class="row">
                                      <?php $__currentLoopData = $list_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <div class="col-xs-6 col-sm-4 col-lg-3">
                                        <div class="thumbnail products">
                                          <a href="<?php echo e(url('/detail-product/'.$e->id)); ?>"><img alt="may-chieu-sony-VPL-DX-122" src="<?php echo e(asset('public/images/san-pham/'.$e->img)); ?>"></a>
                                          <div class="caption">
                                            <a href="<?php echo e(url('/detail-product/'.$e->id)); ?>"><h3><?php echo e($e->name); ?></h3></a>
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
                                        <li class='<?php if($page==$i) echo 'active'; ?>'><a href='<?php echo e(url('/category/'.$id_category.'/'.$i)); ?>'><?php echo e($i); ?><span class='sr-only'></span></a></li>
                                        <?php endfor; ?>
                                      </li><li><a href="http://fptcamera.vn/thiet-bi-van-phong/?&amp;trang=10">Last &rsaquo;</a></li>
                                    </ul>
                                  </div>
                                  <div class="clear"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- Bottom end here -->
                        <?php echo $__env->make("index.bottom", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <?php echo $__env->make("index.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <!-- Bottom end here -->

                      </div>
                      <div class="sticky-container hidden-xs hidden-md">
      <!-- <ul class="sticky">
        <li>
          <a rel="no-follow" target="_blank" href="">
            <p>Facebook</p>
            <img src="http://fptcamera.vn/resources/ui_images/client/background/social/fb.jpg" />
          </a>
        </li>
        <li>
          <a rel="no-follow" target="_blank" href="">
            <p>Google+</p>
            <img src="http://fptcamera.vn/resources/ui_images/client/background/social/gplus.jpg" />
          </a>
        </li>
        <li>
          <a rel="no-follow" target="_blank" href="">
            <p>Twitter</p>
            <img src="http://fptcamera.vn/resources/ui_images/client/background/social/tt.jpg" />
          </a>
        </li>
        <li>
          <a rel="no-follow" target="_blank" href="">
            <p>Youtube</p>
            <img src="http://fptcamera.vn/resources/ui_images/client/background/social/yt.jpg" />
          </a>
        </li>
      </ul> -->
    </div>
    <div class="sticky-buttons hidden-xs hidden-md">
      <!-- <a data-toggle="modal" data-target="#supportonlineModal">Hỗ trợ trực tuyến</a> -->
      <!-- <a data-toggle="modal" data-target="#hotlineModal">HOTLINE</a> -->
    </div>
    <!-- <div class="modal fade" id="hotlineModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">HOTLINE</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div id="modal_hotline_list">
                                  <div class="col-xs-4">
                    <div class="hotline">
                      <span class="phone">Hotline 1</span>
                      <span class="title">024.6328.2964</span>
                    </div>
                  </div>
                                  <div class="col-xs-4">
                    <div class="hotline">
                      <span class="phone">Hotline 2</span>
                      <span class="title">0984 489 688</span>
                    </div>
                  </div>
                              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
          </div>
        </div>
      </div>
    </div> -->
    <div class="modal fade" id="supportonlineModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Hỗ trợ trực tuyến</h4>
          </div>
          <div class="modal-body">
            <div class="row">
              <div id="modal_hotline_list">
                <div class="col-xs-6 col-md-4">
                  <div class="hotline">
                    <p class="title">Mr: Xuân</p>                     <p>Tư vấn bán hàng</p>                      <p>Tel: 098 448 9688</p>
                    <a style="float:left" href="skype:kd_fptcamera?chat" class="icons skype"><i style="font-size:25px;margin-left:10px;" class="fa fa-skype"></i></a>
                  </div>
                </div>
                <div class="col-xs-6 col-md-4">
                  <div class="hotline">
                    <p class="title">Mr: Thành</p>                      <p>Tư vấn bán hàng</p>                      <p>Tel: 0971.767.285</p>
                    <a style="float:left" href="skype:kd_fptcamera?chat" class="icons skype"><i style="font-size:25px;margin-left:10px;" class="fa fa-skype"></i></a>
                  </div>
                </div>
                <div class="col-xs-6 col-md-4">
                  <div class="hotline">
                    <p class="title">Mr: Duy</p>                      <p>Chi nhánh Sài Gòn</p>                      <p>Tel: 0931.588.886</p>
                    <a style="float:left" href="skype:kd_fptcamera?chat" class="icons skype"><i style="font-size:25px;margin-left:10px;" class="fa fa-skype"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="go_top" class="hidden-xs hidden-sm"><i class="fa fa-arrow-circle-up"></i></div>
    <div id="fixed-bottom" class="hidden-lg hidden-md">
      <div id="call-xs-sm"><a href="tel:0984 489 688"><i class="fa fa-phone">&nbsp;&nbsp;</i>Gọi 0984 489 688</a></div>
    </div>
    <script type="text/javascript" charset="utf-8">

      $(window).load(function() {
        equalheight('.thumbnail.products');
        equalheight('.thumbnail.news');
        equalheight('.equalheight1');
        equalheight('.equalheightbanner');
      });


      $(window).resize(function(){
        equalheight('.thumbnail.products');
        equalheight('.thumbnail.news');
        equalheight('.equalheight1');
        equalheight('.equalheightbanner');
      });

      $('#menu ul > li').hover(function () {
        $(this).children('ul').stop(true, true).delay(200).fadeIn(300);
      }, function () {
        $(this).children('ul').stop(true, true).fadeOut(300);
      });

      $('#prd-cate-list .sub-page > ul > li').hover(function () {
        $(this).children('ul').stop(true, true).delay(200).fadeIn(300);
      }, function () {
        $(this).children('ul').stop(true, true).fadeOut(300);
      });

      $('#prd-cate-list').hover(function () {
        $(this).children('ul.sub-page').stop(true, true).delay(200).slideDown(300);
      }, function () {
        $(this).children('ul.sub-page').stop(true, true).slideUp(300);
      });

      $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
        event.preventDefault();
        event.stopPropagation();
        $(this).parent().siblings().removeClass('open');
        $(this).parent().toggleClass('open');
      });

      $('.scrollfix').scrollFix({fixTop:40});

      if ($(window).scrollTop() != "0")
        $("#go_top").fadeIn("slow");
      var scrollDiv = $("#go_top");
      $(window).scroll(function () {
        if ($(window).scrollTop() == "0")
          $(scrollDiv).fadeOut("slow")
        else
          $(scrollDiv).fadeIn("slow")
      });
      $("#go_top").click(function () {
        $("html, body").animate({
          scrollTop: $("#ScrollTo").offset().top
        }, "slow")
      });

      $('.mobileslider').flexslider({
        animation: "fade",
        animationLoop: true,
        directionNav: false,
        controlNav: false,
      });        </script>
    </body>
    </html>