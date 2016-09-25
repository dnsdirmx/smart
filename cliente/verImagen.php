<?php 
	include '../settingsDB/conDB.php';

	extract($_GET);

	echo "<img src='enviarImagen.php?id_img=$id_img' alt='$img_nombr' width=300 heigth=300/>";

 ?>