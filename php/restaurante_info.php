<?php
include('conexion.php');
session_start();

$cliente_id1 = $_SESSION['cliente_id'];
$restaurante_id = $_POST['id_restaurante'];
$dia_reserva = $_POST['dia_reserva'];



$meter = mysqli_query($conexion ,"INSERT INTO `reserva_restaurante`(`cliente`, `restaurante`, `dia_reserva`)
 VALUES ('$cliente_id1','$restaurante_id','$dia_reserva')");

if($meter){
    echo' 
       <script>
        alert("Reserva aceptada");
        location.href = "../restaurante.php";
       </script>
    ';
}else{
    echo 'Fallo wey';
}


mysqli_close($conexion);



?>