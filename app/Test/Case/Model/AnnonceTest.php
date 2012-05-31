<?php
App::uses('Annonce', 'Model');

/**
 * Annonce Test Case
 *
 */
class AnnonceTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.annonce', 'app.users');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Annonce = ClassRegistry::init('Annonce');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Annonce);

		parent::tearDown();
	}

}
