<div class="faturamentos view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Faturamento'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Faturamento'), array('action' => 'edit', $faturamento['Faturamento']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Faturamento'), array('action' => 'delete', $faturamento['Faturamento']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $faturamento['Faturamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Faturamentos'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Faturamento'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($faturamento['Faturamento']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ano'); ?></th>
		<td>
			<?php echo h($faturamento['Faturamento']['ano']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cooperativa'); ?></th>
		<td>
			<?php echo $this->Html->link($faturamento['Cooperativa']['id'], array('controller' => 'cooperativas', 'action' => 'view', $faturamento['Cooperativa']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tipo Mercado'); ?></th>
		<td>
			<?php echo h($faturamento['Faturamento']['tipo_mercado']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Locais Venda'); ?></th>
		<td>
			<?php echo h($faturamento['Faturamento']['locais_venda']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Valor'); ?></th>
		<td>
			<?php echo h($faturamento['Faturamento']['valor']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

