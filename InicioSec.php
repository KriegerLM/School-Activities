<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: Index.php");
    }

?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css3/registro.css">
        <link rel="website icon" type="jfif" href="Imagenes/TechSchool.jfif">
        <title>Inicio de Sección</title>
    </head>
    <body>
       <?php if(!empty($messege)) : ?>
       <p><?= $messege ?></p>
       <?php endif; ?>
       
        <form action="IniCode.php" method="post" class="form-register">
          <h1>TechSchool</h1>
           <h4>Inicio de Sección</h4>
            <input class="controls" type="email" name="correo" placeholder="Ingrese su Correo" required>
            <input class="controls" type="password" name="password" placeholder="Ingrese su contraseña" required>
            <input class="botons" type="submit" value="Iniciar">
            <div class="botons-toRe"><a href="Registro.php">¿Aun no tienes una cuenta?</a></div>
        </form>
    </body>
</html>