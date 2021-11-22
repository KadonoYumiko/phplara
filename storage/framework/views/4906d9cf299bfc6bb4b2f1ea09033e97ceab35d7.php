<!DOCTYPE htnl>
<html lang="ja">
<head>
<meta charset="utf-8">
<title><?php echo $__env->yieldContent('title'); ?></title>
<link rel=stylesheet href=/css/blogcss.css>
</head>
<body>
<!--header start-->
<header>
    <h1><span><?php echo $__env->yieldContent('title2'); ?></span></h1>
</header>
<!--header end-->
<!--contents start-->
<div id="wrapper">
    <div class="contents">
    <?php echo $__env->yieldContent('content'); ?>
    </div>
</div>
<!--contents end-->
</body>
</html>
<?php /**PATH C:\php-web\sample2\phplara\resources\views/layouts/kadapp2.blade.php ENDPATH**/ ?>