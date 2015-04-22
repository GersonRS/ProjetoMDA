<div class="associados form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Add Associado'); ?></h1>
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

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Associados'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Cooperativas'), array('controller' => 'cooperativas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Cooperativa'), array('controller' => 'cooperativas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Socios'), array('controller' => 'socios', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Socio'), array('controller' => 'socios', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Associado', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('cooperativa_id', array('class' => 'form-control', 'placeholder' => 'Cooperativa Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('total_socios', array('class' => 'form-control', 'placeholder' => 'Total Socios'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('total_socios_ativos', array('class' => 'form-control', 'placeholder' => 'Total Socios Ativos'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('total_socios_ativos_DAP', array('class' => 'form-control', 'placeholder' => 'Total Socios Ativos DAP'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('total_agricultores_nao_socios', array('class' => 'form-control', 'placeholder' => 'Total Agricultores Nao Socios'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('total_agricultores_nao_socios_DAP', array('class' => 'form-control', 'placeholder' => 'Total Agricultores Nao Socios DAP'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
