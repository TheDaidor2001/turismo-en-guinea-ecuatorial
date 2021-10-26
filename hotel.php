<?php
error_reporting(0);
session_start();
if (! $_SESSION['cliente']) {
    ?>
        <script> 
           window.location = "index.php"
        </script>
    <?php
    die();
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/5176b5078823d1f0211b88b9213b6c68.png" />
    <title>Guienea Turismo</title>
</head>

<body>
    <?php
        include ('layout/nav-2.php');
    
    ?>

        <div class="text-header d-flex align-items-center hotel">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-12 bg-2">
                        <h2 class="center-h-1"><span>Hoteles</span></h2>
                        <h4 class="center-h-1">Conoce los hoteles donde podrás hospedarte</h4>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Fin del header-->

    <div class="container pt-5 pb-5 bg-light justify-content-around">
        <div class="row text-center">
            <h3 class="hotel-h">Hoteles en los que podrás alojarte</h3>
        </div>
        <div class="row mt-5">
        <?php
        include('php/conexion.php');
        $consulta_hoteles=mysqli_query($conexion,"SELECT * FROM hotel");
        if(mysqli_num_rows($consulta_hoteles) > 0){
            while($array_hoteles=mysqli_fetch_assoc($consulta_hoteles)){
        ?>
        <div class="modal fade" id="mod-h-<?= $array_hoteles['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Reserva del Hotel</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="php/hotel-info.php">
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Nombre del hotel</label>
                                <input type="hidden"name="id_hotel" value ="<?= $array_hoteles['id'];?>">
                                <input disabled type="text" class="form-control" id="message-text" name="nombre_hotel" value="<?= $array_hoteles['nombre'];?>">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Fecha Entrada:</label>
                                <input type="date" class="form-control" id="message-text" name="fecha_entrada" required>
                                <label for="message-text" class="col-form-label">Fecha Salida:</label>
                                <input type="date" class="form-control" id="message-text" name="fecha_salida" required>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-success" value="Reservar">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
            <!-- Bucle de hoteles en la base de datos -->
            <div class="col-xxl-4 col-xl-4 col-md-4 mt-5">
                <div class="card">
                    <img src="img/<?= $array_hoteles['foto'];?>" class="card-img-top" alt="..." style="height: 276px;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $array_hoteles['nombre'];?></h5>
                        <p class="card-text"><?= $array_hoteles['precio_noche'];?></p>
                        <p class="card-text">&#10004;Cancelación gratuita</p>
                        <p class="card-text">&#10004;Paga cuando vayas a hospedarte</p>
                    </div>
                    <button type="button" class="btn btn-outline-success mb-3 w-75 mx-auto" data-bs-toggle="modal" data-bs-target="#mod-h-<?= $array_hoteles['id'];?>">Reservar</button>
                </div>
            </div>
        <?php
                    }
                }
                else{
                    ?>
                    <div class="row text-center">
                        <h2 class="hotel-h">Actualmente no hay hoteles registrados.</h2>
                    </div>
                    <?php
                }
                ?>
        </div>
    </div>
    <!--Inicio del footer-->
    <?php
        include('layout/footer.php');
    
    ?>
    <!--Final del footer-->













    <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>