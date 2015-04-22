<div class="comercializados index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Comercializados'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row row-offcanvas row-offcanvas-left">

		<div class="col-md-3 sidebar-offcanvas pre-scrollable">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Comercializado'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Produtos'), array('controller' => 'produtos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Produto'), array('controller' => 'produtos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Cooperativas'), array('controller' => 'cooperativas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Cooperativa'), array('controller' => 'cooperativas', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9 table-responsive pre-scrollable">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('produto_id'); ?></th>
						<th><?php echo $this->Paginator->sort('cooperativa_id'); ?></th>
						<th><?php echo $this->Paginator->sort('qtd_PAA'); ?></th>
						<th><?php echo $this->Paginator->sort('qtd_PNAE'); ?></th>
						<th><?php echo $this->Paginator->sort('qtd_mercado_livre'); ?></th>
						<th><?php echo $this->Paginator->sort('qtd_bio_disel'); ?></th>
						<th><?php echo $this->Paginator->sort('tipo_producao'); ?></th>
						<th><?php echo $this->Paginator->sort('tem_registro'); ?></th>
						<th><?php echo $this->Paginator->sort('beneficiado_processado'); ?></th>
						<th><?php echo $this->Paginator->sort('posse_estrutura_processamento'); ?></th>
						<th><?php echo $this->Paginator->sort('unidade_medida_produto'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($comercializados as $comercializado): ?>
					<tr>
						<td><?php echo h($comercializado['Comercializado']['id']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($comercializado['Produto']['id'], array('controller' => 'produtos', 'action' => 'view', $comercializado['Produto']['id'])); ?>
		</td>
								<td>
			<?php echo $this->Html->link($comercializado['Cooperativa']['id'], array('controller' => 'cooperativas', 'action' => 'view', $comercializado['Cooperativa']['id'])); ?>
		</td>
						<td><?php echo h($comercializado['Comercializado']['qtd_PAA']); ?>&nbsp;</td>
						<td><?php echo h($comercializado['Comercializado']['qtd_PNAE']); ?>&nbsp;</td>
						<td><?php echo h($comercializado['Comercializado']['qtd_mercado_livre']); ?>&nbsp;</td>
						<td><?php echo h($comercializado['Comercializado']['qtd_bio_disel']); ?>&nbsp;</td>
						<td><?php echo h($comercializado['Comercializado']['tipo_producao']); ?>&nbsp;</td>
						<td><?php echo h($comercializado['Comercializado']['tem_registro']); ?>&nbsp;</td>
						<td><?php echo h($comercializado['Comercializado']['beneficiado_processado']); ?>&nbsp;</td>
						<td><?php echo h($comercializado['Comercializado']['posse_estrutura_processamento']); ?>&nbsp;</td>
						<td><?php echo h($comercializado['Comercializado']['unidade_medida_produto']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $comercializado['Comercializado']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $comercializado['Comercializado']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $comercializado['Comercializado']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $comercializado['Comercializado']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->