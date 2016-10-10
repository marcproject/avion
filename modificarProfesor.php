<?php
    include_once('conexion.php');
    session_start();
    mysqli_query($conexion,"UPDATE profesor SET nombres  = '$_POST[nombres]',apellidos = '$_POST[apellidos]'
           WHERE idProfesor = ".$_SESSION['idUsuario'] )
    or die("Problemas en el select".mysqli_error($conexion));
    mysqli_close($conexion);
    header('Location: consultaProfesor.php');    

?>
