<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/estilos.css" />
	<title>Entrada de produtos </title>
	
</head>
<body>
	
	<section id="center">
	
	<h1>Entrada De Produtos</h1>

</style>

	<form method="POST" width="50" action="entrada.php">
	<label>
		<span>codigo id:<br><input type="text" name='cod'></span><br>
	</label>


	<label >
		<span>nome:<br><input type="text" name='nome'></span><br>
	</label>

	<label>
			<span>Data de Entrada:</span>
			<input type="date" name="datacad">
	</label>

	<label>
		<span>quantidade:<br><input type="number" min="1" max="100000" name='quantidadeEntre'></span><br>
	</label>

	<label >	
		<span>Valor unitário:<br><input type="number" min="1" max="100000" step=0.01 name='valorUnidade'></span><br>
	</label>


		



		<input type="submit" value="cadastrar entrada">

		


	

		



	</form>

	<br>
		<br>
		<form action="../menu.html">
			<label>
				<input type="submit" value="Voltar ao menu principal">
			</label>
			</form>






</section>


	
</body>
</html>