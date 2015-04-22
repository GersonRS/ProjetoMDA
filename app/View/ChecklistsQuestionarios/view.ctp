<div class="checklistsQuestionarios view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Checklists Questionario'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Checklists Questionario'), array('action' => 'edit', $checklistsQuestionario['ChecklistsQuestionario']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Checklists Questionario'), array('action' => 'delete', $checklistsQuestionario['ChecklistsQuestionario']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $checklistsQuestionario['ChecklistsQuestionario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Checklists Questionarios'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Checklists Questionario'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Checklists'), array('controller' => 'checklists', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Checklist'), array('controller' => 'checklists', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Questionarios'), array('controller' => 'questionarios', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Questionario'), array('controller' => 'questionarios', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($checklistsQuestionario['ChecklistsQuestionario']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Checklist'); ?></th>
		<td>
			<?php echo $this->Html->link($checklistsQuestionario['Checklist']['id'], array('controller' => 'checklists', 'action' => 'view', $checklistsQuestionario['Checklist']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Questionario'); ?></th>
		<td>
			<?php echo $this->Html->link($checklistsQuestionario['Questionario']['id'], array('controller' => 'questionarios', 'action' => 'view', $checklistsQuestionario['Questionario']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nucleo'); ?></th>
		<td>
			<?php echo $this->Html->link($checklistsQuestionario['Nucleo']['id'], array('controller' => 'nucleos', 'action' => 'view', $checklistsQuestionario['Nucleo']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Resultado'); ?></th>
		<td>
			<?php echo h($checklistsQuestionario['ChecklistsQuestionario']['resultado']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($checklistsQuestionario['ChecklistsQuestionario']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($checklistsQuestionario['ChecklistsQuestionario']['modified']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

