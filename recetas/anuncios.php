<?php
include ("includes/inicioHTML.php");
include ("includes/cabecera.php");

include ("includes/crear_conexion.php");
conectar_a("recetas");
?>
<!--DIV en el que aparece la seccion en la que estas-->
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
<div id="tablon">
  <p>Desde este espacio puedes dejar tus anuncios,noticias y sugerencias. Estos son los 5 anuncios mas recientes</p>
  <?php

$sql = "select * from anuncios order by fecha desc limit 0,5";
$resultado = mysql_query($sql);
echo "<table border='0'>";
while ($fila = mysql_fetch_array($resultado)) {
	echo "<tr>";
	echo "<td>Nombre:</td>";
	echo "<td>" . $fila["Nombre"] . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>E-Mail:</td>";
	echo "<td>" . $fila["Email"] . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Mensaje:</td>";
	echo "<td>" . $fila["Mensaje"] . "</td>";
	echo "</tr>";
}
echo "</table>";
?>

  <form action="link" method="get">
  <label for="nombre">Nombre</label>
  <input type="text" name="nombre" id="nombre" /><br />
  <label for="mail">E-mail</label>
  <input type="text" name="mail" id="mail" /><br />
  <label for="mensaje">mensaje</label>


  <textarea name="mensaje" id="mensaje">

  </textarea><br />

  <input type="submit" name="enviar"  value="Enviar"/>



  </form>

</div>


<!-- fin CONTENIDO-->
</div>
<?php


include ("includes/pie.php");
include ("includes/finHTML.php");
?>
