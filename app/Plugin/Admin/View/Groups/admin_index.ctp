<ul class="nav nav-pills">
  <li class="active">
  	<?php echo $this->html->link('Add', array('plugin' => 'admin', 'controller' => 'groups', 'action' => 'add', 'admin' => true)); ?>
  </li>
</ul>
<div class="v-space"></div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-hover table-bordered">
		      <?php 
		      	$tableHeaders = array(
		      		__d('admin', 'Name'),
					__d('admin', 'Actions')
		      	);
		      	$tableHeaders =  $this->Html->tableHeaders($tableHeaders);
		      	echo $this->Html->tag('thead', $tableHeaders);
		       ?>
		      <tbody>
		       <?php 
		       	$rows = array();
		       	foreach ($groups as $group) {
					$actions = $this->Html->link(__d('admin', 'Edit'), array(
						'plugin' => 'admin',
						'controller' => 'groups',
						'action' => 'edit',
						'admin' => true,
						$group['Group']['id']
					), array('class' => 'btn btn-primary btn-xs'));
					$actions .= '&nbsp;'.$this->Html->link(__d('admin', 'Delete'), array(
						'plugin' => 'admin',
						'controller' => 'groups',
						'action' => 'delete',
						'admin' => true,
						$group['Group']['id']
					), array('class' => 'btn btn-danger btn-xs'));
		       		$rows[] = array(
		       			$group['Group']['name'],
						$actions
		       			); 
		       	}
		       	echo $this->Html->tableCells($rows);
		        ?>
		      </tbody>
		    </table>
	</div>
</div>	