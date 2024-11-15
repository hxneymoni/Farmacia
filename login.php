<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<?php
    include "header.php"
    ?>
    <br><br>

    <div class="contLogin">
    <div class="body">
        <div class="container">
            <form action="validarlogin.php" method="post">
                <div class="head">
                    <span>INICIAR SESIÓN</span>
                    <p>Ingrese los datos para iniciar sesión</p>
                </div>
                <div class="inputs">
                    <input type="text" name="usuarioLog" placeholder="Usuario">
                    <input type="password" name="contra" placeholder="Contraseña">
                </div>
                <button type="submit" type="submit">Iniciar Sesión</button>
            </form>
    
        </div>

    </div>
    <br><br>
    </div>
    <?php
    include "footer.php"
    ?>
</body>
</html>