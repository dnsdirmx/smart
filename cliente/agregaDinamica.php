s<?php 
	include '../settingsDB/conDB.php';

	extract($_REQUEST);

		$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

		$nombre_img = addslashes($_FILES['imagen']['name']);

		$tipo = $_FILES['imagen']['type'];

		$date = date('Y-m-d');

		$sql = "INSERT INTO din_imagen (nombre_img, tipo_img, imagen, fecha_crea, nom_img_org) VALUES ( '$nombre', '$tipo', '$imagen', '$date', '{$nombre_img}')";
		
			if ($conn->query($sql) === TRUE) {
		    
			header('Location:index.php');
			} 
			else{
		    	echo "Error: " . $sql . "<br>" . $conn->error;
			}

	$conn->close();

 ?>