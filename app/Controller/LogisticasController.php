<?php
App::uses('AppController', 'Controller');
/**
 * Logisticas Controller
 *
 * @property Logistica $Logistica
 * @property PaginatorComponent $Paginator
 */
class LogisticasController extends AppController {

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
		$this->Logistica->recursive = 0;
		$this->set('logisticas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Logistica->exists($id)) {
			throw new NotFoundException(__('Invalid logistica'));
		}
		$options = array('conditions' => array('Logistica.' . $this->Logistica->primaryKey => $id));
		$this->set('logistica', $this->Logistica->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Logistica->create();
			if ($this->Logistica->save($this->request->data)) {
				$this->Session->setFlash(__('The logistica has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The logistica could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$cooperativas = $this->Logistica->Cooperativa->find('list');
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
		if (!$this->Logistica->exists($id)) {
			throw new NotFoundException(__('Invalid logistica'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Logistica->save($this->request->data)) {
				$this->Session->setFlash(__('The logistica has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The logistica could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Logistica.' . $this->Logistica->primaryKey => $id));
			$this->request->data = $this->Logistica->find('first', $options);
		}
		$cooperativas = $this->Logistica->Cooperativa->find('list');
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
		$this->Logistica->id = $id;
		if (!$this->Logistica->exists()) {
			throw new NotFoundException(__('Invalid logistica'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Logistica->delete()) {
			$this->Session->setFlash(__('The logistica has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The logistica could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
