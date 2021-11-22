

<?php $__env->startSection('title','サンプル08'); ?>

<?php $__env->startSection('title2','サンプル08 DB処理1'); ?>

<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cont): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="blog">
        <h2 class="blog"><?php echo e($cont->tm); ?></h2>
        <p class="title"><?php echo e($cont->title); ?></p>
        <div class="contents"><?php echo $cont->contents; ?></div>
        <p align="right">
            <a href="Samp10?id=""">comment(<?php echo e($cont->comment); ?>)</a>&nbsp;<a href="Samp11">Trackback(<?php echo e($cont->tackback); ?>)</a>
            &nbsp;<font class="posted">Posted by PHP-WEB</font>
        </p>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.kadapp2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/phplara2/resources/views/samp08.blade.php ENDPATH**/ ?>