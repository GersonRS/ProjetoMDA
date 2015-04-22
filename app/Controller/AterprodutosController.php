<?php
App::uses('AppController', 'Controller');
/**
 * Aterprodutos Controller
 *
 * @property Aterproduto $Aterproduto
 * @property PaginatorComponent $Paginator
 */
class AterprodutosController extends AppController {

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
		$this->Aterproduto->recursive = 0;
		$this->set('aterprodutos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Aterproduto->exists($id)) {
			throw new NotFoundException(__('Invalid aterproduto'));
		}
		$options = array('conditions' => array('Aterproduto.' . $this->Aterproduto->primaryKey => $id));
		$this->set('aterproduto', $this->Aterproduto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Aterproduto->create();
			if ($this->Aterproduto->save($this->request->data)) {
				$this->Session->setFlash(__('The aterproduto has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aterproduto could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$cooperativas = $this->Aterproduto->Cooperativa->find('list');
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
		if (!$this->Aterproduto->exists($id)) {
			throw new NotFoundException(__('Invalid aterproduto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Aterproduto->save($this->request->data)) {
				$this->Session->setFlash(__('The aterproduto has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The aterproduto could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Aterproduto.' . $this->Aterproduto->primaryKey => $id));
			$this->request->data = $this->Aterproduto->find('first', $options);
		}
		$cooperativas = $this->Aterproduto->Cooperativa->find('list');
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
		$this->Aterproduto->id = $id;
		if (!$this->Aterproduto->exists()) {
			throw new NotFoundException(__('Invalid aterproduto'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Aterproduto->delete()) {
			$this->Session->setFlash(__('The aterproduto has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The aterproduto could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
