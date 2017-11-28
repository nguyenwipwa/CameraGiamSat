  <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
  <?php echo $__env->make('admin.link', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <script src="<?php echo e(asset('public/admin/ckeditor/ckeditor.js')); ?>"></script>
    <script src=" <?php echo e(asset('public/admin/js/danhsachsanpham.js')); ?>"></script>
    <script src=" <?php echo e(asset('public/admin/js/functionsp.js')); ?>"></script>
    <script src="<?php echo e(asset('public/admin/js/jquery.quicksearch.js')); ?>"></script>
    <link rel="stylesheet" type="text/css" href=" <?php echo e(asset('public/admin/css/danhsachsanpham.css')); ?>">
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
          <h4 class="modal-title">Thêm sản phẩm</h4>
        </div>
        <div class="modal-body">
           <form>

                  <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" class="form-control" name="" id="ttsp">
                  </div>
                  <div class="form-group">
                    <label>Loại sản phẩm</label>
                    <input type="text" class="form-control" name="" id="tlsp">
                  </div>
                  <div class="form-group">
                    <label>Thuộc danh mục</label>
                    <select id="ttdm" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                      <option selected="selected"></option>
                    <option value="CAMERA IP">Camera IP</option>
                      <option value="CAMERA ANALOG">Camera Analog</option>
                      <option value="ĐẦU GHI IP">Đầu ghi IP</option>
                      <option value="ĐẦU GHI ANALOG">Đầu ghi Analog</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Giá sản phẩm</label>
                    <input type="number" class="form-control" name="" id="tgsp">
                  </div>


                    <label for="texampleInputFile">Hình ảnh</label>
                    <div class="input-group" style="width:100%">
                    <input type="file" id="texampleInputFile" class="hidden" accept="image/*">

                    <input type="text" id="thinhanh" name="thinhanh" style="width:85%" class="form-control">
                    <button type="button" onClick="chon()" class="btn btn-primary add-btn-group">Chọn file</button>
                    </div>

                    <div class="form-group">
                    <label >Chi tiết</label>
                    <textarea id="tchitiet" name="tchitiet" cols="80" rows="10" style="background:#999"></textarea>
                    <script> CKEDITOR.replace("tchitiet"); </script>
                  </div>
                  <script>
                  function chon(){
					  $("#texampleInputFile").click();
				  }
				  $(document).ready(function() {
                    $("#texampleInputFile").change(function(event){
						var tmppath = URL.createObjectURL(event.target.files[0]);
						$("#thinhanh").val(tmppath);
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

          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Danh sách sản phẩm</h3>
                  <div class="text-right">
                     <button  class="btn btn-info" data-toggle="modal" data-target="#add" ><span class="glyphicon glyphicon-plus"></span> Thêm</button>
                  </div>
                  <div class="col-sm-offset-8 col-sm-4" style="margin-top:2%;padding-right:0px">

                  <input type="search" id="search" class="form-control" placeholder="Nhập từ cần tìm...	" >
                  </div>
                </div><!-- /.box-header -->

                 <div class="modal fade" id="sua" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cập nhật</h4>
        </div>
        <div class="modal-body">

               <form>


                    <input type="hidden"   id="sid">

                  <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <input type="text" class="form-control"  id="stsp">
                  </div>
                  <div class="form-group">
                    <label>Loại sản phẩm</label>
                    <input type="text" class="form-control"  id="slsp">
                  </div>
                  <div class="form-group">
                    <label>Thuộc danh mục</label>
                    <select id="stdm" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                      <option selected="selected"></option>
                      <option value="CAMERA IP">Camera IP</option>
                      <option value="CAMERA ANALOG">Camera Analog</option>
                      <option value="ĐẦU GHI IP">Đầu ghi IP</option>
                      <option value="ĐẦU GHI ANALOG">Đầu ghi Analog</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Giá sản phẩm</label>
                    <input type="number" class="form-control" name="" id="sgsp">
                  </div>

                    <label for="sexampleInputFile">Hình ảnh</label>
                    <div class="input-group" style="width:100%">
                    <input type="file" id="sexampleInputFile" class="hidden" accept="image/*">
                    <input type="text" id="shinhanh" name="thinhanh" style="width:85%" class="form-control">
                    <button type="button" class="btn btn-primary add-btn-group" onClick="schon()">Chọn file</button>
                  </div>
                   <div class="form-group">
                    <label >Chi tiết</label>
                    <textarea id="schitiet" name="schitiet" cols="80" rows="10" style="background:#999"></textarea>
                    <script> CKEDITOR.replace("schitiet"); </script>
                  </div>
                  <script>
                  function schon(){
					  $("#sexampleInputFile").click();
				  }
				  $(document).ready(function() {
                    $("#sexampleInputFile").change(function(event){
						var tmppath = URL.createObjectURL(event.target.files[0]);
						$("#shinhanh").val(tmppath);
					//$("img").fadeIn("fast").attr('src',tmppath);
  });
                });
                  </script>

                </form>


        </div>
        <div class="modal-footer">
      		<button class="btn" type="button" onClick="capnhat()"  data-dismiss="modal">Cập nhật</button>
          <button type="button" class="btn " data-dismiss="modal">Thoát</button>
        </div>
      </div>

    </div>
  </div>
             <div class="modal fade" id="view" role="dialog" >
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="tieudesp"></h4>
        </div>
        <div class="modal-body">

          <div style="border-bottom:1px solid #CCC;padding-bottom:3%"><img id="imgview" src="" width="150" height="150" style="width:35%;margin:auto">
           <table class="table table-condensed" style="width:60%;float:right">
          	<tbody>
            <tr>
            <td><label>Mã sản phẩm</label></td>
            <td><span id="msp"></span></td>
            </tr>
            <tr>
            <td><label>Giá</label></td>
            <td><span id="giasp"></span></td>
            </tr>
            <tr>
            <td><label>Loại</label></td>
            <td><span id="loaisp"></span></td>
            </tr>
            <tr>
            <td><label>Thuộc danh mục</label></td>
            <td><span id="tdm"></span></td>
            </tr>

            </tbody>
          </table></div>
          <label>Thông số kỷ thuật</label>
          <div id="chitiet" style="overflow:scroll;height:300px"></div>


                </div>
              <div class="modal-footer">

          <button type="button" class="btn " data-dismiss="modal">Thoát</button>
        </div>
        </div>

      </div>

    </div>



                <div class="box-body" style="min-height:400px">
                  <table id="example1" class="table table-bordered table-striped" style="width: 100%;">
                    <thead>
                      <tr>
                        <th style="width: 1%">STT</th>
                        <th style="width: 10%">ID</th>
                        <th>Tên sản phẩm</th>
                        <th >Loại sản phẩm</th>
                        <th>Thuộc danh mục</th>
                        <th >Giá sản phẩm</th>
                        <th style="width: 10%">Hình ảnh</th>

                        <th >Thao tác</th>

                      </tr>
                    </thead>
                    <tbody>

                    </tbody>
                  </table>
                </div><!-- /.box-body -->
                <div  class="col-sm-offset-5 col-sm-6" style="margin-top:2%" id="phantrang">

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


</body>
</html>