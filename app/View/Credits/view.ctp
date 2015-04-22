<div class="credits view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Credit'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Credit'), array('action' => 'edit', $credit['Credit']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Credit'), array('action' => 'delete', $credit['Credit']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $credit['Credit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Credits'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Credit'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($credit['Credit']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cooperativa'); ?></th>
		<td>
			<?php echo $this->Html->link($credit['Cooperativa']['id'], array('controller' => 'cooperativas', 'action' => 'view', $credit['Cooperativa']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Pronaf'); ?></th>
		<td>
			<?php echo h($credit['Credit']['pronaf']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('BNDES'); ?></th>
		<td>
			<?php echo h($credit['Credit']['BNDES']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Programas Estaduais'); ?></th>
		<td>
			<?php echo h($credit['Credit']['programas_estaduais']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Outro'); ?></th>
		<td>
			<?php echo h($credit['Credit']['Outro']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Especificar Outro'); ?></th>
		<td>
			<?php echo h($credit['Credit']['especificar_outro']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nao Acessa'); ?></th>
		<td>
			<?php echo h($credit['Credit']['nao_acessa']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

