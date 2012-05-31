<?php
App::uses('MetiersUser', 'Model');

/**
 * MetiersUser Test Case
 *
 */
class MetiersUserTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.metiers_user', 'app.users', 'app.metiers');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MetiersUser = ClassRegistry::init('MetiersUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MetiersUser);

		parent::tearDown();
	}

}
