<?php $__env->startSection('content'); ?>
<h1>Produto</h1>

<h2>Tabela de produtos</h2>
<table class="table">
 <thead class="thead-dark">
<tr>
	<th scope="col">#</th>
	<th scope="col">Nome</th>
	<th scope="col">Numero</th>
	<th scope="col">Categoria</th>
	<th scope="col">Descrição</th>
</tr>
<?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tbody>
    <tr>
      <th scope="row"><?php echo e($product->id); ?></th>
      <td><?php echo e($product->name); ?></td>
      <td><?php echo e($product->number); ?></td>
	  <td><?php echo e($product->categoria); ?></td>
	  <td><?php echo e($product->descricao); ?></td>
    </tr>
   </tbody>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</thead>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('painel.templates.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>