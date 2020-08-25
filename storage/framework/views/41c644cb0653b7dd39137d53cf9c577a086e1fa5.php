<?php $__env->startSection('title','Mostrar'); ?>

<?php $__env->startSection('content'); ?>
	
	<img src="/images/<?php echo e($trainer->avatar); ?>" class="card-img-top rounded-circle mx-auto d-block" style="width: 200px; height: 200px; background: #EFEFEF; margin-top: 20px;">
	<div class="text-center">
	
		<h5 class="card-title"><?php echo e($trainer->name); ?></h5>
		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		<a href="/trainer/<?php echo e($trainer->slug); ?>/edit" class="btn btn-primary">Editar</a>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/manu/Escritorio/proyectos/web/PokeUsers/resources/views/trainers/show.blade.php ENDPATH**/ ?>