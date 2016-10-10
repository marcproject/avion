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
        <title>SERVICOSTOS</title>
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
        <div id="titulo">CALIFICACI&Oacute;N</div>
        <form id="cuerpo" action="calificacionGuardar.php" method="post">
            <div class='botones'>
                <input type='button' value='Calificar' class='btnAzul' onclick='calificar()'>
                <input type='button' value='Cancelar' class='btnGris' onclick="redirige('notas.php')">
                <input type='hidden' name='idMateria' value = <?php echo $_GET['id']; ?>>
            </div>
        <table style='width: 80%;margin-left: 10%' border='1'>
        <?php
            $materias=mysqli_query($conexion,"SELECT * FROM materia WHERE idMateria='$_GET[id]'") or
            die("Problemas en el select:".mysqli_error($conexion));
            if ($mat=mysqli_fetch_array($materias)){
                echo "<tr><td colspan='4'>Calificando: ".$mat['detalle']."</td></tr><br>";
            }
        ?>
        <tr>
            <th>Estudiante</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota 3</th>
        <tr>
        <?php
            $registros=mysqli_query($conexion,"SELECT * FROM estudianteMateria WHERE idMateria = ".$_GET['id']) or
            die("Problemas en el select:".mysqli_error($conexion));
            while ($reg=mysqli_fetch_array($registros)){
                echo "<tr>";
                $estudiantes=mysqli_query($conexion,"SELECT * FROM estudiante WHERE idEstudiante='$reg[idEstudiante]' ORDER BY idEstudiante") or
                die("Problemas en el select:".mysqli_error($conexion));
                while ($est=mysqli_fetch_array($estudiantes)){
                    echo "<td>".$est['nombres'].' '.$est['apellidos']."</td>";
                    if($reg['nota1'] == 0){
                        echo "<td><input type='text' name='nota1[]' value='0'></td>";
                    }else{
                        echo "<td><input type='text' name='nota1[]' value=".$reg['nota1']."></td>";
                    }
                    if($reg['nota2'] == 0){
                        echo "<td><input type='text' name='nota2[]' value='0'></td>";
                    }else{
                        echo "<td><input type='text' name='nota2[]' value=".$reg['nota2']."></td>";
                    }
                    if($reg['nota3'] == 0){
                        echo "<td><input type='text' name='nota3[]' value='0'></td>";
                    }else{
                        echo "<td><input type='text' name='nota3[]' value=".$reg['nota3']."></td>";
                    }
                }
                echo "</tr>";
            }
            mysqli_close($conexion);
        ?>
        </table>
        </form>
    </body>
    <script>
        function calificar(){
            $('#cuerpo').submit();
        }
        function redirige(url){
            window.location = url;
        }

    </script>
</html>
