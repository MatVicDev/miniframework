<?php

namespace App\Models;

class Produto
{
	private $db;

	public function __construct(\PDO $db)
	{
		$this->db = $db;
	}

	public function getProdutos() // Retorna todos os registros do bancp de dados
	{
		$query = 'SELECT * FROM tb_produtos';
		return $this->db->query($query)->fetchAll();
	}
}
?>