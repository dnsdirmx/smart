<?php 
	/*Incluimos la conexion a la base de datos*/
	include '../settingsDB/conDB.php';

	$resultado = $conn->query("SELECT id_rp, nom_rp, ap_rp, tel_rp, edo_rp, cd_rp, dir_rp, email_rp, ocup_rp, motivo_rp FROM info_rp");

	/*Aquí se pondrán la lista de los RP que quieren infromacion o ingresar*/
	echo '<div class="table-responsive">';/*Hace responsivo la tabla, clase de bootstrap*/
	echo '<table  class="table table-hover">';
	echo "<tr><th>Nombre</th><th>Apellidos</th><th>Dirección</th><th>Ciudad</th><th>Estado</th><th>Teléfono</th><th>Ocupación</th><th>Motivo</th><th>Correo</th><th>Ingresar</th><th>Borrar</th></tr>";
	while($fila = $resultado->fetch_assoc()){
		echo '<tr>';
		echo '<td>'.$fila["nom_rp"].'</td>';
		echo '<td>'.$fila["ap_rp"].'</td>';
		echo '<td>'.$fila["dir_rp"].'</td>';
		echo '<td>'.$fila["cd_rp"].'</td>';
		echo '<td>'.$fila["edo_rp"].'</td>';
		echo '<td>'.$fila["tel_rp"].'</td>';
		echo '<td>'.$fila["ocup_rp"].'</td>';
		echo '<td>'.$fila["motivo_rp"].'</td>';
		echo '<td>'.$fila["email_rp"].'</td>';
		/*Aquí pondremos los botones para agregarlo a la otra tabla o borrarlos*/
		echo '<td><a class="btn btn-default" href="insertarDatos.php?id='.$fila["id_rp"].'&idinsertar=2">Aceptar</a></td>';
		echo '<td><a class="btn btn-danger" href="eliminarDatos.php?id='.$fila["id_rp"].'&idborrar=2">Borrar</a></td></tr>';
		echo '</tr>';
	}

	echo "</table>";
	echo "</div>";
 ?>


 