<!DOCTYPE html>
<html class="no-js" lang="vi">

<head>
    <!-- CSS and Jquery start here -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LẮP ĐẶT CAMERA QUAN SÁT GIÁ RẺ UY TÍN TẠI FPT VN</title>
    <meta name="description" content="Công ty FPT Việt Nam cung cấp lắp đặt camera quan sát, lắp camera chống trộm cho gia đình, camera giám sát cửa hàng… lắp camera giá rẻ, uy tín toàn quốc.">
    <meta property="fb:app_id" content="" />
    <meta name="DC.title" content="Camera FPT Việt Nam" />
    <meta name="geo.region" content="VN-HN" />
    <meta name="geo.placename" content="Hà nội" />
    <meta name="geo.position" content="20.984321;105.818546" />
    <meta name="ICBM" content="20.984321, 105.818546" />
    <?php echo $__env->make("link.index", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-66346872-1', 'auto');
        ga('send', 'pageview');
    </script>
    <script type="text/javascript">
        function lookup(keyword) {
            var keyword = document.getElementById("searchSgg").value;
            if (keyword.length == 0) {
                $('#autoSuggestionsList').fadeOut(400);
            } else {
                $.post("http://fptcamera.vn/ajaxhandle/client_products_ajaxhandler/Ajax_Get_All_Product_Client", { keyword: keyword },
                    function(data) {
                        if (data.length > 14) {
                            $('#autoSuggestionsList').fadeIn(400);
                        // var obj = jQuery.parseJSON(data);
                        var obj = JSON.parse(data);
                        var strhtml = '';
                        //$('#autoSuggestionsList').html(data['message']);
                        strhtml += '<div class="sgg-outer">';
                        for (var index in obj) {
                            //alert(obj.message[1].label);
                            //alert(obj.length());
                            for (var i = 0; i < obj[index].length; i++) {
                                //alert(obj.message[i].value);
                                //append
                                strhtml += '<div class="sgg-row">';
                                strhtml += '<div class="sgg-image"><img width="50" height="50" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/thumbs/' + obj.message[i].Image + '"/></div>';
                                strhtml += '<div class="sgg-right">';
                                strhtml += '<div class="sgg-title"><a href="http://fptcamera.vn/' + obj.message[i].Slug + '">' + obj.message[i].Title + '</a></div>';
                                strhtml += '<div class="sgg-sellprice">' + parseFloat(obj.message[i].SellPrice).toFixed().replace(/./g, function(c, i, a) { return i && c !== "." && ((a.length - i) % 3 === 0) ? '.' + c : c; }) + ' đ</div>';
                                strhtml += '</div>';
                                strhtml += '</div>';
                            }
                        }
                        strhtml += '</div>';
                        $('#autoSuggestionsList').html(strhtml);
                    } else {
                        var strhtml = '';
                        strhtml += '<div class="sgg-outer">';
                        strhtml += '<div class="sgg-row">';
                        strhtml += '<div class="sgg-title"><a>Không có sản phẩm nào tương ứng</a></div>';
                        strhtml += '</div>';
                        strhtml += '</div>';
                        $('#autoSuggestionsList').html(strhtml);
                    }
                });
            // Ajax_Suggestion(keyword);
        }
    }
</script>
<link rel="stylesheet" type="text/css" href="http://fptcamera.vn/resources/stylesheets/client/social-likes_birman.css" />
<script src="http://fptcamera.vn/resources/js/client/social-likes.min.js"></script>
<!-- CSS and Jquery end here -->
</head>

<body lang="vi">
    <div id="wrapper">
        <h1 style="display:none;"><b>Lắp đặt camera quan sát giá rẻ </b>,<b> camera FPT</b></h1>
        <h2 style="display: none;">Tư vấn lắp đặt camera</h2>
        <!-- Top start here -->
        <div id="top">
            <div id="fb-root"></div>
            <script>
                (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>
            <div id="top-menu" class="hidden-sm hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="col-xs-7">
                                    <div id="top-hotline">
                                        <div class="name">
                                            <a href="http://fptcamera.vn/camera-giam-sat-tot">Sản phẩm bán chạy</a>|
                                            <a href="http://fptcamera.vn/lap-dat-camera-khuyen-mai">Sản phẩm khuyến mại</a>|
                                            <a href="http://fptcamera.vn/camera-quan-sat-moi">Sản phẩm mới</a><img style="margin:-4px 0 0 2px;" src="http://fptcamera.vn/resources/ui_images/client/background/new.gif">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-5">
                                    <div id="top-hotline" style="float:right;">
                                        <div class="name">
                                            <a class="name_cart" href="http://fptcamera.vn/gio-hang">Giỏ hàng (<b>0</b> sản phẩm)</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top:50px;" class='hidden-lg hidden-md'>
                <div class="mobileslider">
                    <ul class="slides">
                        <li>
                            <a href="#">
                                <img alt="camera quan sát trên điện thoại" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/lap-dat-camera-quan-sat-fpt.jpg" />
                                <div class="clear"></div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img alt="camera quan sát trên điện thoại 2" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/camera-quan-sat-tren-dien-thoai-2.jpg" />
                                <div class="clear"></div>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://fptcamera.vn/tin-tuc/xem-camera-giam-sat-qua-dien-thoai">
                                <img alt="xem camera trên điện thoại di động" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/xem-camera-tren-dien-thoai-di-dong.jpg" />
                                <div class="clear"></div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img alt="Đầu ghi hình camera quan sát" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/dau-ghi-hinh-camera-quan-sat1.jpg" />
                                <div class="clear"></div>
                            </a>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
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
                                <ul class="nav navbar-nav">
                                   <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <?php if($cate->id_root == 0 && $cate->status==1): ?>
                                   <li><a href="<?php echo e(url('/category/'.$cate->id)); ?>"><img src = "http://fptcamera.vn/resources/uploads/images/automatic/danh-muc-san-pham//<?php echo $cate->icon; ?>"/>&nbsp;&nbsp;<?php echo $cate->name; ?></a></li>
                                   <?php endif; ?>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               </ul>
                           </div>
                           <!-- /.navbar-collapse -->
                       </div>
                       <!-- /.container-fluid -->
                   </nav>
               </div>
           </div>
           <div class="clear"></div>
       </div>
       <!-- Top end here -->
       <div class="container menu_bg">
        <div class="row menu_bg">
            <div class="col-xs-12 col-xs-offset-0 menu_bg">
                <div class="row">
                    <div class="col-md-4 col-lg-3 hidden-xs hidden-sm" style="padding-right:0;">
                        <div id="prd-cate-list">
                            <div class="prd-cate-header">
                                <span>Danh mục sản phẩm<i class="fa fa-chevron-circle-down"></i></span>
                            </div>
                            <ul class="main-page equalheightbanner">
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
                            <form action="http://fptcamera.vn/tim-kiem" accept-charset="utf-8" method="get"> <img style="display: none;" class="loader" src="http://fptcamera.vn/resources/ui_images/client/background/loader.gif" />
                                <input type="text" name="t" value="" id="searchSgg" class="searchfield" onkeyup="lookup()" autocomplete="off" placeholder="Tìm kiếm sản phẩm ..." />
                                <input type="submit" name="submit_search" value="Tìm kiếm" id="search_btn" class="searchbutton" />
                                <div class="clear"></div>
                                <div class="autoSuggestionsList_l" id="autoSuggestionsList">
                                </div>
                            </form>
                        </div>
                        <div id="banner" class="hidden-xs hidden-sm equalheightbanner">
                            <div class="bannerslider">
                                <ul class="slides">
                                    <li>
                                        <a href="#">
                                            <img title="công ty lắp đặt camera uy tín" alt="Dịch vụ lắp đặt camera quan sát uy tín giá rẻ tại FPT việt nam đạt chất lượng hàng đầu. Khuyến mãi lắp đặt trọn gói không phát sinh" src="http://fptcamera.vn/resources/uploads/images/automatic/banner/chung-nhan-dai-ly-camera-hikvision.jpg" />
                                            <div class="clear"></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="http://fptcamera.vn/tin-tuc/lap-dat-mang-fpt-cap-quang-tai-fpt-viet-nam">
                                            <img title="lắp đặt mạng FPT" alt="lap-dat-mang-fpt" src="http://fptcamera.vn/resources/uploads/images/automatic/banner/lap-dat-mang-fpt.jpg" />
                                            <div class="clear"></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="http://fptcamera.vn/tron-bo-camera-gia-re">
                                            <img title="lắp đặt camera trọn bộ gía rẻ" alt="Lắp đặt camera benco trọn bộ dịch vụ của FPT VIỆT NAM quý khách không phải phát sinh bất kỳ chi phí nào. Camera an ninh uy tín" src="http://fptcamera.vn/resources/uploads/images/automatic/banner/camera-benco-gia-re.jpg" />
                                            <div class="clear"></div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 hidden-xs hidden-sm hidden-md" style="padding-left:0;">
                        <button type="button" class="btn btn-danger button-support" data-toggle="modal" data-target="#supportonlineModal"><img src="http://fptcamera.vn/resources/ui_images/client/background/yahoo-smile.png">&nbsp;Hỗ trợ trực tuyến</button>
                        <a class="b_a" href="http://fptcamera.vn/tin-tuc/lap-dat-mang-fpt-cap-quang-tai-fpt-viet-nam"><img alt="Lắp camera, Internet FPT" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/lap-mang-fpt.jpg"></a>
                        <a class="b_a" href="http://fptcamera.vn/tin-tuc/chuong-trinh-doi-camera-cu-lay-camera-moi-tai-fpt"><img alt="Lắp đặt camera tặng báo trộm" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/doi_camera_cu_lay_moi.jpg"></a>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="col-xs-12 hidden-xs hidden-sm">
                <div id="sub-menu">
                    <div class="row">
                        <div class="col-xs-12 col-lg-7">
                            <div class="contain">
                                <a href='http://fptcamera.vn/tin-tuc/gioi-thieu'>Sơ lược công ty</a>
                                <a href='http://fptcamera.vn/tin-tuc/chinh-sach'>Chính sách ưu đãi</a>
                                <a href='http://fptcamera.vn/tin-tuc/tin-camera'>Tin camera</a>
                                <a href='http://fptcamera.vn/lien-he'>Liên hệ</a>
                            </div>
                        </div>
                        <div class="col-lg-5 hidden-xs hidden-sm hidden-md">
                            <div class="newsslider">
                                <ul class="slides">
                                    <li>
                                        <a href="http://fptcamera.vn/tin-tuc/lap-dat-camera-giam-sat-khu-cong-nghiep">Lắp đặt camera giám sát khu công nghiệp</a>
                                    </li>
                                    <li>
                                        <a href="http://fptcamera.vn/tin-tuc/lap-dat-camera-quan-sat-tai-bac-giang">lắp đặt camera quan sát tại  Bắc Giang</a>
                                    </li>
                                    <li>
                                        <a href="http://fptcamera.vn/tin-tuc/lap-dat-camera-gia-dinh-gia-bao-nhieu">lap dat camera gia dinh gia bao nhieu</a>
                                    </li>
                                    <li>
                                        <a href="http://fptcamera.vn/tin-tuc/lap-dat-camera-quan-sat-cho-nha-xuong-can-luu-y-gi-">Lắp đặt camera quan sát cho nhà xưởng cần lưu ý gì?</a>
                                    </li>
                                    <li>
                                        <a href="http://fptcamera.vn/tin-tuc/chuong-trinh-doi-camera-cu-lay-camera-moi-tai-fpt">Chương trình đổi camera cũ lấy camera mới tại FPT</a>
                                    </li>
                                    <li>
                                        <a href="http://fptcamera.vn/tin-tuc/lap-dat-camera-tai-bac-ninh">Lắp đặt camera tại Bắc Ninh</a>
                                    </li>
                                    <li>
                                        <a href="http://fptcamera.vn/tin-tuc/chi-phi-lap-dat-camera-quan-sat-tron-goi-tai-ha-noi">Chi phí lắp đặt camera quan sát trọn gói tại hà nội</a>
                                    </li>
                                    <li>
                                        <a href="http://fptcamera.vn/tin-tuc/tu-van-lap-dat-camera-quan-sat-an-toan-gia-dinh">Tư vấn lắp đặt camera quan sát an toàn gia đình</a>
                                    </li>
                                    <div class="clear"></div>
                                </ul>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="col-xs-12">
                <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($e->id_root==0 && $e->status==1): ?>
                <ul class="nav nav-tabs custom-tabs " role="tablist">
                    <li role="presentation" class="active"><a href="http://fptcamera.vn/camera-giam-sat"><?php echo e($e->name); ?></a></li>
                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($e->id == $cate1->id_root && $cate1->status==1): ?>
                    <li class="hidden-xs hidden-sm" role="presentation"><a href="http://fptcamera.vn/camera-hikvision"><?php echo e($cate1->name); ?></a></li>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                <div class="tab-content ">
                    <div role="tabpanel" class="tab-pane active" id="dmsp-camera-giam-sat">
                        <div class="row">
                            <div class="col-xs-12 col-lg-9">
                                <div class="row">
                                    <?php
                                    $products = DB::select('SELECT product.* FROM slide INNER JOIN slide_product ON slide_product.id_slide = slide.id INNER JOIN product ON slide_product.id_product = product.id
                                        WHERE slide.id_category = ?', [$e->id]);
                                        ?>
                                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-xs-6 col-sm-4 col-lg-3 hidden-sm hidden-md">
                                            <div class="thumbnail products">
                                                <a href="http://fptcamera.vn/camera-ip-wifi-hikvision-ds-2cd2420f-iw-2-0mb"><img alt="camera-ip-cube-wifi-hikvision-DS-2CD2420F-IW" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/<?php echo $element->img; ?>"></a>
                                                <div class="caption">
                                                    <a href="http://fptcamera.vn/camera-ip-wifi-hikvision-ds-2cd2420f-iw-2-0mb"><h3><?php echo $element->name; ?></h3></a>
                                                    <div class="clear"></div>
                                                    <span class="new-price"><?php echo number_format($element->price); ?> VNĐ</span>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                                <div class="col-md-3 hidden-xs hidden-sm hidden-md">
                                    <a class="b_a2" href="http://fptcamera.vn/camera-khong-day"><img alt="lap-camera-giam-sat-khong-day-wifi" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/<?php echo e($e->img); ?>"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
                <div class="col-xs-12 hidden-xs hidden-sm">
                    <div class="text-header">Camera các hãng</div>
                    <div class="galleryslider">
                        <ul class="slides">
                            <li>
                                <a href="http://fptcamera.vn/camera-vantech"><img alt="Camera Vantech Giá Rẻ" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/camera-vantech.jpg"/></a>
                            </li>
                            <li>
                                <a href="http://fptcamera.vn/camera-benco"><img alt="Camera Benco Giá Rẻ" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/camera-hang-benco1.jpg"/></a>
                            </li>
                            <li>
                                <a href="http://fptcamera.vn/camera-dahua"><img alt="Camera Dahua Đài Loan" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/camera-dahua.jpg"/></a>
                            </li>
                            <li>
                                <a href="http://fptcamera.vn/camera-questek"><img alt="Camera Questek Việt Nam" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/camera-questek.jpg"/></a>
                            </li>
                            <li>
                                <a href="http://fptcamera.vn/camera-hikvision"><img alt="Camera HIKVISION" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/camera-hikvision-dai-loan.jpg"/></a>
                            </li>
                            <li>
                                <a href="http://fptcamera.vn/camera-spyeye"><img alt="Camera Spyeye" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/camera-spyeye-gia-re1.jpg"/></a>
                            </li>
                            <li>
                                <a href="http://fptcamera.vn/camera-avtech"><img alt="Camera AVTECH ĐÀI LOAN" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/camera-samsung.jpg"/></a>
                            </li>
                            <li>
                                <a href="http://fptcamera.vn/camera-kce"><img alt="Camera KCE HÀN QUỐC" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/camera-KCE-han-quoc.jpg"/></a>
                            </li>
                            <li>
                                <a href="http://fptcamera.vn/camera-kce"><img alt="Camera SAMSUNG HÀN QUỐC" src="http://fptcamera.vn/resources/uploads/images/automatic/quang-cao/camera-hang-samsung.jpg"/></a>
                            </li>
                            <div class="clear"></div>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="col-xs-12 hidden-xs hidden-sm">
                    <div class="text-header">Chấp nhận thanh toán</div>
                    <img style="width:100%;margin:10px 0;" alt="Chấp nhận thanh toán" src="http://fptcamera.vn/resources/ui_images/client/background/payments.png">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bottom end here -->
<?php echo $__env->make("index.bottom", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make("index.footer", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
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
                                        <p class="title">Mr: Xuân</p>
                                        <p>Tư vấn bán hàng</p>
                                        <p>Tel: 098 448 9688</p>
                                        <a style="float:left" href="skype:kd_fptcamera?chat" class="icons skype"><i style="font-size:25px;margin-left:10px;" class="fa fa-skype"></i></a>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-md-4">
                                    <div class="hotline">
                                        <p class="title">Mr: Thành</p>
                                        <p>Tư vấn bán hàng</p>
                                        <p>Tel: 0971.767.285</p>
                                        <a style="float:left" href="skype:kd_fptcamera?chat" class="icons skype"><i style="font-size:25px;margin-left:10px;" class="fa fa-skype"></i></a>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-md-4">
                                    <div class="hotline">
                                        <p class="title">Mr: Duy</p>
                                        <p>Chi nhánh Sài Gòn</p>
                                        <p>Tel: 0931.588.886</p>
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


            $(window).resize(function() {
                equalheight('.thumbnail.products');
                equalheight('.thumbnail.news');
                equalheight('.equalheight1');
                equalheight('.equalheightbanner');
            });

            $('#menu ul > li').hover(function() {
                $(this).children('ul').stop(true, true).delay(200).fadeIn(300);
            }, function() {
                $(this).children('ul').stop(true, true).fadeOut(300);
            });

            $('#prd-cate-list .sub-page > ul > li').hover(function() {
                $(this).children('ul').stop(true, true).delay(200).fadeIn(300);
            }, function() {
                $(this).children('ul').stop(true, true).fadeOut(300);
            });

            $('#prd-cate-list').hover(function() {
                $(this).children('ul.sub-page').stop(true, true).delay(200).slideDown(300);
            }, function() {
                $(this).children('ul.sub-page').stop(true, true).slideUp(300);
            });

            $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
                event.preventDefault();
                event.stopPropagation();
                $(this).parent().siblings().removeClass('open');
                $(this).parent().toggleClass('open');
            });

            $('.scrollfix').scrollFix({ fixTop: 40 });

            if ($(window).scrollTop() != "0")
                $("#go_top").fadeIn("slow");
            var scrollDiv = $("#go_top");
            $(window).scroll(function() {
                if ($(window).scrollTop() == "0")
                    $(scrollDiv).fadeOut("slow")
                else
                    $(scrollDiv).fadeIn("slow")
            });
            $("#go_top").click(function() {
                $("html, body").animate({
                    scrollTop: $("#ScrollTo").offset().top
                }, "slow")
            });

            $('.mobileslider').flexslider({
                animation: "fade",
                animationLoop: true,
                directionNav: false,
                controlNav: false,
            });
            $('.bannerslider').flexslider({
                animation: "fade",
                animationLoop: true,
                directionNav: false,
            });

            $('.galleryslider').flexslider({
                animation: "slide",
                itemWidth: 122,
                controlNav: false,
            });

            $('.newsslider').flexslider({
                animation: "slide",
                direction: "vertical",
                controlNav: false,
                directionNav: false,
                slideshowSpeed: 3000,
            });

            $('#prd-cate-list .main-page > ul > li').hover(function() {
                $(this).children('ul').stop(true, true).delay(200).fadeIn(500);
            }, function() {
                $(this).children('ul').stop(true, true).fadeOut(500);
            });
        </script>
        <!-- Subiz -->
        <script type='text/javascript'>window._sbzq||function(e){e._sbzq=[];var t=e._sbzq;t.push(["_setAccount",50848]);var n=e.location.protocol=="https:"?"https:":"http:";var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//static.subiz.com/public/js/loader.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)}(window);</script>
    </body>

    </html>