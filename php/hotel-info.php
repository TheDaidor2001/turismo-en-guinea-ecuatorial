<?php
include('conexion.php');
session_start();

$cliente_id = $_SESSION['cliente_id'];
$hotel_id = $_POST['id_hotel'];
$fecha_entrada = $_POST['fecha_entrada'];
$fecha_salida = $_POST['fecha_salida'];



$introducir = mysqli_query($conexion ,"INSERT INTO `reserva_hotel`(`cliente`, `hotel`, `fecha_entrada`, `fecha_salida`) 
VALUES ('$cliente_id', '$hotel_id' ,'$fecha_entrada','$fecha_salida')");

if($introducir){
    echo' 
       <script>
        alert("Reserva aceptada");
        location.href = "../hotel.php";
       </script>
    ';
}else{
    echo 'Fallo wey';
}


mysqli_close($conexion);



?>