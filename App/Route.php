<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap
{
	protected function initRoutes()
	{
		$route['index'] = array(
			'route' => '/',						// Rota raíz
			'controller' => 'IndexController',	// Controlador que será solicitado
			'action' => 'index' 				// Ação que vai ocorrer quando a rota for acionada
		);

		$this->setRoutes($route);
	}
}
?>