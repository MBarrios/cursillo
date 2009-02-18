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
				<div id="titulo"><h3>INSERTAR > Continente</h3></div>
				<!--inicio CONTENIDO-->
				<div id="contenido">
					<p>Insertar un nuevo continente</p>
					<form action="insert2.php" method="get">
						<label for="continente">Nuevo continente</label>
						<input type="text" name="continente" id="continente" size="40" maxlength="40" />
						<input type="submit" name="Insertar" value="Insertar" id="buscar" />
					</form>
					<form action="insert2.php" method="get">
						<label for="pais_continente">Nuevo pais</label>
						<select name="pais_continente" id="pais_continente">
							<?php
								if (!mysql_connect("localhost","root",""))
									die(mysql_error ());

								if (!mysql_select_db("paises"))
									die (mysql_error ());
								$sql="Select continente_nombre from continente";
								$resultado=mysql_query($sql);
								while($fila=mysql_fetch_array($resultado))

						    echo "<option value=".$fila["continente_nombre"].">".$fila["continente_nombre"]."</option>";
							?>
						  </select>
						<input type="submit" name="Insertar_pais" value="Insertar_pais" />
					</form>
				<!--fin CONTENIDO-->
				</div>
				<!--fin CUERPO-->
			</div>
		<!--fin GENERAL-->

		</div>

	</body>
</html>
