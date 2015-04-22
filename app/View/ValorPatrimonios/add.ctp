<div class="valorPatrimonios form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Add Valor Patrimonio'); ?></h1>
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

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Valor Patrimonios'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Financas'), array('controller' => 'financas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Financa'), array('controller' => 'financas', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('ValorPatrimonio', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('financa_id', array('class' => 'form-control', 'placeholder' => 'Financa Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('ano', array('class' => 'form-control', 'placeholder' => 'Ano'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('terra', array('class' => 'form-control', 'placeholder' => 'Terra'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('estrutura_fisica', array('class' => 'form-control', 'placeholder' => 'Estrutura Fisica'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('equipamento', array('class' => 'form-control', 'placeholder' => 'Equipamento'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('aplicacao_financeira', array('class' => 'form-control', 'placeholder' => 'Aplicacao Financeira'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('em_estoque', array('class' => 'form-control', 'placeholder' => 'Em Estoque'));?>
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
