<?php
App::uses('AppController', 'Controller');
/**
 * Nucleos Controller
 *
 * @property Nucleo $Nucleo
 * @property PaginatorComponent $Paginator
 */
class NucleosController extends AppController {

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
		$this->Nucleo->recursive = 0;
		$this->set('nucleos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Nucleo->exists($id)) {
			throw new NotFoundException(__('Invalid nucleo'));
		}
		$options = array('conditions' => array('Nucleo.' . $this->Nucleo->primaryKey => $id));
		$this->set('nucleo', $this->Nucleo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Nucleo->create();
			if ($this->Nucleo->save($this->request->data)) {
				$this->Session->setFlash(__('The nucleo has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nucleo could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$ufs = $this->Nucleo->Uf->find('list');
		$this->set(compact('ufs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Nucleo->exists($id)) {
			throw new NotFoundException(__('Invalid nucleo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Nucleo->save($this->request->data)) {
				$this->Session->setFlash(__('The nucleo has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nucleo could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Nucleo.' . $this->Nucleo->primaryKey => $id));
			$this->request->data = $this->Nucleo->find('first', $options);
		}
		$ufs = $this->Nucleo->Uf->find('list');
		$this->set(compact('ufs'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Nucleo->id = $id;
		if (!$this->Nucleo->exists()) {
			throw new NotFoundException(__('Invalid nucleo'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Nucleo->delete()) {
			$this->Session->setFlash(__('The nucleo has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The nucleo could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
