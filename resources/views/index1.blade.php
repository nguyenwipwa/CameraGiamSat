<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <title>Camera quan sát</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/css/classic.css')}}">
  <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('public/css/quangcao.css')}}">
  <link rel="stylesheet" href="{{asset('public/css/modal.css')}}">
  <link rel="stylesheet" href="{{asset('public/css/re.css')}}">
  <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
  <link rel="stylesheet"  type="text/css" href="{{asset('public/css/hover-min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('public/css/themsp.css')}}">

  <link rel="stylesheet" href="{{asset('public/css/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('public/css/responsive.css')}}">

  <script src="{{asset('public/js/jquery-3.1.1.min.js')}}"></script>
  <script src="{{asset('public/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('public/js/classic.js')}}"></script>
  <script src="{{asset('public/js/jquery.validate.js')}}"></script>
  <script src="{{asset('public/js/additional-methods.js')}}"></script>
  <script src="{{asset('public/danhsachsanpham.js')}}"></script>



  <script type="text/javascript">
    $(document).ready(function () {

      $("#formdk").validate({
        rules: {
          dname: {
            required: true,
            rangelength: [6, 20]
          },
          demail: {
            email: true
          },
          drepass: {
            required: true,
            equalTo: "#dpass"
          }
        }
      });
      $('#top').load('top.html');
      $("#bdk3").click(function () {
        var dname = $("#dname").val();
        var duser = $("#duser").val();
        var demail = $("#demail").val();
        var dpass = $("#dpass").val();
        var drepass = $("#drepass").val();
//                    alert('fff');

});
    });
  </script>
</head>
<body>
  <!-- <div id="top"></div> -->
  <!-- navbar -->
  <!-- //Menuheader -->
  <!-- @extends('MenuHeader') -->

  @include('menuHeader')
  @include('SliderHeader')
  <div id="menu" class="row" style="margin: auto;">
    @include('menu')
  </div>
  <div class="container row " style="border: 1px solid #ddd; padding-left: 0px;padding-left: 0px;">
    <div class="row">
      <!-- leftMenu -->
      <div id="left" class="col-md-3">
        @include('layout.leftMenu')
      </div>
    </div>
    <!-- right -->
    <div id="content" class="col-md-9">
      <div class="mid-title product">
        <div class="titleL">Camera quan sát Analog</div>
      </div>
      <!-- boxSearch -->
      @include('index.boxsearch')

      @include('index.tabContaint')

    </div>
  </div>

</div>
<div id="phantrang" class="col-md-12"> <ul class="pagination navbar-right" style="margin-right: 20px"></ul>
</div>
<!-- <div class="tintuc"  style="float: left;"> -->
  <!-- @include('index.news') -->
  <!-- </div> -->
</div>
</div>
<div class="quangcao row">
  <div class="col-xs-12 hidden-xs hidden-sm">
    <div class="text-header text-danger">Camera các hãng</div>
    <div id="jssor_2" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1200%; height: 100px; overflow: hidden; visibility: hidden;">
      <!-- Loading Screen -->

      <div class="flex-viewport" data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 100%; height: 73px; overflow: hidden;">
        <div>
          <li data-u="image" style="width: 122px; float: left; display: block;"> <a href="#"><img alt="Camera Vantech Giá Rẻ" src="quang-cao/camera-vantech.jpg"></a> </li>
        </div>
        <div style="display: none;">
          <li style="width: 122px; float: left; display: block;"> <a href="#camera-benco"><img alt="Camera Benco Giá Rẻ" src="quang-cao/camera-hang-benco1.jpg"></a> </li>

        </div>
        <div style="display: none;">
          <li style="width: 122px; float: left; display: block;"> <a href="#camera-dahua"><img alt="Camera Dahua Đài Loan" src="quang-cao/camera-dahua.jpg"></a> </li>
        </div>
        <div style="display: none;">
          <li style="width: 122px; float: left; display: block;"> <a href="#camera-questek"><img alt="Camera Questek Việt Nam" src="quang-cao/camera-questek.jpg"></a> </li>
        </div>
        <div style="display: none;">
         <li style="width: 122px; float: left; display: block;"> <a href="#camera-hikvision"><img alt="Camera HIKVISION" src="quang-cao/camera-hikvision-dai-loan.jpg"></a> </li>
       </div>
       <div style="display: none;">
        <li style="width: 122px; float: left; display: block;"> <a href="#camera-spyeye"><img alt="Camera Spyeye" src="quang-cao/camera-spyeye-gia-re1.jpg"></a> </li>
      </div>
      <div style="display: none;">
        <li style="width: 122px; float: left; display: block;"> <a href="#camera-avtech"><img alt="Camera AVTECH ĐÀI LOAN" src="quang-cao/camera-samsung.jpg"></a> </li>
      </div>
      <div style="display: none;">
        <li style="width: 122px; float: left; display: block;"> <a href="#camera-kce"><img alt="Camera KCE HÀN QUỐC" src="quang-cao/camera-KCE-han-quoc.jpg"></a> </li>
      </div>
      <div style="display: none;">
        <li style="width: 122px; float: left; display: block;"> <a href="#camera-kce"><img alt="Camera SAMSUNG HÀN QUỐC" src="quang-cao/camera-hang-samsung.jpg"></a> </li>
      </div>
    </div>

    <!-- Bullet Navigator -->
    <!-- Arrow Navigator -->

  </div>
  <!-- #endregion Jssor Slider End -->

</div>
<div class="col-xs-12 hidden-xs hidden-sm">
  <div class="text-header">Chấp nhận thanh toán</div>
  <img style="width:100%;margin:10px 0;" alt="Chấp nhận thanh toán" src="quang-cao/payments.png"> </div>
</div>
<div class="col-xs-12">
  <div class="row">
    <div class="col-xs-12 col-md-4 col-lg-3">
      <div class="social-claim">
        <div class="claim_header">Cam kết</div>
        <div class="claim">Sản phẩm hàng hóa chính hãng, đa dạng, phong phú</div>
        <div class="claim">Luôn luôn giá rẻ và khuyến mại không ngừng</div>
        <div class="claim">Dịch vụ chăm sóc khách hàng uy tín, tận tâm</div>
      </div>
    </div>
    <div class="col-xs-12 col-md-4 col-lg-3">
      <div class="social-claim2">
        <div class="claim_header">Hỗ trợ khách hàng</div>
        <ul>
          <li><a href="#xem-camera-giam-sat-qua-dien-thoai">Xem camera giám sát qua điện thoại</a></li>
          <li><a href="#xem-camera-quan-sat-qua-may-tinh">Xem camera quan sát qua máy tính</a></li>
          <li><a href="#download-tai-lieu">Download tài liệu</a></li>
          <li><a href="#hd-cai-dat-phan-mem-teamviewer">HD cài đặt phần mềm Teamviewer</a></li>
        </ul>
      </div>
    </div>
    <div class="col-xs-12 col-md-4 col-lg-3">
      <div class="social-claim2">
        <div class="claim_header">Thông tin công ty</div>
        <ul>
          <li><a href="#gioi-thieu">Giới thiệu</a></li>
          <li><a href="#tuyen-dung">Tuyển dụng</a></li>
          <li><a href="#chinh-sach">Chính sách</a></li>
        </ul>
        <div id="social_us">
          <div class="social_us_header">Kết nối với chúng tôi</div>
          <div id="f_social"> <a target="_blank" rel="nofollow" href="#"> <img src="quang-cao/f_fb.png"> </a> <a target="_blank" rel="nofollow" href=""> <img src="quang-cao/f_gplus.png"> </a> <a target="_blank" rel="nofollow" href=""> <img src="quang-cao/f_yt.png"> </a> </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-md-4 col-lg-3 hidden-md">
      <div class="social-claim2">
        <div class="claim_header">Tổng đài trợ giúp</div>
        <div style="margin:10px;">
          <table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
            <tbody>
              <tr>
                <td><img alt="" src="quang-cao/tro-giup.png" style="width: 68px; height: 81px;"></td>
                <td style="vertical-align: middle;"><p><span style="color:#333333;"><span style="font-size:14px;">Tư vấn bán hàng</span></span></p>
                  <p><span style="color:#ba0000;"><span style="font-size:20px;"><strong>0163 263 5825</strong></span></span></p></td>
                </tr>
                <tr>
                  <td colspan="2"><hr>
                    <span style="color:#555555;"><span style="font-size:13px;"><img alt="" src="quang-cao/life_saver.png">&nbsp; Chăm sóc và hỗ trợ sau bán hàng</span></span></td>
                  </tr>
                  <tr>
                    <td colspan="2" style="text-align: center;"><span style="color:#B22222;"><strong><span style="font-size:16px;">(04)6328 2964</span></strong></span></td>
                  </tr>
                  <tr>
                    <td colspan="2"><span style="font-size:13px;"><span style="color:#555555;"><img alt="" src="quang-cao/mailer.png">&nbsp; nguyenwipwa.@gmail.com</span></span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <footer></footer> -->
  @include('layout.footer')
  <div class="modal fade" id="dangnhap" role="dialog" style="z-index: 99999;">
    <div class="modal-dialog" >

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <div id="title" class="panle-title text-center" > <span class="textbold"> Đăng nhập</span> </div>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" id="formdn">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Tên đăng nhập</label>
              <input type="text" required class="form-control" id="usrname" name="userdn" placeholder="Tên đăng nhập">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Mật khẩu</label>
              <input type="text" class="form-control" id="psw" name="passdn" placeholder="Mật khẩu">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Ghi nhớ</label>
            </div>
            <button type="button" onclick="dangnhap(userdn.value, passdn.value)" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Đăng nhập</button>
          </form>
        </div>
        <div class="modal-footer">
          <button id="thoatdn" type="button" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove btnthoat"></span> Cancel</button>
          <p><a href="#"  data-toggle="modal" data-target="#dangki" onclick="$('#thoatdn').click()">Đăng kí</a></p>
          <p> <a href="#">Quên mật khẩu</a></p>
        </div>
      </div>

    </div>
  </div> 
  <div id="dangki" class="modal fade" role="dialog" style="z-index: 999999;">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content" style="width: 500px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <div id="title" class="panle-title text-center" > <span class="textbold"> Đăng kí</span> </div>
        </div>
        <div class="modal-body">
          <div>
            <form id="formdk" action="#" method="post" accept-charset="utf-8">
              <div class="themsp" style="width: 100%;">
                <div id=""> <label class="lbthem"> Họ tên</label> <input id="namedk" type="text" name="dname" value="" placeholder="Họ tên" class="input-sm form-control" required>
                </div>
                <div > <label class="lbthem"> Tên đăng nhập</label> <input id="duser"  type="text" name="duser" value="" placeholder="Tên đăng nhập" class="input-sm form-control" required>
                </div>
                <div id=""> <label class="lbthem"> Email</label> <input id="demail" type="text" name="demail" value="" placeholder="Email" class="input-sm form-control" required>
                </div>
                <div id=""> <label class="lbthem"> Mật khẩu</label> <input id="dpass" type="password" name="dpass" value="" placeholder="Mật khẩu" class="input-sm form-control" required>
                </div>
                <div id=""> <label class="lbthem"> Nhập lại mật khẩu</label> <input id="drepass"  type="password" name="drepass" value="" placeholder="Nhập lại mật khẩu" class="input-sm form-control" required>
                </div>
              </div>
              <div style="margin-left: 45%"> <input type="button" onclick="dangki(dname.value,duser.value,demail.value,dpass.value);" id="bdk" class="btn btn-info" value="Cập nhật">  <button type="button" class="btn btn-info btnthoat" data-dismiss="modal">Thoát</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="js/trangchu.js" type="text/javascript"></script>
  <script type="text/javascript">

  </script>
  <script type="text/javascript">
//load danh sach
var tong=0;
$(document).ready(function() {
  var t2 = 1;
  tong= parseInt(danhsach.length/12);
  if((danhsach.length%12)!=0){
    tong = tong+1;
  }
// alert(tong);
//phan trang:
var t1 = '<li class="page-item"><a class="page-link" onclick="nextPage('+Number(t2)+')" href="javascript:void(0)" aria-label="Previous"><span aria-hidden="true">&laquo;</span><span class="sr-only">Previous</span></a></li>'
for(var i=1; i<= tong; i++){
  t1+='<li class="li'+i+'"><a href="javascript:void(0)" onclick="phantrang('+i+')">'+i+'</a></li>';
  // $('.pagination').append('<li><a href="javascript:void(0)" onclick="phantrang('+i+')">'+i+'</a></li>');
}
t1+='<li class="page-item"><a class="page-link"href="javascript:void(0)" onclick="nextPage('+Number(1+t2)+')" aria-label="Next"><span aria-hidden="true">&raquo;</span><span class="sr-only">Next</span></a></li>'
$('.pagination').html(t1);
$('.li1').addClass('active');
lo(danhsach, 12, 0);
});

function phantrang (e) {
  $('.pagination li').removeClass('active');
  $('.li'+e).addClass('active');
  var z = parseInt((e-1)*12);
  lo(danhsach,12,z);
  t2 = e;
}
function nextPage (e) {
  var a = Number(e);
  phantrang(a);
}
function prevPage (e) {
  var a = Number(e-1);
  if(a>1){
    phantrang(a);
  }
}
</script>
<div class="progress hidden" style="width: 500px; height: 40px; position: fixed;top: 100px; margin-left: 40%; z-index: 999;">
  <div class="progress-bar progress-bar-striped active" role="progressbar"
  style="width:100%; font-size: 19px;">
  Đang cập nhật
</div>

</div>

<script type="text/javascript">
  jQuery(document).ready(function($){   
    if($(".btn-top").length > 0){
      $(window).scroll(function () {
        var e = $(window).scrollTop();
        if (e > 300) {
          $(".btn-top").show()
        } else {
          $(".btn-top").hide()
        }
      });
      $(".btn-top").click(function () {
        $('body,html').animate({
          scrollTop: 0
        })
      })
    }   
  });
</script>
<script type='text/javascript'>window._sbzq||function(e){e._sbzq=[];var t=e._sbzq;t.push(["_setAccount",50848]);var n=e.location.protocol=="https:"?"https:":"http:";var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//static.subiz.com/public/js/loader.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)}(window);</script>
</body>
</html>
