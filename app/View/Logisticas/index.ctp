<div class="logisticas index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Logisticas'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Logistica'), array('action' => 'add'), array('escape' => false)); ?></li>
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
						<th><?php echo $this->Paginator->sort('cooperativa_id'); ?></th>
						<th><?php echo $this->Paginator->sort('meio_transp_proprio'); ?></th>
						<th><?php echo $this->Paginator->sort('meio_transp_associado'); ?></th>
						<th><?php echo $this->Paginator->sort('meio_transp_terceirizado'); ?></th>
						<th><?php echo $this->Paginator->sort('meio_transp_comodato'); ?></th>
						<th><?php echo $this->Paginator->sort('meio_transp_nao_aplica'); ?></th>
						<th><?php echo $this->Paginator->sort('arm_materia_prima_proprio'); ?></th>
						<th><?php echo $this->Paginator->sort('arm_materia_prima_associado'); ?></th>
						<th><?php echo $this->Paginator->sort('arm_materia_prima_terceirizado'); ?></th>
						<th><?php echo $this->Paginator->sort('arm_materia_prima_comodato'); ?></th>
						<th><?php echo $this->Paginator->sort('arm_materia_prima_nao_aplica'); ?></th>
						<th><?php echo $this->Paginator->sort('arm_produto_proprio'); ?></th>
						<th><?php echo $this->Paginator->sort('arm_produto_associado'); ?></th>
						<th><?php echo $this->Paginator->sort('arm_produto_terceirizado'); ?></th>
						<th><?php echo $this->Paginator->sort('arm_produto_comodato'); ?></th>
						<th><?php echo $this->Paginator->sort('arm_produto_nao_aplica'); ?></th>
						<th><?php echo $this->Paginator->sort('participa_rede_comercio'); ?></th>
						<th><?php echo $this->Paginator->sort('participa_rede_comercio_especificar'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($logisticas as $logistica): ?>
					<tr>
						<td><?php echo h($logistica['Logistica']['id']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($logistica['Cooperativa']['id'], array('controller' => 'cooperativas', 'action' => 'view', $logistica['Cooperativa']['id'])); ?>
		</td>
						<td><?php echo h($logistica['Logistica']['meio_transp_proprio']); ?>&nbsp;</td>
						<td><?php echo h($logistica['Logistica']['meio_transp_associado']); ?>&nbsp;</td>
						<td><?php echo h($logistica['Logistica']['meio_transp_terceirizado']); ?>&nbsp;</td>
						<td><?php echo h($logistica['Logistica']['meio_transp_comodato']); ?>&nbsp;</td>
						<td><?php echo h($logistica['Logistica']['meio_transp_nao_aplica']); ?>&nbsp;</td>
						<td><?php echo h($logistica['Logistica']['arm_materia_prima_proprio']); ?>&nbsp;</td>
						<td><?php echo h($logistica['Logistica']['arm_materia_prima_associado']); ?>&nbsp;</td>
						<td><?php echo h($logistica['Logistica']['arm_materia_prima_terceirizado']); ?>&nbsp;</td>
						<td><?php echo h($logistica['Logistica']['arm_materia_prima_comodato']); ?>&nbsp;</td>
						<td><?php echo h($logistica['Logistica']['arm_materia_prima_nao_aplica']); ?>&nbsp;</td>
						<td><?php echo h($logistica['Logistica']['arm_produto_proprio']); ?>&nbsp;</td>
						<td><?php echo h($logistica['Logistica']['arm_produto_associado']); ?>&nbsp;</td>
						<td><?php echo h($logistica['Logistica']['arm_produto_terceirizado']); ?>&nbsp;</td>
						<td><?php echo h($logistica['Logistica']['arm_produto_comodato']); ?>&nbsp;</td>
						<td><?php echo h($logistica['Logistica']['arm_produto_nao_aplica']); ?>&nbsp;</td>
						<td><?php echo h($logistica['Logistica']['participa_rede_comercio']); ?>&nbsp;</td>
						<td><?php echo h($logistica['Logistica']['participa_rede_comercio_especificar']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $logistica['Logistica']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $logistica['Logistica']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $logistica['Logistica']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $logistica['Logistica']['id'])); ?>
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