<?php
/**
 * FormationsMetierFixture
 *
 */
class FormationsMetierFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'formations_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'metiers_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'indexes' => array('PRIMARY' => array('column' => array('formations_id', 'metiers_id'), 'unique' => 1), 'fk_formations_has_metiers_metiers1' => array('column' => 'metiers_id', 'unique' => 0), 'fk_formations_has_metiers_formations1' => array('column' => 'formations_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'formations_id' => 1,
			'metiers_id' => 1
		),
	);
}
