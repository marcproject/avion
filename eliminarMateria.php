<?php
    include_once('conexion.php');
    session_start();
    mysqli_query($conexion,"DELETE avion WHERE matricula='$_POST[matricula]',tipo='$_POST[tipo]',capacidad='$_POST[capacidad]',modelo='$_POST[modelo]'
            ")
    or die("Problemas en el select".mysqli_error($conexion));
    mysqli_close($conexion);
    header('Location: materia.php');    

?>
