<?php
App::uses('AppController', 'Controller');
/**
 * Associados Controller
 *
 * @property Associado $Associado
 * @property PaginatorComponent $Paginator
 */
class AssociadosController extends AppController {

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
		$this->Associado->recursive = 0;
		$this->set('associados', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Associado->exists($id)) {
			throw new NotFoundException(__('Invalid associado'));
		}
		$options = array('conditions' => array('Associado.' . $this->Associado->primaryKey => $id));
		$this->set('associado', $this->Associado->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Associado->create();
			if ($this->Associado->save($this->request->data)) {
				$this->Session->setFlash(__('The associado has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The associado could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$cooperativas = $this->Associado->Cooperativa->find('list');
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
		if (!$this->Associado->exists($id)) {
			throw new NotFoundException(__('Invalid associado'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Associado->save($this->request->data)) {
				$this->Session->setFlash(__('The associado has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The associado could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Associado.' . $this->Associado->primaryKey => $id));
			$this->request->data = $this->Associado->find('first', $options);
		}
		$cooperativas = $this->Associado->Cooperativa->find('list');
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
		$this->Associado->id = $id;
		if (!$this->Associado->exists()) {
			throw new NotFoundException(__('Invalid associado'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Associado->delete()) {
			$this->Session->setFlash(__('The associado has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The associado could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
