<?php
App::uses('Formation', 'Model');

/**
 * Formation Test Case
 *
 */
class FormationTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.formation', 'app.metier', 'app.formations_metier', 'app.user', 'app.formations_user', 'app.metiers_user');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Formation = ClassRegistry::init('Formation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Formation);

		parent::tearDown();
	}

}
