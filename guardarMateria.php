<?php
    $db_host="localhost";
$db_user="root";

$db_name="notas";
$db_table_name="avion";
   $db_connection = mysql_connect($db_host, $db_user);

if (!$db_connection) {
	die('No se ha podido conectar a la base de datos');
}
$subs_matricula = utf8_decode($_POST['matricula']);
$subs_tipo = utf8_decode($_POST['tipo']);
$subs_capacidad = utf8_decode($_POST['capacidad']);
$subs_modelo = utf8_decode($_POST['modelo']);

$resultado=mysql_query("SELECT * FROM ".$db_table_name."", $db_connection);

if (mysql_num_rows($resultado)>0)
{

header('Location: materiaCrear.php');

} else {
	
$insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`matricula` , `tipo` , `capacidad` , `modelo`) VALUES ("' . $subs_matricula . '", "' . $subs_tipo . '", "' . $subs_capacidad . '", "' . $subs_modelo . '")';

mysql_select_db($db_name, $db_connection);
$retry_value = mysql_query($insert_value, $db_connection);

if (!$retry_value) {
   die('Error: ' . mysql_error());
}
	
header('Location: materia.php');

}

mysql_close($db_connection);   

?>
