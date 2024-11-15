<?php

require "conexion.php";

$nombreU = $_POST["nombreU"];
$nombreP = $_POST["nombreP"];
$comentario = $_POST["comentario"];

$foto_nombre = $_FILES["foto"]["name"];
$foto_tmp = $_FILES["foto"]["tmp_name"];
$foto_destino = "fotoR/" . $foto_nombre;

move_uploaded_file($foto_tmp, $foto_destino);

$insertar = "INSERT INTO resena(nombreU, nombreP,comentario,foto) VALUES ('$nombreU', '$nombreP', '$comentario', '$foto_destino')";


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