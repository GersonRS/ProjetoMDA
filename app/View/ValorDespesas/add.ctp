<div class="valorDespesas form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Add Valor Despesa'); ?></h1>
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

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Valor Despesas'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Financas'), array('controller' => 'financas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Financa'), array('controller' => 'financas', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('ValorDespesa', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('financa_id', array('class' => 'form-control', 'placeholder' => 'Financa Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('Ano', array('class' => 'form-control', 'placeholder' => 'Ano'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('materia_prima', array('class' => 'form-control', 'placeholder' => 'Materia Prima'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('custo_operacional', array('class' => 'form-control', 'placeholder' => 'Custo Operacional'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('custo_administrativo', array('class' => 'form-control', 'placeholder' => 'Custo Administrativo'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('folha_pagamento', array('class' => 'form-control', 'placeholder' => 'Folha Pagamento'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('outro', array('class' => 'form-control', 'placeholder' => 'Outro'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('especificar_outro', array('class' => 'form-control', 'placeholder' => 'Especificar Outro'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
