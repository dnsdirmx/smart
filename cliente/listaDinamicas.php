<a href="#" class="btn btn-primary text-right" id="mostrarFormDin">Agregar Nueva Dinámica</a>

<?php 
	include '../settingsDB/conDB.php';

	$resultado = $conn->query("SELECT * FROM din_imagen ");

	echo '<div class="table-responsive espacio-arriba-chico">';/*Hace responsivo la tabla, clase de bootstrap*/
	echo '<table class="table table-hover">';
	echo '<tr>';
	echo '<th>Nombre Campaña</th>';
	echo '<th>Ver imagen</th>';
	echo '<th>Fecha de Creación</th>';
	echo '<th>Estado de la Dinámica</th>';
	echo '</tr>';
	while ($obj = $resultado->fetch_object()) {
		echo '<tr>';
		echo '<td>'.$obj->nombre_img.'</td>';
		//echo '<td><a class="btn btn-default" href="verImagen.php?id_img='.$obj->id_img.'&img_nombr='.$obj->nom_img_org.'">Ver Imagen</a></td>';
		echo '<td><button type="button" class="btn btn-default" id="btnModal" data-toggle="modal" data-target="#'.$obj->id_img.'">Ver Imagen</button>';
		echo '<div class="modal fade " id="'.$obj->id_img.'" role="dialog">';
    	echo "<div class='modal-dialog'>";
     
      	/* Contenido del Modal*/
      	echo '<button type="button" class="close" data-dismiss="modal">&times;</button>';
      	echo '<img src="enviarImagen.php?id_img='.$obj->id_img.'" alt='.$obj->nom_img_org.' width=300 heigth=300/></td>';
      	//echo '</div>';
      	echo '<td>'.$obj->fecha_crea.'</td>';
      	if ($obj->estado==1) {
      		/*echo '<td><a class="btn btn-success" href="cambiarEstado.php?id_img='.$obj->id_img.'&desactiva=1">Activa</a></td>';*/
      		echo '<td><a class="btn btn-success">Activa</a></td>';
      	}else{
      		echo '<td><a class="btn btn-default" href="cambiarEstado.php?id_img='.$obj->id_img.'&activa=1">Desactivada</a></td>';
      	}
		echo '</tr>';

	}

	echo "</table>";
	echo "</div>";


	extract($_POST);
	if (!empty($_POST['id_img'])) {
		echo "Exito";
	}else{
		echo "No exito";
	}
	if (@$activa==1) {
		$activar="UPDATE din_imagen SET estado=1 WHERE id_img=$id_img";

		$resultActiva = $conn->query($activar);
	}elseif (@$desactiva==1) {
		$desactivar="UPDATE din_imagen SET estado=0 WHERE id_img=$id_img";
		
		$resultActiva = $conn->query($desactivar);
	}

       ?>
    </div>
  </div>

 <script type="text/javascript">
        $(document).ready(function () {
          /*Abre la página de clientes sin recargar la página actual*/
          $("#mostrarFormDin").click(function () {
            $("#contenedor").load("formDinamica.php");
            $("#menu").hide();
          });

          $("#btnModal").click(function(){
		        $("div.equis").modal({keyboard: true});
		   });

});