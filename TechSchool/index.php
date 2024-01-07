<?php

    require 'config/config.php';
    require 'config/ConeccionDB.php';
    $db = new Database();
    $con = $db->conectar();

    $sql = $con->prepare("SELECT id_usuario, id_curso FROM relacion");
    $sql->execute();
    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
   <head>
        <title>TechSchool</title>
        <link rel="website icon" type="jfif" href="Imagenes/TechSchool.jfif">
        <link href="css3/indecss.css" rel="stylesheet">
    </head>
    <body>
        <div class="congen">
            <!--Cabecera+++++++++++++++++++++++++++++++++++++++-->
            <div class="menSup">
                <?php include('MenuSup.php'); ?>
            </div>
            <!--Cuerpo++++++++++++++++++++++++++++++++++++++-->
            <div class="conSup">
                <div class="usuario">
                    <h1>Bienvenido de vuelta</h1>
                    <img class="fotoUsu" src="Imagenes/fotoUsuario.jfif">
                    <p>Usuario</p>
                </div>
                <div class="conD">
                    <p><a href="CerrarSes.php">Cerrar Sesión</a></p>
                    <!--Agregar contenido (aun en discucion)-->
                </div>
            </div>
            <!--Galeria dinamica de los cursos para acceso directo-->
            <div class="conIn">
                <h2>Mis cursos</h2>
                <div class="conCur">
                    <?php foreach($resultado as $row) { ?>
                    <div class="curso">
                       <!--Impresion de imagen+++++++++++++++++++++-->
                        <?php
                            $id = $row['id_curso'];
                            $imagen = "Imagenes/curso/" . $id . "/FotoPrin.png";
    
                            if(!file_exists($imagen)){
                                $imagen = "Imagenes/No-Foto.png";
                            }
                        ?>
                        <!--Condicion para que el boton te mande al curso correspondiente-->
                        <?php
                            $id = $row['id_curso'];
                            $ContenidoCur = "ContenidoCur/" . $id . "/cuntCur.php";
    
                            if(!file_exists($ContenidoCur)){
                                $ContenidoCur = "Catalogo.php";
                            }
                        ?>
                        <img class="imag" src="<?php echo $imagen; ?>">
                        <div class="botons">
                            <a href="<?php echo $ContenidoCur; ?>?id_Cur=<?php echo $row['id_curso']; ?>&token=<?php echo hash_hmac('sha1', $row['id_curso'],KEY_TOKEN); ?>">Continuar</a>
                        </div>
                    </div>
                    <?php }?>
               </div>
            </div>
            <!--Footer+++++++++++++++++++++++++++++++++++++++++++++++-->
            <div class="footer">
                <?php include('Pie.php'); ?>
            </div>
        </div>
    </body>
</html>