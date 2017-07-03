<?php 
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbnome = "estoque";

$com = mysqli_connect($servidor,$usuario,$senha,$dbnome);


if(!$conn){
	die("falha naconexao:".  mysql_connect_erro());
}else{
	// echo "conexao realizada com sucesso";

}



 ?>