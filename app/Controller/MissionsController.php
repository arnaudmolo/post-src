<?php
App::uses('AppController', 'Controller');
/**
 * Missions Controller
 *
 * @property Mission $Mission
 */
class MissionsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Mission->recursive = 0;
		$this->set('missions', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Mission->id = $id;
		if (!$this->Mission->exists()) {
			throw new NotFoundException(__('Invalid mission'));
		}
		$this->set('mission', $this->Mission->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mission->create();
			if ($this->Mission->save($this->request->data)) {
				$this->Session->setFlash(__('The mission has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mission could not be saved. Please, try again.'));
			}
		}
		$emplois = $this->Mission->Emploi->find('list');
		$this->set(compact('emplois'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Mission->id = $id;
		if (!$this->Mission->exists()) {
			throw new NotFoundException(__('Invalid mission'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Mission->save($this->request->data)) {
				$this->Session->setFlash(__('The mission has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mission could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Mission->read(null, $id);
		}
		$emplois = $this->Mission->Emploi->find('list');
		$this->set(compact('emplois'));
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
		$this->Mission->id = $id;
		if (!$this->Mission->exists()) {
			throw new NotFoundException(__('Invalid mission'));
		}
		if ($this->Mission->delete()) {
			$this->Session->setFlash(__('Mission deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mission was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Mission->recursive = 0;
		$this->set('missions', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Mission->id = $id;
		if (!$this->Mission->exists()) {
			throw new NotFoundException(__('Invalid mission'));
		}
		$this->set('mission', $this->Mission->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Mission->create();
			if ($this->Mission->save($this->request->data)) {
				$this->Session->setFlash(__('The mission has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mission could not be saved. Please, try again.'));
			}
		}
		$emplois = $this->Mission->Emploi->find('list');
		$this->set(compact('emplois'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Mission->id = $id;
		if (!$this->Mission->exists()) {
			throw new NotFoundException(__('Invalid mission'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Mission->save($this->request->data)) {
				$this->Session->setFlash(__('The mission has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mission could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Mission->read(null, $id);
		}
		$emplois = $this->Mission->Emploi->find('list');
		$this->set(compact('emplois'));
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
		$this->Mission->id = $id;
		if (!$this->Mission->exists()) {
			throw new NotFoundException(__('Invalid mission'));
		}
		if ($this->Mission->delete()) {
			$this->Session->setFlash(__('Mission deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mission was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
