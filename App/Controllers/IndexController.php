<?php

namespace App\Controllers;

use App\Connection;
use App\Models\Produto;

use MF\Controller\Action; // Importando a classe Action

class indexController extends Action // Extendendo de uma classe abstrata
{
	public function index()
	{
		$conn = Connection::getDb();

		$produto = new Produto($conn);

		$produtos = $produto->getProdutos();

		$this->view->dados = $produtos;

		// $this->view->dados = ['Matheus', 'Ellen', 'Maria'];
		$this->render('index', 'layout1');
	}	
}
?>