<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
 @include('admin.link')
    <script src="{{asset('public/admin/js/jQuery-2.1.4.min.js')}}" type="text/javascript"></script>

   <link href="{{asset('public/admin/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('public/admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

       <script src="{{asset('public/admin/js/danhsachmenu.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/js/functionmenu.js')}}" type="text/javascript"></script>
      <script src="{{asset('public/admin/js/jquery.quicksearch.js')}}" type="text/javascript"></script>
        <link href="{{asset('public/admin/css/danhsachmenu.css')}}" rel="stylesheet" type="text/css" />
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
            Quản lí menu
            <small>Tất cả danh sách</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
        <div class="modal fade" id="add" role="dialog">
        	<div class="modal-dialog">
            	<div class="modal-content">
                	<div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Thêm</h3>
                    </div>
                    <div class="modal-body">
                    	 <form>
                  <div class="form-group">
                    <label>Danh mục sản phẩm</label>
                    <input list="tdmsp" class="form-control" id="tvldmsp">
                    <datalist id="tdmsp">
                    <script> listdanhmuc("tdmsp",danhmucmenu) </script>
                    </datalist>
                  </div>
                  <div class="form-group">
                    <label>Danh mục</label>
                    <input list="tdm" class="form-control" name="" id="tvldm">
                    <datalist id="tdm">

                    </datalist>
                  </div>
                  <div class="form-group">
                    <label>Loại</label>
                    <input type="text" id="tloai" class="form-control">
                  </div>
                  <div style="width:15%;" >

                    <p ><input type="checkbox" id="tcheck"> Hiển Thị</p>
                  </div>

                </form>
                    </div>
                    <div class="modal-footer">
                    	<div class="form-group">
                    <p class="text-right"><button class="btn " onClick="them()"  type="button">Thêm</button>
                    						<button type="button" class="btn " data-dismiss="modal">Thoát</button>
                    				</p>
                  		</div>
                    </div>
                </div>
            </div>
        </div>

          <div class="modal fade" id="xoa" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Xóa</h4>
        </div>
        <div class="modal-body">

                <label>Chọn menu</label>
                <select id="chonmenu" class="form-control">
                <script> listmenu("chonmenu",danhmucmenu) </script>
                </select>

                <select id="loaimenu" class="form-control">
                <script> listmenu("loaimenu",danhmucmn1) </script>
                </select>


        </div>
        <div class="modal-footer">
      		<button class="btn " onClick="xoamenu()" type="button">Xóa</button>
          <button type="button" class="btn " data-dismiss="modal">Thoát</button>
        </div>
      </div>

    </div>
  </div>



          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Danh sách menu</h3><br/><br>

                  <div class="text-right ">
                     <button class="btn btn-info" data-toggle="modal" data-target="#add" onClick="capnhatmenu()"><span class="glyphicon glyphicon-plus"></span> Thêm</button>
                      <button class="btn btn-success" data-toggle="modal" data-target="#suamenu" onClick="setfirst()"><span class="glyphicon glyphicon-edit"></span>Sửa</button>
                      <button class="btn btn-danger" data-toggle="modal" data-target="#xoa" onClick="capnhatmenu()"><span class="glyphicon glyphicon-remove"></span> Xóa</button>
                  </div>
                  <div class="col-sm-offset-8 col-sm-4" style="margin-top:2%;padding-right: 0px">

                  <input type="search" id="search" placeholder="Nhập từ cần tìm..." class="form-control" >
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
                  <div class="form-group">
                    <label>Danh mục sản phẩm</label>
                    <input list="sdmsp" class="form-control" id="svldmsp" placeholder="Nhập tên mới">
                    <datalist id="sdmsp">
                    <script> listdanhmuc("sdmsp",danhmucmenu) </script>
                    </datalist>
                  </div>
                  <div class="form-group">
                    <label>Danh mục</label>
                    <input list="sdm" class="form-control" name="" id="svldm" placeholder="Nhập tên mới">
                    <datalist id="sdm">

                    </datalist>
                  </div>
                  <div class="form-group">
                    <label>Loại</label>
                    <input type="text" id="sloai" class="form-control">
                  </div>
                  <div style="width:10%;" >

                    <p ><input type="checkbox" id="scheck"> Hiển Thị</p>
                  </div>

                </form>
        </div>
        <div class="modal-footer">

                  <input type='hidden' id='edit' value=''>
                    <p class="text-right"><button class="btn " onClick="capnhat()" data-dismiss="modal" type="button">Cập nhật</button>
                    					<button class="btn " data-dismiss="modal" type="button">Thoát</button></p>

        </div>
      </div>

    </div>
  </div>

                   <div class="modal fade" id="suamenu" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cập nhật menu</h4>
        </div>
        <div class="modal-body">
        		<label>Chọn menu</label>
         		<select id="schonmenu" class="form-control">
                <script> listsuamenu() </script>
                </select>
                <input type="hidden" id="indexschon">
               	<input type="text" class="form-control" id="schon" placeholder="Nhập tên mới">
                <label>Loại menu</label>
                <select id="sloaimenu" class="form-control">
                <script> listsualoaimenu() </script>
                </select>
                 <input type="hidden" id="indexsloaii">
                  <input type="hidden" id="indexloaij">
                <input type="text" class="form-control" id="sloai1" placeholder="Nhập tên mới">
        </div>
        <div class="modal-footer">

                  <input type='hidden' id='edit' value=''>
                    <p class="text-right"><button class="btn " onClick="updatmenu()" type="button">Cập nhật menu</button>
                    					<button class="btn " data-dismiss="modal" type="button">Thoát</button></p>

        </div>
      </div>

    </div>
  </div>

                <div class="box-body" style="min-height:400px">
                  <table id="example1" class="table table-bordered table-striped" style="width: 100%;">
                   <tbody >

                   </tbody>
                  </table>
                </div><!-- /.box-body --><br>

                <div  class="col-sm-offset-5 col-sm-6" style="margin-top:2%;" id="phantrang">

                </div>
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->

      </div>
      <div id="bottom">
         @include('admin.layout.bottom')
      </div>
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
    <!-- jQuery 2.1.4 -->
    <!-- Bootstrap 3.3.2 JS -->

  <!--      <script type="text/javascript">

      $('#top').load('top.html');
      $('#left').load('left.html');
      $('#bottom').load('bottom.html');

    </script> -->

</body>
</html>