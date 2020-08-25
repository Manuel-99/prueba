<?php $__env->startSection('title', 'Editar'); ?>

<?php $__env->startSection('content'); ?>
	<form class="form-group" method="POST" action="/trainer/<?php echo e($trainer->slug); ?>" enctype="multipart/form-data" style="margin: 30px;">
		<?php echo method_field('PUT'); ?>
		<?php echo csrf_field(); ?>
		<div class="form-group">
			
			<label>Nombre</label>
			<input type="text" class="form-group" name="txtNombre" value="<?php echo e($trainer->name); ?>">
		</div>

		<div class="form-group">
			
			<label>Avatar</label>
			<input type="file" class="form-group" name="txtAvatar">
		</div>

		<button type="submit" class="btn btn-primary">GUARDAR</button>	
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/manu/Escritorio/proyectos/web/PokeUsers/resources/views/trainers/edit.blade.php ENDPATH**/ ?>