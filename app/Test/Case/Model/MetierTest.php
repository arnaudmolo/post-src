<?php
App::uses('Metier', 'Model');

/**
 * Metier Test Case
 *
 */
class MetierTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.metier', 'app.formation', 'app.formations_metier', 'app.user', 'app.annonce', 'app.emplois', 'app.formations_user', 'app.metiers_user');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Metier = ClassRegistry::init('Metier');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Metier);

		parent::tearDown();
	}

}
