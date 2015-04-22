<?php
App::uses('AppController', 'Controller');
/**
 * ChecklistsQuestionarios Controller
 *
 * @property ChecklistsQuestionario $ChecklistsQuestionario
 * @property PaginatorComponent $Paginator
 */
class ChecklistsQuestionariosController extends AppController {

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
		$this->ChecklistsQuestionario->recursive = 0;
		$this->set('checklistsQuestionarios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ChecklistsQuestionario->exists($id)) {
			throw new NotFoundException(__('Invalid checklists questionario'));
		}
		$options = array('conditions' => array('ChecklistsQuestionario.' . $this->ChecklistsQuestionario->primaryKey => $id));
		$this->set('checklistsQuestionario', $this->ChecklistsQuestionario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ChecklistsQuestionario->create();
			if ($this->ChecklistsQuestionario->save($this->request->data)) {
				$this->Session->setFlash(__('The checklists questionario has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The checklists questionario could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$checklists = $this->ChecklistsQuestionario->Checklist->find('list');
		$questionarios = $this->ChecklistsQuestionario->Questionario->find('list');
		$nucleos = $this->ChecklistsQuestionario->Nucleo->find('list');
		$this->set(compact('checklists', 'questionarios', 'nucleos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ChecklistsQuestionario->exists($id)) {
			throw new NotFoundException(__('Invalid checklists questionario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ChecklistsQuestionario->save($this->request->data)) {
				$this->Session->setFlash(__('The checklists questionario has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The checklists questionario could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('ChecklistsQuestionario.' . $this->ChecklistsQuestionario->primaryKey => $id));
			$this->request->data = $this->ChecklistsQuestionario->find('first', $options);
		}
		$checklists = $this->ChecklistsQuestionario->Checklist->find('list');
		$questionarios = $this->ChecklistsQuestionario->Questionario->find('list');
		$nucleos = $this->ChecklistsQuestionario->Nucleo->find('list');
		$this->set(compact('checklists', 'questionarios', 'nucleos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ChecklistsQuestionario->id = $id;
		if (!$this->ChecklistsQuestionario->exists()) {
			throw new NotFoundException(__('Invalid checklists questionario'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ChecklistsQuestionario->delete()) {
			$this->Session->setFlash(__('The checklists questionario has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The checklists questionario could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
