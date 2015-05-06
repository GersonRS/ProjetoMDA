<div class="container-fluid">
<?php //debug($pesquisas) or die();?>
	<div class="row">
		<div class="col-md-13">
			<div class="page-header">
				<h1><?php echo __('Pesquisas'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->

	<div class="row">
		
		<div class="col-md-13 table-responsive">
			
			<div class="row">
				<?php echo $this->Search->create(); ?>
				<div class="form-group container">
				    <div class="col-sm-2">
				      	<?php echo $this->Search->selectFields('filter1', array(
					            'Cooperativa.CNPJ' => __('CNPJ', true),
					            'Cooperativa.razao_social' => __('Razão Social', true),
					            'Cooperativa.municipio' => __('Municipio', true),
					            'Cooperativa.inscricao_estadual' => __('Inscrição Estadual', true),
					            'Cooperativa.inscricao_municipal' => __('Inscrição Municipal', true),
					            'Cooperativa.data_constituicao' => __('Data de Constituição', true),
					            'Cooperativa.sigla' => __('Sigla', true),
					            'Cooperativa.uf' => __('UF', true),
					            'Cooperativa.endereco_completo' => __('Endereço Completo', true)
					        ), 
				      		array(
				      			'class' => 'select-box form-control'
				      			)
				      		); 

				      	echo $this->Search->selectOperators('filter1',
					        array(
					            'LIKE' => __('contendo', true)
					        ),
					        array('type' => 'hidden')
					    );
				      	?>
				    </div>
				
				    <div class="col-sm-9">
				      	<?php echo $this->Search->input('filter1', array('class' => 'form-control'));?>
				    </div>
				
				    <div class="col-sm-1">
				      	<?php echo $this->Search->submit('Filtrar', array('class' => 'btn btn-default'));?>
				    </div>
				</div>
			</div>

			<table cellpadding="0" cellspacing="0" class="table table-striped table-hover table-bordered">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('CNPJ'); ?></th>
						<th><?php echo $this->Paginator->sort('razao_social'); ?></th>
						<th><?php echo $this->Paginator->sort('sigla'); ?></th>
						<th><?php echo $this->Paginator->sort('endereco_completo'); ?></th>
						<th><?php echo $this->Paginator->sort('CEP'); ?></th>
						<th><?php echo $this->Paginator->sort('telefone'); ?></th>
						<th><?php echo $this->Paginator->sort('email'); ?></th>
						<th><?php echo $this->Paginator->sort('site'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($pesquisas as $cooperativa): ?>
					<tr>
						<td><?php echo h($cooperativa['Cooperativa']['CNPJ']); ?>&nbsp;</td>
						<td><?php echo h($cooperativa['Cooperativa']['razao_social']); ?>&nbsp;</td>
						<td><?php echo h($cooperativa['Cooperativa']['sigla']); ?>&nbsp;</td>
						<td><?php echo h($cooperativa['Cooperativa']['endereco_completo']." - ".$cooperativa['Cooperativa']['municipio']." - ".$cooperativa['Cooperativa']['uf']); ?>&nbsp;</td>
						<td><?php echo h($cooperativa['Cooperativa']['cep']); ?>&nbsp;</td>
						<td><?php echo h($cooperativa['Cooperativa']['telefone']); ?>&nbsp;</td>
						<td><?php echo h($cooperativa['Cooperativa']['email']); ?>&nbsp;</td>
						<td><?php echo h($cooperativa['Cooperativa']['site']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $cooperativa['Cooperativa']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $cooperativa['Cooperativa']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $cooperativa['Cooperativa']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $cooperativa['Cooperativa']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->
	

</div><!-- end containing of content -->