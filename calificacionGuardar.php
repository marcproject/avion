<?php
    include_once('conexion.php');
    session_start();
    $registros=mysqli_query($conexion,"SELECT * FROM estudianteMateria WHERE idMateria = ".$_POST['idMateria']) or
    die("Problemas en el select:".mysqli_error($conexion));
    $nota1Arr = $_POST['nota1'];
    $nota2Arr = $_POST['nota2'];
    $nota3Arr = $_POST['nota3'];
    $i=0;
    while ($reg=mysqli_fetch_array($registros)){
        $nota1 = $nota1Arr[$i];
        $nota2 = $nota2Arr[$i];
        $nota3 = $nota3Arr[$i];
        mysqli_query($conexion,"UPDATE estudianteMateria SET nota1 = $nota1, nota2 = $nota2, nota3 = $nota3  
            WHERE idEstudianteMateria = ".$reg['idEstudianteMateria'])
            or die("Problemas en el select".mysqli_error($conexion));
        $i++;
    }
    mysqli_close($conexion);
    header('Location: notas.php');    

?>
