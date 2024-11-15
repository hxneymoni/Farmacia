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
      <h1>👤 USUARIOS </h1>
</div>
<br><br>

    <div class="btnInc">
    <a href="nuevoU.php"><button>AGREGAR NUEVO USUARIO</button></a>
</div>
<br><br>
<div class="contTablaR">
<table class="ResTab">
    <th class="">ID</th>
    <th class="">NOMBRE USUARIO</th>
    <th class="">CONTRASEÑA</th>
    <th>ELIMINAR</th>

    <?php
    require "conexion.php";

    $llenar_datos = "SELECT * FROM users ORDER BY id ASC";
    $busqueda = mysqli_query($conectar, $llenar_datos);
    while ($fila = mysqli_fetch_assoc($busqueda)) {
        echo "<tr>";
        echo "<td>" . $fila["id"] . "</td>";
        echo "<td>" . $fila["usuarioLog"] . "</td>";
        echo "<td>" . $fila["contra"] . "</td>";
        echo "<td class=''><a href='#' class='' onClick=validar('eliminar_user.php?id=" . $fila["id"] . "')>Eliminar</a></td>";
        echo "</tr>";
    }
    ?>
</table>
<script>
        function validar(url) {
            var eliminar = confirm("¿ELIMINAR USUARIO?");
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