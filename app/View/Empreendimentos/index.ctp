<div class="empreendimentos index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Empreendimentos'); ?></h1>
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
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Empreendimento'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Ufs'), array('controller' => 'ufs', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Uf'), array('controller' => 'ufs', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Nucleos'), array('controller' => 'nucleos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Nucleo'), array('controller' => 'nucleos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Checklists'), array('controller' => 'checklists', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Checklist'), array('controller' => 'checklists', 'action' => 'add'), array('escape' => false)); ?> </li>
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
						<th><?php echo $this->Paginator->sort('organizacao'); ?></th>
						<th><?php echo $this->Paginator->sort('cnpj'); ?></th>
						<th><?php echo $this->Paginator->sort('razaosocial'); ?></th>
						<th><?php echo $this->Paginator->sort('endereco'); ?></th>
						<th><?php echo $this->Paginator->sort('cidade'); ?></th>
						<th><?php echo $this->Paginator->sort('uf_id'); ?></th>
						<th><?php echo $this->Paginator->sort('cep'); ?></th>
						<th><?php echo $this->Paginator->sort('telefone'); ?></th>
						<th><?php echo $this->Paginator->sort('fax'); ?></th>
						<th><?php echo $this->Paginator->sort('email'); ?></th>
						<th><?php echo $this->Paginator->sort('dap'); ?></th>
						<th><?php echo $this->Paginator->sort('representante'); ?></th>
						<th><?php echo $this->Paginator->sort('contato'); ?></th>
						<th><?php echo $this->Paginator->sort('nucleo_id'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th><?php echo $this->Paginator->sort('modified'); ?></th>
						<th><?php echo $this->Paginator->sort('usuario'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($empreendimentos as $empreendimento): ?>
					<tr>
						<td><?php echo h($empreendimento['Empreendimento']['id']); ?>&nbsp;</td>
						<td><?php echo h($empreendimento['Empreendimento']['organizacao']); ?>&nbsp;</td>
						<td><?php echo h($empreendimento['Empreendimento']['cnpj']); ?>&nbsp;</td>
						<td><?php echo h($empreendimento['Empreendimento']['razaosocial']); ?>&nbsp;</td>
						<td><?php echo h($empreendimento['Empreendimento']['endereco']); ?>&nbsp;</td>
						<td><?php echo h($empreendimento['Empreendimento']['cidade']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($empreendimento['Uf']['id'], array('controller' => 'ufs', 'action' => 'view', $empreendimento['Uf']['id'])); ?>
		</td>
						<td><?php echo h($empreendimento['Empreendimento']['cep']); ?>&nbsp;</td>
						<td><?php echo h($empreendimento['Empreendimento']['telefone']); ?>&nbsp;</td>
						<td><?php echo h($empreendimento['Empreendimento']['fax']); ?>&nbsp;</td>
						<td><?php echo h($empreendimento['Empreendimento']['email']); ?>&nbsp;</td>
						<td><?php echo h($empreendimento['Empreendimento']['dap']); ?>&nbsp;</td>
						<td><?php echo h($empreendimento['Empreendimento']['representante']); ?>&nbsp;</td>
						<td><?php echo h($empreendimento['Empreendimento']['contato']); ?>&nbsp;</td>
								<td>
			<?php echo $this->Html->link($empreendimento['Nucleo']['id'], array('controller' => 'nucleos', 'action' => 'view', $empreendimento['Nucleo']['id'])); ?>
		</td>
						<td><?php echo h($empreendimento['Empreendimento']['created']); ?>&nbsp;</td>
						<td><?php echo h($empreendimento['Empreendimento']['modified']); ?>&nbsp;</td>
						<td><?php echo h($empreendimento['Empreendimento']['usuario']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $empreendimento['Empreendimento']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $empreendimento['Empreendimento']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $empreendimento['Empreendimento']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $empreendimento['Empreendimento']['id'])); ?>
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