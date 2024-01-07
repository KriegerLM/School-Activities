<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css3/registro.css">
        <link rel="website icon" type="jfif" href="Imagenes/TechSchool.jfif">
        <title>Formulario Registro</title>
    </head>
    <body>
        <form action="RegistroCode.php" method="post" class="form-register">
          <h1>TechSchool</h1>
          <br>
           <h4>Formulario Registro</h4>
            <input class="controls" type="text" name="nombre" placeholder="Ingrese su nombre" required>
            <input class="controls" type="email" name="correo" placeholder="Ingrese su Correo" required>
            <input class="controls" type="password" name="password" placeholder="Ingrese su contraseña" required>
            <button class="botons">Registrar</button>
            <div class="botons"><a href="InicioSec.php">Ya tengo una cuenta</a></div>
        </form>
    </body>
</html>