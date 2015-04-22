<?php echo $this->Form->create('User', array('class' => 'form-horizontal', 'role' => 'form')); ?>
      <div class="form-group">
        <label class="col-sm-2 control-label"><?php echo __d('admin', 'Group'); ?></label>
        <div class="col-sm-10">
          <?php 
            echo $this->Form->input('group_id', array(
              'div' => false,
              'label' => false,
              'class' => 'form-control',
              ));
           ?>
        </div>
      </div>
      <div class="form-group <?php echo $this->Form->isFieldError('name') ? 'has-error' : '' ?>">
        <label class="col-sm-2 control-label"><?php echo __d('admin', 'Name'); ?></label>
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
      <div class="form-group <?php echo $this->Form->isFieldError('email') ? 'has-error' : '' ?>">
        <label for="inputPassword3" class="col-sm-2 control-label">E-mail</label>
        <div class="col-sm-10">
          <?php 
            echo $this->Form->input('email', array(
              'div' => false,
              'label' => false,
              'class' => 'form-control',
              'placeholder' => 'E-mail'
              ));
           ?>
        </div>
      </div>
      <div class="form-group <?php echo $this->Form->isFieldError('username') ? 'has-error' : '' ?>">
        <label for="inputPassword3" class="col-sm-2 control-label"><?php echo __d('admin', 'Username'); ?></label>
        <div class="col-sm-10">
          <?php 
            echo $this->Form->input('username', array(
              'div' => false,
              'label' => false,
              'class' => 'form-control',
              'placeholder' => 'Username'
              ));
           ?>
        </div>
      </div>
      <div class="form-group <?php echo $this->Form->isFieldError('password') ? 'has-error' : '' ?>">
        <label for="inputPassword3" class="col-sm-2 control-label"><?php echo __d('admin', 'Password'); ?></label>
        <div class="col-sm-10">
          <?php 
            echo $this->Form->input('password', array(
              'div' => false,
              'label' => false,
              'class' => 'form-control',
              'placeholder' => 'Password'
              ));
           ?>
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label"><?php echo __d('admin', 'status'); ?></label>
        <div class="col-sm-10">
          <?php 
            echo $this->Form->input('status', array(
              'div' => false,
              'label' => false,
              'class' => 'form-control',
              'type' => 'select',
              'options' => array(
                1 => __d('admin', 'Active'),
                0 => __d('admin', 'Unactive'),
                )
              ));
           ?>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
           <?php echo $this->Form->end(array('label' => __d('admin', 'Save'), 'class' => 'btn btn-success')); ?>
        </div>
      </div>