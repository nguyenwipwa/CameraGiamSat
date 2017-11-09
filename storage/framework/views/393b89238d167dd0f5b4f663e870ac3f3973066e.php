 <link rel="stylesheet" href="<?php echo e(asset('public/css/modal.css')); ?>">

 
 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="margin-right: 100px"> <span class="sr-only">Logo</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#">Camera P3T</a> </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-left">
          <li class="active"><a href="#home"><span class="glyphicon glyphicon-home"></span></a></li>            
          <li><a href="#about"><span class="glyphicon glyphicon-bookmark"></span> Giới thiệu</a></li>
          <li><a href="#contact"><span class="glyphicon glyphicon-envelope"></span> Liên hệ</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right" style="margin-right: 100px;">
          <li class="dropdown"><a href="#cart" data-toggle="dropdown" class="dropdown-toggle" ><span class="glyphicon glyphicon-shopping-cart"> <span id="badgegh" class="badge">0</span></span></a>
            <div class="dropdown-menu" style="border: 2px solid red;  margin-right: -260px; ">
              <div style="overflow: auto; max-height: 500px; width: 500px;">
                <table class="table table-hover table-bordered" style="background: white; ">
                 <tr style="vertical-align: middle; text-align: center; font-weight:bold;"><td style="width: 17%;">Sản phẩm</td> <td style="width: 43%;"> Tên sản phẩm </td> <td style="width: 14%;"> Số lượng </td><td style="width: 23%;"> Thành tiền(VNĐ) </td><td style="width: 30%;"></td></tr>
                 <tbody id="giohang" class="center" style="vertical-align: middle;">
                 </tbody>
               </table>
             </div>
             <div style="float: right; clear: bold;">
               <label for="" style="width: 300px; font-size: 21px; font-weight: bold; color: red;" ><span style="color: black;">Tổng tiền: </span> <span class="pricegh"> </span></label>
               <button onclick="window.open('giohang.html')" type="button" class=" btn btn-primary">Thanh toán</button>
             </div>
           </div>
         </li>
         <div class="login1 hidden" style="display: inline-block; color: white; font-weight: bold; margin-right: 25px">
          <li>Xin chào: <span class="namedn" style="color: #F60;"> User </span> </li>
          <li><a style="text-decoration: none; color: blue;" href="#" onclick="logout()"> Thoát </a></li>
        </div>
        <li class="log"><a href="#" data-toggle="modal" data-target="#dangnhap"><span class="glyphicon glyphicon-user"> </span>  Đăng nhập </a></li>
        <li class="log"><a href="#" data-toggle="modal" data-target="#dangki"><span class="glyphicon glyphicon-log-in" style="margin-right: 4px;"></span>  Đăng ký</a></li>
        <li class="log"><a href="admin/" > Admin</a></li>
      </ul>
      <form class="navbar-form navbar-right search">
        <input type="search" placeholder="Nhập từ cần tìm...">
      </form>
    </div>
  </div>
</nav>

<style type="text/css">
  .navbar .navbar-default .navbar-fixed-top{
    background: red;
  }

</style>

