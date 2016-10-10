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
                <li><a href="materia.php">AVION</a></li>
                <li><a href="consultaProfesor.php">ADMIN</a></li>
                <li><a href="notas.php">MANTENIMIENTO</a></li>
            </ul>
        </div>
        <div id="titulo">MANTENIMIENTO</div>
        <form id="cuerpo" action="" method="post">
            
        <table style='width: 80%;margin-left: 10%' border='1'>
        <tr>
            <th>AVION</th>
            
            <th>&nbsp;</th>
        <tr>
        <?php
            $registros=mysqli_query($conexion,"SELECT * FROM materia WHERE idProfesor = ".$_SESSION['idUsuario']) or
            die("Problemas en el select:".mysqli_error($conexion));
            while ($reg=mysqli_fetch_array($registros)){
                echo "<tr>";
                echo "<td>".$reg['detalle']."</td>";
                
                
                echo "</tr>";
            }
            mysqli_close($conexion);
        ?>
        </table>
		<div class='botones'>
                <input type='button' value='Crear Registro' class='btnAzul' onclick='redirige("registroCrear.php")'>
            </div>
        </form>
    </body>
    <script>
        function redirige(url){
            window.location = url;
        }

    </script>
</html>
