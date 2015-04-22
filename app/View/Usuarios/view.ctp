<div class="usuarios view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Usuario'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Usuario'), array('action' => 'edit', $usuario['Usuario']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Usuario'), array('action' => 'delete', $usuario['Usuario']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Usuarios'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Usuario'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Ufs'), array('controller' => 'ufs', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Uf'), array('controller' => 'ufs', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Perfils'), array('controller' => 'perfils', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Perfil'), array('controller' => 'perfils', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Nucleos'), array('controller' => 'nucleos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Nucleo'), array('controller' => 'nucleos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Checklists'), array('controller' => 'checklists', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Checklist'), array('controller' => 'checklists', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nome'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['nome']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Profissao'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['profissao']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cpf'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['cpf']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Endereco'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['endereco']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cidade'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['cidade']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Uf'); ?></th>
		<td>
			<?php echo $this->Html->link($usuario['Uf']['id'], array('controller' => 'ufs', 'action' => 'view', $usuario['Uf']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cep'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['cep']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Telefone'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['telefone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Login'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['login']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Senha'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['senha']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Perfil'); ?></th>
		<td>
			<?php echo $this->Html->link($usuario['Perfil']['id'], array('controller' => 'perfils', 'action' => 'view', $usuario['Perfil']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nucleo'); ?></th>
		<td>
			<?php echo $this->Html->link($usuario['Nucleo']['id'], array('controller' => 'nucleos', 'action' => 'view', $usuario['Nucleo']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['modified']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Usuario'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['usuario']); ?>
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
	<h3><?php echo __('Related Checklists'); ?></h3>
	<?php if (!empty($usuario['Checklist'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nucleo Id'); ?></th>
		<th><?php echo __('Empreendimento Id'); ?></th>
		<th><?php echo __('Pair Id'); ?></th>
		<th><?php echo __('Peso Sim'); ?></th>
		<th><?php echo __('Peso Parcial'); ?></th>
		<th><?php echo __('Peso Nao'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Usuario'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($usuario['Checklist'] as $checklist): ?>
		<tr>
			<td><?php echo $checklist['id']; ?></td>
			<td><?php echo $checklist['nucleo_id']; ?></td>
			<td><?php echo $checklist['empreendimento_id']; ?></td>
			<td><?php echo $checklist['pair_id']; ?></td>
			<td><?php echo $checklist['peso_sim']; ?></td>
			<td><?php echo $checklist['peso_parcial']; ?></td>
			<td><?php echo $checklist['peso_nao']; ?></td>
			<td><?php echo $checklist['usuario_id']; ?></td>
			<td><?php echo $checklist['created']; ?></td>
			<td><?php echo $checklist['modified']; ?></td>
			<td><?php echo $checklist['usuario']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'checklists', 'action' => 'view', $checklist['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'checklists', 'action' => 'edit', $checklist['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'checklists', 'action' => 'delete', $checklist['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $checklist['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Checklist'), array('controller' => 'checklists', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
