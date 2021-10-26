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
}else{
    
}

?>





<!doctype html>
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
    <!--Inicio cabecera del cuerpo-->
    <?php
        include('layout/nav.php')
    
    ?>
        <!--html de foto de portada-->
        <div class="text-header d-flex align-items-center header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <h2><span>Conoce Guinea Ecuatorial</span></h2>
                        <p>¿Te gustaria conocer Guinea Ecuatorial?<br>Descubre todo lo que podrás conocer de este país y
                            la razón por la que debes elegirlo como destino turístico para tus proximas vacaciones.</p>
                        <span class="btn btn-yo">Descubre Guinea</span>
                    </div>
                </div>
            </div>
        </div>
        <!--html de foto de portada-->
    <!--Final cabecera del cuerpo-->

    <!--Inicio del contendio principal-->
   

    <div class="container bg-light">
        <div class="row">
            <h2 class="init">¡Muchas cosas para descubrir!</h2>
        </div>
        <!--Cards-->
        <div class="row m-auto">
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 mt-md-4">
                <div class="card border-card m-xxl-auto mt-4 m-xl-auto m-auto m-lg-auto m-sm-auto col-sm-12 " style="width: 20rem;">
                    <img src="img/people-arrows-solid.svg" class="card-img-top" alt="cultura"
                        style="width: 150px; margin: 0 auto; padding: 20px;">
                    <div class="card-body card-yo">
                        <h5 class="card-title card-title-yo">Diferentes actividades para hacer</h5>
                        <br>
                        <p class="card-text pf">En Guinea Ecuatorial hay muchas actividades para hacer. Podrás tener ocio nocturno o disfrutar de las playas y vegetación del Pais.</p>
                        <br>
                        <a href="cultura.php" class="btn btn-1">Saber más</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12  mt-md-4">
                <div class="card border-card m-xxl-auto mt-4 m-xl-auto m-auto m-lg-auto m-sm-auto col-sm-12" style="width: 20rem;">
                    <img src="img/plane-departure-solid.svg" class="card-img-top" alt="lugares"
                        style="width: 163px; margin: 0 auto; padding: 20px;">
                    <div class="card-body card-yo">
                        <h5 class="card-title card-title-yo">Lugares para visitar</h5>
                        <br>
                        <p class="card-text pf">Aquí encontrarás sitios preciosos para visitar. Podras disfrutar de
                            la naturaleza y tambien de las preciosas playas.</p>
                        <br>
                        <a href="lugares.php" class="btn btn-1">Saber más</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-12 col-md-12 mb-5  mt-md-4">
                <div class="card border-card m-xxl-auto mt-4 m-xl-auto m-auto m-lg-auto mt-lg-4 m-sm-auto col-sm-12 " style="width: 20rem;">
                    <img src="img/utensils-solid.svg" class="card-img-top" alt="comida"
                        style="width: 120px; margin: 0 auto; padding: 15px;">
                    <div class="card-body card-yo">
                        <h5 class="card-title card-title-yo">Comida nueva para probar</h5>
                        <br>
                        <p class="card-text pf">Una gran variedades de comidas que tienes que pobrar y disfrutar. Aprovecha
                            para conocer nuevos sabores y nuevas especias.</p>
                        <br>
                        <a href="comida.php" class="btn btn-1">Saber más</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Fin de las Cards-->
    </div>

    <!--Inicio del html de la foto segunda foto-->
    <div class="text-header d-flex align-items-center uno">
        <div class="container">
            <div class="row">
                <div class="col-12 bg-2">
                    <h2 class="center-h"><span>¿A qué esperas para venir?</span></h2>
                    <p class="center-p">Estamos deseando poder verte vacacionando con nosotros. <br>Seguro que disfrutarás de tu estancia aquí.</p>
                    <h4 class="center-c">¡Te esperamos!</h4>
                </div>
            </div>
        </div>
    </div>
    <!--fin del html de la foto segunda foto-->

    <div class="container bg-light mt-0 pt-5">
        <div class="row">
            <img src="img/user-solid.svg" alt="info" width="300px" height="100px">
        </div>
        <div class="row">
            <div class="col-12">
                <p class="p-p">Inicia sesión o regístrate para poder hacer reservas de hoteles donde hospedarte o restaurantes donde podrás llegar para comer.</p>
            </div>
        </div>
        <div class="row pb-3">
            <a href="login.php" class="btn btn-success w-50 m-auto btn-m">Iniciar sesión</a>
        </div>
        <div class="row pb-5">
            <a href="registro.php" class="btn btn-secondary w-50 m-auto btn-m">Registrarse</a>
        </div>
    </div>


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