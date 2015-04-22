<?php 
/**
* Admin Shell
*
* @author   Luís Fred G S <luis.fred.gs@gmail.com>
* @category Console Shell
* @package  Plugin.Admin
*/
App::uses('AdminAppShell', 'Admin.Console/Command');
App::uses('AuthComponent', 'Controller/Component');

class AdminShell extends AdminAppShell
{

	/**
	 * Models
	 *
	 * @var array
	 **/
	public $uses = array('Admin.User', 'Admin.Group');
	
	/**
	 * Add group
	 *
	 * @return void
	 **/
	public function add_group()
	{
		$groupName = $this->args[0];
		if ( !empty( $groupName ) ) {
			$this->Group->set(array(
				'name' => $groupName,
				'alias' => strtolower(Inflector::slug($groupName, ''))
			));						
			$errors = $this->Group->invalidFields();
			if ( !empty( $errors ) ) {
				$this->error("Errors:");
				foreach ($errors as $error) {
					$this->out("");					
					$this->out($error);
				}
				$this->out("");					
			}
			if ( $this->Group->save() ) {
				$groupID = $this->Group->id;
				$groupAlias = $this->Group->field('alias', array('id' => $groupID));
				$this->success('The new group was added, alias: '.$groupAlias);	
			}
		}
	}

	/**
	 * Show groups
	 *
	 * @return void
	 **/
	public function show_groups()
	{
		$groups = $this->Group->find("all");
		foreach ($groups as $group) {
			$this->out("");
			$this->info("- Group Name: {$group['Group']['name']} / Group Alias: {$group['Group']['alias']}");
		}
		$this->out("");
	}

	/**
	 * Add user on group
	 *
	 * @return void
	 **/
	public function add_user()
	{
		$username   = $this->args[0];
		$password   = $this->args[1];
		$groupAlias = $this->args[2];
	
		$group = $this->Group->findByAlias($groupAlias);
		if ( !empty( $group ) ) {
			$group_id = $group['Group']['id'];
			$this->User->set(array(
				'username' => $username,
				'password' => $password,
				'group_id' => $group_id,
				'active' => 1
			));	
			$errors = $this->User->invalidFields();
			if ( !empty( $errors ) ) {
				$this->error("Errors:");
				foreach ($errors as $error) {
					$this->out("");					
					$this->out($error);
				}
				$this->out("");					
			}
			if ( $this->User->save() ) {
				$this->success('The new user was saved.');
			}
		}else{ $this->error('Group not found, type group alias on arguments.'); }
	}

	/**
	 * Get options
	 *
	 * @return void
	 **/
	public function getOptionParser() {		
		return parent::getOptionParser()
			->addSubcommand('add_group', array(				
				'help' => 'Add new user group',
				'parser' => array(
					'arguments' => array(
						'groupname' => array('help' => 'The group name', 'required' => true),
					)
				)
			))
			->addSubcommand('add_user', array(
				'help' => 'Add user',
				'parser' => array(
					'arguments' => array(
						'username' => array('help' => 'The username', 'required' => true),
						'password' => array('help' => 'The user password', 'required' => true),
						'group_alias' => array('help' => 'The group alias', 'required' => true),
					)
				)
			))
			->addSubcommand('show_groups', array(				
				'help' => 'Show all groups',
			));
	}
}
 ?>
