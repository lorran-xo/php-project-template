<?php 

$host = 
$usuario = 
$senha = 
$bd = 

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if($mysqli->connect_errno){ //Se der erro ao conectar retorna erro
	echo "servidor: offline, (".$mysqli->connect_errno.") ".$mysqli->connect_error;
}
?>