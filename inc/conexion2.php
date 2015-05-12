<?php

$sql = "SELECT id_marca, nombre_marca FROM marca;";

function getArraySQL($sql){
	
	$conexion = mysqli_connect("localhost", "root", "", "vr2");
	
	mysqli_set_charset($conexion, "utf8");
	
	if(!$result = mysqli_query($conexion, $sql)) die();
	$data = array();
	$i = 0;
	
	while($row = mysqli_fetch_array($result)){
		$data[$i]=$row;
		$i++;
	}
	
	mysqli_close($conexion);
	
	return $data;
	
}

$myarray = getArraySQL($sql);
$json = json_encode($myarray);//Codifica en un json
$array = json_decode($json);//Descodifica un json a un array
//print_r($array); //imprime todo el array
echo $array[0]->nombre_marca; //imprime solo el array 0 el nombre_marca

?>