<?php
App::uses('AppModel', 'Model');
/**
 * Matrize Model
 *
 * @property Checklist $Checklist
 * @property Subarea $Subarea
 * @property Nucleo $Nucleo
 */
class Matrize extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Checklist' => array(
			'className' => 'Checklist',
			'foreignKey' => 'checklist_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Subarea' => array(
			'className' => 'Subarea',
			'foreignKey' => 'subarea_id',
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
}
