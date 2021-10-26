<?php

include('php/conexion.php');
$_SESSION['cliente'];

?>




<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <header class="header-1">
        <div class="bg-dark">
            <div class="container">
                <!--Inicio de la navegacion-->
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index-2.php"><img src="img/logosvg.svg" alt="" width="70px" height="40px"> Guinea Turismo</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse w-100 justify-content-end navg f" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item li">
                                    <a class="nav-link active" aria-current="page" href="index-2.php">Incio</a>
                                </li>
                                <li class="nav-item li">
                                    <a class="nav-link" href="cultura-2.php">Actividades</a>
                                </li>
                                <li class="nav-item li">
                                    <a class="nav-link" href="lugares-2.php">Zonas Turísticas</a>
                                </li>
                                <li class="nav-item li">
                                    <a class="nav-link " href="comida-2.php">Comidas</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" id="navbarDropdownMenuLink">Servicios</a>
                                    <ul class="dropdown-menu bg-dark">
                                        <li><a class="dropdown-item color-1" href="hotel.php">Hoteles</a></li>
                                        <li><a class="dropdown-item color-1" href="restaurante.php">Restaurantes</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" id="navbarDropdownMenuLink"> Mi perfil (<?php echo $_SESSION['cliente'];  ?>) </a>
                                    <ul class="dropdown-menu bg-dark">
                                        <li><a class="dropdown-item color-1" href="usuario.php">Perfil</a></li>
                                        <li><a class="dropdown-item color-1" href="php/cerrar_sesion.php">Cerrar Sesión</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!--Final de la navegacion-->
            </div>
    </header>



</body>

</html>