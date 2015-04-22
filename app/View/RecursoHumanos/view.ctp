<div class="recursoHumanos view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Recurso Humano'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Recurso Humano'), array('action' => 'edit', $recursoHumano['RecursoHumano']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Recurso Humano'), array('action' => 'delete', $recursoHumano['RecursoHumano']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $recursoHumano['RecursoHumano']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Recurso Humanos'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Recurso Humano'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Cooperativas'), array('controller' => 'cooperativas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Cooperativa'), array('controller' => 'cooperativas', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($recursoHumano['RecursoHumano']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Perfil'); ?></th>
		<td>
			<?php echo h($recursoHumano['RecursoHumano']['perfil']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('QtdeProducaoPrimaria'); ?></th>
		<td>
			<?php echo h($recursoHumano['RecursoHumano']['qtdeProducaoPrimaria']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('QtdeAgroindustrializacao'); ?></th>
		<td>
			<?php echo h($recursoHumano['RecursoHumano']['qtdeAgroindustrializacao']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('QtdeComercializacao'); ?></th>
		<td>
			<?php echo h($recursoHumano['RecursoHumano']['qtdeComercializacao']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('QtdeGestao'); ?></th>
		<td>
			<?php echo h($recursoHumano['RecursoHumano']['qtdeGestao']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cooperativa'); ?></th>
		<td>
			<?php echo $this->Html->link($recursoHumano['Cooperativa']['id'], array('controller' => 'cooperativas', 'action' => 'view', $recursoHumano['Cooperativa']['id'])); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

