<div class="valorPatrimonios view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Valor Patrimonio'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Valor Patrimonio'), array('action' => 'edit', $valorPatrimonio['ValorPatrimonio']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Valor Patrimonio'), array('action' => 'delete', $valorPatrimonio['ValorPatrimonio']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $valorPatrimonio['ValorPatrimonio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Valor Patrimonios'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Valor Patrimonio'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($valorPatrimonio['ValorPatrimonio']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Financa'); ?></th>
		<td>
			<?php echo $this->Html->link($valorPatrimonio['Financa']['id'], array('controller' => 'financas', 'action' => 'view', $valorPatrimonio['Financa']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ano'); ?></th>
		<td>
			<?php echo h($valorPatrimonio['ValorPatrimonio']['ano']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Terra'); ?></th>
		<td>
			<?php echo h($valorPatrimonio['ValorPatrimonio']['terra']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Estrutura Fisica'); ?></th>
		<td>
			<?php echo h($valorPatrimonio['ValorPatrimonio']['estrutura_fisica']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Equipamento'); ?></th>
		<td>
			<?php echo h($valorPatrimonio['ValorPatrimonio']['equipamento']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Aplicacao Financeira'); ?></th>
		<td>
			<?php echo h($valorPatrimonio['ValorPatrimonio']['aplicacao_financeira']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Em Estoque'); ?></th>
		<td>
			<?php echo h($valorPatrimonio['ValorPatrimonio']['em_estoque']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Outro'); ?></th>
		<td>
			<?php echo h($valorPatrimonio['ValorPatrimonio']['outro']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Especificar Outro'); ?></th>
		<td>
			<?php echo h($valorPatrimonio['ValorPatrimonio']['especificar_outro']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

