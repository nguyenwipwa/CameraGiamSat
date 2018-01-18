@extends('admin.layout.app')

@section('script')
<link href="{{asset('resources/views/admin/css/stylesheet.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')

<script type="text/javascript">
  $(document).ready(function() {
    var danhmucmenu=[];
    @foreach($listCate as $row)
    @if($row->id_root==0)
    danhmucmenu.push($row->name);
    @endif
    @endforeach
  });
</script>
<div id="content">
  <div class="content-wrapper">
    <section class="content-header">
      <div class="page-header">
        <div class="container-fluid">
          <div class="pull-right">
            <button type="submit" form="form-coupon" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Lưu"><i class="fa fa-save"></i></button>
            <a href="{{ route('danhsachmenu') }}" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Trở về"><i class="fa fa-reply"></i></a></div>
            <h1>Quản lý danh mục</h1>
            <ul class="breadcrumb">
              <li><a href="#">Quản lý Menu</a></li>
              <li><a href="{{ route('danhsachmenu') }}">Danh sách Menu</a></li>
            </ul>
          </div>
        </div>
      </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
        @endif
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-list"></i> Danh sách danh mục</h3>
          </div>
          <div class="panel-body">
            <form action="http://localhost/opencart/admin/index.php?route=news/category/delete&amp;user_token=R94rZ1nsVBrQ2iH5qTwXVAs0dr0LuFak" method="post" enctype="multipart/form-data" id="form-category">
              <div class="table-responsive">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></td>
                      <td class="text-left">                    <a href="http://localhost/opencart/admin/index.php?route=news/category&amp;user_token=R94rZ1nsVBrQ2iH5qTwXVAs0dr0LuFak&amp;sort=name&amp;order=DESC" class="asc">Tên danh mục</a>
                      </td>
                      <td class="text-right">                    <a href="http://localhost/opencart/admin/index.php?route=news/category&amp;user_token=R94rZ1nsVBrQ2iH5qTwXVAs0dr0LuFak&amp;sort=sort_order&amp;order=DESC">Thứ tự</a>
                      </td>
                      <td class="text-right">Tác vụ</td>
                    </tr>
                  </thead>
                  <tbody>
                    @if($listCate)
                    @foreach($listCate as $category)
                    <tr>
                      <td class="text-center">
                        <input type="checkbox" name="selected[]" value="{{ $category->id }}" />
                      </td>
                      <td class="text-left">{{ $category->name }}</td>
                      <td class="text-right">{{ $category->id_root }}</td>
                      <td class="text-right"><a href="{{ route('edit.category',[$category->id]) }}" data-toggle="tooltip" title="" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                        <button type="button" data-toggle="tooltip" title="" class="btn btn-danger" onclick="confirm('Xóa/gỡ cài đặt không thể hoàn tác! Bạn có chắc bạn muốn làm điều này?') ? $('#form-category').submit() : false;" data-original-title="Xoá"><i class="fa fa-trash-o"></i></button>
                      </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                      <td class="text-center" colspan="4">K co</td>
                    </tr>
                    @endif
                  </tbody>
                </table>
              </div>
            </form>
            <div class="row">
              <div class="col-sm-6 text-left"></div>
              <div class="col-sm-6 text-right">{!!$listCate->render()!!}</div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /.content -->
  </div>
</div><!-- /.content-wrapper -->
@endsection