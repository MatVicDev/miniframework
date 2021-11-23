<?php

namespace App\Models;

use MF\Model\Model;

class Produto extends Model
{
	public function getProdutos() // Retorna todos os registros do bancp de dados
	{
		$query = 'SELECT * FROM tb_produtos';
		return $this->db->query($query)->fetchAll();
	}
}
?>