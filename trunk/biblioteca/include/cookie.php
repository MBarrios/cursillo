<?php
/* These are our valid username and passwords */
function checkCookie($pagina){
if (isset($_COOKIE["usuario"]) && isset($_COOKIE["password"])) {
	echo "existen las cookies";
$sql="select * from usuarios where usuario='".$_COOKIE["usuario"]."' and clave='".$_COOKIE["password"]."'";

		if(mysql_query($sql)==false)
		{

        header("Location: zona_reservada.php");

    }
 else {
         header("Location:".$pagina);
    }

}
 else {
       header("Location: zona_reservada.php");
}
 }
?>
