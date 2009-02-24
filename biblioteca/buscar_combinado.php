<?php
	/*definición doctype, head(hoja de estilo), inicio del body y del div general*/
	include("include/inicioHTML.php");
	/*cabecera para un usuario sin permisos*/
	include("include/cabecera_usuario.php");
	/*menu para un usuario sin permisos e inicio del contenido*/
	include("include/menu_usuario.php");
	/*crea la conexion a la base de datos utilizando una funcion*/
	include("include/crear_conexion.php");
	/*llamada a la funcion pasandole como parametro el nombre de la bbdd*/
	conectar_a("biblioteca2");
?>
<?php
/*si no se a enviado ningun formulario, no se ha echo busqueda*/
if (!$_POST){
	?>
<h4>Buscar opciones combinadas</h4>
<p>Indicar la palabra de busqueda del libro y/o la disponibilidad del libro</p>
<form action="buscar_combinado.php" method="post">
	<label for="clave">Palabra clave:</label>
	<input type="text" name="clave" id="clave" value="" size="40" maxlength="40"/><br />
    <p>Puede limitar los resultados de la busqueda a:</p>
	<input type="radio" name="estado" id="estado" value="1"/>
	<label for="estado">Prestados</label>
    <input type="radio" name="estado" id="estado" value="0"/>
	<label for="estado">No prestados</label>
	<input type="radio" name="estado" id="estado" value=""1" or prestado="0""/>
	<label for="estado">Todos</label><br />
  <input type="submit" name="buscar" id="buscar" value="Buscar"/>
</form>
<?php
}
/*si se ha "seleccionado" algun tipo de busqueda*/
else{
	echo "<h4>Ficha del libro:</h4>";
	include("include/rellenarCabeceraTablaBusqueda.php");
	    if(!isset($_POST["clave"])){
			$sql="select * from libros where prestado=".$_POST["estado"];
	    }
	    else{
	    	$sql="select * from libros where prestado=".$_POST["estado"]." and claves like '%".$_POST["clave"]."%'" ;
	    }
	include("include/rellenarTablaIndex.php");
}
?>
<!-- fin CONTENIDO-->
</div>
<?php
	include("include/pie.php");
	include("include/finHTML.php");
?>
