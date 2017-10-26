<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Camera Store | 3TP</title>
    <!-- Tell the browser to be responsive to screen width -->
   @include('admin.link')
  </head>
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
        @include('admin.layout.content')
      </div>
      <div id="bottom">
        @include('admin.layout.bottom')
      </div>
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
    <!-- jQuery 2.1.4 -->

{{--        <script type="text/javascript">
      $('#top').load('top.html');
      $('#left').load('left.html');
       $('#content').load('content.html');
      $('#bottom').load('bottom.html');

    </script> --}}
  </body>
</html>
