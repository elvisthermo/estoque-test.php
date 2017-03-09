<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css" />
	<title>cadastro dos produtos </title>
</head>
<body>

	
	<section id="center">
		<form method="POST" width="50" action="processa_cad_usuario.php">
			<br>
			<br>
			<label>
				<span>Código id: <input type="text" name="id"></span>
			</label>
			
			<label>
				<span>Data de entrada:</span>
				<input type="date" name="datacad">
			</label>

			<label>
				<span>Descrição do produto:</span>
				<textarea name="comment"></textarea>
			</label>

			<label>
				<span>Valor unidade:<input type="number" min="1" max="10000000" step=0.01 name="valorUnidade"></span>
			</label>


			
			<label>
				<span>Quantidade de entrada:</span>
				<input type="number" min="1" max="100000" step=0.01 name="quantidadeEntre">

			<label>

				<span>Livro:</span>
				<input type="text" name="nome">
			</label>

			<label>
				<span>Data de lancamento:</span>
				<input type="date" name="datal">
			</label>
	
			
			<input type="submit" value="Cadastrar">
		
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