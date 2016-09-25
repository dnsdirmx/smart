<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SmartWifi</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
     <!--Nuestro propio archivo de etilos-->
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/cliente.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

 <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

  </head>
 <body>
  <?php 
  session_start();
   ?>
    <div class="container">
      
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!--Aquí el Logo y lo demás se agrupa para hacer el menú para dispositivos pequeños-->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="#"> <img alt="SmartWifi" src="../img/logosmflogeado.jpeg" class="logo" href="#"> </a>
          </div>
          <!--Aquí se va a poner lo del menú cuando colapsa-->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              
              <li>
                <a href="#" id="btnDinamica">Dinámicas</a>
              </li>
              <li>
                <a href="#" id="btnEstadisticas">Estadisticas</a>
              </li>
              <li>
                <a href="#" id="btnAjustes">Ajustes</a>
              </li>


            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Cerrar Sesión</a></li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!--Cierra el .container-fluid-->
      </nav>
      <!--Cierra la navegación-->

      <div id="contenedor"></div>

       <script type="text/javascript">
        $(document).ready(function () {
          /*Abre la página de clientes sin recargar la página actual*/
          $("#btnDinamica").click(function () {
            $("#contenedor").load("formDinamica.php");
            $("#menu").hide();
          });

          $("#btnEstadisticas").click(function () {
            $("#contenedor").load("listaDinamicas.php");
            $("#menu").hide();
            });

          $("#btnAjustes").click(function () {
            $("#contenedor").load("verImagen.php");
            $("#menu").hide();
          });

        });
      </script>


 <?php 
 	include 'footer.php';
  ?>