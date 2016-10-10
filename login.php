<!DOCTYPE html>
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
            </ul>
        </div>
		<h1 align=center> SERVICOSTOS </H1>
        <div id="titulo">INGRESO A LA PLATAFORMA </div>
        <form id="cuerpo" action="validaLogin.php" method="post">
            <div class='elemento'>
                <label>Usuario</label>
            </div>
            <div class=''>
                <input type='text' name='usuario' id='usuario'>
            </div>
            <div class='elemento'>
                <label>Clave</label>
            </div>
            <div class=''>
                <input type='password' name='clave' id='clave'>
            </div>
            
            
            
            <div class='botones'>
                <input type='button' value='Ingresar' class='btnAzul' onclick='valida()'>
                
            </div>
        </form>
    </body>
    <script>

        function valida(){
            msj = '';
            if($('#usuario').val() == ''){
                msj += '- Debe ingresar el usuario /n';
            }
            if($('#clave').val() == ''){
                msj += '- Debe ingresar el clave /n';
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
