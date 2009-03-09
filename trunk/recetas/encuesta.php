<?php
include("includes/inicioHTML.php");
include("includes/cabecera.php");
include("includes/crear_conexion.php");
conectar_a("recetas");
?>
<div id="actual">
<?php
if(basename($_SERVER["PHP_SELF"])=="index.php")
	echo "<p>Portada</p>";
else{
	$pagina =explode(".",basename($_SERVER["PHP_SELF"]));
	echo "<p>".ucfirst($pagina[0])."</p>";
 }
?>
</div>
<!-- inicio CONTENIDO-->
<div id="contenido">
  	<div id="encuesta">
  	<?php if(!$_GET){
  	echo "<form action='resultadosEncuesta.php' method='get'>";

	$sql="select * from encuesta";
	$resultado=mysql_query($sql);
	if ($fila=mysql_fetch_array($resultado)){
		echo "<p>".$fila["pregunta"]."</p>";
		echo "<select name='opcion' id='opcion'>";
   		echo "<option value='votos1']>".$fila["respuesta1"]."</option>";
    	echo "<option value='votos2']>".$fila["respuesta2"]."</option>";
    	echo "<option value='votos3']>".$fila["respuesta3"]."</option>";
   echo "</select>";

	$id=$fila["id_encuesta"];
	echo  "<input type='hidden' name='id' id='id' value=".$id." />";
	}
	echo  "<input type='submit' name='enviar' id='enviar' value='Enviar'/>";
	echo "<a href=resultadosEncuesta.php?id=".$id." id='ver'>ver resultados de la encuesta</a>";

	 echo "</form>";


  	}
  	?>
	</div>
<!-- fin CONTENIDO-->
<?php
include("includes/pie.php");
include("includes/finHTML.php");
?>
