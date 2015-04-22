<?php 
/**
 * Group Model
 *
 * @author Luis Fred G S <luis.fred.gs@gmail.com>
 * @category Model
 * @package Plugin.Admin
 */
App::uses('AdminAppModel', 'Admin.Model');
class Group extends AdminAppModel {
    
    /**
     * ActsAs - Acl Behavior
     *
     * @var array
     **/
    public $actsAs = array('Acl' => array('type' => 'requester'));
    
    /**
     * validationDomain - for translated validations messages
     *
     * @var string
     **/
	public $validationDomain = 'model_validation';
	
	/**
	* Validation rules
	*
	* @var array
	*/
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Name field is required.',
			),
			'isUnique' => array(
				'rule' => 'isUnique',
                'on' => 'create',
				'message' => 'This group already exists.',
				'last' => true,
			),
		),
	);
	
	/**
	* hasMany
	*
	* @var array
	*/
    public $hasMany = array('User' => array(
    	'className' => 'Admin.User', 
    	'foreignKey' => 'group_id'
    	));
    
    public function parentNode() {
        return null;
    }
}
 ?>