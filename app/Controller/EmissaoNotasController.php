<?php
App::uses('AppController', 'Controller');
/**
 * EmissaoNotas Controller
 *
 * @property EmissaoNota $EmissaoNota
 * @property PaginatorComponent $Paginator
 */
class EmissaoNotasController extends AppController {

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
		$this->EmissaoNota->recursive = 0;
		$this->set('emissaoNotas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EmissaoNota->exists($id)) {
			throw new NotFoundException(__('Invalid emissao nota'));
		}
		$options = array('conditions' => array('EmissaoNota.' . $this->EmissaoNota->primaryKey => $id));
		$this->set('emissaoNota', $this->EmissaoNota->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EmissaoNota->create();
			if ($this->EmissaoNota->save($this->request->data)) {
				$this->Session->setFlash(__('The emissao nota has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The emissao nota could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$cooperativas = $this->EmissaoNota->Cooperativa->find('list');
		$this->set(compact('cooperativas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EmissaoNota->exists($id)) {
			throw new NotFoundException(__('Invalid emissao nota'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EmissaoNota->save($this->request->data)) {
				$this->Session->setFlash(__('The emissao nota has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The emissao nota could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('EmissaoNota.' . $this->EmissaoNota->primaryKey => $id));
			$this->request->data = $this->EmissaoNota->find('first', $options);
		}
		$cooperativas = $this->EmissaoNota->Cooperativa->find('list');
		$this->set(compact('cooperativas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EmissaoNota->id = $id;
		if (!$this->EmissaoNota->exists()) {
			throw new NotFoundException(__('Invalid emissao nota'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EmissaoNota->delete()) {
			$this->Session->setFlash(__('The emissao nota has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The emissao nota could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
