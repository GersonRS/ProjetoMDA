<div class="logisticas view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Logistica'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Logistica'), array('action' => 'edit', $logistica['Logistica']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Logistica'), array('action' => 'delete', $logistica['Logistica']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $logistica['Logistica']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Logisticas'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Logistica'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($logistica['Logistica']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cooperativa'); ?></th>
		<td>
			<?php echo $this->Html->link($logistica['Cooperativa']['id'], array('controller' => 'cooperativas', 'action' => 'view', $logistica['Cooperativa']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Meio Transp Proprio'); ?></th>
		<td>
			<?php echo h($logistica['Logistica']['meio_transp_proprio']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Meio Transp Associado'); ?></th>
		<td>
			<?php echo h($logistica['Logistica']['meio_transp_associado']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Meio Transp Terceirizado'); ?></th>
		<td>
			<?php echo h($logistica['Logistica']['meio_transp_terceirizado']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Meio Transp Comodato'); ?></th>
		<td>
			<?php echo h($logistica['Logistica']['meio_transp_comodato']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Meio Transp Nao Aplica'); ?></th>
		<td>
			<?php echo h($logistica['Logistica']['meio_transp_nao_aplica']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Arm Materia Prima Proprio'); ?></th>
		<td>
			<?php echo h($logistica['Logistica']['arm_materia_prima_proprio']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Arm Materia Prima Associado'); ?></th>
		<td>
			<?php echo h($logistica['Logistica']['arm_materia_prima_associado']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Arm Materia Prima Terceirizado'); ?></th>
		<td>
			<?php echo h($logistica['Logistica']['arm_materia_prima_terceirizado']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Arm Materia Prima Comodato'); ?></th>
		<td>
			<?php echo h($logistica['Logistica']['arm_materia_prima_comodato']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Arm Materia Prima Nao Aplica'); ?></th>
		<td>
			<?php echo h($logistica['Logistica']['arm_materia_prima_nao_aplica']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Arm Produto Proprio'); ?></th>
		<td>
			<?php echo h($logistica['Logistica']['arm_produto_proprio']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Arm Produto Associado'); ?></th>
		<td>
			<?php echo h($logistica['Logistica']['arm_produto_associado']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Arm Produto Terceirizado'); ?></th>
		<td>
			<?php echo h($logistica['Logistica']['arm_produto_terceirizado']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Arm Produto Comodato'); ?></th>
		<td>
			<?php echo h($logistica['Logistica']['arm_produto_comodato']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Arm Produto Nao Aplica'); ?></th>
		<td>
			<?php echo h($logistica['Logistica']['arm_produto_nao_aplica']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Participa Rede Comercio'); ?></th>
		<td>
			<?php echo h($logistica['Logistica']['participa_rede_comercio']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Participa Rede Comercio Especificar'); ?></th>
		<td>
			<?php echo h($logistica['Logistica']['participa_rede_comercio_especificar']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

