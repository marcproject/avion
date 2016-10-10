<?php
    include_once('conexion.php');
    session_start();
    mysqli_query($conexion,"UPDATE estudiante SET nombres  = '$_POST[nombres]',apellidos = '$_POST[apellidos]',direccion = '$_POST[direccion]',telefono = '$_POST[telefono]',email = '$_POST[email]',semestre = '$_POST[semestre]'
           WHERE idEstudiante = ".$_SESSION['idUsuario'] )
    or die("Problemas en el select".mysqli_error($conexion));
    mysqli_close($conexion);
    header('Location: consultaEstudiante.php');    

?>
