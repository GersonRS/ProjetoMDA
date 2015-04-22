<?php
/**
 * AclAro Model
 *
 * @author Luis Fred G S <luis.fred.gs@gmail.com>
 * @category Model
 * @package Plugin.Admin
 */
App::uses('AdminAppModel', 'Admin.Model');

class AclAro extends AdminAppModel {

/**
 * name
 *
 * @var string
 */
	public $name = 'AclAro';

/**
 * useTable
 *
 * @var string
 */
	public $useTable = 'aros';

/**
 * actsAs - Acl Behavior
 *
 * @var array
 */
	public $actsAs = array('Tree');

}
