<?php
	session_start();

	?>
	<style>
		.necesario{
	color: red;
	font-size: 18px;
}
	</style>
		<!---->
		<div class="row">
		<div class="col-md-offset-2 col-md-7">
			<h1>Cliente</h1>
				<form action="registraCliente.php" method="post">
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
					<!--Nombre de la Empresa-->
					<div class="form-group">
						<label for="nombreEmpresa">Nombre de la Empresa<span class="necesario">*</span></label>
						<input type="text" class="form-control" id="nombreEmpresa" placeholder="Nombre de la Empresa" autocomplete="on" required name="empresa">
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
						<input type="number" class="form-control" id="telefono" placeholder="Teléfono" min="0" autocomplete="on" required name="telefono">
					</div>
					<!--Giro Comercial-->
					<div class="form-group">
						<label for="giroComercial">Giro Comercial<span class="necesario">*</span></label>
						<select class="form-control" name="giro">
							<option value="">Selecciona...</option>
							<option value="hotel">Hotel</option>
							<option value="restaurante">Restaurante</option>
							<option value="cafeteria">Cafetería</option>
							<option value="bar">Bar</option>
						</select>
					</div>
					<!--Correo Electrónico-->
					<div class="form-group">
						<label for="email">Correo Electrónico<span class="necesario">*</span></label>
						<input type="email" class="form-control" id="email" placeholder="Correo Electrónico" autocomplete="on" required name="email">
					</div>
					
					

					<!--Botones para borrar datos o ingresarlos-->
					<input type="reset" class="btn btn-default" value="Borrar Datos">
					<input type="submit" class="btn btn-primary" value="Ingresar Datos">
				</form>
				<br>
				<h6><span class="necesario">*</span>Campos obligatorios</h6>
				<br>
			</div>
		</div>
		</div>

		<!--Cierre del DIV principal con clase .container-->
	</div>



