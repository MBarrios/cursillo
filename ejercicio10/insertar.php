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
					<?php
					if (!$_GET){
					    echo "<form action='insertar.php' method='get'>";
							echo "<label for='continente'>Nuevo continente</label>";
							echo "<input type='text' name='continente' id='continente' size='40' maxlength='40' />";
							echo "<input type='submit' name='Insertar' value='Insertar' id='buscar' />";
						echo "</form>";
					}
					else{
					$continente=$_GET["continente"];
						if (!mysql_connect("localhost","root",""))
							die(mysql_error ());

						if (!mysql_select_db("paises"))
							die (mysql_error ());
					$sql="select * from continente where continente_nombre='".$continente."'";
					$resultado=mysql_query($sql);
					if(mysql_affected_rows()>0){
					$sql="insert into continente (continente_nombre)  values('".$continente."')";
					$resultado=mysql_query($sql);
						if(mysql_affected_rows()>0)
							echo $continente." se ha creado correctamente en la base de datos";
					}
					}
					?>
				<!--fin CONTENIDO-->
				</div>
				<!--fin CUERPO-->
			</div>
		<!--fin GENERAL-->

		</div>

	</body>
</html>
