<?php include("include/header.php") ?>
<?php include('conexao.php'); ?>	
	<?php
		function insereProduto($conexao, $cod_merc, $tipo_merc, $nome_merc, $qtd_merc, $preco_merc, $tipo_neg){
			$query = "insert into mercadorias (cod_merc, tipo_merc, nome_merc, qtd_merc, preco_merc, tipo_neg) values ({$cod_merc}, '{$tipo_merc}', '{$nome_merc}', {$qtd_merc}, {$preco_merc}, '{$tipo_neg}')";
			return mysqli_query($conexao, $query);			
		};
		$cod_merc = $_GET["cod_merc"];
		$tipo_merc = $_GET["tipo_merc"];
		$nome_merc = $_GET["nome_merc"];
		$qtd_merc = $_GET["qtd_merc"];
		$preco_merc = $_GET["preco_merc"];
		$tipo_neg = $_GET["tipo_neg"];

		

		if(insereProduto($conexao, $cod_merc, $tipo_merc, $nome_merc, $qtd_merc, $preco_merc, $tipo_neg)){ ?>
			<p class="text-success">Produto <?= $nome_merc; ?>, código <?= $cod_merc ?> adicionado com sucesso!</p>
		<?php } else {
			$msg = mysqli_error($conexao);?>
		<p class="text-danger">Produto <?= $nome_merc; ?> não foi adicionado: <?= $msg ?></p>
		<?php }
		
	?>
	
	
<?php include("include/footer.php") ?>