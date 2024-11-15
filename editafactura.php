<?php
include "seguridad.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
<?php
    include "headeradmin.php"
    ?>
    <br>
    <br><br>

      <div class="tablaR">
      <h1>《 FACTURAS 》</h1>
</div>
<br><br>

<div class="contTablaR">
<table class="ResTab">
    <th class="">ID</th>
    <th class="">NOMBRE</th>
    <th class="">APELLIDO</th>
    <th class="">E-MAIL</th>
    <th class="">RFC</th>
    <th class="">TELEFONO</th>
    <th class="">ELIMINAR</th>

    <?php
    require "conexion.php";

    $llenar_datos = "SELECT * FROM factura ORDER BY id ASC";
    $busqueda = mysqli_query($conectar, $llenar_datos);
    while ($fila = mysqli_fetch_assoc($busqueda)) {
        echo "<tr>";
        echo "<td>" . $fila["id"] . "</td>";
        echo "<td>" . $fila["nombreF"] . "</td>";
        echo "<td>" . $fila["apellidoF"] . "</td>";
        echo "<td>" . $fila["email"] . "</td>";
        echo "<td>" . $fila["rfc"] . "</td>";
        echo "<td>" . $fila["tel"] . "</td>";
        echo "<td class=''><a href='#' class='' onClick=validar('eliminar_factura.php?id=" . $fila["id"] . "')>Eliminar</a></td>";
        echo "</tr>";
    }
    ?>
</table>

      <script>
        function validar(url) {
            var eliminar = confirm("¿ELIMINAR DATOS DE FACTURA?");
            if(eliminar ==true ) {
                window.location = url;
            }
        }
      </script>
      </div>
      <br>
    <div class="btnInc">
    <a href="indexadmin.php"><button>REGRESAR AL INICIO</button></a>
</div>
    <?php
    include "footer.php"
    ?>
    <br>
</body>
</html>
