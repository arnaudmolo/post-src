<?php
App::uses('AppController', 'Controller');
/**
 * Emplois Controller
 *
 * @property Emplois $Emplois
 */
class EmploisController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Emplois->recursive = 0;
		$this->set('emplois', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Emplois->id = $id;
		if (!$this->Emplois->exists()) {
			throw new NotFoundException(__('Invalid emplois'));
		}
		$this->set('emplois', $this->Emplois->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Emplois->create();
			if ($this->Emplois->save($this->request->data)) {
				$this->Session->setFlash(__('The emplois has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The emplois could not be saved. Please, try again.'));
			}
		}
		$users = $this->Emplois->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Emplois->id = $id;
		if (!$this->Emplois->exists()) {
			throw new NotFoundException(__('Invalid emplois'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Emplois->save($this->request->data)) {
				$this->Session->setFlash(__('The emplois has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The emplois could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Emplois->read(null, $id);
		}
		$users = $this->Emplois->User->find('list');
		$this->set(compact('users'));
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
		$this->Emplois->id = $id;
		if (!$this->Emplois->exists()) {
			throw new NotFoundException(__('Invalid emplois'));
		}
		if ($this->Emplois->delete()) {
			$this->Session->setFlash(__('Emplois deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Emplois was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Emplois->recursive = 0;
		$this->set('emplois', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Emplois->id = $id;
		if (!$this->Emplois->exists()) {
			throw new NotFoundException(__('Invalid emplois'));
		}
		$this->set('emplois', $this->Emplois->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Emplois->create();
			if ($this->Emplois->save($this->request->data)) {
				$this->Session->setFlash(__('The emplois has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The emplois could not be saved. Please, try again.'));
			}
		}
		$users = $this->Emplois->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Emplois->id = $id;
		if (!$this->Emplois->exists()) {
			throw new NotFoundException(__('Invalid emplois'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Emplois->save($this->request->data)) {
				$this->Session->setFlash(__('The emplois has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The emplois could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Emplois->read(null, $id);
		}
		$users = $this->Emplois->User->find('list');
		$this->set(compact('users'));
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
		$this->Emplois->id = $id;
		if (!$this->Emplois->exists()) {
			throw new NotFoundException(__('Invalid emplois'));
		}
		if ($this->Emplois->delete()) {
			$this->Session->setFlash(__('Emplois deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Emplois was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
