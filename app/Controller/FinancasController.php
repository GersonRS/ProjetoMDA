<?php
App::uses('AppController', 'Controller');
/**
 * Financas Controller
 *
 * @property Financa $Financa
 * @property PaginatorComponent $Paginator
 */
class FinancasController extends AppController {

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
		$this->Financa->recursive = 0;
		$this->set('financas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Financa->exists($id)) {
			throw new NotFoundException(__('Invalid financa'));
		}
		$options = array('conditions' => array('Financa.' . $this->Financa->primaryKey => $id));
		$this->set('financa', $this->Financa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Financa->create();
			if ($this->Financa->save($this->request->data)) {
				$this->Session->setFlash(__('The financa has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The financa could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$cooperativas = $this->Financa->Cooperativa->find('list');
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
		if (!$this->Financa->exists($id)) {
			throw new NotFoundException(__('Invalid financa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Financa->save($this->request->data)) {
				$this->Session->setFlash(__('The financa has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The financa could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Financa.' . $this->Financa->primaryKey => $id));
			$this->request->data = $this->Financa->find('first', $options);
		}
		$cooperativas = $this->Financa->Cooperativa->find('list');
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
		$this->Financa->id = $id;
		if (!$this->Financa->exists()) {
			throw new NotFoundException(__('Invalid financa'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Financa->delete()) {
			$this->Session->setFlash(__('The financa has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The financa could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
