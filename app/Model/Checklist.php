<?php
App::uses('AppModel', 'Model');
/**
 * Checklist Model
 *
 * @property Nucleo $Nucleo
 * @property Empreendimento $Empreendimento
 * @property Pair $Pair
 * @property Usuario $Usuario
 * @property Matrize $Matrize
 * @property Questionario $Questionario
 */
class Checklist extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Nucleo' => array(
			'className' => 'Nucleo',
			'foreignKey' => 'nucleo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Empreendimento' => array(
			'className' => 'Empreendimento',
			'foreignKey' => 'empreendimento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Pair' => array(
			'className' => 'Pair',
			'foreignKey' => 'pair_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'usuario_id',
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
		'Matrize' => array(
			'className' => 'Matrize',
			'foreignKey' => 'checklist_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Questionario' => array(
			'className' => 'Questionario',
			'joinTable' => 'checklists_questionarios',
			'foreignKey' => 'checklist_id',
			'associationForeignKey' => 'questionario_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
