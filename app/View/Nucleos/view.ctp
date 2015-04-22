<div class="nucleos view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Nucleo'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Nucleo'), array('action' => 'edit', $nucleo['Nucleo']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Nucleo'), array('action' => 'delete', $nucleo['Nucleo']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $nucleo['Nucleo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Nucleos'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Nucleo'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Ufs'), array('controller' => 'ufs', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Uf'), array('controller' => 'ufs', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Areas'), array('controller' => 'areas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Area'), array('controller' => 'areas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Checklists'), array('controller' => 'checklists', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Checklist'), array('controller' => 'checklists', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Checklists Questionarios'), array('controller' => 'checklists_questionarios', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Checklists Questionario'), array('controller' => 'checklists_questionarios', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Empreendimentos'), array('controller' => 'empreendimentos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Empreendimento'), array('controller' => 'empreendimentos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Matrizes'), array('controller' => 'matrizes', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Matrize'), array('controller' => 'matrizes', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Pairs'), array('controller' => 'pairs', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Pair'), array('controller' => 'pairs', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Questionarios'), array('controller' => 'questionarios', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Questionario'), array('controller' => 'questionarios', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Subareas'), array('controller' => 'subareas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Subarea'), array('controller' => 'subareas', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($nucleo['Nucleo']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Organizacao'); ?></th>
		<td>
			<?php echo h($nucleo['Nucleo']['organizacao']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cnpj'); ?></th>
		<td>
			<?php echo h($nucleo['Nucleo']['cnpj']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Razaosocial'); ?></th>
		<td>
			<?php echo h($nucleo['Nucleo']['razaosocial']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Endereco'); ?></th>
		<td>
			<?php echo h($nucleo['Nucleo']['endereco']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cidade'); ?></th>
		<td>
			<?php echo h($nucleo['Nucleo']['cidade']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cep'); ?></th>
		<td>
			<?php echo h($nucleo['Nucleo']['cep']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Telefone'); ?></th>
		<td>
			<?php echo h($nucleo['Nucleo']['telefone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Fax'); ?></th>
		<td>
			<?php echo h($nucleo['Nucleo']['fax']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email'); ?></th>
		<td>
			<?php echo h($nucleo['Nucleo']['email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Coordenador'); ?></th>
		<td>
			<?php echo h($nucleo['Nucleo']['coordenador']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Uf'); ?></th>
		<td>
			<?php echo $this->Html->link($nucleo['Uf']['id'], array('controller' => 'ufs', 'action' => 'view', $nucleo['Uf']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Assistente'); ?></th>
		<td>
			<?php echo h($nucleo['Nucleo']['assistente']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($nucleo['Nucleo']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($nucleo['Nucleo']['modified']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Usuario'); ?></th>
		<td>
			<?php echo h($nucleo['Nucleo']['usuario']); ?>
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
	<h3><?php echo __('Related Areas'); ?></h3>
	<?php if (!empty($nucleo['Area'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Ordem'); ?></th>
		<th><?php echo __('Sigla'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Nucleo Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Usuario'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($nucleo['Area'] as $area): ?>
		<tr>
			<td><?php echo $area['id']; ?></td>
			<td><?php echo $area['ordem']; ?></td>
			<td><?php echo $area['sigla']; ?></td>
			<td><?php echo $area['nome']; ?></td>
			<td><?php echo $area['nucleo_id']; ?></td>
			<td><?php echo $area['created']; ?></td>
			<td><?php echo $area['modified']; ?></td>
			<td><?php echo $area['usuario']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'areas', 'action' => 'view', $area['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'areas', 'action' => 'edit', $area['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'areas', 'action' => 'delete', $area['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $area['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Area'), array('controller' => 'areas', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Checklists'); ?></h3>
	<?php if (!empty($nucleo['Checklist'])): ?>
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
	<?php foreach ($nucleo['Checklist'] as $checklist): ?>
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
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Checklists Questionarios'); ?></h3>
	<?php if (!empty($nucleo['ChecklistsQuestionario'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Checklist Id'); ?></th>
		<th><?php echo __('Questionario Id'); ?></th>
		<th><?php echo __('Nucleo Id'); ?></th>
		<th><?php echo __('Resultado'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($nucleo['ChecklistsQuestionario'] as $checklistsQuestionario): ?>
		<tr>
			<td><?php echo $checklistsQuestionario['id']; ?></td>
			<td><?php echo $checklistsQuestionario['checklist_id']; ?></td>
			<td><?php echo $checklistsQuestionario['questionario_id']; ?></td>
			<td><?php echo $checklistsQuestionario['nucleo_id']; ?></td>
			<td><?php echo $checklistsQuestionario['resultado']; ?></td>
			<td><?php echo $checklistsQuestionario['created']; ?></td>
			<td><?php echo $checklistsQuestionario['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'checklists_questionarios', 'action' => 'view', $checklistsQuestionario['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'checklists_questionarios', 'action' => 'edit', $checklistsQuestionario['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'checklists_questionarios', 'action' => 'delete', $checklistsQuestionario['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $checklistsQuestionario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Checklists Questionario'), array('controller' => 'checklists_questionarios', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Empreendimentos'); ?></h3>
	<?php if (!empty($nucleo['Empreendimento'])): ?>
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
	<?php foreach ($nucleo['Empreendimento'] as $empreendimento): ?>
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
	<h3><?php echo __('Related Matrizes'); ?></h3>
	<?php if (!empty($nucleo['Matrize'])): ?>
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
	<?php foreach ($nucleo['Matrize'] as $matrize): ?>
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
	<h3><?php echo __('Related Pairs'); ?></h3>
	<?php if (!empty($nucleo['Pair'])): ?>
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
	<?php foreach ($nucleo['Pair'] as $pair): ?>
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
	<h3><?php echo __('Related Questionarios'); ?></h3>
	<?php if (!empty($nucleo['Questionario'])): ?>
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
	<?php foreach ($nucleo['Questionario'] as $questionario): ?>
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
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Subareas'); ?></h3>
	<?php if (!empty($nucleo['Subarea'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Ordem'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Sigla'); ?></th>
		<th><?php echo __('Area Id'); ?></th>
		<th><?php echo __('Importancia'); ?></th>
		<th><?php echo __('Nucleo Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Usuario'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($nucleo['Subarea'] as $subarea): ?>
		<tr>
			<td><?php echo $subarea['id']; ?></td>
			<td><?php echo $subarea['ordem']; ?></td>
			<td><?php echo $subarea['nome']; ?></td>
			<td><?php echo $subarea['sigla']; ?></td>
			<td><?php echo $subarea['area_id']; ?></td>
			<td><?php echo $subarea['importancia']; ?></td>
			<td><?php echo $subarea['nucleo_id']; ?></td>
			<td><?php echo $subarea['created']; ?></td>
			<td><?php echo $subarea['modified']; ?></td>
			<td><?php echo $subarea['usuario']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'subareas', 'action' => 'view', $subarea['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'subareas', 'action' => 'edit', $subarea['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'subareas', 'action' => 'delete', $subarea['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $subarea['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Subarea'), array('controller' => 'subareas', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Usuarios'); ?></h3>
	<?php if (!empty($nucleo['Usuario'])): ?>
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
	<?php foreach ($nucleo['Usuario'] as $usuario): ?>
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
