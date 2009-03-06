<?php
include("includes/inicioHTML.php");
include("includes/cabecera.php");
include("includes/crear_conexion.php");
conectar_a("recetas");
?>

<h3>Busqueda por ingrediente, elaboracion o tipo de plato</h3>
<form action="recetas2_links.php" method="get">
	<label for="palabra"> Buscar la palabra clave:</label>
	<input type="text" name="palabra" id="palabra" value="" />
	<label for="tipo">en:</label>
	<select name="tipo" id="tipo">
		<option value="todos">todos</option>
		<option value="r.Ingredientes">ingrediente</option>
		<option value="r.Elaboracion">elaboracion</option>
		<option value="p.Tipoplato">tipo de plato</option>
	</select>
	<input type="submit" name="enviar" id="enviar"value="Enviar"/>
</form>
<h3>AÑADE tu receta</h3>
<form action="recetas2_links.php" method="get">
	<label for="nombre"> Nombre del plato:</label>
	<input type="text" name="nombre" id="nombre" value="" /><br />
	<label for="comensales"> Comensales:</label>
	<input type="text" name="comensales" id="comensales" value="" />
	<label for="tipo">Tipo receta:</label>
	<?php
	$sql="select * from platos";
	$resultado=mysql_query($sql);
	echo "<select name='tipo' id='tipo'>";
	while($fila=mysql_fetch_array($resultado)){
		echo "<option value='".$fila["CodPlato"]."'>".$fila["Tipoplato"]."</option><br />";
	}
	?>
	</select><br />
	<label for="tiempo"> Tiempo:</label>
	<input type="text" name="tiempo" id="tiempo" value="" /><br />
	<label for="ingredientes"> Ingredientes:</label>
	<textarea name="ingredientes" id="ingredientes" rows="10" cols="50" wrap="off">
	</textarea><br />
	<label for="elaboracion"> Elaboracion:</label>
	<textarea name="elaboracion" id="elaboracion" rows="10" cols="50" wrap="off">
	</textarea><br />
	<label for="montaje">Montaje:</label>
	<textarea name="montaje" id="montaje" rows="10" cols="50" wrap="off">
	</textarea><br />
	<input type="submit" name="enviarReceta" id="enviarReceta"value="Enviar receta"/>
</form>
<?php
include("includes/pie.php");
include("includes/finHTML.php");
?>
