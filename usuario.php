<?php
include('php/conexion.php');
session_start();
if ($_SESSION['cliente']) {
} else {
    echo '
        <script>
           window.location = "index.php"
        </script>
    ';

    die();
}

?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guinea Turismo</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <link rel="shortcut icon" href="img/5176b5078823d1f0211b88b9213b6c68.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
</head>

<body>
    <header class="header">
    <?php
        include ('layout/nav-2.php');
    
    ?>
    </header>
    <div class="fondo_user">
        <h1 class="bienvenido">Hola <?php echo $_SESSION['cliente'];  ?> </h1>
    </div>

    <div class="container bg-light">
        <div class="perfil pt-5">
            <h1 class="display-4 text-center my-5">Información de tu perfil</h1>
            <div>
                <table class="table table-striped table-hover mx-auto text-center w-75" id="tabla_user">
                    <?php
                    $cliente = $_SESSION['cliente'];
                    $data = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$cliente'");

                    while ($consulta = mysqli_fetch_array($data)) {
                    ?>

                        <tr>
                            <th>Usuario:</th>
                            <td><?php echo $consulta['usuario'] ?></td>
                        </tr>
                        <tr>
                            <th>Correo:</th>
                            <td><?php echo $consulta['correo'] ?></td>
                        </tr>
                        <tr>
                            <th>Teléfono:</th>
                            <td><?php echo $consulta['telefono'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>

            <div class="cont-boton">
                <input type="button" value="Actualizar datos" class="btn btn-success botton mb-3" name="mod" data-bs-toggle="modal" data-bs-target="#mod-per">
                <input type="button" value="Eliminar cuenta" class="btn btn-danger botton mb-3" name="borr" data-bs-toggle="modal" data-bs-target="#el-per">
            </div>
        </div>
        <div class="modal fade" id="mod-per" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Configurar perfil</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="cambiar">
                            <?php
                            $cliente = $_SESSION['cliente'];
                            $data = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$cliente'");
                            while ($consulta = mysqli_fetch_array($data)) {
                            ?>

                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Usuario:</label>
                                    <input type="text" class="form-control" value="<?php echo $consulta['usuario']; ?> " disabled name="usuario">
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Correo:</label>
                                    <input type="text" class="form-control" value="<?php echo $consulta['correo']; ?> " name="correo">
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Teléfono:</label>
                                    <input type="text" class="form-control" value="<?php echo $consulta['telefono']; ?> " name="telefono">
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Contraseña actual:</label>
                                    <input type="password" class="form-control" name="contra">
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Nueva Contraseña:</label>
                                    <input type="password" class="form-control" id="nueva_nueva" disabled="true" required="false" name="contra_nueva">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="check">
                                    <label class="form-check-label" for="flexCheckboxDefault">Cambiar Contraseña</label>
                                </div>

                        </form>


                    <?php

                            }
                    ?>
                    </div>

                    <div class="modal-footer">
                        <button type="success" class="btn btn-primary " id="actu">Actualizar</button>
                    </div>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Introduce tu contraseña para realizar cambios en tu perfil
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>



        <!--Inicio de los modales-->
        <div class="modal fade" id="el-per" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar cuenta</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="php/eliminar.php" method="POST">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Contraseña de seguridad:</label>
                                <input type="password" class="form-control" name="eli_c" id="block-uno" disabled="">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Repita su contraseña:</label>
                                <input class="form-control" type="password" name="eli_cd" id="block-dos" disabled=""></input>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="check-eli">
                                <label class="form-check-label" for="flexCheckboxDefault">Estoy seguro de eliminar mi cuenta</label>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="success" class="btn btn-danger">Eliminar</button>
                            </div>
                        </form>
                    </div>

                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Advertencia:</strong> Al borrar la cuenta se eliminará de forma permanente
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
        <!--Fin de los modales-->

        <?php
        
            include('layout/footer.php');
        ?>





    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/funciones.js"></script>

</body>

</html>