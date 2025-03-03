<div class="table-responsive">
    <table class="table table-hover" id="table_empleados">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Edad</th>
                <th scope="col">Cédula</th>
                <th scope="col">Cargo</th>
                <th scope="col">Avatar</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $empleado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr id="empleado_<?php echo e($empleado->id); ?>">
                    <td><?php echo e($empleado->id); ?></td>
                    <td><?php echo e($empleado->nombre); ?></td>
                    <td><?php echo e($empleado->edad); ?></td>
                    <td><?php echo e($empleado->cedula); ?></td>
                    <td><?php echo e($empleado->cargo); ?></td>
                    <td>
                        <?php if($empleado->avatar): ?>
                        <!--
                        El helper asset generará la URL completa a la carpeta de avatares, asegurando que las imágenes se carguen correctamente independientemente de la ruta en la que te encuentres dentro de tu aplicación Laravel.
                        -->
                        <img src="<?php echo e(asset('avatars/' . $empleado->avatar)); ?>" alt="Avatar" width="50" height="50" />
                        <?php else: ?>
                        <img src="https://www.drmarket.com.mx/Archivos/Anuncios/sinImagenDefault.jpg" alt="Avatar" width="50" height="50" />
                        <?php endif; ?>
                    </td>
                    <td>
                         <ul class="flex_acciones">
                            <li>
                                <a title="Ver detalles del empleado" href="<?php echo e(route('myShow', $empleado->id)); ?>" class="btn btn-success"><i class="bi bi-binoculars"></i></a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('myEdit', $empleado->id)); ?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>   
                            </li>
                            <li>
                                <form action="<?php echo e(route('myDestroy', $empleado->id)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Desea eliminar este registro?');"><i class="bi bi-trash"></i> </button>
                                </form>
                            </li>
                        </ul>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\Users\Alan\Desktop\Laravel\CRUD-con-Laravel-10-y-MySQL-guia-paso-a-paso\resources\views/empleados/index.blade.php ENDPATH**/ ?>