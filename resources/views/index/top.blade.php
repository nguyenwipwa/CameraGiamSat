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
                                            <a class="name_cart" href="{{ route('cartDetail') }}">Giỏ hàng (<b>{{ Cart::count() }}</b> sản phẩm)</a>
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
                                    <a href="{{url('/')}}">
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
                                   @foreach($category as $cate)
                                   @if($cate->id_root == 0 && $cate->status==1)
                                   <li><a href="{{url('/category/'.$cate->id)}}"><img src = "http://fptcamera.vn/resources/uploads/images/automatic/danh-muc-san-pham//{!!$cate->icon!!}"/>&nbsp;&nbsp;{!!$cate->name!!}</a></li>
                                   @endif
                                   @endforeach
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