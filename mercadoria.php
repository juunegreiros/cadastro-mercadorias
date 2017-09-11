<?php include('include/header.php'); ?>

<table>
	<thead>
		<tr>
			<th>Código</th>
			<th>Tipo</th>
			<th>Nome</th>
			<th>Quantidade</th>
			<th>Preço</th>
			<th>Negócios</th>
		</tr>
	</thead>
	<tbody class="table-body">
	</tbody>
</table>

<script>
	$.ajax({
		method: "GET",
		url: "/api/mercadoria",
		dataType: "json"
	}).done(function(res){
		$(".table-body").html("");
		res.forEach(function(item){
			 $(".table-body").append(
			 	$("<tr>").append(
			 		$("<td>").html(item.cod_merc), 
			 		$("<td>").html(item.tipo_merc), 
			 		$("<td>").html(item.nome_merc), 
			 		$("<td>").html(item.qtd_merc), 
			 		$("<td>").html(item.preco_merc), 
			 		$("<td>").html(item.tipo_neg)
			 	)
			 )
		});
	});

</script>



<?php include('include/footer.php'); ?>