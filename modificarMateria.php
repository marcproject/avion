<?php
    include_once('conexion.php');
    session_start();
    mysqli_query($conexion,"UPDATE avion SET matricula='$_POST[matricula]',tipo='$_POST[tipo]',capacidad='$_POST[capacidad]',modelo='$_POST[modelo]'
            WHERE idAvion = ".$_POST['idAvion'])
    or die("Problemas en el select".mysqli_error($conexion));
    mysqli_close($conexion);
    header('Location: materia.php');    

?>
