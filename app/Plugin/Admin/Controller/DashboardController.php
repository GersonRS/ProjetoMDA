<?php
/**
 * Dashboard Controller
 *
 * Class for Dashboard, you can add more methods in here =:D
 * @author Luis Fred G S <luis.fred.gs@gmail.com>
 * @category Controller
 * @package Plugin.Admin
 */
App::uses('AdminAppController', 'Admin.Controller');

class DashboardController extends AdminAppController{
	/**
	 * admin_index
	 * 
	 * @return void
	 */
	public function admin_index()
	{
		$this->set('title_for_layout', __d('admin', 'Dashboard'));
	}
}
?>