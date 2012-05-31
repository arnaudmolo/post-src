<?php
App::uses('Mission', 'Model');

/**
 * Mission Test Case
 *
 */
class MissionTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.mission', 'app.emplois');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mission = ClassRegistry::init('Mission');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mission);

		parent::tearDown();
	}

}
