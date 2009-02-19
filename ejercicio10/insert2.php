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
					if (isset($_GET["Insertar_pais"]))
						$continente=$_GET["pais_continente"];
					else $continente=$_GET["continente"];
					if (!mysql_connect("localhost","root",""))
									die(mysql_error ());

								if (!mysql_select_db("paises"))
									die (mysql_error ());
								$sql="Select * from continente where continente_nombre='".$continente."'";
								$resultado=mysql_query($sql);
								while($fila=mysql_fetch_array($resultado))
								   $continente_id=$fila["continente_id"];
					if (isset($_GET["Insertar_pais"])){
						//si insertamos un nuevo pais
					    echo "<form action='insert3.php' method='get'>";
							echo "<label for='nombre'>Nuevo pais</label>";
							echo "<input type='text' name='nombre' id='nombre' size='40' maxlength='40' /><br />";
							echo "<label for='poblacion'>Poblacion</label>";
							echo "<input type='text' name='poblacion' id='poblacion' size='40' maxlength='40' /><br />";
							echo "<label for='superficie'>Superficie</label>";
							echo "<input type='text' name='superficie' id='superficie' size='40' maxlength='40' /><br />";
							echo "<input type='hidden' name='pais_continente' id='pais_continente' value=".$continente_id." size='40' maxlength='40' /><br />";
							echo "<input type='submit' name='Insertar' value='Insertar' id='buscar' />";
						echo "</form>";

					}
					else{
					//si insertamos un nuevo continente

					if(mysql_affected_rows()==0){
					$sql="insert into continente (continente_nombre)  values('".$continente."')";
					$resultado=mysql_query($sql);
						if(mysql_affected_rows()>0)
							echo $continente." se ha creado correctamente en la base de datos";
					}
					else echo "El continente ya existe";
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
