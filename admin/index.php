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
              <li class="active">
                <!--<button class="btn btn-link" id="btnClientes">Aministracion Clientes</button>-->
                <a href="#" id="btnClientes">Clientes</a> </li>
              <li>
                <!--<button class="btn btn-link" id="btnRP">Administración RP</button>-->
                <a href="#" id="btnRP">RP</a> </li>
              <li>
                <!--Boton para entrar a los registros de los clientes que obtuvieron informacion y quieren ingresar al sistema-->
                <a href="#" id="btnInfoClientes">Solicitudes de Clientes</a> </li>
              <li>
                <!--Boton para enlistar a los RP que solicitaron información-->
                <a href="#" id="btnInfoRP">Solicitudes de RP</a> </li>
              <li>
                <!--Boton para enlistar a los RP que solicitaron información-->
                <a href="#" id="btnNvoCliente">Ingresar Nuevo Cliente</a> </li>
              <li>
                <!--Boton para enlistar a los RP que solicitaron información-->
                <a href="#" id="btnNvoRP">Ingresar Nuevo RP</a> </li>
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
      <div id="contenedor"> </div>
      <script type="text/javascript">
        $(document).ready(function () {
          /*Abre la página de clientes sin recargar la página actual*/
          $("#btnClientes").click(function () {
            $("#contenedor").load("admClientes.php");
            $("#menu").hide();
          });
          /*Abre la página de RP sin recargar la página actual*/
          $("#btnRP").click(function () {
            $("#contenedor").load("admRP.php");
            $("#menu").hide();
          });
          /*Abre la página de los clientes que quiren informacion*/
          $("#btnInfoClientes").click(function () {
            $("#contenedor").load("infoClientes.php");
            $("#menu").hide();
          });
          /*Abre la página de los RP que quiren informacion*/
          $("#btnInfoRP").click(function () {
            $("#contenedor").load("infoRP.php");
            $("#menu").hide();
          });
          $("#btnNvoCliente").click(function () {
            $("#contenedor").load("admAgregaCliente.php");
            $("#menu").hide();
          });
          $("#btnNvoRP").click(function () {
            $("#contenedor").load("admAgregaRP.php");
            $("#menu").hide();
          });
        });
      </script>


      <?php 
        include 'footer.php';
       ?>