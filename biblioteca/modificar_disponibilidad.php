<?php
	include("include/seguridad.php");
	/*definición doctype, head(hoja de estilo), inicio del body y del div general*/
	include("include/inicioHTML.php");
	/*cabecera para un usuario sin permisos*/
	include("include/cabecera_usuario.php");
	/*menu para un usuario sin permisos e inicio del contenido*/
	include("include/menu_usuario.php");
	/*crea la conexion a la base de datos utilizando una funcion*/
	include("include/crear_conexion.php");
	conectar_a("biblioteca2");
?>
<h4>Modificar disponibilidad 1/3</h4>
<p>Seleccionar el titulo del libro y ver su disponibilidad</p>
  <form action="modificar_disponibilidad2.php" method="get">
  	<label for="libro">Titulo:</label>
  <select name="libro" id="libro">
    <!-- consulta para rellenar la lista de titulos-->
	<?php
	$sql="select id,titulo from libros";
	echo $sql;
	$resultado=mysql_query($sql);
	echo $resultado;
	while($fila=mysql_fetch_array($resultado)){
		echo "<option value=".$fila["id"].">".$fila["titulo"]."</option>";
	 }
	?>
  </select>
  <input type="submit" name="buscar" id="buscar" value="Buscar"/>
  </form>
<!-- fin CONTENIDO-->
</div>
<?php

	include("include/pie.php");
	include("include/finHTML.php");
?>

