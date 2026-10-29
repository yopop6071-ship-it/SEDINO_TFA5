<!DOCTYPE html>
<html>
<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>

<a href="<?php echo e(route('home')); ?>">Home</a>
<a href="<?php echo e(route('about')); ?>">About</a>
<a href="<?php echo e(route('customers')); ?>">Customers</a>
<a href="<?php echo e(route('users')); ?>">Users</a>

<?php echo $__env->yieldContent('content'); ?>

</body>
</html><?php /**PATH C:\Users\Acer\Desktop\laravel_sedino\tfa1-pos-laravel-fixed\pos-tfa1\resources\views/layouts/app.blade.php ENDPATH**/ ?>