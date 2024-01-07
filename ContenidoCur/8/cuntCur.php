<?php

    require '../../config/config.php';
    require '../../config/ConeccionDB.php';
    $db = new Database();
    $con = $db->conectar();

    $id = isset($_GET['id_Cur']) ? $_GET['id_Cur'] : '';
    $token = isset($_GET['token']) ? $_GET['token'] : '';

    if($id == '' || $token == ''){
        echo 'Error al procesar la peticion';
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
        <title>OFFICE 365</title>
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
              <div class="Titulo"><h1>OFFICE 365</h1></div>
               <h3>Tema 1: Introducción a Office 365</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Qué es Office 365:</dt>
                   <dd>•	Office 365 es una suite de aplicaciones en la nube que incluye programas como Word, Excel y PowerPoint, permitiendo crear, editar y compartir documentos desde cualquier dispositivo.</dd>
                   <div class="linea"></div>
                   <dt>2.	Beneficios de Usar Office 365:</dt>
                   <dd>•	Acceso a herramientas de productividad desde cualquier lugar. Colaboración en tiempo real con otras personas en documentos compartidos.</dd>
                 </dl>

               <h3>Tema 2: Accediendo y Configurando tu Cuenta de Office 365</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Acceder a Office 365:</dt>
                   <dd>•	Visita el sitio web de Office 365 e inicia sesión con tu cuenta o crea una nueva.</dd>
                   <div class="linea"></div>
                   <dt>2.	Configuración Inicial:</dt>
                   <dd>•	Personaliza tu experiencia ajustando la configuración de la cuenta y la interfaz según tus preferencias.</dd>
                   <div class="imagen">
                       <iframe width="560" height="315" src="https://www.youtube.com/embed/1ULs-lfZzIw?si=hcrHgTRl0kVSBvBX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                   </div>
                   </dl>

               <h3>Tema 3: Navegando por la Interfaz de Office 365</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Inicio y Aplicaciones:</dt>
                   <dd>•	Explora la página de inicio de Office 365. Accede a las aplicaciones como Word, Excel y PowerPoint.</dd>
                   <dd>•	En la página de inicio, encontrarás iconos de aplicaciones como Word. Haz clic en un ícono para abrir la aplicación correspondiente.</dd>
                   <dd>•	Práctica: Abre Word desde la página de inicio y explora las funciones básicas.</dd>
                   <div class="linea"></div>
                   <dt>2.	OneDrive y Almacenamiento en la Nube:</dt>
                   <dd>•	Comprende el uso de OneDrive para almacenar y sincronizar tus documentos en la nube.</dd>
                   <dd>•	Accede a OneDrive desde la página de inicio para ver y gestionar tus documentos almacenados en la nube.</dd>
                   <dd>•	Práctica: Sube un documento a OneDrive y explora las opciones de sincronización.</dd>
                   <div class="imagen">
                       <iframe width="560" height="315" src="https://www.youtube.com/embed/NgOe6maeurY?si=QkBLGE3LlD8C22tM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                   </div>
                </dl>
                   
                   <h3>Tema 4: Creando Documentos con Word</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Crear un Nuevo Documento:</dt>
                   <dd>•	Abre Word, haz clic en "Nuevo" y selecciona "Documento en blanco" para comenzar.</dd>
                   <dd>•	Práctica: Crea un documento simple con un título y un párrafo.</dd>
                   <div class="linea"></div>
                   <dt>2.	Editar y Formatear Texto:</dt>
                   <dd>•	Explora las opciones de edición y formato de texto en Word.</dd>
                   <dd>•	Selecciona texto para cortar, copiar o cambiar formato utilizando las opciones en la barra de herramientas.</dd>
                   <dd>•	Práctica: Experimenta con diferentes formatos de texto en tu documento.</dd>
               </dl>
                   
               <h3>Tema 5: Trabajando con Hojas de Cálculo en Excel</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Crear una Nueva Hoja de Cálculo:</dt>
                   <dd>•	Inicia una nueva hoja de cálculo en Excel.</dd>
                   <dd>•	Abre Excel, selecciona "Nuevo" y elige "Libro de trabajo en blanco".</dd>
                   <dd>•	Práctica: Crea una hoja de cálculo con una lista simple de datos.</dd>
                   <div class="linea"></div>
                   <dt>2.	Fórmulas y Funciones Básicas:</dt>
                   <dd>•	Introduce fórmulas en celdas para realizar cálculos simples como sumas y promedios.</dd>
                   <dd>•	Práctica: Realiza una fórmula que sume una columna de números.</dd>
                   </dl>
               
               <h3>Tema 6: Creando Presentaciones con PowerPoint</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Iniciar una Nueva Presentación:</dt>
                   <dd>•	Abre PowerPoint, haz clic en "Nuevo" y selecciona "Presentación en blanco".</dd>
                   <dd>•	Práctica: Crea una diapositiva de título y una diapositiva de contenido.</dd>
                   <div class="linea"></div>
                   <dt>2.	Diseño y Transiciones:</dt>
                   <dd>•	Explora las opciones de diseño y transiciones en PowerPoint.</dd>
                   <dd>•	Selecciona un diseño de diapositiva y configura transiciones entre diapositivas.</dd>
                   <dd>•	Práctica: Aplica un diseño y una transición a tu presentación.</dd>
               </dl>
               
               <h3>Tema 7: Colaboración y Compartir Documentos en Office 365</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Compartir Documentos:</dt>
                   <dd>•	Abre un documento, haz clic en "Compartir" y selecciona usuarios con los que compartir.</dd>
                   <dd>•	Práctica: Comparte un documento de Word con un amigo y permítele editar.</dd>
                   <div class="linea"></div>
                   <dd>•	Práctica: Silencia un chat que no quieres que te moleste.</dd>
                   <dt>2.	Colaboración en Tiempo Real:</dt>
                   <dd>•	Dos o más personas pueden editar un documento simultáneamente. Las ediciones se sincronizan en tiempo real.</dd>
                   <dd>•	Práctica: Colabora en un documento compartido con otro usuario.</dd>
                   <div class="imagen">
                       <iframe width="560" height="315" src="https://www.youtube.com/embed/X-Q7_1rZrDU?si=Vv6yYz4tF5DJA0iX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                   </div>
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