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

          <?php
            require "conexion.php";

            $llenar_datos = "SELECT * FROM resena ORDER BY id ASC";
            $busqueda = mysqli_query($conectar, $llenar_datos);
            while($fila = mysqli_fetch_assoc($busqueda)){
                echo "<tr>";
                echo "<td>" . $fila["id"] . "</td>";
                echo "<td>" . $fila["nombreU"] . "</td>";
                echo "<td>" . $fila["nombreP"] . "</td>";
                echo "<td>" . $fila["comentario"] . "</td>";
                echo "<td><img class='img_tabla' src='" . $fila["foto"] . "'></td>";
                echo "</tr>";
            }
          ?>
      </table>
      </div>
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
        echo "</tr>";
    }
    ?>
</table>

    </div>
<br><br>
    <div class="tablaR">
      <h1>👤 USUARIOS </h1>
</div>
<br><br>

<div class="contTablaR">
<table class="ResTab">
    <th class="">ID</th>
    <th class="">NOMBRE USUARIO</th>
    <th class="">CONTRASEÑA</th>

    <?php
    require "conexion.php";

    $llenar_datos = "SELECT * FROM users ORDER BY id ASC";
    $busqueda = mysqli_query($conectar, $llenar_datos);
    while ($fila = mysqli_fetch_assoc($busqueda)) {
        echo "<tr>";
        echo "<td>" . $fila["id"] . "</td>";
        echo "<td>" . $fila["usuarioLog"] . "</td>";
        echo "<td>" . $fila["contra"] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

    </div>
    <br>
    <div class="btnInc">
    <a href="indexadmin.php"><button>REGRESAR AL INICIO</button></a>
</div>
    <?php
    include "footer.php"
    ?>
</body>
</html>
