<?php
App::uses('AppController', 'Controller');
/**
 * Subareas Controller
 *
 * @property Subarea $Subarea
 * @property PaginatorComponent $Paginator
 */
class SubareasController extends AppController {

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
		$this->Subarea->recursive = 0;
		$this->set('subareas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Subarea->exists($id)) {
			throw new NotFoundException(__('Invalid subarea'));
		}
		$options = array('conditions' => array('Subarea.' . $this->Subarea->primaryKey => $id));
		$this->set('subarea', $this->Subarea->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Subarea->create();
			if ($this->Subarea->save($this->request->data)) {
				$this->Session->setFlash(__('The subarea has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subarea could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$areas = $this->Subarea->Area->find('list');
		$nucleos = $this->Subarea->Nucleo->find('list');
		$this->set(compact('areas', 'nucleos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Subarea->exists($id)) {
			throw new NotFoundException(__('Invalid subarea'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Subarea->save($this->request->data)) {
				$this->Session->setFlash(__('The subarea has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The subarea could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Subarea.' . $this->Subarea->primaryKey => $id));
			$this->request->data = $this->Subarea->find('first', $options);
		}
		$areas = $this->Subarea->Area->find('list');
		$nucleos = $this->Subarea->Nucleo->find('list');
		$this->set(compact('areas', 'nucleos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Subarea->id = $id;
		if (!$this->Subarea->exists()) {
			throw new NotFoundException(__('Invalid subarea'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Subarea->delete()) {
			$this->Session->setFlash(__('The subarea has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The subarea could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
