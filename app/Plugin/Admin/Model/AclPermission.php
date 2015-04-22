<?php
/**
 * AclPermission Model
 *
 * @author Luis Fred G S <luis.fred.gs@gmail.com>
 * @category Model
 * @package Plugin.Admin
 */
App::uses('AdminAppModel', 'Admin.Model');
class AclPermission extends AdminAppModel {

/**
 * name
 *
 * @var string
 */
	public $name = 'AclPermission';

/**
 * useTable
 *
 * @var string
 */
	public $useTable = 'aros_acos';

/**
 * belongsTo
 *
 * @var array
 */
	public $belongsTo = array(
		'AclAro' => array(
			'className' => 'Admin.AclAro',
			'foreignKey' => 'aro_id',
		),
		'AclAco' => array(
			'className' => 'Admin.AclAco',
			'foreignKey' => 'aco_id',
		),
	);

}
