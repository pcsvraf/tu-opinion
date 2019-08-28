<?php
$conn = mysqli_connect("localhost", "pcspucv_tuopinion", "pcs2018", "pcspucv_tuopinion");
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$sql = 'SELECT *
		FROM formulario';

$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

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
	</script>
</head>
<body>
      <table id="tabla" class="table table-hover table-fixed">
				<thead>
					<tr>
						<th style="background-color: #337ab7; color: #FFF">usuario</th>
						<th style="background-color: #337ab7; color: #FFF">motivo</th>
						<th style="background-color: #337ab7; color: #FFF">comentario</th>
						<th style="background-color: #337ab7; color: #FFF">correo</th>
						<th style="background-color: #337ab7; color: #FFF">archivo</th>
						<th style="background-color: #337ab7; color: #FFF">estado</th>
						<th style="background-color: #337ab7; color: #FFF"></th>
					</tr>
				</thead>
				<tbody>
				<?php
				while ($row = mysqli_fetch_array($query))
				{
					echo '<tr>
							<td>'.$row['tipo_usuario'].'</td>
							<td>'.$row['motivo'].'</td>
							<td>'.$row['comentario'].'</td>
							<td>'.$row['correo'].'</td>
							<td>'.$row['archivo'].'</td>
							<td></td>
							<td><form action="jefe.php" method="post" enctype="multipart/form-data"> <input type="hidden" name="id" value="'.$row['id'].'" /><input class="btn btn-success float-center" type="submit" value="Responder"></form></td>
						</tr>';
				}?>
				</tbody>
			</table>
</body>
</html>
