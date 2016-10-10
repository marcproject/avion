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
                <li><a href="materia.php">AVION</a></li>
                <li><a href="consultaProfesor.php">ADMIN</a></li>
                <li><a href="notas.php">MANTENIMIENTO</a></li>
            </ul>
        </div>
        <div id="titulo">MODIFICAR AVION</div>
        <?php
            $registros=mysqli_query($conexion,"SELECT * FROM avion WHERE idAvion='$_GET[id]'") or
            die("Problemas en el select:".mysqli_error($conexion));
            if ($reg=mysqli_fetch_array($registros)){
        ?>
        <form id="cuerpo" action="eliminarMateria.php" method="post">
            <div class='elemento'>
                <label>matricula</label>
            </div>
            <div class=''>
				<input type='hidden' name='idAvion' id='idAvion' value='<?php echo $_GET['id'];?>'>
                <input type='text' name='matricula' id='matricula' value='<?php echo $reg['matricula'];?>'>
            </div>
			
			<div class='elemento'>
                <label>tipo</label>
            </div>
            <div class=''>
                <input type='text' name='tipo' id='tipo' value='<?php echo $reg['tipo'];?>'>
            </div>
			
			<div class='elemento'>
                <label>capacidad</label>
            </div>
            <div class=''>
                <input type='text' name='capacidad' id='capacidad' value='<?php echo $reg['capacidad'];?>'>
            </div>
            
            <div class='elemento'>
                <label>modelo</label>
            </div>
            <div class=''>
                <input type='text' name='modelo' id='modelo' value='<?php echo $reg['modelo'];?>'>
            </div>
            
           
            <div class='botones'>
                <input type='button' value='ELIMINAR' class='btnAzul' onclick='crear()'>
                <input type='button' value='Cancelar' class='btnGris' onclick="redirige('materia.php')">
            </div>
        </form>
        <?php
            }
        ?>
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
