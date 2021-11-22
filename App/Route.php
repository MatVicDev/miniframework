<?php

namespace App;

class Route
{
	public function initRoutes() // Quando uma determinada rota for acionada
	{
		$route['index'] = array(
			'route' => '/',						// Rota raíz
			'controller' => 'IndexController',	// Controlador que será solicitado
			'action' => 'index' 				// Ação que vai ocorrer quando a rota for acionada
		);
	}

	public function getUrl() // Retorna a URL requesitada
	{
		return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // Retorna apenas o path da URL
	}
}
?>