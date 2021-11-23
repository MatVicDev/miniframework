<?php

namespace App\Controllers;

class indexController
{
	private $view;

	public function __construct()
	{
		$this->view = new \stdClass(); // Criando um objeto padrão
	}

	public function index()
	{
		$this->view->dados = ['Matheus', 'Ellen', 'Maria'];
		$this->render('index');
	}

	public function render($view) // Método para retornar uma view
	{
		$class = get_class($this); // Pega a classe atual
		$class = str_replace("App\\Controllers\\", "", $class); // Pega o nome da classe
		$class = strtolower(str_replace("Controller", "", $class)); // Pega apenas o primeiro nome

		require_once "../App/Views/".$class."/".$view.".phtml"; // Um require dinâmico
	}
}
?>