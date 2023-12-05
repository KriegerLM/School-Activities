<?php

    session_start();

    include('Coneccion.php');

    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $validaLog = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo ='$correo' and Password ='$password'");

    if(mysqli_num_rows($validaLog) > 0){
        $_SESSION['usuario'] = $correo;
        header("location: Index.php");
        exit;
    }else{
        echo '
            <script>
                alert("Usuario no existente, por favor verifique los datos ingresados");
                window.location = "../InicioSec.php";
            </script>
        ';
        exit;
    }

?>