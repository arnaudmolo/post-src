<?php
/**
 * MetiersUserFixture
 *
 */
class MetiersUserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'users_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'metiers_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'contenu' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'date' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => array('users_id', 'metiers_id'), 'unique' => 1), 'fk_users_has_metiers_metiers1' => array('column' => 'metiers_id', 'unique' => 0), 'fk_users_has_metiers_users1' => array('column' => 'users_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'users_id' => 1,
			'metiers_id' => 1,
			'contenu' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'date' => '2012-05-05'
		),
	);
}
