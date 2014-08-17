<?php echo $this->Form->create('UserLogin', array('class' => 'form-signin')); ?>
<div class="modal fade in" style="display:block;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">
          <i class="fa fa-slack" style="vertical-align:-2px;"></i> Brk
        </h4>
      </div>
      <div class="modal-body">
  	     <?php echo $this->Session->flash(); ?>
  	     <div class="form-group">
  	       <?php echo $this->Form->input('mail', array('label' => false, 'div' => false, 'type' => 'email', 'class' => 'form-control', 'placeholder' => 'E-posta adresi', 'required' => 'required', 'autofocus' => 'autofocus')); ?>
  		  </div>
  		  <div class="form-group">
  	     <?php echo $this->Form->input('password', array('label' => false, 'div' => false, 'type' => 'password', 'class' => 'form-control', 'placeholder' => 'Şifre', 'required' => 'required', 'autofocus' => 'autofocus')); ?>
  	  	</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Oturum aç</button>
      </div>
    </div>
  </div>
</div>
<?php echo $this->Form->end(null); ?>