<div class="cooperativas index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Cooperativas'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Cooperativa'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Agronegocios'), array('controller' => 'agronegocios', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Agronegocio'), array('controller' => 'agronegocios', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Associados'), array('controller' => 'associados', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Associado'), array('controller' => 'associados', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Aterprodutos'), array('controller' => 'aterprodutos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Aterproduto'), array('controller' => 'aterprodutos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Comercializados'), array('controller' => 'comercializados', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Comercializado'), array('controller' => 'comercializados', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Credits'), array('controller' => 'credits', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Credit'), array('controller' => 'credits', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Emissao Notas'), array('controller' => 'emissao_notas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Emissao Nota'), array('controller' => 'emissao_notas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Faturamentos'), array('controller' => 'faturamentos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Faturamento'), array('controller' => 'faturamentos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Financas'), array('controller' => 'financas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Financa'), array('controller' => 'financas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Logisticas'), array('controller' => 'logisticas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Logistica'), array('controller' => 'logisticas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Recurso Humanos'), array('controller' => 'recurso_humanos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Recurso Humano'), array('controller' => 'recurso_humanos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Venda Marketings'), array('controller' => 'venda_marketings', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Venda Marketing'), array('controller' => 'venda_marketings', 'action' => 'add'), array('escape' => false)); ?> </li>
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
						<th><?php echo $this->Paginator->sort('CNPJ'); ?></th>
						<th><?php echo $this->Paginator->sort('municipio'); ?></th>
						<th><?php echo $this->Paginator->sort('inscricao_estadual'); ?></th>
						<th><?php echo $this->Paginator->sort('inscricao_municipal'); ?></th>
						<th><?php echo $this->Paginator->sort('data_constituicao'); ?></th>
						<th><?php echo $this->Paginator->sort('razao_social'); ?></th>
						<th><?php echo $this->Paginator->sort('sigla'); ?></th>
						<th><?php echo $this->Paginator->sort('uf'); ?></th>
						<th><?php echo $this->Paginator->sort('telefone'); ?></th>
						<th><?php echo $this->Paginator->sort('email'); ?></th>
						<th><?php echo $this->Paginator->sort('site'); ?></th>
						<th><?php echo $this->Paginator->sort('cep'); ?></th>
						<th><?php echo $this->Paginator->sort('endereco_completo'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th><?php echo $this->Paginator->sort('modified'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($cooperativas as $cooperativa): ?>
					<tr>
						<td><?php echo h($cooperativa['Cooperativa']['id']); ?>&nbsp;</td>
						<td><?php echo h($cooperativa['Cooperativa']['CNPJ']); ?>&nbsp;</td>
						<td><?php echo h($cooperativa['Cooperativa']['municipio']); ?>&nbsp;</td>
						<td><?php echo h($cooperativa['Cooperativa']['inscricao_estadual']); ?>&nbsp;</td>
						<td><?php echo h($cooperativa['Cooperativa']['inscricao_municipal']); ?>&nbsp;</td>
						<td><?php echo h($cooperativa['Cooperativa']['data_constituicao']); ?>&nbsp;</td>
						<td><?php echo h($cooperativa['Cooperativa']['razao_social']); ?>&nbsp;</td>
						<td><?php echo h($cooperativa['Cooperativa']['sigla']); ?>&nbsp;</td>
						<td><?php echo h($cooperativa['Cooperativa']['uf']); ?>&nbsp;</td>
						<td><?php echo h($cooperativa['Cooperativa']['telefone']); ?>&nbsp;</td>
						<td><?php echo h($cooperativa['Cooperativa']['email']); ?>&nbsp;</td>
						<td><?php echo h($cooperativa['Cooperativa']['site']); ?>&nbsp;</td>
						<td><?php echo h($cooperativa['Cooperativa']['cep']); ?>&nbsp;</td>
						<td><?php echo h($cooperativa['Cooperativa']['endereco_completo']); ?>&nbsp;</td>
						<td><?php echo h($cooperativa['Cooperativa']['created']); ?>&nbsp;</td>
						<td><?php echo h($cooperativa['Cooperativa']['modified']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $cooperativa['Cooperativa']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $cooperativa['Cooperativa']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $cooperativa['Cooperativa']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $cooperativa['Cooperativa']['id'])); ?>
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