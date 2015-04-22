<div class="produtos view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Produto'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Produto'), array('action' => 'edit', $produto['Produto']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Produto'), array('action' => 'delete', $produto['Produto']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $produto['Produto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Produtos'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Produto'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Comercializados'), array('controller' => 'comercializados', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Comercializado'), array('controller' => 'comercializados', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($produto['Produto']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nome'); ?></th>
		<td>
			<?php echo h($produto['Produto']['Nome']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('OrigemVegetal'); ?></th>
		<td>
			<?php echo h($produto['Produto']['OrigemVegetal']); ?>
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
	<h3><?php echo __('Related Comercializados'); ?></h3>
	<?php if (!empty($produto['Comercializado'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Produto Id'); ?></th>
		<th><?php echo __('Cooperativa Id'); ?></th>
		<th><?php echo __('Qtd PAA'); ?></th>
		<th><?php echo __('Qtd PNAE'); ?></th>
		<th><?php echo __('Qtd Mercado Livre'); ?></th>
		<th><?php echo __('Qtd Bio Disel'); ?></th>
		<th><?php echo __('Tipo Producao'); ?></th>
		<th><?php echo __('Tem Registro'); ?></th>
		<th><?php echo __('Beneficiado Processado'); ?></th>
		<th><?php echo __('Posse Estrutura Processamento'); ?></th>
		<th><?php echo __('Unidade Medida Produto'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($produto['Comercializado'] as $comercializado): ?>
		<tr>
			<td><?php echo $comercializado['id']; ?></td>
			<td><?php echo $comercializado['produto_id']; ?></td>
			<td><?php echo $comercializado['cooperativa_id']; ?></td>
			<td><?php echo $comercializado['qtd_PAA']; ?></td>
			<td><?php echo $comercializado['qtd_PNAE']; ?></td>
			<td><?php echo $comercializado['qtd_mercado_livre']; ?></td>
			<td><?php echo $comercializado['qtd_bio_disel']; ?></td>
			<td><?php echo $comercializado['tipo_producao']; ?></td>
			<td><?php echo $comercializado['tem_registro']; ?></td>
			<td><?php echo $comercializado['beneficiado_processado']; ?></td>
			<td><?php echo $comercializado['posse_estrutura_processamento']; ?></td>
			<td><?php echo $comercializado['unidade_medida_produto']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'comercializados', 'action' => 'view', $comercializado['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'comercializados', 'action' => 'edit', $comercializado['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'comercializados', 'action' => 'delete', $comercializado['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $comercializado['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Comercializado'), array('controller' => 'comercializados', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
