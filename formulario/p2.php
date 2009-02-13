<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3g.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
	<head>
		<title>Mi pagina</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link href="estilo.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<?php
		session_start();
		if(!isset($_SESSION["intentos"])) {
   			$_SESSION["intentos"] = 0; }
			$_SESSION["intentos"]++;

		if($_GET["usuario"]=="amaia"&& $_GET["password"]==md5("amaia")){
			echo $_GET["usuario"]." estas conectado";
		}
		else
			if ($_SESSION["intentos"]<4){
				echo "el usuario o contraseña no son validos <br />";
				echo "<form action='index.php' metod='get'";
				echo "	<input type='submit'value='volver a intentarlo' /><form>";
				$_SESSION["intentos"]=$_SESSION["intentos"]++;
			}
			else
			    echo "no puedes seguir intentandolo";
		?>
	</body>
</html>
