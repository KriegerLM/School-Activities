<html>
<head>
    <!-- Cargar Bootstrap desde un CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Crear un contenedor con un fondo gris -->
    <div class="container bg-light">
        <!-- Crear un encabezado con un texto rojo -->
        <h1 class="text-danger">Asistencia al usuario</h1>
        <!-- Crear un formulario con cuatro campos y un botón -->
        <form>
            <div class="form-group">
                <label for="nombre">Nombre de contacto</label>
                <input type="text" class="form-control" id="nombre" placeholder="Escribe tu nombre">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="tel" class="form-control" id="telefono" placeholder="Escribe tu teléfono">
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" class="form-control" id="email" placeholder="Escribe tu correo electrónico">
            </div>
            <div class="form-group">
                <label for="comentarios">Comentarios o especificaciones</label>
                <textarea class="form-control" id="comentarios" rows="3" placeholder="Escribe tus comentarios o especificaciones"></textarea>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="terminos">
                <label class="form-check-label" for="terminos">Recuerda leer nuestros <a href="#">Términos y Condiciones</a> y <a href="#">Política de privacidad</a></label>
            </div>
            <button type="submit" class="btn btn-danger">Enviar</button>
        </form>
        <!-- Crear un pie de página con un texto rojo -->
        <p class="text-danger">© 2023 Todos los derechos reservados</p>
    </div>
</body>
</html>
