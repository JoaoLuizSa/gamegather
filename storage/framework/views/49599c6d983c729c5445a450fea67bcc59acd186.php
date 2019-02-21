
<?php $__env->startSection('pagina'); ?>
<div class="titulos">
<h1><?php echo e($titulo); ?></h1>
</div>
<?php $__env->startSection('secao'); ?>
	<hgroup>
		<header id="cabecalho-notice">
			<h3><?php echo e($caminho); ?></h3><br /><br />
			<h4><?php echo e($notice); ?></h4><br  />
			<h4 class="direita">Edição João Luiz</h4><br /><br />
			<h4 class="direita">Atualizado em 25/Janeiro/2019</h4><br /><br />
		</header>
	</hgroup>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('site.templates.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>