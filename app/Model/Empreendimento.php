<?php
App::uses('AppModel', 'Model');
/**
 * Empreendimento Model
 *
 * @property Uf $Uf
 * @property Nucleo $Nucleo
 * @property Checklist $Checklist
 */
class Empreendimento extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Uf' => array(
			'className' => 'Uf',
			'foreignKey' => 'uf_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Nucleo' => array(
			'className' => 'Nucleo',
			'foreignKey' => 'nucleo_id',
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
		'Checklist' => array(
			'className' => 'Checklist',
			'foreignKey' => 'empreendimento_id',
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
