<?php
include 'conexion.php';
session_start();

$contra = "";


$nueva = $_POST['eli_c'];
$nueva_pw = $_POST['eli_cd'];

$cliente = $_SESSION['cliente'];

$data = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$cliente'");

    while($consulta = mysqli_fetch_array($data)) {
        $contra = $consulta['contraseña'];
        $user = $consulta['usuario'];
        $id = $consulta['id_cliente'];
    }

    if($nueva == $nueva_pw){

        if($nueva == $contra){

            $eliminar = "DELETE FROM usuarios WHERE id_cliente = '$id' and usuario = '$user'";
            $resultado = mysqli_query($conexion, $eliminar);

            echo '
        
                <script>
                    alert("La cuenta se a eliminado con exito");
                    location.href = "cerrar_sesion.php"
                </script>

            ';
        }else{
            echo '
        
                <script>
                    alert("Contraseña incorrecta");
                </script>

            ';
        }
        
    }else{
        echo '
        
                <script>
                    alert("Las contraseñas no coinciden");
                    location.href = "../usuario.php"
                </script>

            ';
    }

    mysqli_close($conexion);

?>