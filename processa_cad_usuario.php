<?php 
	include_once("conexao.php");
	

	$livro = $_POST["livro"];
	// = "$_POST[]



	$result_livro = "INSERT INTO estoque(livro) VALUES ('$livro_estoque')";

	resultado_estoque = mysql_query($conn,$result_estoque);


 ?>