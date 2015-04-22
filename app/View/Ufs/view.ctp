<div class="ufs view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Uf'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Uf'), array('action' => 'edit', $uf['Uf']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Uf'), array('action' => 'delete', $uf['Uf']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $uf['Uf']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Ufs'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Uf'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Empreendimentos'), array('controller' => 'empreendimentos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Empreendimento'), array('controller' => 'empreendimentos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Nucleos'), array('controller' => 'nucleos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Nucleo'), array('controller' => 'nucleos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Pairs'), array('controller' => 'pairs', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Pair'), array('controller' => 'pairs', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($uf['Uf']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Sigla'); ?></th>
		<td>
			<?php echo h($uf['Uf']['sigla']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Descricao'); ?></th>
		<td>
			<?php echo h($uf['Uf']['descricao']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($uf['Uf']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($uf['Uf']['modified']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Usuario'); ?></th>
		<td>
			<?php echo h($uf['Uf']['usuario']); ?>
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
	<h3><?php echo __('Related Empreendimentos'); ?></h3>
	<?php if (!empty($uf['Empreendimento'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Organizacao'); ?></th>
		<th><?php echo __('Cnpj'); ?></th>
		<th><?php echo __('Razaosocial'); ?></th>
		<th><?php echo __('Endereco'); ?></th>
		<th><?php echo __('Cidade'); ?></th>
		<th><?php echo __('Uf Id'); ?></th>
		<th><?php echo __('Cep'); ?></th>
		<th><?php echo __('Telefone'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Dap'); ?></th>
		<th><?php echo __('Representante'); ?></th>
		<th><?php echo __('Contato'); ?></th>
		<th><?php echo __('Nucleo Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Usuario'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($uf['Empreendimento'] as $empreendimento): ?>
		<tr>
			<td><?php echo $empreendimento['id']; ?></td>
			<td><?php echo $empreendimento['organizacao']; ?></td>
			<td><?php echo $empreendimento['cnpj']; ?></td>
			<td><?php echo $empreendimento['razaosocial']; ?></td>
			<td><?php echo $empreendimento['endereco']; ?></td>
			<td><?php echo $empreendimento['cidade']; ?></td>
			<td><?php echo $empreendimento['uf_id']; ?></td>
			<td><?php echo $empreendimento['cep']; ?></td>
			<td><?php echo $empreendimento['telefone']; ?></td>
			<td><?php echo $empreendimento['fax']; ?></td>
			<td><?php echo $empreendimento['email']; ?></td>
			<td><?php echo $empreendimento['dap']; ?></td>
			<td><?php echo $empreendimento['representante']; ?></td>
			<td><?php echo $empreendimento['contato']; ?></td>
			<td><?php echo $empreendimento['nucleo_id']; ?></td>
			<td><?php echo $empreendimento['created']; ?></td>
			<td><?php echo $empreendimento['modified']; ?></td>
			<td><?php echo $empreendimento['usuario']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'empreendimentos', 'action' => 'view', $empreendimento['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'empreendimentos', 'action' => 'edit', $empreendimento['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'empreendimentos', 'action' => 'delete', $empreendimento['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $empreendimento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Empreendimento'), array('controller' => 'empreendimentos', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Nucleos'); ?></h3>
	<?php if (!empty($uf['Nucleo'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Organizacao'); ?></th>
		<th><?php echo __('Cnpj'); ?></th>
		<th><?php echo __('Razaosocial'); ?></th>
		<th><?php echo __('Endereco'); ?></th>
		<th><?php echo __('Cidade'); ?></th>
		<th><?php echo __('Cep'); ?></th>
		<th><?php echo __('Telefone'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Coordenador'); ?></th>
		<th><?php echo __('Uf Id'); ?></th>
		<th><?php echo __('Assistente'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Usuario'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($uf['Nucleo'] as $nucleo): ?>
		<tr>
			<td><?php echo $nucleo['id']; ?></td>
			<td><?php echo $nucleo['organizacao']; ?></td>
			<td><?php echo $nucleo['cnpj']; ?></td>
			<td><?php echo $nucleo['razaosocial']; ?></td>
			<td><?php echo $nucleo['endereco']; ?></td>
			<td><?php echo $nucleo['cidade']; ?></td>
			<td><?php echo $nucleo['cep']; ?></td>
			<td><?php echo $nucleo['telefone']; ?></td>
			<td><?php echo $nucleo['fax']; ?></td>
			<td><?php echo $nucleo['email']; ?></td>
			<td><?php echo $nucleo['coordenador']; ?></td>
			<td><?php echo $nucleo['uf_id']; ?></td>
			<td><?php echo $nucleo['assistente']; ?></td>
			<td><?php echo $nucleo['created']; ?></td>
			<td><?php echo $nucleo['modified']; ?></td>
			<td><?php echo $nucleo['usuario']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'nucleos', 'action' => 'view', $nucleo['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'nucleos', 'action' => 'edit', $nucleo['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'nucleos', 'action' => 'delete', $nucleo['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $nucleo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Nucleo'), array('controller' => 'nucleos', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Pairs'); ?></h3>
	<?php if (!empty($uf['Pair'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Polo'); ?></th>
		<th><?php echo __('Organizacao'); ?></th>
		<th><?php echo __('Cnpj'); ?></th>
		<th><?php echo __('Razaosocial'); ?></th>
		<th><?php echo __('Endereco'); ?></th>
		<th><?php echo __('Cidade'); ?></th>
		<th><?php echo __('Uf Id'); ?></th>
		<th><?php echo __('Cep'); ?></th>
		<th><?php echo __('Telefone'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Monitor'); ?></th>
		<th><?php echo __('Nucleo Id'); ?></th>
		<th><?php echo __('Assistente'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Usuario'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($uf['Pair'] as $pair): ?>
		<tr>
			<td><?php echo $pair['id']; ?></td>
			<td><?php echo $pair['polo']; ?></td>
			<td><?php echo $pair['organizacao']; ?></td>
			<td><?php echo $pair['cnpj']; ?></td>
			<td><?php echo $pair['razaosocial']; ?></td>
			<td><?php echo $pair['endereco']; ?></td>
			<td><?php echo $pair['cidade']; ?></td>
			<td><?php echo $pair['uf_id']; ?></td>
			<td><?php echo $pair['cep']; ?></td>
			<td><?php echo $pair['telefone']; ?></td>
			<td><?php echo $pair['fax']; ?></td>
			<td><?php echo $pair['email']; ?></td>
			<td><?php echo $pair['monitor']; ?></td>
			<td><?php echo $pair['nucleo_id']; ?></td>
			<td><?php echo $pair['assistente']; ?></td>
			<td><?php echo $pair['created']; ?></td>
			<td><?php echo $pair['modified']; ?></td>
			<td><?php echo $pair['usuario']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'pairs', 'action' => 'view', $pair['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'pairs', 'action' => 'edit', $pair['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'pairs', 'action' => 'delete', $pair['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $pair['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Pair'), array('controller' => 'pairs', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Usuarios'); ?></h3>
	<?php if (!empty($uf['Usuario'])): ?>
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
	<?php foreach ($uf['Usuario'] as $usuario): ?>
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
