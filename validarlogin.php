<?php
require "conexion.php";

$usuarioLog = addslashes($_POST["usuarioLog"]);
$contra = addslashes($_POST["contra"]);

$comparar = "SELECT * FROM users WHERE usuarioLog='$usuarioLog' AND contra='$contra'";

$resultado = mysqli_query($conectar, $comparar);

if (mysqli_num_rows($resultado)> 0) {
    session_start();
    $_SESSION["autentificado"] = "SI";
    header("Location: indexadmin.php");
} else {
  echo '
      <script>
      alert("ERROR EN LA AUTENTIFICACION");
      location.href = "login.php?errorusuario=SI";
      </script>
      ';
}
mysqli_free_result($resultado);
mysqli_close($conectar);

?>