<?php
App::uses('AppController', 'Controller');
/**
 * Ufs Controller
 *
 * @property Uf $Uf
 * @property PaginatorComponent $Paginator
 */
class UfsController extends AppController {

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
		$this->Uf->recursive = 0;
		$this->set('ufs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Uf->exists($id)) {
			throw new NotFoundException(__('Invalid uf'));
		}
		$options = array('conditions' => array('Uf.' . $this->Uf->primaryKey => $id));
		$this->set('uf', $this->Uf->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Uf->create();
			if ($this->Uf->save($this->request->data)) {
				$this->Session->setFlash(__('The uf has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The uf could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Uf->exists($id)) {
			throw new NotFoundException(__('Invalid uf'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Uf->save($this->request->data)) {
				$this->Session->setFlash(__('The uf has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The uf could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Uf.' . $this->Uf->primaryKey => $id));
			$this->request->data = $this->Uf->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Uf->id = $id;
		if (!$this->Uf->exists()) {
			throw new NotFoundException(__('Invalid uf'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Uf->delete()) {
			$this->Session->setFlash(__('The uf has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The uf could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
