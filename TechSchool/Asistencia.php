<!DOCTYPE html>
<html lang="es">
    <head>
        <title>TechSchool</title>
        <link rel="website icon" type="jfif" href="Imagenes/TechSchool.jfif">
        <link href="css3/Asistencia.css" rel="stylesheet">
    </head>
    <body>
        <div class="congen">
            <!--Cabecera+++++++++++++++++++++++++++++++++++++++-->
            <div class="menSup">
                <?php include('MenuSup.php'); ?>
            </div>
            <!--Cuerpo++++++++++++++++++++++++++++++++++++++-->
            <div class="contCon">
                <div class="asisCon">
                    <form action="https://formsubmit.co/davidalvarez1641@gmail.com" method="POST" autocomplete="off">
                        <h1>Asistencia al usuario</h1>
                        <div class="ayuda">
                            <div class="input-group">
                                <input class="input" required type="text" name="name" id="username">
                                <label class="label" for="name">Nombre del contacto</label>
                            </div>
                            <div class="input-group">
                                <input class="input" required type="tel" name="phone" id="telefono">
                                <label class="label" for="telefono">Telefono</label>
                            </div>
                            <div class="input-group">
                                <input class="input" required type="email" id="email">
                                <label class="label" for="email">Correo electronico</label>
                            </div>
                            <div class="input-group">
                                <input class="input" required type="text" id="motivo">
                                <label class="label" for="motivo">¿Cual es el motivo por el que desea contactarnos?</label>
                            </div>
                            <div class="input-group2">
                                <textarea name="message" cols="30" rows="10" class="input2" required id="message"></textarea>
                                <label class="label" for="motivo">Comentarios o especificaciones</label>
                            </div>
                            <input type="hidden" name="_next" value="http://localhost/TechSchool/checkprueba.php">
                            <input type="hidden" name="_captcha" value="false">
                        </div>
                        <div class="terEnv">
                            <p>Recuerda leer nuestros <a href="#">Terminos y Condiciones</a> y <a href="#">Aviso de privacidad</a></p>
                            <input class="btnEnv" type="submit" value="Enviar">
                        </div>
                    </form>
                </div>
            </div>
            <!--Footer+++++++++++++++++++++++++++++++++++++++++++++++-->
            <div class="footer">
                <?php include('Pie.php'); ?>
            </div>
        </div>
    </body>
</html>
















