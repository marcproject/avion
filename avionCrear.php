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
        <form id="cuerpo" action="guardarMateria.php" method="post">
            <div class='elemento'>
                <label>matricula</label>
            </div>
            <div class=''>
                <input type='text' name='matricula' id='matricula'>
            </div>
			
			<div class='elemento'>
                <label>tipo</label>
            </div>
            <div class=''>
                <input type='text' name='tipo' id='tipo'>
            </div>
			
			<div class='elemento'>
                <label>capacidad</label>
            </div>
            <div class=''>
                <input type='text' name='capacidad' id='capacidad'>
            </div>
            
            <div class='elemento'>
                <label>modelo</label>
            </div>
            <div class=''>
                <input type='text' name='modelo' id='modelo'>
            </div>
            
            <div class='botones'>
                <input type='button' value='Crear' class='btnAzul' onclick='crear()'>
                <input type='button' value='Cancelar' class='btnGris' onclick="redirige('materia.php')">
            </div>
        </form>
    </body>
    <script>
        function crear(){
            msj = '';
            if($('#matricula').val() == ''){
                msj += '- Debe ingresar la matricula /n';
            }
            if($('#tipo').val() == ''){
                msj += '- Debe ingresar el tipo /n';
            }
			if($('#capacidad').val() == ''){
                msj += '- Debe ingresar la capacidad /n';
            }
            if($('#modelo').val() == ''){
                msj += '- Debe ingresar el modelo /n';
            }
            if(msj != ''){
                alert(mjsg);
                return false;
            }
            $('#cuerpo').submit();
        }

        function redirige(url){
            window.location = url;
        }

    </script>
</html>
