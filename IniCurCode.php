<?php

    session_start();

    include('Coneccion.php');

    $nombre = $_POST['Nombre_Cur'];
    $imagen = $_POST['Imagen'];

    $validaLog = mysqli_query($conexion, "SELECT * FROM curso WHERE Nombre_Cur ='$nombre' and Imagen ='$imagen'");

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