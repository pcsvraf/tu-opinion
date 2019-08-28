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
$codigo = mysqli_real_escape_string($link, $_REQUEST['codigo']);
$query = "SELECT motivo, comentario, respuesta FROM formulario WHERE codigo = '$codigo'";
//$query2 = "SELECT motivo, comentario FROM formulario";
$results = $db_handle->runQuery($query);
foreach ($results as $prueba) {
  $comentario .= $prueba["comentario"];
  $motivo .= $prueba["motivo"];
  $respuesta.= $prueba["respuesta"];
}

if(mysqli_query($link, $query)){
  echo "<head>";
  echo "</head>";
	echo"<div class='container'>";
    echo"<div class='row'>";
    echo"<div class='col-lg-10 col-xl-9 mx-auto'>";
    echo"<div class='card card-signin flex-row my-5'>";
    echo"<div class='card-body'>";
		echo "<div class='form-group'>";
		echo "<label for='exampleInputEmail1'><strong>Motivo</strong></label>";
		echo "<input type='email' readonly='' class='form-control' name='motivo' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='$motivo'>";
		echo "<label for='exampleInputEmail1'><strong>Comentario</strong></label>";
		echo "<input type='email' readonly='' class='form-control' name='comentario' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='$comentario'>";
		echo "<label for='exampleInputEmail1'><strong>Respuesta</strong></label>";
		echo "<textarea' readonly='' class='form-control' name='respuesta' id='exampleInputEmail1' aria-describedby='emailHelp' placeholder='$respuesta'></textarea>";
		echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
