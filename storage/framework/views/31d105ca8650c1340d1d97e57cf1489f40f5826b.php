<?php $__env->startSection('title', 'Index'); ?>

<?php $__env->startSection('content'); ?>
	
	<div class="row">
		
		<?php $__currentLoopData = $trainer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tnr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

				<div class="col-sm">
					
					<div class="card text-center" style="width: 18rem;">
	  					<img src="/images/<?php echo e($tnr->avatar); ?>" class="card-img-top rounded-circle mx-auto d-block" style="width: 100px; height: 100px; background: #EFEFEF; margin-top: 20px;">
	  					<div class="card-body">
	    					<h5 class="card-title"><?php echo e($tnr->name); ?></h5>
	    					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	    					<a href="/trainer/<?php echo e($tnr->slug); ?>" class="btn btn-primary">Ver Más</a>
	  					</div>
					</div>
					
				</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
	<!--<label>Estas en index</label>-->
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/manu/Escritorio/proyectos/web/PokeUsers/resources/views/trainers/index.blade.php ENDPATH**/ ?>