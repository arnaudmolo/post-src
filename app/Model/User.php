<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Annonce $Annonce
 * @property Emplois $Emplois
 * @property Formation $Formation
 * @property Metier $Metier
 */
class User extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Une erreur 0xuLD s\'est produite. Veuillez réessayer.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'username' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Ce champ doit être renseigné.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'email' => array(
				'rule' => array('email'),
				'message' => 'Votre e-mail est invalide.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'isUnique' => array(
				'rule'=>array('isUnique'),
				'message' => 'Cette adresse e-mail est déjà utilisée.',
			),
		),
		'first_name' => array(
			'alphanumeric' => array(
				'rule' => array('alphanumeric'),
				'message' => 'Ce champ ne peux contenir que des caractères alphanumeriques',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Ce champ doit être renseigné.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'last_name' => array(
			'alphanumeric' => array(
				'rule' => array('alphanumeric'),
				'message' => 'Ce champ ne peux contenir que des caractères alphanumeriques',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Ce champ doit être renseigné.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'born_user' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Ce champs doit contenir un date, formatée tel que AAAA-MM-JJ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Ce champ doit être renseigné.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Ce champ doit être renseigné.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'annee_entree' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Ce champs doit contenir un date, formatée tel que AAAA-MM-JJ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Ce champ doit être renseigné.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'annee_sortie' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Ce champs doit contenir un date, formatée tel que AAAA-MM-JJ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'date_inscription' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Ce champs doit contenir un date, formatée tel que AAAA-MM-JJ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Ce champ doit être renseigné.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'last_connexion' => array(
			'date' => array(
				'rule' => array('date'),
				'message' => 'Ce champs doit contenir un date, formatée tel que AAAA-MM-JJ',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'role' => array(
			'valid'=>array(
				'rule'=>array('inList', array('admin','ancien')),
				'message'=>'Une erreur 0x0ld est survenue. Veuillez réessayer.',
				'allowEmpty'=>false
			),
		),
		'active' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				'message' => 'Une erreur s\'est produite. Veuillez réessayer.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'facebook' => array(
			'url' => array(
				'rule' => array('url'),
				'message' => 'Ce champs doit contenir une adresse URL',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'twitter' => array(
			'maxlength' => array(
				'rule' => array('maxlength'),
				'message' => 'Veuillez renseigner votre nom de compte Twitter',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'youtube' => array(
			'url' => array(
				'rule' => array('url'),
				'message' => 'Ce champs doit contenir une adresse URL',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'doyoubuzz' => array(
			'url' => array(
				'rule' => array('url'),
				'message' => 'Ce champs doit contenir une adresse URL',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'yupeek' => array(
			'url' => array(
				'rule' => array('url'),
				'message' => 'Ce champs doit contenir une adresse URL',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'viadeo' => array(
			'url' => array(
				'rule' => array('url'),
				'message' => 'Ce champs doit contenir une adresse URL',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Annonce' => array(
			'className' => 'Annonce',
			'foreignKey' => 'user_id',
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
		'Emplois' => array(
			'className' => 'Emplois',
			'foreignKey' => 'user_id',
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
		'Formation' => array(
			'className' => 'Formation',
			'joinTable' => 'formations_users',
			'foreignKey' => 'user_id',
			'associationForeignKey' => 'formation_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Metier' => array(
			'className' => 'Metier',
			'joinTable' => 'metiers_users',
			'foreignKey' => 'user_id',
			'associationForeignKey' => 'metier_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);
	/**
	* beforeSave methode
	* Pour applicquer des modifications avant l'enregistrement d'un objet
	* @return boolean
	**/
	public function beforeSave(){
		if(isset($this->data[$this->alias]['password'])){
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}
		return true;
	}
}
