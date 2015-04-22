<div class="financas index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Financas'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Financa'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Cooperativas'), array('controller' => 'cooperativas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Cooperativa'), array('controller' => 'cooperativas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Valor Despesas'), array('controller' => 'valor_despesas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Valor Despesa'), array('controller' => 'valor_despesas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Valor Investimentos'), array('controller' => 'valor_investimentos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Valor Investimento'), array('controller' => 'valor_investimentos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Valor Patrimonios'), array('controller' => 'valor_patrimonios', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Valor Patrimonio'), array('controller' => 'valor_patrimonios', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Valor Receitas'), array('controller' => 'valor_receitas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Valor Receita'), array('controller' => 'valor_receitas', 'action' => 'add'), array('escape' => false)); ?> </li>
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
						<th><?php echo $this->Paginator->sort('cooperativa_id'); ?></th>
						<th><?php echo $this->Paginator->sort('software_especifico'); ?></th>
						<th><?php echo $this->Paginator->sort('planilha_excel'); ?></th>
						<th><?php echo $this->Paginator->sort('planilha_manual'); ?></th>
						<th><?php echo $this->Paginator->sort('livro_caixa'); ?></th>
						<th><?php echo $this->Paginator->sort('outro_controle_manual'); ?></th>
						<th><?php echo $this->Paginator->sort('nao_EFeito'); ?></th>
						<th><?php echo $this->Paginator->sort('outro'); ?></th>
						<th><?php echo $this->Paginator->sort('especificar_outro'); ?></th>
						<th><?php echo $this->Paginator->sort('separa_custos'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($financas as $financa): ?>
					<tr>
						<td><?php echo h($financa['Financa']['id']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($financa['Cooperativa']['id'], array('controller' => 'cooperativas', 'action' => 'view', $financa['Cooperativa']['id'])); ?>
		</td>
						<td><?php echo h($financa['Financa']['software_especifico']); ?>&nbsp;</td>
						<td><?php echo h($financa['Financa']['planilha_excel']); ?>&nbsp;</td>
						<td><?php echo h($financa['Financa']['planilha_manual']); ?>&nbsp;</td>
						<td><?php echo h($financa['Financa']['livro_caixa']); ?>&nbsp;</td>
						<td><?php echo h($financa['Financa']['outro_controle_manual']); ?>&nbsp;</td>
						<td><?php echo h($financa['Financa']['nao_EFeito']); ?>&nbsp;</td>
						<td><?php echo h($financa['Financa']['outro']); ?>&nbsp;</td>
						<td><?php echo h($financa['Financa']['especificar_outro']); ?>&nbsp;</td>
						<td><?php echo h($financa['Financa']['separa_custos']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $financa['Financa']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $financa['Financa']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $financa['Financa']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $financa['Financa']['id'])); ?>
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