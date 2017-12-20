  <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
    <?php echo $__env->make('admin.link', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
   <script src="<?php echo e(asset('public/admin/js/danhsachspkm.js')); ?>" type="text/javascript"></script>
   <script src="<?php echo e(asset('public/admin/js/functionspkm.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('public/admin/js/jquery.quicksearch.js')); ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/admin/css/bootstrap.css')); ?>">
     <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/admin/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/admin/css/danhsachsanphamkm.css')); ?>">
</head>
<body>
	<body class="skin-blue sidebar-mini">
    <div class="wrapper">
      <div id="top">
        <?php echo $__env->make('admin.layout.top', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </div>
      <!-- Left side column. contains the logo and sidebar -->
      <div id="left">
        <?php echo $__env->make('admin.layout.left', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </div>
      <!-- Content Wrapper. Contains page content -->
      <div id="content">
        <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Quản lý sản phẩm
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
         <div class="modal fade" id="add" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Thêm</h4>
        </div>
        <div class="modal-body">
          		<div style="padding-bottom:3%;border-bottom:1px solid #CCC">

                <img src="" width="200" height="208" id="timg" style="border:1px solid #CCC">
                <img src="" style="position:absolute;left:23%;border:none" id="timgsale" class="img-circle" >
                <div style="width:60%;float:right">
                		<div class="form-group">
                        <label>Chọn sự kiện</label>
                        <select id="tskkm" class="form-control">
                        <script> listsk("tskkm") </script>
                  </select>
                        </div>
                        <div >
                         <div class="col-sm-6" style="padding-left:0px;">
                    <label>Khuyến mãi</label>
                    <div class="input-group">
                     <input type="number" max="100" min="0" name="" id="tkm"  class="form-control" > <span class="input-group-addon" style="background:#CCC">%</span></div>
                </div>
                 <div class="col-sm-6" style="padding-right:0px;">
                    <label>Số lượng</label>
                    <div class="input-group">
                     <input type="number"  name="" id="tsl"  class="form-control" min="1" > </div>
                </div>
                </div>
                        <div class="col-sm-6" style="padding-left:0px;">
                   <label>Thời gian BĐ</label>
                    <input type="date"  name="" id="ttimebd"  class="form-control">


                 </div>
                  <div class="col-sm-6" style="padding-right:0px;">
                   <label>Thời gian KT</label>

                    <input type="date"  name="" id="ttimekt" class="form-control" >

                 </div>

                </div>
                </div>

                <form>
                 <div class="form-group">
                  <label>Chọn sản phẩm</label>
                  <select id="tchonsp" class="form-control">
                  	<script> listchon("tchonsp",danhsach) </script>
                  </select>
                  </div>
                  <div class="form-group">
                  <label>Mã ID</label>
                   <input type="text"name="" id="tid" style="width:100%" class="form-control" disabled="disabled">
                 </div>
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                   <input type="text"  name="" id="ttsp" style="width:100%" class="form-control" disabled="disabled">
               </div>
                  <div class="form-group">
                 <label>Giá</label>
                 <div class="input-group">
                   <input type="text"  name="" id="tgia" style="width:100%" class="form-control" disabled="disabled">
                   <span class="input-group-addon" style="background:#CCC">VNĐ</span>
                   </div>
                   </div>

                  <script>

				  $(document).ready(function() {
                    $("#tchonsp").change(function(){
						var id = $(this).val();
						for(i=0;i<danhsach.length;i++){
							if(id ==danhsach[i].id){
								$("#timg").attr("src",danhsach[i].img);
							}
						}
						});
						$("#tskkm").change(function(){
						var tensk = $(this).val();
						for(i=0;i<dssk.length;i++){
							if(tensk=="---")$("#timgsale").attr("src","");
							if(tensk ==dssk[i].tensk){
								$("#timgsale").attr("src",dssk[i].icon);
							}
						}

					//$("img").fadeIn("fast").attr('src',tmppath);
  });
                });
                  </script>

                </form>


        </div>
        <div class="modal-footer">
      		<button class="btn " type="button" onClick="them()">Thêm sản phẩm</button>
          <button type="button" class="btn " data-dismiss="modal">Thoát</button>
        </div>
      </div>

    </div>
  </div>

         <div class="modal fade" id="sua" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cập nhật</h4>
        </div>
        <div class="modal-body">
         <div style="padding-bottom:3%;border-bottom:1px solid #CCC">

                <img src="" width="200" height="208" id="simg" style="border:1px solid #CCC">
                <img src="" style="position:absolute;left:23%;border:none" id="simgsale" class="img-circle" >
                <div style="width:60%;float:right">
                		<div class="form-group">
                        <label>Chọn sự kiện</label>
                        <select id="sskkm" class="form-control">
                        <script> listsk("sskkm") </script>
                  </select>
                        </div>
                        <div >
                         <div class="col-sm-6" style="padding-left:0px;">
                    <label>Khuyến mãi</label>
                    <div class="input-group">
                     <input type="number" max="100" min="0" name="" id="skm"  class="form-control" > <span class="input-group-addon" style="background:#CCC">%</span></div>
                </div>
                 <div class="col-sm-6" style="padding-right:0px;">
                    <label>Số lượng</label>
                    <div class="input-group">
                     <input type="number"  name="" id="ssl"  class="form-control" min="1" > </div>
                </div>
                </div>
                        <div class="col-sm-6" style="padding-left:0px;">
                   <label>Thời gian BĐ</label>
                    <input type="date"  name="" id="stimebd"  class="form-control">


                 </div>
                  <div class="col-sm-6" style="padding-right:0px;">
                   <label>Thời gian KT</label>

                    <input type="date"  name="" id="stimekt" class="form-control" >

                 </div>

                </div>
                </div>

                <form>

                  <div class="form-group">
                  <label>Mã ID</label>
                   <input type="text"name="" id="sid" style="width:100%" class="form-control" disabled="disabled">
                 </div>
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                   <input type="text"  name="" id="stsp" style="width:100%" class="form-control" disabled="disabled">
               </div>
                  <div class="form-group">
                 <label>Giá</label>
                 <div class="input-group">
                   <input type="text"  name="" id="sgia" style="width:100%" class="form-control" disabled="disabled">
                   <span class="input-group-addon" style="background:#CCC">VNĐ</span>
                   </div>
                   </div>

                  <script>

				  $(document).ready(function() {
                    $("#schonsp").change(function(){
						var id = $(this).val();
						for(i=0;i<danhsach.length;i++){
							if(id ==danhsach[i].id){
								$("#simg").attr("src",danhsach[i].img);
							}
						}
						});
						$("#sskkm").change(function(){
						var tensk = $(this).val();
						for(i=0;i<dssk.length;i++){
							if(tensk=="---")$("#simgsale").attr("src","");
							if(tensk ==dssk[i].tensk){
								$("#simgsale").attr("src",dssk[i].icon);
							}
						}

					//$("img").fadeIn("fast").attr('src',tmppath);
  });
                });
                  </script>

                </form>
        </div>
        <div class="modal-footer">
      		<button class="btn " type="button" onClick="capnhat()" data-dismiss="modal">Cập nhật</button>
          <button type="button" class="btn " data-dismiss="modal">Thoát</button>
        </div>
      </div>

    </div>
  </div>


          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Danh sách sản phẩm khuyến mãi</h3>
                  <div class="text-right">
                     <button class="btn btn-info" data-toggle="modal" data-target="#add"><span class="glyphicon glyphicon-plus"></span> Thêm</button>
                  </div>
                  <div class="col-sm-offset-8 col-sm-4" style="margin-top:2%;padding-right:0px">

                  <input type="search" id="search" class="form-control" placeholder="Nhập từ cần tìm...">
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body" style="min-height:400px">
                  <table id="example1" class="table table-bordered table-striped" style="width: 100%;">

                  </table>
                </div><!-- /.box-body -->
                <div  class="col-sm-offset-5 col-sm-6 btn-group" style="margin-top:2%" id="phantrang">

                </div>
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->



      </div>
      <div id="bottom">
        <?php echo $__env->make('admin.layout.bottom', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </div>
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
    <!-- jQuery 2.1.4 -->
    <!-- Bootstrap 3.3.2 JS -->

    <!--    <script type="text/javascript">
      $('#top').load('top.html');
      $('#left').load('left.html');
      $('#bottom').load('bottom.html');

    </script> -->

</body>
</html>