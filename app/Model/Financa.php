<?php
App::uses('AppModel', 'Model');
/**
 * Financa Model
 *
 * @property Cooperativa $Cooperativa
 * @property ValorDespesa $ValorDespesa
 * @property ValorInvestimento $ValorInvestimento
 * @property ValorPatrimonio $ValorPatrimonio
 * @property ValorReceita $ValorReceita
 */
class Financa extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'ValorDespesa' => array(
			'className' => 'ValorDespesa',
			'foreignKey' => 'financa_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'ValorInvestimento' => array(
			'className' => 'ValorInvestimento',
			'foreignKey' => 'financa_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'ValorPatrimonio' => array(
			'className' => 'ValorPatrimonio',
			'foreignKey' => 'financa_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'ValorReceita' => array(
			'className' => 'ValorReceita',
			'foreignKey' => 'financa_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
