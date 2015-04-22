<div class="cooperativas view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Cooperativa'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Cooperativa'), array('action' => 'edit', $cooperativa['Cooperativa']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Cooperativa'), array('action' => 'delete', $cooperativa['Cooperativa']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $cooperativa['Cooperativa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Cooperativas'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Cooperativa'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Agronegocios'), array('controller' => 'agronegocios', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Agronegocio'), array('controller' => 'agronegocios', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Associados'), array('controller' => 'associados', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Associado'), array('controller' => 'associados', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Aterprodutos'), array('controller' => 'aterprodutos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Aterproduto'), array('controller' => 'aterprodutos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Comercializados'), array('controller' => 'comercializados', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Comercializado'), array('controller' => 'comercializados', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Credits'), array('controller' => 'credits', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Credit'), array('controller' => 'credits', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Emissao Notas'), array('controller' => 'emissao_notas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Emissao Nota'), array('controller' => 'emissao_notas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Faturamentos'), array('controller' => 'faturamentos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Faturamento'), array('controller' => 'faturamentos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Financas'), array('controller' => 'financas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Financa'), array('controller' => 'financas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Funcionarios'), array('controller' => 'funcionarios', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Logisticas'), array('controller' => 'logisticas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Logistica'), array('controller' => 'logisticas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Recurso Humanos'), array('controller' => 'recurso_humanos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Recurso Humano'), array('controller' => 'recurso_humanos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Venda Marketings'), array('controller' => 'venda_marketings', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Venda Marketing'), array('controller' => 'venda_marketings', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($cooperativa['Cooperativa']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('CNPJ'); ?></th>
		<td>
			<?php echo h($cooperativa['Cooperativa']['CNPJ']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Municipio'); ?></th>
		<td>
			<?php echo h($cooperativa['Cooperativa']['municipio']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Inscricao Estadual'); ?></th>
		<td>
			<?php echo h($cooperativa['Cooperativa']['inscricao_estadual']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Inscricao Municipal'); ?></th>
		<td>
			<?php echo h($cooperativa['Cooperativa']['inscricao_municipal']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Data Constituicao'); ?></th>
		<td>
			<?php echo h($cooperativa['Cooperativa']['data_constituicao']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Razao Social'); ?></th>
		<td>
			<?php echo h($cooperativa['Cooperativa']['razao_social']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Sigla'); ?></th>
		<td>
			<?php echo h($cooperativa['Cooperativa']['sigla']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Uf'); ?></th>
		<td>
			<?php echo h($cooperativa['Cooperativa']['uf']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Telefone'); ?></th>
		<td>
			<?php echo h($cooperativa['Cooperativa']['telefone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email'); ?></th>
		<td>
			<?php echo h($cooperativa['Cooperativa']['email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Site'); ?></th>
		<td>
			<?php echo h($cooperativa['Cooperativa']['site']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cep'); ?></th>
		<td>
			<?php echo h($cooperativa['Cooperativa']['cep']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Endereco Completo'); ?></th>
		<td>
			<?php echo h($cooperativa['Cooperativa']['endereco_completo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Created'); ?></th>
		<td>
			<?php echo h($cooperativa['Cooperativa']['created']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modified'); ?></th>
		<td>
			<?php echo h($cooperativa['Cooperativa']['modified']); ?>
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
	<h3><?php echo __('Related Agronegocios'); ?></h3>
	<?php if (!empty($cooperativa['Agronegocio'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cooperativa Id'); ?></th>
		<th><?php echo __('Tamanho Unidade'); ?></th>
		<th><?php echo __('Unidade Medida Processamento'); ?></th>
		<th><?php echo __('Qtd Cap Diaria Processamento'); ?></th>
		<th><?php echo __('Unidade Medida Armazenamento Materia Prima'); ?></th>
		<th><?php echo __('Qtd Cap Diaria Armazenamento Materia Prima'); ?></th>
		<th><?php echo __('Unidade Medida Armazenamento Produto Final'); ?></th>
		<th><?php echo __('Qtd Cap Diaria Armazenamento Produto Final'); ?></th>
		<th><?php echo __('Tipo Estrutura'); ?></th>
		<th><?php echo __('Tipo Propriedade Estrutura'); ?></th>
		<th><?php echo __('Alvara Sanitario'); ?></th>
		<th><?php echo __('Alvara Publico'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($cooperativa['Agronegocio'] as $agronegocio): ?>
		<tr>
			<td><?php echo $agronegocio['id']; ?></td>
			<td><?php echo $agronegocio['cooperativa_id']; ?></td>
			<td><?php echo $agronegocio['tamanho_unidade']; ?></td>
			<td><?php echo $agronegocio['unidade_medida_processamento']; ?></td>
			<td><?php echo $agronegocio['qtd_cap_diaria_processamento']; ?></td>
			<td><?php echo $agronegocio['unidade_medida_armazenamento_materia_prima']; ?></td>
			<td><?php echo $agronegocio['qtd_cap_diaria_armazenamento_materia_prima']; ?></td>
			<td><?php echo $agronegocio['unidade_medida_armazenamento_produto_final']; ?></td>
			<td><?php echo $agronegocio['qtd_cap_diaria_armazenamento_produto_final']; ?></td>
			<td><?php echo $agronegocio['tipo_estrutura']; ?></td>
			<td><?php echo $agronegocio['tipo_propriedade_estrutura']; ?></td>
			<td><?php echo $agronegocio['alvara_sanitario']; ?></td>
			<td><?php echo $agronegocio['alvara_publico']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'agronegocios', 'action' => 'view', $agronegocio['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'agronegocios', 'action' => 'edit', $agronegocio['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'agronegocios', 'action' => 'delete', $agronegocio['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $agronegocio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Agronegocio'), array('controller' => 'agronegocios', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Associados'); ?></h3>
	<?php if (!empty($cooperativa['Associado'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cooperativa Id'); ?></th>
		<th><?php echo __('Total Socios'); ?></th>
		<th><?php echo __('Total Socios Ativos'); ?></th>
		<th><?php echo __('Total Socios Ativos DAP'); ?></th>
		<th><?php echo __('Total Agricultores Nao Socios'); ?></th>
		<th><?php echo __('Total Agricultores Nao Socios DAP'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($cooperativa['Associado'] as $associado): ?>
		<tr>
			<td><?php echo $associado['id']; ?></td>
			<td><?php echo $associado['cooperativa_id']; ?></td>
			<td><?php echo $associado['total_socios']; ?></td>
			<td><?php echo $associado['total_socios_ativos']; ?></td>
			<td><?php echo $associado['total_socios_ativos_DAP']; ?></td>
			<td><?php echo $associado['total_agricultores_nao_socios']; ?></td>
			<td><?php echo $associado['total_agricultores_nao_socios_DAP']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'associados', 'action' => 'view', $associado['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'associados', 'action' => 'edit', $associado['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'associados', 'action' => 'delete', $associado['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $associado['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Associado'), array('controller' => 'associados', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Aterprodutos'); ?></h3>
	<?php if (!empty($cooperativa['Aterproduto'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cooperativa Id'); ?></th>
		<th><?php echo __('Tipo Inst Publica'); ?></th>
		<th><?php echo __('Tipo Inst Privada'); ?></th>
		<th><?php echo __('Tipo ONG'); ?></th>
		<th><?php echo __('Tipo SEBRAE'); ?></th>
		<th><?php echo __('Tipo Universidade'); ?></th>
		<th><?php echo __('Tipo Outro'); ?></th>
		<th><?php echo __('Nao Acessa'); ?></th>
		<th><?php echo __('Especificar Inst Publica'); ?></th>
		<th><?php echo __('Especificar Inst Privada'); ?></th>
		<th><?php echo __('Especificar ONG'); ?></th>
		<th><?php echo __('Especificar Universidade'); ?></th>
		<th><?php echo __('Especificar Outro'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($cooperativa['Aterproduto'] as $aterproduto): ?>
		<tr>
			<td><?php echo $aterproduto['id']; ?></td>
			<td><?php echo $aterproduto['cooperativa_id']; ?></td>
			<td><?php echo $aterproduto['tipo_inst_publica']; ?></td>
			<td><?php echo $aterproduto['tipo_inst_privada']; ?></td>
			<td><?php echo $aterproduto['tipo_ONG']; ?></td>
			<td><?php echo $aterproduto['tipo_SEBRAE']; ?></td>
			<td><?php echo $aterproduto['tipo_universidade']; ?></td>
			<td><?php echo $aterproduto['tipo_outro']; ?></td>
			<td><?php echo $aterproduto['nao_acessa']; ?></td>
			<td><?php echo $aterproduto['especificar_inst_publica']; ?></td>
			<td><?php echo $aterproduto['especificar_inst_privada']; ?></td>
			<td><?php echo $aterproduto['especificar_ONG']; ?></td>
			<td><?php echo $aterproduto['especificar_universidade']; ?></td>
			<td><?php echo $aterproduto['especificar_outro']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'aterprodutos', 'action' => 'view', $aterproduto['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'aterprodutos', 'action' => 'edit', $aterproduto['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'aterprodutos', 'action' => 'delete', $aterproduto['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $aterproduto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Aterproduto'), array('controller' => 'aterprodutos', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Comercializados'); ?></h3>
	<?php if (!empty($cooperativa['Comercializado'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Produto Id'); ?></th>
		<th><?php echo __('Cooperativa Id'); ?></th>
		<th><?php echo __('Qtd PAA'); ?></th>
		<th><?php echo __('Qtd PNAE'); ?></th>
		<th><?php echo __('Qtd Mercado Livre'); ?></th>
		<th><?php echo __('Qtd Bio Disel'); ?></th>
		<th><?php echo __('Tipo Producao'); ?></th>
		<th><?php echo __('Tem Registro'); ?></th>
		<th><?php echo __('Beneficiado Processado'); ?></th>
		<th><?php echo __('Posse Estrutura Processamento'); ?></th>
		<th><?php echo __('Unidade Medida Produto'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($cooperativa['Comercializado'] as $comercializado): ?>
		<tr>
			<td><?php echo $comercializado['id']; ?></td>
			<td><?php echo $comercializado['produto_id']; ?></td>
			<td><?php echo $comercializado['cooperativa_id']; ?></td>
			<td><?php echo $comercializado['qtd_PAA']; ?></td>
			<td><?php echo $comercializado['qtd_PNAE']; ?></td>
			<td><?php echo $comercializado['qtd_mercado_livre']; ?></td>
			<td><?php echo $comercializado['qtd_bio_disel']; ?></td>
			<td><?php echo $comercializado['tipo_producao']; ?></td>
			<td><?php echo $comercializado['tem_registro']; ?></td>
			<td><?php echo $comercializado['beneficiado_processado']; ?></td>
			<td><?php echo $comercializado['posse_estrutura_processamento']; ?></td>
			<td><?php echo $comercializado['unidade_medida_produto']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'comercializados', 'action' => 'view', $comercializado['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'comercializados', 'action' => 'edit', $comercializado['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'comercializados', 'action' => 'delete', $comercializado['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $comercializado['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Comercializado'), array('controller' => 'comercializados', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Credits'); ?></h3>
	<?php if (!empty($cooperativa['Credit'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cooperativa Id'); ?></th>
		<th><?php echo __('Pronaf'); ?></th>
		<th><?php echo __('BNDES'); ?></th>
		<th><?php echo __('Programas Estaduais'); ?></th>
		<th><?php echo __('Outro'); ?></th>
		<th><?php echo __('Especificar Outro'); ?></th>
		<th><?php echo __('Nao Acessa'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($cooperativa['Credit'] as $credit): ?>
		<tr>
			<td><?php echo $credit['id']; ?></td>
			<td><?php echo $credit['cooperativa_id']; ?></td>
			<td><?php echo $credit['pronaf']; ?></td>
			<td><?php echo $credit['BNDES']; ?></td>
			<td><?php echo $credit['programas_estaduais']; ?></td>
			<td><?php echo $credit['Outro']; ?></td>
			<td><?php echo $credit['especificar_outro']; ?></td>
			<td><?php echo $credit['nao_acessa']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'credits', 'action' => 'view', $credit['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'credits', 'action' => 'edit', $credit['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'credits', 'action' => 'delete', $credit['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $credit['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Credit'), array('controller' => 'credits', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Emissao Notas'); ?></h3>
	<?php if (!empty($cooperativa['EmissaoNota'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cooperativa Id'); ?></th>
		<th><?php echo __('BlocoNFproprio'); ?></th>
		<th><?php echo __('BlocoProdutor'); ?></th>
		<th><?php echo __('NFEletronicaChavePropria'); ?></th>
		<th><?php echo __('NFEletronicaChaveTerceiros'); ?></th>
		<th><?php echo __('NFavulsa'); ?></th>
		<th><?php echo __('NaoEmite'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($cooperativa['EmissaoNota'] as $emissaoNota): ?>
		<tr>
			<td><?php echo $emissaoNota['id']; ?></td>
			<td><?php echo $emissaoNota['cooperativa_id']; ?></td>
			<td><?php echo $emissaoNota['blocoNFproprio']; ?></td>
			<td><?php echo $emissaoNota['blocoProdutor']; ?></td>
			<td><?php echo $emissaoNota['NFEletronicaChavePropria']; ?></td>
			<td><?php echo $emissaoNota['NFEletronicaChaveTerceiros']; ?></td>
			<td><?php echo $emissaoNota['NFavulsa']; ?></td>
			<td><?php echo $emissaoNota['naoEmite']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'emissao_notas', 'action' => 'view', $emissaoNota['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'emissao_notas', 'action' => 'edit', $emissaoNota['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'emissao_notas', 'action' => 'delete', $emissaoNota['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $emissaoNota['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Emissao Nota'), array('controller' => 'emissao_notas', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Faturamentos'); ?></h3>
	<?php if (!empty($cooperativa['Faturamento'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Ano'); ?></th>
		<th><?php echo __('Cooperativa Id'); ?></th>
		<th><?php echo __('Tipo Mercado'); ?></th>
		<th><?php echo __('Locais Venda'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($cooperativa['Faturamento'] as $faturamento): ?>
		<tr>
			<td><?php echo $faturamento['id']; ?></td>
			<td><?php echo $faturamento['ano']; ?></td>
			<td><?php echo $faturamento['cooperativa_id']; ?></td>
			<td><?php echo $faturamento['tipo_mercado']; ?></td>
			<td><?php echo $faturamento['locais_venda']; ?></td>
			<td><?php echo $faturamento['valor']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'faturamentos', 'action' => 'view', $faturamento['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'faturamentos', 'action' => 'edit', $faturamento['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'faturamentos', 'action' => 'delete', $faturamento['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $faturamento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Faturamento'), array('controller' => 'faturamentos', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Financas'); ?></h3>
	<?php if (!empty($cooperativa['Financa'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cooperativa Id'); ?></th>
		<th><?php echo __('Software Especifico'); ?></th>
		<th><?php echo __('Planilha Excel'); ?></th>
		<th><?php echo __('Planilha Manual'); ?></th>
		<th><?php echo __('Livro Caixa'); ?></th>
		<th><?php echo __('Outro Controle Manual'); ?></th>
		<th><?php echo __('Nao EFeito'); ?></th>
		<th><?php echo __('Outro'); ?></th>
		<th><?php echo __('Especificar Outro'); ?></th>
		<th><?php echo __('Separa Custos'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($cooperativa['Financa'] as $financa): ?>
		<tr>
			<td><?php echo $financa['id']; ?></td>
			<td><?php echo $financa['cooperativa_id']; ?></td>
			<td><?php echo $financa['software_especifico']; ?></td>
			<td><?php echo $financa['planilha_excel']; ?></td>
			<td><?php echo $financa['planilha_manual']; ?></td>
			<td><?php echo $financa['livro_caixa']; ?></td>
			<td><?php echo $financa['outro_controle_manual']; ?></td>
			<td><?php echo $financa['nao_EFeito']; ?></td>
			<td><?php echo $financa['outro']; ?></td>
			<td><?php echo $financa['especificar_outro']; ?></td>
			<td><?php echo $financa['separa_custos']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'financas', 'action' => 'view', $financa['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'financas', 'action' => 'edit', $financa['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'financas', 'action' => 'delete', $financa['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $financa['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Financa'), array('controller' => 'financas', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Funcionarios'); ?></h3>
	<?php if (!empty($cooperativa['Funcionario'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Telefone'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Cargo'); ?></th>
		<th><?php echo __('Responsavel Comercial'); ?></th>
		<th><?php echo __('Cooperativa Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($cooperativa['Funcionario'] as $funcionario): ?>
		<tr>
			<td><?php echo $funcionario['id']; ?></td>
			<td><?php echo $funcionario['Nome']; ?></td>
			<td><?php echo $funcionario['Telefone']; ?></td>
			<td><?php echo $funcionario['email']; ?></td>
			<td><?php echo $funcionario['cargo']; ?></td>
			<td><?php echo $funcionario['responsavel_comercial']; ?></td>
			<td><?php echo $funcionario['cooperativa_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'funcionarios', 'action' => 'view', $funcionario['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'funcionarios', 'action' => 'edit', $funcionario['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'funcionarios', 'action' => 'delete', $funcionario['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $funcionario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Funcionario'), array('controller' => 'funcionarios', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Logisticas'); ?></h3>
	<?php if (!empty($cooperativa['Logistica'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cooperativa Id'); ?></th>
		<th><?php echo __('Meio Transp Proprio'); ?></th>
		<th><?php echo __('Meio Transp Associado'); ?></th>
		<th><?php echo __('Meio Transp Terceirizado'); ?></th>
		<th><?php echo __('Meio Transp Comodato'); ?></th>
		<th><?php echo __('Meio Transp Nao Aplica'); ?></th>
		<th><?php echo __('Arm Materia Prima Proprio'); ?></th>
		<th><?php echo __('Arm Materia Prima Associado'); ?></th>
		<th><?php echo __('Arm Materia Prima Terceirizado'); ?></th>
		<th><?php echo __('Arm Materia Prima Comodato'); ?></th>
		<th><?php echo __('Arm Materia Prima Nao Aplica'); ?></th>
		<th><?php echo __('Arm Produto Proprio'); ?></th>
		<th><?php echo __('Arm Produto Associado'); ?></th>
		<th><?php echo __('Arm Produto Terceirizado'); ?></th>
		<th><?php echo __('Arm Produto Comodato'); ?></th>
		<th><?php echo __('Arm Produto Nao Aplica'); ?></th>
		<th><?php echo __('Participa Rede Comercio'); ?></th>
		<th><?php echo __('Participa Rede Comercio Especificar'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($cooperativa['Logistica'] as $logistica): ?>
		<tr>
			<td><?php echo $logistica['id']; ?></td>
			<td><?php echo $logistica['cooperativa_id']; ?></td>
			<td><?php echo $logistica['meio_transp_proprio']; ?></td>
			<td><?php echo $logistica['meio_transp_associado']; ?></td>
			<td><?php echo $logistica['meio_transp_terceirizado']; ?></td>
			<td><?php echo $logistica['meio_transp_comodato']; ?></td>
			<td><?php echo $logistica['meio_transp_nao_aplica']; ?></td>
			<td><?php echo $logistica['arm_materia_prima_proprio']; ?></td>
			<td><?php echo $logistica['arm_materia_prima_associado']; ?></td>
			<td><?php echo $logistica['arm_materia_prima_terceirizado']; ?></td>
			<td><?php echo $logistica['arm_materia_prima_comodato']; ?></td>
			<td><?php echo $logistica['arm_materia_prima_nao_aplica']; ?></td>
			<td><?php echo $logistica['arm_produto_proprio']; ?></td>
			<td><?php echo $logistica['arm_produto_associado']; ?></td>
			<td><?php echo $logistica['arm_produto_terceirizado']; ?></td>
			<td><?php echo $logistica['arm_produto_comodato']; ?></td>
			<td><?php echo $logistica['arm_produto_nao_aplica']; ?></td>
			<td><?php echo $logistica['participa_rede_comercio']; ?></td>
			<td><?php echo $logistica['participa_rede_comercio_especificar']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'logisticas', 'action' => 'view', $logistica['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'logisticas', 'action' => 'edit', $logistica['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'logisticas', 'action' => 'delete', $logistica['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $logistica['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Logistica'), array('controller' => 'logisticas', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Recurso Humanos'); ?></h3>
	<?php if (!empty($cooperativa['RecursoHumano'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Perfil'); ?></th>
		<th><?php echo __('QtdeProducaoPrimaria'); ?></th>
		<th><?php echo __('QtdeAgroindustrializacao'); ?></th>
		<th><?php echo __('QtdeComercializacao'); ?></th>
		<th><?php echo __('QtdeGestao'); ?></th>
		<th><?php echo __('Cooperativa Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($cooperativa['RecursoHumano'] as $recursoHumano): ?>
		<tr>
			<td><?php echo $recursoHumano['id']; ?></td>
			<td><?php echo $recursoHumano['perfil']; ?></td>
			<td><?php echo $recursoHumano['qtdeProducaoPrimaria']; ?></td>
			<td><?php echo $recursoHumano['qtdeAgroindustrializacao']; ?></td>
			<td><?php echo $recursoHumano['qtdeComercializacao']; ?></td>
			<td><?php echo $recursoHumano['qtdeGestao']; ?></td>
			<td><?php echo $recursoHumano['cooperativa_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'recurso_humanos', 'action' => 'view', $recursoHumano['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'recurso_humanos', 'action' => 'edit', $recursoHumano['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'recurso_humanos', 'action' => 'delete', $recursoHumano['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $recursoHumano['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Recurso Humano'), array('controller' => 'recurso_humanos', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Venda Marketings'); ?></h3>
	<?php if (!empty($cooperativa['VendaMarketing'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cooperativa Id'); ?></th>
		<th><?php echo __('Def Preco Somando Custolucro'); ?></th>
		<th><?php echo __('Def Preco Acima Concorrencia'); ?></th>
		<th><?php echo __('Def Preco Igual Concorrencia'); ?></th>
		<th><?php echo __('Def Preco Abaixo Concorrencia'); ?></th>
		<th><?php echo __('Def Preco Outro'); ?></th>
		<th><?php echo __('Def Preco Especificar Outro'); ?></th>
		<th><?php echo __('Logo Possui'); ?></th>
		<th><?php echo __('Logo Especificar Sim'); ?></th>
		<th><?php echo __('Marca Comercial Possui'); ?></th>
		<th><?php echo __('Marca Comercial Registrada Nome'); ?></th>
		<th><?php echo __('Marca Comercial Nao Registrada'); ?></th>
		<th><?php echo __('Peca Comunicacao Folder'); ?></th>
		<th><?php echo __('Peca Comunicacao Banner'); ?></th>
		<th><?php echo __('Peca Comunicacao Cartao'); ?></th>
		<th><?php echo __('Peca Comunicacao Site'); ?></th>
		<th><?php echo __('Peca Comunicacao Folheto'); ?></th>
		<th><?php echo __('Peca Comunicacao Rotulo'); ?></th>
		<th><?php echo __('Peca Comunicacao Display'); ?></th>
		<th><?php echo __('Peca Comunicacao Mala Direta'); ?></th>
		<th><?php echo __('Peca Comunicacao Outro'); ?></th>
		<th><?php echo __('Peca Comunicacao Especificar Outro'); ?></th>
		<th><?php echo __('Comunicacao Interna Folheto'); ?></th>
		<th><?php echo __('Comunicacao Interna Email'); ?></th>
		<th><?php echo __('Comunicacao Interna Mural'); ?></th>
		<th><?php echo __('Comunicacao Interna Edital'); ?></th>
		<th><?php echo __('Comunicacao Interna Jornal Revista'); ?></th>
		<th><?php echo __('Comunicacao Interna Outro'); ?></th>
		<th><?php echo __('Comunicacao Interna Especificar Outro'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($cooperativa['VendaMarketing'] as $vendaMarketing): ?>
		<tr>
			<td><?php echo $vendaMarketing['id']; ?></td>
			<td><?php echo $vendaMarketing['cooperativa_id']; ?></td>
			<td><?php echo $vendaMarketing['def_preco_somando_custolucro']; ?></td>
			<td><?php echo $vendaMarketing['def_preco_acima_concorrencia']; ?></td>
			<td><?php echo $vendaMarketing['def_preco_igual_concorrencia']; ?></td>
			<td><?php echo $vendaMarketing['def_preco_abaixo_concorrencia']; ?></td>
			<td><?php echo $vendaMarketing['def_preco_outro']; ?></td>
			<td><?php echo $vendaMarketing['def_preco_especificar_outro']; ?></td>
			<td><?php echo $vendaMarketing['logo_possui']; ?></td>
			<td><?php echo $vendaMarketing['logo_especificar_sim']; ?></td>
			<td><?php echo $vendaMarketing['marca_comercial_possui']; ?></td>
			<td><?php echo $vendaMarketing['marca_comercial_registrada_nome']; ?></td>
			<td><?php echo $vendaMarketing['marca_comercial_nao_registrada']; ?></td>
			<td><?php echo $vendaMarketing['peca_comunicacao_folder']; ?></td>
			<td><?php echo $vendaMarketing['peca_comunicacao_banner']; ?></td>
			<td><?php echo $vendaMarketing['peca_comunicacao_cartao']; ?></td>
			<td><?php echo $vendaMarketing['peca_comunicacao_site']; ?></td>
			<td><?php echo $vendaMarketing['peca_comunicacao_folheto']; ?></td>
			<td><?php echo $vendaMarketing['peca_comunicacao_rotulo']; ?></td>
			<td><?php echo $vendaMarketing['peca_comunicacao_display']; ?></td>
			<td><?php echo $vendaMarketing['peca_comunicacao_mala_direta']; ?></td>
			<td><?php echo $vendaMarketing['peca_comunicacao_outro']; ?></td>
			<td><?php echo $vendaMarketing['peca_comunicacao_especificar_outro']; ?></td>
			<td><?php echo $vendaMarketing['comunicacao_interna_folheto']; ?></td>
			<td><?php echo $vendaMarketing['comunicacao_interna_email']; ?></td>
			<td><?php echo $vendaMarketing['comunicacao_interna_mural']; ?></td>
			<td><?php echo $vendaMarketing['comunicacao_interna_edital']; ?></td>
			<td><?php echo $vendaMarketing['comunicacao_interna_jornal_revista']; ?></td>
			<td><?php echo $vendaMarketing['comunicacao_interna_outro']; ?></td>
			<td><?php echo $vendaMarketing['comunicacao_interna_especificar_outro']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'venda_marketings', 'action' => 'view', $vendaMarketing['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'venda_marketings', 'action' => 'edit', $vendaMarketing['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'venda_marketings', 'action' => 'delete', $vendaMarketing['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $vendaMarketing['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Venda Marketing'), array('controller' => 'venda_marketings', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
