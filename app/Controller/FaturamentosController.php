<?php
App::uses('AppController', 'Controller');
/**
 * Faturamentos Controller
 *
 * @property Faturamento $Faturamento
 * @property PaginatorComponent $Paginator
 */
class FaturamentosController extends AppController {

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
		$this->Faturamento->recursive = 0;
		$this->set('faturamentos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Faturamento->exists($id)) {
			throw new NotFoundException(__('Invalid faturamento'));
		}
		$options = array('conditions' => array('Faturamento.' . $this->Faturamento->primaryKey => $id));
		$this->set('faturamento', $this->Faturamento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Faturamento->create();
			if ($this->Faturamento->save($this->request->data)) {
				$this->Session->setFlash(__('The faturamento has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The faturamento could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$cooperativas = $this->Faturamento->Cooperativa->find('list');
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
		if (!$this->Faturamento->exists($id)) {
			throw new NotFoundException(__('Invalid faturamento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Faturamento->save($this->request->data)) {
				$this->Session->setFlash(__('The faturamento has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The faturamento could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Faturamento.' . $this->Faturamento->primaryKey => $id));
			$this->request->data = $this->Faturamento->find('first', $options);
		}
		$cooperativas = $this->Faturamento->Cooperativa->find('list');
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
		$this->Faturamento->id = $id;
		if (!$this->Faturamento->exists()) {
			throw new NotFoundException(__('Invalid faturamento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Faturamento->delete()) {
			$this->Session->setFlash(__('The faturamento has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The faturamento could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
