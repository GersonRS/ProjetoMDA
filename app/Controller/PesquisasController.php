<?php
App::uses('AppController', 'Controller');
/**
 * Pesquisas Controller
 *
 */
class PesquisasController extends AppController {

	public $uses = 'Cooperativa';

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

		 // Adiciona filtro
    	$this->Filter->addFilters('filter1');
	    
	    // Define conditions
	    $this->paginate = array('limit' => 5);
	    $this->Filter->setPaginate('conditions', $this->Filter->getConditions());
		$this->set('pesquisas', $this->Paginator->paginate());
	}

	public function view($id = null) {
		if (!$this->Cooperativa->exists($id)) {
			throw new NotFoundException(__('Invalid cooperativa'));
		}
		$options = array('conditions' => array('Cooperativa.' . $this->Cooperativa->primaryKey => $id));
		$this->Cooperativa->recursive = 2;
		$this->set('cooperativa', $this->Cooperativa->find('first', $options));
	}

}
