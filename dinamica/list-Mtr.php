<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<style type="text/css">
#apDiv1 {
	position: relative;
	width: 100%;
	height: 1em;
	text-align: center;
	font-size: 30px;
	font-family: Verdana, Geneva, sans-serif;
	text-emphasis: accent;
}
</style>
</head>
<body>
<?php include("../include/menu.php") ?>
<div id="apDiv1"></div>
<p>&nbsp;</p>
<?php
//NOS CONECAMOS A LA BASE DE DATOS
//REMPLAZEN SUS VALOS POR LOS MIOS
$link = mysql_connect("localhost", "root", "");
mysql_connect("localhost","root","") or die("No se pudo conectar a la base de datos");
mysql_select_db("academ", $link);

//SELECCIONAMOS LA BASE DE DATOS CON LA CUAL VAMOS A TRABAJAR CAMBIEN EL VALOR POR LA SUYA


//CONSTRUIMOS EL QUERY PARA OBTENER LOS ARCHIVOS
$qry="select titulo,descripcion,
		docs.*,
		CASE docs.tipo 
			WHEN 'image/png' then 
				'image'
			WHEN 'image/jpg' then 
				'image'
			WHEN 'image/gif' then 
				'image'
			WHEN 'image/jpeg' then 
				'image'
			ELSE 
				'file' 
		END as display
	from tbl_documentos AS docs";

//EJECUTAMOS LA CONSULTA
$res=mysql_query($qry) or die("Query: $qry ".mysql_error());


echo "<center>";
echo "<table>";
//RECORREMOS LA CONSULTA
while ($obj=mysql_fetch_object($res)) {
	//SI EL TIPO DE DOCUMENTO ES UMAGEN LA MOSTRAMOS SI NO SOLO HACEMOS EL LINK
	echo "<tr>";
	echo "<td>Actividad: ".$obj->titulo."<br/>";
	echo "Descripción: ".$obj->descripcion."<br/>";
	echo "Fecha Entrega: ".$obj->fecha_entrega."<br>";
	echo "<a href='list-Mtr.php?id=".$obj->id_documento."&idborrar=2'>".$obj->id_documento."</a></td>";
	echo "<td>";
		switch ($obj->display){
		case "image":
		
			echo "<div>
			
					<a href='getfile.php?id_documento={$obj->id_documento}'>
						<img src='getfile.php?id_documento={$obj->id_documento}' alt='$obj->titulo'  width=300 heigth=300/>
					</a>
				</div><hr /></td>";
			break;
		case "file":
			echo "<div>
			
					<a href='getfile.php?id_documento={$obj->id_documento}'>$obj->titulo</a>
				</div><hr /></td>";
			break;			
	}
	echo "</tr>";
}
echo "</table>";
echo "</center>";


extract($_GET);
					/*if(@$idborrar==2){
		
						$sqlborrar="UPDATE FROM tbl_documentos SET status=1 WHERE id=$id";
						//$resborrar=mysql_query($sqlborrar);
						//$resultborrar =mysql_query($sqlborrar);
						$resu=mysql_query($sqlborrar) or die("Query: $qry ".mysql_error());
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='Alumnos_Alta_Mtr.php'</script>";
					}*/


//CERRAMOS LA CONEXION
mysql_close();
?>
</body>
</html>