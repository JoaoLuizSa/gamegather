<?php $__env->startSection('pagina'); ?>
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
 
			<form method="post" class="logar" action="<?php echo e(url('/usuario/login')); ?>">
				<?php echo csrf_field(); ?>

  			<h1 >Logue-se por favor</h1>
				<input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email: email@examplo.com" required="" autofocus="" />
				<br />
				<input name="password" class="form-control" type="password" id="inputPassword" placeholder="Senha" required="" />
				<div style="text-align:Left">
					<label ><input  type="checkbox" value="remember-me">Lembrar Senha</label>
				</div>	
				<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button type="submit" class="btn btn-primary">Logar</button>
	  			</div>			
			</form>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.templates.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>