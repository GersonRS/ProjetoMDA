<?php
App::uses('AppController', 'Controller');
/**
 * ValorReceitas Controller
 *
 * @property ValorReceita $ValorReceita
 * @property PaginatorComponent $Paginator
 */
class ValorReceitasController extends AppController {

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
		$this->ValorReceita->recursive = 0;
		$this->set('valorReceitas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ValorReceita->exists($id)) {
			throw new NotFoundException(__('Invalid valor receita'));
		}
		$options = array('conditions' => array('ValorReceita.' . $this->ValorReceita->primaryKey => $id));
		$this->set('valorReceita', $this->ValorReceita->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ValorReceita->create();
			if ($this->ValorReceita->save($this->request->data)) {
				$this->Session->setFlash(__('The valor receita has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The valor receita could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$financas = $this->ValorReceita->Financa->find('list');
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
		if (!$this->ValorReceita->exists($id)) {
			throw new NotFoundException(__('Invalid valor receita'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ValorReceita->save($this->request->data)) {
				$this->Session->setFlash(__('The valor receita has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The valor receita could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('ValorReceita.' . $this->ValorReceita->primaryKey => $id));
			$this->request->data = $this->ValorReceita->find('first', $options);
		}
		$financas = $this->ValorReceita->Financa->find('list');
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
		$this->ValorReceita->id = $id;
		if (!$this->ValorReceita->exists()) {
			throw new NotFoundException(__('Invalid valor receita'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ValorReceita->delete()) {
			$this->Session->setFlash(__('The valor receita has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The valor receita could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
