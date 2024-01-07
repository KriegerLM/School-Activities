<?php

    require 'config/config.php';
    require 'config/ConeccionDB.php';
    $db = new Database();
    $con = $db->conectar();

    $sql = $con->prepare("SELECT id_Cur, Nombre_Cur, Descripcion_cur FROM curso");
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
                        <?php
                            $id = $row['id_Cur'];
                            $imagen = "Imagenes/curso/" . $id . "/FotoPrin.png";
    
                            if(!file_exists($imagen)){
                                $imagen = "Imagenes/No-Foto.png";
                            }
                        ?>
                            
                        <?php
                            $id = $row['id_Cur'];
                            $ContenidoCur = "ContenidoCur/" . $id . "/cuntCur.php";
    
                            if(!file_exists($ContenidoCur)){
                                $ContenidoCur = "Catalogo.php";
                            }
                        ?>
                        <img class="imag" src="<?php echo $imagen; ?>">
                        <h4><?php echo $row['Nombre_Cur']; ?></h4>
                        <div class="botons">
                            <a href="<?php echo $ContenidoCur; ?>?id_Cur=<?php echo $row['id_Cur']; ?>&token=<?php echo hash_hmac('sha1', $row['id_Cur'],KEY_TOKEN); ?>">Continuar</a>
                        </div>
                    </div>
                    <?php } ?>
               </div>
            </div>
            <!--Footer+++++++++++++++++++++++++++++++++++++++++++++++-->
            <div class="footer">
                <?php include('Pie.php'); ?>
            </div>
        </div>
    </body>
</html>