<?php
/**
 * AclUtility Component
 *
 * @author Luis Fred G S <luis.fred.gs@gmail.com>
 * @category Component
 * @package Plugin.Admin
 */
App::uses('Component', 'Controller');
App::uses('Controller', 'Controller');
App::uses('ComponentCollection', 'Controller');
App::uses('AclComponent', 'Controller/Component');


class AclUtilityComponent extends Component {

	/**
	 * @var string Root controller node in acos table
	 */
	public $rootNode = 'controllers';

	/**
	 * Clean Actions switch
	 *
	 * @var bool
	 **/
	protected $_clean = false;

	/**
	 * Components
	 *
	 * @var array
	 **/
	public $components = array('Acl');

	/**
	 * Controller methods by delegation
	 *
	 * @var string
	 **/
	protected $controller = null;

	/**
	 * initialize - Fired before the controller's beforeFilter method.
	 *
	 * @return void
	 **/
	public function initialize(Controller $controller) {
		$this->controller = $controller;
	}

	/**
	 * startup - Fired after the controller's beforeFilter method.
	 *
	 * @return void
	 **/
	public function startup(Controller $controller = null) {
		$this->controller = $controller;
	}


	/**
	 * aco_sync - Sync the ACO table
	 *
	 * @return void
	 **/
	public function aco_sync($params = array()) {
		$this->_clean = true;
		if ( $this->aco_update($params) ) {
			return true;
		}else{
			return false;
		}
	}

	/**
	 * aco_update - Updates the Aco Tree with new controller actions.
	 *
	 * @return void
	 **/
	public function aco_update($params = array()) {
		$root = $this->_checkNode($this->rootNode, $this->rootNode, null);

		if (empty($params['plugin'])) {
			$controllers = $this->getControllerList();
			$this->_updateControllers($root, $controllers);
			$plugins = CakePlugin::loaded();
		} else {
			$plugin = $params['plugin'];
			if (!in_array($plugin, App::objects('plugin')) || !CakePlugin::loaded($plugin)) {
				throw new Exception("Plugin {$plugin} não encontrado", 1);
				
				return false;
			}
			$plugins = array($params['plugin']);
		}

		foreach ($plugins as $plugin) {
			$controllers = $this->getControllerList($plugin);

			$path = $this->rootNode . '/' . $plugin;
			$pluginRoot = $this->_checkNode($path, $plugin, $root['Aco']['id']);
			$this->_updateControllers($pluginRoot, $controllers, $plugin);
		}
		return true;
	}

	/**
	 * _updateControllers - Contribute for Update controllers list in aco table
	 *
	 * @return void
	 **/
	protected function _updateControllers($root, $controllers, $plugin = null) {
		$dotPlugin = $pluginPath = $plugin;
		if ($plugin) {
			$dotPlugin .= '.';
			$pluginPath .= '/';
		}
		$appIndex = array_search($plugin . 'AppController', $controllers);
		if ($appIndex !== false) {
			App::uses($plugin . 'AppController', $dotPlugin . 'Controller');
			unset($controllers[$appIndex]);
		}

		foreach ($controllers as $controller) {
			App::uses($controller, $dotPlugin . 'Controller');
			$controllerName = preg_replace('/Controller$/', '', $controller);

			$path = $this->rootNode . '/' . $pluginPath . $controllerName;
			$controllerNode = $this->_checkNode($path, $controllerName, $root['Aco']['id']);
			$this->_checkMethods($controller, $controllerName, $controllerNode, $pluginPath);
		}
		if ($this->_clean) {
			if (!$plugin) {
				$controllers = array_merge($controllers, App::objects('plugin', null, false));
			}
			$controllerFlip = array_flip($controllers);

			$this->Acl->Aco->id = $root['Aco']['id'];
			$controllerNodes = $this->Acl->Aco->children(null, true);
			foreach ($controllerNodes as $ctrlNode) {
				$alias = $ctrlNode['Aco']['alias'];
				$name = $alias . 'Controller';
				if (!isset($controllerFlip[$name]) && !isset($controllerFlip[$alias])) {
					$this->Acl->Aco->delete($ctrlNode['Aco']['id']);
				}
			}
		}
	}

	/**
	 * getControllerList - Get a universal list of controllers
	 *
	 * @param $plugin If defined, allow get all controllers found in an plugin
	 * @return array
	 **/
	public function getControllerList($plugin = null) {
		if (!$plugin) {
			$controllers = App::objects('Controller', null, false);
		} else {
			$controllers = App::objects($plugin . '.Controller', null, false);
		}
		return $controllers;
	}

	/**
	 * _checkNode - Check a node for existance
	 *
	 * @param string $path
	 * @param string $alias
	 * @param int $parentId
	 * @return array Aco Node array
	 */
	protected function _checkNode($path, $alias, $parentId = null) {
		$node = $this->Acl->Aco->node($path);
		if (!$node) {
			$this->Acl->Aco->create(array('parent_id' => $parentId, 'model' => null, 'alias' => $alias));
			$node = $this->Acl->Aco->save();
			$node['Aco']['id'] = $this->Acl->Aco->id;
		} else {
			$node = $node[0];
		}
		return $node;
	}

	/**
	 * _getCallbacks - Get a list of callback methods
	 *
	 * @return array
	 **/
	protected function _getCallbacks($className) {
		$callbacks = array();
		$reflection = new ReflectionClass($className);
		if ($reflection->isAbstract()) {
			return $callbacks;
		}
		try {
			$method = $reflection->getMethod('implementedEvents');
		} catch (ReflectionException $e) {
			return $callbacks;
		}
		$object = unserialize(
			sprintf('O:%d:"%s":0:{}', strlen($className), $className)
		);
		$implementedEvents = $method->invoke($object);
		foreach ($implementedEvents as $event => $callable) {
			if (is_string($callable)) {
				$callbacks[] = $callable;
			}
			if (is_array($callable) && isset($callable['callable'])) {
				$callbacks[] = $callable['callable'];
			}
		}
		return $callbacks;
	}

	/**
	 * Contribute for updating Aco table checking controller Methods
	 *
	 * @param string $controller
	 * @param array $node
	 * @param string $plugin Allow check controllers methods found in an plugin
	 * @return void
	 */
	protected function _checkMethods($className, $controllerName, $node, $pluginPath = false) {
		$excludes = $this->_getCallbacks($className);
		$baseMethods = get_class_methods('Controller');
		$actions = get_class_methods($className);
		if ($actions == null) {
			throw new Exception("Unable to get methods for {$className}", 1);
			
			return false;
		}
		$methods = array_diff($actions, $baseMethods);
		$methods = array_diff($methods, $excludes);
		foreach ($methods as $action) {
			if (strpos($action, '_', 0) === 0) {
				continue;
			}
			$path = $this->rootNode . '/' . $pluginPath . $controllerName . '/' . $action;
			$this->_checkNode($path, $action, $node['Aco']['id']);
		}

		if ($this->_clean) {
			$actionNodes = $this->Acl->Aco->children($node['Aco']['id']);
			$methodFlip = array_flip($methods);
			foreach ($actionNodes as $action) {
				if (!isset($methodFlip[$action['Aco']['alias']])) {
					$this->Acl->Aco->id = $action['Aco']['id'];
					$this->Acl->Aco->delete();
				}
			}
		}
		return true;
	}

}
