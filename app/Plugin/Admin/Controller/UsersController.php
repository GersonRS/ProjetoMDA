<?php
/**
 * Users Controller
 *
 * @author Luis Fred G S <luis.fred.gs@gmail.com>
 * @category Controller
 * @package Plugin.Admin
 */
App::uses('AdminAppController', 'Admin.Controller');

class UsersController extends AdminAppController
{
	/**
	 * Models
	 *
	 * @var array
	 **/
	public $uses = array('Admin.User', 'Admin.Group');

	/**
	 * Controller callback - beforeFilter()
	 * 
	 * @return void
	 */
	public function beforeFilter()
	{
		parent::beforeFilter();
		$this->set('title_for_layout', __d('admin', 'Users'));
	}
	
	/**
	 * admin_index
	 * 
	 * @return void
	 */
	public function admin_index(){
		$this->paginate['User']['order'] = 'User.id Desc';
		$this->set('users', $this->paginate('User'));
	}
	
	/**
	 * admin_add
	 * 
	 * @return void
	 */
	public function admin_add()
	{
		if ( !empty( $this->request->data ) ) {
			$this->User->create();			
			if ( $this->User->save( $this->request->data ) ) {
				$this->Session->setFlash(__d('admin', 'User saved.'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			}
		}
		$groups = $this->Group->find('list');
		$this->set(compact('groups'));
	}
	
	/**
	 * admin_edit
	 * 
	 * @param $id User ID
	 * @return void
	 */
	public function admin_edit( $id = null ){
		if ( !$id ) {
			$this->Session->setFlash(__d('admin', 'Invalid ID'), 'flash_error');
			$this->redirect(array('action' => 'index'));
		}
		if ( !empty( $this->request->data ) ) {
			if ( $this->User->save($this->request->data) ) {
				$this->Session->setFlash(__d('admin', 'User was saved.'), 'flash_success');
			}
		}
		$this->request->data = $this->User->read(null, $id);
		$groups = $this->Group->find('list');
		$this->set(compact('groups'));
	}
	
	/**
	 * admin_login
	 * 
	 * @return void
	 */
	public function admin_login()
	{
		$this->layout = 'admin_login';
		if ( $this->request->is('post') ) {
			if ( $this->Auth->login() ) {
				return $this->redirect($this->Auth->redirect());
			}else{
				return $this->redirect($this->Auth->redirect());
			}
		}	
	}
	
	/**
	 * admin_logout
	 * 
	 * @return void
	 */
	public function admin_logout()
	{
		if ( $this->Auth->logout() ) {
			return $this->redirect($this->Auth->redirect());
		}
	}
	
	/**
	 * admin_reset_password
	 * 
	 * @param  $id User ID
	 * @return void
	 */
	public function admin_reset_password( $id = null )
	{
		if ( !$id ) {
			$this->Session->setFlash(__d('admin', 'Invalid ID'), 'flash_error');
			$this->redirect(array('action' => 'index'));
		}
		if ( !empty( $this->request->data ) ) {
			if ( $this->User->save($this->request->data) ) {
				$this->Session->setFlash(__d('admin', 'password was saved.'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			}
		}
	}
	
	/**
	 * admin_delete
	 * 
	 * @param $id User ID
	 * @return void
	 */
	public function admin_delete( $id = null ){
		if ( !$id ) {
			$this->Session->setFlash(__d('admin', 'Invalid ID!'), 'flash_error');
			$this->redirect(array('action' => 'index'));
		}
		if ( $this->User->delete( $id ) ) {
			$this->Session->setFlash(__d('admin', 'User was deleted.'), 'flash_success');
			$this->redirect(array('action' => 'index'));
		}
	}
}
 ?>
