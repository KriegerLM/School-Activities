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
        <title>Instagram</title>
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
              <div class="Titulo"><h1>Instagram</h1></div>
               <h3>Tema 1: Introducción a Instagram</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	¿Qué es Instagram?</dt>
                   <dd>•	Instagram es una aplicación para compartir fotos y videos. Para empezar, descarga la aplicación desde la tienda de aplicaciones en tu dispositivo (App Store para iPhone o Google Play para Android)..</dd>
                   <div class="linea"></div>
                   <dt>2.	Beneficios de Usar Instagram:</dt>
                   <dd>•	Una vez instalada, abre la aplicación y toca "Registrarse" para crear una cuenta. Ingresa tu dirección de correo electrónico, crea un nombre de usuario y una contraseña.</dd>
               </dl>
               
               <h3>Tema 2: Creando y Configurando tu Cuenta</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Descargar e Instalar la Aplicación:</dt>
                   <dd>•	Dirígete a la tienda de aplicaciones de tu dispositivo (App Store o Google Play).</dd>                   
                   <dd>•	Busca "Instagram" y toca "Instalar".</dd>
                   <div class="linea"></div>
                   <dt>2.	Crear tu Cuenta:</dt>
                   <dd>•	Abre la aplicación y toca "Registrarse".</dd>
                   <dd>•	Ingresa tu correo electrónico, crea un nombre de usuario y una contraseña.</dd>
                   <dd>•	Completa tu perfil con una foto de perfil y una breve descripción.</dd>
                </dl>

               <h3>Tema 3: Navegación por la Plataforma</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Explorando el Feed</dt>
                   <dd>•    Al iniciar sesión, verás tu feed con fotos y videos de las personas que sigues.</dd>
                   <dd>•	Desplázate hacia arriba para ver más publicaciones.</dd>
                   <div class="linea"></div>
                   <dt>2.	Historias de Instagram:<dt>
                   <dd>•	En la parte superior, observarás círculos. Estos son "Historias". Toca en uno para ver fotos y videos temporales.</dd>
                </dl>

                   <h3>Tema 4: Conectando con Otros Usuarios</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Seguir a Otros:</dt>
                   <dd>•	Busca amigos tocando la lupa en la parte inferior.</dd>
                   <dd>•	Toca "Seguir" en las cuentas que te interesen.</dd>
                   <div class="linea"></div>
                   <dt>2.	Interactuar con Publicaciones:</dt>
                   <dd>•	Toque el ícono de corazón para dar "Me Gusta".</dd>
                   <dd>•	Toca el icono de mensaje para comentar</dd>
               </dl>
                   
               <h3>Tema 5: Compartiendo tus Propias Historias y Publicaciones</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Publicar Fotos y Videos:</dt>
                   <dd>•	En tu perfil, toca el "+" para agregar una foto o video.</dd>
                   <dd>•	Selecciona el contenido y agrega una descripción.</dd>
                   <div class="imagen">
                       <iframe width="560" height="315" src="https://www.youtube.com/embed/RORibqHmMtc?si=e0Up6WMH4Uy5ClF0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                   </div>
                   <div class="linea"></div>
                   <dt>2.	Utilizar Etiquetas (Hashtags):</dt>
                   <dd>•	En la descripción, usa hashtags (#) para categorizar tu publicación.</dd>
               </dl>
               <h3>Tema 6:  Comunicación en Instagram</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Enviar Mensajes Directos:</dt>
                   <dd>•	Toca el ícono de avión de papel para enviar mensajes directos.</dd>
                   <dd>•	Selecciona un contacto y escribe tu mensaje.</dd>
                   <div class="linea"></div>
                   <dt>2.	Explorar la Sección de Descubrimiento:</dt>
                   <dd>•	Toca la lupa para explorar contenido popular.</dd>
               </dl>
               
               <h3>Tema 7: Configuración y Seguridad</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Configuración de la Cuenta:</dt>
                   <dd>•	Toca las tres líneas en la esquina superior derecha, luego "Configuración".</dd>
                   <dd>•	Ajusta la privacidad, notificaciones y otras preferencias.</dd>
                   <div class="linea"></div>
                   <dt>2.	Mantener la Seguridad:</dt>
                   <dd>•	Usa contraseñas fuertes y habilita la autenticación de dos factores.</dd>
                   <div class="imagen">
                       <iframe width="560" height="315" src="https://www.youtube.com/embed/4ChqJ9AaTqU?si=b-uHj8ZW4PnbB1xj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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






















