<div class="socios view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Socio'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Socio'), array('action' => 'edit', $socio['Socio']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Socio'), array('action' => 'delete', $socio['Socio']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $socio['Socio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Socios'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Socio'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Associados'), array('controller' => 'associados', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Associado'), array('controller' => 'associados', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($socio['Socio']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('NumM'); ?></th>
		<td>
			<?php echo h($socio['Socio']['NumM']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('NumH'); ?></th>
		<td>
			<?php echo h($socio['Socio']['NumH']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tipo Socio'); ?></th>
		<td>
			<?php echo h($socio['Socio']['tipo_socio']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Associado'); ?></th>
		<td>
			<?php echo $this->Html->link($socio['Associado']['id'], array('controller' => 'associados', 'action' => 'view', $socio['Associado']['id'])); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

