<?php
App::uses('AppModel', 'Model');
/**
 * Uf Model
 *
 * @property Empreendimento $Empreendimento
 * @property Nucleo $Nucleo
 * @property Pair $Pair
 * @property Usuario $Usuario
 */
class Uf extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Empreendimento' => array(
			'className' => 'Empreendimento',
			'foreignKey' => 'uf_id',
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
		'Nucleo' => array(
			'className' => 'Nucleo',
			'foreignKey' => 'uf_id',
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
		'Pair' => array(
			'className' => 'Pair',
			'foreignKey' => 'uf_id',
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
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'uf_id',
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
