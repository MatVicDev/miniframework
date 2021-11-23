<?php

namespace App\Controllers;

use MF\Controller\Action; // Importando a classe Action

class indexController extends Action // Extendendo de uma classe abstrata
{
	public function index()
	{
		$this->view->dados = ['Matheus', 'Ellen', 'Maria'];
		$this->render('index');
	}	
}
?>