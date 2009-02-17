<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3g.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
	<head>
		<title>Mi pagina</title>
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
		<link href="estilo.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<!--inicio GENERAL-->
		<div id="general">
			<div id="cabecera"></div>
			<div id="menu">
		     <ul>
			    <li><a href="index.php">Home</a>|</li>
			    <li><a href="buscar.php">Buscar</a>|</li>
			    <li><a href="buscar_combinado.php">Buscar combinado</a>|</li>
			    <li><a href="insertar.php">Insertar</a>|</li>
			    <li><a href="eliminar.php">Eliminar</a>|</li>
			    <li><a href="modificar.php">Modificar</a></li>
			  </ul>

			</div>
			<!--inicio CUERPO-->
			<div id="cuerpo">
				<div id="titulo"><h3>HOME > Paises</h3></div>
				<!--inicio CONTENIDO-->
				<div id="contenido">
				<?php

				$pais=$_GET["pais"];
				echo $pais;
					if (!mysql_connect("localhost","root",""))
						die(mysql_error ());

					if (!mysql_select_db("paises"))
						die (mysql_error ());
				$sql="Select pais_nombre,continente_nombre from pais inner join continente on continente=continente_id where pais_nombre like "."'".$pais."%'";
				$resultado=mysql_query($sql);
				echo "antes de imprimir resultado";

				print_r($resultado);
					echo "<table>";
					echo "<thead>";
					echo "<th>País</th>";
					echo "<th>Continente</th>";
					echo "</thead><tbody>";
					while($fila=mysql_fetch_array($resultado))
						{echo "<tr>";
							echo "<td>".$fila["pais_nombre"]."</td>";
							echo "<td>".$fila["continente_nombre"]."</td>";
						echo "</tr>";
						}
					echo "</tbody>";

				?>
				<!--fin CONTENIDO-->
				</div>
				<!--fin CUERPO-->
			</div>
		<!--fin GENERAL-->

		</div>

	</body>
</html>
