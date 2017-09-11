<?php
//essa classe segue o padrão singleton para conexão com o banco de dados de maneira a abrir apenas uma conexão com o banco em uma dada requisição
class Conexao
{
	static $pdo = null;

	public static function getConexao()
	{
		if (!is_null(self::$pdo)) {
			return self::$pdo;
		} 
		self::$pdo = new PDO('mysql:host=mysql552.umbler.com:41890;dbname=julianadb', 'junegreiros', 'Qualquersenha123+');
		return self::$pdo;
	}
}