<?php $__env->startSection('title'); ?>
    | Detalles del empleado
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<h1 class="text-center">
   <a class="float-start" title="Volver" href="<?php echo e(route('home')); ?>">
      <i class="bi bi-arrow-left-circle"></i>
   </a>
   Datos del empleado <hr>
</h1>
<ul class="list-group list-group-flush">
  <li class="list-group-item"> Nombre: &nbsp; &nbsp; <strong> <?php echo e($empleado->nombre); ?></strong></li>
  <li class="list-group-item"> Edad: &nbsp; &nbsp; <strong> <?php echo e($empleado->edad); ?></strong></li>
  <li class="list-group-item"> Cedula: &nbsp; &nbsp; <strong> <?php echo e($empleado->cedula); ?></strong></li>
  <li class="list-group-item"> Cargo: &nbsp; &nbsp; <strong> <?php echo e($empleado->cargo); ?></strong></li>
    <li class="list-group-item"> Teléfono: &nbsp; &nbsp; <strong> <?php echo e($empleado->telefono); ?></strong></li>
  <li class="list-group-item"> Imagen de perfil: &nbsp; &nbsp; <br>
   <img src="<?php echo e(asset('avatars/' . $empleado->avatar)); ?>" alt="Avatar" width="150" height="150" />
</li>
</ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Alan\Desktop\Laravel\CRUD-con-Laravel-10-y-MySQL-guia-paso-a-paso\resources\views/empleados/show.blade.php ENDPATH**/ ?>