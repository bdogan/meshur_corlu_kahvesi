<?php

App::uses('BrkAppController', 'Brk.Controller');

class ResellersController extends BrkAppController {

	public $uses = array('Brk.Reseller');

	public $components = array('Paginator');

	public $paginate = array(
		'limit' => 25,
		'order' => array(
			'Reseller.name' => 'asc'
		)
	);

	public function index() {

		$this->Paginator->settings = $this->paginate;

		$resellers = $this->Paginator->paginate('Reseller');
		$this->set('resellers', $resellers);

	}

	public function add(){
		if (!empty($this->request->data)) {
			if ($this->Reseller->save($this->request->data)) {
				$this->Session->setFlash('Kaydedildi', 'Brk.bootstrap', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Keydedilemedi', 'Brk.bootstrap', array('class' => 'success'));
			}
		}
	}

	public function edit($id){
		if (!empty($this->request->data)) {
			if ($this->Reseller->save($this->request->data)) {
				$this->Session->setFlash('Kaydedildi', 'Brk.bootstrap', array('class' => 'success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Keydedilemedi', 'Brk.bootstrap', array('class' => 'success'));
			}
		} else {
			$this->request->data = $this->Reseller->findById($id);
		}

	}

	public function delete($id){
		if ($this->Reseller->delete($id, false)) {
			$this->Session->setFlash('Silindi', 'Brk.bootstrap', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		} else {
			$this->Session->setFlash('Silinemedi', 'Brk.bootstrap', array('class' => 'success'));
			$this->redirect(array('action' => 'index'));
		}
	}
}