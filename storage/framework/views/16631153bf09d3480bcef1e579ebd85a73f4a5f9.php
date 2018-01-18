
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
      </div>
      <div class="pull-left info">
        <p>Admin</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Trực tuyến</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Tìm kiếm..." />
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MENU QUẢN LÝ</li>
      <li class="treeview">
        <a href="<?php echo e(route('admin')); ?>">
          <i class="fa fa-home"></i> <span>Trang chủ</span>
        </a>

      </li>
      <li class="treeview" >
        <a href="#m2">
          <i class="fa fa-building"></i> <span>Quản lí Menu</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu collapse" id="m2">
          <li><a href="<?php echo e(route('danhsachmenu')); ?>"><i class="fa fa-circle-o"></i> Danh sách menu</a></li>

        </ul>
      </li>
      <li class="treeview" id="m3">
        <a href="#">
          <i class="fa fa-table nav_icon"></i> <span>Quản lí sản phẩm</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo e(route('danhsachsanpham')); ?>"><i class="fa fa-circle-o"></i> Tất cả sản phẩm</a></li>
          <li><a href="danhsachsanpham-khuyenmai.html"><i class="fa fa-circle-o"></i> Chương trình giảm giá</a></li>
          <li><a href="danhsachsanpham-khuyenmai.html"><i class="fa fa-circle-o"></i> Sản phẩm khuyến mãi</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-puzzle-piece fw"></i>
          <span>Phần mở rộng</span>
          <span class="fa fa-angle-left pull-right"></span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo e(route('quanlybanner')); ?>"><i class="fa fa-circle-o"></i> Banner</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Hóa đơn</span>
          <span class="fa fa-angle-left pull-right"></span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo e(route('danhsachdonhang')); ?>"><i class="fa fa-circle-o"></i> Quản lí hóa đơn</a></li>
                <!--<li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>-->
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class=" fa fa-user"></i>
                <span>Thành viên</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="quanlythanhvien.html"><i class="fa fa-circle-o"></i> Thành viên</a></li>
                <!-- <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Quản trị viên</a></li>-->
               <!-- <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                 <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>-->
               </ul>
             </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-shopping-cart fw"></i>
                <span>Bán hàng</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo e(route('phieugiamgia')); ?>"><i class="fa fa-circle-o"></i> Phiếu giảm giá </a></li>
               </ul>
             </li>
             <li class="treeview" >
              <a href="#m2">
                <i class="fa fa-pie-chart"></i> <span>Thông kê</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu collapse" id="m2">
                <li><a href="tkdoanhthu.html"><i class="fa fa-circle-o"></i> Doanh thu</a></li>
                <li><a href="tkspbanchay.html"><i class="fa fa-circle-o"></i> SP bán chạy</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Tin tức</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo e(route('quanlytintuc')); ?>"><i class="fa fa-circle-o"></i> Tin tức sự kiện</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Tin công nghệ</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Giải pháp kỷ thuật</a></li>
                <!--<li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Forms</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Tables</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
              </ul>
            </li>
            <li>
              <a href="pages/calendar.html">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
                <small class="label pull-right bg-red">3</small>
              </a>
            </li>
            <li>
              <a href="pages/mailbox/mailbox.html">
                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                <small class="label pull-right bg-yellow">12</small>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Examples</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Multilevel</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>
            </li>
            <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
          </ul>-->
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>