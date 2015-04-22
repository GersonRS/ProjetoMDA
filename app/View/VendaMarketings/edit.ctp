<div class="vendaMarketings form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
						<?php echo $this->Html->link('voltar', 'javascript: history.back()'); ?>
				<h1><?php echo __('Edit Venda Marketing'); ?></h1>
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

																<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('VendaMarketing.id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('VendaMarketing.id'))); ?></li>
																<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Venda Marketings'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Cooperativas'), array('controller' => 'cooperativas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Cooperativa'), array('controller' => 'cooperativas', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('VendaMarketing', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('cooperativa_id', array('class' => 'form-control', 'placeholder' => 'Cooperativa Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('def_preco_somando_custolucro', array('class' => 'form-control', 'placeholder' => 'Def Preco Somando Custolucro'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('def_preco_acima_concorrencia', array('class' => 'form-control', 'placeholder' => 'Def Preco Acima Concorrencia'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('def_preco_igual_concorrencia', array('class' => 'form-control', 'placeholder' => 'Def Preco Igual Concorrencia'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('def_preco_abaixo_concorrencia', array('class' => 'form-control', 'placeholder' => 'Def Preco Abaixo Concorrencia'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('def_preco_outro', array('class' => 'form-control', 'placeholder' => 'Def Preco Outro'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('def_preco_especificar_outro', array('class' => 'form-control', 'placeholder' => 'Def Preco Especificar Outro'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('logo_possui', array('class' => 'form-control', 'placeholder' => 'Logo Possui'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('logo_especificar_sim', array('class' => 'form-control', 'placeholder' => 'Logo Especificar Sim'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('marca_comercial_possui', array('class' => 'form-control', 'placeholder' => 'Marca Comercial Possui'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('marca_comercial_registrada_nome', array('class' => 'form-control', 'placeholder' => 'Marca Comercial Registrada Nome'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('marca_comercial_nao_registrada', array('class' => 'form-control', 'placeholder' => 'Marca Comercial Nao Registrada'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('peca_comunicacao_folder', array('class' => 'form-control', 'placeholder' => 'Peca Comunicacao Folder'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('peca_comunicacao_banner', array('class' => 'form-control', 'placeholder' => 'Peca Comunicacao Banner'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('peca_comunicacao_cartao', array('class' => 'form-control', 'placeholder' => 'Peca Comunicacao Cartao'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('peca_comunicacao_site', array('class' => 'form-control', 'placeholder' => 'Peca Comunicacao Site'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('peca_comunicacao_folheto', array('class' => 'form-control', 'placeholder' => 'Peca Comunicacao Folheto'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('peca_comunicacao_rotulo', array('class' => 'form-control', 'placeholder' => 'Peca Comunicacao Rotulo'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('peca_comunicacao_display', array('class' => 'form-control', 'placeholder' => 'Peca Comunicacao Display'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('peca_comunicacao_mala_direta', array('class' => 'form-control', 'placeholder' => 'Peca Comunicacao Mala Direta'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('peca_comunicacao_outro', array('class' => 'form-control', 'placeholder' => 'Peca Comunicacao Outro'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('peca_comunicacao_especificar_outro', array('class' => 'form-control', 'placeholder' => 'Peca Comunicacao Especificar Outro'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('comunicacao_interna_folheto', array('class' => 'form-control', 'placeholder' => 'Comunicacao Interna Folheto'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('comunicacao_interna_email', array('class' => 'form-control', 'placeholder' => 'Comunicacao Interna Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('comunicacao_interna_mural', array('class' => 'form-control', 'placeholder' => 'Comunicacao Interna Mural'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('comunicacao_interna_edital', array('class' => 'form-control', 'placeholder' => 'Comunicacao Interna Edital'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('comunicacao_interna_jornal_revista', array('class' => 'form-control', 'placeholder' => 'Comunicacao Interna Jornal Revista'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('comunicacao_interna_outro', array('class' => 'form-control', 'placeholder' => 'Comunicacao Interna Outro'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('comunicacao_interna_especificar_outro', array('class' => 'form-control', 'placeholder' => 'Comunicacao Interna Especificar Outro'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
