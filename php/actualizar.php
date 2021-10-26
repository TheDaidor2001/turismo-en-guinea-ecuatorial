<?php
include('conexion.php');
session_start();

$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$pass = $_POST['contra'];
$pass_nueva = $_POST['contra_nueva'] ?? null;
$contra = "";
$id = "";



$cliente = $_SESSION['cliente'];

$data = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$cliente'");

    while($consulta = mysqli_fetch_array($data)) {
        $contra = $consulta['contraseña'];
        $id = $consulta['id_cliente'];
    }


    if($contra == $pass) {
        if($pass_nueva == ""){
            $cambiar = "UPDATE usuarios SET correo = '$correo ', telefono = '$telefono' WHERE id_cliente = $id";
        
            echo '1';


            $resultado = mysqli_query($conexion, $cambiar);
            exit;
        }else{
            $cambiar = "UPDATE usuarios SET contraseña = '$pass_nueva', correo = '$correo', telefono = '$telefono' WHERE id_cliente = $id";
        
            echo '2';
            $resultado = mysqli_query($conexion, $cambiar);
            exit;
        }

    }else{
        echo '3';
    }

mysqli_close($conexion);

?>