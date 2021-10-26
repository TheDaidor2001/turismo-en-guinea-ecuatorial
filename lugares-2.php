<?php
error_reporting(0);
include 'php/conexion.php';

 session_start();

 if($_SESSION['cliente']){

 }else{
    echo'
        <script> 
           window.location = "index.php"
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
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
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
        include ('layout/nav-2.php');
    
    ?>
    </header>

    <!--Inicio de la seccion-->
    <div class="text-header d-flex align-items-center lugares">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12">
                    <h2 class="center-h"><span>Zonas Turisticas</span></h2>
                    <h4 class="center-h">Conoce algunas de las zonas turísticas que podrás encontrar en Guinea
                        Ecuatorial.</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container m-auto bg-light pt-5 pb-5">
        <div class="row mt-5">
            <div class="col-sm-6 m-auto pb-5">
                <img src="img/undraw_Travel_mode_re_2lxo.svg" alt="Avion" style="width: 100%; height: 300px;">
            </div>
            <div class="col-sm-6 m-auto pb-5">
                <h2 class="lugares-h">Descubre los lugares mas bonitos de Guinea Ecuatorial</h2>
                <p class="lugares-p">En esta sección podrás ver diversos lugares como hoteles, playas o zonas salvajes
                    que podrás visitar en tu estancia en guinea Ecuatorial. Seguro que disfrutas conociendo todos estos
                    nuevos lugares.</p>
            </div>
        </div>
        <div>
            <h3 class="init2 pt-5 pb-2">Fotos de lugares para visitar en Guinea Ecuatorial</h3>
        </div>
    </div>

    <!--Inicio del carrousel de imagenes-->
    <div class="container bg-light">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/malabo1.jpg" class="d-block w-100" alt="..." style="height: 550px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="h-lugares">Paseo Marítimo Malabo</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/malabo2.jpg" class="d-block w-100" alt="..." style="height: 550px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="h-lugares">Parque Nacional</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/malabo3.jpeg" class="d-block w-100" alt="..." style="height: 550px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="h-lugares">Hotel Sofitel</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/moka.jpg" class="d-block w-100" alt="..." style="height: 550px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="h-lugares">Ureka</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/muni.jpg" class="d-block w-100" alt="..." style="height: 550px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="h-lugares">Parque Nacional Altos de Nsork</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/sipopo.jpeg" class="d-block w-100" alt="..." style="height: 550px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="h-lugares">Playa de Sipopo</h5>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container bg-light mt-0 pt-5">
        <div class="row">
            <img src="img/info-circle-solid.svg" alt="info" width="300px" height="100px">
        </div>
        <div class="row">
            <div class="col-12">
                <p class="p-p">Tenemos muchos sitos turísticos para visitar en Guinea Ecuatorial. En las imagenes se han
                    visto algunos de
                    ellos pero hay varios sitios más que podrían ser de su interés</p>
            </div>
        </div>
        <div class="row pb-5">
            <a href="index-2.php" class="btn btn-dark btn-m w-50 m-auto">Explorar otras cosas</a>
        </div>
    </div>



    <!--Final del carrousel de imagenes-->
    <!--Fin de la seccion-->




    <!--Final cabecera del cuerpo-->

    <!--Inicio del footer-->
    <?php
        include('layout/footer.php');
    
    ?>
    <!--Final del footer-->
    <!--Bootstrap Bundle with Popper -->
    <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>