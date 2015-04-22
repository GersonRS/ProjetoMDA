<?php
App::uses('AppModel', 'Model');
/**
 * Questionario Model
 *
 * @property Nucleo $Nucleo
 * @property Subarea $Subarea
 * @property Checklist $Checklist
 */
class Questionario extends AppModel {


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
		'Subarea' => array(
			'className' => 'Subarea',
			'foreignKey' => 'subarea_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Checklist' => array(
			'className' => 'Checklist',
			'joinTable' => 'checklists_questionarios',
			'foreignKey' => 'questionario_id',
			'associationForeignKey' => 'checklist_id',
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
