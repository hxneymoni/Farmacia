<?php
include "seguridad.php";
?>
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
    include "headeradmin.php"
    ?>
    <br>
    <div class="contLogin">
    <div class="body">
        <div class="container">
            <form action="guardaU.php" method="post">
                <div class="head">
                    <span>AGREGAR NUEVO USUARIO</span>
                    <p>Ingrese los datos del nuevo usuario</p>
                </div>
                <div class="inputs">
                    <input type="text" name="usuarioLog" placeholder="Usuario">
                    <input type="text" name="contra" placeholder="Contraseña">
                </div>
                <button type="submit" type="submit">GUARDAR USUARIO</button>
            </form>
    
        </div>

    </div>
    <div class="btnInc">
    <a href="indexadmin.php"><button>REGRESAR AL INICIO</button></a>
</div>
<br><br>
    <?php
    include "footer.php"
    ?>
</body>
</html>