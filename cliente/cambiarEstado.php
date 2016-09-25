<?php 

	include '../settingsDB/conDB.php';

	extract($_GET);

	if (@$activa==1) {
		$activar="UPDATE din_imagen SET estado=1 WHERE id_img=$id_img";

		$resultActiva = $conn->query($activar);
	}elseif (@$desactiva==1) {
		$desactivar="UPDATE din_imagen SET estado=0 WHERE id_img=$id_img";
		
		$resultActiva = $conn->query($desactivar);
	}

 ?>