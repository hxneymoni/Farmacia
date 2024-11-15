<?php
require "conexion.php";

$id = $_GET['id'];

echo $id;

$consulta = " DELETE FROM factura WHERE id = '$id' ";
$resultado = mysqli_query($conectar,$consulta);

if($resultado) {
  echo '
  <script>
    alert("SE ELIMINARON DATOS CORRECTAMENTE");
    location.href = "editafactura.php";
  </script>
  ';

}



?>