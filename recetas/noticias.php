<?php
include("includes/inicioHTML.php");
include("includes/cabecera.php");
include("includes/crear_conexion.php");
conectar_a("recetas");
?>
<div id="actual">
<?php
if(basename($_SERVER["PHP_SELF"])=="index.php")
	echo "<p><span>Portada</span></p>";
else{
	$pagina =explode(".",basename($_SERVER["PHP_SELF"]));
	echo "<p><span>".ucfirst($pagina[0])."</span></p>";
 }
?>
</div>
<!-- inicio CONTENIDO-->
<div id="contenido">
<?php
//si no se le pasan parametros a la noticia...
if (!$_GET){


	echo "<div id='noticias'>";
	echo "<h3 class='noticias'>Ultima hora:</h3>";
	//ordenar las noticias de mas a menos recientes y obtener la primera
	$sql="select * from noticias order by fecha desc limit 1";
	$resultado=mysql_query($sql);
	if($fila=mysql_fetch_array($resultado)){
			echo "<img id='imagen_noticias' src='IMAGES/fotosnoticias/".$fila["fotonoticia"]."'alt='fotonoticia'/>";
		echo "<span>".$fila["titularnoticia"]."</span><br />";

		echo "<div id='texto_noticias'>".$fila["desarrollo"]."</div>";

	}
	//fin ULTIMA HORA
	echo "<div id='espacio'></div>";
	echo "</div>";
	echo "<h3 class='noticias'>Otras noticias recientes:</h3>";
	//obtener la cantidad de registros que devuelve la consulta
	$sql="select count(*) as cantidad from noticias";
	$resultado=mysql_query($sql);
	if($fila=mysql_fetch_array($resultado))
		$numResultado=$fila["cantidad"];
	//obtener todos los registros menos el que se muestra en ultima hora, es decir, el primero
	$sql="select * from noticias order by fecha desc limit 1, $numResultado";
	$resultado=mysql_query($sql);
	//inicio OTRAS NOTICIAS
	echo "<div id='otras_noticias'>";
	while($fila=mysql_fetch_array($resultado)){
		echo "<a href=noticias.php?id=".$fila["id_noticia"].">".$fila["fecha"]." - ".$fila["titularnoticia"]."</a><br />";
	}
	//final OTRAS NOTICIAS
	echo "</div>";
}
else{
	//noticia seleccionada
	$sql="select * from noticias where id_noticia=".$_GET["id"];
	$resultado=mysql_query($sql);
	if($fila=mysql_fetch_array($resultado)){
		echo "<img id='imagen_noticias' src='IMAGES/fotosnoticias/".$fila["fotonoticia"]."'alt='fotonoticia'/>";
		echo "<div id='texto_noticias' class='margenes'>".$fila["desarrollo"]."</div>";
		echo "<a href='noticias.php'>Volver</a>";

	}
}
?>
<div id="espacio"></div>
<!--final CONTENIDO-->
</div>
<?php

include("includes/pie.php");
include("includes/finHTML.php");
?>
