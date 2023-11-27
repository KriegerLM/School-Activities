<?php
session_start();

    if(!isset($_SESSION['usuario'])){
        echo '<script> alert("Por favor deves iniciar sesion"); window.location = "index.php; </script>';
        header("location: index.php");
        session_destroy();
        die;
    }

?>
<!DOCTYPE html>
<html>
   <head>
       <meta http-equiv="content-type" content="text/html"; charset="utf-8">
       <title>Electronicos</title>
       <link rel="stylesheet" href="css3/principal.css">
    </head>
    <body>
       <!--Cabecera +++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
        <?php include('cabezera.php'); ?>
        <!-- Aside submenus directos ++++++++++++++++++++++++++++++++++++++++-->
        <div class="postik contenedorside asi">
        <aside class="aside">
            <h2>categorias</h2>
            <ul>
                <li><a href="Computadoras.php">Computadoras</a></li>
                <li><a href="Televicion.php">Televisión</a></li>
                <li><a href="Celulares.php">Celulares</a></li>
                <li><a href="Camaras.php">Camaras</a></li>
            </ul>
        </aside>
        </div>
        <!--Productos++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
        <h3 class="tit">Lo más vendido</h3>
        <div>
            <div class="conpro">
                <h5 class="nopre">Acer Aspire 5 A515-46-R14K...</h5>
                <img class="normal" src="Imagenes/Compu/Laptops/Lap1.jpg">
                <h3 class="nopre">$8,975.94</h3>
                <button>Agregar</button>
            </div>
            <div class="conpro">
                <h5 class="nopre">BenQ GW2480 Monitor LED...</h5>
                <img class="norm" src="Imagenes/Compu/Monitores/Mon2.jpg">
                <h3 class="nopre">$3,398.90</h3>
                <button>Agregar</button>
            </div>
            <div class="conpro">
                <h5 class="nopre">Pantalla LG 50" 4K Smart...</h5>
                <img class="normal" src="Imagenes/TV/Pantallas/Pan3.jpg">
                <h3 class="nopre">$9,599.00</h3>
                <button>Agregar</button>
            </div>
            <div class="conpro">
                <h5 class="nopre">Apple iPhone 11 Pro Max...</h5>
                <img class="ima" src="Imagenes/Cel/Celulares&Smartphones/Cel5.jpg">
                <h3 class="nopre">$18,199.99</h3>
                <button>Agregar</button>
            </div>
            <div class="contenedorside asid">
                <aside class="asid">
                    <h2>Hola</h2>
                </aside>
            </div>
            <div class="conpro">
                <h5 class="nopre">Panasonic LUMIX DMC-G7KK...</h5>
                <img class="norm" src="Imagenes/Camara/Camara_digital/CDigi4.jpg">
                <h3 class="nopre">$14,802.13</h3>
                <button>Agregar</button>
            </div>
            <div class="conpro">
                <h5 class="nopre">TP-Link Tapo C200...</h5>
                <img class="imacam" src="Imagenes/Camara/camaras_seguridad/CSeg1.jpg">
                <h3 class="nopre">$699.00</h3>
                <button>Agregar</button>
            </div>
            <div class="conpro">
                <h5 class="nopre">Calculadora de botones grandes...</h5>
                <img class="norm" src="Imagenes/Oficina/Calculadoras/Cal2.jpg">
                <h3 class="nopre">$359.99</h3>
                <button>Agregar</button>
            </div>
            <div class="conpro">
                <h5 class="nopre">NIERBO Adaptador de Viaje...</h5>
                <img class="imasug" src="Imagenes/Accesorios/Adaptadores_internacionales/Adap2.jpg">
                <h3 class="nopre">$389.00</h3>
                <button>Agregar</button>
            </div>
            <div class="conpro">
                <h5 class="nopre">Regleta de enchufes con USB,...</h5>
                <img class="normal" src="Imagenes/Accesorios/Protectores_sobretencion/Prot1.jpg">
                <h3 class="nopre">$689.00</h3>
                <button>Agregar</button>
            </div>
            <div class="conpro">
                <h5 class="nopre">Lenovo Laptop S145-14API...</h5>
                <img class="normal" src="Imagenes/Compu/Laptops/Lap5.jpg">
                <h3 class="nopre">$7,799.00</h3>
                <button>Agregar</button>
            </div>
            <div class="conpro">
                <h5 class="nopre">Wacom CTL472 Tableta...</h5>
                <img class="normal" src="Imagenes/Compu/Tablets/Tablet2.jpg">
                <h3 class="nopre">$1,097.00</h3>
                <button>Agregar</button>
            </div>
            <div class="conpro">
                <h5 class="nopre">SAMSUNG Galaxy-A12...</h5>
                <img class="ima" src="Imagenes/Cel/Celulares&Smartphones/Cel2.jpg">
                <h3 class="nopre">$4,149</h3>
                <button>Agregar</button>
            </div>
        </div>
        
        <!--Footer+++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <?php include('pie.php'); ?>
    </body>
</html>