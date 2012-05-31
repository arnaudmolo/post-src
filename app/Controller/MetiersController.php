<?php
App::uses('AppController', 'Controller');
/**
 * Metiers Controller
 *
 * @property Metier $Metier
 */
class MetiersController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Metier->recursive = 0;
		$this->set('metiers', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Metier->id = $id;
		if (!$this->Metier->exists()) {
			throw new NotFoundException(__('Invalid metier'));
		}
		$this->set('metier', $this->Metier->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Metier->create();
			if ($this->Metier->save($this->request->data)) {
				$this->Session->setFlash(__('The metier has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The metier could not be saved. Please, try again.'));
			}
		}
		$formations = $this->Metier->Formation->find('list');
		$users = $this->Metier->User->find('list');
		$this->set(compact('formations', 'users'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Metier->id = $id;
		if (!$this->Metier->exists()) {
			throw new NotFoundException(__('Invalid metier'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Metier->save($this->request->data)) {
				$this->Session->setFlash(__('The metier has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The metier could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Metier->read(null, $id);
		}
		$formations = $this->Metier->Formation->find('list');
		$users = $this->Metier->User->find('list');
		$this->set(compact('formations', 'users'));
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
		$this->Metier->id = $id;
		if (!$this->Metier->exists()) {
			throw new NotFoundException(__('Invalid metier'));
		}
		if ($this->Metier->delete()) {
			$this->Session->setFlash(__('Metier deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Metier was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Metier->recursive = 0;
		$this->set('metiers', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Metier->id = $id;
		if (!$this->Metier->exists()) {
			throw new NotFoundException(__('Invalid metier'));
		}
		$this->set('metier', $this->Metier->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Metier->create();
			if ($this->Metier->save($this->request->data)) {
				$this->Session->setFlash(__('The metier has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The metier could not be saved. Please, try again.'));
			}
		}
		$formations = $this->Metier->Formation->find('list');
		$users = $this->Metier->User->find('list');
		$this->set(compact('formations', 'users'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Metier->id = $id;
		if (!$this->Metier->exists()) {
			throw new NotFoundException(__('Invalid metier'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Metier->save($this->request->data)) {
				$this->Session->setFlash(__('The metier has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The metier could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Metier->read(null, $id);
		}
		$formations = $this->Metier->Formation->find('list');
		$users = $this->Metier->User->find('list');
		$this->set(compact('formations', 'users'));
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
		$this->Metier->id = $id;
		if (!$this->Metier->exists()) {
			throw new NotFoundException(__('Invalid metier'));
		}
		if ($this->Metier->delete()) {
			$this->Session->setFlash(__('Metier deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Metier was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
