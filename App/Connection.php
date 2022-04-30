<?php

namespace App;

class Connection
{
	private $user = "root";
	private $password = "root";

	public static function getDb()
	{
		try {
			$conn = new \PDO(
				'mysql:host=localhost;dbname=mvc',
				$user,
				$password
			);

			return $conn;

		} catch(\PDOException $e) {
			echo "Erro ao conectar com o banco de dados: " . $e->getMessage();
		}
	}
}
?>