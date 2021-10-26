<?php
error_reporting(0);
session_start();
if($_SESSION['cliente']){
    echo'
        <script> 
           window.location = "index-2.php"
        </script>
    ';

    die();
}
?>




<!doctype html>
<html lang="es">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
    <!--Inicio cabecera del cuerpo-->
    <header class="header">
    <?php
        include ('layout/nav.php');
    
    ?>
    </header>

    <!--Inicio de la seccion-->
        <div class="text-header d-flex align-items-center fang">
            <!--Imagen de portada y el texto-->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="center-h"><span>Actividades</span></h2>
                        <h4 class="center-h">Veremos que cosas podrás hacer en tu estancia en Guinea Ecuatorial.</h4>
                    </div>
                </div>
            </div>
            <!--Imagen de portada y el texto-->
        </div>
    <div class="container bg-light">
        <div class="container" style="padding-top: 100px; margin-bottom: 100px;">
            <!--Imagen y texto a la derecha-->
            <div class="row">
                <div class="col-sm-6 m-auto">
                    <img src="img/undraw_festivities_tvvj.svg" alt="Avion" style="width: 100%; height: 400px;">
                </div>
                <div class="col-sm-6 m-auto">
                    <h2 class="lugares-h">Descubre las Actividades que podrás hacer </h2>
                    <p class="lugares-p">Tienes una gran cantidad de actividades que hacer en Guinea Ecuatorial ¡Verás como nunca te aburres!</p>
                </div>
            </div>
            <!--Imagen y texto a la derecha-->
        </div>
        <!--Inicio contenedor de todas las actividades-->
        <div class="container container-1">
            <div class="row h-border">
                <h2 class="init3">Conoce las actividades que podrás hacer en Guinea Ecuatorial.</h2>
            </div>
            <div class="row w-100">
                <div class="col-12 mt-4 w-100">
                    <div class="card mb-3 mt-4  mx-3">
                        <div class="row g-0">
                        <div class="col-md-5 m-auto">
                            <img src="img/body.jpg" alt="bodypainting" style = "height: 260px; width: 100%;">
                        </div>
                        <div class="col-md-7 color-b">
                            <div class="card-body">
                            <h5 class="card-title card-h">Bodypainting Festival</h5>
                            <p class="card-text card-p mt-5">¡El mejor festival de pintura corporal en África! Es un festival lleno de color, alegría, mucha gente cálida y amigable, grandes artistas de todo el mundo y en un lugar MARAVILLOSO, ¡El Parque Nacional de Malabo! ¡Es un festival que no se puede perder!</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card mb-3 mt-5 mx-3">
                        <div class="row g-0">
                        <div class="col-md-5 m-auto">
                            <img src="img/c-malabo.jpg" alt="sampaka" style = "height: 260px; width: 100%;">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                            <h5 class="card-title card-h">Disfrutarás de sitios para salir</h5>
                            <p class="card-text card-p mt-5">Encontrarás todo tipo de bares y restaurantes donde podrás disfrutar de pasar el rato y tomar algo con tus amigos. Tambien encontrarás lugares de ocio con unas vistas impresionantes.</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card mb-3 mt-5 mx-3">
                        <div class="row g-0">
                        <div class="col-md-5 m-auto">
                            <img src="img/bici.jpg" alt="bici" style = "height: 260px; width: 100%;">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                            <h5 class="card-title card-h">Rutas turísticas en bicicleta</h5>
                            <p class="card-text card-p mt-5">Paseo en bicicleta que se hará por la zona de Sipopo donde podrás disfrutar de las vistas y el viaje por toda la travesía.</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card mb-3 mt-5 mx-3">
                        <div class="row g-0">
                        <div class="col-md-5 m-auto">
                            <img src="img/ab.jpg" alt="arenablanca" style = "height: 260px; width: 100%;">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                            <h5 class="card-title card-h">¡Increibles playas para disfrutar!</h5>
                            <p class="card-text card-p mt-5">Encontrarás muchas y bonitas playas donde ir a tomar el sol y poder bañarte en el mar. Además disfrutarás de un excelente clima ecuatorial.</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="card mb-3 mt-5 mx-3 mb-5">
                        <div class="row g-0">
                        <div class="col-md-5 m-auto">
                            <img src="img/sampaka.jpg" alt="finca" style = "height: 260px; width: 100%;">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                            <h5 class="card-title card-h">Finca de Sampaka</h5>
                            <p class="card-text card-p mt-5">Una finca de cacao, de las únicas en la isla con el secadero funcionando como hace 100 años atrás. Vivero de plantas tropicales, y vive la experiencia del árbol de cacao hasta la tableta de chocolate.</p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Fin contenedor de todas las actividades-->
        </div>
    </div>
    <!--Imagen de bici y texto-->
    <div class="container bg-light mt-0 pt-5">
        <div class="row">
            <img src="img/bicycle-solid.svg" alt="info" width="300px" height="100px">
        </div>
        <div class="row">
            <div class="col-12">
                <p class="p-p">Tenemos muchos sitos turísticos para visitar en Guinea Ecuatorial. Estos han sido algunos de ellos pero seguro que encontrará más sitos sitios que podrían ser de su interés</p>
            </div>
        </div>
        <div class="row pb-5">
            <a href="index.php" class="btn btn-dark w-50 m-auto btn-m">Explorar otras cosas</a>
        </div>
    </div>
    <!--Imagen de bici y texto-->
    <!--Fin de la seccion-->

    <!--Inicio del footer-->
    <?php
        include('layout/footer.php');
    
    ?>
   <!--Inicio del footer-->
    <!--Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>

</html>