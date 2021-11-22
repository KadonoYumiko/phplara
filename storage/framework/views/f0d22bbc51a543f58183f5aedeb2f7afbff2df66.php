<?php $__env->startSection('title','課題08'); ?>

<?php $__env->startSection('title2','課題08 DB処理1(ブログ)'); ?>

<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cont): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="blog">
        <h2 class="blog"><?php echo e($cont->tm); ?></h2>
        <p class="title"><?php echo e($cont->title); ?></p>
        <div class="contents"><?php echo $cont->contents; ?></div>
        <p align="right">
            <font class="posted">Posted by PHP-WEB</font>
        </p>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.kadapp2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\php-web\sample2\phplara\resources\views/kad08.blade.php ENDPATH**/ ?>