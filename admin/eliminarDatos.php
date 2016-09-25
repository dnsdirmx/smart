<?php 
	include '../settingsDB/conDB.php';

	/*Aquí se hará la consulta para que se puedan borrar los datos a la tabla*/
	extract($_GET);
	if(@$idborrar==1){
		$sqlborrar="DELETE FROM info_cl WHERE id_cl=$id";
		//$resborrar=mysql_query($sqlborrar);
		$resultborrar = $conn->query($sqlborrar);
		
		header('Location: index.php');
		/*echo "<script>location.href='Alumnos_Alta_Mtr.php'</script>";*/
	}elseif (@$idborrar==2) {
		
		$sqlborrarRP="DELETE FROM info_rp WHERE id_rp=$id";
		$resultborrarRP = $conn->query($sqlborrarRP);
		
		header('Location: index.php');
	}elseif (@$idborrar==3) {
		$sqlborrar="DELETE FROM tb_cliente WHERE id_cl=$id";
		//$resborrar=mysql_query($sqlborrar);
		$resultborrar = $conn->query($sqlborrar);
		
		header('Location: index.php');
	}elseif (@$idborrar==4) {
		$sqlborrarRP="DELETE FROM tb_rp WHERE id_rp=$id";
		$resultborrarRP = $conn->query($sqlborrarRP);
		
		header('Location: index.php');
	}

 ?>