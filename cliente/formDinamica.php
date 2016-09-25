<div class="row espacio-arriba espacio-abajo">
	<div class=" col-md-offset-3 col-md-5 col-sm-12">

		<form action="agregaDinamica.php" method="post" enctype="multipart/form-data">
			
			<div class="form-group">
				<label for="nombre">Nombre de la Campaña</label>
				<input type="text" class="form-control" id="nombreImg" required autofocus name="nombre" placeholder="Nombre de la Campaña">
			</div>

			<div class="form-group">
				<label for="archivo">Imágen</label><br>
				<label class="btn btn-default btn-file"><!--accept=".gif, .jpg, .png, .jpeg"-->
   				Buscar Imágen <input type="file" class="form-control" accept=".gif, .jpg, .png, .jpeg" name="imagen" id="img" style="display: none;">
				</label>
				<p class="help-block">Elegir imagenn a mostrar.</p>
				<br>
				<img id="preview" src="" style="display:none" height="45%" width="45%" />
			</div>

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