<?php

App::uses('AppController', 'Controller');

class BrkAppController extends AppController {

	public $helpers = array('Brk.Brk');

	public $mainPage = array('plugin' => 'brk', 'controller' => 'main', 'action' => 'index');

	public function beforeFilter() {
		parent::beforeFilter();
		
		if (!$this->_checkLogin() && !$this->_inSafePage()) { 
			$this->redirect(array('controller' => 'users', 'action' => 'login'));
		}
	}

	public function _checkLogin() {
		return $this->Session->read('User.Status') == 'Success';
	}

	public function _inSafePage() {
		$here = $this->request->here;

		$nonLoginPages = array();
		$nonLoginPages[] = Router::url(array('plugin' => 'brk', 'controller' => 'users', 'action' => 'login'));
		$nonLoginPages[] = Router::url(array('plugin' => 'brk', 'controller' => 'users', 'action' => 'logout'));

		return in_array($here, $nonLoginPages);
	}
}