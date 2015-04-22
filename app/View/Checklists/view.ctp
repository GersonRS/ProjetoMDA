<div class="checklists view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Checklist'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Checklist'), array('action' => 'edit', $checklist['Checklist']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Checklist'), array('action' => 'delete', $checklist['Checklist']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $checklist['Checklist']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Checklists'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Checklist'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Nucleos'), array('controller' => 'nucleos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Nucleo'), array('controller' => 'nucleos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Empreendimentos'), array('controller' => 'empreendimentos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Empreendimento'), array('controller' => 'empreendimentos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Pairs'), array('controller' => 'pairs', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Pair'), array('controller' => 'pairs', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Usuarios'), array('controller' => 'usuarios', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Usuario'), array('controller' => 'usuarios', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Matrizes'), array('controller' => 'matrizes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Matrize'), array('controller' => 'matrizes', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Questionarios'), array('controller' => 'questionarios', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Questionario'), array('controller' => 'questionarios', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($checklist['Checklist']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nucleo'); ?></th>
		<td>
			<?php echo $this->Html->link($checklist['Nucleo']['id'], array('controller' => 'nucleos', 'action' => 'view', $checklist['Nucleo']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Empreendimento'); ?></th>
		<td>
			<?php echo $this->Html->link($checklist['Empreendimento']['id'], array('controller' => 'empreendimentos', 'action' => 'view', $checklist['Empreendimento']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Pair'); ?></th>
		<td>
			<?php echo $this->Html->link($checklist['Pair']['id'], array('controller' => 'pairs', 'action' => 'view', $checklist['Pair']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Peso Sim'); ?></th>
		<td>
			<?php echo h($checklist['Checklist']['peso_sim']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Peso Parcial'); ?></th>
		<td>
			<?php echo h($checklist['Checklist']['peso_parcial']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Peso Nao'); ?></th>
		<td>
			<?php echo h($checklist['Checklist']['peso_nao']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Usuario'); ?></th>
		<td>
			<?php echo $this->Html->link($checklist['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $checklist['Usuario']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($checklist['Checklist']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($checklist['Checklist']['modified']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Usuario'); ?></th>
		<td>
			<?php echo h($checklist['Checklist']['usuario']); ?>
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
	<h3><?php echo __('Related Matrizes'); ?></h3>
	<?php if (!empty($checklist['Matrize'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Checklist Id'); ?></th>
		<th><?php echo __('Subarea Id'); ?></th>
		<th><?php echo __('Importancia'); ?></th>
		<th><?php echo __('Media'); ?></th>
		<th><?php echo __('Observacao'); ?></th>
		<th><?php echo __('Nucleo Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Usuario'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($checklist['Matrize'] as $matrize): ?>
		<tr>
			<td><?php echo $matrize['id']; ?></td>
			<td><?php echo $matrize['checklist_id']; ?></td>
			<td><?php echo $matrize['subarea_id']; ?></td>
			<td><?php echo $matrize['importancia']; ?></td>
			<td><?php echo $matrize['media']; ?></td>
			<td><?php echo $matrize['observacao']; ?></td>
			<td><?php echo $matrize['nucleo_id']; ?></td>
			<td><?php echo $matrize['created']; ?></td>
			<td><?php echo $matrize['modified']; ?></td>
			<td><?php echo $matrize['usuario']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'matrizes', 'action' => 'view', $matrize['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'matrizes', 'action' => 'edit', $matrize['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'matrizes', 'action' => 'delete', $matrize['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $matrize['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Matrize'), array('controller' => 'matrizes', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Questionarios'); ?></h3>
	<?php if (!empty($checklist['Questionario'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Tipo'); ?></th>
		<th><?php echo __('Ordem'); ?></th>
		<th><?php echo __('Questao'); ?></th>
		<th><?php echo __('Nucleo Id'); ?></th>
		<th><?php echo __('Subarea Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Usuario'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($checklist['Questionario'] as $questionario): ?>
		<tr>
			<td><?php echo $questionario['id']; ?></td>
			<td><?php echo $questionario['tipo']; ?></td>
			<td><?php echo $questionario['ordem']; ?></td>
			<td><?php echo $questionario['questao']; ?></td>
			<td><?php echo $questionario['nucleo_id']; ?></td>
			<td><?php echo $questionario['subarea_id']; ?></td>
			<td><?php echo $questionario['created']; ?></td>
			<td><?php echo $questionario['modified']; ?></td>
			<td><?php echo $questionario['usuario']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'questionarios', 'action' => 'view', $questionario['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'questionarios', 'action' => 'edit', $questionario['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'questionarios', 'action' => 'delete', $questionario['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $questionario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Questionario'), array('controller' => 'questionarios', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
