<?php

namespace App\Controllers;

use MF\Controller\Action; // Importando a classe Action
use MF\Model\Container;

use App\Models\Produto;
use App\Models\Info;

class indexController extends Action // Extendendo de uma classe abstrata
{
	public function index()
	{
		$info = Container::getModel('Info');

		$informacao = $info->getinfo();

		$this->view->dados = $informacao;

		// $this->view->dados = ['Matheus', 'Ellen', 'Maria'];
		$this->render('index', 'layout1');
	}	
}
?>