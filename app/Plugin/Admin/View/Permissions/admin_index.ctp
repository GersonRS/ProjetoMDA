<div class="row">
	<div class="col-md-12">
		<ul class="nav nav-pills">
		  <li class="active">
			<?php echo $this->Html->link(__d('admin', 'Sincronize'), array('plugin' => 'admin', 'controller' => 'permissions', 'action'=>'sync', 'admin' => true)); ?>
		  </li>
		</ul>
	</div>
</div>
<div style="height: 8px;"></div>
<div class="row">
	<div class="col-md-12">
		<div class="table-responsive">
			<table class="table table-hover table-bordered">
			<?php
				$groupTitles = array_values($groups);
				$groupIds   = array_keys($groups);

				$tableHeaders = array(
					__d('admin', 'Section')
				);
				$tableHeaders = array_merge($tableHeaders, $groupTitles);
				$tableHeaders =  $this->Html->tag('thead', $this->Html->tableHeaders($tableHeaders));
				echo $tableHeaders;

				$currentController = '';				
				foreach( $controllers AS $controller )
				{
					$controllerName[] = preg_replace('/Controller$/', '', $controller);					
				}
				
				foreach ($acos AS $id => $alias) {
					$class = '';					
					if(substr($alias, 0, 1) == '_') {
						$level = 1;
						$class .= 'level-'.$level;
						$oddOptions = array('class' => 'controller-'.$currentController);
						$evenOptions = array('class' => 'controller-'.$currentController);
						$alias = substr_replace($alias, '', 0, 1);						
						if ( substr($alias, 0, 1) == '_' ) {
							$alias = substr_replace($alias, '', 0, 1);
							$alias = $this->Html->tag('span', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&rarr;  ', array('class' => 'bulet')) . preg_replace('/\_/', ' ', ucfirst($alias));
						}else{			
							if ( in_array($alias, $controllerName) ) {
								$alias = $this->Html->tag('div', '&nbsp;&nbsp;  ' . preg_replace('/\_/', ' ', ucfirst($alias)), array('class' => 'bold'));
							}else{
								$alias = $this->Html->tag('span', '&nbsp;&nbsp;&rarr;  ', array('class' => 'bulet')) . preg_replace('/\_/', ' ', ucfirst($alias));
							}							
						}
					} else {
						$level = 0;
						$class .= ' controller expand bold';
						$oddOptions = array();
						$evenOptions = array();
						$currentController =  $alias;
					}

					$row = array(
						$this->Html->div($class, $alias),
					);

					foreach ($groups AS $groupId => $groupTitle) {
						if ($level != 0) {
							if ($groupId != 1) {
								if ($permissions[$id][$groupId] === 1) {
									$row[] = $this->Html->tag('span', __d('admin', 'alowed'), array(
										'class' => 'label label-success permission-toggle', 
										'data-aco_id' => $id, 
										'data-aro_id' => $groupsAros[$groupId],
										'data-rel'=>"tooltip",
										'data-original-title'=>$groupTitle
									));
								} else {
									$row[] = $this->Html->tag('span', __d('admin', 'denied'), array(
										'class' => 'label label-danger permission-toggle', 
										'data-aco_id' => $id, 
										'data-aro_id' => $groupsAros[$groupId],
										'data-rel'=>"tooltip",
										'data-original-title'=>$groupTitle
										));
								}
							} else {
								$row[] = $this->Html->tag('span', __d('admin', 'allowed'), array('class' => 'permission-disabled label label-default'));
							}
						} else {
							$row[] = '';
						}
					}

					echo $this->Html->tableCells(array($row), $oddOptions, $evenOptions);
				}
			?>
			</table>
		</div>
	</div>
</div>
<?php echo $this->Html->script('/admin/js/acl.js'); ?>
<script type="text/javascript">
	$(function(){
		$('[data-rel=tooltip]').tooltip({placement: 'left'});
	})
</script>