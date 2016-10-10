<?php
    include_once('conexion.php');
    $clave = md5($_POST['clave']);
    mysqli_query($conexion,"insert into profesor(idProfesor,nombres,apellidos,direccion,telefono,email,clave,estado) values 
            (0,'$_POST[nombres]','$_POST[apellidos]','$_POST[direccion]','$_POST[telefono]','$_POST[email]','$clave','A')")
    or die("Problemas en el select".mysqli_error($conexion));
    mysqli_close($conexion);
    header('Location: login.php');    

?>
