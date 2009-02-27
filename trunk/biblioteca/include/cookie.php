<?php
//fallo al salir y volver a zona reservada
function checkCookies($pag){
//nombre de la pagina actual
$paginaActual=basename($_SERVER ["PHP_SELF"]);
//si existen las cookies usuario y password
if (isset($_COOKIE["usuario"]) && isset($_COOKIE["password"])) {
$sql="select * from usuarios where usuario='".$_COOKIE["usuario"]."'";
	$resultado=mysql_query($sql);
	/*si existe el usuario de la cookie*/
	if(mysql_affected_rows()>0){
		while($fila=mysql_fetch_array($resultado)){
			/*si la contraseña de dicho usuario es igual a la de la cookie*/
			if($_COOKIE["password"]==md5($fila["clave"]))
				{
				echo $pag."<br />";
				echo $paginaActual."<br />";
				if($paginaActual!=$pag){
	    			echo "<script language='JavaScript' type='text/javascript'>location.href='".$pag."';</script>";
	 			}
			}
			else{
				/*si la contraseña y el usuario no coinciden*/
				if($paginaActual!="zona_reservada.php"){
        			echo "<script language='JavaScript' type='text/javascript'>location.href='zona_reservada.php';</script>";
    			}
			}
		}
    }
    //Si el usuario no existe te redirecciona la pagina zona reserbada siempre que no estes en ella
 	else {
 		if($paginaActual!="zona_reservada.php"){
        	echo "<script language='JavaScript' type='text/javascript'>location.href='zona_reservada.php';</script>";
    	}
 	}
}
/*si no existen las cookies te redirecciona a zona reserbada en
caso de que ya estes en la pagina zona reservada no hara nada
(si no entraria en un bucle)*/
 else {
 	if($paginaActual!="zona_reservada.php"){
         echo "<script language='JavaScript' type='text/javascript'>location.href='zona_reservada.php';</script>";
	}
 }
}
?>
