<?php

App::uses('BrkAppModel', 'Brk.Model');

class User extends BrkAppModel {

	public function checkUser($mail = null, $password = null) {
		$conditions = array(
			'User.mail' => $mail,
			'User.password' => $password,
			'User.is_active' => 1
		);
		if ($user = $this->find('first', array('conditions' => $conditions))) {
			return $user;
		}
		return false;
	}

}