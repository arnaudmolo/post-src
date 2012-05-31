<?php
App::uses('AppController', 'Controller');
/**
 * Formations Controller
 *
 * @property Formation $Formation
 */
class FormationsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Formation->recursive = 0;
		$this->set('formations', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Formation->id = $id;
		if (!$this->Formation->exists()) {
			throw new NotFoundException(__('Invalid formation'));
		}
		$this->set('formation', $this->Formation->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Formation->create();
			if ($this->Formation->save($this->request->data)) {
				$this->Session->setFlash(__('The formation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The formation could not be saved. Please, try again.'));
			}
		}
		$metiers = $this->Formation->Metier->find('list');
		$users = $this->Formation->User->find('list');
		$this->set(compact('metiers', 'users'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Formation->id = $id;
		if (!$this->Formation->exists()) {
			throw new NotFoundException(__('Invalid formation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Formation->save($this->request->data)) {
				$this->Session->setFlash(__('The formation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The formation could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Formation->read(null, $id);
		}
		$metiers = $this->Formation->Metier->find('list');
		$users = $this->Formation->User->find('list');
		$this->set(compact('metiers', 'users'));
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
		$this->Formation->id = $id;
		if (!$this->Formation->exists()) {
			throw new NotFoundException(__('Invalid formation'));
		}
		if ($this->Formation->delete()) {
			$this->Session->setFlash(__('Formation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Formation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Formation->recursive = 0;
		$this->set('formations', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Formation->id = $id;
		if (!$this->Formation->exists()) {
			throw new NotFoundException(__('Invalid formation'));
		}
		$this->set('formation', $this->Formation->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Formation->create();
			if ($this->Formation->save($this->request->data)) {
				$this->Session->setFlash(__('The formation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The formation could not be saved. Please, try again.'));
			}
		}
		$metiers = $this->Formation->Metier->find('list');
		$users = $this->Formation->User->find('list');
		$this->set(compact('metiers', 'users'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Formation->id = $id;
		if (!$this->Formation->exists()) {
			throw new NotFoundException(__('Invalid formation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Formation->save($this->request->data)) {
				$this->Session->setFlash(__('The formation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The formation could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Formation->read(null, $id);
		}
		$metiers = $this->Formation->Metier->find('list');
		$users = $this->Formation->User->find('list');
		$this->set(compact('metiers', 'users'));
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
		$this->Formation->id = $id;
		if (!$this->Formation->exists()) {
			throw new NotFoundException(__('Invalid formation'));
		}
		if ($this->Formation->delete()) {
			$this->Session->setFlash(__('Formation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Formation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
