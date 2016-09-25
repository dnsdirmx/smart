<?php 
	include 'settingsDB/conDB.php';

	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$telefono = $_POST["telefono"];
	$estado = $_POST["estado"];
	$ciudad = $_POST["ciudad"];
	$direccion = $_POST["direccion"];
	$email = $_POST["email"];
	$ocupacion = $_POST["ocupacion"];
	$motivo = $_POST["motivo"];
	$acepto = isset($_POST['acepto']);

$sql = "INSERT INTO info_rp (nom_rp, ap_rp, tel_rp, edo_rp, cd_rp, dir_rp, email_rp, ocup_rp, motivo_rp, acepto_rp) VALUES ('$nombre', '$apellido', $telefono , '$estado', '$ciudad', '$direccion', '$email', '$ocupacion', '$motivo', '$acepto')";

if ($conn->query($sql) === TRUE) {
	header('Location:http://www.smartwifi.mx');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

 ?>