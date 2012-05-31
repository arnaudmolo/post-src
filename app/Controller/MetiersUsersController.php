<?php
App::uses('AppController', 'Controller');
/**
 * MetiersUsers Controller
 *
 * @property MetiersUser $MetiersUser
 */
class MetiersUsersController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MetiersUser->recursive = 0;
		$this->set('metiersUsers', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->MetiersUser->id = $id;
		if (!$this->MetiersUser->exists()) {
			throw new NotFoundException(__('Invalid metiers user'));
		}
		$this->set('metiersUser', $this->MetiersUser->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MetiersUser->create();
			if ($this->MetiersUser->save($this->request->data)) {
				$this->Session->setFlash(__('The metiers user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The metiers user could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->MetiersUser->id = $id;
		if (!$this->MetiersUser->exists()) {
			throw new NotFoundException(__('Invalid metiers user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MetiersUser->save($this->request->data)) {
				$this->Session->setFlash(__('The metiers user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The metiers user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->MetiersUser->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->MetiersUser->id = $id;
		if (!$this->MetiersUser->exists()) {
			throw new NotFoundException(__('Invalid metiers user'));
		}
		if ($this->MetiersUser->delete()) {
			$this->Session->setFlash(__('Metiers user deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Metiers user was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->MetiersUser->recursive = 0;
		$this->set('metiersUsers', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->MetiersUser->id = $id;
		if (!$this->MetiersUser->exists()) {
			throw new NotFoundException(__('Invalid metiers user'));
		}
		$this->set('metiersUser', $this->MetiersUser->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->MetiersUser->create();
			if ($this->MetiersUser->save($this->request->data)) {
				$this->Session->setFlash(__('The metiers user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The metiers user could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->MetiersUser->id = $id;
		if (!$this->MetiersUser->exists()) {
			throw new NotFoundException(__('Invalid metiers user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MetiersUser->save($this->request->data)) {
				$this->Session->setFlash(__('The metiers user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The metiers user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->MetiersUser->read(null, $id);
		}
	}

/**
 * admin_delete method
 *
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->MetiersUser->id = $id;
		if (!$this->MetiersUser->exists()) {
			throw new NotFoundException(__('Invalid metiers user'));
		}
		if ($this->MetiersUser->delete()) {
			$this->Session->setFlash(__('Metiers user deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Metiers user was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
