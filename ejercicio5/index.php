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
		$aux=0;
		$formas=array(6,8,9,4,10);
		for($i=0;$i<count($formas);$i++)
			for($j=$i;$j<count($formas);$j++)
				if($formas[$i]<$formas[$j]){
					$aux=$formas[$i];
					$formas[$i]=$formas[$j];
					$formas[$j]=$aux;
				}
		print_r($formas);
		?>
	</body>
</html>