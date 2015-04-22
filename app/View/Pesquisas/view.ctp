<div class="cooperativas view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">

				<?php echo $this->Html->link('voltar', 'javascript: history.back()');?>
				<h1><?php echo __('Dados da Cooperativa'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row"> 
		<div class="tabbable" id="tabs-1304937">
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#panel-02" data-toggle="tab">Cooperativa</a>
				</li>
				<li>
					<a href="#panel-03" data-toggle="tab">Estrutura Organizacional</a>
				</li>
				<li>
					<a href="#panel-04" data-toggle="tab">Associados</a>
				</li>
				<li>
					<a href="#panel-05" data-toggle="tab">Recursos Humanos</a>
				</li>
				<li>
					<a href="#panel-06" data-toggle="tab">Produtos Comercializados</a>
				</li>
				<li>
					<a href="#panel-01" data-toggle="tab">Estrutura de Agroindustrialização</a>
				</li>
				<li>
					<a href="#panel-07" data-toggle="tab">Tipo de Mercado</a>
				</li>
				<li>
					<a href="#panel-08" data-toggle="tab">Distribuição</a>
				</li>
				<li>
					<a href="#panel-09" data-toggle="tab">Obs. fiscais e Tributairas</a>
				</li>
				<li>
					<a href="#panel-10" data-toggle="tab">Políticas Públicas</a>
				</li>
				<li>
					<a href="#panel-11" data-toggle="tab">Finaças e custos</a>
				</li>
				<li>
					<a href="#panel-12" data-toggle="tab">Vendas e Marketing</a>
				</li>
			</ul>
			<div class="tab-content">
				<div class="tab-pane table-responsive" id="panel-01">
					<table class="table table-hover text-center">
						<thead>
							<tr>
								<th rowspan="3" class="text-center">
									Tipo de Estrutura
								</th>
								<th rowspan="3" class="text-center">
									Tamanho da unidade (m²)
								</th>
								<th rowspan="3" class="text-center">
									Propriedade da Estrutura de Processamento
								</th>
								<th rowspan="3" class="text-center">
									Possui Alvará Sanitário
								</th>
								<th rowspan="3" class="text-center">
									Possui Alvará Ambiental
								</th>
								<th colspan="6" class="text-center">
									Capacidades Diárias de
								</th>
							</tr>
							<tr >
								<th colspan="2" class="text-center">
									Processamento de Matéria Prima
								</th>
								<th colspan="2" class="text-center">
									Armazenamento de Matéria Prima
								</th>
								<th colspan="2" class="text-center">
									Armazenamento do Produto Final
								</th>
							</tr>
							<tr >
								<th class="text-center">
									Unidade
								</th>
								<th class="text-center">
									Quantidade
								</th>
								<th class="text-center">
									Unidade
								</th>
								<th class="text-center">
									Quantidade
								</th>
								<th class="text-center">
									Unidade
								</th>
								<th class="text-center">
									Quantidade
								</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($cooperativa['Agronegocio'] as $agronegocio): ?>
							<tr>
								<td><?php echo $agronegocio['tipo_estrutura']; ?></td>
								<td><?php echo $agronegocio['tamanho_unidade']; ?></td>
								<td><?php echo $agronegocio['tipo_propriedade_estrutura']; ?></td>
								<td><?php echo $agronegocio['alvara_sanitario']; ?></td>
								<td><?php echo $agronegocio['alvara_publico']; ?></td>
								<td><?php echo $agronegocio['unidade_medida_processamento']; ?></td>
								<td><?php echo $agronegocio['qtd_cap_diaria_processamento']; ?></td>
								<td><?php echo $agronegocio['unidade_medida_armazenamento_materia_prima']; ?></td>
								<td><?php echo $agronegocio['qtd_cap_diaria_armazenamento_materia_prima']; ?></td>
								<td><?php echo $agronegocio['unidade_medida_armazenamento_produto_final']; ?></td>
								<td><?php echo $agronegocio['qtd_cap_diaria_armazenamento_produto_final']; ?></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				<div class="tab-pane  active" id="panel-02">
					<div class="container">
						<div class="row">
							<div class="row text-center">
					            <h3>Dados da Cooperativa</h3>
					        </div>
					        <hr>
							<div class="row">
					            <label class="col-md-3">
					                Razão Social (RFB)
					            </label>
					            <label class="col-md-9">
					                <?php echo h($cooperativa['Cooperativa']['razao_social']); ?>
									&nbsp;
					            </label>
					        </div>
					        <div class="row">
					            <label class="col-md-3">
					                Sigla
					            </label>
					            <label class="col-md-9">
					                <?php echo h($cooperativa['Cooperativa']['sigla']); ?>
									&nbsp;
					            </label>
					        </div>
					        <div class="row">
					            <label class="col-md-3">
					                Município
					            </label>
					            <label class="col-md-9">
					            	<?php echo h($cooperativa['Cooperativa']['municipio']); ?>
					            </label>
					        </div>
					        <div class="row">
					            <label class="col-md-3">
					                UF
					            </label>
					            <label class="col-md-9">
					                 <?php echo h($cooperativa['Cooperativa']['uf']); ?>
					            </label>
					        </div>
					        <div class="row">
					            <label class="col-md-3">
					                CEP
					            </label>
					            <label class="col-md-9">
					                 <?php echo h($cooperativa['Cooperativa']['cep']); ?>
					            </label>
					        </div>
					        <div class="row">
					            <label class="col-md-3">
					                Endereço Completo
					            </label>
					            <label class="col-md-9">
					                 <?php echo h($cooperativa['Cooperativa']['endereco_completo']); ?>
					            </label>
					        </div>
					        <div class="row">
					            <label class="col-md-3">
					                Telefone
					            </label>
					            <label class="col-md-9">
					                <?php echo h($cooperativa['Cooperativa']['telefone']); ?>
					            </label>
					        </div>
					        <div class="row">
					            <label class="col-md-3">
					                E-mail
					            </label>
					            <label class="col-md-9">
					                <?php echo h($cooperativa['Cooperativa']['email']); ?>
					            </label>
					        </div>
					        <div class="row">
					            <label class="col-md-3">
					                Sitio Eletronico
					            </label>
					            <label class="col-md-9">
					                <?php echo h($cooperativa['Cooperativa']['site']); ?>
					            </label>
					        </div>
					        <div class="row">
					            <label class="col-md-3">
					                CNPJ
					            </label>
					            <label class="col-md-9">
					                <?php echo h($cooperativa['Cooperativa']['CNPJ']); ?>
									&nbsp;
					            </label>
					        </div>
					        <div class="row">
					            <label class="col-md-3">
					                Inscrição Estadual
					            </label>
					            <label class="col-md-9">
					                <?php echo h($cooperativa['Cooperativa']['inscricao_estadual']); ?>
					            </label>
					        </div>
					        <div class="row">
					            <label class="col-md-3">
					                Inscrição Municipal
					            </label>
					            <label class="col-md-9">
					                <?php echo h($cooperativa['Cooperativa']['inscricao_municipal']); ?>
					            </label>
					        </div>
					        <div class="row">
					            <label class="col-md-3">
					                Data de Constituição
					            </label>
					            <label class="col-md-9">
					                <?php echo h($cooperativa['Cooperativa']['data_constituicao']); ?>
					            </label>
					        </div>
					        <?php 
					        	foreach ($cooperativa['Funcionario'] as $funcionario): 
					        		if($funcionario['responsavel_comercial']):
					        ?>
		        			<div class="row">
					            <label class="col-md-3">
					                Nome do Responsável Comercial
					            </label>
					            <label class="col-md-9">
					                <?php echo $funcionario['Nome']; ?>
					            </label>
					        </div>
					        <div class="row">
					            <label class="col-md-3">
					                Cargo do Responsável Comercial
					            </label>
					            <label class="col-md-9">
					                <?php echo $funcionario['cargo']; ?>
					            </label>
					        </div>
					        <div class="row">
					            <label class="col-md-3">
					                Telefone do REsponsável
					            </label>
					            <label class="col-md-9">
					                <?php echo $funcionario['Telefone']; ?>
					            </label>
					        </div>
					        <div class="row">
					            <label class="col-md-3">
					                E-mail do Responsável
					            </label>
					            <label class="col-md-9">
					                <?php echo $funcionario['email']; ?>
					            </label>
					        </div>
							<?php endif; endforeach; ?>
						</div><!-- end row -->
					</div>
				</div>
				<div class="tab-pane table-responsive" id="panel-03">
					<div class="row text-center">
			            <h3>Quandro de Diretoria e de Gerentes da Cooperativa</h3>
			        </div>
					<table class="table table-hover text-center">
						<thead>
							<tr>
								<th class="text-center">
									Função
								</th>
								<th class="text-center">
									Nome
								</th>
							</tr>
						</thead>
						<tbody>
							<?php 
					        	foreach ($cooperativa['Funcionario'] as $funcionario):
					        ?>
							<tr>
								<td>
									<?php echo $funcionario['cargo']; ?>
								</td>
								<td>
									<?php echo $funcionario['Nome']; ?>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				<div class="tab-pane" id="panel-04">
					<div class="container">
						<?php foreach ($cooperativa['Associado'] as $associado): ?>
						<div class="row">
				            <label class="col-md-4">
				                Nº Total de Sócios
				            </label>
				            <label class="col-md-8">
				                <?php echo $associado['total_socios']; ?>
				            </label>
				        </div>
				        <div class="row">
				            <label class="col-md-4">
				                Nº de Sócios com DAP
				            </label>
				            <label class="col-md-8">
				                
				            </label>
				        </div>
				        <hr>
				        <div class="row">
				            <label class="col-md-4">
				                Nº de Sócios "Ativos" Total
				            </label>
				            <label class="col-md-8">
				                <?php echo $associado['total_socios_ativos']; ?>
				            </label>
				        </div>
				        <div class="row">
				            <label class="col-md-4">
				                Nº de Sócios "Ativos" com DAP
				            </label>
				            <label class="col-md-8">
				                <?php echo $associado['total_socios_ativos_DAP']; ?>
				            </label>
				        </div>
				        <hr>
				        <div class="row">
				            <label class="col-md-4">
				                Nº de Agricultores não Sócios Total
				            </label>
				            <label class="col-md-8">
				                <?php echo $associado['total_agricultores_nao_socios']; ?>
				            </label>
				        </div>
				        <div class="row">
				            <label class="col-md-4">
				                Nº de Agricultores não Sócios com DAP
				            </label>
				            <label class="col-md-8">
				                <?php echo $associado['total_agricultores_nao_socios_DAP']; ?>
				            </label>
				        </div>
				    	<?php endforeach; ?>
				        <hr>
				        <div class="related row">
							<table cellpadding = "0" cellspacing = "0" class="table table-striped">
							<thead>
							<tr>
								<th>Dos Associados com DAP</th>
								<?php foreach ($associado['Socio'] as $socio): ?>
								<th><?php echo $socio['tipo_socio'] ?></th>
								<?php endforeach; ?>
							</tr>
							<thead>
							<tbody>
								<tr>
									<td>Nº de Homens</td>
									<?php foreach ($associado['Socio'] as $socio): ?>
									<td><?php echo $socio['NumM']; ?></td>
									<?php endforeach; ?>
								</tr>
								<tr>
									<td>Nº de Mulheres</td>
									<?php foreach ($associado['Socio'] as $socio): ?>
									<td><?php echo $socio['NumH']; ?></td>
									<?php endforeach; ?>
								</tr>
							</tbody>
							</table>
						</div>
				        
				    </div>    
				</div>
				<div class="tab-pane" id="panel-05">
					<div class="table-responsive">
						<table class="table table-hover text-center">
							<head>
								<tr>
									<th>
										PERFIL
									</th>
									<th>
										Produção Prímaria
									</th>
									<th>
										Agroindustrialização
									</th>
									<th>
										comercialização
									</th>
									<th>
										Gestão/administração
									</th>
								</tr>
							</head>
							<tbody>
								<?php foreach ($cooperativa['RecursoHumano'] as $recursoHumano): ?>
								<tr>
									<th>
										<?php echo $recursoHumano['perfil']; ?>
									</th>
									<td>
										<?php echo $recursoHumano['qtdeProducaoPrimaria']; ?>
									</td>
									<td>
										<?php echo $recursoHumano['qtdeAgroindustrializacao']; ?>
									</td>
									<td>
										<?php echo $recursoHumano['qtdeComercializacao']; ?>
									</td>
									<td>
										<?php echo $recursoHumano['qtdeGestao']; ?>
									</td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
				    </div>    
				</div>
				<div class="tab-pane" id="panel-06">
					<div class="table-responsive">
						<h3>Produtos de Origem Vegetal</h3>
						<table class="table table-hover text-center">
							<head>
								<tr>
									<th>
										Produto
									</th>
									<th>
										Unidade de Medida
									</th>
									<th>
										Quantidade no PAA
									</th>
									<th>
										Quantidade PNAE
									</th>
									<th>
										Quantidade Biodisel
									</th>
									<th>
										Quantidade Mercado Livre
									</th>
									<th>
										Beneficiado Processado
									</th>
									<th>
										Posse da Estrutura do Processamento
									</th>
									<th>
										Tipo de Produção
									</th>
									<th>
										Tem Registro
									</th>
								</tr>
							</head>
							<tbody>
								<?php foreach ($cooperativa['Comercializado'] as $comercializado): 
								if($comercializado['Produto']['OrigemVegetal'] == 1) :?>

								<tr>
									<td><?php echo $comercializado['Produto']['Nome']; ?></td>
									<td><?php echo $comercializado['unidade_medida_produto']; ?></td>
									<td><?php echo $comercializado['qtd_PAA']; ?></td>
									<td><?php echo $comercializado['qtd_PNAE']; ?></td>
									<td><?php echo $comercializado['qtd_bio_disel']; ?></td>
									<td><?php echo $comercializado['qtd_mercado_livre']; ?></td>
									<td><?php echo $comercializado['beneficiado_processado']; ?></td>
									<td><?php echo $comercializado['posse_estrutura_processamento']; ?></td>
									<td><?php echo $comercializado['tipo_producao']; ?></td>
									<td><?php echo $comercializado['tem_registro']; ?></td>
								</tr>
								<?php endif; endforeach; ?>
							</tbody>
						</table>
						<hr>
						<h3>Produtos de Origem Animal</h3>
						
						<table class="table table-hover text-center">
							<head>
								<tr>
									<th>
										Produto
									</th>
									<th>
										Unidade de Medida
									</th>
									<th>
										Quantidade no PAA
									</th>
									<th>
										Quantidade PNAE
									</th>
									<th>
										Quantidade Mercado Livre
									</th>
									<th>
										Beneficiado Processado
									</th>
									<th>
										Posse da Estrutura do Processamento
									</th>
									<th>
										Tipo de Produção
									</th>
									<th>
										Tem Registro
									</th>
								</tr>
							</head>
							<tbody>
								<?php foreach ($cooperativa['Comercializado'] as $comercializado):
								if($comercializado['Produto']['OrigemVegetal'] == 0) :?>

								<tr>
									<td><?php echo $comercializado['Produto']['Nome']; ?></td>
									<td><?php echo $comercializado['unidade_medida_produto']; ?></td>
									<td><?php echo $comercializado['qtd_PAA']; ?></td>
									<td><?php echo $comercializado['qtd_PNAE']; ?></td>
									<td><?php echo $comercializado['qtd_mercado_livre']; ?></td>
									<td><?php echo $comercializado['beneficiado_processado']; ?></td>
									<td><?php echo $comercializado['posse_estrutura_processamento']; ?></td>
									<td><?php echo $comercializado['tipo_producao']; ?></td>
									<td><?php echo $comercializado['tem_registro']; ?></td>
								</tr>
								<?php endif; endforeach; ?>
							</tbody>
						</table>
				    </div>    
				</div>
				<div class="tab-pane" id="panel-07">
					<div class="table-responsive">
						<table class="table table-hover text-center">
							<head>
								<tr>
									<th class="text-center">Tipo de Mercado</th>
									<th class="text-center">Ano</th>
									<th class="text-center">Valor</th>
									<th class="text-center">Locais de Venda</th>
								</tr>
							</head>
							<tbody>
								<?php foreach ($cooperativa['Faturamento'] as $faturamento): ?>
								<tr>
									<td><?php echo $faturamento['tipo_mercado']; ?></td>
									<td><?php echo $faturamento['ano']; ?></td>
									<td><?php echo $faturamento['valor']; ?></td>
									<td><?php echo $faturamento['locais_venda']; ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="tab-pane" id="panel-08">
					<div class="table-responsive">
						<h3>Meio de Transporte usados na Comercialização</h3>
						<table class="table table-hover text-center">
							<head>
								<tr>
									<th class="text-center">Próprios (da Cooperativa)</th>
									<th class="text-center">de Associado</th>
									<th class="text-center">Terceirizado</th>
									<th class="text-center">Comodato</th>
									<th class="text-center">Não se Aplica</th>
								</tr>
							</head>
							<tbody>
								<?php foreach ($cooperativa['Logistica'] as $logistica): ?>
								<tr>
									<td><?php echo $logistica['meio_transp_proprio']; ?></td>
									<td><?php echo $logistica['meio_transp_associado']; ?></td>
									<td><?php echo $logistica['meio_transp_terceirizado']; ?></td>
									<td><?php echo $logistica['meio_transp_comodato']; ?></td>
									<td><?php echo $logistica['meio_transp_nao_aplica']; ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
						<h3>As Estruturas de Armazenamento das Matérias-Prima</h3>
						<table class="table table-hover text-center">
							<head>
								<tr>
									<th class="text-center">Próprios (da Cooperativa)</th>
									<th class="text-center">de Associado</th>
									<th class="text-center">Terceirizado</th>
									<th class="text-center">Comodato</th>
									<th class="text-center">Não se Aplica</th>
								</tr>
							</head>
							<tbody>
								<?php foreach ($cooperativa['Logistica'] as $logistica): ?>
								<tr>
									<td><?php echo $logistica['arm_materia_prima_proprio']; ?></td>
									<td><?php echo $logistica['arm_materia_prima_associado']; ?></td>
									<td><?php echo $logistica['arm_materia_prima_terceirizado']; ?></td>
									<td><?php echo $logistica['arm_materia_prima_comodato']; ?></td>
									<td><?php echo $logistica['arm_materia_prima_nao_aplica']; ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
						<h3>As Estruturas de Armazenamento dos Produtos</h3>
						<table class="table table-hover text-center">
							<head>
								<tr>
									<th class="text-center">Próprios (da Cooperativa)</th>
									<th class="text-center">de Associado</th>
									<th class="text-center">Terceirizado</th>
									<th class="text-center">Comodato</th>
									<th class="text-center">Não se Aplica</th>
								</tr>
							</head>
							<tbody>
								<?php foreach ($cooperativa['Logistica'] as $logistica): ?>
								<tr>
									<td><?php echo $logistica['arm_produto_proprio']; ?></td>
									<td><?php echo $logistica['arm_produto_associado']; ?></td>
									<td><?php echo $logistica['arm_produto_terceirizado']; ?></td>
									<td><?php echo $logistica['arm_produto_comodato']; ?></td>
									<td><?php echo $logistica['arm_produto_nao_aplica']; ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
						<?php foreach ($cooperativa['Logistica'] as $logistica): ?>
						<div class="row">
				            <label class="col-md-4">
				                Participa em Redes de Comercialização
				            </label>
				            <label class="col-md-8">
				                <?php echo $logistica['participa_rede_comercio']; ?>	
				            </label>
				        </div>
				        <div class="row">
				            <label class="col-md-4">
				                se SIM. Especificar
				            </label>
				            <label class="col-md-8">
				                <?php echo $logistica['participa_rede_comercio_especificar']; ?>
				            </label>
				        </div>
				        <?php endforeach; ?>
					</div>
				</div>
				<div class="tab-pane" id="panel-09">
					<div class="table-responsive">
						<h3>Como se dá a Emissão de Notas Fiscais</h3>
						<table class="table table-hover text-center">
							<head>
								<tr>
									<th class="text-center">Bloco de NF Próprio</th>
									<th class="text-center">Bloco do Produtor</th>
									<th class="text-center">NF Eletrônica com Chave Própria</th>
									<th class="text-center">NF Eletrônica com Chave de Terceiros</th>
									<th class="text-center">NF Avulsa</th>
									<th class="text-center">Não Emite NF</th>
								</tr>
							</head>
							<tbody>
								<?php foreach ($cooperativa['EmissaoNota'] as $emissaoNota): ?>
								<tr>
									<td><?php echo $emissaoNota['blocoNFproprio']; ?></td>
									<td><?php echo $emissaoNota['blocoProdutor']; ?></td>
									<td><?php echo $emissaoNota['NFEletronicaChavePropria']; ?></td>
									<td><?php echo $emissaoNota['NFEletronicaChaveTerceiros']; ?></td>
									<td><?php echo $emissaoNota['NFavulsa']; ?></td>
									<td><?php echo $emissaoNota['naoEmite']; ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="tab-pane" id="panel-10">
					<div class="table-responsive">
						<table class="table table-hover text-center">
							<head>
								<tr>
									<th class="text-center">Acesso à ATER para Produção</th>
									<th class="text-center">Assistência</th>
									<th class="text-center">Instituição, ONG e Outro</th>
								</tr>
							</head>
							<tbody>
								<?php foreach ($cooperativa['Aterproduto'] as $aterproduto): ?>
								<tr>
									<td>Instituição Pública</td>
									<td><?php echo $aterproduto['tipo_inst_publica']; ?></td>
									<td><?php echo $aterproduto['especificar_inst_publica']; ?></td>
								</tr>
								<tr>
									<td>Instuição Privada</td>
									<td><?php echo $aterproduto['tipo_inst_privada']; ?></td>
									<td><?php echo $aterproduto['especificar_inst_privada']; ?></td>
								</tr>
								<tr>
									<td>ONG. Especificar</td>
									<td><?php echo $aterproduto['tipo_ONG']; ?></td>
									<td><?php echo $aterproduto['especificar_ONG']; ?></td>
								</tr>
								<tr>
									<td>SEBRAE</td>
									<td><?php echo $aterproduto['tipo_SEBRAE']; ?></td>
									<td>X</td>
								</tr>
								<tr>
									<td>Universidade</td>
									<td><?php echo $aterproduto['tipo_universidade']; ?></td>
									<td><?php echo $aterproduto['especificar_universidade']; ?></td>
								</tr>
								<tr>
									<td>Outro Especificar</td>
									<td><?php echo $aterproduto['tipo_outro']; ?></td>
									<td><?php echo $aterproduto['especificar_outro']; ?></td>
								</tr>
								<tr>
									<td>Não Acessa</td>
									<td colspan="2"><?php echo $aterproduto['nao_acessa']; ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<div class="table-responsive">
						<h3>Crédito para a Cooperativa</h3>
						<table class="table table-hover text-center">
							<head>
								<tr>
									<th class="text-center">Pronaf</th>
									<th class="text-center">BNDES</th>
									<th class="text-center">Programa Estadual</th>
									<th class="text-center">Outro Especificar</th>
									<th class="text-center">Não Acessa</th>
								</tr>
							</head>
							<tbody>
								<?php foreach ($cooperativa['Credit'] as $credit): ?>
								<tr>
									<td><?php echo $credit['pronaf']; ?></td>
									<td><?php echo $credit['BNDES']; ?></td>
									<td><?php echo $credit['programas_estaduais']; ?></td>
									<td><?php echo $credit['Outro']; ?></td>
									<td><?php echo $credit['nao_acessa']; ?></td>
								</tr>
								<tr>
									<td>especificar</td>
									<td class="text-center" colspan="4"><?php echo $credit['especificar_outro']; ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="tab-pane" id="panel-11">
					<div class="table-responsive">
						<h3>Como a Cooperativa registra e analisa os custos de Produção</h3>
						<table class="table table-hover text-center">
							<head>
								<tr>
									<th class="text-center">Software Especifico de Gestão e Controle</th>
									<th class="text-center">Planilhas Excel</th>
									<th class="text-center">Planilhas Manuais</th>
									<th class="text-center">Livro Caixa</th>
									<th class="text-center">Outras Formas de Controle Manual</th>
									<th class="text-center">Não é feito</th>
									<th class="text-center">Outro especificar</th>
								</tr>
							</head>
							<tbody>
								<?php foreach ($cooperativa['Financa'] as $financa): ?>
								<tr>
									<td><?php echo $financa['software_especifico']; ?></td>
									<td><?php echo $financa['planilha_excel']; ?></td>
									<td><?php echo $financa['planilha_manual']; ?></td>
									<td><?php echo $financa['livro_caixa']; ?></td>
									<td><?php echo $financa['outro_controle_manual']; ?></td>
									<td><?php echo $financa['nao_EFeito']; ?></td>
									<td><?php echo $financa['especificar_outro']; ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<div class="table-responsive">
						<h3>Qual o Valor das Despesas dos Últimos 3 Anos</h3>
						<table cellpadding = "0" cellspacing = "0" class="table table-striped">
							<thead>
							<tr>
								<th><?php echo __('Ano'); ?></th>
								<th><?php echo __('Materia Prima'); ?></th>
								<th><?php echo __('Custo Operacional'); ?></th>
								<th><?php echo __('Custo Administrativo'); ?></th>
								<th><?php echo __('Folha Pagamento'); ?></th>
								<th><?php echo __('Outro'); ?></th>
								<th><?php echo __('Especificar Outro'); ?></th>
							</tr>
							<thead>
							<tbody>
								<?php foreach ($cooperativa['Financa'] as $financa): ?>
								<?php foreach ($financa['ValorDespesa'] as $valorDespesa): ?>
								<tr>
									<td><?php echo $valorDespesa['Ano']; ?></td>
									<td><?php echo $valorDespesa['materia_prima']; ?></td>
									<td><?php echo $valorDespesa['custo_operacional']; ?></td>
									<td><?php echo $valorDespesa['custo_administrativo']; ?></td>
									<td><?php echo $valorDespesa['folha_pagamento']; ?></td>
									<td><?php echo $valorDespesa['outro']; ?></td>
									<td><?php echo $valorDespesa['especificar_outro']; ?></td>
								</tr>
							<?php endforeach; endforeach; ?>
							</tbody>
						</table>
					</div>
					<div class="table-responsive">
						<h3>Qual o Valor dos Investimentos dos Últimos 3 Anos</h3>
						<table cellpadding = "0" cellspacing = "0" class="table table-striped">
							<thead>
							<tr>
								<th><?php echo __('Ano'); ?></th>
								<th><?php echo __('Terra'); ?></th>
								<th><?php echo __('Estrutura Fisica'); ?></th>
								<th><?php echo __('Equipamento'); ?></th>
								<th><?php echo __('Aplicacao Financeira'); ?></th>
								<th><?php echo __('Outro'); ?></th>
								<th><?php echo __('Especificar Outro'); ?></th>
							</tr>
							<thead>
							<tbody>
								<?php foreach ($cooperativa['Financa'] as $financa): ?>
								<?php foreach ($financa['ValorInvestimento'] as $valorInvestimento): ?>
								<tr>
									<td><?php echo $valorInvestimento['ano']; ?></td>
									<td><?php echo $valorInvestimento['terra']; ?></td>
									<td><?php echo $valorInvestimento['estrutura_fisica']; ?></td>
									<td><?php echo $valorInvestimento['equipamento']; ?></td>
									<td><?php echo $valorInvestimento['aplicacao_financeira']; ?></td>
									<td><?php echo $valorInvestimento['outro']; ?></td>
									<td><?php echo $valorInvestimento['especificar_outro']; ?></td>
								</tr>
							<?php endforeach; endforeach; ?>
							</tbody>
						</table>
					</div>
					<div class="related row">
						<h3>Qual o Valor do Patrimônio dos Últimos 3 Anos</h3>
						<table cellpadding = "0" cellspacing = "0" class="table table-striped">
							<thead>
							<tr>
								<th><?php echo __('Ano'); ?></th>
								<th><?php echo __('Terra'); ?></th>
								<th><?php echo __('Estrutura Fisica'); ?></th>
								<th><?php echo __('Equipamento'); ?></th>
								<th><?php echo __('Aplicacao Financeira'); ?></th>
								<th><?php echo __('Em Estoque'); ?></th>
								<th><?php echo __('Outro'); ?></th>
								<th><?php echo __('Especificar Outro'); ?></th>
								<th class="actions"></th>
							</tr>
							<thead>
							<tbody>
								<?php foreach ($cooperativa['Financa'] as $financa): ?>
								<?php foreach ($financa['ValorPatrimonio'] as $valorPatrimonio): ?>
								<tr>
									<td><?php echo $valorPatrimonio['ano']; ?></td>
									<td><?php echo $valorPatrimonio['terra']; ?></td>
									<td><?php echo $valorPatrimonio['estrutura_fisica']; ?></td>
									<td><?php echo $valorPatrimonio['equipamento']; ?></td>
									<td><?php echo $valorPatrimonio['aplicacao_financeira']; ?></td>
									<td><?php echo $valorPatrimonio['em_estoque']; ?></td>
									<td><?php echo $valorPatrimonio['outro']; ?></td>
									<td><?php echo $valorPatrimonio['especificar_outro']; ?></td>
								</tr>
							<?php endforeach; endforeach; ?>
							</tbody>
						</table>
					</div>
					<div class="related row">
						<h3>Qual o Valor da Receita dos Últimos 3 Anos</h3>
						<table cellpadding = "0" cellspacing = "0" class="table table-striped">
							<thead>
							<tr>
								<th><?php echo __('Ano'); ?></th>
								<th><?php echo __('Valor Receita'); ?></th>
								<th><?php echo __('Doacoes'); ?></th>
								<th><?php echo __('Taxas'); ?></th>
								<th><?php echo __('Aluguel Outros Servico'); ?></th>
								<th><?php echo __('Rendimento Financeiro'); ?></th>
								<th><?php echo __('Outro'); ?></th>
								<th><?php echo __('Especificar Outro'); ?></th>
								<th class="actions"></th>
							</tr>
							<thead>
							<tbody>
								<?php foreach ($cooperativa['Financa'] as $financa): ?>
								<?php foreach ($financa['ValorReceita'] as $valorReceita): ?>
								<tr>
									<td><?php echo $valorReceita['ano']; ?></td>
									<td><?php echo $valorReceita['valor_receita']; ?></td>
									<td><?php echo $valorReceita['doacoes']; ?></td>
									<td><?php echo $valorReceita['taxas']; ?></td>
									<td><?php echo $valorReceita['aluguel_outros_servico']; ?></td>
									<td><?php echo $valorReceita['rendimento_financeiro']; ?></td>
									<td><?php echo $valorReceita['outro']; ?></td>
									<td><?php echo $valorReceita['especificar_outro']; ?></td>
								</tr>
							<?php endforeach; endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
				<div class="tab-pane" id="panel-12">
					<div class="table-responsive">
						<h3>Como foi Definido o Preço do Produto</h3>
						<table class="table table-hover text-center">
							<head>
								<tr>
									<th class="text-center">Somando custo de produção e margem de lucro</th>
									<th class="text-center">Um pouco acima da concorrência</th>
									<th class="text-center">Igual ao da concorrência</th>
									<th class="text-center">Um pouco abaixo da concorrência</th>
									<th class="text-center">Outro</th>
									<th class="text-center">especificar</th>
								</tr>
							</head>
							<tbody>
								<?php foreach ($cooperativa['VendaMarketing'] as $vendaMarketing): ?>
								<tr>
									<td><?php echo $vendaMarketing['def_preco_somando_custolucro']; ?></td>
									<td><?php echo $vendaMarketing['def_preco_acima_concorrencia']; ?></td>
									<td><?php echo $vendaMarketing['def_preco_igual_concorrencia']; ?></td>
									<td><?php echo $vendaMarketing['def_preco_abaixo_concorrencia']; ?></td>
									<td><?php echo $vendaMarketing['def_preco_outro']; ?></td>
									<td><?php echo $vendaMarketing['def_preco_especificar_outro']; ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<div class="table-responsive">
						<h3>O Empreendimento possui Logomarca</h3>
						<table class="table table-hover text-center">
							<head>
								<tr>
									<th class="text-center">Sim</th>
									<th class="text-center">Não - Especificar</th>
								</tr>
							</head>
							<tbody>
								<?php foreach ($cooperativa['VendaMarketing'] as $vendaMarketing): ?>
								<tr>
									<td><?php echo $vendaMarketing['logo_possui']; ?></td>
									<td><?php echo $vendaMarketing['logo_especificar_sim']; ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<div class="table-responsive">
						<h3>O empreendimento possui Marca Comercial</h3>
						<table class="table table-hover text-center">
							<head>
								<tr>
									<th class="text-center">Não</th>
									<th class="text-center">Sim, porem não é registrada</th>
									<th class="text-center">Sim e a marca é registrada - Nome</th>
								</tr>
							</head>
							<tbody>
								<?php foreach ($cooperativa['VendaMarketing'] as $vendaMarketing): ?>
								<tr>
									<td><?php echo $vendaMarketing['marca_comercial_possui']; ?></td>
									<td><?php echo $vendaMarketing['marca_comercial_nao_registrada']; ?></td>
									<td><?php echo $vendaMarketing['marca_comercial_registrada_nome']; ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<div class="table-responsive">
						<h3>Quais as Peças de Comunicação Externa o Empreendimento Utiliza</h3>
						<table class="table table-hover text-center">
							<head>
								<tr>
									<th class="text-center">Folder</th>
									<th class="text-center">Baner</th>
									<th class="text-center">Cartão de Visitas</th>
									<th class="text-center">Site</th>
									<th class="text-center">Folhetos promocionais de produtos</th>
									<th class="text-center">Rotulos</th>
									<th class="text-center">Display para produtos</th>
									<th class="text-center">Mala direta via E-mail</th>
									<th class="text-center">Outro</th>
									<th class="text-center">Especificar</th>
								</tr>
							</head>
							<tbody>
								<?php foreach ($cooperativa['VendaMarketing'] as $vendaMarketing): ?>
								<tr>
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
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<div class="table-responsive">
						<h3>Quais Instrumento de Comunicação Interna do Empreendimento com seus Associados</h3>
						<table class="table table-hover text-center">
							<head>
								<tr>
									<th class="text-center">Folheto</th>
									<th class="text-center">E-mail</th>
									<th class="text-center">Mural</th>
									<th class="text-center">Edital</th>
									<th class="text-center">Jornal ou Revista</th>
									<th class="text-center">Outro</th>
									<th class="text-center">especificar</th>
								</tr>
							</head>
							<tbody>
								<?php foreach ($cooperativa['VendaMarketing'] as $vendaMarketing): ?>
								<tr>
									<td><?php echo $vendaMarketing['comunicacao_interna_folheto']; ?></td>
									<td><?php echo $vendaMarketing['comunicacao_interna_email']; ?></td>
									<td><?php echo $vendaMarketing['comunicacao_interna_mural']; ?></td>
									<td><?php echo $vendaMarketing['comunicacao_interna_edital']; ?></td>
									<td><?php echo $vendaMarketing['comunicacao_interna_jornal_revista']; ?></td>
									<td><?php echo $vendaMarketing['comunicacao_interna_outro']; ?></td>
									<td><?php echo $vendaMarketing['comunicacao_interna_especificar_outro']; ?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
