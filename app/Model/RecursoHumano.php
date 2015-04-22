<?php
App::uses('AppModel', 'Model');
/**
 * RecursoHumano Model
 *
 * @property Cooperativa $Cooperativa
 */
class RecursoHumano extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'perfil' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cooperativa_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Cooperativa' => array(
			'className' => 'Cooperativa',
			'foreignKey' => 'cooperativa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
