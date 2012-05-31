<?php
App::uses('AppController', 'Controller');
/**
 * Annonces Controller
 *
 * @property Annonce $Annonce
 */
class AnnoncesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Annonce->recursive = 0;
		$this->set('annonces', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Annonce->id = $id;
		if (!$this->Annonce->exists()) {
			throw new NotFoundException(__('Invalid annonce'));
		}
		$this->set('annonce', $this->Annonce->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Annonce->create();
			if ($this->Annonce->save($this->request->data)) {
				$this->Session->setFlash(__('The annonce has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The annonce could not be saved. Please, try again.'));
			}
		}
		$users = $this->Annonce->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Annonce->id = $id;
		if (!$this->Annonce->exists()) {
			throw new NotFoundException(__('Invalid annonce'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Annonce->save($this->request->data)) {
				$this->Session->setFlash(__('The annonce has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The annonce could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Annonce->read(null, $id);
		}
		$users = $this->Annonce->User->find('list');
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
		$this->Annonce->id = $id;
		if (!$this->Annonce->exists()) {
			throw new NotFoundException(__('Invalid annonce'));
		}
		if ($this->Annonce->delete()) {
			$this->Session->setFlash(__('Annonce deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Annonce was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Annonce->recursive = 0;
		$this->set('annonces', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Annonce->id = $id;
		if (!$this->Annonce->exists()) {
			throw new NotFoundException(__('Invalid annonce'));
		}
		$this->set('annonce', $this->Annonce->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Annonce->create();
			if ($this->Annonce->save($this->request->data)) {
				$this->Session->setFlash(__('The annonce has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The annonce could not be saved. Please, try again.'));
			}
		}
		$users = $this->Annonce->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Annonce->id = $id;
		if (!$this->Annonce->exists()) {
			throw new NotFoundException(__('Invalid annonce'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Annonce->save($this->request->data)) {
				$this->Session->setFlash(__('The annonce has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The annonce could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Annonce->read(null, $id);
		}
		$users = $this->Annonce->User->find('list');
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
		$this->Annonce->id = $id;
		if (!$this->Annonce->exists()) {
			throw new NotFoundException(__('Invalid annonce'));
		}
		if ($this->Annonce->delete()) {
			$this->Session->setFlash(__('Annonce deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Annonce was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
