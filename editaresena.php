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

    <div class="tablaR">
      <h1>✿ RESEÑAS ✿</h1>
</div>
<br>
<div class="contTablaR">
<table class="ResTab">
    <th class="">ID</th>
    <th class="">NOMBRE USUARIO</th>
    <th class="">PRODUCTO</th>
    <th class="">COMENTARIOS</th>
    <th class="">FOTO</th>
    <th class="">ELIMINAR</th>

    <?php
    require "conexion.php";

    $llenar_datos = "SELECT * FROM resena ORDER BY id ASC";
    $busqueda = mysqli_query($conectar, $llenar_datos);
    while ($fila = mysqli_fetch_assoc($busqueda)) {
        echo "<tr>";
        echo "<td>" . $fila["id"] . "</td>";
        echo "<td>" . $fila["nombreU"] . "</td>";
        echo "<td>" . $fila["nombreP"] . "</td>";
        echo "<td>" . $fila["comentario"] . "</td>";
        echo "<td><img class='img_tabla' src='" . $fila["foto"] . "'></td>";
        echo "<td class=''><a href='#' class='' onClick=validar('eliminar_resena.php?id=" . $fila["id"] . "')>Eliminar</a></td>";
        echo "</tr>";
    }
    ?>
</table>

      <script>
        function validar(url) {
            var eliminar = confirm("¿ELIMINAR RESEÑA?");
            if(eliminar ==true ) {
                window.location = url;
            }
        }
      </script>
      </div>
      <br>
      <br>
    <div class="btnInc">
    <a href="indexadmin.php"><button>REGRESAR AL INICIO</button></a>
</div>
      <?php
    include "footer.php"
    ?>
</body>
</html>
