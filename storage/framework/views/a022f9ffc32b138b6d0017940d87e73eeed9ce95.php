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
    <?php echo $__env->make('index.layouts.topmenu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
                <!-- Menu -->
                <?php echo $__env->make('index.layouts.collapse', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <!-- End Menu -->
                <div class="clear"></div>
            </div>