  <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>3TP Camera Store Admin</title>
        @include('admin.link')
    <link rel="stylesheet" type="text/css" href="{{asset('public/admin/css/bootstrap.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('public/admin/css/bootstrap.min.css')}}">


      <style>
    canvas {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    </style>
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
            Thống kê số lượng sản phẩm bán được
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-6">
               <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title" id="title1"></h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="chart" id="bieudo">
                    <canvas id="polarChart"></canvas>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-6">
               <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Xem thông kê</h3>

                </div>
                <div class="box-body">
                <div class="col-sm-6">
                <div class="form-group">
                <label >Năm</label>
                  <select id="nam" class="form-control" >

                  </select>
                 </div>
                 </div>
                  <div class="col-sm-6">
                <div class="form-group">
                <label >Xen theo chỉ tiêu</label>
                  <select id="chitieu" class="form-control" >
                  <option value="tongso">Số lượng</option>
                  <option value="phantram">Phần trăm (%)</option>
                  </select>
                 </div>
                 </div>

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-6">
            	<div class="box">
                	<div class="box-header with-border">
                    <h3 class="box-title" id="title2"> </h3>
                    <div class="box-tools pull-right">
                  <!--  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>-->
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                    </div>
                    <div class="box-body"style="overflow:scroll">

                    <table class="table table-bordered" id="thongke" style="width:100%;">
                    <thead>
                    <tr>
                    <th style='text-align:center;'>Loại sản phẩm</th>
                    <th style='text-align:center;'>Số lượng sản phẩm</th>
                    </tr>
                    </thead>
                    <tbody>


                    </tbody>
                    </table>
                    <div style="margin-top:1%">

                    <span id="doanhthu"></span>
                    </div>
                    </div>
                </div>
            </div>
          </div><!-- /.row -->

        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->

    <script src="{{asset('public/admin/js/tkspbanchay.js')}}"></script>
 <script src="{{asset('public/admin/js/Chart.min.js')}}"></script>
 <script src="{{asset('public/admin/js/Chart.bundle.js')}}"></script>
    <script src="{{asset('public/admin/js/jquery.quicksearch.js')}}"></script>

      </div>
      <div id="bottom">
         @include('admin.layout.bottom')
      </div>
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
    <!-- jQuery 2.1.4 -->
    <!-- Bootstrap 3.3.2 JS -->

       <!-- <script type="text/javascript">
      $('#top').load('top.html');
      $('#left').load('left.html');
      $('#bottom').load('bottom.html');

    </script> -->

</body>
</html>