<div class="financas form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Add Financa'); ?></h1>
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

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Financas'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Cooperativas'), array('controller' => 'cooperativas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Cooperativa'), array('controller' => 'cooperativas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Valor Despesas'), array('controller' => 'valor_despesas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Valor Despesa'), array('controller' => 'valor_despesas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Valor Investimentos'), array('controller' => 'valor_investimentos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Valor Investimento'), array('controller' => 'valor_investimentos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Valor Patrimonios'), array('controller' => 'valor_patrimonios', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Valor Patrimonio'), array('controller' => 'valor_patrimonios', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Valor Receitas'), array('controller' => 'valor_receitas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Valor Receita'), array('controller' => 'valor_receitas', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Financa', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('cooperativa_id', array('class' => 'form-control', 'placeholder' => 'Cooperativa Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('software_especifico', array('class' => 'form-control', 'placeholder' => 'Software Especifico'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('planilha_excel', array('class' => 'form-control', 'placeholder' => 'Planilha Excel'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('planilha_manual', array('class' => 'form-control', 'placeholder' => 'Planilha Manual'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('livro_caixa', array('class' => 'form-control', 'placeholder' => 'Livro Caixa'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('outro_controle_manual', array('class' => 'form-control', 'placeholder' => 'Outro Controle Manual'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('nao_EFeito', array('class' => 'form-control', 'placeholder' => 'Nao EFeito'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('outro', array('class' => 'form-control', 'placeholder' => 'Outro'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('especificar_outro', array('class' => 'form-control', 'placeholder' => 'Especificar Outro'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('separa_custos', array('class' => 'form-control', 'placeholder' => 'Separa Custos'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
