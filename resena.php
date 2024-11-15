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
    include "header.php"
    ?>
    <br><br>
    <div class="contact-form">
  <span class="heading">COMPARTA SU RESEÑA DEL PRODUCTO</span>
  <br>
  <form action="guardarR.php" method="post" name="form_resena" enctype="multipart/form-data">
    <label for="">Nombre del cliente:</label>
    <input type="text" name="nombreU" required="">
    <label for="">Nombre Producto:</label>
    <input type="text" id="email" name="nombreP" required="">
    <label for="">Reseña:</label>
    <textarea name="comentario" required=""></textarea>
    <label for="">Adjunte imagen del producto:</label>
  <input type="file" name="foto" accept="image/*">
    <button type="submit">ENVIAR</button>
  </form>
</div>
<br><br>
<div class="btnInc">
    <a href="index.php"><button>REGRESAR AL INICIO</button></a>
</div>
<?php
    include "footer.php"
    ?>
</body>
</html>


