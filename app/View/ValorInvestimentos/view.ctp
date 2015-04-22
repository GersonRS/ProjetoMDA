<div class="valorInvestimentos view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Valor Investimento'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Valor Investimento'), array('action' => 'edit', $valorInvestimento['ValorInvestimento']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Valor Investimento'), array('action' => 'delete', $valorInvestimento['ValorInvestimento']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $valorInvestimento['ValorInvestimento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Valor Investimentos'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Valor Investimento'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($valorInvestimento['ValorInvestimento']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Financa'); ?></th>
		<td>
			<?php echo $this->Html->link($valorInvestimento['Financa']['id'], array('controller' => 'financas', 'action' => 'view', $valorInvestimento['Financa']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ano'); ?></th>
		<td>
			<?php echo h($valorInvestimento['ValorInvestimento']['ano']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Terra'); ?></th>
		<td>
			<?php echo h($valorInvestimento['ValorInvestimento']['terra']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Estrutura Fisica'); ?></th>
		<td>
			<?php echo h($valorInvestimento['ValorInvestimento']['estrutura_fisica']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Equipamento'); ?></th>
		<td>
			<?php echo h($valorInvestimento['ValorInvestimento']['equipamento']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Aplicacao Financeira'); ?></th>
		<td>
			<?php echo h($valorInvestimento['ValorInvestimento']['aplicacao_financeira']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Outro'); ?></th>
		<td>
			<?php echo h($valorInvestimento['ValorInvestimento']['outro']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Especificar Outro'); ?></th>
		<td>
			<?php echo h($valorInvestimento['ValorInvestimento']['especificar_outro']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

