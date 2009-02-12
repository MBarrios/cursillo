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
		  $ano=1992;
		$bisiesto=false;
		/*if ($ano % 4 == 0 && $ano % 100 != 0 || $ano % 400 == 0)
				$bisiesto=true;

		if ($bisiesto)
		  echo "es bisiesto";
		else echo "no es bisiesto";*/
		if ($ano % 4 == 0){
			if($ano%100 == 0){
				if ($ano %400!=0)
			   		echo "no es bisiesto";
				else
					echo "es bisiesto";
			}
			else echo "no es bisiesto";
			}
		else echo "no es bisiesto";

		?>
	</body>
</html>
