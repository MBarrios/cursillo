
<?php
/*En caso de querer utilizar otro usuario, servidor,...
 * agregar los parametros necesarios para esto*/
function conectar_a($bbdd){
if (!mysql_connect("localhost","root",""))
	die(mysql_error ());
if (!mysql_select_db($bbdd))
	die (mysql_error ());
}
?>
