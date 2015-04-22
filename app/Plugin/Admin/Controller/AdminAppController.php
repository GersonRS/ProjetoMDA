<?php
/**
 * Admin AppController
 * @author Luís Fred G S <luis.fred.gs@gmail.com>
 * @category Controller
 * @package Plugin.Admin
 */
App::uses('AppController', 'Controller');

class AdminAppController extends AppController{

	/**
	 * Settings for paginate
	 *
	 * @var array
	 **/
	public $paginate = array(
		"limit" => 10
		);

	/**
	 * Helpers
	 *
	 * @var array
	 **/
	public $helpers = array(
		'Session',
		'Js',
		'Html',
		'Form'
	);

	/**
	 * Components
	 *
	 * @var array
	 **/
	public $components = array(
		'Session',
		'Paginator'
	);

	public function beforeFilter()
	{
		parent::beforeFilter();
		if ( $this->params['plugin'] == 'admin' ) {
			$this->layout = 'admin';
		}

		if ( ( $settings = Cache::read('settings', "admin") ) === false ) {
			 $settings = ClassRegistry::init('Admin.Setting')->find('all');
			 Cache::write('settings', $settings, "admin");
		}
		foreach( $settings AS $setting )
		{
			Configure::write('Config.'.$setting['Setting']['setting'], $setting['Setting']['value']);
		}	
	}
}

 ?>