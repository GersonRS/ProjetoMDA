<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<?php echo $this->Html->link('voltar', 'javascript: history.back()',array('class'=>'btn btn-info btn-block')); ?>
		<div class="well bg-white">
			<?php echo $this->Form->create('User', array('role' => 'form', 'class' => 'form-signin')); ?>
			  <?php 
				echo $this->Form->input('username', array(
						'label' =>  __d('admin', 'username') . $this->Html->tag('span', ' *', array('class' => 'asterisk')),
						'div' => 'form-group',
						'class' => 'form-control',
						'placeholder' => __d('admin', 'Username')
					));
					echo $this->Form->input('password', array(
							'label' => __d('admin','password') . $this->Html->tag('span', ' *', array('class' => 'asterisk')),
							'div' => 'form-group',
							'class' => 'form-control',
							'placeholder' => __d('admin', 'Password'),
							'type' => 'password'
						));
			   ?>
			<?php echo $this->Form->end(array('label' => __d('admin', 'Login'), 'class' => 'btn btn-lg btn-primary btn-block')); ?>
			</div>
	</div>
</div>