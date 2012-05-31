<?php
App::uses('Emplois', 'Model');

/**
 * Emplois Test Case
 *
 */
class EmploisTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.emplois', 'app.users', 'app.mission');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Emplois = ClassRegistry::init('Emplois');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Emplois);

		parent::tearDown();
	}

}
