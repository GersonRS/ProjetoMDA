<div class="associados view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Associado'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Associado'), array('action' => 'edit', $associado['Associado']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Associado'), array('action' => 'delete', $associado['Associado']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $associado['Associado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Associados'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Associado'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Cooperativas'), array('controller' => 'cooperativas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Cooperativa'), array('controller' => 'cooperativas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Socios'), array('controller' => 'socios', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Socio'), array('controller' => 'socios', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($associado['Associado']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cooperativa'); ?></th>
		<td>
			<?php echo $this->Html->link($associado['Cooperativa']['id'], array('controller' => 'cooperativas', 'action' => 'view', $associado['Cooperativa']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Total Socios'); ?></th>
		<td>
			<?php echo h($associado['Associado']['total_socios']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Total Socios Ativos'); ?></th>
		<td>
			<?php echo h($associado['Associado']['total_socios_ativos']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Total Socios Ativos DAP'); ?></th>
		<td>
			<?php echo h($associado['Associado']['total_socios_ativos_DAP']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Total Agricultores Nao Socios'); ?></th>
		<td>
			<?php echo h($associado['Associado']['total_agricultores_nao_socios']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Total Agricultores Nao Socios DAP'); ?></th>
		<td>
			<?php echo h($associado['Associado']['total_agricultores_nao_socios_DAP']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Socios'); ?></h3>
	<?php if (!empty($associado['Socio'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('NumM'); ?></th>
		<th><?php echo __('NumH'); ?></th>
		<th><?php echo __('Tipo Socio'); ?></th>
		<th><?php echo __('Associado Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($associado['Socio'] as $socio): ?>
		<tr>
			<td><?php echo $socio['id']; ?></td>
			<td><?php echo $socio['NumM']; ?></td>
			<td><?php echo $socio['NumH']; ?></td>
			<td><?php echo $socio['tipo_socio']; ?></td>
			<td><?php echo $socio['associado_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'socios', 'action' => 'view', $socio['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'socios', 'action' => 'edit', $socio['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'socios', 'action' => 'delete', $socio['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $socio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Socio'), array('controller' => 'socios', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
