<ul class="nav nav-pills">
  <li class="active">
  	<?php 
  	echo $this->Html->link(__d('admin', 'Add'), array(
  		'plugin' => 'admin', 
  		'controller' => 'users', 
  		'action' => 'add', 
  		'admin' => true
  		)
  	); 
  	?>
  </li>
  <li>
  	<?php 
  		echo $this->Html->link(__d('admin', 'Permissions'), array(
  			'plugin' => 'admin',
  			'controller' => 'permissions',
  			'action' => 'index',
  			'admin' => true
  			));
  	 ?>
  </li>
  <li>
  <?php echo $this->Html->link(__d('admin', 'Groups'), '/admin/groups'); ?>
</li>
</ul>
<div class="row">
	<div class="col-md-12">
		<table class="table table-hover">
		      <?php 
		      	$tableHeaders = array(
		      		__d('admin', 'Name'),
		      		__d('admin', "Group"),
		      		'Email',
		      		__d('admin', 'Username'),
		      		__d('admin', 'Actions')
		      	);
		      	$tableHeaders =  $this->Html->tableHeaders($tableHeaders);
		      	echo $this->Html->tag('thead', $tableHeaders);
		       ?>
		      <tbody>
		       <?php 
		       	$rows = array();
		       	foreach ($users as $user) {
		       		$actions = $this->Html->link(__d('admin', 'Edit'), array(
		       			'plugin' => 'admin',
		       			'controller' => 'users',
		       			'action' => 'edit',
		       			'admin' => true,
		       			$user['User']['id']
		       			), array('class' => 'btn btn-primary btn-xs'));
		       		$actions.= '&nbsp;'. $this->Html->link(__d('admin', 'Delete'), array(
		       			'plugin' => 'admin',
		       			'controller' => 'users',
		       			'action' => 'delete',
		       			'admin' => true,
		       			$user['User']['id']
		       			), array('class' => 'btn btn-danger btn-xs'));
		       		$rows[] = array(
		       			$user['User']['name'],
		       			$user['Group']['name'],
		       			$user['User']['email'],
		       			$user['User']['username'],
		       			$actions
		       			); 
		       	}
		       	echo $this->Html->tableCells($rows);
		        ?>
		      </tbody>		      
		    </table>
		    <div class="row-fluid">
		    	<ul class="pagination pull-right">
		    		<?php echo $this->Paginator->numbers( array('tag' => 'li', 'currentClass' => 'active', 'currentTag' => 'a', 'separator' => '') ); ?>
		    	</ul>
		    </div>
	</div>
</div>	