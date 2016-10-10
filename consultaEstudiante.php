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
                <li><a href="consultaEstudiante.php">Estudiante</a></li>
                <li><a href="inscripcion.php">Inscripci&oacute;n</a></li>
                <li><a href="notasConsultar.php">Notas</a></li>
            </ul>
        </div>
        <div id="titulo">ESTUDIANTES</div>
        <?php
            $registros=mysqli_query($conexion,"SELECT * FROM estudiante WHERE idEstudiante='$_SESSION[idUsuario]'") or
            die("Problemas en el select:".mysqli_error($conexion));
            if ($reg=mysqli_fetch_array($registros)){
        ?>
        <form id="cuerpo" action="modificarEstudiante.php" method="post">
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
            
            <div class='elemento'>
                <label>Direcci&oacute;n</label>
            </div>
            <div class=''>
                <input type='text' name='direccion' id='direccion' value='<?php echo $reg['direccion'];?>'>
            </div>

            <div class='elemento'>
                <label>Tel&eacutefono</label>
            </div>
            <div class=''>
                <input type='text' name='telefono' id='telefono' value='<?php echo $reg['telefono'];?>'>
            </div>

            <div class='elemento'>
                <label>E-mail</label>
            </div>
            <div class=''>
                <input type='text' name='email' id='email' value='<?php echo $reg['email'];?>'>
            </div>

            <div class='elemento'>
                <label>Semestre</label>
            </div>
            <div class=''>
                <select id='semestre' name='semestre'>
                    <option>Seleccione...</option>
                    <?php if($reg['semestre'] == 1){?>
                        <option value='1' selected>Semestre 1</option>
                    <?php }else{?>
                        <option value='1'>Semestre 1</option>
                    <?php }?>
                    <?php if($reg['semestre'] == 2){?>
                        <option value='2' selected>Semestre 2</option>
                    <?php }else{?>
                        <option value='2'>Semestre 2</option>
                    <?php }?>
                    <?php if($reg['semestre'] == 3){?>
                        <option value='3' selected>Semestre 3</option>
                    <?php }else{?>
                        <option value='3'>Semestre 3</option>
                    <?php }?>
                    <?php if($reg['semestre'] == 4){?>
                        <option value='4' selected>Semestre 4</option>
                    <?php }else{?>
                        <option value='4'>Semestre 4</option>
                    <?php }?>
                    <?php if($reg['semestre'] == 5){?>
                        <option value='5' selected>Semestre 5</option>
                    <?php }else{?>
                        <option value='5'>Semestre 5</option>
                    <?php }?>
                    <?php if($reg['semestre'] == 6){?>
                        <option value='6' selected>Semestre 6</option>
                    <?php }else{?>
                        <option value='6'>Semestre 6</option>
                    <?php }?>
                    <?php if($reg['semestre'] == 7){?>
                        <option value='7' selected>Semestre 7</option>
                    <?php }else{?>
                        <option value='7'>Semestre 7</option>
                    <?php }?>
                    <?php if($reg['semestre'] == 8){?>
                        <option value='8' selected>Semestre 8</option>
                    <?php }else{?>
                        <option value='8'>Semestre 8</option>
                    <?php }?>
                    <?php if($reg['semestre'] == 9){?>
                        <option value='9' selected>Semestre 9</option>
                    <?php }else{?>
                        <option value='9'>Semestre 9</option>
                    <?php }?>
                    <?php if($reg['semestre'] == 0){?>
                        <option value='0' selected>Semestre 10</option>
                    <?php }else{?>
                        <option value='0'>Semestre 10</option>
                    <?php }?>
                </select>
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
            if($('#direccion').val() == ''){
                msj += '- Debe ingresar el direccion/n';
            }
            if($('#telefono').val() == ''){
                msj += '- Debe ingresar el telefono /n';
            }
            if($('#email').val() == ''){
                msj += '- Debe ingresar el email /n';
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
