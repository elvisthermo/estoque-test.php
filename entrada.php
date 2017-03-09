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
$valorUnidade = $_POST['valorUnidade'];
$datacad = $_POST['datacad'];



//função leitura

$cadastro = DBRead('cadastro',"WHERE id = '$codigo'",'datacad,quantidadeEntre,valorTotal,valorUnidade,quantidadeSaida');
//and nome = '$nome';



foreach ($cadastro as $cl) {
		//$cl['datacad'];
		$cl['quantidadeEntre'];
		$cl['valorTotal'];
		$cl['valorUnidade'];
		$cl['quantidadeSaida'];
	}	

	
//$datacad =$cl['datacad'];
//qunatidade reuceprasdo

$quantRec =$cl['quantidadeEntre'];

//valor total recuperados
$total = $cl['valorTotal'];

$quantidadeSaida = $cl['quantidadeSaida'];
//valor unidade rec

//$valorUnidade = $cl['valorUnidade'];


//nova quantidade
$newQuant =$quantRec + $newQuantidade;


//$totalN = ($newQuantidade * $valorUnidade)*0.97; // total parcial



//$totalFinal = $totalN *1.15;

//entrada

$totalEntrada = $newQuantidade * $valorUnidade;

$icmsEntrada = $totalEntrada * 0.05;

$tarifaLogistica = ($totalEntrada-$icmsEntrada)*1.15;

$toltaFinalEntrada = ($totalEntrada-$icmsEntrada)+$tarifaLogistica;

$UnidadeFinal = $toltaFinalEntrada/$newQuantidade;



//saldo

$totalSaldo = $total + $toltaFinalEntrada;
$newValorUnid = $totalSaldo / $newQuant;


?>
<table border=1>
	<th><h1>Dados inseridos com sucesso!</h1></th>

</table>

<br>
<br>



<table border ='1'>

	
	<th>Data de entrada</th>
	<th>Quantidade</th>
	<th>Valor Unid</th>
	<th>Valor Total</th>
	<!-- <th>Quantidade de Saída</th>-->

	
	<th>Quantidade total</th>
    <th>Novo Valor Unidade </th>
	<th>Valor Total Final</th>
	<tr>
	<?php
		echo '<tr><td>'.$datacad.'</td></td>';
		echo '<td>'.$newQuantidade.'</td></td>';
		echo '<td>'.'R$'.number_format($valorUnidade,2,",",".").'</td></td>';
		echo '<td>'.'R$'.number_format($toltaFinalEntrada,2,",",".").'</td></td>';
		

		echo '<td>'.$newQuant.'</td></td>';
		echo '<td>'.'R$'.number_format($newValorUnid,2,",",".").'</td></td>';
		echo '<td>'.'R$'.number_format($totalSaldo,2,",",".").'</td></td>';
	
		





	 ?>
		

	



</table>


<?php 


//altera regsitros da quantidade no estoque
	$cadastro = array(
		'quantidadeEntre' => $newQuant,
		'valorUnidade' => $newValorUnid,
		'valorTotal' => $totalSaldo, 

	);


DBUpDate('cadastro',$cadastro,"id = '$codigo'" );







?>

<section  >

 	<form action="entradaProduto.php">
 			<label >
			<input type="submit" value="Novo cadastro">
			</label>
			</form>
			<form action="../menu.html">
			<label>
				<input type="submit" value="Voltar ao menu principal">
			</label>
			</form>


</section>




	
</body>
</html>