<div class="emissaoNotas index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Emissao Notas'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Emissao Nota'), array('action' => 'add'), array('escape' => false)); ?></li>
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
						<th><?php echo $this->Paginator->sort('blocoNFproprio'); ?></th>
						<th><?php echo $this->Paginator->sort('blocoProdutor'); ?></th>
						<th><?php echo $this->Paginator->sort('NFEletronicaChavePropria'); ?></th>
						<th><?php echo $this->Paginator->sort('NFEletronicaChaveTerceiros'); ?></th>
						<th><?php echo $this->Paginator->sort('NFavulsa'); ?></th>
						<th><?php echo $this->Paginator->sort('naoEmite'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($emissaoNotas as $emissaoNota): ?>
					<tr>
						<td><?php echo h($emissaoNota['EmissaoNota']['id']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($emissaoNota['Cooperativa']['id'], array('controller' => 'cooperativas', 'action' => 'view', $emissaoNota['Cooperativa']['id'])); ?>
		</td>
						<td><?php echo h($emissaoNota['EmissaoNota']['blocoNFproprio']); ?>&nbsp;</td>
						<td><?php echo h($emissaoNota['EmissaoNota']['blocoProdutor']); ?>&nbsp;</td>
						<td><?php echo h($emissaoNota['EmissaoNota']['NFEletronicaChavePropria']); ?>&nbsp;</td>
						<td><?php echo h($emissaoNota['EmissaoNota']['NFEletronicaChaveTerceiros']); ?>&nbsp;</td>
						<td><?php echo h($emissaoNota['EmissaoNota']['NFavulsa']); ?>&nbsp;</td>
						<td><?php echo h($emissaoNota['EmissaoNota']['naoEmite']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $emissaoNota['EmissaoNota']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $emissaoNota['EmissaoNota']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $emissaoNota['EmissaoNota']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $emissaoNota['EmissaoNota']['id'])); ?>
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