<?php
require "conexion.php";

$id = $_GET['id'];

echo $id;

$consulta = " DELETE FROM users WHERE id = '$id' ";
$resultado = mysqli_query($conectar,$consulta);

if($resultado) {
  echo '
  <script>
    alert("SE ELIMINO USUARIO CORRECTAMENTE");
    location.href = "edituser.php";
  </script>
  ';

}

?>