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
        <title>Computadoras</title>
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
              <div class="Titulo"><h1>Correo electrónico: Gmail</h1></div>
               <h3>Tema 1: Introducción a Gmail</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Qué es Gmail:</dt>
                   <dd>•	Gmail es un servicio de correo electrónico proporcionado por Google. Te permite enviar, recibir y organizar mensajes de correo electrónico.</dd>
                   <div class="linea"></div>
                   <dt>2.	Beneficios de Usar Gmail:</dt>
                   <dd>•	Acceso rápido y sencillo al correo electrónico. Posibilidad de organizar mensajes en carpetas y utilizar otras funciones útiles.</dd>
                 </dl>

               <h3>Tema 2: Creando y Configurando tu Cuenta de Gmail</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Crear una Cuenta de Gmail:</dt>
                   <dd>•	Visita el sitio web de Gmail. Haz clic en "Crear cuenta" y sigue los pasos para completar la información requerida.</dd>
                   <div class="linea"></div>
                   <dt>2.	Configurar la Cuenta:</dt>
                   <dd>•	Personaliza tu cuenta ajustando la configuración de privacidad, la firma del correo y otras preferencias desde la configuración.</dd>
                   </dl>

               <h3>Tema 3: Navegación en la Bandeja de Entrada</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Elementos de la Bandeja de Entrada:</dt>
                   <dd>•	Explora la bandeja de entrada, donde se encuentran los correos recibidos. Aprende sobre la barra de búsqueda, etiquetas y opciones de visualización.</dd>
                   <div class="linea"></div>
                   <dt>2.	Abrir y Leer Correos:</dt>
                   <dd>•	Haz clic en un correo para abrirlo. Explora las funciones básicas como responder, reenviar y archivar.</dd>
                </dl>
                   
                   <h3>Tema 4: Organizando tu Correo Electrónico</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Carpetas (Etiquetas):</dt>
                   <dd>•	Las carpetas en Gmail se llaman "etiquetas". Puedes organizar tus correos creando etiquetas personalizadas. Para hacerlo, ve a la izquierda de la pantalla, haz clic en "Más" y selecciona "Crear nueva etiqueta". Puedes nombrarla según tus necesidades, como "Trabajo" o "Familia".</dd>
                   <dd>•	Crea una etiqueta y mueve algunos correos a esa etiqueta para practicar la organización.</dd>
                   <div class="linea"></div>
                   <dt>2.	Archivar y Eliminar Correos:</dt>
                   <dd>•	Archivar es una forma de organizar sin eliminar. Al archivar un correo, desaparece de la bandeja de entrada principal, pero puedes encontrarlo más tarde en la etiqueta correspondiente. Eliminar, por otro lado, mueve el correo a la papelera y se borra después de 30 días.</dd>
                   <dd>•	Archiva algunos correos y elimina otros para entender la diferencia.</dd>
               </dl>
                   
               <h3>Tema 5: Enviando y Respondiendo Correos</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Redactar y Enviar Correos:</dt>
                   <dd>•	Haz clic en "Redactar" para redactar y enviar un nuevo correo electrónico. Aprende a adjuntar archivos y fotos.</dd>
                   <div class="linea"></div>
                   <dt>2.	Responder y Reenviar Correos:</dt>
                   <dd>•	Al responder a un correo, Gmail incluirá automáticamente el mensaje original. Si deseas reenviar un correo, selecciona la opción "Reenviar" y agrega la dirección del destinatario.</dd>
                   <dd>•	Envía un correo y practica responder y reenviar.</dd>
               </dl>
               
               <h3>Tema 6: Configuración de la Firma y Respuestas Automáticas</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Configurar la Firma:</dt>
                   <dd>•	Personaliza tu firma para que aparezca al final de cada correo que envíes. Ve a Configuración (icono de engranaje) -> Configuración -> Pestaña "General" y desplázate hacia abajo hasta "Firma".</dd>
                   <div class="linea"></div>
                   <dt>2.	Respuestas Automáticas (Fuera de la Oficina):</dt>
                   <dd>•	Configura respuestas automáticas cuando estés fuera de la oficina. Ve a Configuración -> Configuración -> Pestaña "General" y desplázate hacia abajo hasta "Respuesta automática".</dd>
               </dl>
               
               <h3>Tema 7: Seguridad y Configuraciones Adicionales</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Seguridad de la Cuenta:</dt>
                   <dd>•	Configura la verificación en dos pasos para proteger tu cuenta. Ve a Configuración -> Seguridad -> Verificación en dos pasos.</dd>
                   <div class="linea"></div>
                   <dt>2.	Configuraciones Adicionales:</dt>
                   <dd>•	Explora configuraciones avanzadas, como la organización de la bandeja de entrada por categorías y la personalización del aspecto de Gmail.</dd>
                   <dd>•	Realiza ajustes según tus preferencias.</dd>
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