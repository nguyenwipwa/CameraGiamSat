<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('resources/views/admin/ckeditor/ckeditor.js')); ?>"></script>
<link href="<?php echo e(asset('resources/views/admin/css/stylesheet.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div id="content">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <div class="page-header">
      <div class="container-fluid">
        <div class="pull-right">
          <a onclick="printhd()" target="_blank"  title="" class="btn btn-info" data-original-title="In hóa đơn">
            <i class="fa fa-print"></i>
          </a> 
          <a href="<?php echo e(url('/admin/viewsuadonhang.html/'.$order->id)); ?>" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Sửa">
            <i class="fa fa-pencil"></i>
          </a>
          <a href="" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Trở về">
            <i class="fa fa-reply"></i>
          </a>
        </div>
        <h1>Đơn hàng</h1>
        <ul class="breadcrumb">
          <li><a href="">Trang chủ</a></li>
          <li><a href="">Đơn hàng</a></li>
        </ul>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-shopping-cart"></i> Chi tiết đơn hàng</h3>
            </div>
            <table class="table">
              <tbody>
                <tr>
                  <td style="width: 1%;">
                    <button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Store"><i class="fa fa-shopping-cart fa-fw"></i></button>
                  </td>
                  <td><a href="http://localhost:81/opencart/" target="_blank">T & T Camera</a></td>
                </tr>
                <tr>
                  <td>
                    <button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Ngày thêm:"><i class="fa fa-calendar fa-fw"></i></button>
                  </td>
                  <td><?php echo e($order->created_at); ?></td>
                </tr>
                <tr>
                  <td><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Phương thức thanh toán:"><i class="fa fa-credit-card fa-fw"></i></button></td>
                  <td>Cash On Delivery</td>
                </tr>
                <tr>
                  <td><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Phương thức vận chuyển:"><i class="fa fa-truck fa-fw"></i></button></td>
                  <td>Flat Shipping Rate</td>
                </tr>
              </tbody>

            </table>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><i class="fa fa-user"></i> Thông tin khách hàng</h3>
            </div>
            <table class="table">
              <tbody><tr>
                <td style="width: 1%;"><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Khách hàng:"><i class="fa fa-user fa-fw"></i></button></td>
                <td>           
                 <?php echo e($order->name_customer); ?>

               </td>
             </tr>
             <tr>
              <td><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Nhóm khách hàng:"><i class="fa fa-group fa-fw"></i></button></td>
              <td>Default</td>
            </tr>
            <tr>
              <td><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Email:"><i class="fa fa-envelope-o fa-fw"></i></button></td>
              <td><a href="mailto:tungle251@gmail.com"><?php echo e($order->email); ?></a></td>
            </tr>
            <tr>
              <td><button data-toggle="tooltip" title="" class="btn btn-info btn-xs" data-original-title="Số điện thoại:"><i class="fa fa-phone fa-fw"></i></button></td>
              <td><?php echo e($order->phone_number); ?></td>
            </tr>
          </tbody></table>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-cog"></i> Tùy chọn</h3>
          </div>
          <table class="table">
            <tbody>
              <tr>
                <td>Mã hoá đơn</td>
                <td id="invoice" class="text-right"><?php echo e($order->code_order); ?></td>
                <td style="width: 1%;" class="text-center">             
                 <button disabled="disabled" class="btn btn-success btn-xs"><i class="fa fa-refresh"></i></button>
               </td>
             </tr>
             <tr>
              <td>Mã giảm giá:</td>
              <td class="text-right"><?php echo e($order->key_sale_off == null ? " Không có " : $order->key_sale_off); ?></td>
              <td class="text-center">                 
               <button disabled="disabled" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></button>
             </td>
           </tr>
           <tr>
            <td>Tiến trình: 
            </td>
            <td class="text-right"><?php echo e($process->process); ?></td>
            
            <td class="text-center">                 
             <button disabled="disabled" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></button>
           </td>
         </tr>
       </tbody>
     </table>
   </div>
 </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><i class="fa fa-info-circle"></i> Chi tiết đơn hàng</h3>
  </div>
  <div class="panel-body">
    <table class="table table-bordered">
      <thead>
        <tr>
          <td style="width: 50%;" class="text-left">Địa chỉ thanh toán</td>
          <td style="width: 50%;" class="text-left">Địa chỉ giao hàng</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text-left"><?php echo e($order->address); ?></td>
          <td class="text-left"><?php echo e($order->address); ?></td>
        </tr>
      </tbody>
    </table>
    <table class="table table-bordered">
      <thead>
        <tr>
          <td class="text-left">Mã sản phẩm</td>
          <td class="text-left">Tên sản phẩm</td>
          <td class="text-right">Số lượng</td>
          <td class="text-right">Đơn vị giá</td>
          <td class="text-right">Tổng cộng</td>
        </tr>
      </thead>
      <tbody>

        <tr>
          <td class="text-left"><a href="http://localhost:81/opencart/admin/index.php?route=catalog/product/edit&amp;user_token=LRLhUr6HXulMIMPm8PxCIoxiwTLSHiq5&amp;product_id=47">SP<?php echo e($product->id); ?></a> </td>
          <td class="text-left"><?php echo e($product->name); ?></td>
          <td class="text-right"><?php echo e($order_detail->quatity); ?></td>
          <td class="text-right"><?php echo e($order_detail->unit_price); ?></td>
          <td class="text-right"><?php echo e($order->total); ?></td>
        </tr>
        <tr>
          <td colspan="4" class="text-right">Sub-Total</td>
          <td class="text-right"><?php echo e($order->total); ?></td>
        </tr>
        
      </tbody>

    </table>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><i class="fa fa-comment-o"></i> Thêm lịch sử đặt hàng</h3>
  </div>
  <div class="panel-body">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#tab-history" data-toggle="tab">Lịch sử</a></li>
      <li><a href="#tab-additional" data-toggle="tab"></a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="tab-history">
        <div id="history"><div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <td class="text-left">Ngày thêm</td>
                <td class="text-left">Bình luận</td>
                <td class="text-left">Trạng thái</td>
                <td class="text-left">Khách hàng đã thông báo</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-left">29/12/2017</td>
                <td class="text-left"></td>
                <td class="text-left">Pending</td>
                <td class="text-left">Không</td>
              </tr>
              <tr>
                <td class="text-left">29/12/2017</td>
                <td class="text-left"></td>
                <td class="text-left">Pending</td>
                <td class="text-left">Không</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="row">
          <div class="col-sm-6 text-left"></div>
          <div class="col-sm-6 text-right">Hiển thị từ 1 đến 2 của 2 (1 trang)</div>
        </div>
      </div>
      <br>

     
    </div>
    <div class="tab-pane" id="tab-additional">                     
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <td colspan="2">Browser</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Địa chỉ IP:</td>
              <td>::1</td>
            </tr>
            <tr>
              <td>Tên tài khoản đại lý:</td>
              <td>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.108 Safari/537.36</td>
            </tr>
            <tr>
              <td>Chấp nhận ngôn ngữ:</td>
              <td>vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5</td>
            </tr>
          </tbody>

        </table>
      </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog" style="width:55%">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Chi tiết hóa đơn </h4>
          </div>
          <div class="modal-body">
            <div> <p><strong>3TP Camera Store</strong></p></div>
            <table>

              <tr>
                <td>Mã hóa đơn: </td>
                <td><span id="mahoadon"><?php echo e($order->id); ?></span></td>
              </tr>
              <tr>
                <td>Tên người dùng: </td>
                <td><span id="tennguoidung"><?php echo e($order->name_customer); ?></span></td>
              </tr>
              <tr>
                <td>Tên tài khoản: </td>
                <td><span id="tentaikhoan"><?php echo e($order->email); ?></span></td>
              </tr>
            </table>

            <fieldset>
              <legend>Thông tin sản phẩm</legend>
              <table class="table" id="tbsp">
                <thead>
                  <th >Tên sản phẩm</th>
                  <th>Đơn giá (VNĐ)</th>
                  <th>Số lượng</th>
                  <th>KM (%)</th>

                  <th>Tổng tiền (VNĐ)</th>
                </thead>
                <tbody>
                  <tr><td style='width:33%'><?php echo e($product->name); ?></td>

                    <td style='text-align:center'><?php echo e($product->price); ?></td>
                    <td style='text-align:center'><?php echo e($order_detail->quatity); ?></td>
                    <td style='text-align:center'><?php echo e(isset($key->percent) ? $key->percent : '0'); ?> </td>
                    
                    <td style='text-align:center'><?php echo e($order->total); ?></td>
                  </tr>
                </tbody>
              </table>
            </fieldset>
            <table  style="width:100%">

              <tr>
                <td >Thành Tiền</td>

                <td style="text-align:right"><span id="thanhtien" ><?php echo e($order->total); ?></span></td>
              </tr>
            </table>


          </div>
          <div class="modal-footer">

            <button type="button" class="btn btn-default" onClick="printhd()">In hóa đơn</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>

          </div>
        </div>

      </div>
    </div>

  </div>
</div>
</div>
</div>
</div>

</div>
</div>
</form>
</div>

</div>

</div>
<script type="text/javascript">
  function printhd(){

    var mywindow = window.open('', 'PRINT', 'height=600,width=800');
    mywindow.document.write($(".modal-header").html());
    mywindow.document.write($(".modal-body").html());
    mywindow.document.close();
    mywindow.print();
    mywindow.close();

    return true;  
  }
</script>
<link href="<?php echo e(asset('resources/views/admin/bootstrap.css')); ?>" rel="stylesheet"/>
<link href="<?php echo e(asset('resources/views/admin/css/codemirror.css')); ?>" rel="stylesheet"/>
<link href="<?php echo e(asset('resources/views/admin/css/monokai.css')); ?>" rel="stylesheet"/>
<script type="text/javascript" src="<?php echo e(asset('resources/views/admin/js/codemirror.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('resources/views/admin/js/xml.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('resources/views/admin/js/formatting.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('resources/views/admin/js/summernote/summernote.js')); ?>"></script>
<link href="<?php echo e(asset('resources/views/admin/js/summernote/summernote.css')); ?>" rel="stylesheet"/>
<script type="text/javascript" src="<?php echo e(asset('resources/views/admin/js/summernote/summernote-image-attributes.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('resources/views/admin/js/opencart.js')); ?>"></script>


</div>
</section>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>