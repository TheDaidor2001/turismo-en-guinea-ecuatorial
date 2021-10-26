<!DOCTYPE html>
<html lang="es">
<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/5176b5078823d1f0211b88b9213b6c68.png" />
    <title>Guinea Turismo</title>
</head>
<body>
    <div class="imagen-fondo">
        <img src="img/selva.jpg" alt="">
    </div>

    <form action="php/registrarse.php" method="POST" class="formulario-ing" id="registro_for">
        <h2 class="info-h2">Registrarse</h2>
        <input type="text" name="nombre" id="" class="formula" required placeholder="&#128113; usuario">
        <input type="email" name="correo" id="" class="formula" required placeholder="📧 Email">
        <input type="tel" name="telefono" id="" class="formula" required placeholder="📞 Teléfono">
        <input type="password" name="contra" id="" class="formula" required placeholder="&#128272; Contraseña" >
        <input type="submit" class="enviar">
        <h4 class="mt-5 mb-3 h4-registro">¿Ya tienes cuenta?</h4>
        <a href="login.php" class="a-registro">Iniciar Sesión</a>
    </form>

    <?php
        include('layout/footer.php');
    
    ?>





    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>
</body>
</html>