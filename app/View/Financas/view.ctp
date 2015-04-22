<div class="financas view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Financa'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Financa'), array('action' => 'edit', $financa['Financa']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Financa'), array('action' => 'delete', $financa['Financa']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $financa['Financa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Financas'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Financa'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Cooperativas'), array('controller' => 'cooperativas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Cooperativa'), array('controller' => 'cooperativas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Valor Despesas'), array('controller' => 'valor_despesas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Valor Despesa'), array('controller' => 'valor_despesas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Valor Investimentos'), array('controller' => 'valor_investimentos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Valor Investimento'), array('controller' => 'valor_investimentos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Valor Patrimonios'), array('controller' => 'valor_patrimonios', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Valor Patrimonio'), array('controller' => 'valor_patrimonios', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Valor Receitas'), array('controller' => 'valor_receitas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Valor Receita'), array('controller' => 'valor_receitas', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($financa['Financa']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cooperativa'); ?></th>
		<td>
			<?php echo $this->Html->link($financa['Cooperativa']['id'], array('controller' => 'cooperativas', 'action' => 'view', $financa['Cooperativa']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Software Especifico'); ?></th>
		<td>
			<?php echo h($financa['Financa']['software_especifico']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Planilha Excel'); ?></th>
		<td>
			<?php echo h($financa['Financa']['planilha_excel']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Planilha Manual'); ?></th>
		<td>
			<?php echo h($financa['Financa']['planilha_manual']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Livro Caixa'); ?></th>
		<td>
			<?php echo h($financa['Financa']['livro_caixa']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Outro Controle Manual'); ?></th>
		<td>
			<?php echo h($financa['Financa']['outro_controle_manual']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nao EFeito'); ?></th>
		<td>
			<?php echo h($financa['Financa']['nao_EFeito']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Outro'); ?></th>
		<td>
			<?php echo h($financa['Financa']['outro']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Especificar Outro'); ?></th>
		<td>
			<?php echo h($financa['Financa']['especificar_outro']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Separa Custos'); ?></th>
		<td>
			<?php echo h($financa['Financa']['separa_custos']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Valor Despesas'); ?></h3>
	<?php if (!empty($financa['ValorDespesa'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Financa Id'); ?></th>
		<th><?php echo __('Ano'); ?></th>
		<th><?php echo __('Materia Prima'); ?></th>
		<th><?php echo __('Custo Operacional'); ?></th>
		<th><?php echo __('Custo Administrativo'); ?></th>
		<th><?php echo __('Folha Pagamento'); ?></th>
		<th><?php echo __('Outro'); ?></th>
		<th><?php echo __('Especificar Outro'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($financa['ValorDespesa'] as $valorDespesa): ?>
		<tr>
			<td><?php echo $valorDespesa['id']; ?></td>
			<td><?php echo $valorDespesa['financa_id']; ?></td>
			<td><?php echo $valorDespesa['Ano']; ?></td>
			<td><?php echo $valorDespesa['materia_prima']; ?></td>
			<td><?php echo $valorDespesa['custo_operacional']; ?></td>
			<td><?php echo $valorDespesa['custo_administrativo']; ?></td>
			<td><?php echo $valorDespesa['folha_pagamento']; ?></td>
			<td><?php echo $valorDespesa['outro']; ?></td>
			<td><?php echo $valorDespesa['especificar_outro']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'valor_despesas', 'action' => 'view', $valorDespesa['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'valor_despesas', 'action' => 'edit', $valorDespesa['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'valor_despesas', 'action' => 'delete', $valorDespesa['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $valorDespesa['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Valor Despesa'), array('controller' => 'valor_despesas', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Valor Investimentos'); ?></h3>
	<?php if (!empty($financa['ValorInvestimento'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Financa Id'); ?></th>
		<th><?php echo __('Ano'); ?></th>
		<th><?php echo __('Terra'); ?></th>
		<th><?php echo __('Estrutura Fisica'); ?></th>
		<th><?php echo __('Equipamento'); ?></th>
		<th><?php echo __('Aplicacao Financeira'); ?></th>
		<th><?php echo __('Outro'); ?></th>
		<th><?php echo __('Especificar Outro'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($financa['ValorInvestimento'] as $valorInvestimento): ?>
		<tr>
			<td><?php echo $valorInvestimento['id']; ?></td>
			<td><?php echo $valorInvestimento['financa_id']; ?></td>
			<td><?php echo $valorInvestimento['ano']; ?></td>
			<td><?php echo $valorInvestimento['terra']; ?></td>
			<td><?php echo $valorInvestimento['estrutura_fisica']; ?></td>
			<td><?php echo $valorInvestimento['equipamento']; ?></td>
			<td><?php echo $valorInvestimento['aplicacao_financeira']; ?></td>
			<td><?php echo $valorInvestimento['outro']; ?></td>
			<td><?php echo $valorInvestimento['especificar_outro']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'valor_investimentos', 'action' => 'view', $valorInvestimento['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'valor_investimentos', 'action' => 'edit', $valorInvestimento['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'valor_investimentos', 'action' => 'delete', $valorInvestimento['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $valorInvestimento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Valor Investimento'), array('controller' => 'valor_investimentos', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Valor Patrimonios'); ?></h3>
	<?php if (!empty($financa['ValorPatrimonio'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Financa Id'); ?></th>
		<th><?php echo __('Ano'); ?></th>
		<th><?php echo __('Terra'); ?></th>
		<th><?php echo __('Estrutura Fisica'); ?></th>
		<th><?php echo __('Equipamento'); ?></th>
		<th><?php echo __('Aplicacao Financeira'); ?></th>
		<th><?php echo __('Em Estoque'); ?></th>
		<th><?php echo __('Outro'); ?></th>
		<th><?php echo __('Especificar Outro'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($financa['ValorPatrimonio'] as $valorPatrimonio): ?>
		<tr>
			<td><?php echo $valorPatrimonio['id']; ?></td>
			<td><?php echo $valorPatrimonio['financa_id']; ?></td>
			<td><?php echo $valorPatrimonio['ano']; ?></td>
			<td><?php echo $valorPatrimonio['terra']; ?></td>
			<td><?php echo $valorPatrimonio['estrutura_fisica']; ?></td>
			<td><?php echo $valorPatrimonio['equipamento']; ?></td>
			<td><?php echo $valorPatrimonio['aplicacao_financeira']; ?></td>
			<td><?php echo $valorPatrimonio['em_estoque']; ?></td>
			<td><?php echo $valorPatrimonio['outro']; ?></td>
			<td><?php echo $valorPatrimonio['especificar_outro']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'valor_patrimonios', 'action' => 'view', $valorPatrimonio['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'valor_patrimonios', 'action' => 'edit', $valorPatrimonio['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'valor_patrimonios', 'action' => 'delete', $valorPatrimonio['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $valorPatrimonio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Valor Patrimonio'), array('controller' => 'valor_patrimonios', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Valor Receitas'); ?></h3>
	<?php if (!empty($financa['ValorReceita'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Financa Id'); ?></th>
		<th><?php echo __('Ano'); ?></th>
		<th><?php echo __('Valor Receita'); ?></th>
		<th><?php echo __('Doacoes'); ?></th>
		<th><?php echo __('Taxas'); ?></th>
		<th><?php echo __('Aluguel Outros Servico'); ?></th>
		<th><?php echo __('Rendimento Financeiro'); ?></th>
		<th><?php echo __('Outro'); ?></th>
		<th><?php echo __('Especificar Outro'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($financa['ValorReceita'] as $valorReceita): ?>
		<tr>
			<td><?php echo $valorReceita['id']; ?></td>
			<td><?php echo $valorReceita['financa_id']; ?></td>
			<td><?php echo $valorReceita['ano']; ?></td>
			<td><?php echo $valorReceita['valor_receita']; ?></td>
			<td><?php echo $valorReceita['doacoes']; ?></td>
			<td><?php echo $valorReceita['taxas']; ?></td>
			<td><?php echo $valorReceita['aluguel_outros_servico']; ?></td>
			<td><?php echo $valorReceita['rendimento_financeiro']; ?></td>
			<td><?php echo $valorReceita['outro']; ?></td>
			<td><?php echo $valorReceita['especificar_outro']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'valor_receitas', 'action' => 'view', $valorReceita['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'valor_receitas', 'action' => 'edit', $valorReceita['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'valor_receitas', 'action' => 'delete', $valorReceita['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $valorReceita['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Valor Receita'), array('controller' => 'valor_receitas', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
