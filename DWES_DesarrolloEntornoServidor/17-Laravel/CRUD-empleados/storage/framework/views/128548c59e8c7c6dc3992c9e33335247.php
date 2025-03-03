<?php $__env->startSection('title'); ?>
    | Editar empleado
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h1 class="text-center">
    <a class="float-start" title="Volver" href="<?php echo e(route('home')); ?>">
        <i class="bi bi-arrow-left-circle"></i>
    </a>
    Editar datos del empleado <hr>
</h1>

<form  action="<?php echo e(route('myUpdate', $empleado->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field("PUT"); ?>

    <div class="row">
        <div class="col-md-6 mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" required value="<?php echo e($empleado->nombre); ?>" />
        </div>
        <div class="col-md-6 mb-3">
            <label class="form-label">Cédula (NIT)</label>
            <input type="text" name="cedula" class="form-control" required value="<?php echo e($empleado->cedula); ?>" />
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label class="form-label">Seleccione la edad</label>
            <select class="form-select" name="edad" required>
                <option value="">Edad</option>
                <?php for($i = 18; $i <= 50; $i++): ?>
                    <option value="<?php echo e($i); ?>" <?php echo e($i == $empleado->edad ? 'selected' : ''); ?>><?php echo e($i); ?></option>
                <?php endfor; ?>
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-label">Sexo</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo" id="sexo_m" value="Masculino" <?php echo e($empleado->sexo == 'Masculino' ? 'checked' : ''); ?>>
                <label class="form-check-label" for="sexo_m">
                    Masculino
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo" id="sexo_f" value="Femenino" <?php echo e($empleado->sexo == 'Femenino' ? 'checked' : ''); ?>>
                <label class="form-check-label" for="sexo_f">
                    Femenino
                </label>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6 mb-3">
            <label class="form-label">Teléfono</label>
            <input type="number" name="telefono" class="form-control" required value="<?php echo e($empleado->telefono); ?>" />
        </div>
        <div class="col-md-6 mb-3">
                <label class="form-label">Seleccione el Cargo</label>
                <select name="cargo" class="form-select" required>
                    <option value="">Cargo</option>
                    <?php
                    $cargos = [
                        "Gerente",
                        "Asistente",
                        "Analista",
                        "Contador",
                        "Secretario",
                        "Desarrollador Web"
                    ];
                    ?>
                    <?php $__currentLoopData = $cargos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cargo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($cargo); ?>" <?php echo e($cargo == $empleado->cargo ? 'selected' : ''); ?>><?php echo e($cargo); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6 mb-3 mt-3">
            <label class="form-label">foto actual del Empleado</label>
            <?php if($empleado->avatar): ?>
                <img src="<?php echo e(asset('avatars/' . $empleado->avatar)); ?>" alt="Avatar" width="50" height="50" />
            <?php else: ?>
                <img src="https://www.drmarket.com.mx/Archivos/Anuncios/sinImagenDefault.jpg" alt="Avatar" width="50" height="50" />
            <?php endif; ?>
        </div>
        <div class="col-md-6 mb-3 mt-3">
            <label class="form-label">Cambiar Foto del empleado</label>
            <input class="form-control form-control-sm" type="file" name="avatar" accept="image/png, image/jpeg"/>
        </div>
    </div>

    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary btn_add">
            Actualizar datos del Empleado
        </button>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Alan\Desktop\Laravel\CRUD-con-Laravel-10-y-MySQL-guia-paso-a-paso\resources\views/empleados/edit.blade.php ENDPATH**/ ?>