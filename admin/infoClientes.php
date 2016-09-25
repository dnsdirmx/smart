<?php 
	/*Incluimos la conexion a la base de datos*/
	include '../settingsDB/conDB.php';

	$resultado = $conn->query("SELECT nom_cl, ap_cl, emp_cl, edo_cl, cd_cl, tel_cl, giro_cl, email_cl, id_cl FROM info_cl");

	/*Aquí es donde desplegamos la lista de clientes que quieren registrarse o pedir informacion*/
	echo '<div class="table-responsive">';/*Hace responsivo la tabla, clase de bootstrap*/
	echo '<table  class="table table-hover">';
	echo "<tr><th>Nombre</th><th>Apellidos</th><th>N. Empresa</th><th>Estado</th><th>Ciudad</th><th>Teléfono</th><th>Giro</th><th>Correo</th><th>Ingresar</th><th>Borrar</th></tr>";
	while($fila = $resultado->fetch_assoc()){
		echo '<tr><td>'.$fila["nom_cl"].'</td>';
		echo '<td>'.$fila["ap_cl"].'</td>';
		echo '<td>'.$fila["emp_cl"].'</td>';
		echo '<td>'.$fila["edo_cl"].'</td>';
		echo '<td>'.$fila["cd_cl"].'</td>';
		echo '<td>'.$fila["tel_cl"].'</td>';
		echo '<td>'.$fila["giro_cl"].'</td>';
		echo '<td>'.$fila["email_cl"].'</td>';
		/*Aquí pondremos los botones para agregarlo a la otra tabla*/
		echo '<td><a class="btn btn-default" href="insertarDatos.php?id='.$fila["id_cl"].'&idinsertar=1">Aceptar</a></td>';
		echo '<td><a class="btn btn-danger" href="eliminarDatos.php?id='.$fila["id_cl"].'&idborrar=1">Borrar</a></td></tr>';
	}

	echo "</table>";
	echo "</div>";/*Aquí cierra el .table-responsive*/
	
 ?>



