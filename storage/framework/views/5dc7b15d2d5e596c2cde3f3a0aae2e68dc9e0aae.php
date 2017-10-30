<div class="menuleft">
  <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($cate->id_root == 0 && $cate->status==1): ?>
  <div class="box_cat">
    <div class="bc_title">
      <h5><a href="#"><span><?php echo e($cate->name); ?></span></a></h5>
    </div>
    <div class="bc_content">
      <ul>
         <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($cate->id == $cate1->id_root && $cate1->status==1): ?>
        <li class="show_left_big">
          <p><a href=""> <?php echo e($cate1->name); ?></a></p>
          <ul class="show_left">
            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($cate1->id == $cate2->id_root && $cate2->status==1): ?>
            <li><a href=""><span><?php echo e($cate2->name); ?></span></a></li>
             <?php endif; ?>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </li>
          <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>
  </div>
    <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  
  
  <div class="box_statistics"><div class="s-title" style="font-size: 21px;">Thống kê truy cập</div>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tbody>
      <tr>
        <td width="100" nowrap="">Online</td>
        <td width="15" align="center"> : </td>
        <td><span id="stats_online">305</span></td>
      </tr>
      <tr>
        <td nowrap="">Truy cập hôm qua</td>
        <td width="10" align="center"> : </td>
        <td><span id="stats_yesterday">2976</span></td>
      </tr>
      <tr>
        <td nowrap="">Truy cập hôm nay</td>
        <td width="10" align="center"> : </td>
        <td><span id="stats_today">675</span></td>
      </tr>
      <tr>
        <td nowrap=""><b class="font_err">Lượt truy cập</b></td>
        <td width="10" align="center"> : </td>
        <td></td>
      </tr>
    </tbody>
  </table>
  <div class="stats_totals" id="stats_totals">
    <span>1</span><span>2</span><span>4</span><span>4</span><span>2</span><span>0</span><span>4</span>
  </div>
</div>
