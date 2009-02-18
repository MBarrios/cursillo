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
				<div id="titulo"><h3>MODIFICAR > Pais 2/3</h3></div>
				<!--inicio CONTENIDO-->
				<div id="contenido">
					<p>Modificar el nombre del pais o su cifra de poblacion:</p>
					<form action="modificar3.php" method="get">
						<label for="pais">Nombre pais</label>
						<?php
							$pais=$_GET["pais_nom"];
								if (!mysql_connect("localhost","root",""))
									die(mysql_error ());

								if (!mysql_select_db("paises"))
									die (mysql_error ());
							$sql="select pais_nombre,pais_poblacion,pais_id from pais where pais_nombre='".$pais."'";
							$resultado=mysql_query($sql);
							while($fila=mysql_fetch_array($resultado)){
							echo "<input type='text' name='pais' id='pais' value='".$fila["pais_nombre"]."' /><br />";

						echo "<label for='poblacion'>Poblacion</label>";
						echo "<input type='text' name='poblacion' id='poblacion' value=".$fila["pais_poblacion"]." /><br />";
						echo "<input type='hidden' name='id_pais' id='id_pais' value=".$fila["pais_id"]." />";
						echo "<input type='hidden' name='pais_sin_cambio' id='pais_sin_cambio' value=".$fila["pais_nombre"]." />";
							}
						?>
						<input type="submit" name="Insertar" value="Modifcar" />
				</form>
				<!--fin CONTENIDO-->
				</div>
				<!--fin CUERPO-->
			</div>
		<!--fin GENERAL-->

		</div>

	</body>
</html>
