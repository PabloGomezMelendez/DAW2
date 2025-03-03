<?php if(Session::has('success')): ?>
    <div class="alert alert-success text-center" role="alert">
        <?php echo e(Session::get('success')); ?>

    </div>
<?php endif; ?>

<?php if(Session::has('error')): ?>
    <div class="alert alert-danger text-center" role="alert">
        <?php echo e(Session::get('error')); ?>

    </div>
<?php endif; ?>
<?php /**PATH C:\Users\Alan\Desktop\Laravel\CRUD-con-Laravel-10-y-MySQL-guia\resources\views/messages.blade.php ENDPATH**/ ?>