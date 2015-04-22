<div class="comercializados form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Add Comercializado'); ?></h1>
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

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Comercializados'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Produtos'), array('controller' => 'produtos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Produto'), array('controller' => 'produtos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Cooperativas'), array('controller' => 'cooperativas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Cooperativa'), array('controller' => 'cooperativas', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Comercializado', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('produto_id', array('class' => 'form-control', 'placeholder' => 'Produto Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('cooperativa_id', array('class' => 'form-control', 'placeholder' => 'Cooperativa Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('qtd_PAA', array('class' => 'form-control', 'placeholder' => 'Qtd PAA'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('qtd_PNAE', array('class' => 'form-control', 'placeholder' => 'Qtd PNAE'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('qtd_mercado_livre', array('class' => 'form-control', 'placeholder' => 'Qtd Mercado Livre'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('qtd_bio_disel', array('class' => 'form-control', 'placeholder' => 'Qtd Bio Disel'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('tipo_producao', array('class' => 'form-control', 'placeholder' => 'Tipo Producao'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('tem_registro', array('class' => 'form-control', 'placeholder' => 'Tem Registro'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('beneficiado_processado', array('class' => 'form-control', 'placeholder' => 'Beneficiado Processado'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('posse_estrutura_processamento', array('class' => 'form-control', 'placeholder' => 'Posse Estrutura Processamento'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('unidade_medida_produto', array('class' => 'form-control', 'placeholder' => 'Unidade Medida Produto'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
