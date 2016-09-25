<?php

include '../settingsDB/conDB.php';

//ESTA FUNCION LA USAREMOS PARA OBTENER EL TAMAÑO DE NUESTRO ARCHIVO
function filesize_format($bytes, $format = '', $force = ''){
	$bytes=(float)$bytes;
	if ($bytes <1024){
		$numero=number_format($bytes, 0, '.', ',');
		return array($numero,"B");
	}
	if ($bytes <1048576){
		$numero=number_format($bytes/1024, 2, '.', ',');
		return array($numero,"KBs");
	}
	if ($bytes>= 1048576){
		$numero=number_format($bytes/1048576, 2, '.', ',');
		return array($numero,"MB");
	}
}
//VERIFICAMOS QUE SE SELECCIONO ALGUN ARCHIVO
if(sizeof($_FILES)==0){
	echo "No se puede subir el archivo";
	exit();
}
// EN ESTA VARIABLE ALMACENAMOS EL NOMBRE TEMPORAL QU SE LE ASIGNO ESTE NOMBRE ES GENERADO POR EL SERVIDOR
// ASI QUE SI NUESTRO ARCHIVO SE LLAMA foto.jpg el tmp_name no sera foto.jpg sino un nombre como SI12349712983.tmp por decir un ejemplo
$archivo = $_FILES["archivo"]["tmp_name"];
//Definimos un array para almacenar el tamaño del archivo
$tamanio=array();
//OBTENEMOS EL TAMAÑO DEL ARCHIVO
$tamanio = $_FILES["archivo"]["size"];
//OBTENEMOS EL TIPO MIME DEL ARCHIVO
$tipo = $_FILES["archivo"]["type"];
//OBTENEMOS EL NOMBRE REAL DEL ARCHIVO AQUI SI SERIA foto.jpg
$nombre_archivo = $_FILES["archivo"]["name"];
//PARA HACERNOS LA VIDA MAS FACIL EXTRAEMOS LOS DATOS DEL REQUEST
extract($_REQUEST);
//VERIFICAMOS DE NUEVO QUE SE SELECCIONO ALGUN ARCHIVO
if ( $archivo != "none" ){
	//ABRIMOS EL ARCHIVO EN MODO SOLO LECTURA
	// VERIFICAMOS EL TAÑANO DEL ARCHIVO
	$fp = fopen($archivo, "rb");
	//LEEMOS EL CONTENIDO DEL ARCHIVO
	$contenido = fread($fp, $tamanio);
	//CON LA FUNCION addslashes AGREGAMOS UN \ A CADA COMILLA SIMPLE ' PORQUE DE OTRA MANERA
	//NOS MARCARIA ERROR A LA HORA DE REALIZAR EL INSERT EN NUESTRA TABLA
	$contenido = addslashes($contenido);
	//CERRAMOS EL ARCHIVO
	fclose($fp);
	// VERIFICAMOS EL TAÑANO DEL ARCHIVO
	if ($tamanio <1048576){
		//HACEMOS LA CONVERSION PARA PODER GUARDAR SI EL TAMAÑO ESTA EN b ó MB
		$tamanio=filesize_format($tamanio);
	}
	
	//CREAMOS NUESTRO INSERT
	$qry = "INSERT INTO dinamica ( titulo,nombre_archivo, contenido, tamanio,tamanio_unidad, tipo, fecha_crea, fecha_entrega ) VALUES ('$titulo','$nombre_archivo','$contenido','{$tamanio[0]}','{$tamanio[1]}', '$tipo', '$crea' , '$entrega')";
	



if ($conn->query($qry) === TRUE) {
	header('Location:../cliente/index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>