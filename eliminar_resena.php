<?php
require "conexion.php";

$id = $_GET['id'];

echo $id;

$consulta = " DELETE FROM resena WHERE id = '$id' ";
$resultado = mysqli_query($conectar,$consulta);

if($resultado) {
  echo '
  <script>
    alert("SE ELIMINO LA RESEÑA CORRECTAMENTE");
    location.href = "editaresena.php";
  </script>
  ';

}



?>