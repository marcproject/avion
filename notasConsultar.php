<!DOCTYPE html>
<?php
    include_once('conexion.php');
    session_start();
?>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="" />
        <title>UNIVERSIDAD</title>
        <!--CSS GENERALES-->
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <!--SCRIPTS GENERALES-->
        <script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
    </head>
    <body>
        <div id="cabecera">
            <ul class="nav">
                <li><a href="login.php">Cerrar Sesi&oacute;n</a></li>
                <li><a href="materia.php">Materias</a></li>
                <li><a href="consultaProfesor.php">Docente</a></li>
                <li><a href="notas.php">Notas</a></li>
            </ul>
        </div>
        <div id="titulo">MIS CALIFICACIONES</div>
        <form id="cuerpo" action="" method="post">
            <div class='botones'>
            </div>
        <table style='width: 80%;margin-left: 10%' border='1'>
        <tr>
            <th>Materia</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota 3</th>
        <tr>
        <?php
            $registros=mysqli_query($conexion,"SELECT * FROM estudianteMateria WHERE idEstudiante = ".$_SESSION['idUsuario']) or
            die("Problemas en el select:".mysqli_error($conexion));
            while ($reg=mysqli_fetch_array($registros)){
                $materias=mysqli_query($conexion,"SELECT * FROM materia WHERE idMateria='$reg[idMateria]'") or
                die("Problemas en el select:".mysqli_error($conexion));
                if ($mat=mysqli_fetch_array($materias)){
                echo "<tr>";
                echo "<td>".$mat['detalle']."</td>";
                echo "<td>".$reg['nota1']."</td>";
                echo "<td>".$reg['nota2']."</td>";
                echo "<td>".$reg['nota3']."</td>";
                echo "</tr>";
                }
            }
            mysqli_close($conexion);
        ?>
        </table>
        </form>
    </body>
    <script>
        function redirige(url){
            window.location = url;
        }

    </script>
</html>
