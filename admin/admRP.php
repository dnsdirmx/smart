<?php 
	/*Incluimos la conexion a la base de datos*/
	include '../settingsDB/conDB.php';

	$resultado = $conn->query("SELECT id_rp, nom_rp, ap_rp, dir_rp, cd_rp, edo_rp, correo_rp, tel_rp, pago_rp, correo_rp, fecha_ini_rp, contra_rp FROM tb_rp");

	echo '<div class="table-responsive">';/*Hace responsivo la tabla, clase de bootstrap*/
	echo '<table  class="table table-hover">';
	echo '<tr>';
	echo "<th>Nombre</th><th>Apellidos</th><th>Dirección</th><th>Ciudad</th><th>Estado</th><th>Teléfono</th><th>Correo</th><th>Fehca Inicio</th><th>Contraseña</th><th>Contraseña</th>";
	echo '</tr>';
	while($fila = $resultado->fetch_assoc()){
		echo '<tr>';
		echo '<tr><td>'.$fila["nom_rp"].'</td>';
		echo '<td>'.$fila["ap_rp"].'</td>';
		echo '<td>'.$fila["dir_rp"].'</td>';
		echo '<td>'.$fila["cd_rp"].'</td>';
		echo '<td>'.$fila["edo_rp"].'</td>';
		echo '<td>'.$fila["tel_rp"].'</td>';
		echo '<td>'.$fila["pago_rp"].'</td>';
		echo '<td>'.$fila["correo_rp"].'</td>';
		echo '<td>'.$fila["fecha_ini_rp"].'</td>';
		echo '<td>'.$fila["contra_rp"].'</td>';
		echo '<td><a class="btn btn-danger" href="eliminarDatos.php?id='.$fila["id_rp"].'&idborrar=4">Borrar</a></td></tr>';
		echo '</tr>';

	}

	echo "</table>";
	echo '</div>';/*La clase .table_responsive*/

 ?>


 