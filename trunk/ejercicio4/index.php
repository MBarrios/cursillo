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
		/*$filas=5;
		$fila_en_curso=1;
		echo "<ul>";
		do {
			echo "<li>Opcion $fila_en_curso</li>";
			$fila_en_curso++;
		}
		while ($fila_en_curso<=$filas);
		echo "</ul>";
		*/
		$formas=array("uno","dos","tres","cuatro","cinco");
asort($formas);
shuffle($formas);
		print_r($formas);
		?>
	</body>
</html>
