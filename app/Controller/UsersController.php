<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {
public function beforeFilter(){
	parent::beforeFilter();
	$this->Auth->allow('signin','logout','index','login');
}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
* login method
* 
* @return void
**/
	public function login(){
		if($this->request->is('post')){
			if($this->Auth->login()){
				$this->redirect($this->Auth->redirect());
			}else{
				$this->Session->setFlash(__('Mauvais mot de passe ou nom d\'utilisateur. Veuillez réessayer'));
			}
		}
	}

/**
* logout method
* 
* @return void
**/
	public function logout(){
		$this->redirect($this->Auth->logout());
	}
/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}
/**
 * signin method
 *
 * @return void
 */
	public function signin(){
		if($this->Auth->login()){
			$this->redirect(array('action'=>'index'));
		}
		if ($this->request->is('post')) {
			$d = $this->request->data;
			$d['User']['id']=null;
			$d['User']['last_connexion']=date('Y-m-d');
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$link = array('controller'=>'users','action'=>'activate',$this->User->id.'-'.md5($d['User']['password']));
				App::uses('CakeEmail','Network/Email'); 
				$mail = new CakeEmail(); 
				$mail->from('noreply@localhost.com')
					->to($d['User']['username'])
					->subject('Test :: Inscription')
					->emailFormat('html')
					->template('signin')
					->viewVars(array('username'=>$d['User']['username'],'link'=>$link))
					->send();
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$formations = $this->User->Formation->find('list');
		$metiers = $this->User->Metier->find('list');
		$this->set(compact('formations', 'metiers'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
		$formations = $this->User->Formation->find('list');
		$metiers = $this->User->Metier->find('list');
		$this->set(compact('formations', 'metiers'));
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

/**
 * admin_signin method
 *
 * @return void
 */
	public function admin_signin() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$formations = $this->User->Formation->find('list');
		$metiers = $this->User->Metier->find('list');
		$this->set(compact('formations', 'metiers'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}
		$formations = $this->User->Formation->find('list');
		$metiers = $this->User->Metier->find('list');
		$this->set(compact('formations', 'metiers'));
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
