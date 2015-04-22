<div class="recursoHumanos form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Add Recurso Humano'); ?></h1>
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

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Recurso Humanos'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Cooperativas'), array('controller' => 'cooperativas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Cooperativa'), array('controller' => 'cooperativas', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('RecursoHumano', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('perfil', array('class' => 'form-control', 'placeholder' => 'Perfil'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('qtdeProducaoPrimaria', array('class' => 'form-control', 'placeholder' => 'QtdeProducaoPrimaria'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('qtdeAgroindustrializacao', array('class' => 'form-control', 'placeholder' => 'QtdeAgroindustrializacao'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('qtdeComercializacao', array('class' => 'form-control', 'placeholder' => 'QtdeComercializacao'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('qtdeGestao', array('class' => 'form-control', 'placeholder' => 'QtdeGestao'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('cooperativa_id', array('class' => 'form-control', 'placeholder' => 'Cooperativa Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
