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
<div id="contenido" class="recetas">

<h3>Busqueda por ingrediente, elaboracion o tipo de plato</h3>
<form action="recetas2_links.php" method="get" id="busqueda">
	<label for="palabra"  class="etiquetas"> Buscar la palabra clave:</label>
	<input type="text" name="palabra" id="palabra"   class="alinear" value="" />
	<label for="tipo" id="tipoAlinear">en:</label>
	<select name="tipo" id="tipo" >
		<option value="todos">todos</option>
		<option value="r.Ingredientes">ingrediente</option>
		<option value="r.Elaboracion">elaboracion</option>
		<option value="p.Tipoplato">tipo de plato</option>
	</select>
	<input type="submit" name="enviar" id="enviar"value="Enviar"/>
</form>
<h3>AÑADE tu receta</h3>
<form action="recetas2_links.php" method="get" id="añadir" >
	<label for="nombre" class="etiquetas"> Nombre del plato:</label>
	<input type="text" name="nombre" id="nombre"  class="alinear" value="" /><br />
	<label for="comensales" class="etiquetas"> Comensales:</label>
	<input type="text" name="comensales" id="comensales" class="alinear" value="" />
	<label for="tipo"  class="etiquetas">Tipo receta:</label>
	<?php
	$sql="select * from platos";
	$resultado=mysql_query($sql);
	echo "<select name='tipo' id='tipo'  class='alinear'>";
	while($fila=mysql_fetch_array($resultado)){
		echo "<option value='".$fila["CodPlato"]."'>".$fila["Tipoplato"]."</option><br />";
	}
	?>
	</select><br />
	<label for="tiempo"  class="etiquetas"> Tiempo:</label>
	<input type="text" name="tiempo" id="tiempo" class="alinear" value="" /><br />
	<label for="ingredientes"  class="etiquetas"> Ingredientes:</label>
	<textarea name="ingredientes" id="ingredientes" class="alinear" wrap="off">
	</textarea><br />
	<label for="elaboracion"  class="etiquetas"> Elaboracion:</label>
	<textarea name="elaboracion" id="elaboracion" class="alinear" wrap="off">
	</textarea><br />
	<label for="montaje"  class="etiquetas">Montaje:</label>
	<textarea name="montaje" id="montaje"  class="alinear" wrap="off">
	</textarea><br />
	<input type="submit" name="enviarReceta" id="enviarReceta"value="Enviar receta"/>
</form>
<div id="espacio"></div>
<!--final CONTENIDO-->
</div>
<?php

include("includes/pie.php");
include("includes/finHTML.php");
?>
