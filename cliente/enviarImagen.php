<?php 
	
	include '../settingsDB/conDB.php';

	$resultado = $conn->query("Select * from din_imagen where id_img={$_REQUEST['id_img']}");

$obj = $resultado->fetch_object();

header("Content-type: {$obj->tipo_img}");

header('Content-Disposition: attachment; filename="'.$obj->nombre_img.'"');

print $obj->imagen;

 ?>