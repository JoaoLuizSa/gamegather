<?php $__env->startSection('content'); ?>
<h1>Produto</h1>

<table>
<caption >Tabela de produtos</caption>

<tr>
	<th>Nome</th>
	<th>Categoria</th>
	<th>Descrição</th>
</tr>
<?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
	<td><?php echo e($product->name); ?></td>
	<td><?php echo e($product->categoria); ?></td>
	<td><?php echo e($product->descricao); ?></td>
</tr>	
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.templates.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>