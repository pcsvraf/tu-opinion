<?php
require_once ("dbcontroller.php");
$db_handle = new DBController();
echo "<link rel='stylesheet' href='stylesheets/bootstrap.min.css' >";
//echo $s;
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
//$q=intval($_GET['q']);
$link = mysqli_connect("localhost", "pcspucv_tuopinion", "pcs2018", "pcspucv_tuopinion");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$id = mysqli_real_escape_string($link, $_REQUEST['id']);

$query = "SELECT tipo_usuario, motivo, comentario, correo, archivo FROM formulario WHERE id='$id'";
//$query2 = "SELECT motivo, comentario FROM formulario";
$results = $db_handle->runQuery($query);
foreach ($results as $prueba) {
  $comentario .= $prueba["comentario"];
  $motivo .= $prueba["motivo"];
  $tipo_usuario .= $prueba["tipo_usuario"];
  $correo .= $prueba["correo"];
  $archivo .= $prueba["archivo"];
}

if(mysqli_query($link, $query)){
  echo "<head>";
  echo "</head>";
	echo"<div class='container'>";
    echo"<div class='row'>";
    echo"<div class='col-lg-10 col-xl-9 mx-auto'>";
    echo"<div class='card card-signin flex-row my-5'>";
    echo"<div class='card-body'>";
    echo "<form action='respuesta.php' method='post' enctype='multipart/form-data'>";
		echo "<div class='form-group'>";
    echo "<input type='hidden' readonly='' class='form-control' name='id' value='$id' id='exampleInputEmail1' aria-describedby='emailHelp'>";
    echo "<label for='exampleInputEmail1'><strong>Usuario</strong></label>";
		echo "<input type='email' readonly='' class='form-control' name='usuario' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='$tipo_usuario'>";
		echo "<label for='exampleInputEmail1'><strong>Motivo</strong></label>";
		echo "<input type='email' readonly='' class='form-control' name='motivo' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='$motivo'>";
		echo "<label for='exampleInputEmail1'><strong>Comentario</strong></label>";
		echo "<input type='email' readonly='' class='form-control' name='comentario' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='$comentario'>";
		echo "<label for='exampleInputEmail1'><strong>Correo</strong></label>";
    echo "<input type='email' readonly='' class='form-control' name='correo' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='$correo'>";
    echo "<label for='exampleInputEmail1'><strong>Archivo</strong></label>";
    echo "<input type='email' readonly='' class='form-control' name='archivo' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='$archivo'>";
    echo "<label for='exampleInputEmail1'><strong>Respuesta</strong></label>";
    echo "<textarea class='form-control' name='respuesta' id='exampleFormControlTextarea1' rows='3' placeholder='Máximo 500 caracteres' required></textarea>";
    echo "<br><input class='btn btn-success float-right' type='submit' value='Enviar'>";
    echo "</div>";
    echo "</form>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>
