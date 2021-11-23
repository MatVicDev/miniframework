<?php

namespace App\Models;

class Info
{
	private $db;

	public function __construct(\PDO $db)
	{
		$this->db = $db;
	}

	public function getInfo()
	{
		$query = 'SELECT * FROM tb_info';
		return $this->db->query($query)->fetchAll();
	}
}
?>