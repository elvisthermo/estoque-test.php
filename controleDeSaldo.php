<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/estilos.css" />
	<title>Saída de produtos </title>
	

<?php 
	require 'config.php';
	require 'conect.php';
	require 'databa.php';


	$cadastro = DBRead('cadastro',"SUN",'valorTotal,quantidadeSaida,quantidadeEntre');

	
	$Total = 0 ;
	$saida = 0;
	$quantTotal = 0; 
	$cont =0;


	foreach ($cadastro as $cr) {

		$cont++;
		$Total = $Total + $cr['valorTotal'];
		$saida = $saida + $cr['quantidadeSaida'];
		$quantTotal = $quantTotal + $cr['quantidadeEntre'];
			
		
		}


		

		//bl
		$pl = ($Total*0.85)*1.05;

		$icms_rec = $pl*0.05;


		$tarifa_rec = $pl * 0.15  ;



		echo '<h3>Valor total: R$'.number_format($Total,2,",",".").'</h3><hr>';

		echo "<h3><br>quantidade de saida: ".$saida.'</h3><hr>';

		echo "<h3><br>número de produtos diferentes: ".$cont.'</h3><hr>';


		echo "<h3><br> quantidade total: ".$quantTotal.'</h3><hr>';

		//echo "<h3><br>icms a recolher: R$ ".number_format($icms_rec,2,",",".").'</h3><hr>';

		echo "<h3><br>Valor da Tarifa: R$ ".number_format($tarifa_rec,2,",",".").'</h3><hr>';



		echo "<h3><br> valor bruto R$: ".number_format($pl,2,',','.').'</h3><hr>';

 ?>

	
</body>
</html>