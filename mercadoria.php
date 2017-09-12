<?php include('include/header.php'); ?>
<?php include('conexao.php'); ?>
<?php 
function listaMercadorias($conexao) {
	$mercadorias = array();
	$resultado = mysqli_query($conexao, "select * from mercadorias");

	while($mercadoria = mysqli_fetch_assoc($resultado)) {
		array_push($mercadorias, $mercadoria);
	}

	return $mercadorias;

}

$mercadorias = listaMercadorias($conexao);
foreach ($mercadorias as $mercadoria) {
	echo $mercadoria['nome_merc'] . "</br>";
}

?>

<?php include('include/footer.php'); ?>