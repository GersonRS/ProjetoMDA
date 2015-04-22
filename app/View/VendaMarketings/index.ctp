<div class="vendaMarketings index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Venda Marketings'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Venda Marketing'), array('action' => 'add'), array('escape' => false)); ?></li>
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
						<th><?php echo $this->Paginator->sort('def_preco_somando_custolucro'); ?></th>
						<th><?php echo $this->Paginator->sort('def_preco_acima_concorrencia'); ?></th>
						<th><?php echo $this->Paginator->sort('def_preco_igual_concorrencia'); ?></th>
						<th><?php echo $this->Paginator->sort('def_preco_abaixo_concorrencia'); ?></th>
						<th><?php echo $this->Paginator->sort('def_preco_outro'); ?></th>
						<th><?php echo $this->Paginator->sort('def_preco_especificar_outro'); ?></th>
						<th><?php echo $this->Paginator->sort('logo_possui'); ?></th>
						<th><?php echo $this->Paginator->sort('logo_especificar_sim'); ?></th>
						<th><?php echo $this->Paginator->sort('marca_comercial_possui'); ?></th>
						<th><?php echo $this->Paginator->sort('marca_comercial_registrada_nome'); ?></th>
						<th><?php echo $this->Paginator->sort('marca_comercial_nao_registrada'); ?></th>
						<th><?php echo $this->Paginator->sort('peca_comunicacao_folder'); ?></th>
						<th><?php echo $this->Paginator->sort('peca_comunicacao_banner'); ?></th>
						<th><?php echo $this->Paginator->sort('peca_comunicacao_cartao'); ?></th>
						<th><?php echo $this->Paginator->sort('peca_comunicacao_site'); ?></th>
						<th><?php echo $this->Paginator->sort('peca_comunicacao_folheto'); ?></th>
						<th><?php echo $this->Paginator->sort('peca_comunicacao_rotulo'); ?></th>
						<th><?php echo $this->Paginator->sort('peca_comunicacao_display'); ?></th>
						<th><?php echo $this->Paginator->sort('peca_comunicacao_mala_direta'); ?></th>
						<th><?php echo $this->Paginator->sort('peca_comunicacao_outro'); ?></th>
						<th><?php echo $this->Paginator->sort('peca_comunicacao_especificar_outro'); ?></th>
						<th><?php echo $this->Paginator->sort('comunicacao_interna_folheto'); ?></th>
						<th><?php echo $this->Paginator->sort('comunicacao_interna_email'); ?></th>
						<th><?php echo $this->Paginator->sort('comunicacao_interna_mural'); ?></th>
						<th><?php echo $this->Paginator->sort('comunicacao_interna_edital'); ?></th>
						<th><?php echo $this->Paginator->sort('comunicacao_interna_jornal_revista'); ?></th>
						<th><?php echo $this->Paginator->sort('comunicacao_interna_outro'); ?></th>
						<th><?php echo $this->Paginator->sort('comunicacao_interna_especificar_outro'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($vendaMarketings as $vendaMarketing): ?>
					<tr>
						<td><?php echo h($vendaMarketing['VendaMarketing']['id']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($vendaMarketing['Cooperativa']['id'], array('controller' => 'cooperativas', 'action' => 'view', $vendaMarketing['Cooperativa']['id'])); ?>
		</td>
						<td><?php echo h($vendaMarketing['VendaMarketing']['def_preco_somando_custolucro']); ?>&nbsp;</td>
						<td><?php echo h($vendaMarketing['VendaMarketing']['def_preco_acima_concorrencia']); ?>&nbsp;</td>
						<td><?php echo h($vendaMarketing['VendaMarketing']['def_preco_igual_concorrencia']); ?>&nbsp;</td>
						<td><?php echo h($vendaMarketing['VendaMarketing']['def_preco_abaixo_concorrencia']); ?>&nbsp;</td>
						<td><?php echo h($vendaMarketing['VendaMarketing']['def_preco_outro']); ?>&nbsp;</td>
						<td><?php echo h($vendaMarketing['VendaMarketing']['def_preco_especificar_outro']); ?>&nbsp;</td>
						<td><?php echo h($vendaMarketing['VendaMarketing']['logo_possui']); ?>&nbsp;</td>
						<td><?php echo h($vendaMarketing['VendaMarketing']['logo_especificar_sim']); ?>&nbsp;</td>
						<td><?php echo h($vendaMarketing['VendaMarketing']['marca_comercial_possui']); ?>&nbsp;</td>
						<td><?php echo h($vendaMarketing['VendaMarketing']['marca_comercial_registrada_nome']); ?>&nbsp;</td>
						<td><?php echo h($vendaMarketing['VendaMarketing']['marca_comercial_nao_registrada']); ?>&nbsp;</td>
						<td><?php echo h($vendaMarketing['VendaMarketing']['peca_comunicacao_folder']); ?>&nbsp;</td>
						<td><?php echo h($vendaMarketing['VendaMarketing']['peca_comunicacao_banner']); ?>&nbsp;</td>
						<td><?php echo h($vendaMarketing['VendaMarketing']['peca_comunicacao_cartao']); ?>&nbsp;</td>
						<td><?php echo h($vendaMarketing['VendaMarketing']['peca_comunicacao_site']); ?>&nbsp;</td>
						<td><?php echo h($vendaMarketing['VendaMarketing']['peca_comunicacao_folheto']); ?>&nbsp;</td>
						<td><?php echo h($vendaMarketing['VendaMarketing']['peca_comunicacao_rotulo']); ?>&nbsp;</td>
						<td><?php echo h($vendaMarketing['VendaMarketing']['peca_comunicacao_display']); ?>&nbsp;</td>
						<td><?php echo h($vendaMarketing['VendaMarketing']['peca_comunicacao_mala_direta']); ?>&nbsp;</td>
						<td><?php echo h($vendaMarketing['VendaMarketing']['peca_comunicacao_outro']); ?>&nbsp;</td>
						<td><?php echo h($vendaMarketing['VendaMarketing']['peca_comunicacao_especificar_outro']); ?>&nbsp;</td>
						<td><?php echo h($vendaMarketing['VendaMarketing']['comunicacao_interna_folheto']); ?>&nbsp;</td>
						<td><?php echo h($vendaMarketing['VendaMarketing']['comunicacao_interna_email']); ?>&nbsp;</td>
						<td><?php echo h($vendaMarketing['VendaMarketing']['comunicacao_interna_mural']); ?>&nbsp;</td>
						<td><?php echo h($vendaMarketing['VendaMarketing']['comunicacao_interna_edital']); ?>&nbsp;</td>
						<td><?php echo h($vendaMarketing['VendaMarketing']['comunicacao_interna_jornal_revista']); ?>&nbsp;</td>
						<td><?php echo h($vendaMarketing['VendaMarketing']['comunicacao_interna_outro']); ?>&nbsp;</td>
						<td><?php echo h($vendaMarketing['VendaMarketing']['comunicacao_interna_especificar_outro']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $vendaMarketing['VendaMarketing']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $vendaMarketing['VendaMarketing']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $vendaMarketing['VendaMarketing']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $vendaMarketing['VendaMarketing']['id'])); ?>
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