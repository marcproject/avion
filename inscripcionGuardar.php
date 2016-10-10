<?php
    include_once('conexion.php');
    session_start();
    mysqli_query($conexion,"insert into mensaje(nombre,email,mensaje) values 
            (0,'$_SESSION[idUsuario]','$_POST[idMateria]',0,0,0,'A')")
    or die("Problemas en el select".mysqli_error($conexion));
    mysqli_close($conexion);
    header('Location: index2.php');    

?>
