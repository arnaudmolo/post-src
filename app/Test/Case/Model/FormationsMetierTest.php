<?php
App::uses('FormationsMetier', 'Model');

/**
 * FormationsMetier Test Case
 *
 */
class FormationsMetierTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.formations_metier', 'app.formations', 'app.metiers');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FormationsMetier = ClassRegistry::init('FormationsMetier');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FormationsMetier);

		parent::tearDown();
	}

}
