<?php
require_once ("dbcontroller.php");
$db_handle = new DBController();
if (! empty($_POST["servicio_id"])) {
    $query = "SELECT * FROM prueba WHERE id = '" . $_POST["servicio_id"] . "' order by name asc";
    $results = $db_handle->runQuery($query);
    ?>
<option value disabled selected>Seleccione</option>
<?php
    foreach ($results as $prueba) {
        ?>
<option value="<?php echo $prueba["id"]; ?>"><?php echo $prueba["name"]; ?></option>
<?php
    }
}
?>