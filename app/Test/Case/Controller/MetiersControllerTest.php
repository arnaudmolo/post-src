<?php
App::uses('MetiersController', 'Controller');

/**
 * TestMetiersController *
 */
class TestMetiersController extends MetiersController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * MetiersController Test Case
 *
 */
class MetiersControllerTestCase extends CakeTestCase {
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
		$this->Metiers = new TestMetiersController();
		$this->Metiers->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Metiers);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}
/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}
/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}
/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}
/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}
/**
 * testAdminIndex method
 *
 * @return void
 */
	public function testAdminIndex() {

	}
/**
 * testAdminView method
 *
 * @return void
 */
	public function testAdminView() {

	}
/**
 * testAdminAdd method
 *
 * @return void
 */
	public function testAdminAdd() {

	}
/**
 * testAdminEdit method
 *
 * @return void
 */
	public function testAdminEdit() {

	}
/**
 * testAdminDelete method
 *
 * @return void
 */
	public function testAdminDelete() {

	}
}
