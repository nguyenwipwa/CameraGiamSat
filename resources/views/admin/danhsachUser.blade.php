  <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
    @include('admin.link')
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
        <div class="col-lg-12">
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i>Trang chủ</li>
            <li>Tài khoản</li>
                      
          </ol>
        </div>
      </div>
            <div class="row mt-20">
        <div class="col-md-6">
          <div class="input-group">
            <input type="text" class="form-control"
              placeholder="Nhập từ khóa..."> <span
              class="input-group-btn">
              <button class="btn btn-info" type="button">
                <i class="fa fa-search"></i>Tìm kiếm
              </button>
              <button class="btn btn-info" type="button" data-toggle="modal" data-target="#myModal">
                <i class="fa fa-plus"></i>Thêm
              </button>
            </span>
          </div>
    </div>
    <hr>  
        <div class="row">
                  <div class="col-sm-12">
                      <section class="panel">
                          <header class="panel-heading">
                           <center>Tài khoản</center>  
                          </header>
                       <form action="" method="POST">
                          <table class="table">
                              <thead>
                              <tr>
                                
                                  <th>ID</th>
                                  <th>Tên người dùng</th>
                                  <th>Email</th>
                                  <th>Số điện thoại</th>                                  
                                  <th>Tình trạng</th>
                                  <th>Thao tác</th>
                              </tr>
                              </thead>
                              <tbody>
                                
                          @foreach($user as $u)
                              <tr>
                                  
                                  <td>{{$u->id}}</td>
                                  <td>{{$u->name}}</td>
                                  <td>{{$u->email}}</td>      
                                  <td>{{$u->phone_number}} </td>    
                                  <td>
                                    @if($u->active == 1)
                                    {{"Đã kích hoạt"}}
                                    @else
                                    {{"Chưa kích hoạt"}}
                                    @endif
                                  </td>        
                                  
                                          
                  <td>

                  <a type="submit" href= "{{route('suaUser', ['user'=> $u->id])}}" class="btn btn-success btn-edit" data-toggle="modal" data-target="#myModal1"><i class="fa fa-pencil-square-o" ></i> 
                    </a> 
                     <button type="button" class="btn btn-danger btn-delete" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o " ></i> 
                    </button> 
                  
                    </td>
                              </tr>
                          
                               @endforeach
                              </tbody>

                          </table>
                          </form>
                      </section>
                  </div>
                  
              </div>
             
                  </div>

                 
                </div>
              </div>
              
            </div>
                        
          </div> 
        </section><!-- /.content -->

      </div><!-- /.content-wrapper -->



      </div>
      <div id="bottom">   @include('admin.layout.bottom')</div>
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->


 
        </div>
      </div>

    </div>
  </div>

<!-- <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">THÊM</h4>
        </div>
        <div class="modal-body">
          @if(count($errors) > 0)
                <div class="alert alert-danger">

                  @foreach($errors->all() as $err)
                  {{$err}}<br>
                  @endforeach
                </div>
                @endif

                @if(session('thongbao'))
                  <div class="alert alert-success">
                    {{session('thongbao')}}
                  </div>
                  @endif
          <form method="post" action="{{route('themUser1')}}" 
                data-parsley-validate class="form-horizontal form-label-left">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12"
                    for="last-name">Họ tên<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="name" placeholder="Nhập tên đăng nhập" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ Email<span
                    class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="email" name="email" placeholder="Nhập email" class="form-control">
                  </div>
                </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12"
                    for="last-name">Mật khẩu<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="password" name="password" placeholder="Nhập mật khẩu" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12"
                    for="last-name">Nhập lại mật khẩu<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="password" name="password2" placeholder="Nhập mật khẩu" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12"
                    for="last-name">Số điện thoại<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="number" name="phone_number" placeholder="Nhập số điện thoại" class="form-control">
                  </div>
                </div>
                
                <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <center>
                      <button type="submit" class="btn btn-info" id="btn-add" href=""><span class="glyphicon glyphicon-plus" ></span>Thêm</button>
                      <a type="reset" class="btn btn-success" id="btn-add"><i class="fa fa-refresh" aria-hidden="true">Nhập lại</i></a>
                    </center>
                  </div>
                </div>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        </div>
      </div>   
    </div>
  </div>
  <!--end modal-->
<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">KÍCH HOẠT TÀI KHOẢN</h4>
          <small>ID:{{$u->id}}</small>
        </div>
        <div class="modal-body">
          @if(count($errors) > 0)
                <div class="alert alert-danger">

                  @foreach($errors->all() as $err)
                  {{$err}}<br>
                  @endforeach
                </div>
                @endif

                @if(session('thongbao'))
                  <div class="alert alert-success">
                    {{session('thongbao')}}
                  </div>
                  @endif
          <form method="post" action="{{route('suaUser1',[$u->id])}}" 
                data-parsley-validate class="form-horizontal form-label-left">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12"
                    for="last-name" >Họ tên<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" readonly="" name="name" value="{{$u->name}}" placeholder="Nhập tên đăng nhập" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ Email<span
                    class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="email" readonly="" name="email" value="{{$u->email}}" placeholder="Nhập email" class="form-control">
                  </div>
                </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12"
                    for="last-name" >Mật khẩu<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="password" readonly="" value="{{$u->password}}" name="password" placeholder="Nhập mật khẩu" class="form-control">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12"
                    for="last-name" >Số điện thoại<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="number" name="phone_number" readonly="" value="{{$u->phone_number}}" placeholder="Nhập số điện thoại" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12"
                    for="last-name">Tình trạng<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12" >
                    <input type="radio" name="active" value="0" 
                      @if($u->active ==0)
                      {{"checked"}}
                      @endif
                    >Chưa kích hoạt<br>
                    <input type="radio" name="active" value="1" 
                      @if($u->active ==1)
                      {{"checked"}}
                      @endif
                    >Đã kích hoạt<br>   
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12"
                    for="last-name" >Ngày tạo<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="dext" readonly="" value="{{$u->created_at}}" placeholder="Nhập mật khẩu" class="form-control">
                  </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <center>
                      
                      <button type="submit" class="btn btn-success" id="btn-add">Kích hoạt</button> 
                    </center>
                  </div>
                </div>
              </form>
        </div>

      
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        </div>
      </div>   
    </div>
  </div>
  <!--modal sua
 -->
 <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">XEM THÔNG TIN KHÁCH HÀNG</h4>

          <small>ID:{{$u->id}}</small>
        </div>
        <div class="modal-body">

          <form method="post" action="{{route('suaUser',[$u->id])}}" 
                data-parsley-validate class="form-horizontal form-label-left">
                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12"
                    for="last-name" >Họ tên<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" readonly="" name="name" value="{{$u->name}}" placeholder="Nhập tên đăng nhập" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Địa chỉ Email<span
                    class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="email" readonly="" name="email" value="{{$u->email}}" placeholder="Nhập email" class="form-control">
                  </div>
                </div>
               <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12"
                    for="last-name" >Mật khẩu<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="password" readonly="" value="{{$u->password}}" name="password" placeholder="Nhập mật khẩu" class="form-control">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12"
                    for="last-name" >Số điện thoại<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="number" name="phone_number" readonly="" value="{{$u->phone_number}}" placeholder="Nhập số điện thoại" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12"
                    for="last-name">Tình trạng<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12" >
                    <input type="radio" name="active" value="0" 
                      @if($u->active ==0)
                      {{"checked"}}
                      @endif
                    >Chưa kích hoạt<br>
                    <input type="radio" name="active" value="1" 
                      @if($u->active ==1)
                      {{"checked"}}
                      @endif
                    >Đã kích hoạt<br>   
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12"
                    for="last-name" >Ngày tạo<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="dext" readonly="" value="{{$u->created_at}}" placeholder="Nhập mật khẩu" class="form-control">
                  </div>
                </div>
                
              </form>
        </div>

      
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
        </div>
      </div>   
    </div>
  </div>
  

</body>
</html>