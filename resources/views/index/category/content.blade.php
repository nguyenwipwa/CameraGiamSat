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
  <link rel="shortcut icon" href="http://fptcamera.vn/resources/uploads/images/automatic/favicon/camera-giam-sat-fpt.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="http://fptcamera.vn/resources/stylesheets/client/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="http://fptcamera.vn/resources/stylesheets/client/bootstrap-theme.css" />
  <link rel="stylesheet" type="text/css" href="http://fptcamera.vn/resources/stylesheets/client/normalize.css" />
  <link rel="stylesheet" type="text/css" href="http://fptcamera.vn/resources/stylesheets/client/app.css" />
  <link rel="stylesheet" type="text/css" href="http://fptcamera.vn/resources/stylesheets/client/font-awesome.css" />
  <link rel="stylesheet" type="text/css" href="http://fptcamera.vn/resources/stylesheets/client/flexslider.css" />

  <script src="http://fptcamera.vn/resources/js/client/jquery-2.1.3.min.js"></script>
  <script src="http://fptcamera.vn/resources/js/client/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="http://fptcamera.vn/resources/js/client/bootstrap.js"></script>
  <script src="http://fptcamera.vn/resources/js/client/scrollfix.js"></script>
  <script src="http://fptcamera.vn/resources/js/client/equalheight.js"></script>
  <script src="http://fptcamera.vn/resources/js/client/jquery.flexslider-min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic&subset=latin,vietnamese' rel='stylesheet' type='text/css'>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-66346872-1', 'auto');
    ga('send', 'pageview');

  </script>


  <script type="text/javascript">
    function lookup(keyword) {
      var keyword = document.getElementById("searchSgg").value;
      if(keyword.length == 0) {
        $('#autoSuggestionsList').fadeOut(400);
      } else {
        $.post("http://fptcamera.vn/ajaxhandle/client_products_ajaxhandler/Ajax_Get_All_Product_Client", 
          {keyword : keyword},
          function(data){
            if(data.length > 14) {
              $('#autoSuggestionsList').fadeIn(400);
                      // var obj = jQuery.parseJSON(data);
                      var obj = JSON.parse(data);
                      var strhtml = '';
                      //$('#autoSuggestionsList').html(data['message']);
                      strhtml += '<div class="sgg-outer">';
                      for(var index in obj) {
                          //alert(obj.message[1].label);
                          //alert(obj.length());
                          for(var i=0;i<obj[index].length;i++) {
                              //alert(obj.message[i].value);
                              //append
                              strhtml += '<div class="sgg-row">';
                              strhtml += '<div class="sgg-image"><img width="50" height="50" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/thumbs/' + obj.message[i].Image + '"/></div>';
                              strhtml += '<div class="sgg-right">';
                              strhtml += '<div class="sgg-title"><a href="http://fptcamera.vn/' + obj.message[i].Slug + '">' + obj.message[i].Title + '</a></div>';
                              strhtml += '<div class="sgg-sellprice">' + parseFloat(obj.message[i].SellPrice).toFixed().replace(/./g, function(c, i, a) {return i && c !== "." && ((a.length - i) % 3 === 0) ? '.' + c : c;}) + ' đ</div>';
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
      </script>        <link rel="stylesheet" type="text/css" href="http://fptcamera.vn/resources/stylesheets/client/flexslider.css" />
      <link rel="stylesheet" type="text/css" href="http://fptcamera.vn/resources/stylesheets/client/social-likes_birman.css" />
      <script src="http://fptcamera.vn/resources/js/client/jquery.flexslider-min.js"></script>
      <script src="http://fptcamera.vn/resources/js/client/social-likes.min.js"></script>
      <!-- CSS and Jquery end here -->
    </head>
    <body lang="vi">
      <div id="wrapper">
        <!-- Top start here -->
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
                                     @foreach($category as $cate)
                                     @if($cate->id_root == 0 && $cate->status==1)
                                     <li><a href="{{url('/category/'.$cate->id.'/1')}}"><img alt = "{{$cate->name}}" src = "http://fptcamera.vn/resources/uploads/images/automatic/danh-muc-san-pham//{!!$cate->icon!!}" /><span class="mc_title">{{$cate->name}}<i class="fa fa-chevron-right hidden-md"></i></span></a>
                                      <ul>
                                        @foreach($category as $cate1)
                                        @if($cate->id == $cate1->id_root && $cate1->status==1)
                                        <li><a href="{{url('/category/'.$cate1->id.'/1')}}"><img alt = "{{$cate1->name}}" src = http://fptcamera.vn/resources/uploads/images/automatic/danh-muc-san-pham// /><span class="mc_title">{{$cate1->name}}<i class="fa fa-chevron-right hidden-md"></i></span></a>
                                          <ul>
                                           @foreach($category as $cate2)
                                           @if($cate1->id == $cate2->id_root && $cate2->status==1)
                                           <li><a href="{{url('/category/'.$cate2->id.'/1')}}"><img alt = "{{$cate2->name}}" src = http://fptcamera.vn/resources/uploads/images/automatic/danh-muc-san-pham// /><span class="mc_title">{{$cate2->name}}<i class="fa fa-chevron-right hidden-md"></i></span></a>
                                            <div class="clear"></div>
                                          </li>
                                          @endif
                                          @endforeach
                                        </ul>
                                        <div class="clear"></div>
                                      </li>
                                      @endif
                                      @endforeach
                                    </ul>
                                    <div class="clear"></div>
                                  </li>
                                  @endif
                                  @endforeach
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
                  <!-- Top end here -->
                  <div class="container">
                    <div class="row">
                      <div class="col-xs-12 pad-btm">
                        <div class="row">
                          <div class="col-md-3 hidden-xs hidden-sm">
                            <div class="header">
                              <span>{{$name_cate}}</span>
                            </div>
                            <div class="body">
                              @foreach ($menu_left as $element)
                              <a class="sort_list" href="{{url('/category/'.$element->id)}}">{{$element->name}}</a>
                              @endforeach
                            </div>

                          </div>
                          <div class="col-xs-12 col-md-9">
                                                            <!-- <div class="article_header my-breadcrumb">
                                    <ol class="breadcrumb"><li><a href="http://fptcamera.vn/">Trang chủ</a></li><li><a href="http://fptcamera.vn/thiet-bi-van-phong">Thiết bị văn phòng</a></li></ol>
                                  </div> -->
                                  <div class="clear"></div>
                                  <div class="header4">
                                    <h1>{{$name_cate}}</h1>
                                    <h2 style="display:none;">{{$name_cate}}</h2>

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
                                      @foreach ($list_product as $e)
                                      <div class="col-xs-6 col-sm-4 col-lg-3">
                                        <div class="thumbnail products">
                                          <a href="http://fptcamera.vn/may-chieu-sony-vpl-dx122"><img alt="may-chieu-sony-VPL-DX-122" src="http://fptcamera.vn/resources/uploads/images/automatic/san-pham/{{$e->img}}"></a>
                                          <div class="caption">
                                            <a href="http://fptcamera.vn/may-chieu-sony-vpl-dx122"><h3>{{$e->name}}</h3></a>
                                            <div class="clear"></div>
                                            <span class="new-price">{{number_format($e->price)}} VNĐ</span>
                                            {{-- <span class="old-price">11.800.000 đ</span> --}}
                                          </div>
                                        </div>
                                      </div>
                                      @endforeach
                                    </div>
                                  </div>
                                  <div class="clear"></div>
                                  <div class="pagination">
                                    <ul class='pagination'>
                                      <li class='disabled'>
                                        @for ($i = 1; $i <= $page_number ; $i++)
                                        <li class='@php if($page==$i) echo 'active'; @endphp'><a href='{{url('/category/'.$id_category.'/'.$i)}}'>{{$i}}<span class='sr-only'></span></a></li>
                                        @endfor
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
                        @include("index.bottom")
                        @include("index.footer")
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