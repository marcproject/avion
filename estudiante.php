<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="" />
        <title>UNIVERSIDAD LOS ACAROS</title>
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
        <div id="titulo">ESTUDIANTES</div>
        <form id="cuerpo" action="guardarEstudiante.php" method="post">
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
                <label>E-mail</label>
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
            <div class='elemento'>
                <label>Semestre</label>
            </div>
            <div class=''>
                <select id='semestre' name='semestre'>
                    <option>Seleccione...</option>
                    <option value='1'>Semestre 1</option>
                    <option value='2'>Semestre 2</option>
                    <option value='3'>Semestre 3</option>
                    <option value='4'>Semestre 4</option>
                    <option value='5'>Semestre 5</option>
                    <option value='6'>Semestre 6</option>
                    <option value='7'>Semestre 7</option>
                    <option value='8'>Semestre 8</option>
                    <option value='9'>Semestre 9</option>
                    <option value='0'>Semestre 10</option>
                </select>
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
                msj += "- Debe ingresar el nombre \n";
            }
            if($('#apellidos').val() == ''){
                msj += "- Debe ingresar el apellido \n";
            }
            if($('#direccion').val() == ''){
                msj += "- Debe ingresar el direccion \n";
            }
            if($('#telefono').val() == ''){
                msj += "- Debe ingresar el telefono \n";
            }
            if($('#email').val() == ''){
                msj += "- Debe ingresar el email \n";
            }
            if($('#clave').val() == ''){
                msj += "- Debe ingresar el clave \n";
            }
            if($('#semestre').val() == ''){
                msj += "- Debe ingresar el clave \n";
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
