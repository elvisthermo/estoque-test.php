<?php 
//funcoes usadas

// altera registros
function DBUpDate($table,array $data,$where=null){
	foreach($data as $key => $value){
		$fields[] ="{$key} ='{$value}'";


	}
	$fields = implode(', ',$fields); 


	$table = DB_PREFIX.'_'.$table;
	$where =($where)?" WHERE {$where}":null;


	$query = "UPDATE {$table} SET {$fields} {$where}";
	

	return DBExecute($query);

}

//deleta registros

function DBDelete($table,$where = null){
	$table = DB_PREFIX.'_'.$table;
	$where =($where)?" WHERE {$where}":null;

	$query = "DELETE FROM {$table}{$where}";
	

	return DBExecute($query);


}






//ler registros


function DBRead($table,$params = null, $fields = '*'){
	$table = DB_PREFIX.'_'.$table;
	$params = ($params)? " {$params}":null;
	
	$query = "SELECT {$fields} FROM  {$table}{$params}";

	//echo $query;
	
	$result = "SELECT{$fields} FROM{$table}{$params}";

	$result = DBExecute($query);

	if(!mysqli_num_rows($result))
		return false;
	else{
		while($res = mysqli_fetch_assoc($result)){
			$data[] = $res;

		}
		return $data;
	}
}


//gravar
function DBCreate($table, array $data){
	$table = DB_PREFIX.'_'.$table;
	$data = DBEscape($data);

	$fields = implode(' , ', array_keys($data));
	$values = "'".implode("', '", $data)."'";

	$query = "INSERT INTO {$table} ({$fields}) VALUES ({$values})";
	
	
	
	return DBExecute($query);
}



//busca
function DBExecute($query){
	$link = DBConnect();

	$result = @mysqli_query($link,$query) or die(mysqli_error($link));

	DBClose($link);
	return $result; 

}


 ?>