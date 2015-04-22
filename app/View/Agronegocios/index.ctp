<div class="agronegocios index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Agronegocios'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Agronegocio'), array('action' => 'add'), array('escape' => false)); ?></li>
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
						<th><?php echo $this->Paginator->sort('tamanho_unidade'); ?></th>
						<th><?php echo $this->Paginator->sort('unidade_medida_processamento'); ?></th>
						<th><?php echo $this->Paginator->sort('qtd_cap_diaria_processamento'); ?></th>
						<th><?php echo $this->Paginator->sort('unidade_medida_armazenamento_materia_prima'); ?></th>
						<th><?php echo $this->Paginator->sort('qtd_cap_diaria_armazenamento_materia_prima'); ?></th>
						<th><?php echo $this->Paginator->sort('unidade_medida_armazenamento_produto_final'); ?></th>
						<th><?php echo $this->Paginator->sort('qtd_cap_diaria_armazenamento_produto_final'); ?></th>
						<th><?php echo $this->Paginator->sort('tipo_estrutura'); ?></th>
						<th><?php echo $this->Paginator->sort('tipo_propriedade_estrutura'); ?></th>
						<th><?php echo $this->Paginator->sort('alvara_sanitario'); ?></th>
						<th><?php echo $this->Paginator->sort('alvara_publico'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($agronegocios as $agronegocio): ?>
					<tr>
						<td><?php echo h($agronegocio['Agronegocio']['id']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($agronegocio['Cooperativa']['id'], array('controller' => 'cooperativas', 'action' => 'view', $agronegocio['Cooperativa']['id'])); ?>
		</td>
						<td><?php echo h($agronegocio['Agronegocio']['tamanho_unidade']); ?>&nbsp;</td>
						<td><?php echo h($agronegocio['Agronegocio']['unidade_medida_processamento']); ?>&nbsp;</td>
						<td><?php echo h($agronegocio['Agronegocio']['qtd_cap_diaria_processamento']); ?>&nbsp;</td>
						<td><?php echo h($agronegocio['Agronegocio']['unidade_medida_armazenamento_materia_prima']); ?>&nbsp;</td>
						<td><?php echo h($agronegocio['Agronegocio']['qtd_cap_diaria_armazenamento_materia_prima']); ?>&nbsp;</td>
						<td><?php echo h($agronegocio['Agronegocio']['unidade_medida_armazenamento_produto_final']); ?>&nbsp;</td>
						<td><?php echo h($agronegocio['Agronegocio']['qtd_cap_diaria_armazenamento_produto_final']); ?>&nbsp;</td>
						<td><?php echo h($agronegocio['Agronegocio']['tipo_estrutura']); ?>&nbsp;</td>
						<td><?php echo h($agronegocio['Agronegocio']['tipo_propriedade_estrutura']); ?>&nbsp;</td>
						<td><?php echo h($agronegocio['Agronegocio']['alvara_sanitario']); ?>&nbsp;</td>
						<td><?php echo h($agronegocio['Agronegocio']['alvara_publico']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $agronegocio['Agronegocio']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $agronegocio['Agronegocio']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $agronegocio['Agronegocio']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $agronegocio['Agronegocio']['id'])); ?>
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