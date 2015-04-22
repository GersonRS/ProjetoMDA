<div class="emissaoNotas form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Add Emissao Nota'); ?></h1>
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

																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Emissao Notas'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Cooperativas'), array('controller' => 'cooperativas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Cooperativa'), array('controller' => 'cooperativas', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('EmissaoNota', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('cooperativa_id', array('class' => 'form-control', 'placeholder' => 'Cooperativa Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('blocoNFproprio', array('class' => 'form-control', 'placeholder' => 'BlocoNFproprio'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('blocoProdutor', array('class' => 'form-control', 'placeholder' => 'BlocoProdutor'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('NFEletronicaChavePropria', array('class' => 'form-control', 'placeholder' => 'NFEletronicaChavePropria'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('NFEletronicaChaveTerceiros', array('class' => 'form-control', 'placeholder' => 'NFEletronicaChaveTerceiros'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('NFavulsa', array('class' => 'form-control', 'placeholder' => 'NFavulsa'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('naoEmite', array('class' => 'form-control', 'placeholder' => 'NaoEmite'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
