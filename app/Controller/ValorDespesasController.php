<?php
App::uses('AppController', 'Controller');
/**
 * ValorDespesas Controller
 *
 * @property ValorDespesa $ValorDespesa
 * @property PaginatorComponent $Paginator
 */
class ValorDespesasController extends AppController {

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
		$this->ValorDespesa->recursive = 0;
		$this->set('valorDespesas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ValorDespesa->exists($id)) {
			throw new NotFoundException(__('Invalid valor despesa'));
		}
		$options = array('conditions' => array('ValorDespesa.' . $this->ValorDespesa->primaryKey => $id));
		$this->set('valorDespesa', $this->ValorDespesa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ValorDespesa->create();
			if ($this->ValorDespesa->save($this->request->data)) {
				$this->Session->setFlash(__('The valor despesa has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The valor despesa could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$financas = $this->ValorDespesa->Financa->find('list');
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
		if (!$this->ValorDespesa->exists($id)) {
			throw new NotFoundException(__('Invalid valor despesa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ValorDespesa->save($this->request->data)) {
				$this->Session->setFlash(__('The valor despesa has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The valor despesa could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('ValorDespesa.' . $this->ValorDespesa->primaryKey => $id));
			$this->request->data = $this->ValorDespesa->find('first', $options);
		}
		$financas = $this->ValorDespesa->Financa->find('list');
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
		$this->ValorDespesa->id = $id;
		if (!$this->ValorDespesa->exists()) {
			throw new NotFoundException(__('Invalid valor despesa'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ValorDespesa->delete()) {
			$this->Session->setFlash(__('The valor despesa has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The valor despesa could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
