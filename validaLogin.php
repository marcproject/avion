<?php
    include_once('conexion.php');
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $clave = md5($_POST['clave']);
    $tipo = $_POST['tipo'];
    if($tipo == '1'){
        $tabla = 'estudiante';
        $campo = 'idEstudiante as id';
        $url = 'consultaEstudiante.php';
    }else{
        $tabla = 'profesor';
        $campo = 'idProfesor as id';
        $url = 'consultaProfesor.php';
    }

    $sql = "SELECT $campo FROM $tabla where usuario='$usuario' AND clave = '$clave'";

    $registros=mysqli_query($conexion,$sql) or
    die("Problemas en el select:".mysqli_error($conexion));

    if ($reg=mysqli_fetch_array($registros))
    {
        session_start();
        $_SESSION["idUsuario"] = $reg['id'];
        $_SESSION["tipoUsuario"] = $tipo;
        header("Location: $url");    
    }else{
        header('Location: login.php');    
    }
    mysqli_close($conexion);
?>

