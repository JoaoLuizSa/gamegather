<?php $__env->startSection('pagina'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/painel/css/stylegamegather.css')); ?>" />
<div class="titulos">
<h1><?php echo e($titulo); ?></h1>
</div>
<?php $__env->startSection('secao'); ?>
	<hgroup>
		<header id="cabecalho-notice">
			<h3><?php echo e($caminho); ?></h3><br /><br />
		</header>
	</hgroup>
<!-- Modal Logar-se -->

			<form method="POST" class="editar" action="<?php echo e(route('usuario.update',$dados->id)); ?>" enctype="multipart/form-data"> 
				<?php echo csrf_field(); ?><?php echo method_field('PUT'); ?>

  			<h1 >Altere o que desejar e redigite a senha</h1>

  				<?php if($dados->image != null): ?>
  					<img src="<?php echo e(url('storage/usuarios/'.$dados->image)); ?>" alt="<?php echo e($dados->image); ?>" style="max-width: 250px; ">
  				<?php endif; ?>
  				<br /><br />
				<p><label>Altere Nome: </label>
					<input class="form-control" placeholder="Nome:" type="text" name="name" required="" value="<?php echo e(old('name')); ?>"></p><br />
					<p><label>Altere Email: </label>
				<input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email: email@examplo.com" required="" autofocus="" /></p>
				<br />
				<p><label>Redigite a senha para confirmar: </label>
				<input name="password" class="form-control" type="password" id="inputPassword" placeholder="Senha" required="" />
				
				<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button type="submit" class="btn btn-primary">Alterar</button>
	  			</div>			
			</form>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.templates.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>