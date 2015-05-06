<?php
App::uses('AppModel', 'Model');
/**
 * Produto Model
 *
 * @property Comercializado $Comercializado
 */
class Produto extends AppModel {

	public $displayField = 'Nome';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Comercializado' => array(
			'className' => 'Comercializado',
			'foreignKey' => 'produto_id',
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
