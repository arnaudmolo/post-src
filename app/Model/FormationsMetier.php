<?php
App::uses('AppModel', 'Model');
/**
 * FormationsMetier Model
 *
 * @property Formation $Formation
 * @property Metier $Metier
 */
class FormationsMetier extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'formation_id';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'formation_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'metier_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Formation' => array(
			'className' => 'Formation',
			'foreignKey' => 'formation_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Metier' => array(
			'className' => 'Metier',
			'foreignKey' => 'metier_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
