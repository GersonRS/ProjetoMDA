<?php
App::uses('AppController', 'Controller');
/**
 * Checklists Controller
 *
 * @property Checklist $Checklist
 * @property PaginatorComponent $Paginator
 */
class ChecklistsController extends AppController {

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
		$this->Checklist->recursive = 0;
		$this->set('checklists', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Checklist->exists($id)) {
			throw new NotFoundException(__('Invalid checklist'));
		}
		$options = array('conditions' => array('Checklist.' . $this->Checklist->primaryKey => $id));
		$this->set('checklist', $this->Checklist->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Checklist->create();
			if ($this->Checklist->save($this->request->data)) {
				$this->Session->setFlash(__('The checklist has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The checklist could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$nucleos = $this->Checklist->Nucleo->find('list');
		$empreendimentos = $this->Checklist->Empreendimento->find('list');
		$pairs = $this->Checklist->Pair->find('list');
		$usuarios = $this->Checklist->Usuario->find('list');
		$questionarios = $this->Checklist->Questionario->find('list');
		$this->set(compact('nucleos', 'empreendimentos', 'pairs', 'usuarios', 'questionarios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Checklist->exists($id)) {
			throw new NotFoundException(__('Invalid checklist'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Checklist->save($this->request->data)) {
				$this->Session->setFlash(__('The checklist has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The checklist could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Checklist.' . $this->Checklist->primaryKey => $id));
			$this->request->data = $this->Checklist->find('first', $options);
		}
		$nucleos = $this->Checklist->Nucleo->find('list');
		$empreendimentos = $this->Checklist->Empreendimento->find('list');
		$pairs = $this->Checklist->Pair->find('list');
		$usuarios = $this->Checklist->Usuario->find('list');
		$questionarios = $this->Checklist->Questionario->find('list');
		$this->set(compact('nucleos', 'empreendimentos', 'pairs', 'usuarios', 'questionarios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Checklist->id = $id;
		if (!$this->Checklist->exists()) {
			throw new NotFoundException(__('Invalid checklist'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Checklist->delete()) {
			$this->Session->setFlash(__('The checklist has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The checklist could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
