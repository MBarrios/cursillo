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
		echo "Bienvenido a mi pagina php";
		echo "<br />";
		$nombre="ana";
		$apellido="lopez";
		//concatenando las variables al texto usando . y ""
		echo "Bienvenido ".$nombre." ".$apellido." a mi pagina";
		echo "<br />";
		// metiendo tanto las varriables como el texto entre las comillas
		echo "Bienvenido $nombre $apellido a mi pagina";
		echo "<br />";
		/*usando la comilla simple lo interpreta todo como
		cadena de texto y no escribira el contenido de las variables*/
		echo 'Bienvenido $nombre $apellido a mi pagina';
		echo "<br />";
		echo "'Bienvenido' $nombre $apellido a mi pagina";
		echo "<br />";
		echo "\"Bienvenido\" $nombre $apellido a mi pagina";
		?>
	</body>
</html>

