<?php
App::uses('AppController', 'Controller');
/**
 * ValorInvestimentos Controller
 *
 * @property ValorInvestimento $ValorInvestimento
 * @property PaginatorComponent $Paginator
 */
class ValorInvestimentosController extends AppController {

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
		$this->ValorInvestimento->recursive = 0;
		$this->set('valorInvestimentos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ValorInvestimento->exists($id)) {
			throw new NotFoundException(__('Invalid valor investimento'));
		}
		$options = array('conditions' => array('ValorInvestimento.' . $this->ValorInvestimento->primaryKey => $id));
		$this->set('valorInvestimento', $this->ValorInvestimento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ValorInvestimento->create();
			if ($this->ValorInvestimento->save($this->request->data)) {
				$this->Session->setFlash(__('The valor investimento has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The valor investimento could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$financas = $this->ValorInvestimento->Financa->find('list');
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
		if (!$this->ValorInvestimento->exists($id)) {
			throw new NotFoundException(__('Invalid valor investimento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ValorInvestimento->save($this->request->data)) {
				$this->Session->setFlash(__('The valor investimento has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The valor investimento could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('ValorInvestimento.' . $this->ValorInvestimento->primaryKey => $id));
			$this->request->data = $this->ValorInvestimento->find('first', $options);
		}
		$financas = $this->ValorInvestimento->Financa->find('list');
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
		$this->ValorInvestimento->id = $id;
		if (!$this->ValorInvestimento->exists()) {
			throw new NotFoundException(__('Invalid valor investimento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ValorInvestimento->delete()) {
			$this->Session->setFlash(__('The valor investimento has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The valor investimento could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
