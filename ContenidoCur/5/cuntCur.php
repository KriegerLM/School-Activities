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
        <title>WhatsApp</title>
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
              <div class="Titulo"><h1>WhatsApp</h1></div>
               <h3>Tema 1: Introducción a WhatsApp</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Qué es WhatsApp:</dt>
                   <dd>•	WhatsApp es una aplicación de mensajería que permite enviar mensajes de texto, hacer llamadas de voz y video, y compartir archivos multimedia de forma rápida y sencilla.</dd>
                   <div class="linea"></div>
                   <dt>2.	Beneficios de Usar WhatsApp:</dt>
                   <dd>•	Mantente conectado con familiares y amigos de manera instantánea. Comparte fotos, videos y mensajes de voz de manera fácil.</dd>
                 </dl>

               <h3>Tema 2: Descargando e Instalando WhatsApp</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Descargar e Instalar la Aplicación:</dt>
                   <dd>•	Dirígete a la tienda de aplicaciones de tu dispositivo (App Store o Google Play), busca WhatsApp, descárgalo e instálalo.</dd>
                   <div class="imagen">
                       <iframe width="560" height="315" src="https://www.youtube.com/embed/wes4BlAXgzg?si=pMATm30f_iyX7nfg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                   </div>
                   <div class="linea"></div>
                   <dt>2.	Configuración Inicial:</dt>
                   <dd>•	Registra tu número de teléfono, crea un nombre de usuario y configura tu foto de perfil para personalizar tu cuenta.</dd>
                   </dl>

               <h3>Tema 3: Navegando por la Interfaz de WhatsApp</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Chats y Conversaciones:</dt>
                   <dd>•	Explora la pantalla principal de chats. Inicia una nueva conversación y aprende a responder mensajes.</dd>
                   <dd>•	Explicación Detallada: La pantalla de chats muestra tus conversaciones. Toca el ícono de chat para iniciar una nueva conversación. Para responder a un mensaje, toca el chat y escribe en la barra de texto.</dd>
                   <dd>•	Práctica: Inicia una nueva conversación con un amigo y responde a un mensaje existente.</dd>
                   <div class="linea"></div>
                   <dt>2.	Llamadas y Videollamadas:</dt>
                   <dd>•	Descubre la función de llamadas y videollamadas. Aprende a realizarlas y a responder cuando te llaman.</dd>
                   <dd>•	En la parte superior de la pantalla, encontrarás los íconos de llamadas y videollamadas. Toca el ícono correspondiente, selecciona un contacto y elige entre llamada de voz o video.</dd>
                   <dd>•	Práctica: Realiza una llamada de voz y una videollamada para familiarizarte con ambas funciones.</dd>
                </dl>
                   
                   <h3>Tema 4: Enviando Mensajes y Multimedia</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Enviar Mensajes de Texto:</dt>
                   <dd>•	Redacta y envía mensajes de texto. Utiliza emojis y stickers para expresarte de manera divertida.</dd>
                   <dd>•	Para redactar un mensaje, toca el ícono de chat en la esquina inferior derecha. Escribe tu mensaje y toca la flecha para enviar. Para agregar emojis, toca el ícono de carita feliz.</dd>
                   <dd>•	Práctica: Envia un mensaje a un contacto, experimenta con emojis.</dd>
                   <div class="linea"></div>
                   <dt>2.	Compartir Fotos y Videos:</dt>
                   <dd>•	Aprende a enviar fotos y videos desde tu galería. Comprende la diferencia entre enviar y compartir multimedia.</dd>
                   <dd>•	Dentro de un chat, toca el ícono de clip para adjuntar archivos. Selecciona "Galería" y elige la foto o video que deseas enviar.</dd>
                   <dd>•	Práctica: Envía una foto a un contacto.</dd>
                   <div class="imagen">
                       <iframe width="560" height="315" src="https://www.youtube.com/embed/8pALWmb63JQ?si=CUKGFXqEJVWpN8V_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                   </div>
               </dl>
                   
               <h3>Tema 5: Configuración de Privacidad y Perfil</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Configuración de Privacidad:</dt>
                   <dd>•	Ajusta la privacidad de tu cuenta. Controla quién puede ver tu última conexión, foto de perfil y estado.</dd>
                   <dd>•	Ve a Configuración > Cuenta > Privacidad. Aquí puedes ajustar quién ve tu información personal.</dd>
                   <dd>•	Práctica: Configura tu privacidad según tus preferencias.</dd>
                   <div class="linea"></div>
                   <dt>2.	Configuración del Perfil:</dt>
                   <dd>•	Personaliza tu perfil con una foto y un estado. Aprende a cambiar tu nombre de usuario para que sea reconocible.</dd>
                   <dd>•	Toque tu foto de perfil para cambiarla. Para cambiar tu estado, ve a tu perfil y toca "Estado".</dd>
                   <dd>•	Práctica: Actualiza tu foto de perfil y estado.</dd>
               </dl>
               
               <h3>Tema 6: Grupos y Listas de Difusión</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Crear y Gestionar Grupos:</dt>
                   <dd>•	Crea grupos para comunicarte con varias personas. Gestiona la configuración del grupo para una experiencia personalizada.</dd>
                   <dd>•	Toca el ícono de chat, selecciona "Nuevo grupo", agrega contactos y configura las opciones del grupo.</dd>
                   <dd>•	Práctica: Crea un grupo familiar.</dd>
                   <div class="linea"></div>
                   <dt>2.	Listas de Difusión:</dt>
                   <dd>•	Crea listas de difusión para enviar mensajes a varias personas sin crear un grupo. Comprende cómo funcionan estas listas.</dd>
                   <dd>Ve a Configuración > Enviar mensaje > Lista de difusión. Crea una lista y agrega contactos.</dd>
                   <dd>•	Práctica: Envía un mensaje a través de una lista de difusión.</dd>
               </dl>
               
               <h3>Tema 7: Configuraciones Avanzadas</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Notificaciones y Sonidos:</dt>
                   <dd>•	Personaliza las notificaciones y sonidos de WhatsApp. Aprende a silenciar chats y desactivar notificaciones para mayor comodidad.</dd>
                   <dd>•	 En un chat, toca el nombre en la parte superior > Personalizado. Aquí puedes ajustar notificaciones y tonos.</dd>
                   <dd>•	Práctica: Silencia un chat que no quieres que te moleste.</dd>
                   <div class="imagen">
                       <iframe width="560" height="315" src="https://www.youtube.com/embed/yja4EakEH-c?si=04ES6mp533aEvSKg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                   </div>
                   <div class="linea"></div>
                   <dt>2.	Almacenamiento y Copias de Seguridad:</dt>
                   <dd>•	Gestiona el espacio de almacenamiento de la aplicación y realiza copias de seguridad de tus chats. Aprende a restaurar chats desde una copia de seguridad.</dd>
                   <dd>•	Ve a Configuración > Almacenamiento y datos > Uso de almacenamiento. Aquí puedes gestionar tu espacio.</dd>
                   <dd>•	Práctica: Realiza una copia de seguridad de tus chats.</dd>
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