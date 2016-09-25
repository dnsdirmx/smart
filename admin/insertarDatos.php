<?php 
	include '../settingsDB/conDB.php';


	/*Función para generar cadena al azar la cual se utilizará como contraseña hasta que el usuario la cambie*/
	
		

	/*Variable para ingresar la fecha de inicio, la cual toma la fecha actual*/	
	$date = date('Y-m-d');
	$contra = randomPassword();
	$contraRP = randomPassword();
	/*Aquí se hará la consulta para que se puedan agregar los datos a la tabla*/
	extract($_GET);
	if(@$idinsertar==1){

		/*$sqlinsertar="INSERT INTO tb_cliente(nom_cl, ap_cl, nom_emp_cl, edo_cl, cd_cl, dir_cl, tel_cl, giro_cl, correo_cl,fecha_ini_cl, id_rp, id_adm) SELECT (nom_cl, ap_cl, emp_cl, edo_cl, cd_cl, dir_cl, tel_cl, giro_cl, email_cl, '$date', 0, '$id') FROM info_cl WHERE id_cl=".$id;*/
		
		//$sqlinsertar = 'INSERT INTO tb_cliente(fecha_ini_cl) SELECT "$date" FROM info_cl WHERE id_cl='.$id;
		$sqlinsertar = "INSERT INTO tb_cliente(nom_cl, ap_cl, nom_emp_cl, edo_cl, cd_cl, dir_cl, tel_cl, giro_cl, correo_cl, fecha_ini_cl, contra_cl,id_rp,id_adm) SELECT nom_cl, ap_cl, emp_cl, edo_cl, cd_cl, dir_cl, tel_cl, giro_cl, email_cl, '$date', '$contra', 0, ".$id." FROM info_cl WHERE id_cl=".$id;
		
		$resultinserta = $conn->query($sqlinsertar);

		/*Una vez que el usuario decide entrar se manda su info a la tabla tb_cliente y se borra de la tabla info_cl*/
		header('Location: eliminarDatos.php?id='.$id.'&idborrar=1');
		//header('Location: index.php');
		/*echo "<script>location.href='Alumnos_Alta_Mtr.php'</script>";*/
	}elseif (@$idinsertar==2) {
		
		/*Hace la consulta donde agrega los datos del que pidi infromacion a la base para administrarlos*/
		$sqlinsertarRP = "INSERT INTO tb_rp(nom_rp, ap_rp, dir_rp, cd_rp, edo_rp, tel_rp, pago_rp, correo_rp, fecha_ini_rp, contra_rp) SELECT nom_rp, ap_rp, dir_rp, cd_rp, edo_rp, tel_rp,0, email_rp, '$date', '$contraRP' FROM info_rp WHERE id_rp=".$id;
		

		$resultinserta = $conn->query($sqlinsertarRP);
		if (!$resultinserta) {
			die('Invalid query: ' . mysqli_error($conn));
		}
		
		/*Una vez que el usuario decide entrar se manda su info a la tabla tb_cliente y se borra de la tabla info_cl*/
		header('Location: eliminarDatos.php?id='.$id.'&idborrar=2');
		//header('Location: index.php');
		/*echo "<script>location.href='Alumnos_Alta_Mtr.php'</script>";*/
	}



	function randomPassword() {
		    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
		    $pass = array(); //remember to declare $pass as an array
		    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		    for ($i = 0; $i < 8; $i++) {
		        $n = rand(0, $alphaLength);
		        $pass[] = $alphabet[$n];
		    }
		    return implode($pass); //turn the array into a string
		}
 ?>


