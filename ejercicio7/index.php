<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3g.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
	<head>
		<title>Mi pagina</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link href="estilo.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="general">
		<?php
		$notas=array( "alumno1"=>array(7,2,6), "alumno2"=>array(8,7,9), "alumno3"=>array(4,2,7));
		echo "<div class='divs'><h3>Notas de los alumnos</h3><table class='tabla'border=1 frame='void' rules='none'>";
		echo "<tr>";
		foreach($notas as $nombre=>$nota){
			echo "<td  class='nombres'>$nombre</td>";
		}
			echo "</tr>";

		for($i=0;$i<count($notas[$nombre]);$i++){
			echo "<tr>";
			foreach($notas as $nombre=>$nota){
			echo "<td>$nota[$i]</td>";
			}
		}
		echo "</tr>";
		echo "</table></div>";
		echo "<div class='divs'><h3>Media y nmayor nota de los alumnos</h3><table class='tabla' border=1 frame='void' rules='none'>";
		echo "<tr>";
		foreach($notas as $nombre=>$nota){
			echo "<td class='nombres'>$nombre</td>";
		}
		echo "</tr>";

			echo "<tr>";
			foreach($notas as $nombre=>$nota){
					$suma=0;
				foreach($nota as $num){
				$suma=$suma+$num;
			}

			$media=number_format($suma/count($nota),2);
			echo "<td>$media</td>";
		}
		echo "</tr>";

			echo "<tr>";
			foreach($notas as $nombre=>$nota){
				$max=0;
				foreach($nota as $num){
				if ($max<$num){
					$max=$num;
				}

			}
			echo "<td>$max</td>";
		}
		echo "</tr></table></div>";

		?>
		</div>
	</body>
</html>