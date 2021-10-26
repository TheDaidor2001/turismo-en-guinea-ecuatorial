<?php
error_reporting(0);
session_start();
if($_SESSION['cliente']){

}else{
    echo'
        <script> 
           window.location = "index.php";
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
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
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
    <header class="header-1">
    <?php
        include ('layout/nav-2.php');
    
    ?>
    </header>

    <div class="text-header d-flex align-items-center header-1">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="center-h"><span>Bienvenido/a <?php echo $_SESSION['cliente'];  ?></span></h2>
                    <p class="p-index" style="font-size:20px;">Aquí podrás encontrar diversas cosas que tendrás la oportunidad de ver en Guinea Ecuatorial.<br><br><strong> Seguro que disfrutarás de tu estancia.</strong></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container bg-light mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <p><img src="img/plane.svg" alt="" class="w-75"></p>
            </div>
        </div>
        <div class="row  pb-5">
            <div class="col-12 text-center bg-3 p-5">
                <h3 class="h-index">¡Reserva ya tus hoteles y restaurantes en la pestaña de servicios!</h3>
                <p class="p-index">Ven a Guinea Ecuatorial a conocernos y a poder disfrutar de todo lo que podrás hacer aquí junto a nosotros.</p>
            </div>
        </div>
    </div>

    <!--Inicio del footer-->
    <?php
        include('layout/footer.php');
    
    ?>
   <!--Final del footer-->
      <!--Bootstrap Bundle with Popper -->
       <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>