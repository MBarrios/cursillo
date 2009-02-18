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
				<div id="titulo"><h3>BUSCADOR</h3></div>
				<!--inicio CONTENIDO-->
				<div id="contenido">
					<p>Insertar el nombre o la/s inicial/es de un continente, y población</p>
					<form action="buscar_combinado2.php" method="get">
						<input type="text" name="pais" id="pais" size="40" maxlength="40" />

						  <select name="poblacion" id="poblacion">
						    <option value="1">Indiferente</option>
						    <option value="2">1 mill - 5 mill</option>
						    <option value="3">5 mill - 10 mill</option>
						    <option value="4">10 mill - 30 mill</option>
						    <option value="5">30 mill - 50 mill</option>
						    <option value="6">+ 50 mill</option>
						  </select>
						<input type="submit" name="buscar" value="Buscar" />
				</form>
				<!--fin CONTENIDO-->
				</div>
				<!--fin CUERPO-->
			</div>
		<!--fin GENERAL-->

		</div>

	</body>
</html>
