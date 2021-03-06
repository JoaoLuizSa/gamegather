<?php $__env->startSection('pagina'); ?>
<script type="text/javascript" src="<?php echo e(asset('assets/painel/js/alertify.js')); ?>"></script>
<div class="titulos">
<h1>Formularios Recebidos</h1>
<h2>Tabela de Formularios recebidos</h2>
</div>
<?php $__env->startSection('secao'); ?>
<table class="table">
 <thead class="thead-dark">
<tr>
	<th scope="col">#</th>
	<th scope="col">Nome</th>
	<th scope="col">Email</th>
	<th scope="col">Idade</th>
	<th scope="col">Sexo</th>
	<th scope="col">Descrição</th>
	<th scope="col" width="100px">Ações</th>
</tr>
<?php if(isset ($local)): ?>
<?php $__currentLoopData = $local; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $form): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tbody>
    <tr>
      <th scope="row"><?php echo e($form->id); ?></th>
      <td><?php echo e($form->name); ?></td>
      <td><?php echo e($form->email); ?></td>
	  <td><?php echo e($form->idade); ?></td>
	  <td><?php echo e($form->sexo); ?></td>
	  <td><?php echo e($form->descricao); ?></td>
	  <td>
	  	<a href="<?php echo e(route('formulario.edit',$form->id)); ?>" class="actions edit">
	  		<button type="button" data-toggle="modal" data-target="#modalform">Editar</button>
	  	</a>
	  	<a href="<?php echo e(route('formulario.show',$form->id)); ?>" class="actions delete">
	  		<button>Deletar</button>
	  		
	  	</a>
	  </td>
    </tr>
   </tbody>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
<?php $__currentLoopData = $formu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $form): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tbody>
    <tr>
      <th scope="row"><?php echo e($form->id); ?></th>
      <td><?php echo e($form->name); ?></td>
      <td><?php echo e($form->email); ?></td>
	  <td><?php echo e($form->idade); ?></td>
	  <td><?php echo e($form->sexo); ?></td>
	  <td><?php echo e($form->descricao); ?></td>
	  <td>
	  	<a href="<?php echo e(route('formulario.edit',$form->id)); ?>" class="actions edit">
	  		<button type="button" data-toggle="modal" data-target="#modalform">Editar</button>
	  	</a>
	  	<a href="<?php echo e(route('formulario.show',$form->id)); ?>" class="actions delete">
	  		<button>Deletar</button>
	  		
	  	</a>
	  </td>
    </tr>
   </tbody>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
</thead>
</table>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.templates.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>