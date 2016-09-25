<?php 
	/*Incluimos la conexion a la base de datos*/
	include '../settingsDB/conDB.php';

	?>
	<style>
		input[type=text] {
	    width: 130px;
	    box-sizing: border-box;
	    border: 2px solid #ccc;
	    border-radius: 4px;
	    font-size: 16px;
	    background-color: white;
	    background-image: url('../img/searchi.png');
	    background-position: 5px 10px;
	    background-repeat: no-repeat;
	    padding: 12px 20px 12px 40px;
	    -webkit-transition: width 0.4s ease-in-out;
	    transition: width 0.4s ease-in-out;
	    margin-bottom: 10px;
	}

	input[type=text]:focus {
	    width: 80%;
	}
	</style>
<!--
<div class="row">
<div class=" col-md-4">
<form method="post" action="">
  <input type="text" name="search" placeholder="Buscar.." name="buscar">
  <input type="submit" value="Buscar" class="btn btn-default">
</form>
</div>
</div>

-->
	<?php

	$resultado = $conn->query("SELECT id_cl, nom_cl,ap_cl, nom_emp_cl, edo_cl, cd_cl, dir_cl, tel_cl, giro_cl, correo_cl, fecha_ini_cl,contra_cl FROM tb_cliente");

	echo '<div class="table-responsive">';
	echo '<table  class="table table-responsive">';
	echo "<tr><th>Nombre</th><th>Apellidos</th><th>N. Empresa</th><th>Estado</th><th>Ciudad</th><th>Dirección</th><th>Teléfono</th><th>Giro</th><th>Correo</th><th>Fecha Inicio</th><th>Contraseña</th></tr>";
	while($fila = $resultado->fetch_assoc()){
		echo '<tr>';
		echo '<td>'.$fila["nom_cl"].'</td>';
		echo '<td>'.$fila["ap_cl"].'</td>';
		echo '<td>'.$fila["nom_emp_cl"].'</td>';
		echo '<td>'.$fila["edo_cl"].'</td>';
		echo '<td>'.$fila["cd_cl"].'</td>';
		echo '<td>'.$fila["dir_cl"].'</td>';
		echo '<td>'.$fila["tel_cl"].'</td>';
		echo '<td>'.$fila["giro_cl"].'</td>';
		echo '<td>'.$fila["correo_cl"].'</td>';
		echo '<td>'.$fila["fecha_ini_cl"].'</td>';
		echo '<td>'.$fila["contra_cl"].'</td>';
		//echo '<td>'.$fila[""].'</td>';
		echo '<td><a class="btn btn-danger" href="eliminarDatos.php?id='.$fila["id_cl"].'&idborrar=3">Borrar</a></td></tr>';
		echo '</tr>';
	}

	echo "</table>";
	echo "</div>";/*Aquí cierra el .table-responsive*/

 ?>
