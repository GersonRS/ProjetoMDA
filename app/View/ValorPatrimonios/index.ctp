<div class="valorPatrimonios index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Valor Patrimonios'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Valor Patrimonio'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Financas'), array('controller' => 'financas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Financa'), array('controller' => 'financas', 'action' => 'add'), array('escape' => false)); ?> </li>
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
						<th><?php echo $this->Paginator->sort('financa_id'); ?></th>
						<th><?php echo $this->Paginator->sort('ano'); ?></th>
						<th><?php echo $this->Paginator->sort('terra'); ?></th>
						<th><?php echo $this->Paginator->sort('estrutura_fisica'); ?></th>
						<th><?php echo $this->Paginator->sort('equipamento'); ?></th>
						<th><?php echo $this->Paginator->sort('aplicacao_financeira'); ?></th>
						<th><?php echo $this->Paginator->sort('em_estoque'); ?></th>
						<th><?php echo $this->Paginator->sort('outro'); ?></th>
						<th><?php echo $this->Paginator->sort('especificar_outro'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($valorPatrimonios as $valorPatrimonio): ?>
					<tr>
						<td><?php echo h($valorPatrimonio['ValorPatrimonio']['id']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($valorPatrimonio['Financa']['id'], array('controller' => 'financas', 'action' => 'view', $valorPatrimonio['Financa']['id'])); ?>
		</td>
						<td><?php echo h($valorPatrimonio['ValorPatrimonio']['ano']); ?>&nbsp;</td>
						<td><?php echo h($valorPatrimonio['ValorPatrimonio']['terra']); ?>&nbsp;</td>
						<td><?php echo h($valorPatrimonio['ValorPatrimonio']['estrutura_fisica']); ?>&nbsp;</td>
						<td><?php echo h($valorPatrimonio['ValorPatrimonio']['equipamento']); ?>&nbsp;</td>
						<td><?php echo h($valorPatrimonio['ValorPatrimonio']['aplicacao_financeira']); ?>&nbsp;</td>
						<td><?php echo h($valorPatrimonio['ValorPatrimonio']['em_estoque']); ?>&nbsp;</td>
						<td><?php echo h($valorPatrimonio['ValorPatrimonio']['outro']); ?>&nbsp;</td>
						<td><?php echo h($valorPatrimonio['ValorPatrimonio']['especificar_outro']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $valorPatrimonio['ValorPatrimonio']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $valorPatrimonio['ValorPatrimonio']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $valorPatrimonio['ValorPatrimonio']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $valorPatrimonio['ValorPatrimonio']['id'])); ?>
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