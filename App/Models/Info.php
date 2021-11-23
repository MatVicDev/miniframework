<?php

namespace App\Models;

use MF\Model\Model;

class Info extends Model
{
	public function getInfo()
	{
		$query = 'SELECT * FROM tb_info';
		return $this->db->query($query)->fetchAll();
	}
}
?>