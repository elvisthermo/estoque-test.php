<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cadastro</title>
	<link rel="stylesheet" type="text/css" href="../css/estilostable.css" />
</head>
<body>
<section>


<?php

$id = $_POST['id'];
	$datacad = $_POST['datacad'];
	$comment = $_POST['comment'];
	$valorUnidade = $_POST['valorUnidade'];
	
	$quantidadeEntre =$_POST['quantidadeEntre'];
	$nome =$_POST['nome'];
	$datal =$_POST['datal'];
	$valorTotal = $valorUnidade * $quantidadeEntre;
	//icms 30%
	$valorImposto = $valorTotal * 0.05;
	//valor com 10%
	$valorTotal2= ($valorTotal - $valorImposto);
	//valor tota lde cadastro
	$valorTotalCad= ($valorTotal - $valorImposto)*1.15;
	$valorUnitarioCad= ($valorTotalCad / $quantidadeEntre);
	$logistica=$valorTotal2*0.15;


?>


<table border=1>
	<th><h1>Dados inseridos com sucesso!</h1></th>

</table>

<br>
<br>



<table border="1">

<th>Valor unitario</th>
<th>Quantidade de entrada</th>
<th>valor total</th>
<th>ICMS 5% retirado</th>
<th>15% de taxa de logistica</th>
<th>Valor Total de estoque final</th>
<th>Valor unitario final</th>
 
	



<?php

	require 'config.php';
	require 'conect.php';
	require 'databa.php';




	$id = $_POST['id'];
	$datacad = $_POST['datacad'];
	$comment = $_POST['comment'];
	$valorUnidade = $_POST['valorUnidade'];
	
	$quantidadeEntre =$_POST['quantidadeEntre'];
	$nome =$_POST['nome'];
	$datal =$_POST['datal'];
	$valorTotal = $valorUnidade * $quantidadeEntre;
	//icms 5%
	$valorImposto = $valorTotal * 0.05;
	//valor com 15%
	$valorTotal2= ($valorTotal - $valorImposto);
	//valor tota de cadastro
	$valorTotalCad= ($valorTotal - $valorImposto)*1.15;
	$valorUnitarioCad= ($valorTotalCad / $quantidadeEntre);
	$logistica=$valorTotal2*0.15;

	



	
		$cadastro =array(
			'id' => $id,
			'datacad' =>  $datacad,
			'comment' =>  $comment,
			'valorUnidade' => $valorUnitarioCad,
			'valorTotal' => $valorTotalCad,
			'quantidadeEntre' => $quantidadeEntre ,
			'nome' => $nome ,
			'datal' =>$datal,


			);

		echo '<tr><td>'.'R$'.number_format($valorUnidade,2,",",".").'</td></td>';
		echo '<td>'.$quantidadeEntre.'</td></td>';
		echo '<td>'.'R$'.number_format($valorTotal,2,",",".").'</td></td>';
		echo '<td>'.'R$'.number_format($valorImposto,2,",",".").'</td></td>';
		echo '<td>'.'R$'.number_format($logistica,2,",",".").'</td></td>';
		echo '<td>'.'R$'.number_format($valorTotalCad,2,",",".").'</td></td>';
		echo '<td>'.'R$'.number_format( $valorUnitarioCad,2,",",".").'</td></td>';

/*
		echo '<tr><td>'.$valorUnidade.'</td></td>';
		echo '<td>'.$quantidadeEntre.'</td></td>';
		echo '<td>'.$valorTotal.'</td></td>';
		echo '<td>'.$valorImposto.'</td></td>';
		echo '<td>'. $logistica.'</td></td>';
		echo '<td>'. $valorTotalCad.'</td></td>';
		echo '<td>'. $valorUnitarioCad.'</td></td>';
*/







		$grava = DBCreate('cadastro', $cadastro);

		if($grava)


			//echo "<h1>Dados inseridos com sucesso!</h1>";
			




		//echo '<table><tr><td>'.'Quantidade de entrada: '.$quantidadeEntre.'</td></table>';


	


	

		



 ?>

</table>




<br>
 <section>

 	<form action="cadastro.php">
			<input type="submit" value="Novo cadastro">
			</form>
	
</section>

		
		<br>
		<form action="../menu.html">
			<label>
				<input type="submit" value="Voltar ao menu principal">
			</label>
			</form>
	
</body>
</html>
