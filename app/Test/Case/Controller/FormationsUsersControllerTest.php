<?php
App::uses('FormationsUsersController', 'Controller');

/**
 * TestFormationsUsersController *
 */
class TestFormationsUsersController extends FormationsUsersController {
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
 * FormationsUsersController Test Case
 *
 */
class FormationsUsersControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.formations_user', 'app.formation', 'app.metier', 'app.formations_metier', 'app.user', 'app.annonce', 'app.emplois', 'app.metiers_user');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FormationsUsers = new TestFormationsUsersController();
		$this->FormationsUsers->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FormationsUsers);

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
