<?php
include ("includes/inicioHTML.php");
include ("includes/cabecera.php");
include ("includes/crear_conexion.php");
conectar_a("recetas");
?>


<div id="actual">
<?php


if (basename($_SERVER["PHP_SELF"]) == "index.php")
	echo "<p>Portada</p>";
else {
	$pagina = explode(".", basename($_SERVER["PHP_SELF"]));
	echo "<p>" . ucfirst($pagina[0]) . "</p>";
}
?>
</div>
<!-- inicio CONTENIDO-->
<div id="contenido">
  	<div id="encuesta">
  	<?php


if ($_GET) {
	//si se ha votado, sumar el voto
	if (isset ($_GET["enviar"])) {
		$sql = "update encuesta set " . $_GET["opcion"] . "=" . $_GET["opcion"] . "+1";
		if (mysql_query($sql) != 0)
			echo $_GET["id"];
	}
	//se haya votado o no, se muestran los resultados de la encuesta
	$sql = "select * from encuesta where id_encuesta=" . $_GET["id"];
	$resultado = mysql_query($sql);
	if ($fila = mysql_fetch_array($resultado)) {
		$cantidad = $fila["votos1"] + $fila["votos2"] + $fila["votos3"];
		$porcentaje=number_format($fila["votos1"] * 100 / $cantidad, 2);
		echo "<table width='300' border='0'>";
		echo "<tr>";
		echo "<td>".$fila["respuesta1"]."</td>";
		echo "<td><table id='interior1' width='$porcentaje' height='20'><tr><td></td></tr></table></td>";
		echo "<td>".$porcentaje."</td>";
		echo "</tr>";
		$porcentaje=number_format($fila["votos2"] * 100 / $cantidad, 2);
		echo "<tr>";
		echo "<td>".$fila["respuesta2"]."</td>";
		echo "<td><table id='interior2' width='$porcentaje' height='20'><tr><td></td></tr></table></td>";
		echo "<td>".$porcentaje."</td>";
		echo "</tr>";
		$porcentaje=number_format($fila["votos3"] * 100 / $cantidad, 2);
		echo "<tr>";
		echo "<td>".$fila["respuesta3"]."</td>";
		echo "<td><table id='interior3' width='$porcentaje' height='20'><tr><td></td></tr></table></td>";
		echo "<td>".$porcentaje."</td>";
		echo "</tr>";
		echo "</table>";
		echo "total votos:" . $cantidad . "<br />";
		echo "gracias por participar<br />";
		echo "<a href='encuesta.php'>volver</a>";
	}
}
?>
	</div>
<!-- fin CONTENIDO-->
<?php


include ("includes/pie.php");
include ("includes/finHTML.php");
?>

