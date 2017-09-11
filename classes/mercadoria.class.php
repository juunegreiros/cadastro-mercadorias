<?php

class Mercadoria
{
	function __construct()
	{
		$this->conexao = conexao::getConexao();
	}

	public function index()
	{
		$consulta = $this->conexao->query('select * from mercadorias')->fetchAll(PDO::FETCH_ASSOC);
		return json_encode($consulta);
	}

	public function novo()
	{
		$stmt = $this->conexao->prepare('insert into mercadorias values (:cod_merc, :tipo_merc, :nome_merc, :qtd_merc, :preco_merc, :tipo_neg)');
		$stmt->bindParam(':cod_merc', $_POST["cod_merc"]);
		$stmt->bindParam(':tipo_merc', $_POST["tipo_merc"]);
		$stmt->bindParam(':nome_merc', $_POST["nome_merc"]);
		$stmt->bindParam(':qtd_merc', $_POST["qtd_merc"]);
		$stmt->bindParam(':preco_merc', $_POST["preco_merc"]);
		$stmt->bindParam(':tipo_neg', $_POST["tipo_neg"]);

		$stmt->execute();


		if ($stmt->rowCount() > 0) {
			$res = ['success'=>true];	
		} else{
			$res = ['success'=>false];
		}

		return json_encode($res);
	}

}