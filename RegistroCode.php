<?php

    include('Coneccion.php');

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $query = "INSERT INTO usuario(Nombre, Correo, Password) VALUES('$nombre', '$correo', '$password')";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo'<script>
                alert("Usuario registrado exitosamente");
                window.location = "InicioSec.php";
            </script>';
        exit;
    }
exit;

?>