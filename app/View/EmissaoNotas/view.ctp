<div class="emissaoNotas view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Emissao Nota'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Emissao Nota'), array('action' => 'edit', $emissaoNota['EmissaoNota']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Emissao Nota'), array('action' => 'delete', $emissaoNota['EmissaoNota']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $emissaoNota['EmissaoNota']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Emissao Notas'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Emissao Nota'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Cooperativas'), array('controller' => 'cooperativas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Cooperativa'), array('controller' => 'cooperativas', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($emissaoNota['EmissaoNota']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cooperativa'); ?></th>
		<td>
			<?php echo $this->Html->link($emissaoNota['Cooperativa']['id'], array('controller' => 'cooperativas', 'action' => 'view', $emissaoNota['Cooperativa']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('BlocoNFproprio'); ?></th>
		<td>
			<?php echo h($emissaoNota['EmissaoNota']['blocoNFproprio']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('BlocoProdutor'); ?></th>
		<td>
			<?php echo h($emissaoNota['EmissaoNota']['blocoProdutor']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('NFEletronicaChavePropria'); ?></th>
		<td>
			<?php echo h($emissaoNota['EmissaoNota']['NFEletronicaChavePropria']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('NFEletronicaChaveTerceiros'); ?></th>
		<td>
			<?php echo h($emissaoNota['EmissaoNota']['NFEletronicaChaveTerceiros']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('NFavulsa'); ?></th>
		<td>
			<?php echo h($emissaoNota['EmissaoNota']['NFavulsa']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('NaoEmite'); ?></th>
		<td>
			<?php echo h($emissaoNota['EmissaoNota']['naoEmite']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

