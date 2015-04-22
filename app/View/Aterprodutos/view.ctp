<div class="aterprodutos view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Aterproduto'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Aterproduto'), array('action' => 'edit', $aterproduto['Aterproduto']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Aterproduto'), array('action' => 'delete', $aterproduto['Aterproduto']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $aterproduto['Aterproduto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Aterprodutos'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Aterproduto'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($aterproduto['Aterproduto']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cooperativa'); ?></th>
		<td>
			<?php echo $this->Html->link($aterproduto['Cooperativa']['id'], array('controller' => 'cooperativas', 'action' => 'view', $aterproduto['Cooperativa']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tipo Inst Publica'); ?></th>
		<td>
			<?php echo h($aterproduto['Aterproduto']['tipo_inst_publica']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tipo Inst Privada'); ?></th>
		<td>
			<?php echo h($aterproduto['Aterproduto']['tipo_inst_privada']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tipo ONG'); ?></th>
		<td>
			<?php echo h($aterproduto['Aterproduto']['tipo_ONG']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tipo SEBRAE'); ?></th>
		<td>
			<?php echo h($aterproduto['Aterproduto']['tipo_SEBRAE']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tipo Universidade'); ?></th>
		<td>
			<?php echo h($aterproduto['Aterproduto']['tipo_universidade']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tipo Outro'); ?></th>
		<td>
			<?php echo h($aterproduto['Aterproduto']['tipo_outro']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nao Acessa'); ?></th>
		<td>
			<?php echo h($aterproduto['Aterproduto']['nao_acessa']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Especificar Inst Publica'); ?></th>
		<td>
			<?php echo h($aterproduto['Aterproduto']['especificar_inst_publica']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Especificar Inst Privada'); ?></th>
		<td>
			<?php echo h($aterproduto['Aterproduto']['especificar_inst_privada']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Especificar ONG'); ?></th>
		<td>
			<?php echo h($aterproduto['Aterproduto']['especificar_ONG']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Especificar Universidade'); ?></th>
		<td>
			<?php echo h($aterproduto['Aterproduto']['especificar_universidade']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Especificar Outro'); ?></th>
		<td>
			<?php echo h($aterproduto['Aterproduto']['especificar_outro']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

