<?php 
	include '../settingsDB/conDB.php';

	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$empresa = $_POST["empresa"];
	$estado = $_POST["estado"];
	$ciudad = $_POST["ciudad"];
	$direccion = $_POST["direccion"];
	$telefono = $_POST["telefono"];
	$giro = $_POST["giro"];
	$email = $_POST["email"];
	$acepto = isset($_POST['acepto']);

$sql = "INSERT INTO info_cl (nom_cl, ap_cl, emp_cl, edo_cl, cd_cl, dir_cl, tel_cl, giro_cl, email_cl, acepto_cl) VALUES ('$nombre', '$apellido', '$empresa' , '$estado', '$ciudad', '$direccion', '$telefono', '$giro', '$email', '$acepto')";

if ($conn->query($sql) === TRUE) {
    /*echo "<script type='text/javascript'>alert('Gracias por su registro');</script>";*/
	header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

 ?>