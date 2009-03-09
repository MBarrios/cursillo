<?php
include("includes/crear_conexion.php");
conectar_a("recetas");
$sql="select * from recetario where CodReceta=".$_GET["id"];
$resultado=mysql_query($sql);
if ($fila=mysql_fetch_array($resultado)){
	echo "<h3>".$fila["Titulo"]."- Comensales:".$fila["Comensales"]."</h3>";
	echo "<h4>Ingredientes:</h4>";
	echo "<img src='IMAGES/fotosrecetas/".$fila["Foto"]."' alt='foto receta' />";
	echo "<div id='ingredientes>'";
	$ingredientes=explode("\n",$fila["Ingredientes"]);
	foreach($ingredientes as $elemento=>$valor)
		echo $valor."<br />";
	echo "<h4>Elaboracion:</h4>";
	echo $fila["Elaboracion"];
	echo "<h4>Montaje:</h4>";
	echo $fila["Montaje"];
}

?>
