<?php $__env->startSection('title', 'User Accounts'); ?>

<?php $__env->startSection('content'); ?>
<h1>User Accounts</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
    </tr>

    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($user['id']); ?></td>
            <td><?php echo e($user['name']); ?></td>
            <td><?php echo e($user['email']); ?></td>
            <td><?php echo e($user['role']); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Acer\Desktop\laravel_sedino\tfa1-pos-laravel-fixed\pos-tfa1\resources\views/users.blade.php ENDPATH**/ ?>