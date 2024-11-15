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
    <br>

    <div class="contPromo">
    <div class="titulo">
        <img src="recursos/titulo1.png" alt="">
    </div>
    <div class="logo2">
        <img src="recursos/logo.png" alt="">
        </div>
    </div>
    

    <div class="scroll-container">
  <div class="scroll-content">
    <!-- Imágenes para el scroll automático -->
    <div class="scroll-item">
      <img src="promos/promo1.jpg" alt="Imagen 1" style="width:100%">
    </div>

    <div class="scroll-item">
      <img src="promos/promo2.png" alt="Imagen 2" style="width:100%">
    </div>

    <div class="scroll-item">
      <img src="promos/promo3.jpg" alt="Imagen 3" style="width:100%">
    </div>

    <div class="scroll-item">
      <img src="promos/promo4.png" alt="Imagen 3" style="width:100%">
    </div>

    <div class="scroll-item">
      <img src="promos/promo5.jpg" alt="Imagen 3" style="width:100%">
    </div>

    <div class="scroll-item">
      <img src="promos/promo6.webp" alt="Imagen 3" style="width:100%">
    </div>

    <div class="scroll-item">
      <img src="promos/promo7.png" alt="Imagen 3" style="width:100%">
    </div>

    <div class="scroll-item">
      <img src="promos/promo8.jpg" alt="Imagen 3" style="width:100%">
    </div>
  </div>
</div>
<br>
<div class="contT2" id="nosotros">
    <h1>✤ Una Farmacia Que Marca..</h1>
</div>
<div class="contVideo" >
  <div class="frame">
  <iframe src="https://www.youtube.com/embed/bNpeHcqGF18" title="Una Farmacia que Marca - Capítulo 3 Servicios Profesionales Farmacéuticos" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>
  <div class="info">
    <h2>¡Descubre Hello Farmacia!</h2>
    <br><br>
    <p>Con más de dos décadas de compromiso inquebrantable con la salud y el bienestar de nuestra comunidad, Hello Farmacia se erige como un faro confiable de atención farmacéutica. Desde nuestros modestos inicios hasta convertirnos en un pilar esencial en la vida de quienes nos eligen, hemos cultivado una trayectoria llena de pasión por el servicio y la excelencia.</p>
    <br><br>
    <p>En cada paso de nuestro camino, nos hemos esforzado por proporcionar no solo medicamentos de calidad, sino también un ambiente acogedor donde cada cliente se sienta como en casa. Nuestro equipo de farmacéuticos altamente capacitados está siempre dispuesto a brindar asesoramiento personalizado, responder preguntas y ofrecer soluciones adaptadas a las necesidades individuales de cada persona.</p>
  </div>
</div>
<br>
<br>
<div class="contMaps">
  <h1>➜ENCUENTRANOS EN:</h1>
  <br>
</div>
<br>
<div class="mapa">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.166757163362!2d-89.63535222468914!3d20.985951580652763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5673fad2aee3b7%3A0x33127877ed51b4f8!2sFarmacias%20Similares!5e0!3m2!1ses-419!2smx!4v1702254578476!5m2!1ses-419!2smx" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <br>
    <div class="pedido">
      <h1>✭¿Como relizar un pedido a domicilio?✭</h1>
    </div>
  <div class="contenedor-padre">
  <div class="bloque-hijo">
    <img src="recursos/kreceta.jpg" alt="Imagen 1">
    <p>1.-Tener a la mano su receta médica</p>
  </div>

  <div class="bloque-hijo">
    <img src="recursos/ktel.png" alt="Imagen 2">
    <p>2.-Llamar al 999-329-2792</p>
  </div>

  <div class="bloque-hijo">
    <img src="recursos/kmoto.jpg" alt="Imagen 3">
    <p>3.-Proporcione su nombre y dirección,se le dara costo y tiempo de envio</p>
  </div>
</div>
<br><br>
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
<br>
  <?php
    include "footer.php"
    ?>


</body>
</html>