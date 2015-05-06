<div class="comercializados view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Comercializado'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Comercializado'), array('action' => 'edit', $comercializado['Comercializado']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Comercializado'), array('action' => 'delete', $comercializado['Comercializado']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $comercializado['Comercializado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Comercializados'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Comercializado'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Produtos'), array('controller' => 'produtos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Produto'), array('controller' => 'produtos', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($comercializado['Comercializado']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Produto'); ?></th>
		<td>
			<?php echo $this->Html->link($comercializado['Produto']['Nome'], array('controller' => 'produtos', 'action' => 'view', $comercializado['Produto']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cooperativa'); ?></th>
		<td>
			<?php echo $this->Html->link($comercializado['Cooperativa']['razao_social'], array('controller' => 'cooperativas', 'action' => 'view', $comercializado['Cooperativa']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Qtd PAA'); ?></th>
		<td>
			<?php echo h($comercializado['Comercializado']['qtd_PAA']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Qtd PNAE'); ?></th>
		<td>
			<?php echo h($comercializado['Comercializado']['qtd_PNAE']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Qtd Mercado Livre'); ?></th>
		<td>
			<?php echo h($comercializado['Comercializado']['qtd_mercado_livre']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Qtd Bio Disel'); ?></th>
		<td>
			<?php echo h($comercializado['Comercializado']['qtd_bio_disel']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tipo Producao'); ?></th>
		<td>
			<?php echo h($comercializado['Comercializado']['tipo_producao']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tem Registro'); ?></th>
		<td>
			<?php echo h($comercializado['Comercializado']['tem_registro']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Beneficiado Processado'); ?></th>
		<td>
			<?php echo h($comercializado['Comercializado']['beneficiado_processado']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Posse Estrutura Processamento'); ?></th>
		<td>
			<?php echo h($comercializado['Comercializado']['posse_estrutura_processamento']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Unidade Medida Produto'); ?></th>
		<td>
			<?php echo h($comercializado['Comercializado']['unidade_medida_produto']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

