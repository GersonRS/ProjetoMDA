<?php
App::uses('AppController', 'Controller');
/**
 * Empreendimentos Controller
 *
 * @property Empreendimento $Empreendimento
 * @property PaginatorComponent $Paginator
 */
class EmpreendimentosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Empreendimento->recursive = 0;
		$this->set('empreendimentos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Empreendimento->exists($id)) {
			throw new NotFoundException(__('Invalid empreendimento'));
		}
		$options = array('conditions' => array('Empreendimento.' . $this->Empreendimento->primaryKey => $id));
		$this->set('empreendimento', $this->Empreendimento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Empreendimento->create();
			if ($this->Empreendimento->save($this->request->data)) {
				$this->Session->setFlash(__('The empreendimento has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The empreendimento could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$ufs = $this->Empreendimento->Uf->find('list');
		$nucleos = $this->Empreendimento->Nucleo->find('list');
		$this->set(compact('ufs', 'nucleos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Empreendimento->exists($id)) {
			throw new NotFoundException(__('Invalid empreendimento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Empreendimento->save($this->request->data)) {
				$this->Session->setFlash(__('The empreendimento has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The empreendimento could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Empreendimento.' . $this->Empreendimento->primaryKey => $id));
			$this->request->data = $this->Empreendimento->find('first', $options);
		}
		$ufs = $this->Empreendimento->Uf->find('list');
		$nucleos = $this->Empreendimento->Nucleo->find('list');
		$this->set(compact('ufs', 'nucleos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Empreendimento->id = $id;
		if (!$this->Empreendimento->exists()) {
			throw new NotFoundException(__('Invalid empreendimento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Empreendimento->delete()) {
			$this->Session->setFlash(__('The empreendimento has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The empreendimento could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
