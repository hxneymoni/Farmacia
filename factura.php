<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>

    <script>
         function valida_envio() {
      if(document.form_factura.nombreF.value.length==0){
          alert("Argegue su nombre(s):")
          document.form_factura.nombre.focus()
          return 0;
        }
        if(document.form_factura.apellidoF.value.length==0){
          alert("Argegue su apellido:")
          document.form_factura.apellido.focus()
          return 0;
        }
        if(document.form_factura.email.value.length==0){
          alert("Argegue su email:")
          document.form_factura.email.focus()
          return 0;
        }
        if(document.form_factura.rfc.value.length==0){
          alert("Argegue su RFC:")
          document.form_factura.celular.focus()
          return 0;
        }
        if(document.form_factura.tel.value.length==0){
          alert("Argegue su Telefono:")
          document.form_factura.parentesco.focus()
          return 0;
        }
        alert("SE ENVÍO CORREO PARA QUE NOS CONTACTEMOS CON USTED")
        document.form_factura.submit();
    }
    </script>
</head>
<body>
<?php
    include "header.php"
    ?>
    <br><br>

    <div class="contF">
    <form action="guardarF.php" method="post" name="form_factura" class="form">
    <p class="title">SOLICITUD DE FACTURA</p>
    <p class="message">Por favor ingrese los datos correspondientes para su factura </p>
        <div class="flex">
        <label>
            <input required="" placeholder="" type="text" name="nombreF" class="input">
            <span>NOMBRES</span>
        </label>

        <label>
            <input required="" placeholder="" type="text" name="apellidoF"  class="input">
            <span>APELLIDOS</span>
        </label>
    </div>  
            
    <label>
        <input required="" placeholder="" type="email" name="email"  class="input">
        <span>EMAIL</span>
    </label> 
        
    <label>
        <input required="" placeholder="" type="text" name="rfc"  class="input">
        <span>RFC</span>
    </label>
    <label>
        <input required="" placeholder="" type="text" name="tel" class="input">
        <span>TELEFONO</span>
    </label>
    <button onclick="valida_envio()" class="submit">ENVIAR SOLICITUD</button>
</form>
    </div>
<br><br>
<div class="btnInc">
    <a href="index.php"><button>REGRESAR AL INICIO</button></a>
</div>
<br><br>
<?php
    include "footer.php"
    ?>
</body>
</html>
