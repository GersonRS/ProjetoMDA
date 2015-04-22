<?php
App::uses('AppController', 'Controller');
/**
 * Matrizes Controller
 *
 * @property Matrize $Matrize
 * @property PaginatorComponent $Paginator
 */
class MatrizesController extends AppController {

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
		$this->Matrize->recursive = 0;
		$this->set('matrizes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Matrize->exists($id)) {
			throw new NotFoundException(__('Invalid matrize'));
		}
		$options = array('conditions' => array('Matrize.' . $this->Matrize->primaryKey => $id));
		$this->set('matrize', $this->Matrize->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Matrize->create();
			if ($this->Matrize->save($this->request->data)) {
				$this->Session->setFlash(__('The matrize has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The matrize could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$checklists = $this->Matrize->Checklist->find('list');
		$subareas = $this->Matrize->Subarea->find('list');
		$nucleos = $this->Matrize->Nucleo->find('list');
		$this->set(compact('checklists', 'subareas', 'nucleos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Matrize->exists($id)) {
			throw new NotFoundException(__('Invalid matrize'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Matrize->save($this->request->data)) {
				$this->Session->setFlash(__('The matrize has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The matrize could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Matrize.' . $this->Matrize->primaryKey => $id));
			$this->request->data = $this->Matrize->find('first', $options);
		}
		$checklists = $this->Matrize->Checklist->find('list');
		$subareas = $this->Matrize->Subarea->find('list');
		$nucleos = $this->Matrize->Nucleo->find('list');
		$this->set(compact('checklists', 'subareas', 'nucleos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Matrize->id = $id;
		if (!$this->Matrize->exists()) {
			throw new NotFoundException(__('Invalid matrize'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Matrize->delete()) {
			$this->Session->setFlash(__('The matrize has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The matrize could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
