<?php $__env->startSection('content'); ?>
<div class="title">Post <?php echo e($id); ?> <?php echo e($name); ?></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>