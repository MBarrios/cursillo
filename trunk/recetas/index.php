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
	echo "<span>Portada</span>";
else {
	$pagina = explode(".", basename($_SERVER["PHP_SELF"]));
	echo "<span>" . ucfirst($pagina[0]) . "</span>";
}
?>
  </div>
<!-- inicio CONTENIDO-->
<div id="contenido">
<!--inicio IZQUIERDA-->
<div id="izq">
	<!--inicio PORTADA1-->
	<div id="izq_interior">
		<h4>QUESOS ARTESANALES CANARIOS</H4>
		<div id="imagen1"><img src="IMAGES/portada/quesos_canarios.jpg" alt="quesos canarios" /></div>
		<div id="texto1">
			<p>Los quesos artesanales canarios forman parte del patrimonio cultural las islas; de su produccion dependen numerosas familias de ganaderos repartidos por toda la geografía Canaria, quienes obtienen con la neta de este producto su principal forma de subsistencia.</p>
			<p>Son un lujo alimentario, originados directamente del campo, su forma de elaboración con leche cruda está reconodida en toda Europa bajo diferentes acepciones segun el pais de origen.</p>
		</div>
	<!--fin PORTADA1-->
	</div>
	<!--inicio PORTADA2-->
	<div id="izq_interior">
	<h4>DE TEMPORADA:Mermelada de arándanos rojos</h4>
	<div id="imagen2"><img src="IMAGES/portada/mermelada.jpg" alt="mermelada de arandanos rojos" /></div>
    <div id="texto2">
		<p>Elaboracion:<br />
		Poner en una cacerola al fuego el agua con el azúcar  y hervir. Echar los arándanos lavados y dejar que hierva unos 10 minutos, hasta que las bayas exploten y entonces, bajar el fuego hasta que se reduzca a la mitad. Dejar enfriar a temperatura ambiente y poner en el frigorífico hasta que la salsa se espese por completo. Se sirve fría como mermelada o caliente como salsa.</p>
		<p>Ingredientes:<br />
		250g de arándanos rojos americanos frescos, 150g. de azúcar, 200 ml de agua.</p>
	</div>
	<!--fin PORTADA2-->
	</div>
<!--fin IZQUIERDA-->
</div>
<!--inicio DERECHA-->
<div id="dcha">
<h4>El menu de hoy</h4>

<!--rellenando las tres recetas del menu del dia-->
	<?php


$sql = "select count(*) as cantidad from recetario";
$resultado = mysql_query($sql);
$numRecetaAnterior = "";
if ($fila = mysql_fetch_array($resultado)) {
	$i = 0;
	$cantidad = $fila["cantidad"];
	//crea tres divs con tres recetas diferentes
	while ($i < 3) {
		$numReceta = rand(1, $cantidad);
		$numReceta = $numReceta -1;
		if ($numRecetaAnterior != $numReceta) {
			$sql = "select * from recetario limit $numReceta,1";
			$resultado = mysql_query($sql);
			$numRecetaAnterior = $numReceta;
			if ($fila = mysql_fetch_array($resultado)) {
				echo "<p>" . $fila["Titulo"] . "</p>";
				echo "<div>";

				echo "<div id='img_platos'><img src='IMAGES/fotosrecetas/" . $fila["Foto"] . "' alt='imagen receta: " . $fila["Titulo"] . "' width=60 height=60 /></div>";
				echo "<div>" . substr($fila["Elaboracion"], 0, 50) . "...</div>";
				echo "</div>";
			}
			$i = $i +1;
		}

	}
}
?>
<div id="formulario">
  <form action="index" method="get">
  	<input type="text" name="mail" id="mail" value="e-mail" /><br />
  	<input type="submit" name="enviar" id="enviar" value="Enviar"/>
  	<p>Suscribete al boletin mensual, gracias</p>
  </form >
</div>
<!--fin DERECHA-->
</div>
<div id="espacio"></div>
<!-- fin CONTENIDO-->
</div>
<?php


include ("includes/pie.php");
include ("includes/finHTML.php");
?>
