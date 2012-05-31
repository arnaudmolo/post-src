<?php
App::uses('FormationsUser', 'Model');

/**
 * FormationsUser Test Case
 *
 */
class FormationsUserTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.formations_user', 'app.formation', 'app.metier', 'app.formations_metier', 'app.user', 'app.metiers_user');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FormationsUser = ClassRegistry::init('FormationsUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FormationsUser);

		parent::tearDown();
	}

}
