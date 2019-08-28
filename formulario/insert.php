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
$codigo=uniqid();
// Escape user inputs for security
$soy = mysqli_real_escape_string($link, $_REQUEST['soy']);
$motivo = mysqli_real_escape_string($link, $_REQUEST['motivo']);
$comentario = mysqli_real_escape_string($link, $_REQUEST['comentario']);
$correo = mysqli_real_escape_string($link, $_REQUEST['correo']);
$id_servicio= mysqli_real_escape_string($link, $_REQUEST['prueba']);
//$archivo= mysqli_real_escape_string($link, $_REQUEST['archivo']);

// comprobamos que el arhivo no sea mayor de 1Mb
if($_FILES["archivo"]["size"]>3000000){
echo "Solo se permiten archivos menores de 3MB";
}else{
// sacamos todas las propiedades del archivo
$nombre_archivo = $_FILES['archivo']['name'];
$tipo_archivo= $_FILES['archivo']['type'];
$tamano_archivo = $_FILES["archivo"]['size'];
$direccion_temporar = $_FILES['archivo']['tmp_name'];
// movemos el archivo a la capeta de nuestro servidor
move_uploaded_file($_FILES['archivo']['tmp_name'],"./evidencia/" . $_FILES['archivo']['name']);
}
$query2 = "SELECT correo_jefe, nombre_jefe FROM servicio WHERE id = '$id_servicio'";
$cor="";
$nom="";
$results = $db_handle->runQuery($query2);
foreach ($results as $correos) {
  $cor .= $correos["correo_jefe"];
  $nom .= $correos["nombre_jefe"];
}
// Attempt insert query execution

$sql = "INSERT INTO formulario (tipo_usuario, motivo, comentario, correo, id_servicio, codigo, archivo) VALUES ('$soy', '$motivo', '$comentario', '$correo', '$id_servicio', '$codigo', '$nombre_archivo')";

if(mysqli_query($link, $sql)){
  echo "<head>";
  echo "</head>";
	echo"<div class='container'>";
    echo"<div class='row'>";
    echo"<div class='col-lg-10 col-xl-9 mx-auto'>";
    echo"<div class='card card-signin flex-row my-5'>";
    echo"<div class='card-body'>";
    echo "En un periodo máximo de 48 Hrs. hábiles y a quienes hayan registrado su correo electrónico válido, se ofrecerá una respuesta o solución a lo señalado en su comentario. Agradecemos su interés y preocupación por Mejorar la Calidad de Nuestros Servicios.";
    echo "<br>";
    echo "El código para hacer seguimiento a su solicitud es: <strong>".$codigo. "</strong> ";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo $resultado;
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
include("correo.php");
include("correo_usuario.php");

?>
