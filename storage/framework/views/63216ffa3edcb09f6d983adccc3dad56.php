<?php $__env->startSection('title', 'Customer Accounts'); ?>

<?php $__env->startSection('content'); ?>
<h1>Customer Accounts</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>

    <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($customer['id']); ?></td>
            <td><?php echo e($customer['name']); ?></td>
            <td><?php echo e($customer['email']); ?></td>
            <td><?php echo e($customer['phone']); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Acer\Desktop\laravel_sedino\tfa1-pos-laravel-fixed\pos-tfa1\resources\views/customers.blade.php ENDPATH**/ ?>