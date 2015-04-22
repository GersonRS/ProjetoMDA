<?php
App::uses('AppController', 'Controller');
/**
 * Cooperativas Controller
 *
 * @property Cooperativa $Cooperativa
 * @property PaginatorComponent $Paginator
 */
class CooperativasController extends AppController {

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
		$this->Cooperativa->recursive = 0;
		$this->set('cooperativas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cooperativa->exists($id)) {
			throw new NotFoundException(__('Invalid cooperativa'));
		}
		$options = array('conditions' => array('Cooperativa.' . $this->Cooperativa->primaryKey => $id));
		$this->set('cooperativa', $this->Cooperativa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cooperativa->create();
			if ($this->Cooperativa->save($this->request->data)) {
				$this->Session->setFlash(__('The cooperativa has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cooperativa could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Cooperativa->exists($id)) {
			throw new NotFoundException(__('Invalid cooperativa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cooperativa->save($this->request->data)) {
				$this->Session->setFlash(__('The cooperativa has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cooperativa could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Cooperativa.' . $this->Cooperativa->primaryKey => $id));
			$this->request->data = $this->Cooperativa->find('first', $options);
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
		$this->Cooperativa->id = $id;
		if (!$this->Cooperativa->exists()) {
			throw new NotFoundException(__('Invalid cooperativa'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Cooperativa->delete()) {
			$this->Session->setFlash(__('The cooperativa has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The cooperativa could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
