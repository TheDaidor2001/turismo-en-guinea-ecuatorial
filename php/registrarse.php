<?php
include('conexion.php');

$usuario = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$pass = $_POST['contra'];


$verificacion =mysqli_query($conexion ,"SELECT * FROM usuarios WHERE usuario = '$usuario'");

$r = mysqli_num_rows($verificacion);

if($r > 0){
    echo' 
       <script>
        alert("El nombre de usuario ya está siendo utilizado");
        location.href = "../registro.php";
       </script>
    ';
    exit;
}

$añadir = mysqli_query($conexion , "INSERT INTO usuarios (usuario, contraseña , correo , telefono , rol)
VALUES ('$usuario' , '$pass' , '$correo' , '$telefono' , 'cliente')") or die("Unable to connect to $conexion") ;



if($añadir){
    echo' 
       <script>
        alert("Registro exitoso");
        location.href = "../login.php";
       </script>
    ';
}else{
    echo 'fwgerbrb';
}

mysqli_close($conexion);

?>