<?php

App::uses('BrkAppController', 'Brk.Controller');

class UsersController extends BrkAppController {

	public $uses = array('Brk.User');

	public function login() {
		if ($this->_checkLogin()) { $this->redirect($this->mainPage); }

		$this->layout = 'login';
		if (!empty($this->request->data)) {
			$mail = @$this->request->data['UserLogin']['mail'];
			$password = @$this->request->data['UserLogin']['password'];
			$password = md5($password);
			unset($this->request->data['UserLogin']['password']);
			if ($user = $this->User->checkUser($mail, $password)) {
				$this->Session->destroy();
				$this->Session->write('User', array(
					'Status' => 'Success',
					'Id' => $user['User']['id'],
					'Name' => $user['User']['name'],
					'LastName' => $user['User']['lastname'],
					'FullName' => $user['User']['name'] . ' ' . $user['User']['lastname'],
					'Email' => $user['User']['mail'],
					'IsSuperUser' => $user['User']['super_user'],
				));
				$this->redirect($this->mainPage);
			} else {
				$this->Session->setFlash('Giriş başarısız!', 'Brk.bootstrap', array('class' => 'danger'));
			}
		}
	}

	public function logout() {
		if (!$this->_checkLogin()) { $this->redirect(array('plugin' => 'brk', 'controller' => 'users', 'action' => 'login')); }
		$this->Session->destroy();
		$this->redirect($this->mainPage);
	}

}