<?php
App::uses('AppController', 'Controller');
/**
 * Agronegocios Controller
 *
 * @property Agronegocio $Agronegocio
 * @property PaginatorComponent $Paginator
 */
class AgronegociosController extends AppController {

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
		$this->Agronegocio->recursive = 0;
		$this->set('agronegocios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Agronegocio->exists($id)) {
			throw new NotFoundException(__('Invalid agronegocio'));
		}
		$options = array('conditions' => array('Agronegocio.' . $this->Agronegocio->primaryKey => $id));
		$this->set('agronegocio', $this->Agronegocio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Agronegocio->create();
			if ($this->Agronegocio->save($this->request->data)) {
				$this->Session->setFlash(__('The agronegocio has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The agronegocio could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$cooperativas = $this->Agronegocio->Cooperativa->find('list');
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
		if (!$this->Agronegocio->exists($id)) {
			throw new NotFoundException(__('Invalid agronegocio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Agronegocio->save($this->request->data)) {
				$this->Session->setFlash(__('The agronegocio has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The agronegocio could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Agronegocio.' . $this->Agronegocio->primaryKey => $id));
			$this->request->data = $this->Agronegocio->find('first', $options);
		}
		$cooperativas = $this->Agronegocio->Cooperativa->find('list');
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
		$this->Agronegocio->id = $id;
		if (!$this->Agronegocio->exists()) {
			throw new NotFoundException(__('Invalid agronegocio'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Agronegocio->delete()) {
			$this->Session->setFlash(__('The agronegocio has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The agronegocio could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
