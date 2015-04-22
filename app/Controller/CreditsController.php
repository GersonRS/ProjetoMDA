<?php
App::uses('AppController', 'Controller');
/**
 * Credits Controller
 *
 * @property Credit $Credit
 * @property PaginatorComponent $Paginator
 */
class CreditsController extends AppController {

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
		$this->Credit->recursive = 0;
		$this->set('credits', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Credit->exists($id)) {
			throw new NotFoundException(__('Invalid credit'));
		}
		$options = array('conditions' => array('Credit.' . $this->Credit->primaryKey => $id));
		$this->set('credit', $this->Credit->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Credit->create();
			if ($this->Credit->save($this->request->data)) {
				$this->Session->setFlash(__('The credit has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The credit could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$cooperativas = $this->Credit->Cooperativa->find('list');
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
		if (!$this->Credit->exists($id)) {
			throw new NotFoundException(__('Invalid credit'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Credit->save($this->request->data)) {
				$this->Session->setFlash(__('The credit has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The credit could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Credit.' . $this->Credit->primaryKey => $id));
			$this->request->data = $this->Credit->find('first', $options);
		}
		$cooperativas = $this->Credit->Cooperativa->find('list');
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
		$this->Credit->id = $id;
		if (!$this->Credit->exists()) {
			throw new NotFoundException(__('Invalid credit'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Credit->delete()) {
			$this->Session->setFlash(__('The credit has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The credit could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
