<?php

require "conexion.php";

$nombreF = $_POST["nombreF"];
$apellidoF = $_POST["apellidoF"];
$email = $_POST["email"];
$rfc = $_POST["rfc"];
$tel = $_POST["tel"];

$insertar = "INSERT INTO factura(nombreF, apellidoF,email,rfc,tel) VALUES ('$nombreF', '$apellidoF', '$email', '$rfc', '$tel')";


 $query = mysqli_query($conectar, $insertar);



if ($query){
  echo "
  <script>
  alert( 'Datos guardados correctamente' );
  location.href= 'index.php'
  </script>
  ";
}
else{
  echo "Valio queso";
}
