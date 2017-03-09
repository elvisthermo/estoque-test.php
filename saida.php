<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/estilostable.css" />
	<title>entrada</title>
</head>
<body>
<?php 
	require 'config.php';
	require 'conect.php';
	require 'databa.php';

	$codigo = $_POST['cod'];
	$nome = $_POST['nome'];
	$newQuantidade = $_POST['quantidadeEntre'];
	$datacad = $_POST['datacad'];

	$cadastro = DBRead('cadastro',"WHERE id = '$codigo'  ", 'datacad,quantidadeEntre,valorTotal,valorUnidade');



foreach ($cadastro as $cl) {
		$cl['quantidadeEntre'];
		$cl['valorTotal'];
		$cl['valorUnidade'];
		$cl['datacad'];
	}	


	$valorUnidade = $cl['valorUnidade'];
	$valorTotal = $cl['valorTotal'];
	$quantidadeEntre = $cl['quantidadeEntre'];
	$datacad = $cl['datacad'];


	$newQuan = 	$quantidadeEntre - $newQuantidade;

	$newTotal = $newQuantidade * $valorUnidade;

	$totalFinal = $valorTotal - $newTotal;

 ?>

 <table border ="1">
	<th>data de saída</th>
 	<th>Quantidade de saída</th>
 	<th>Valor da unidade</th>
 	<th>Valor total de saída </th>
	<th>Quantidade em Estoque</th>
	<th>valor Unidade</th>
	<th>Valor Total em Estoque</th>
		<tr>
			<?php 
				
				echo '<td>'.$datacad.'</td>';
				echo '<td>'.$newQuantidade.'</td></td>';
				echo '<td>'.'R$'.number_format($valorUnidade,2,",",".").'</td>';
				echo '<td>'.'R$'.number_format($newTotal,2,",",".").'</td></td>';
				echo '<td>'.$newQuan.'</td></td>';
				echo '<td>'.'R$'.number_format($valorUnidade,2,",",".").'</td></td>';
				echo '<td>'.'R$'.number_format($totalFinal,2,",",".").'</td></td>';



	



			 ?>s
		</tr>
 </table>

<?php 


	$cadastro = array(
		'quantidadeEntre' => $newQuan,
		'valorUnidade' => $valorUnidade,
		'valorTotal' => $totalFinal, 
		'quantidadeSaida' => $newQuantidade,

	);


DBUpDate('cadastro',$cadastro,"id = '$codigo'" );


		$grava = DBUpDate('cadastro',$cadastro,"id = '$codigo'" );

		if($grava)








?>



<section>
<br>

 	<form action="saidaproduto.php">
 			<label >
			<input type="submit" value="Novo cadastro">
			</label>
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