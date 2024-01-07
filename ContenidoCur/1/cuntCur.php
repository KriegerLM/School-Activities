<?php

    require '../../config/config.php';
    require '../../config/ConeccionDB.php';
    $db = new Database();
    $con = $db->conectar();

    $id = isset($_GET['id_Cur']) ? $_GET['id_Cur'] : '';
    $token = isset($_GET['token']) ? $_GET['token'] : '';

    if($id == '' || $token == ''){
        echo 'Error al procesar la peticions';
        exit;
    } else {
        
        $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);
        
        if($token == $token_tmp){
            
            $sql = $con->prepare("SELECT count(id_Cur) FROM curso WHERE id_Cur=?");
            $sql->execute([$id]);
            if($sql->fetchColumn() > 0) {
                
                $sql = $con->prepare("SELECT Nombre_Cur, Descripcion_cur FROM curso WHERE id_Cur=?");
                $sql->execute([$id]);
                $row = $sql->fetch(PDO::FETCH_ASSOC);
                $nombre = $row['Nombre_Cur'];
                $descripcion = $row['Descripcion_cur'];
                
            }
            $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
            
        } else {
            echo 'Error al procesar la peticion';
            exit;
        }
    }

?>



<!DOCTYPE html>
<html>
    <head>
        <title>PARTES DE UNA COMPUTADORA</title>
        <meta charset="utf-8">
        <link rel="website icon" type="jfif" href="../../Imagenes/TechSchool.jfif">
        <link href="../../css3/ContCurso.css" rel="stylesheet">
    </head>
    <body>
        <!--Cabecera+++++++++++++++++++++++++++++++++++++++-->
        <div class="menSup">
            <?php include('MenuSup.php'); ?>
        </div>
        <!--Cuerpo++++++++++++++++++++++++++++++++++++++++-->
        <div class="ConGen">
           <div class="cuerpo">
              <div class="Titulo"><h1>PARTES DE UNA COMPUTADORA</h1></div>
               <h3>Tema 1: Bienvenidos a la Tecnología</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Introducción a la Computadora:</dt>
                   <dd>•	La computadora es una herramienta electrónica que nos ayuda en diversas tareas. Es como tener un asistente personal digital.</dd>
                   <div class="linea"></div>
                   <dt>2.	Importancia de Aprender Tecnología:</dt>
                   <dd>•	Aprender a usar la tecnología mejora la comunicación, permite acceder a información rápidamente y nos conecta con amigos y familiares.</dd>
               </dl>
               <h3>Tema 2: Conociendo la Computadora de Cerca</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	La "Caja" Mágica:</dt>
                   <dd>•	La torre de la computadora es como la caja mágica que contiene el cerebro de la máquina llamado CPU, encargado de procesar la información.</dd>
                   <div class="imagen">
                       <img class="cpu" src="cpu.png">
                   </div>
                   <div class="linea"></div>
                   <dt>2.	Memoria:</dt>
                   <dd>•	La memoria RAM es como la memoria a corto plazo en el cerebro humano. Guarda información temporalmente mientras usas la computadora.</dd>
                   <div class="linea"></div>
                   <dt>3.	Almacenamiento: Disco Duro y SSD:</dt>
                   <dd>•	El disco duro y el SSD son como la memoria a largo plazo de la computadora, almacenando datos incluso cuando está apagada.</dd>
               </dl>
               <h3>Tema 3: Partes Externas y Accesorios Prácticos</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Pantalla y Monitor:</dt>
                   <dd>•	La pantalla es nuestra ventana al mundo digital. El monitor muestra la información de manera visual.</dd>
                   <div class="imagen">
                       <img class="cpu" src="monitor.png">
                   </div>
                   <div class="linea"></div>
                   <dt>2.	Teclado y Ratón:</dt>
                   <dd>•	El teclado y el ratón son como nuestras herramientas de escritura y apuntar en el mundo digital, permitiéndonos interactuar.</dd>
                   <div class="linea"></div>
                   <div class="imagen">
                       <img class="cpu" src="TecladoRaton.jpg">
                   </div>
                   <dt>3.	Sonido: Altavoces y Auriculares:</dt>
                   <dd>•	Los altavoces y auriculares actúan como los "oídos" de la computadora, permitiéndonos escuchar sonidos y música.</dd>
                   <div class="imagen">
                       <img class="cpu" src="altavoz.png">
                       <img class="cpu" src="audifono.png">
                   </div>
               </dl>
               <h3>Tema 4: Conexiones y Puertos Amigables</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Puertos USB:</dt>
                   <dd>•	Los puertos USB son como enchufes que permiten conectar dispositivos externos como impresoras, cámaras y memorias USB.</dd>
                   <div class="linea"></div>
                   <dt>2.	Puertos de Audio:</dt>
                   <dd>•	Los puertos de audio nos permiten conectar auriculares y altavoces para disfrutar de sonidos y música.</dd>
                   <div class="imagen">
                       <img class="cpu" src="PuesrtoUsb.jpg">
                   </div>
               </dl>
               <h3>Tema 5: Herramientas para la Vida Diaria</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Impresora:</dt>
                   <dd>•	La impresora es como una herramienta para obtener copias en papel de documentos digitales, como fotos o textos.</dd>
                   <div class="imagen">
                       <img class="imag" src="impresora.jpg">
                   </div>
                   <div class="linea"></div>
                   <dt>2.	Cámara Web:</dt>
                   <dd>•	La cámara web es como los "ojos" de la computadora, permitiéndonos hacer videollamadas y tomar fotos.</dd>
                   <div class="imagen">
                       <img class="cpu" src="camaraC.png">
                       <img class="cpu" src="camaraLap.jpg">
                   </div>
               </dl>
               <h3>Tema 6: Sistema Operativo y Programas Útiles</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Sistema Operativo:</dt>
                   <dd>•	El sistema operativo es como el director de una orquesta que coordina todas las operaciones de la computadora, como Windows o macOS.</dd>
                   <div class="linea"></div>
                   <dt>2.	Programas y Aplicaciones:</dt>
                   <dd>•	Los programas son herramientas específicas que realizan tareas, como procesadores de texto, navegadores web o aplicaciones de fotos.</dd>
               </dl>
               <h3>Tema 7: Manteniendo tu Computadora Feliz y Segura</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Actualizaciones y Seguridad:</dt>
                   <dd>•	Las actualizaciones son como mejoras para la computadora. Es importante instalarlas. Los programas antivirus ayudan a mantener la computadora segura.</dd>
                   <div class="linea"></div>
                   <dt>2.	Respaldos de Datos:</dt>
                   <dd>•	Hacer respaldos periódicos de datos importantes en unidades externas ayuda a evitar pérdidas de información en caso de problemas.</dd>
               </dl>
               <div class="conBotons">
                   <div class="botons">
                      <a href="../../Catalogo.php">Regresar al Catalogo</a>
                   </div>
                   <div class="botons">
                      <a href="../../index.php">Regresar al Inicio</a>
                   </div>
               </div>
           </div>
        </div>
        <!--Footer+++++++++++++++++++++++++++++++++++++++++++++++-->
        <div class="footer">
            <?php include('Pie.php'); ?>
        </div>
    </body>
</html>






















