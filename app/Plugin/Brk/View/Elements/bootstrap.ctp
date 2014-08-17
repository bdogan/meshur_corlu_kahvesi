<div class="alert alert-<?php echo isset($class) ? $class : "info"; ?> alert-dismissable">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<?php echo h($message); ?>
</div>