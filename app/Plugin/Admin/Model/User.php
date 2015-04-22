<?php
/**
 * User Model
 *
 * @author Luis Fred G S <luis.fred.gs@gmail.com>
 * @category Model
 * @package Plugin.Admin
 */
App::uses('AdminAppModel', 'Admin.Model');
App::uses('AuthComponent', 'Controller/Component');

class User extends AdminAppModel {
    
    /**
     * actsAs - Acl Behavior
     *
     * @var array
     **/	
    public $actsAs = array('Acl' => array('type' => 'requester', 'enabled' => false));

    /**
     * belongsTo relationship
     *
     * @var array
     **/
	public $belongsTo = array(
        'Group' => array(
            'className' => 'Admin.Group', 
            'foreignKey' => 'group_id'
            )
        );
    
    /**
     * validationDomain - for translated validations messages
     *
     * @var string
     **/
	public $validationDomain = 'model_validation';
	
	
	/**
	 * validation rules
	 *
	 * @var array
	 **/    
	public $validate = array(
		'email' => array(
			'isUnique' => array(
				'rule' => 'isUnique',
                'on' => 'create',
				'message' => 'This email already exists.',
				'last' => true,
			),
			'email' => array(
				'rule' => 'email',
				'message' => 'Invalid E-mail.',
				'last' => true,
			),			
		),
		'username' => array(
			'isUnique' => array(
				'rule' => 'isUnique',
                'on' => 'create',
				'message' => 'This username already exists.',
				'last' => true,
			),
		),
		'password' => array(
			'rule' => array('minLength', 6),
			'message' => 'Password must be have 6 characters at minimum.',
		),
		'password_again' => array(
			'rule' => 'validate_password_again',
			'message' => 'The passwords no match.'
		),
		'name' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Name fields is required.',
				'last' => true,
			),			
		),
	);
	
	/**
	 * parentNode
	 *
	 * @return void
	 **/	
    public function parentNode() {
            if (!$this->id && empty($this->data)) {
                return null;
            }
            if (isset($this->data['User']['group_id'])) {
                $groupId = $this->data['User']['group_id'];
            } else {
                $groupId = $this->field('group_id');
            }
            if (!$groupId) {
                return null;
            } else {            	
                return array('Group' => array('id' => $data['User']['group_id']));
            }
    }

    /**
     * bindNode
     *
     * @return void
     **/
    public function bindNode($user) {
        return array('model' => 'Group', 'foreign_key' => $user['Admin.User']['group_id']);
    }

    public function beforeSave($options = array()) {
        if ( !empty( $this->data['User']['password'] ) ) {
            $this->data['User']['password'] = AuthComponent::password(
                      $this->data['User']['password']
                    );
            $this->data["User"]['status'] = 1;
        }
        return true;
    }
	
	/**
	 * validate_password_again
	 *
	 * @return void
	 **/
	public function validate_password_again() {
	if (isset($this->data['User']['password'])) {
		if ($this->data['User']['password'] != $this->data['User']['password_again']) {
			return false;
		}
	}
	return true;
	}
}
 ?>