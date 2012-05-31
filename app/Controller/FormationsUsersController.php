<?php
App::uses('AppController', 'Controller');
/**
 * FormationsUsers Controller
 *
 * @property FormationsUser $FormationsUser
 */
class FormationsUsersController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FormationsUser->recursive = 0;
		$this->set('formationsUsers', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FormationsUser->id = $id;
		if (!$this->FormationsUser->exists()) {
			throw new NotFoundException(__('Invalid formations user'));
		}
		$this->set('formationsUser', $this->FormationsUser->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FormationsUser->create();
			if ($this->FormationsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The formations user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The formations user could not be saved. Please, try again.'));
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
		$this->FormationsUser->id = $id;
		if (!$this->FormationsUser->exists()) {
			throw new NotFoundException(__('Invalid formations user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FormationsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The formations user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The formations user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FormationsUser->read(null, $id);
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
		$this->FormationsUser->id = $id;
		if (!$this->FormationsUser->exists()) {
			throw new NotFoundException(__('Invalid formations user'));
		}
		if ($this->FormationsUser->delete()) {
			$this->Session->setFlash(__('Formations user deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Formations user was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->FormationsUser->recursive = 0;
		$this->set('formationsUsers', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->FormationsUser->id = $id;
		if (!$this->FormationsUser->exists()) {
			throw new NotFoundException(__('Invalid formations user'));
		}
		$this->set('formationsUser', $this->FormationsUser->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->FormationsUser->create();
			if ($this->FormationsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The formations user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The formations user could not be saved. Please, try again.'));
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
		$this->FormationsUser->id = $id;
		if (!$this->FormationsUser->exists()) {
			throw new NotFoundException(__('Invalid formations user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FormationsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The formations user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The formations user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FormationsUser->read(null, $id);
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
		$this->FormationsUser->id = $id;
		if (!$this->FormationsUser->exists()) {
			throw new NotFoundException(__('Invalid formations user'));
		}
		if ($this->FormationsUser->delete()) {
			$this->Session->setFlash(__('Formations user deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Formations user was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
