<div class="valorDespesas view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Valor Despesa'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Valor Despesa'), array('action' => 'edit', $valorDespesa['ValorDespesa']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Valor Despesa'), array('action' => 'delete', $valorDespesa['ValorDespesa']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $valorDespesa['ValorDespesa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Valor Despesas'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Valor Despesa'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Financas'), array('controller' => 'financas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Financa'), array('controller' => 'financas', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($valorDespesa['ValorDespesa']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Financa'); ?></th>
		<td>
			<?php echo $this->Html->link($valorDespesa['Financa']['id'], array('controller' => 'financas', 'action' => 'view', $valorDespesa['Financa']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ano'); ?></th>
		<td>
			<?php echo h($valorDespesa['ValorDespesa']['Ano']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Materia Prima'); ?></th>
		<td>
			<?php echo h($valorDespesa['ValorDespesa']['materia_prima']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Custo Operacional'); ?></th>
		<td>
			<?php echo h($valorDespesa['ValorDespesa']['custo_operacional']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Custo Administrativo'); ?></th>
		<td>
			<?php echo h($valorDespesa['ValorDespesa']['custo_administrativo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Folha Pagamento'); ?></th>
		<td>
			<?php echo h($valorDespesa['ValorDespesa']['folha_pagamento']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Outro'); ?></th>
		<td>
			<?php echo h($valorDespesa['ValorDespesa']['outro']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Especificar Outro'); ?></th>
		<td>
			<?php echo h($valorDespesa['ValorDespesa']['especificar_outro']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

