<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3g.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
	<head>
		<title>Mi pagina</title>
		<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
		<link href="estilo.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="general">
			<div id="cabecera">
		  <ul>
			    <li><a href="">Home    </a>|</li>
			    <li><a href="">    Buscar    </a>|</li>
			    <li><a href="">    Buscar combinado    </a>|</li>
			    <li><a href="">    Insertar    </a>|</li>
			    <li><a href="">    Eliminar    </a>|</li>
			    <li><a href="">    Modificar</a></li>
			    </li>
			  </ul>

			</div>
			<div id="cuerpo">
				<div id="titulo"><h3>HOME > Paises</h3></div>
				<div id="contenido">
				<?php
					if (!mysql_connect("localhost","root",""))
						die(mysql_error ());

					if (!mysql_select_db("paises"))
						die (mysql_error ());
				$sql="Select pais_nombre,pais_poblacion,continente_nombre from pais inner join continente on continente=continente_id order by continente_nombre,pais_nombre";
				$resultado=mysql_query($sql);
					echo "<table border=1>";
					while($fila=mysql_fetch_array($resultado))
						{echo "<tr>";
							echo "<td>".$fila["pais_nombre"]."</td>";
							echo "<td>".number_format($fila["pais_poblacion"],"",",",".")." hab.</td>";
							echo "<td>".$fila["continente_nombre"]."</td>";
						echo "</tr>";
						}
				?>
				</div>
			</div>
		</div>
	</body>
</html>
