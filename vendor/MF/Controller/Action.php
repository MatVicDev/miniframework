<?php

namespace MF\Controller;

abstract class Action
{
	protected $view;

	public function __construct()
	{
		$this->view = new \stdClass(); // Criando um objeto padrão
	}

	protected function render($view, $layout) // Método para retornar uma view
	{
		$this->view->page = $view;
		if(file_exists("../App/Views/".$layout.".phtml"))
			require_once "../App/Views/".$layout.".phtml";
		else
			$this->content();
	}

	protected function content()
	{
		$class = get_class($this); // Pega a classe atual
		$class = str_replace("App\\Controllers\\", "", $class); // Pega o nome da classe
		$class = strtolower(str_replace("Controller", "", $class)); // Pega apenas o primeiro nome

		require_once "../App/Views/".$class."/".$this->view->page.".phtml"; // Um require dinâmico
	}
}
?>