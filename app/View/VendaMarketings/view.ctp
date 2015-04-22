<div class="vendaMarketings view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Venda Marketing'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Venda Marketing'), array('action' => 'edit', $vendaMarketing['VendaMarketing']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Venda Marketing'), array('action' => 'delete', $vendaMarketing['VendaMarketing']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $vendaMarketing['VendaMarketing']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Venda Marketings'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Venda Marketing'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($vendaMarketing['VendaMarketing']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cooperativa'); ?></th>
		<td>
			<?php echo $this->Html->link($vendaMarketing['Cooperativa']['id'], array('controller' => 'cooperativas', 'action' => 'view', $vendaMarketing['Cooperativa']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Def Preco Somando Custolucro'); ?></th>
		<td>
			<?php echo h($vendaMarketing['VendaMarketing']['def_preco_somando_custolucro']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Def Preco Acima Concorrencia'); ?></th>
		<td>
			<?php echo h($vendaMarketing['VendaMarketing']['def_preco_acima_concorrencia']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Def Preco Igual Concorrencia'); ?></th>
		<td>
			<?php echo h($vendaMarketing['VendaMarketing']['def_preco_igual_concorrencia']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Def Preco Abaixo Concorrencia'); ?></th>
		<td>
			<?php echo h($vendaMarketing['VendaMarketing']['def_preco_abaixo_concorrencia']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Def Preco Outro'); ?></th>
		<td>
			<?php echo h($vendaMarketing['VendaMarketing']['def_preco_outro']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Def Preco Especificar Outro'); ?></th>
		<td>
			<?php echo h($vendaMarketing['VendaMarketing']['def_preco_especificar_outro']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Logo Possui'); ?></th>
		<td>
			<?php echo h($vendaMarketing['VendaMarketing']['logo_possui']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Logo Especificar Sim'); ?></th>
		<td>
			<?php echo h($vendaMarketing['VendaMarketing']['logo_especificar_sim']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Marca Comercial Possui'); ?></th>
		<td>
			<?php echo h($vendaMarketing['VendaMarketing']['marca_comercial_possui']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Marca Comercial Registrada Nome'); ?></th>
		<td>
			<?php echo h($vendaMarketing['VendaMarketing']['marca_comercial_registrada_nome']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Marca Comercial Nao Registrada'); ?></th>
		<td>
			<?php echo h($vendaMarketing['VendaMarketing']['marca_comercial_nao_registrada']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Peca Comunicacao Folder'); ?></th>
		<td>
			<?php echo h($vendaMarketing['VendaMarketing']['peca_comunicacao_folder']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Peca Comunicacao Banner'); ?></th>
		<td>
			<?php echo h($vendaMarketing['VendaMarketing']['peca_comunicacao_banner']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Peca Comunicacao Cartao'); ?></th>
		<td>
			<?php echo h($vendaMarketing['VendaMarketing']['peca_comunicacao_cartao']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Peca Comunicacao Site'); ?></th>
		<td>
			<?php echo h($vendaMarketing['VendaMarketing']['peca_comunicacao_site']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Peca Comunicacao Folheto'); ?></th>
		<td>
			<?php echo h($vendaMarketing['VendaMarketing']['peca_comunicacao_folheto']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Peca Comunicacao Rotulo'); ?></th>
		<td>
			<?php echo h($vendaMarketing['VendaMarketing']['peca_comunicacao_rotulo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Peca Comunicacao Display'); ?></th>
		<td>
			<?php echo h($vendaMarketing['VendaMarketing']['peca_comunicacao_display']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Peca Comunicacao Mala Direta'); ?></th>
		<td>
			<?php echo h($vendaMarketing['VendaMarketing']['peca_comunicacao_mala_direta']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Peca Comunicacao Outro'); ?></th>
		<td>
			<?php echo h($vendaMarketing['VendaMarketing']['peca_comunicacao_outro']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Peca Comunicacao Especificar Outro'); ?></th>
		<td>
			<?php echo h($vendaMarketing['VendaMarketing']['peca_comunicacao_especificar_outro']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Comunicacao Interna Folheto'); ?></th>
		<td>
			<?php echo h($vendaMarketing['VendaMarketing']['comunicacao_interna_folheto']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Comunicacao Interna Email'); ?></th>
		<td>
			<?php echo h($vendaMarketing['VendaMarketing']['comunicacao_interna_email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Comunicacao Interna Mural'); ?></th>
		<td>
			<?php echo h($vendaMarketing['VendaMarketing']['comunicacao_interna_mural']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Comunicacao Interna Edital'); ?></th>
		<td>
			<?php echo h($vendaMarketing['VendaMarketing']['comunicacao_interna_edital']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Comunicacao Interna Jornal Revista'); ?></th>
		<td>
			<?php echo h($vendaMarketing['VendaMarketing']['comunicacao_interna_jornal_revista']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Comunicacao Interna Outro'); ?></th>
		<td>
			<?php echo h($vendaMarketing['VendaMarketing']['comunicacao_interna_outro']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Comunicacao Interna Especificar Outro'); ?></th>
		<td>
			<?php echo h($vendaMarketing['VendaMarketing']['comunicacao_interna_especificar_outro']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

