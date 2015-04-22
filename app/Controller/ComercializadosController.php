<?php
App::uses('AppController', 'Controller');
/**
 * Comercializados Controller
 *
 * @property Comercializado $Comercializado
 * @property PaginatorComponent $Paginator
 */
class ComercializadosController extends AppController {

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
		$this->Comercializado->recursive = 0;
		$this->set('comercializados', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Comercializado->exists($id)) {
			throw new NotFoundException(__('Invalid comercializado'));
		}
		$options = array('conditions' => array('Comercializado.' . $this->Comercializado->primaryKey => $id));
		$this->set('comercializado', $this->Comercializado->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Comercializado->create();
			if ($this->Comercializado->save($this->request->data)) {
				$this->Session->setFlash(__('The comercializado has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comercializado could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$produtos = $this->Comercializado->Produto->find('list');
		$cooperativas = $this->Comercializado->Cooperativa->find('list');
		$this->set(compact('produtos', 'cooperativas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Comercializado->exists($id)) {
			throw new NotFoundException(__('Invalid comercializado'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Comercializado->save($this->request->data)) {
				$this->Session->setFlash(__('The comercializado has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comercializado could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Comercializado.' . $this->Comercializado->primaryKey => $id));
			$this->request->data = $this->Comercializado->find('first', $options);
		}
		$produtos = $this->Comercializado->Produto->find('list');
		$cooperativas = $this->Comercializado->Cooperativa->find('list');
		$this->set(compact('produtos', 'cooperativas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Comercializado->id = $id;
		if (!$this->Comercializado->exists()) {
			throw new NotFoundException(__('Invalid comercializado'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Comercializado->delete()) {
			$this->Session->setFlash(__('The comercializado has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The comercializado could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
