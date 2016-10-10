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
        <div id="titulo">INSCRIPCI&Oacute;N</div>
        <form id="cuerpo" action="inscripcionGuardar.php" method="post">
            <div class='elemento'>
                <label>Materia</label>
            </div>
            <div class=''>
                <select id='idMateria' name='idMateria'>
                <option>Seleccione ...</option>
        <?php
            $registros=mysqli_query($conexion,"SELECT * FROM materia") or
            die("Problemas en el select:".mysqli_error($conexion));
            while ($reg=mysqli_fetch_array($registros)){
                echo "<option value ='".$reg['idMateria']."'>".$reg['detalle']."</option>";
            }
            mysqli_close($conexion);
        ?>
            </div>
            <div class='botones'>
                <input type='button' value='Inscripci&oacute;n' class='btnAzul' onclick='inscribir()'>
            </div>
        </form>
    </body>
    <script>
        function inscribir(){
            msj = '';
            if($('#idMateria').val() == ''){
                msj += '- Debe ingresar materia \n';
            }
            $('#cuerpo').submit();
        }

    </script>
</html>
