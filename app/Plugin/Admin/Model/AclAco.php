<?php
/**
 * AclAco Model
 *
 * @author Luis Fred G S <luis.fred.gs@gmail.com>
 * @category Model
 * @package Plugin.Admin
 */
App::uses('AdminAppModel', 'Admin.Model');

class AclAco extends AdminAppModel {

/**
 * name
 *
 * @var string
 */
	public $name = 'AclAco';

/**
 * useTable
 *
 * @var string
 */
	public $useTable = 'acos';

/**
 * actsAs - Acl Behavior
 *
 * @var array
 */
	public $actsAs = array('Tree');

}
