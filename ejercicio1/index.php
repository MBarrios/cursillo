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
		$a=9;
		$b=8;
		$resultado=0;
		echo "$a <br />";
		echo "$b <br />";
		$resultado=$a+$b;
		echo "$a + $b = $resultado <br />";
		$resultado=$a-$b;
		echo "$a - $b = $resultado <br />";
		$resultado=$a*$b;
		echo "$a * $b = $resultado <br />";
		$resultado=$a/$b;
		echo "$a / $b = $resultado <br />";
		$resultado=$a%$b;
		echo "$a % $b = $resultado <br />";
		//sin guardar el resultado en una variable
		echo "$a % $b =".$a % $b;
		?>
	</body>
</html>
