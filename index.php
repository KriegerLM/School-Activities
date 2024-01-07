<?php

    require 'config/config.php';
    require 'config/ConeccionDB.php';
    $db = new Database();
    $con = $db->conectar();

    $sql = $con->prepare("SELECT id_Cur, Nombre_Cur, Descripcion_cur FROM recomendados");
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
                <div class="card">
                    <div class="bg"><p>¡Bienvenido a nuestra plataforma de cursos de tecnología para adultos mayores! Enfocados en hacer que la tecnología sea accesible y divertida, ofrecemos programas diseñados para brindar habilidades digitales prácticas y promover la confianza en el uso de dispositivos y aplicaciones. Descubre un viaje educativo amigable y personalizado, adaptado a tus necesidades y ritmo. ¡Empecemos a explorar el fascinante mundo digital juntos!</p>
                    <p>A continuacion te ofrecemos algunas opciones de los cursos con los que te recomendamos empezar</p>
                    </div>
                    <div class="blob"></div>
                </div>

                <div class="conD">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/WgC4kHH3CFc?autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
            <!--Galeria dinamica de los cursos para acceso directo-->
            <div class="conIn">
                <h2>Cursos recomendados</h2>
                <div class="conCur">
                    <?php foreach($resultado as $row) { ?>
                    <div class="curso">
                       <!--Impresion de imagen+++++++++++++++++++++-->
                        <?php
                        $id = $row['id_Cur'];
                        $imagen = "Imagenes/curso/" . $id . "/FotoPrin.png";
    
                        if(!file_exists($imagen)){
                            $imagen = "Imagenes/No-Foto.png";
                        }                            
                        ?>
                        <!--Condicion para que el boton te mande al curso correspondiente-->
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