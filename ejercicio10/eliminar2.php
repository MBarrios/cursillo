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
				<div id="titulo"><h3>ELIMINAR 2/2</h3></div>
				<!--inicio CONTENIDO-->
				<div id="contenido">
				<?php

				$pais=$_GET["pais"];
					if (!mysql_connect("localhost","root",""))
						die(mysql_error ());

					if (!mysql_select_db("paises"))
						die (mysql_error ());
				$sql="Select pais_nombre from pais where pais_nombre='".$pais."'";
				$resultado=mysql_query($sql);
				if($resultado>0){
					$sql="delete from pais where pais_nombre='".$pais."'";
					$resultado=mysql_query($sql);
					if(mysql_affected_rows()>0)
						echo "El pais seleccionado, $pais, a sido eliminado de la base de datos";
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
