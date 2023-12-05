<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css3/catalogo.css">
        <title>Catálogo</title>
    </head>
    <body>
        <!--Cabecera+++++++++++++++++++++++++++++++++++++++-->
        <div class="menSup">
            <?php include('MenuSup.php'); ?>
        </div>
        <section class="contenido">
            <div class="mostrador" id="mostrador">
                <div class="fila">
                    <div class="item" onclick="cargar(this, 'CURSO: PARTES DE UNA COMPUTADORA', 'A lo largo de este curso, los participantes explorarán de manera práctica las diversas partes que componen una computadora, desde el teclado y el ratón hasta la unidad central de procesamiento (CPU) y el monitor.')">
                        <div class="contenedor-foto">
                            <img src="Imagenes/compu.png" alt="">
                        </div>
                        <p class="descripcion">CURSO: PARTES DE UNA COMPUTADORA</p>
                    </div>
                    <div class="item" onclick="cargar(this, 'CURSO: FACEBOOK', 'Durante este curso, los participantes aprenderán a crear y gestionar una cuenta de Facebook, conectarse con amigos y familiares, compartir fotos y experiencias, y descubrir cómo aprovechar al máximo esta plataforma para mantenerse conectados.')">
                        <div class="contenedor-foto">
                            <img src="Imagenes/icono-facebook.png" alt="">
                        </div>
                        <p class="descripcion">CURSO: FACEBOOK</p>
                    </div>
                    <div class="item" onclick="cargar(this, 'CURSO: NAVEGADORES', 'Durante este curso, los participantes aprenderán a utilizar diferentes navegadores web, como Chrome, Firefox o Edge, para acceder a información, realizar búsquedas, visitar sitios web interesantes y aprovechar al máximo la experiencia en línea.')">
                        <div class="contenedor-foto">
                            <img src="Imagenes/chrome-logo.png" alt="">
                        </div>
                        <p class="descripcion">CURSO: NAVEGADORES</p>
                    </div>
                    <div class="item" onclick="cargar(this, 'CURSO: CORREO ELECTRONICO', 'Durante este curso, los participantes se sumergirán en los conceptos básicos del correo electrónico, desde la creación de una cuenta hasta la redacción y el envío de mensajes.')">
                        <div class="contenedor-foto">
                            <img src="Imagenes/logo-Gmail.png" alt="">
                        </div>
                        <p class="descripcion">CURSO: CORREO ELECTRONICO</p>
                    </div>
                </div>
                <div class="fila">
                    <div class="item" onclick="cargar(this, 'CURSO: WHATSAPP', 'Durante este curso, los participantes aprenderán a descargar, instalar y configurar WhatsApp en sus dispositivos móviles, así como a utilizar sus funciones fundamentales.')">
                        <div class="contenedor-foto">
                            <img src="Imagenes/whatsapp-logo.jpg" alt="">
                        </div>
                        <p class="descripcion">CURSO: WHATSAPP</p>
                    </div>
                    <div class="item" onclick="cargar(this, 'CURSO: INSTAGRAM', 'Durante este curso, los participantes aprenderán a utilizar Instagram para compartir fotos, videos y experiencias, así como para conectarse con amigos, familiares y comunidades de intereses similares.')">
                        <div class="contenedor-foto">
                            <img src="Imagenes/icono-instagram.png" alt="">
                        </div>
                        <p class="descripcion">CURSO: INSTAGRAM</p>
                    </div>
                    <div class="item" onclick="cargar(this, 'CURSO: TWITTER', 'Durante el curso, los participantes aprenderán a crear una cuenta en Twitter, seguir a otras personas, compartir tweets, y explorar temas de su interés.')">
                        <div class="contenedor-foto">
                            <img src="Imagenes/logo-X.jpg" alt="">
                        </div>
                        <p class="descripcion">CURSO: TWITTER</p>
                    </div>
                    <div class="item" onclick="cargar(this, 'CURSO: OFFICE 365', 'Este curso ofrece una valiosa oportunidad para aprender a utilizar las aplicaciones de productividad incluidas en la suite Office 365, como Word, Excel, PowerPoint y Outlook. Durante el curso, los participantes adquirirán habilidades prácticas para crear documentos, hojas de cálculo, presentaciones y gestionar correos electrónicos.')">
                        <div class="contenedor-foto">
                            <img src="Imagenes/office.jpg" alt="">
                        </div>
                        <p class="descripcion">CURSO: OFFICE 365</p>
                    </div>
                </div> 
            </div>
           
            <!-- CONTENEDOR DEL ITEM SELECCIONADO -->
            <div class="seleccion" id="seleccion">
                <div class="cerrar" onclick="cerrar()">
                    &#x2715
                </div>
                <div class="info">
                    <img src="" alt="" id="img">
                    <h2 id="modelo">Curso</h2>
                    <p id="descripcion">Descripción del curso</p>
                    <div class="fila">
                        <input class="button" type="submit" value="Iniciar">
                    </div>
                </div>
            </div>
        </section>
        <script src="catalogo.js"></script>
        <!--Footer+++++++++++++++++++++++++++++++++++++++++++++++-->
        <div class="footer">
            <?php include('Pie.php'); ?>
        </div>
    </body>
</html>

