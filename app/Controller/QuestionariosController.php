<?php
App::uses('AppController', 'Controller');
/**
 * Questionarios Controller
 *
 * @property Questionario $Questionario
 * @property PaginatorComponent $Paginator
 */
class QuestionariosController extends AppController {

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
		$this->Questionario->recursive = 0;
		$this->set('questionarios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Questionario->exists($id)) {
			throw new NotFoundException(__('Invalid questionario'));
		}
		$options = array('conditions' => array('Questionario.' . $this->Questionario->primaryKey => $id));
		$this->set('questionario', $this->Questionario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Questionario->create();
			if ($this->Questionario->save($this->request->data)) {
				$this->Session->setFlash(__('The questionario has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The questionario could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$nucleos = $this->Questionario->Nucleo->find('list');
		$subareas = $this->Questionario->Subarea->find('list');
		$checklists = $this->Questionario->Checklist->find('list');
		$this->set(compact('nucleos', 'subareas', 'checklists'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Questionario->exists($id)) {
			throw new NotFoundException(__('Invalid questionario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Questionario->save($this->request->data)) {
				$this->Session->setFlash(__('The questionario has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The questionario could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Questionario.' . $this->Questionario->primaryKey => $id));
			$this->request->data = $this->Questionario->find('first', $options);
		}
		$nucleos = $this->Questionario->Nucleo->find('list');
		$subareas = $this->Questionario->Subarea->find('list');
		$checklists = $this->Questionario->Checklist->find('list');
		$this->set(compact('nucleos', 'subareas', 'checklists'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Questionario->id = $id;
		if (!$this->Questionario->exists()) {
			throw new NotFoundException(__('Invalid questionario'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Questionario->delete()) {
			$this->Session->setFlash(__('The questionario has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The questionario could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
