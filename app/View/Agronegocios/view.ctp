<div class="agronegocios view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Agronegocio'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Agronegocio'), array('action' => 'edit', $agronegocio['Agronegocio']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Agronegocio'), array('action' => 'delete', $agronegocio['Agronegocio']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $agronegocio['Agronegocio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Agronegocios'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Agronegocio'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Cooperativas'), array('controller' => 'cooperativas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Cooperativa'), array('controller' => 'cooperativas', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($agronegocio['Agronegocio']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cooperativa'); ?></th>
		<td>
			<?php echo $this->Html->link($agronegocio['Cooperativa']['id'], array('controller' => 'cooperativas', 'action' => 'view', $agronegocio['Cooperativa']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tamanho Unidade'); ?></th>
		<td>
			<?php echo h($agronegocio['Agronegocio']['tamanho_unidade']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Unidade Medida Processamento'); ?></th>
		<td>
			<?php echo h($agronegocio['Agronegocio']['unidade_medida_processamento']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Qtd Cap Diaria Processamento'); ?></th>
		<td>
			<?php echo h($agronegocio['Agronegocio']['qtd_cap_diaria_processamento']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Unidade Medida Armazenamento Materia Prima'); ?></th>
		<td>
			<?php echo h($agronegocio['Agronegocio']['unidade_medida_armazenamento_materia_prima']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Qtd Cap Diaria Armazenamento Materia Prima'); ?></th>
		<td>
			<?php echo h($agronegocio['Agronegocio']['qtd_cap_diaria_armazenamento_materia_prima']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Unidade Medida Armazenamento Produto Final'); ?></th>
		<td>
			<?php echo h($agronegocio['Agronegocio']['unidade_medida_armazenamento_produto_final']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Qtd Cap Diaria Armazenamento Produto Final'); ?></th>
		<td>
			<?php echo h($agronegocio['Agronegocio']['qtd_cap_diaria_armazenamento_produto_final']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tipo Estrutura'); ?></th>
		<td>
			<?php echo h($agronegocio['Agronegocio']['tipo_estrutura']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tipo Propriedade Estrutura'); ?></th>
		<td>
			<?php echo h($agronegocio['Agronegocio']['tipo_propriedade_estrutura']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Alvara Sanitario'); ?></th>
		<td>
			<?php echo h($agronegocio['Agronegocio']['alvara_sanitario']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Alvara Publico'); ?></th>
		<td>
			<?php echo h($agronegocio['Agronegocio']['alvara_publico']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

