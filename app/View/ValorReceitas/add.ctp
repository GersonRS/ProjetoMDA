<div class="valorReceitas form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Add Valor Receita'); ?></h1>
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

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Valor Receitas'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Financas'), array('controller' => 'financas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Financa'), array('controller' => 'financas', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('ValorReceita', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('financa_id', array('class' => 'form-control', 'placeholder' => 'Financa Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('ano', array('class' => 'form-control', 'placeholder' => 'Ano'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('valor_receita', array('class' => 'form-control', 'placeholder' => 'Valor Receita'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('doacoes', array('class' => 'form-control', 'placeholder' => 'Doacoes'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('taxas', array('class' => 'form-control', 'placeholder' => 'Taxas'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('aluguel_outros_servico', array('class' => 'form-control', 'placeholder' => 'Aluguel Outros Servico'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('rendimento_financeiro', array('class' => 'form-control', 'placeholder' => 'Rendimento Financeiro'));?>
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
