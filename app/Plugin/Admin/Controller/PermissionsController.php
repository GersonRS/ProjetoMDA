<?php
/**
 * Permissions Controller
 *
 * @author Luis Fred G S <luis.fred.gs@gmail.com>
 * @category Controller
 * @package Plugin.Admin
 */
App::uses('AdminAppController', 'Admin.Controller');

class PermissionsController extends AdminAppController
{	
	/**
	 * Components
	 *
	 * @var array
	 **/
	public $components = array('Admin.AclUtility');

	/**
	 * Models
	 *
	 * @var array
	 **/
	public $uses = array(
		'Admin.AclAco',
		'Admin.AclAro',
		'Admin.AclPermission',
		'Admin.Group'
		);

	/**
	 * Controller callback
	 * 
	 * @return void
	 */
	public function beforeFilter()
	{
		parent::beforeFilter();
		$this->set('title_for_layout', __d('admin', 'Permissions'));
	}
	
	/**
	 * admin_index
	 * 
	 * @return void
	 */
	public function admin_index()
	{
		$acoConditions = array(
			'parent_id !=' => null,
			'foreign_key' => null,
			'alias !=' => null,
		);
		$acos  = $this->Acl->Aco->generateTreeList($acoConditions, '{n}.Aco.id', '{n}.Aco.alias');
		$groups = $this->Group->find('list');
				
		$this->set(compact('acos', 'groups'));

		$groupsAros = $this->AclAro->find('all', array(
			'conditions' => array(
				'AclAro.model' => 'Group',
				'AclAro.foreign_key' => array_keys($groups),
				),
			));
		$groupsAros = Set::combine($groupsAros, '{n}.AclAro.foreign_key', '{n}.AclAro.id');

		$permissions = array();
		foreach ($acos as $acoId => $acoAlias) {
			if (substr_count($acoAlias, '_') != 0) {
				$permission = array();
				foreach ($groups as $groupId => $groupTitle) {
					$hasAny = array(
						'aco_id'  => $acoId,
						'aro_id'  => $groupsAros[$groupId],
						'_create' => 1,
						'_read'   => 1,
						'_update' => 1,
						'_delete' => 1,
					);
					if ($this->AclPermission->hasAny($hasAny)) {
						$permission[$groupId] = 1;
					} else {
						$permission[$groupId] = 0;
					}
					$permissions[$acoId] = $permission;
				}
			}
		}
		$this->set(compact('groupsAros', 'permissions'));
		$plugins = CakePlugin::loaded();
		$controllers_plugins = array();
		if ( !empty( $plugins ) ) {			
			foreach ($plugins as $plugin) {
				$controllers_plugins[] = $this->AclUtility->getControllerList($plugin);
			}			
		}		
		$controllers = array_merge($this->AclUtility->getControllerList(), $this->AclUtility->getControllerList($plugin));
		$this->set(compact('controllers'));
	}
	
	/**
	 * admin_change
	 * 
	 * @return void
	 */
	public function admin_change() {
		if (!$this->request->is('ajax')) {
			$this->redirect(array('action' => 'index'));
		}
		$this->layout = false;
		$acoId = $this->request->data['aco_id'];
		$aroId = $this->request->data['aro_id'];

		// see if acoId and aroId combination exists
		$conditions = array(
			'AclPermission.aco_id' => $acoId,
			'AclPermission.aro_id' => $aroId,
		);
		if ($this->AclPermission->hasAny($conditions)) {
			$data = $this->AclPermission->find('first', array('conditions' => $conditions));
			if ($data['AclPermission']['_create'] == 1 &&
				$data['AclPermission']['_read'] == 1 &&
				$data['AclPermission']['_update'] == 1 &&
				$data['AclPermission']['_delete'] == 1) {
				// from 1 to 0
				$data['AclPermission']['_create'] = 0;
				$data['AclPermission']['_read'] = 0;
				$data['AclPermission']['_update'] = 0;
				$data['AclPermission']['_delete'] = 0;
				$permitted = 0;
			} else {
				// from 0 to 1
				$data['AclPermission']['_create'] = 1;
				$data['AclPermission']['_read'] = 1;
				$data['AclPermission']['_update'] = 1;
				$data['AclPermission']['_delete'] = 1;
				$permitted = 1;
			}
		} else {
			// create - CRUD with 1
			$data['AclPermission']['aco_id'] = $acoId;
			$data['AclPermission']['aro_id'] = $aroId;
			$data['AclPermission']['_create'] = 1;
			$data['AclPermission']['_read'] = 1;
			$data['AclPermission']['_update'] = 1;
			$data['AclPermission']['_delete'] = 1;
			$permitted = 1;
		}

		// save
		$success = 0;
		if ($this->AclPermission->save($data)) {
			$success = 1;
		}
		$this->set(compact('success'));
	}
	
	/**
	 * admin_sync
	 * 
	 * @return void
	 */
	public function admin_sync()
	{
		if ( $this->AclUtility->aco_sync() ) {
			$this->Session->setFlash(__d('admin', 'All Controllers was sincronized.'), 'flash_success');
			$this->redirect(array('action' => 'index'));
		}
		$this->render(false);
	}
}

 ?>