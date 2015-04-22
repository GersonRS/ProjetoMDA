<div class="aterprodutos form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Edit Aterproduto'); ?></h1>
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

																<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Aterproduto.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Aterproduto.id'))); ?></li>
																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Aterprodutos'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Cooperativas'), array('controller' => 'cooperativas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Cooperativa'), array('controller' => 'cooperativas', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Aterproduto', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('cooperativa_id', array('class' => 'form-control', 'placeholder' => 'Cooperativa Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('tipo_inst_publica', array('class' => 'form-control', 'placeholder' => 'Tipo Inst Publica'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('tipo_inst_privada', array('class' => 'form-control', 'placeholder' => 'Tipo Inst Privada'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('tipo_ONG', array('class' => 'form-control', 'placeholder' => 'Tipo ONG'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('tipo_SEBRAE', array('class' => 'form-control', 'placeholder' => 'Tipo SEBRAE'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('tipo_universidade', array('class' => 'form-control', 'placeholder' => 'Tipo Universidade'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('tipo_outro', array('class' => 'form-control', 'placeholder' => 'Tipo Outro'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('nao_acessa', array('class' => 'form-control', 'placeholder' => 'Nao Acessa'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('especificar_inst_publica', array('class' => 'form-control', 'placeholder' => 'Especificar Inst Publica'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('especificar_inst_privada', array('class' => 'form-control', 'placeholder' => 'Especificar Inst Privada'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('especificar_ONG', array('class' => 'form-control', 'placeholder' => 'Especificar ONG'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('especificar_universidade', array('class' => 'form-control', 'placeholder' => 'Especificar Universidade'));?>
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
