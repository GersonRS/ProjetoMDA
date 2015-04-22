<div class="perfils view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Perfil'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Perfil'), array('action' => 'edit', $perfil['Perfil']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Perfil'), array('action' => 'delete', $perfil['Perfil']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $perfil['Perfil']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Perfils'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Perfil'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Usuarios'), array('controller' => 'usuarios', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Usuario'), array('controller' => 'usuarios', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($perfil['Perfil']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Descricao'); ?></th>
		<td>
			<?php echo h($perfil['Perfil']['descricao']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($perfil['Perfil']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($perfil['Perfil']['modified']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Usuario'); ?></th>
		<td>
			<?php echo h($perfil['Perfil']['usuario']); ?>
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
	<h3><?php echo __('Related Usuarios'); ?></h3>
	<?php if (!empty($perfil['Usuario'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Profissao'); ?></th>
		<th><?php echo __('Cpf'); ?></th>
		<th><?php echo __('Endereco'); ?></th>
		<th><?php echo __('Cidade'); ?></th>
		<th><?php echo __('Uf Id'); ?></th>
		<th><?php echo __('Cep'); ?></th>
		<th><?php echo __('Telefone'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Login'); ?></th>
		<th><?php echo __('Senha'); ?></th>
		<th><?php echo __('Perfil Id'); ?></th>
		<th><?php echo __('Nucleo Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Usuario'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($perfil['Usuario'] as $usuario): ?>
		<tr>
			<td><?php echo $usuario['id']; ?></td>
			<td><?php echo $usuario['nome']; ?></td>
			<td><?php echo $usuario['profissao']; ?></td>
			<td><?php echo $usuario['cpf']; ?></td>
			<td><?php echo $usuario['endereco']; ?></td>
			<td><?php echo $usuario['cidade']; ?></td>
			<td><?php echo $usuario['uf_id']; ?></td>
			<td><?php echo $usuario['cep']; ?></td>
			<td><?php echo $usuario['telefone']; ?></td>
			<td><?php echo $usuario['email']; ?></td>
			<td><?php echo $usuario['login']; ?></td>
			<td><?php echo $usuario['senha']; ?></td>
			<td><?php echo $usuario['perfil_id']; ?></td>
			<td><?php echo $usuario['nucleo_id']; ?></td>
			<td><?php echo $usuario['created']; ?></td>
			<td><?php echo $usuario['modified']; ?></td>
			<td><?php echo $usuario['usuario']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'usuarios', 'action' => 'view', $usuario['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'usuarios', 'action' => 'edit', $usuario['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'usuarios', 'action' => 'delete', $usuario['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $usuario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Usuario'), array('controller' => 'usuarios', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
