<div class="row espacio-arriba">
	<div class="col-md-offset-3 col-md-5">
		<form id="form1" name="test_upload" action="../dinamica/upload.php" enctype="multipart/form-data" method="post">


			<div class="form-group">
				<label for="nombreDinamica">Nombre</label>
				<input type="text" class="form-control" name="titulo" required placeholder="Nombre de la campaña">
			</div>

			<div class="form-group">
				<label for="fecha_inicio">Fecha Inicio</label>
				<input type="date" name="crea" class="form-control" required>
			</div>

			<div class="form-group">
				<label for="fecha_termino">Fecha Termino</label>
				<input type="date" name="entrega" class="form-control" required>
			</div>

			<div class="form-group">
				<label for="nombreArchivo">Archivo</label>
				<input type="file" name="archivo" id="img">
				<br>
				<img id="preview" src="" style="display:none" height="150" width="180" />
			</div>

			<!--Botones para borrar datos o ingresarlos-->
			<input type="reset" class="btn btn-default" value="Borrar Datos">
			<input type="submit" class="btn btn-primary" value="Ingresar Datos">


		</form>


	</div>

</div>




<script type="text/javascript">
	function preview(input) {
		if (input.files && input.files[0]) {
			var freader = new FileReader();
			freader.onload = function (e) {
				$("#preview").show();
				$('#preview').attr('src', e.target.result);
			}
			freader.readAsDataURL(input.files[0]);
		}
	}

	$("#img").change(function () {
		preview(this);
	});
</script>