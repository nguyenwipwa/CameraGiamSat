  <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
    @include('admin.link')
    <script src=" {{asset('public/admin/js/jquery.js')}}" type="text/javascript"></script>
     <script src=" {{asset('public/admin/js/danhsachthanhvien.js')}}"></script>
   <script src=" {{asset('public/admin/js/functionthanhvien.js')}}"></script>
    <script src=" {{asset('public/admin/js/jquery.quicksearch.js')}}"></script>
    <link rel="stylesheet" type="text/css" href=" {{asset('public/admin/css/thanhvien.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{asset('public/admin/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href=" {{asset('public/admin/css/bootstrap.min.css')}}">
</head>
<body>
	<body class="skin-blue sidebar-mini">
    <div class="wrapper">
      <div id="top">
        @include('admin.layout.top')
      </div>
      <!-- Left side column. contains the logo and sidebar -->
      <div id="left">
          @include('admin.layout.left')
      </div>
      <!-- Content Wrapper. Contains page content -->
      <div id="content">
        <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Quản lí thành viên

          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Danh sách thành viên</h3>

                  <div class="col-sm-offset-8 col-sm-4" style="margin-top:2%;padding-right:0px">

                  <input type="search" id="search" class="form-control" placeholder="Nhập từ cần tìm...">
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body" style="min-height:400px">
                  <table id="example1" class="table table-bordered table-striped" style="width: 100%;">

                  </table>
                </div><!-- /.box-body -->

              </div><!-- /.box -->
            </div><!-- /.col -->
            <div  class="col-sm-offset-5 col-sm-4" style="margin-top:2%;margin-bottom:1%" id="phantrang">

                </div>

          </div><!-- /.row -->
        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->



      </div>
      <div id="bottom">   @include('admin.layout.bottom')</div>
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" style="width:50%">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
                    <h4 class="modal-title">Thông tin thành viên </h4>
        </div>
        <div class="modal-body" style="min-height:250px">
        <div style="position:absolute">
        <img src="" width="150" height="150" style="margin-left:3%" id="add">
        <span style="position:absolute;margin-left:24%">Ảnh đại diện</span>
        </div>
			<div class="col-sm-9" style="float:right">
            <div  class="col-sm-12">
            	<div class="col-sm-5" >

                <label> Mã thành viên:</label>
                </div>
                <div class="col-sm-7">
                <span id="mtv"></span>
                </div>
               </div>
                <div  class="col-sm-12">
            	<div class="col-sm-5" >

                <label> Tên thành viên:</label>
                </div>
                <div class="col-sm-7">
                <span id="ttv"></span>
                </div>
               </div>
               <div  class="col-sm-12">
            	<div class="col-sm-5" >

                <label> Tên tài khoản:</label>
                </div>
                <div class="col-sm-7">
                <span id="ttk"></span>
                </div>
               </div>
               <div  class="col-sm-12">
            	<div class="col-sm-5" >

                <label > Số điện thoại:</label>
                </div>
                <div class="col-sm-7">
                <span id="sdt"></span>
                </div>
               </div>
               <div  class="col-sm-12">
            	<div class="col-sm-5" >

                <label> Ngày sinh:</label>
                </div>
                <div class="col-sm-7">
               <span id="ns"></span>
                </div>
               </div>
               <div  class="col-sm-12">
            	<div class="col-sm-5" >

                <label> Quê quán:</label>
                </div>
                <div class="col-sm-7">
                <span id="qq"></span>
                </div>
               </div>
               <div  class="col-sm-12">
            	<div class="col-sm-5" >

                <label> Giới tính:</label>
                </div>
                <div class="col-sm-7">
                <span id="gt"></span>
                </div>
               </div>
               <div  class="col-sm-12">
            	<div class="col-sm-5" >

                <label> Chức vụ:</label>
                </div>
                <div class="col-sm-7">
               <span id="chucvu"></span>
                </div>
               </div>
               <div  class="col-sm-12">
            	<div class="col-sm-5" >

                <label> Ngày khởi tạo:</label>
                </div>
                <div class="col-sm-7">
                <span id="nkt"></span>
                </div>
               </div>

                </div>


        </div>
        <div class="modal-footer">


          <button type="button" class="btn btn-default" data-dismiss="modal"  >Thoát</button>

        </div>
      </div>

    </div>
  </div>




    <!-- jQuery 2.1.4 -->
    <!-- Bootstrap 3.3.2 JS -->

     <!--   <script type="text/javascript">
      $('#top').load('top.html');
      $('#left').load('left.html');
      $('#bottom').load('bottom.html');

    </script> -->

</body>
</html>