<?php

namespace App;

class Connection // Classe para conexão com o banco de dados;
{
	public static function getDb() // Método para conectar no banco de dados
	{
		try {
			$conn = new \PDO(
				'mysql:host=localhost;dbname=mvc', // Banco de dados
				'root', // Usuário
				'root'  // Senha
			); // Conexão via PDO

			return $conn; // Retorna a conexão

		} catch(\PDOException $e) { // Caso haja um erro
			echo "Erro ao conectar com o banco de dados: " . $e->getMessage();
		}
	}
}
?>