<div class="container">
	<div class="row">
		<div class="col col-xs-12">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Form->create('Reseller', array('class' => 'form-signin')); ?>
 <?php echo $this->Form->input('Reseller.id', array('type' => "hidden")); ?>
 <?php echo $this->Form->input('Reseller.name', array('label' => "Başlık", 'div' => array('class' => 'form-group'), 'class' => 'form-control')); ?>
 <?php echo $this->Form->input('Reseller.lat', array('label' => "Lat", 'div' => array('class' => 'form-group'), 'class' => 'form-control')); ?>
 <?php echo $this->Form->input('Reseller.lng', array('label' => "Lng", 'div' => array('class' => 'form-group'), 'class' => 'form-control')); ?>
			<?php echo $this->Form->button('Kaydet', array('type' => 'submit', 'class' => 'btn btn-primary')); ?>
			<?php echo $this->Form->end(null); ?>
		</div>
	</div>
</div>