<!DOCTYPE html>
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
            </ul>
        </div>
        <div id="titulo">Administrador</div>
        <form id="cuerpo" action="guardarProfesor.php" method="post">
            <div class='elemento'>
                <label>Nombres</label>
            </div>
            <div class=''>
                <input type='text' name='nombres' id='nombres'>
            </div>
            <div class='elemento'>
                <label>Apellidos</label>
            </div>
            <div class=''>
                <input type='text' name='apellidos' id='apellidos'>
            </div>
            
            <div class='elemento'>
                <label>Direcci&oacute;n</label>
            </div>
            <div class=''>
                <input type='text' name='direccion' id='direccion'>
            </div>

            <div class='elemento'>
                <label>Tel&eacutefono</label>
            </div>
            <div class=''>
                <input type='text' name='telefono' id='telefono'>
            </div>

            <div class='elemento'>
                <label>Usuario</label>
            </div>
            <div class=''>
                <input type='text' name='email' id='email'>
            </div>

            <div class='elemento'>
                <label>Clave</label>
            </div>
            <div class=''>
                <input type='password' name='clave' id='clave'>
            </div>
            
            <div class='botones'>
                <input type='button' value='Crear' class='btnAzul' onclick='crear()'>
                <input type='button' value='Cancelar' class='btnGris' onclick="redirige('login.php')">
            </div>
        </form>
    </body>
    <script>
        $(function() {
        });

        function crear(){
            msj = '';
            if($('#nombres').val() == ''){
                msj += '- Debe ingresar el nombre \n';
            }
            if($('#apellidos').val() == ''){
                msj += '- Debe ingresar el apellido \n';
            }
            if($('#direccion').val() == ''){
                msj += '- Debe ingresar el direccion \n';
            }
            if($('#telefono').val() == ''){
                msj += '- Debe ingresar el telefono \n';
            }
            if($('#email').val() == ''){
                msj += '- Debe ingresar el email \n';
            }
            if($('#clave').val() == ''){
                msj += '- Debe ingresar el clave \n';
            }
            if(msj != ''){
                alert(msj);
                return false;
            }
            $('#cuerpo').submit();
        }

        function redirige(url){
            window.location = url;
        }

    </script>
</html>
