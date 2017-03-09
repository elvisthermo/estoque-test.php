<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/estilos.css" />
	<title>Saída de produtos </title>
	
</head>
<body>
	
	<section id="center">
	
	<h1>Saida De Produtos</h1>

</style>

	<form method="POST" width="50" action="saida.php"
	>
	<label>
		<span>codigo id:<br><input type="text" name='cod'></span><br>
	</label>

	<label>
			<span>Data de Saída:</span>
			<input type="date" name="datacad">
	</label>

	<label >
		<span>nome:<br><input type="text" name='nome'></span><br>
	</label>

	<label>
		<span>quantidade:<br><input type="number" min="1" max="100000" name='quantidadeEntre'></span><br>
	</label>		



		<input type="submit" value="cadastrar Saída">

	

		



	</form>


		<br>
		<form action="../menu.html">
			<label>
				<input type="submit" value="Voltar ao menu principal">
			</label>
			</form>






</section>


	
</body>
</html>