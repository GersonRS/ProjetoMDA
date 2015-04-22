<?php
App::uses('AppController', 'Controller');
/**
 * Pairs Controller
 *
 * @property Pair $Pair
 * @property PaginatorComponent $Paginator
 */
class PairsController extends AppController {

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
		$this->Pair->recursive = 0;
		$this->set('pairs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pair->exists($id)) {
			throw new NotFoundException(__('Invalid pair'));
		}
		$options = array('conditions' => array('Pair.' . $this->Pair->primaryKey => $id));
		$this->set('pair', $this->Pair->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pair->create();
			if ($this->Pair->save($this->request->data)) {
				$this->Session->setFlash(__('The pair has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pair could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$ufs = $this->Pair->Uf->find('list');
		$nucleos = $this->Pair->Nucleo->find('list');
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
		if (!$this->Pair->exists($id)) {
			throw new NotFoundException(__('Invalid pair'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pair->save($this->request->data)) {
				$this->Session->setFlash(__('The pair has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pair could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Pair.' . $this->Pair->primaryKey => $id));
			$this->request->data = $this->Pair->find('first', $options);
		}
		$ufs = $this->Pair->Uf->find('list');
		$nucleos = $this->Pair->Nucleo->find('list');
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
		$this->Pair->id = $id;
		if (!$this->Pair->exists()) {
			throw new NotFoundException(__('Invalid pair'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Pair->delete()) {
			$this->Session->setFlash(__('The pair has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The pair could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
