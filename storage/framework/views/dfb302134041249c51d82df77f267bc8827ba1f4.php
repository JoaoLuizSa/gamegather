<?php $__env->startSection('content'); ?>

<h1>COntatos</h1>

<?php $__empty_1 = true; $__currentLoopData = $frutas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fruit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
<p>Fruta: <?php echo e($fruit); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<p>Não existem itens</p>
<?php endif; ?>

<?php echo $__env->make('site.includes.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('contato'); ?>


<?php $__env->stopPush(); ?>
<?php echo $__env->make('site.templates.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>