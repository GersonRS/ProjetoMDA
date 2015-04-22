<div class="logisticas form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Edit Logistica'); ?></h1>
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

																<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Logistica.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Logistica.id'))); ?></li>
																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Logisticas'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Cooperativas'), array('controller' => 'cooperativas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Cooperativa'), array('controller' => 'cooperativas', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Logistica', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('cooperativa_id', array('class' => 'form-control', 'placeholder' => 'Cooperativa Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('meio_transp_proprio', array('class' => 'form-control', 'placeholder' => 'Meio Transp Proprio'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('meio_transp_associado', array('class' => 'form-control', 'placeholder' => 'Meio Transp Associado'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('meio_transp_terceirizado', array('class' => 'form-control', 'placeholder' => 'Meio Transp Terceirizado'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('meio_transp_comodato', array('class' => 'form-control', 'placeholder' => 'Meio Transp Comodato'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('meio_transp_nao_aplica', array('class' => 'form-control', 'placeholder' => 'Meio Transp Nao Aplica'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('arm_materia_prima_proprio', array('class' => 'form-control', 'placeholder' => 'Arm Materia Prima Proprio'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('arm_materia_prima_associado', array('class' => 'form-control', 'placeholder' => 'Arm Materia Prima Associado'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('arm_materia_prima_terceirizado', array('class' => 'form-control', 'placeholder' => 'Arm Materia Prima Terceirizado'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('arm_materia_prima_comodato', array('class' => 'form-control', 'placeholder' => 'Arm Materia Prima Comodato'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('arm_materia_prima_nao_aplica', array('class' => 'form-control', 'placeholder' => 'Arm Materia Prima Nao Aplica'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('arm_produto_proprio', array('class' => 'form-control', 'placeholder' => 'Arm Produto Proprio'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('arm_produto_associado', array('class' => 'form-control', 'placeholder' => 'Arm Produto Associado'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('arm_produto_terceirizado', array('class' => 'form-control', 'placeholder' => 'Arm Produto Terceirizado'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('arm_produto_comodato', array('class' => 'form-control', 'placeholder' => 'Arm Produto Comodato'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('arm_produto_nao_aplica', array('class' => 'form-control', 'placeholder' => 'Arm Produto Nao Aplica'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('participa_rede_comercio', array('class' => 'form-control', 'placeholder' => 'Participa Rede Comercio'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('participa_rede_comercio_especificar', array('class' => 'form-control', 'placeholder' => 'Participa Rede Comercio Especificar'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
