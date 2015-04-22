<?php
App::uses('AppModel', 'Model');
/**
 * Subarea Model
 *
 * @property Area $Area
 * @property Nucleo $Nucleo
 * @property Matrize $Matrize
 * @property Questionario $Questionario
 */
class Subarea extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Area' => array(
			'className' => 'Area',
			'foreignKey' => 'area_id',
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
		'Matrize' => array(
			'className' => 'Matrize',
			'foreignKey' => 'subarea_id',
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
			'foreignKey' => 'subarea_id',
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
