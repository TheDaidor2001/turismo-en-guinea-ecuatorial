<?php

include ("conexion.php");


$usuario = $_POST['usuario'];
$contra = $_POST['pass'];

$resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' and contraseña = '$contra'");


$fila = mysqli_num_rows($resultado);

if($fila > 0) {
    session_start();
    $datos_usuario = mysqli_fetch_assoc($resultado);
    $_SESSION['cliente'] = $usuario;
    $_SESSION['cliente_id'] = $datos_usuario['id_cliente'];
    header("location: ../index-2.php");
}else{
    echo '
    <script>
    alert("El correo o la contraseña son incorrectos");
    location.href = "../login.php";
    </script>
    ';
}

mysqli_free_result($resultado);
mysqli_close($conexion);


?>