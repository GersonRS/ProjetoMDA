<div class="matrizes view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Matrize'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Matrize'), array('action' => 'edit', $matrize['Matrize']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Matrize'), array('action' => 'delete', $matrize['Matrize']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $matrize['Matrize']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Matrizes'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Matrize'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Checklists'), array('controller' => 'checklists', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Checklist'), array('controller' => 'checklists', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Subareas'), array('controller' => 'subareas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Subarea'), array('controller' => 'subareas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Nucleos'), array('controller' => 'nucleos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Nucleo'), array('controller' => 'nucleos', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($matrize['Matrize']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Checklist'); ?></th>
		<td>
			<?php echo $this->Html->link($matrize['Checklist']['id'], array('controller' => 'checklists', 'action' => 'view', $matrize['Checklist']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Subarea'); ?></th>
		<td>
			<?php echo $this->Html->link($matrize['Subarea']['id'], array('controller' => 'subareas', 'action' => 'view', $matrize['Subarea']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Importancia'); ?></th>
		<td>
			<?php echo h($matrize['Matrize']['importancia']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Media'); ?></th>
		<td>
			<?php echo h($matrize['Matrize']['media']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Observacao'); ?></th>
		<td>
			<?php echo h($matrize['Matrize']['observacao']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nucleo'); ?></th>
		<td>
			<?php echo $this->Html->link($matrize['Nucleo']['id'], array('controller' => 'nucleos', 'action' => 'view', $matrize['Nucleo']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($matrize['Matrize']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($matrize['Matrize']['modified']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Usuario'); ?></th>
		<td>
			<?php echo h($matrize['Matrize']['usuario']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

