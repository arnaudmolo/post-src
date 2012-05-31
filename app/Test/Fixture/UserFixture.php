<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'first_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '	', 'charset' => 'utf8'),
		'last_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'location_user' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'born_user' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'password' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'annee_entree' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'annee_sortie' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'date_inscription' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'last_connexion' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'active' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'facebook' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'twitter' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'youtube' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'doyoubuzz' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'yupeek' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'viadeo' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'username' => 'Lorem ipsum dolor sit amet',
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'location_user' => 'Lorem ipsum dolor sit amet',
			'born_user' => '2012-05-05',
			'password' => 'Lorem ipsum dolor sit amet',
			'annee_entree' => '2012-05-05',
			'annee_sortie' => '2012-05-05',
			'date_inscription' => '2012-05-05',
			'last_connexion' => '2012-05-05',
			'active' => 1,
			'facebook' => 'Lorem ipsum dolor sit amet',
			'twitter' => 'Lorem ipsum dolor sit amet',
			'youtube' => 'Lorem ipsum dolor sit amet',
			'doyoubuzz' => 'Lorem ipsum dolor sit amet',
			'yupeek' => 'Lorem ipsum dolor sit amet',
			'viadeo' => 'Lorem ipsum dolor sit amet'
		),
	);
}
