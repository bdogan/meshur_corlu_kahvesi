<?php

App::uses('BrkAppController', 'Brk.Controller');

class ProfileController extends BrkAppController {

	public $uses = array('User');
	
	public function index($id = null) {
		if (!$id) {
			$id = $this->Session->read('User.Id');
		}
		$this->set('user', $this->User->findById($id));
	}

	public function edit($id = null) {
		if (!$id) {
			$id = $this->Session->read('User.Id');
		}
		if ($id != $this->Session->read('User.Id')) {
			$this->Session->setFlash('Yanlızca kendi profilinizi düzenleyebilirsiniz', 'brk.bootstrap', array('class' => 'warning'));
			$this->redirect(array('plugin' => 'brk', 'controller' => 'profile', 'action' => 'index'));
		}
		if (!empty($this->request->data)) {
			if (!empty($this->request->data['User']['password'])){
				$this->request->data['User']['password'] = md5($this->request->data['User']['password']);
			} else {
				unset($this->request->data['User']['password']);
			}
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('Profil düzenlendi', 'Brk.bootstrap', array('class' => 'success'));
				$this->redirect(array('plugin' => 'brk', 'controller' => 'profile', 'action' => 'index', $id));
			} else {
				$this->Session->setFlash('Profil düzenlenemedi', 'Brk.bootstrap', array('class' => 'danger'));
				$this->redirect(array('plugin' => 'brk', 'controller' => 'profile', 'action' => 'edit', $id));
			}
		} else {
			$this->request->data = $this->User->findById($id);
		}
		unset($this->request->data['User']['password']);
	}
}