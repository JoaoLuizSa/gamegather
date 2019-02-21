<?php $__env->startSection('pagina'); ?>
<!--<?php if(isset ($errors) && count($errors)>0): ?>
	<div class="alert alert-danger">
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<p><?php echo e($error); ?></p>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
	<?php endif; ?>-->
<?php if(isset($formu)): ?>
<form method="POST" action="<?php echo e(route('formulario.update', $formu->id)); ?>" class="primeiro" class="form">
	<?php echo method_field('PUT'); ?>

<?php else: ?>
<form method="POST" action="<?php echo e(route('formulario.store')); ?>" class="primeiro" class="form">
<?php endif; ?>
			<?php echo csrf_field(); ?>

			<h1 >Preencha por favor</h1>
			<label><p>Nome: <input type="text" name="name" value="<?php echo e(isset($formu->name) ? $formu->name : old('name')); ?>" required></p></label><br />
			<label><p>Email: <input type="text" name="email" value="<?php echo e(isset($formu->email) ? $formu->email : old('email')); ?>" required></p></label><br />
			<p>Idade:
			<select class="idade" name="idade">
					<option value="">Escolha sua idade</option>
					<?php $__currentLoopData = $idade; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($idad); ?>" 
					<?php if(isset($formu) && $formu->idade==$idad): ?>
						selected
					<?php endif; ?>	
					><?php echo e($idad); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
			</select></p><br />
			
			<p><fieldset><legend>Sexo: </legend>
				<input class="form-control" type="radio" name="sexo" value="1" /> Masculino
				<input class="form-control" type="radio" name="sexo" value="2" /> Feminino
			<input class="form-control" type="radio" name="sexo" value="3" /> Outro
				</fieldset></p><br />
			<p><textarea class="caixatext" name="descricao"  placeholder="Comentarios...." rows="10" cols="30" maxlength="1000" value="<?php echo e(isset($formu->descricao) ? $formu->descricao : old('descricao')); ?>"></textarea>
			</p><br />
		</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button class="btn btn-dark" type="reset">Limpar</button></p>
				<button type="submit" class="btn btn-primary">Enviar</button>
	  		</div>
	</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.templates.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>