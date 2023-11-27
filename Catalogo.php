INDEX
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
    <div class="menSup">
        <?php include('MenuSup.php'); ?>
    </div>
    <section class="contenido">
        <div class="mostrador" id="mostrador">
            <div class="fila">
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="Imagenes/compu.png" alt="">
                    </div>
                    <p class="descripcion">CURSO: PARTES DE UNA COMPUTADORA</p>
                    <!--<span class="precio">$300</span>-->
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="Imagenes/icono-facebook.png" alt="">
                    </div>
                    <p class="descripcion" id>CURSO: FACEBOOK</p>
                    <!--<span class="precio">$150</span>-->
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="Imagenes/chrome-logo.png" alt="">
                    </div>
                    <p class="descripcion">CURSO: NAVEGADORES
                    </p>
                    <!--<span class="precio">$300</span>-->
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="Imagenes/logo-Gmail.png" alt="">
                    </div>
                    <p class="descripcion">CURSO: CORREO ELECTRONICO</p>
                    <!--<span class="precio">$200</span>-->
                </div>
            </div>
            <div class="fila">
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="Imagenes/whatsapp-logo.jpg" alt="">
                    </div>
                    <p class="descripcion">CURSO: WHATSAPP</p>
                    <!--<span class="precio">$130</span>-->
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="Imagenes/icono-instagram.png" alt="">
                    </div>
                    <p class="descripcion">CURSO: INSTAGRAM</p>
                    <!--<span class="precio">$100</span>-->
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="Imagenes/logo-X.jpg" alt="">
                    </div>
                    <p class="descripcion">CURSO: TWITTER</p>
                    <!--<span class="precio">$ 100</span>-->
                </div>
                <div class="item" onclick="cargar(this)">
                    <div class="contenedor-foto">
                        <img src="Imagenes/office.jpg" alt="">
                    </div>
                    <p class="descripcion">CURSO: OFFICE 365</p>
                    <!--<span class="precio">$500</span>-->
                </div>
            </div> 
        </div>
        <!-- CONTENEDOR DEL ITEM SELECCIONADO -->
        <div class="seleccion" id="seleccion">
            <div class="cerrar" onclick="cerrar()">
                &#x2715
            </div>
            <div class="info">
                <img src="img/1.png" alt="" id="img">
                <h2 id="modelo">CURSO: OFFICE 365</h2>
                <p id="descripcion">Descripción del curso</p>

                <!--<span class="precio" id="precio">$500</span>-->

                <div class="fila">
                    <div class="size">
                        <label for="">SIZE</label>
                        <select name="" id="">
                            <option value="">Completo</option>
                            <option value="">Word</option>
                            <option value="">Excel</option>
                            <option value="">Power Point</option>
                        </select>
                    </div>
                    <button>Empezar</button>
                </div>
            </div>
        </div>
    </section>

    <script src="catalogo.js"></script>
    <div class="footer">
        <?php include('Pie.php'); ?>
    </div>
</body>
</html>