<?php

include 'conexion.php';

if($_SESSION['cliente']){

}else{
    echo'
        <script>
           window.location = "index.php"
        </script>
    ';

    die();
}

?>