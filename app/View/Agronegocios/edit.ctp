<div class="agronegocios form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Edit Agronegocio'); ?></h1>
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

																<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Agronegocio.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Agronegocio.id'))); ?></li>
																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Agronegocios'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Cooperativas'), array('controller' => 'cooperativas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Cooperativa'), array('controller' => 'cooperativas', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Agronegocio', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('cooperativa_id', array('class' => 'form-control', 'placeholder' => 'Cooperativa Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('tamanho_unidade', array('class' => 'form-control', 'placeholder' => 'Tamanho Unidade'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('unidade_medida_processamento', array('class' => 'form-control', 'placeholder' => 'Unidade Medida Processamento'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('qtd_cap_diaria_processamento', array('class' => 'form-control', 'placeholder' => 'Qtd Cap Diaria Processamento'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('unidade_medida_armazenamento_materia_prima', array('class' => 'form-control', 'placeholder' => 'Unidade Medida Armazenamento Materia Prima'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('qtd_cap_diaria_armazenamento_materia_prima', array('class' => 'form-control', 'placeholder' => 'Qtd Cap Diaria Armazenamento Materia Prima'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('unidade_medida_armazenamento_produto_final', array('class' => 'form-control', 'placeholder' => 'Unidade Medida Armazenamento Produto Final'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('qtd_cap_diaria_armazenamento_produto_final', array('class' => 'form-control', 'placeholder' => 'Qtd Cap Diaria Armazenamento Produto Final'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('tipo_estrutura', array('class' => 'form-control', 'placeholder' => 'Tipo Estrutura'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('tipo_propriedade_estrutura', array('class' => 'form-control', 'placeholder' => 'Tipo Propriedade Estrutura'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('alvara_sanitario', array('class' => 'form-control', 'placeholder' => 'Alvara Sanitario'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('alvara_publico', array('class' => 'form-control', 'placeholder' => 'Alvara Publico'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
