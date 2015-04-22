<?php
App::uses('AppController', 'Controller');
/**
 * VendaMarketings Controller
 *
 * @property VendaMarketing $VendaMarketing
 * @property PaginatorComponent $Paginator
 */
class VendaMarketingsController extends AppController {

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
		$this->VendaMarketing->recursive = 0;
		$this->set('vendaMarketings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->VendaMarketing->exists($id)) {
			throw new NotFoundException(__('Invalid venda marketing'));
		}
		$options = array('conditions' => array('VendaMarketing.' . $this->VendaMarketing->primaryKey => $id));
		$this->set('vendaMarketing', $this->VendaMarketing->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->VendaMarketing->create();
			if ($this->VendaMarketing->save($this->request->data)) {
				$this->Session->setFlash(__('The venda marketing has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The venda marketing could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$cooperativas = $this->VendaMarketing->Cooperativa->find('list');
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
		if (!$this->VendaMarketing->exists($id)) {
			throw new NotFoundException(__('Invalid venda marketing'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->VendaMarketing->save($this->request->data)) {
				$this->Session->setFlash(__('The venda marketing has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The venda marketing could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('VendaMarketing.' . $this->VendaMarketing->primaryKey => $id));
			$this->request->data = $this->VendaMarketing->find('first', $options);
		}
		$cooperativas = $this->VendaMarketing->Cooperativa->find('list');
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
		$this->VendaMarketing->id = $id;
		if (!$this->VendaMarketing->exists()) {
			throw new NotFoundException(__('Invalid venda marketing'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->VendaMarketing->delete()) {
			$this->Session->setFlash(__('The venda marketing has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The venda marketing could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
