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
        <title>Catalogo</title>
        <meta charset="utf-8">
        <link rel="website icon" type="jfif" href="Imagenes/TechSchool.jfif">
        <link href="css3/catalogo.css" rel="stylesheet">
    </head>
    <body>
       <!--Cabecera+++++++++++++++++++++++++++++++++++++++-->
            <div class="menSup">
                <?php include('MenuSup.php'); ?>
            </div>
        <!--Catalogo++++++++++++++++++++++++++++++++++++++-->
        <div class="ConGen">
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
               <h5><?php echo $row['Descripcion_cur']; ?></h5>
               <div class="botons">
                  <a href="<?php echo $ContenidoCur; ?>?id_Cur=<?php echo $row['id_Cur']; ?>&token=<?php echo hash_hmac('sha1', $row['id_Cur'],KEY_TOKEN); ?>">Iniciar</a>
               </div>
            </div>
            <?php } ?>
        </div>
        <!--Footer+++++++++++++++++++++++++++++++++++++++++++++++-->
        <div class="footer">
            <?php include('Pie.php'); ?>
        </div>
    </body>
</html>