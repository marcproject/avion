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
        <div id="titulo">AVION</div>
        <form id="cuerpo" action="" method="post">
            
        <table style='width: 80%;margin-left: 10%' border='1'>
        <tr>
            <th>matricula</th>
            <th>tipo</th>
			<th>capacidad</th>
            <th>modelo</th>
            <th>&nbsp;</th>
        <tr>
		
			
        <?php
            $registros=mysqli_query($conexion,"SELECT * FROM avion") or
            die("Problemas en el select:".mysqli_error($conexion));
            while ($reg=mysqli_fetch_array($registros)){
                echo "<tr>";
                echo "<td>".$reg['matricula']."</td>";
                echo "<td>".$reg['tipo']."</td>";
				echo "<td>".$reg['capacidad']."</td>";
				echo "<td>".$reg['modelo']."</td>";
                echo "<td><a href='materiaModificar.php?id=".$reg['idAvion']."'>Editar</a></td>";
				echo "<td><a href='materiaEliminar.php?id=".$reg['idAvion']."'>Eliminar</a></td>";
                echo "</tr>";
            }
            mysqli_close($conexion);
        ?>
        </table>
		<div class='botones'>
                <input type='button' value='Crear Avion' class='btnAzul' onclick='redirige("materiaCrear.php")'>
            </div>
        </form>
    </body>
    <script>
        function redirige(url){
            window.location = url;
        }

    </script>
</html>
