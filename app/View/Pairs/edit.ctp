<div class="pairs form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Edit Pair'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row row-offcanvas row-offcanvas-left">

		<div class="col-md-3 sidebar-offcanvas pre-scrollable">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">

																<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Pair.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Pair.id'))); ?></li>
																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Pairs'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Ufs'), array('controller' => 'ufs', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Uf'), array('controller' => 'ufs', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Nucleos'), array('controller' => 'nucleos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Nucleo'), array('controller' => 'nucleos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Checklists'), array('controller' => 'checklists', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Checklist'), array('controller' => 'checklists', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Pair', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('polo', array('class' => 'form-control', 'placeholder' => 'Polo'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('organizacao', array('class' => 'form-control', 'placeholder' => 'Organizacao'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('cnpj', array('class' => 'form-control', 'placeholder' => 'Cnpj'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('razaosocial', array('class' => 'form-control', 'placeholder' => 'Razaosocial'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('endereco', array('class' => 'form-control', 'placeholder' => 'Endereco'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('cidade', array('class' => 'form-control', 'placeholder' => 'Cidade'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('uf_id', array('class' => 'form-control', 'placeholder' => 'Uf Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('cep', array('class' => 'form-control', 'placeholder' => 'Cep'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('telefone', array('class' => 'form-control', 'placeholder' => 'Telefone'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('fax', array('class' => 'form-control', 'placeholder' => 'Fax'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('monitor', array('class' => 'form-control', 'placeholder' => 'Monitor'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('nucleo_id', array('class' => 'form-control', 'placeholder' => 'Nucleo Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('assistente', array('class' => 'form-control', 'placeholder' => 'Assistente'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('usuario', array('class' => 'form-control', 'placeholder' => 'Usuario'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
