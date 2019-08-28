<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT * FROM direccion";
$results = $db_handle->runQuery($query);
?>
<html>
<head>
<TITLE>Tu Opinion</TITLE>
<head>
	<!--<link rel="stylesheet" type="text/css" href="stylesheets/style.css">-->
	<link rel="stylesheet" type="text/css" href="stylesheets/all.css">
	<link rel="stylesheet" href="stylesheets/bootstrap.min.css" >
	<script src="javascript/jquery.min.js" ></script>
	<script src="javascript/bootstrap.min.js" ></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script src="javascript/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script>
		function getDireccion(val) {
			$.ajax({
			type: "POST",
			url: "getDireccion.php",
			data:'direccion_id='+val,
			success: function(data){
				$("#listaServicios").html(data);
				getCity();
			}
			});
		}

		function getServicio(val) {
		$.ajax({
		type: "POST",
		url: "getServicio.php",
		data:'servicio_id='+val,
		success: function(data){
			$("#list").html(data);
		}
		});
	}

	</script>
</head>
<body>
	<div class="container">
		<div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-body">
				    <form action="insert.php" method="post" enctype="multipart/form-data">
							<fieldset>
								<div class="form-group">
									<div class="col-lg-10 col-xl-9 mx-auto">
										<label class="control-label"><strong>Soy</strong></label>
				            <div class="radio">
				              <label class="control-label"><input type="radio" name="soy" value="Estudiante" checked> Estudiante</label>
				            </div>
				            <div class="radio">
				              <label class="control-label"><input type="radio" name="soy" value="Funcionario"> Funcionario</label>
				            </div>
				          </div>
								</div>

								<div class="form-group">
									<div class="col-lg-10 col-xl-9 mx-auto">
										<label class="control-label"><strong>Dirección</strong></label><br/>
										<select name="direccion" id="listaDirecciones" class="form-control" onChange="getDireccion(this.value);" required>
											<option value disabled selected>Seleccione Dirección</option>
											<?php
												foreach($results as $direccion) {
											?>
												<option value="<?php echo $direccion["id"]; ?>"><?php echo $direccion["nombre"]; ?></option>
											<?php
											}
											?>
										</select>
									</div>
								</div>

								<div class="form-group">
									<div class="col-lg-10 col-xl-9 mx-auto">
										<label class="control-label"><strong>Servicio</strong></label><br/>
										<select name="prueba" id="listaServicios" class="form-control" onChange="getCity(this.value);" required>
											<option value="">Seleccione Servicio</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<div class="col-lg-10 col-xl-9 mx-auto">
				          	<label class="control-label"><strong>Motivo</strong></label>
				            <div class="radio">
				              <label><input type="radio" name="motivo" value="Consulta" checked> Consulta</label>
				            </div>
				            <div class="radio">
				              <label><input type="radio" name="motivo" value="Sugerencia"> Sugerencia</label>
				            </div>
				            <div class="radio">
				              <label><input type="radio" name="motivo" value="Felicitacion"> Felicitación</label>
				            </div>
				            <div class="radio">
				              <label><input type="radio" name="motivo" value="Reclamo"> Reclamo</label>
				            </div>
				          </div>
								</div>

				        <div class="form-group">
									<div class="col-lg-10 col-xl-9 mx-auto">
				            <label class="control-label" for="exampleFormControlTextarea1"><strong>Comentario (favor dar especificaciones; Ej. Sede, Lugar, etc.)</strong></label>
				            <textarea class="form-control" name="comentario" id="exampleFormControlTextarea1" rows="3" placeholder="Máximo 500 caracteres" required></textarea>
									</div>
								</div>

				        <div class="form-group">
									<div class="col-lg-10 col-xl-9 mx-auto">
				            <label class="control-label" for="exampleFormControlFile1"><strong>Evidencia</strong></label>
				            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="archivo">
									</div>
				        </div>

				        <div class="form-group">
									<div class="col-lg-10 col-xl-9 mx-auto">
				            <label class="control-label" for="exampleInputEmail1"><strong>Correo</strong></label>
				            <input type="email" class="form-control" name="correo" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo">
									</div>
								</div>

								<div class="form-group">
									<div class="col-lg-10 col-xl-9 mx-auto">
				            <input class="btn btn-success float-right" type="submit" value="Enviar">
									</div>
								</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
