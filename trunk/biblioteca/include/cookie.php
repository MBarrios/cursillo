<?php
/* These are our valid username and passwords */

if (isset($_COOKIE["usuario"]) && isset($_COOKIE["password"])) {
	echo "existen las cookies";
//$sql="select * from usuarios where usuario='".$_COOKIE["usuario"]."' and clave='".$_COOKIE["password"]."'";
//    $resultado=mysql_query($sql);
//		if(mysql_affected_rows()>0)
//		{
        header("Location: zona_reservada.php");
        echo("zona reservada");
    } else {
         header("Location: bienvenida.php");
         echo("bienbenida");
    }

//}
// else {
//       header("Location: zona_reservada.php");
//}
?>
