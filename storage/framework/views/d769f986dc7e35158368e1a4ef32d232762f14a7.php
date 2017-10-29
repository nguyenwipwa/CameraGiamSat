<ul id="ul2" class="col-md-12">
	<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php if($cate->menu == 1): ?>
    <li class="menufirst"><a href=""><?php echo e($cate->name); ?></a></li>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
  </ul>