<?php 
	include'cabecera.php';
	session_start();
 ?>

  <div class="container espacio-arriba">

    <!--Ingresa (logueo)-->
    <div class="espacio-izq">
      <form method="post" action="ingresar.php">
        <div class="form-group">
          <label for="exampleInputEmail1">Ingrese su Correo</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Correo Electrónico" name="correo">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Ingrese su Contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" name="contra">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-default">Ingresar</button>
        </div>

      </form>
    </div>
    <!--Termina el tag del formulario-->

<!--
    Aqui hace referencia a donde se ingresa para que se registre como nuevo usuario
    <div class="text-center espacio-arriba">

      <h4>¿Quieres obtener información sobre nuestro servicio? Ingresa <span class="btn-link"><a href="registro.php">aquí.</a></span></h4>
      <h4>¿Quieres formar parte del equipo? Ingresa <span class="btn-link"><a href="registroRP.php">aquí.</a></span></h4>

    </div>
-->

    <!--Cierra el div de la clase container-->
  </div>



  <?php 
	include 'footer.php'
 ?>