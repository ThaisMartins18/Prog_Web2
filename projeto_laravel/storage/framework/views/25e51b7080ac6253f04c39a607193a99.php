<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h1>Clientes</h1>
    <a href="<?php echo e(route('clientes.create')); ?>">INSERIR CLIENTE</a>
    <table>
        <tr>
            <td>Nome</td>
            <td></td>
        </tr>
        <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($c->nome); ?></td>
            <td><a href="<?php echo e(route('clientes.edit',$c->id)); ?>">Alterar</a></td>
            <td><a href="/clientes/delete/<?php echo e($c->id); ?>">Excluir</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h1>Clientes</h1>
    <a href="<?php echo e(route('clientes.create')); ?>">INSERIR CLIENTE</a>
    <table>
        <tr>
            <td>Nome</td>
            <td></td>
        </tr>
        <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($c->nome); ?></td>
            <td><a href="<?php echo e(route('clientes.edit',$c->id)); ?>">Alterar</a></td>
            <td><a href="/clientes/delete/<?php echo e($c->id); ?>">Excluir</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
>>>>>>> b64bd0123caab28fde88f3847c3536aa42b69999
</html><?php /**PATH C:\Users\aluno\Downloads\projeto-crud\projeto-crud\resources\views/cliente/index.blade.php ENDPATH**/ ?>