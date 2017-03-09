<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/estilostable.css" />
	<title>Document</title>
</head>

<body>





<table border="1">
<th name="tr">Nome</th>
<th>Id </th>
<th>Quantidade entre</th>
<th>Quantidade atual</th>
<th>Quantidade de Saída</th>>
<th>valor unitario</th>
<th>valor total </th>
<th>Data de entrada</th>

</tr>
	<?php  
	require 'config.php';
	require 'conect.php';
	require 'databa.php';



	$cadastro = DBRead('cadastro','ORDER BY id,valorUnidade,quantidadeEntre,nome,valorTotal,datacad');
//mostra dados



	foreach ($cadastro as $cr) {

		echo '<tr><td>'. $cr['nome'].'</td></td>';
		echo '<td>'. $cr['id'].'</td></td>';
		echo '<td>'.($cr['quantidadeEntre']+ $cr['quantidadeSaida']).'</td>';
		echo '<td>'. $cr['quantidadeEntre'].'</td></td>';
		echo '<td>'. $cr['quantidadeSaida'].'</td></td>';
		echo '<td>'.'R$'.number_format($cr['valorUnidade'],2,",",".").'</td></td>';
		echo '<td>'.'R$'.number_format($cr['valorTotal'],2,",",".").'</td></td>';
		echo '<td>'. $cr['datacad'].'</td></td>';


		
		}





	 ?>

</tr>


</table>













</body>
</html>