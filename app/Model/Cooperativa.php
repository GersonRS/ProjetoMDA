<?php
App::uses('AppModel', 'Model');
/**
 * Cooperativa Model
 *
 * @property Agronegocio $Agronegocio
 * @property Associado $Associado
 * @property Aterproduto $Aterproduto
 * @property Comercializado $Comercializado
 * @property Credit $Credit
 * @property EmissaoNota $EmissaoNota
 * @property Faturamento $Faturamento
 * @property Financa $Financa
 * @property Funcionario $Funcionario
 * @property Logistica $Logistica
 * @property RecursoHumano $RecursoHumano
 * @property VendaMarketing $VendaMarketing
 */
class Cooperativa extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'CNPJ' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Agronegocio' => array(
			'className' => 'Agronegocio',
			'foreignKey' => 'cooperativa_id',
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
		'Associado' => array(
			'className' => 'Associado',
			'foreignKey' => 'cooperativa_id',
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
		'Aterproduto' => array(
			'className' => 'Aterproduto',
			'foreignKey' => 'cooperativa_id',
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
		'Comercializado' => array(
			'className' => 'Comercializado',
			'foreignKey' => 'cooperativa_id',
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
		'Credit' => array(
			'className' => 'Credit',
			'foreignKey' => 'cooperativa_id',
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
		'EmissaoNota' => array(
			'className' => 'EmissaoNota',
			'foreignKey' => 'cooperativa_id',
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
		'Faturamento' => array(
			'className' => 'Faturamento',
			'foreignKey' => 'cooperativa_id',
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
		'Financa' => array(
			'className' => 'Financa',
			'foreignKey' => 'cooperativa_id',
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
		'Funcionario' => array(
			'className' => 'Funcionario',
			'foreignKey' => 'cooperativa_id',
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
		'Logistica' => array(
			'className' => 'Logistica',
			'foreignKey' => 'cooperativa_id',
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
		'RecursoHumano' => array(
			'className' => 'RecursoHumano',
			'foreignKey' => 'cooperativa_id',
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
		'VendaMarketing' => array(
			'className' => 'VendaMarketing',
			'foreignKey' => 'cooperativa_id',
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
