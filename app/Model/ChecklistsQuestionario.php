<?php
App::uses('AppModel', 'Model');
/**
 * ChecklistsQuestionario Model
 *
 * @property Checklist $Checklist
 * @property Questionario $Questionario
 * @property Nucleo $Nucleo
 */
class ChecklistsQuestionario extends AppModel {


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
		'Questionario' => array(
			'className' => 'Questionario',
			'foreignKey' => 'questionario_id',
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
