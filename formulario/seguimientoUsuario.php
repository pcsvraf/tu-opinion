<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT * FROM formulario";
$results = $db_handle->runQuery($query);
?>
<html>
<head>
<TITLE>Tu Opinion</TITLE>
<head>
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/all.css">
	<link rel="stylesheet" href="stylesheets/bootstrap.min.css" >
	<script src="javascript/jquery.min.js" ></script>
	<script src="javascript/bootstrap.min.js" ></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<script src="javascript/jquery-3.2.1.min.js" type="text/javascript"></script>
</head>
<body>
  <div class="container">
  	<div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-body">
            <form action="usuario.php" method="post" enctype="multipart/form-data">
              <p>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1"><strong>Ingrese el código enviado a su correo:</strong></label>
                  <input type="text" name="codigo" class="form-control" placeholder="Código" aria-label="Recipient's username" aria-describedby="button-addon2">
                </div>
              </p>
              <input class="btn btn-success float-right" type="submit" value="Revisar">
            </form>
</body>
</html>
