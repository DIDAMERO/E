<?php $__env->startSection('content'); ?>
<div class="col-sm-8">
	<h2>
	Nuevo producto
	<a href="<?php echo e(route('products.index')); ?>" class="btn btn-default pull-right">Listado</a>	

	</h2>
	<?php echo Form::open(['route'=>'products.store']); ?>

	<?php echo $__env->make('products.fragment.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo Form::close(); ?>

</div>
<div class="col-sm-4">
	<?php echo $__env->make('products.fragment.aside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>