<?php
App::uses('AppController', 'Controller');
/**
 * ValorPatrimonios Controller
 *
 * @property ValorPatrimonio $ValorPatrimonio
 * @property PaginatorComponent $Paginator
 */
class ValorPatrimoniosController extends AppController {

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
		$this->ValorPatrimonio->recursive = 0;
		$this->set('valorPatrimonios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ValorPatrimonio->exists($id)) {
			throw new NotFoundException(__('Invalid valor patrimonio'));
		}
		$options = array('conditions' => array('ValorPatrimonio.' . $this->ValorPatrimonio->primaryKey => $id));
		$this->set('valorPatrimonio', $this->ValorPatrimonio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ValorPatrimonio->create();
			if ($this->ValorPatrimonio->save($this->request->data)) {
				$this->Session->setFlash(__('The valor patrimonio has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The valor patrimonio could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$financas = $this->ValorPatrimonio->Financa->find('list');
		$this->set(compact('financas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ValorPatrimonio->exists($id)) {
			throw new NotFoundException(__('Invalid valor patrimonio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ValorPatrimonio->save($this->request->data)) {
				$this->Session->setFlash(__('The valor patrimonio has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The valor patrimonio could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('ValorPatrimonio.' . $this->ValorPatrimonio->primaryKey => $id));
			$this->request->data = $this->ValorPatrimonio->find('first', $options);
		}
		$financas = $this->ValorPatrimonio->Financa->find('list');
		$this->set(compact('financas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ValorPatrimonio->id = $id;
		if (!$this->ValorPatrimonio->exists()) {
			throw new NotFoundException(__('Invalid valor patrimonio'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ValorPatrimonio->delete()) {
			$this->Session->setFlash(__('The valor patrimonio has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The valor patrimonio could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
