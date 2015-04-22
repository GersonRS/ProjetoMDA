<?php
/**
 * Languages Controller
 *
 * @author Luis Fred G S <luis.fred.gs@gmail.com>
 * @category Controller
 * @package Plugin.Admin
 */
App::uses('AdminAppController', 'Admin.Controller');

class LanguagesController extends AdminAppController{
	/**
	 * @var array Models used by controller
	 */
	public $uses = array('Setting');
	
	/**
	 * admin_Set
	 * 
	 * @param $value language abbreviation as eng, pt-br...
	 * @return void 
	 */
	public function admin_set($value = null)
	{
		if ( !empty( $value ) ) {
			if ( $id = $this->Setting->field('id', array('setting' => 'language')) ) {
				$this->Setting->id = $id;
				if ( $this->Setting->saveField('value', $value) ) {
					Cache::delete('settings', "admin");
					$this->redirect(array('controller' => 'dashboard', 'action' => 'index', 'admin' => true));
				}
			}else{
				$this->Setting->set(array(
					'setting' => 'language',
					'value' => $value
				));
				if ( $this->Setting->save() ) {
					$this->redirect(array('controller' => 'dashboard', 'action' => 'index', 'admin' => true));	
				}
			}			
		}
	}
}
 ?>