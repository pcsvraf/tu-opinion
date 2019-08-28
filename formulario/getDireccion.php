<?php
require_once ("dbcontroller.php");
$db_handle = new DBController();
if (! empty($_POST["direccion_id"])) {
    $query = "SELECT * FROM servicio WHERE id_direccion = '" . $_POST["direccion_id"] . "'";
    $results = $db_handle->runQuery($query);
    ?>
<option value disabled selected>Seleccione Servicio</option>
<?php
    foreach ($results as $servicio) {
        ?>
<option value="<?php echo $servicio["id"]; ?>"><?php echo $servicio["nombre"]; ?></option>
<?php
    }
}
?>