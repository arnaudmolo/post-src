<?php
/**
 * EmploisFixture
 *
 */
class EmploisFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'entreprise' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fonction' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'date_debut' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'date_fin' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'actuel' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'users_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk_emplois_users1' => array('column' => 'users_id', 'unique' => 0)),
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
			'entreprise' => 'Lorem ipsum dolor sit amet',
			'fonction' => 'Lorem ipsum dolor sit amet',
			'date_debut' => '2012-05-05',
			'date_fin' => '2012-05-05',
			'actuel' => 1,
			'users_id' => 1
		),
	);
}
