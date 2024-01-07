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
        <title>Twitter/X</title>
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
              <div class="Titulo"><h1>Twitter/X</h1></div>
               <h3>Tema 1: Introducción a Twitter/X</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Qué es Twitter:</dt>
                   <dd>•	Twitter/X es una aplicación que te permite compartir pensamientos y seguir a otras personas para mantenerte informado. Descarga la aplicación desde la tienda de aplicaciones de tu dispositivo.</dd>
                   <div class="linea"></div>
                   <dt>2.	Beneficios de Usar Twitter/X</dt>
                   <dd>•	Abre la aplicación después de instalarla y toca "Registrarse" para crear tu cuenta. Ingresa tu información, como tu nombre y número de teléfono.</dd>
                 </dl>

               <h3>Tema 2: Creando y Configurando tu Cuenta</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Descargar e Instalar la Aplicación:</dt>
                   <dd>•	Busca "Twitter" o “X” en la tienda de aplicaciones de tu dispositivo (App Store o Google Play) y descárgala. Luego, instálala siguiendo las instrucciones.</dd>
                   <div class="linea"></div>
                   <dt>2.	Crear tu Cuenta:</dt>
                   <dd>•	Abre la aplicación, toca "Registrarse" y completa la información solicitada, como nombre, número de teléfono o correo electrónico, y crea una contraseña.</dd>
                   <div class="imagen">
                       <iframe width="560" height="315" src="https://www.youtube.com/embed/60J1_IrlQUA?si=lZJ2eIuxhgRmKbIv" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                   </div>
                   </dl>

               <h3>Tema 3: Navegación por la Plataforma</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Explorar el Timeline:</dt>
                   <dd>•	Al abrir la aplicación, estarás en tu "Timeline". Desplázate hacia abajo para ver los tweets más recientes de las personas que sigues.</dd>
                   <div class="linea"></div>
                   <dt>2.	Interactuar con Tweets:</dt>
                   <dd>•	Toca el corazón para dar "Me Gusta", el ícono de conversación para comentar y la flecha para retuitear. Estas son formas de interactuar con los tweets.</dd>
                </dl>
                   
                   <h3>Tema 4: Conectando con Otros Usuarios</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Seguir a Otros:</dt>
                   <dd>•	Toca la lupa en la parte inferior para buscar personas o temas de interés. Después de encontrar alguien interesante, toca "Seguir".</dd>
                   <div class="linea"></div>
                   <dt>2.	Interactuar con Seguidores:</dt>
                   <dd>•	Cuando alguien te siga, puedes ver sus tweets en tu Timeline. Puedes responder a sus tweets o retuitearlos.</dd>
               </dl>
                   
               <h3>Tema 5: Compartiendo tus Pensamientos en Tweets</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Publicar Tweets:</dt>
                   <dd>•	Toca el ícono de pluma en la parte inferior para crear un tweet. Escribe tu mensaje y toca "Tweet" para compartirlo.</dd>
                   <div class="linea"></div>
                   <dt>2.	Usar Hashtags y Menciones:</dt>
                   <dd>•	Utiliza hashtags (#) para categorizar tus tweets y menciona a otros usuarios usando el símbolo @ seguido de su nombre de usuario.</dd>
                   <div class="imagen">
                       <iframe width="560" height="315" src="https://www.youtube.com/embed/LDWAJ-4SFBA?si=aZd5gNrh8Y30uod4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                   </div>
               </dl>
               
               <h3>Tema 6: Explorar Funcionalidades Avanzadas</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Listas y Momentos:</dt>
                   <dd>•	Explora las "Listas" para organizar a las personas que sigues. También puedes revisar "Momentos" para ver resúmenes de noticias.</dd>
                   <div class="linea"></div>
                   <dt>2.	Buscar y Seguir Temas de Interés:</dt>
                   <dd>•	Usa la función de búsqueda para encontrar temas específicos y sigue cuentas que compartan contenido de tu interés.</dd>
               </dl>
               
               <h3>Tema 7: Configuración y Seguridad</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Configuración de la Cuenta:</dt>
                   <dd>•	Toca tu foto de perfil, luego "Configuración y privacidad". Ajusta la privacidad, notificaciones y preferencias de la cuenta según tus preferencias.</dd>
                   <div class="linea"></div>
                   <dt>2.	Mantener la Seguridad:</dt>
                   <dd>•	Habilita la "Verificación de inicio de sesión" para mayor seguridad y ajusta la visibilidad de tus tweets según tus preferencias.</dd>
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