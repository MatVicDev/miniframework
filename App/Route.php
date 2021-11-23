<?php

namespace App;

class Route
{
	private $routes;

	public function __construct() // Método contrutor
	{
		$this->initRoutes();			// Executa o método initRoute() na instância do objeto
		$this->run($this->getUrl());	// Executa o método run() passando as rotas como parâmetro
	}

	// Métodos Get e Set (encapsulamento);
	public function getRoutes()
	{
		return $this->routes;
	}

	public function setRoutes(array $routes)
	{
		$this->routes = $routes;
	}

	public function initRoutes() // Quando uma determinada rota for acionada
	{
		$route['index'] = array(
			'route' => '/',						// Rota raíz
			'controller' => 'IndexController',	// Controlador que será solicitado
			'action' => 'index' 				// Ação que vai ocorrer quando a rota for acionada
		);

		$this->setRoutes($route);
	}

	public function run($url) // Método para executar a função da action
	{
		foreach($this->getRoutes() as $key => $route) { // Percorre por todas as rotas recebidas

			if($url == $route['route']) {
				$class = 'App\\Controllers\\'.ucfirst($route['controller']);
				$action = $route['action'];

				$controller = new $class;
				$controller->$action();
			}
		}
	}

	public function getUrl() // Retorna a URL requesitada
	{
		return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // Retorna apenas o path da URL
	}
}
?>