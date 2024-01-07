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
        <title>Facebook</title>
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
              <div class="Titulo"><h1>Facebook</h1></div>
               <h3>Tema 1: Introducción a Facebook</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Registro en Facebook:</dt>
                   <dd>•	Abre tu navegador web y dirígete a www.facebook.com y da clic en crear cuenta nueva</dd>
                   <dd>•	Completa el formulario con tu nombre, apellido, correo electrónico o número de teléfono, contraseña, fecha de nacimiento y género.</dd>
                   <dd>•	Haz clic en "Registrarte".</dd>
                   <div class="imagen">
                       <img class="imag" src="faceRe.png">
                   </div>
                   <div class="linea"></div>
                   <dt>2.	Configuración del Perfil:</dt>
                   <dd>•	Después de registrarte, sigue los pasos para agregar una foto de perfil y una portada.</dd>
                   <dd>•	Completa tu biografía con detalles sobre tu vida, estudios, trabajo, etc.</dd>
                   <div class="barra">
                       <img class="barra" src="EditarFace.png">
                   </div>
                   <div class="linea"></div>
                    <dt>3.	Privacidad y Seguridad:</dt>
                   <dd>•	Haz clic en la flecha hacia abajo en la esquina superior derecha, selecciona "Configuración y privacidad" y luego "Configuración".</dd>
                   <dd>•	Explora las opciones de privacidad y seguridad para ajustar quién puede ver tu información.</dd>
               </dl>

               <h3>Tema 2: Conexiones en Facebook</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Buscar y Agregar Amigos:</dt>
                   <dd>•	En la barra de búsqueda, ingresa el nombre de amigos y envía solicitudes de amistad.</dd>
                   <dd>•	Acepta solicitudes de amistad que recibas.</dd>
                   <div class="linea"></div>
                   <dt>2.	Interactuar con la Sección de Noticias</dt>
                   <dd>•	Comenta y da "Me gusta" en las publicaciones de tus amigos en la sección de noticias.</dd>
                   <dd>•	Organiza amigos en listas desde la sección "Amigos".</dd>
                   <div class="linea"></div>
                   <dt>3.	Explorar Grupos y Páginas:</dt>
                   <dd>•	Busca grupos de tu interés y únete a ellos.</dd>
                   <dd>•	Sigue páginas de empresas o artistas haciendo clic en "Me gusta".</dd>
                </dl>

               <h3>Tema 3: Publicar y Compartir Contenido</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Crear Publicaciones:</dt>
                   <dd>•	En la caja de estado, escribe tu actualización.</dd>
                   <dd>•	Puedes agregar fotos, enlaces y emojis.</dd>
                   <div class="linea"></div>
                   <dt>2.	Compartir Fotos y Álbumes:<dt>
                   <dd>•	Para subir fotos, haz clic en "Foto/Video" y selecciona la imagen desde tu computadora o dispositivo.</dd>
                   <dd>•	Organiza fotos en álbumes desde tu perfil.</dd>
                   <div class="linea"></div>
                   <dt>3.	Explorar Opciones de Personalización:</dt>
                   <dd>•	Haz clic en la flecha hacia abajo en la esquina superior derecha y selecciona "Configuración".</dd>
                   <dd>•	Explora las opciones de configuración para personalizar tu experiencia.</dd>
                   <div class="imagen">
                       <img class="imag" src="Compartirface.png">
                   </div>
                </dl>
                   
                   <h3>Tema 4: Explorar Funciones Avanzadas de Facebook</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Participar en Eventos:</dt>
                   <dd>•	Navega a la sección de "Eventos" y descubre eventos locales o en línea.</dd>
                   <dd>•	Confirma tu asistencia y comparte eventos con amigos.</dd>
                   <div class="linea"></div>
                   <dt>2.	Usar la Tienda de Aplicaciones de Facebook:</dt>
                   <dd>•	Explora la Chrome Web Store desde tu navegador.</dd>
                   <dd>•	Busca aplicaciones y extensiones que te interesen y agrégales.</dd>
               </dl>
                   
               <h3>Tema 5: Configuraciones Avanzadas y Seguridad</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Configurar Notificaciones:</dt>
                   <dd>•	En "Configuración", selecciona "Notificaciones" para personalizar cómo recibes alertas.</dd>
                   <div class="linea"></div>
                   <dt>2.	Privacidad y Configuraciones de Seguridad:</dt>
                   <dd>•	Revisa y ajusta la configuración de privacidad según tus preferencias.</dd>
                   <dd>•	Activa la autenticación de dos factores para mayor seguridad.</dd>
               </dl>
               
               <h3>Tema 6: Descargar e Instalar Facebook en Dispositivos Móviles</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Buscar la Aplicación:</dt>
                   <dd>•	Abre la tienda de aplicaciones en tu dispositivo (App Store o Google Play).</dd>
                   <dd>•	Busca "Facebook" y descarga la aplicación.</dd>
                   <div class="linea"></div>
                   <dt>2.	Iniciar Sesión y Configuración:</dt>
                   <dd>•	Abre la aplicación y inicia sesión con tus credenciales de Facebook.</dd>
                   <dd>•	Configura las notificaciones y la privacidad desde la aplicación.</dd>
                   
               </dl>
               
               <h3>Tema 7: Mantenerse Informado sobre Actualizaciones de Facebook</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Explorar Nuevas Funciones:</dt>
                   <dd>•	Mantente atento a las notificaciones de actualizaciones de Facebook.</dd>
                   <dd>•	Mantente atento a las notificaciones de actualizaciones de Facebook.</dd>
                   <div class="linea"></div>
                   <dt>2.	Practicar la Seguridad en Línea:</dt>
                   <dd>•	Mantente informado sobre prácticas de seguridad en línea.</dd>
                   <dd>•	Siempre verifica las fuentes antes de hacer clic en enlaces sospechosos.</dd>
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