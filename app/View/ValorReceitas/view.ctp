<div class="valorReceitas view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Valor Receita'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Valor Receita'), array('action' => 'edit', $valorReceita['ValorReceita']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Valor Receita'), array('action' => 'delete', $valorReceita['ValorReceita']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $valorReceita['ValorReceita']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Valor Receitas'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Valor Receita'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($valorReceita['ValorReceita']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Financa'); ?></th>
		<td>
			<?php echo $this->Html->link($valorReceita['Financa']['id'], array('controller' => 'financas', 'action' => 'view', $valorReceita['Financa']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ano'); ?></th>
		<td>
			<?php echo h($valorReceita['ValorReceita']['ano']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Valor Receita'); ?></th>
		<td>
			<?php echo h($valorReceita['ValorReceita']['valor_receita']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Doacoes'); ?></th>
		<td>
			<?php echo h($valorReceita['ValorReceita']['doacoes']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Taxas'); ?></th>
		<td>
			<?php echo h($valorReceita['ValorReceita']['taxas']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Aluguel Outros Servico'); ?></th>
		<td>
			<?php echo h($valorReceita['ValorReceita']['aluguel_outros_servico']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Rendimento Financeiro'); ?></th>
		<td>
			<?php echo h($valorReceita['ValorReceita']['rendimento_financeiro']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Outro'); ?></th>
		<td>
			<?php echo h($valorReceita['ValorReceita']['outro']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Especificar Outro'); ?></th>
		<td>
			<?php echo h($valorReceita['ValorReceita']['especificar_outro']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

