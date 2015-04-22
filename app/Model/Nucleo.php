<?php
App::uses('AppModel', 'Model');
/**
 * Nucleo Model
 *
 * @property Uf $Uf
 * @property Area $Area
 * @property Checklist $Checklist
 * @property ChecklistsQuestionario $ChecklistsQuestionario
 * @property Empreendimento $Empreendimento
 * @property Matrize $Matrize
 * @property Pair $Pair
 * @property Questionario $Questionario
 * @property Subarea $Subarea
 * @property Usuario $Usuario
 */
class Nucleo extends AppModel {


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
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Area' => array(
			'className' => 'Area',
			'foreignKey' => 'nucleo_id',
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
		'Checklist' => array(
			'className' => 'Checklist',
			'foreignKey' => 'nucleo_id',
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
		'ChecklistsQuestionario' => array(
			'className' => 'ChecklistsQuestionario',
			'foreignKey' => 'nucleo_id',
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
		'Empreendimento' => array(
			'className' => 'Empreendimento',
			'foreignKey' => 'nucleo_id',
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
		'Matrize' => array(
			'className' => 'Matrize',
			'foreignKey' => 'nucleo_id',
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
			'foreignKey' => 'nucleo_id',
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
		'Questionario' => array(
			'className' => 'Questionario',
			'foreignKey' => 'nucleo_id',
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
		'Subarea' => array(
			'className' => 'Subarea',
			'foreignKey' => 'nucleo_id',
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
			'foreignKey' => 'nucleo_id',
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
