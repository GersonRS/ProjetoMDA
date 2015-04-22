<div class="row">
<?php 
	echo $this->Form->create('User', array('class' => 'form-horizontal', 'role' => 'form'));
	echo $this->Form->input('id', array('value' => $this->request->pass[0]));
?>
<div class="form-group <?php echo $this->Form->isFieldError('password') ? 'has-error' : '' ?>">
  <label class="col-sm-2 control-label"><?php echo __d('admin', 'Password:'); ?></label>
  <div class="col-sm-10">
    <?php 
      echo $this->Form->input('password', array(
        'div' => false,
        'label' => false,
        'class' => 'form-control',
        ));
     ?>
  </div>
</div>
<div class="form-group <?php echo $this->Form->isFieldError('password_again') ? 'has-error' : '' ?>">
  <label class="col-sm-2 control-label"><?php echo __d('admin', 'Password again:'); ?></label>
  <div class="col-sm-10">
    <?php 
      echo $this->Form->password('password_again', array(
        'div' => false,
        'label' => false,
        'class' => 'form-control',
        ));
     ?>
  </div>
</div>
<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
     <?php echo $this->Form->end(array('label' => __d('admin', 'Save'), 'class' => 'btn btn-primary')); ?>
  </div>
</div>
</div>	