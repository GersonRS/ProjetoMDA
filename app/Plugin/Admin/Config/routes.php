<?php 
/**
* Default routes
*/

Router::connect('/admin', array('plugin' => 'admin', 'controller' => 'dashboard', 'action' => 'index', 'admin' => true));

Router::connect('/admin/dashboard', array('plugin' => 'admin', 'controller' => 'dashboard', 'action' => 'index', 'admin' => true));


Router::connect('/admin/users', array(
	'plugin' => 'admin',
	'controller' => 'users', 
	'action' => 'index',
	'admin' => true
	));

Router::connect('/admin/languages/*', array(
	'plugin' => 'admin',
	'controller' => 'languages', 
	'action' => 'set',
	'admin' => true
	));

Router::connect('/admin/groups', array(
	'plugin' => 'admin',
	'controller' => 'groups', 
	'action' => 'index',
	'admin' => true
	));

Router::connect('/admin/permissions', array(
	'plugin' => 'admin',
	'controller' => 'permissions', 
	'action' => 'index',
	'admin' => true
	));

Router::connect('/admin/permissions/change', array(
	'plugin' => 'admin',
	'controller' => 'permissions', 
	'action' => 'change',
	'admin' => true
	));
 ?>