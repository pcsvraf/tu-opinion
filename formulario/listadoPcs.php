<?php
$conn = mysqli_connect("localhost", "pcspucv_tuopinion", "pcs2018", "pcspucv_tuopinion");
mysqli_set_charset($connect, "utf8");
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$sql = 'SELECT *
		FROM direccion';

$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Programa Calidad de Servicios</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
        <style type="text/css">
            .anotherhover tbody tr:hover td {
                background-color: #D3D3D3;
            }
            .table-striped tbody tr:nth-child(odd){
                background-color: #ECF7FF;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <table id="listado" style="font-size: 15px" class="table anotherhover table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="background-color: #337ab7;">
                            <select name="category" id="category" class="form-control" style="background-color: #fa7f28; color: #FFF">
                                <option value="">Todas las Categorias</option>
                                <?php
                                while ($row = mysqli_fetch_array($query)) {
                                    echo utf8_decode('<option value="' . $row["id"] . '">' . $row["nombre"] . '</option>');
                                }
                                ?>
                            </select>
                        </th>
                        <th style="background-color: #337ab7; color: #FFF">Usuario</th>
                        <th style="background-color: #337ab7; color: #FFF">Motivo</th>
                        <th style="background-color: #337ab7; color: #FFF">Comentario</th>
                        <th style="background-color: #337ab7; color: #FFF">Correo</th>
                        <th style="background-color: #337ab7; color: #FFF">Archivo</th>
                        <th style="background-color: #337ab7; color: #FFF">Estado</th>
                        <th style="background-color: #337ab7; color: #FFF">Boton</th>
                    </tr>
                </thead>
            </table>
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>
<script type="text/javascript" language="javascript" >
    $(document).ready(function () {

        load_data();
        function load_data(is_category)
        {
            $('#listado').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                },
                "processing": true,
                "serverSide": true,
                "order": false,
                "ordering": false,
                "ajax": {
                    url: "prueba.php",
                    type: "POST",
                    data: {is_category: is_category}
                },
                "columnDefs": [
                    {
                        "targets": [2],
                        "orderable": false
                    }
                ]
            });
        }

        $(document).on('change', '#category', function () {
            var category = $(this).val();
            $('#listado').DataTable().destroy();
            if (category != '')
            {
                load_data(category);
            } else
            {
                load_data();
            }
        });
    });


</script>
