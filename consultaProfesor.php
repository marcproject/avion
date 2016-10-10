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
        <div id="titulo">ADMINISTRACION</div>
        <?php
            $registros=mysqli_query($conexion,"SELECT * FROM profesor WHERE idProfesor='$_SESSION[idUsuario]'") or
            die("Problemas en el select:".mysqli_error($conexion));
            if ($reg=mysqli_fetch_array($registros)){
        ?>
        <form id="cuerpo" action="modificarProfesor.php" method="post">
			<div class='elemento'>
                <label>Usuario</label>
            </div>
            <div class=''>
                <input type='text' name='email' id='usuario' value='<?php echo $reg['usuario'];?>'>
            </div>
			
            <div class='elemento'>
                <label>Nombres</label>
            </div>
            <div class=''>
                <input type='text' name='nombres' id='nombres' value='<?php echo $reg['nombres'];?>'>
            </div>
            <div class='elemento'>
                <label>Apellidos</label>
            </div>
            <div class=''>
                <input type='text' name='apellidos' id='apellidos' value='<?php echo $reg['apellidos'];?>'>
            </div>
            
            
            <?php
                }
            ?>

            
            <div class='botones'>
                <input type='button' value='Modificar' class='btnAzul' onclick='crear()'>
            </div>
        </form>
    </body>
    <script>
        function crear(){
            msj = '';
            if($('#nombres').val() == ''){
                msj += '- Debe ingresar el nombre /n';
            }
            if($('#apellidos').val() == ''){
                msj += '- Debe ingresar el apellido /n';
            }
            
            if($('#usuario').val() == ''){
                msj += '- Debe ingresar el usuario /n';
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
