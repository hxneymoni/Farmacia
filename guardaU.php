<?php

require "conexion.php";

$usuarioLog = $_POST["usuarioLog"];
$contra = $_POST["contra"];


$insertar = "INSERT INTO users(usuarioLog, contra) VALUES ('$usuarioLog','$contra')";


 $query = mysqli_query($conectar, $insertar);



if ($query){
  echo "
  <script>
  alert( 'Datos guardados correctamente' );
  location.href= 'edituser.php'
  </script>
  ";
}
else{
  echo "Valio queso";
}