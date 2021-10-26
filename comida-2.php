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
    <?php
        include ('layout/nav-2.php');
    
    ?>

    <!--Inicio de la seccion-->
    <div class="text-header d-flex align-items-center comida">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="center-h"><span>Comida</span></h2>
                    <h4 class="center-h">Conoce la cantidad de platos nuevos que podrás probar aquí.</h4>
                </div>
            </div>
        </div>
    </div>
    <!--Imagen de el chef y texto de la derecha-->
    <div class="container pt-5 pb-5 bg-light">
        <div class="row">
            <div class="col-sm-6">
                <img src="img/food.svg" alt="Avion" style="width: 100%; height: 400px;">
            </div>
            <div class="col-sm-6 m-auto">
                <h2 class="lugares-h">Descubre todos los platos que podras probar </h2>
                <p class="lugares-p">Aquí podrás ver una gran cantidad de platos y recetas que podras degustar en tu
                    estancia en Guinea Ecuatorial. Seguro que muchos de estos platos le llegan a sorprender</p>
            </div>
        </div>
    </div>
    <!--Fin de la la parte del chef y el texto de la derecha-->

    <!--Inicio del contenido de las tarjetas-->
    <div class="container bg-light pb-5">
        <!--Inicio de las card de la comida-->
        <div class="row h-border">
            <h2 class="init3">Comidas para disfrutar:</h2>
        </div>
        <div class="row">
            <div class="card border-shadow-1 col-sm-4 align-items-center mt-2 m-xl-auto m-lg-auto col-lg-12 m-md-auto col-md-12 mt-lg-4 mt-xl-4 m-sm-auto  mt-md-4 mt-sm-4 mt-lg-4"
                style="width: 35rem;">
                <img src="img/p-c.jpg" class="card-img-top mt-2" alt="polloycacahuete" style="max-height: 360px;">
                <div class="card-body">
                    <h4 class="card-tittle">Pollo Con salsa de cacahuete</h4>
                    <p class="card-text">Pollo con una expesa salsa de cacahuete. Se suele acompañar con arroz blanco.
                    </p>
                </div>
            </div>
            <div class="card col-sm-4 border-shadow-1 align-items-center mt-2 m-xl-auto m-lg-auto col-lg-12 m-md-auto col-md-12 mt-lg-4 mt-xl-4 m-sm-auto  mt-md-4 mt-sm-4 mt-lg-4"
                style="width: 35rem;">
                <img src="img/fruta.jpg" class="card-img-top mt-2" alt="Fruta Variada" style="max-height: 360px;">
                <div class="card-body">
                    <h4 class="card-tittle">Fruta Variada</h4>
                    <p class="card-text">Todo tipo de fruta tropical. Entre ella podemos encontrar mango, piña o banana.
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-auto">
            <div class="card col-sm-4 border-shadow-1 align-items-center mt-2 m-xl-auto m-lg-auto col-lg-12 m-md-auto col-md-12 mt-lg-4 mt-xl-4 m-sm-auto  mt-md-4 mt-sm-4 mt-lg-4"
                style="width: 35rem;">
                <img src="img/platano.jpg" class="card-img-top mt-2" alt="platano" style="max-height: 360px;">
                <div class="card-body">
                    <h4 class="card-tittle">Plátano Frito</h4>
                    <p class="card-text">Excelente platano frito perfecto como acompañamiento para tipo de carnes.
                    </p>
                </div>
            </div>
            <div class="card col-sm-4 border-shadow-1 align-items-center mt-2 m-xl-auto m-lg-auto col-lg-12 m-md-auto col-md-12 mt-lg-4 mt-xl-4 m-sm-auto mt-md-4 mt-sm-4 mt-lg-4"
                style="width: 35rem;">
                <img src="img/ocro.jpg" class="card-img-top mt-2" alt="ocro" style="max-height: 360px;">
                <div class="card-body">
                    <h4 class="card-tittle">Ocro Soup</h4>
                    <p class="card-text">Deliciosa salsa de verduras cocinadas con aceite de palma que sirve de
                        acompañamiento para carnes como el pollo y el pesacdo
                    </p>
                </div>
            </div>
        </div>
        <!--Final de las card de la comida-->
    </div>
    <!--Inicio de las cards de bebida-->
    <div class="container bg-light pt-2 pb-5">
        <div class="row h-border">
            <h2 class="init3" style="border-bottom: 1px solid #6C63FF;">Bebidas para degustar:</h2>
        </div>
        <div class="row pt-4">
            <div class="card border-shadow-1 col-sm-4 align-items-center mt-2 m-xl-auto m-lg-auto col-lg-12 m-md-auto col-md-12 mt-lg-4 mt-xl-4 m-sm-auto mt-lg-4"
                style="width: 35rem;">
                <img src="img/tope.jpg" class="card-img-top mt-2" alt="polloycacahuete" style="max-height: 360px;">
                <div class="card-body">
                    <h4 class="card-tittle">Jengibre con Aúcar</h4>
                    <p class="card-text">Excelente bebida de jengibre con azúcar que refresca en los dias de calor.
                    </p>
                </div>
            </div>
            <div class="card col-sm-4 border-shadow-1 align-items-center mt-2 m-xl-auto m-lg-auto col-lg-12 m-md-auto col-md-12 mt-lg-4 mt-xl-4 m-sm-auto"
                style="width: 35rem;">
                <img src="img/malamba.jpg" class="card-img-top mt-2" alt="Fruta Variada" style="max-height: 360px;">
                <div class="card-body">
                    <h4 class="card-tittle">Malambá</h4>
                    <p class="card-text">La malamba es una bebida alcohólica tradicional de Guinea Ecuatorial elaborada a partir de fermentar jugo de caña.
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-auto">
            <div class="card col-sm-12 border-shadow-1 align-items-center mt-2 m-xl-auto m-lg-auto col-lg-12 m-md-auto col-md-12 mt-lg-4 mt-xl-5 m-sm-auto"
                style="width: 35rem;">
                <img src="img/gg.jpg" class="card-img-top mt-2" alt="platano" style="max-height: 360px;">
                <div class="card-body">
                    <h4 class="card-tittle">Topé</h4>
                    <p class="card-text">Una de las bebidas famosas de Guinea Ecuatorial es el topé o vino de palma que es una bebida alcohólica creada a partir de savia de diferentes tipos de palmeras. 
                    </p>
                </div>
            </div>
        </div>
        <!--Fin de las cards de bebida-->
    </div>
    <!--Fin del contenido de las tarjetas-->

    <!--Inicio de la imagen de tenerdor con el texto-->
    <div class="container bg-light">
        <div class="row pt-5 pb-5">
            <img src="img/utensils-solid.svg" alt="info" width="300px" height="100px">
        </div>
        <div class="row">
            <div class="col-12">
                <p class="p-p">Hay muchas más comidas y bebidas que seguro que disfritarás en tu estancia en Guinea
                    Ecuatorial.</p>
            </div>
        </div>
        <div class="row pb-5">
            <a href="index-2.php" class="btn btn-dark btn-m w-50 m-auto">Explorar otras cosas</a>
        </div>
    </div>
    <!--Final de la imagen de tenerdor con el texto-->
    <!--Fin de la seccion-->

    <!--Inicio del footer-->
    <?php
        include('layout/footer.php');
    
    ?>
   <!--Final del footer-->
    <!--Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>

</html>