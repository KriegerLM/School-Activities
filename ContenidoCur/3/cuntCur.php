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
        <title>Navegadores</title>
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
              <div class="Titulo"><h1>Navegador</h1></div>
               <h3>Tema 1: Introducción a Google Chrome</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Descargar e Instalar Google Chrome:</dt>
                   <dd>•	Abre tu navegador actual (por ejemplo, Internet Explorer o Microsoft Edge).</dd>
                   <dd>•	En la barra de direcciones, escribe www.google.com/chrome y presiona "Enter".</dd>
                   <dd>•	En la página principal de Chrome, haz clic en "Descargar Chrome".</dd>
                   <dd>•	En la página principal de Chrome, haz clic en "Descargar Chrome".</dd>
                   <div class="imagen">
                       <img class="imag" src="chrome_01_p03a_xl.png">
                   </div>
                   <div class="linea"></div>
                   <dt>2.	Configuración Inicial:</dt>
                   <dd>•	Durante la instalación, se te preguntará si deseas establecer Chrome como tu navegador predeterminado. Puedes decidir según tus preferencias.</dd>
                   <dd>•	Después de la instalación, abre Chrome y explora las opciones de configuración haciendo clic en los tres puntos verticales en la esquina superior derecha y seleccionando "Configuración". Aquí puedes personalizar varias opciones, como la apariencia, el idioma y la privacidad.</dd>
                   <div class="imagen">
                       <img class="imag" src="chrome_config">
                   </div>
                 </dl>

               <h3>Tema 2: Características Clave de Google Chrome</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Velocidad de Navegación:</dt>
                   <dd>•	Google Chrome está diseñado para cargar páginas web rápidamente. Experimenta la velocidad al navegar a diferentes sitios.</dd>
                   <div class="linea"></div>
                   <dt>2.	Seguridad Integrada:</dt>
                   <dd>•	Si visitas un sitio web potencialmente peligroso, Chrome mostrará una advertencia. Esto te ayudará a evitar sitios maliciosos.</dd>
                   <dd>•	La función de "Sandbox" protege tu sistema al aislar elementos sospechosos en una ventana, evitando que afecten otras partes del navegador.</dd>
                   <div class="linea"></div>
                   <dt>3.	Actualizaciones Constantes:</dt>
                   <dd>•	Chrome se actualiza automáticamente para proporcionar las últimas características de seguridad y rendimiento. Asegúrate de mantenerlo actualizado para aprovechar al máximo estas mejoras.</dd>
                </dl>

               <h3>Tema 3: Interfaz de Usuario Simple y Sencilla</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Barra de Direcciones Multiuso:</dt>
                   <dd>•	La barra de direcciones en la parte superior es multiusos. Puedes usarla para ingresar direcciones web o realizar búsquedas directamente. Solo escribe y presiona "Enter" para buscar.</dd>
                   <div class="barra">
                       <img class="barra" src="Barra%20de%20busqueda.png">
                   </div>
                   <div class="linea"></div>
                   <dt>2.	Navegación con Pestañas:</dt>
                   <dd>•	Abre múltiples pestañas haciendo clic en el símbolo "+" o enlaces con el botón derecho del ratón y seleccionando "Abrir en nueva pestaña".</dd>
                   <dd>•	Abre múltiples pestañas haciendo clic en el símbolo "+" o enlaces con el botón derecho del ratón y seleccionando "Abrir en nueva pestaña".
                   </dd>
                   <dd>•	Cierra pestañas haciendo clic en la "X" en la esquina de cada pestaña.</dd>
                   <div class="barra">
                       <img class="barra" src="Barra%20de%20navegador.png">
                   </div>
                </dl>
                   
                   <h3>Tema 4: Personalización y Sincronización</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Personalizar la Experiencia:</dt>
                   <dd>•	Explora la Chrome Web Store (https://chrome.google.com/webstore) para encontrar extensiones y temas que se adapten a tus preferencias. Puedes acceder a la tienda haciendo clic en los tres puntos verticales, seleccionando "Extensiones" y luego "Obtener extensiones".</dd>
                   <dd>•	Personaliza tu página de inicio con accesos directos a tus sitios web favoritos.</dd>
                   <div class="linea"></div>
                   <dt>2.	Sincronización de Datos:</dt>
                   <dd>•	Inicia sesión en tu cuenta de Google haciendo clic en los tres puntos verticales, seleccionando "Configuración" y luego "Accede a Chrome".</dd>
                   <dd>•	Activa la sincronización para acceder a tus marcadores, historial y contraseñas desde cualquier dispositivo</dd>
               </dl>
                   
               <h3>Tema 5: Descubrir Nuevas Funciones en Chrome</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Explorar la Tienda Virtual de Chrome:</dt>
                   <dd>•	Visita la Chrome Web Store y busca aplicaciones o extensiones según tus necesidades.</dd>
                   <dd>•	Para instalar una extensión, haz clic en "Agregar a Chrome" y sigue las instrucciones.</dd>
                   <div class="linea"></div>
                   <dt>2.	Manejo de Aplicaciones de Cuenta:</dt>
                   <dd>•	Puedes acceder a aplicaciones de cuenta de Google directamente desde Chrome. Busca el icono de aplicaciones en la esquina superior izquierda y explora las opciones disponibles</dd>
               </dl>
               
               <h3>Tema 6: Cómo Descargar e Instalar Google Chrome</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Acceder a la Página de Descarga:</dt>
                   <dd>•	Abre tu navegador actual y escribe www.google.com/chrome en la barra de direcciones. Presiona "Enter".</dd>
                   <dd>•	En la página principal de Chrome, haz clic en "Descargar Chrome".</dd>
                   <div class="linea"></div>
                   <dt>2.	Descargar e Instalar:</dt>
                   <dd>•	Selecciona "Descargar Chrome" y espera a que el archivo se descargue.</dd>
                   <dd>•	Una vez descargado, haz doble clic en el archivo para iniciar el proceso de instalación</dd>
                   <dd>•	Sigue las instrucciones en pantalla y acepta las Condiciones de Servicio.</dd>
                   <div class="linea"></div>
                   <dt>3.	Configuración Final:</dt>
                   <dd>•	Después de la instalación, Chrome se abrirá automáticamente. Configura Chrome como tu navegador predeterminado si lo deseas.</dd>
                   <dd>•	Puedes importar marcadores y configuraciones desde tu navegador anterior durante el proceso de configuración.</dd>
               </dl>
               
               <h3>Tema 7: Iniciar Sesión en Google Chrome</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Acceder a la Configuración:</dt>
                   <dd>•	Haz clic en los tres puntos verticales en la esquina superior derecha y selecciona "Configuración".</dd>
                   <div class="imagen">
                       <img class="imag" src="chrome_config">
                   </div>
                   <div class="linea"></div>
                   <dt>2.	Iniciar Sesión con tu Cuenta de Google:</dt>
                   <dd>•	Selecciona "Accede a Chrome" y completa tus credenciales de Google.</dd>
                   <dd>•	Activa la sincronización para acceder a tus datos en diferentes dispositivos.</dd>
                   <div class="imagen">
                       <img class="imag" src="sesionCrome.png">
                   </div>
               </dl>
               
               <h3>Tema 8: Adición de Otros Usuarios</h3>
               <dl>
                  <div class="linea"></div>
                   <dt>1.	Configurar Usuarios Adicionales:</dt>
                   <dd>•	Haz clic en "Configuración" y selecciona "Agregar Perfil".</dd>
                   <dd>•	Personaliza el nombre y el icono del nuevo usuario.</dd>
                   <div class="barra">
                       <img class="barra" src="agregarUser.png">
                   </div>
                   <div class="linea"></div>
                   <dt>2.	Sincronización de Cuentas:</dt>
                   <dd>•	Permite que otros usuarios sincronicen sus datos al iniciar sesión.</dd>
               <dd>•	Configura la supervisión de cuentas si es necesario, especialmente para usuarios más jóvenes.</dd>
               </dl>
               <div class="barra">
                       <img class="barra" src="SincronizarUser.png">
                   </div>
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