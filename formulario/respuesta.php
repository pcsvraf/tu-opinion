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
// Escape user inputs for security
$respta = mysqli_real_escape_string($link, $_REQUEST['respuesta']);
$id = mysqli_real_escape_string($link, $_REQUEST['id']);
$query2 = "SELECT respuesta FROM formulario WHERE id = '$id'";
$respuesta="";
$results = $db_handle->runQuery($query2);
foreach ($results as $ides) {
  $respuesta .= $ides["id"];
}

$sql = "INSERT INTO formulario (respuesta) VALUES ('$respuesta')";


if(mysqli_query($link, $sql)){
  echo "<head>";
  echo "</head>";
	echo"<div class='container'>";
    echo"<div class='row'>";
    echo"<div class='col-lg-10 col-xl-9 mx-auto'>";
    echo"<div class='card card-signin flex-row my-5'>";
    echo"<div class='card-body'>";
    echo "Su respuesta ha sido registrada.";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
//include("correo.php");
//include("correo_usuario.php");

?>
