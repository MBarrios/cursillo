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
  	echo "<form action='encuesta.php' method='get'>";

	$sql="select * from encuesta";
	$resultado=mysql_query($sql);
	while ($fila=mysql_fetch_array($resultado)){
		echo "<p>".$fila["pregunta"]."</p>";
		echo "<select name='encuesta'>";
   		echo "<option value='".$fila["valor1"]."'>".$fila["respuesta1"]."</option>";
    	echo "<option value='".$fila["valor2"]."'>".$fila["respuesta2"]."</option>";
    	echo "<option value='".$fila["valor3"]."'>".$fila["respuesta3"]."</option>";
   echo "</select>";
	}
	echo  "<input type='hidden' name='codigo' value='".fila."'/>";

	echo  "<input type='submit' name='enviar' value='Enviar'/>";


	 echo "</form>";

  	}else{

  	}
  	?>
	</div>
<!-- fin CONTENIDO-->
<?php
include("includes/pie.php");
include("includes/finHTML.php");
?>
