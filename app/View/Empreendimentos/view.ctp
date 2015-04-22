<div class="empreendimentos view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Empreendimento'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Empreendimento'), array('action' => 'edit', $empreendimento['Empreendimento']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Empreendimento'), array('action' => 'delete', $empreendimento['Empreendimento']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $empreendimento['Empreendimento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Empreendimentos'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Empreendimento'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Ufs'), array('controller' => 'ufs', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Uf'), array('controller' => 'ufs', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($empreendimento['Empreendimento']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Organizacao'); ?></th>
		<td>
			<?php echo h($empreendimento['Empreendimento']['organizacao']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cnpj'); ?></th>
		<td>
			<?php echo h($empreendimento['Empreendimento']['cnpj']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Razaosocial'); ?></th>
		<td>
			<?php echo h($empreendimento['Empreendimento']['razaosocial']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Endereco'); ?></th>
		<td>
			<?php echo h($empreendimento['Empreendimento']['endereco']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cidade'); ?></th>
		<td>
			<?php echo h($empreendimento['Empreendimento']['cidade']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Uf'); ?></th>
		<td>
			<?php echo $this->Html->link($empreendimento['Uf']['id'], array('controller' => 'ufs', 'action' => 'view', $empreendimento['Uf']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cep'); ?></th>
		<td>
			<?php echo h($empreendimento['Empreendimento']['cep']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Telefone'); ?></th>
		<td>
			<?php echo h($empreendimento['Empreendimento']['telefone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Fax'); ?></th>
		<td>
			<?php echo h($empreendimento['Empreendimento']['fax']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email'); ?></th>
		<td>
			<?php echo h($empreendimento['Empreendimento']['email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Dap'); ?></th>
		<td>
			<?php echo h($empreendimento['Empreendimento']['dap']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Representante'); ?></th>
		<td>
			<?php echo h($empreendimento['Empreendimento']['representante']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Contato'); ?></th>
		<td>
			<?php echo h($empreendimento['Empreendimento']['contato']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nucleo'); ?></th>
		<td>
			<?php echo $this->Html->link($empreendimento['Nucleo']['id'], array('controller' => 'nucleos', 'action' => 'view', $empreendimento['Nucleo']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($empreendimento['Empreendimento']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($empreendimento['Empreendimento']['modified']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Usuario'); ?></th>
		<td>
			<?php echo h($empreendimento['Empreendimento']['usuario']); ?>
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
	<?php if (!empty($empreendimento['Checklist'])): ?>
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
	<?php foreach ($empreendimento['Checklist'] as $checklist): ?>
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
