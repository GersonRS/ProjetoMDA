<?php 
	echo $this->Form->create('Group', array('class' => 'form-horizontal', 'role' => 'form')); 
	echo $this->Form->input('id');
?>
<div class="form-group <?php echo $this->Form->isFieldError('name') ? 'has-error' : '' ?>">
<label class="col-sm-2 control-label"><?php echo __d('admin', 'Name:'); ?></label>
<div class="col-sm-10">
  <?php 
	echo $this->Form->input('name', array(
	  'div' => false,
	  'label' => false,
	  'class' => 'form-control',
	  'placeholder' => 'Name'
	  ));
   ?>
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
   <?php echo $this->Form->end(array('label' => __d('admin', 'Save'), 'class' => 'btn btn-success')); ?>
</div>
</div>