<?php include("include/header.php"); ?>

<h1>Formulário de cadastro</h1>
<form action="adiciona-mercadoria.php">
	<table class="table">
		<tr class="1">
			<td>Código</td>
			<td><input class="form-control" type="text" name="cod_merc"></td>
		</tr>
		<tr class="1">
			<td>Tipo</td>
			<td ><input class="form-control" type="text" name="tipo_merc"></td>
		</tr>
		<tr class="1">
			<td>Nome</td>
			<td ><input class="form-control" type="text" name="nome_merc"></td>
		</tr>
		<tr class="1">
			<td>Quantidade</td>
			<td ><input class="form-control" type="number" name="qtd_merc"></td>
		</tr>
		<tr class="1">
			<td>Preço</td>
			<td ><input class="form-control" type="money" name="preco_merc"></td>
		</tr>
		<tr class="1">
			<td>Négocio</td>
			<td ><select name="tipo_neg">
				<option value="C">Compra</option>
				<option value="V">Venda</option>
			</select></td>
		</tr>
		<tr class="1">
			<td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
		</tr>
	</table>
</form>		

<?php include("include/footer.php") ?>
