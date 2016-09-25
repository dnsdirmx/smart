<?php
	session_start();

	?>
	<style>
		.necesario{
			color: red;
			font-size: 18px;
		}
	</style>
	<div class="row">
		<div class="col-md-offset-2 col-md-7">
			<h1>RP</h1>
				<form method="post" action="registraRP.php">
					<!--Nombre del Usuario-->
					<div class="form-group">
						<label for="nombreUsuario">Nombre(s)<span class="necesario">*</span></label>
						<input type="text" class="form-control" id="nombreUsuario" placeholder="Nombre(s)" autofocus autocomplete="on" required name="nombre">
					</div>
					<!--Apellido del Usuario-->
					<div class="form-group">
						<label for="apellidoUsuario">Apellidos<span class="necesario">*</span></label>
						<input type="text" class="form-control" id="apellidoUsuario" placeholder="Apellidos" autocomplete="on" required name="apellido">
					</div>
					<!--Estado-->
					<div class="form-group">
						<label for="estado">Estado<span class="necesario">*</span></label>
						<input type="text" class="form-control" id="estado" placeholder="Estado" autocomplete="on" required name="estado">
					</div>
					<!--Ciudad-->
					<div class="form-group">
						<label for="ciudad">Ciudad<span class="necesario">*</span></label>
						<input type="text" class="form-control" id="ciudad" placeholder="Ciudad" autocomplete="on" required name="ciudad">
					</div>
					<!--Dirección-->
					<div class="form-group">
						<label for="direccion">Dirección<span class="necesario">*</span></label>
						<input type="text" class="form-control" id="direccion" placeholder="Dirección" autocomplete="on" required name="direccion">
					</div>
					<!--Teléfono-->
					<div class="form-group">
						<label for="telefono">Teléfono<span class="necesario">*</span></label>
						<input type="number" class="form-control" id="telefono" min="0" placeholder="Teléfono" autocomplete="on" required name="telefono">
					</div>
					<!--Ocupación-->
					<div class="form-group">
						<label for="ocupacion">Ocupación<span class="necesario">*</span></label>
						<input type="text" class="form-control" id="ocupacion" placeholder="Ocupación" autocomplete="on" required name="ocupacion">
					</div>
					<!--Correo Electrónico-->
					<div class="form-group">
						<label for="email">Correo Electrónico<span class="necesario">*</span></label>
						<input type="email" class="form-control" id="email" placeholder="Correo Electrónico" autocomplete="on" required name="email">
					</div>
					<!--TextArea para declarar el motivo por el cual se quiere unir-->
					<div class="form-group">
						<label for="motivo">¿Qué te motiva a unirte a nuestro equipo?</label>
						<textarea name="motivo" maxlength="150" class="form-control" id="motivo" cols="10" rows="5" required name="motivo"></textarea>
					</div>
					

					<!--Botones para ingresar datos o borrarlos-->
					<input type="reset" class="btn btn-default" value="Borrar Datos">
					<input type="submit" class="btn btn-primary" value="Ingresar Datos" >
				</form>

				<br>
				<h6><span class="necesario">*</span>Campos obligatorios</h6>
				<br>
			</div>
			</div>

