<?php
App::uses('AppController', 'Controller');
/**
 * FormationsMetiers Controller
 *
 * @property FormationsMetier $FormationsMetier
 */
class FormationsMetiersController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FormationsMetier->recursive = 0;
		$this->set('formationsMetiers', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FormationsMetier->id = $id;
		if (!$this->FormationsMetier->exists()) {
			throw new NotFoundException(__('Invalid formations metier'));
		}
		$this->set('formationsMetier', $this->FormationsMetier->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FormationsMetier->create();
			if ($this->FormationsMetier->save($this->request->data)) {
				$this->Session->setFlash(__('The formations metier has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The formations metier could not be saved. Please, try again.'));
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
		$this->FormationsMetier->id = $id;
		if (!$this->FormationsMetier->exists()) {
			throw new NotFoundException(__('Invalid formations metier'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FormationsMetier->save($this->request->data)) {
				$this->Session->setFlash(__('The formations metier has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The formations metier could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FormationsMetier->read(null, $id);
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
		$this->FormationsMetier->id = $id;
		if (!$this->FormationsMetier->exists()) {
			throw new NotFoundException(__('Invalid formations metier'));
		}
		if ($this->FormationsMetier->delete()) {
			$this->Session->setFlash(__('Formations metier deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Formations metier was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->FormationsMetier->recursive = 0;
		$this->set('formationsMetiers', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->FormationsMetier->id = $id;
		if (!$this->FormationsMetier->exists()) {
			throw new NotFoundException(__('Invalid formations metier'));
		}
		$this->set('formationsMetier', $this->FormationsMetier->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->FormationsMetier->create();
			if ($this->FormationsMetier->save($this->request->data)) {
				$this->Session->setFlash(__('The formations metier has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The formations metier could not be saved. Please, try again.'));
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
		$this->FormationsMetier->id = $id;
		if (!$this->FormationsMetier->exists()) {
			throw new NotFoundException(__('Invalid formations metier'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FormationsMetier->save($this->request->data)) {
				$this->Session->setFlash(__('The formations metier has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The formations metier could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FormationsMetier->read(null, $id);
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
		$this->FormationsMetier->id = $id;
		if (!$this->FormationsMetier->exists()) {
			throw new NotFoundException(__('Invalid formations metier'));
		}
		if ($this->FormationsMetier->delete()) {
			$this->Session->setFlash(__('Formations metier deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Formations metier was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
