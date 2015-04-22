<?php
App::uses('AppModel', 'Model');
/**
 * Usuario Model
 *
 * @property Uf $Uf
 * @property Perfil $Perfil
 * @property Nucleo $Nucleo
 * @property Checklist $Checklist
 */
class Usuario extends AppModel {


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
		'Perfil' => array(
			'className' => 'Perfil',
			'foreignKey' => 'perfil_id',
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
			'foreignKey' => 'usuario_id',
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
