<?php if(Session::has('info')): ?>
<div class="alert aler-info">
<button type="button" class="close" data-dismiss="alert">
	&times;
</button>
<?php echo e(Session::get('info')); ?>	
</div>
<?php endif; ?>