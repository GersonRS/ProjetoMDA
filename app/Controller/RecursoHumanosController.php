<?php
App::uses('AppController', 'Controller');
/**
 * RecursoHumanos Controller
 *
 * @property RecursoHumano $RecursoHumano
 * @property PaginatorComponent $Paginator
 */
class RecursoHumanosController extends AppController {

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
		$this->RecursoHumano->recursive = 0;
		$this->set('recursoHumanos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RecursoHumano->exists($id)) {
			throw new NotFoundException(__('Invalid recurso humano'));
		}
		$options = array('conditions' => array('RecursoHumano.' . $this->RecursoHumano->primaryKey => $id));
		$this->set('recursoHumano', $this->RecursoHumano->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RecursoHumano->create();
			if ($this->RecursoHumano->save($this->request->data)) {
				$this->Session->setFlash(__('The recurso humano has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recurso humano could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$cooperativas = $this->RecursoHumano->Cooperativa->find('list');
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
		if (!$this->RecursoHumano->exists($id)) {
			throw new NotFoundException(__('Invalid recurso humano'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->RecursoHumano->save($this->request->data)) {
				$this->Session->setFlash(__('The recurso humano has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The recurso humano could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('RecursoHumano.' . $this->RecursoHumano->primaryKey => $id));
			$this->request->data = $this->RecursoHumano->find('first', $options);
		}
		$cooperativas = $this->RecursoHumano->Cooperativa->find('list');
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
		$this->RecursoHumano->id = $id;
		if (!$this->RecursoHumano->exists()) {
			throw new NotFoundException(__('Invalid recurso humano'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->RecursoHumano->delete()) {
			$this->Session->setFlash(__('The recurso humano has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The recurso humano could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
