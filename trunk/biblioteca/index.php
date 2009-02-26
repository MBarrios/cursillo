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
<h4>Buscar por diferentes conceptos</h4>
<form action="index.php" method="post">
	<label for="lista_titulos">Titulo</label>
	<select name="lista_titulos" id="lista_titulos">
	<!-- consulta para rellenar la lista de titulos-->
	<?php
	$sql="select id,titulo,autor from libros";
	$resultado=mysql_query($sql);
	while($fila=mysql_fetch_array($resultado)){
		echo "<option value=".$fila["id"].">".$fila["titulo"]."</option>";
	 }
	?>
	</select>
	<input type="submit" name="buscar_titulo" id="buscar_titulo" value="Buscar" />
</form>
<form action="index.php" method="post">
	<label for="lista_autores">Autor</label>
	<select name="lista_autores">
	<!-- consulta para rellenar la lista de autores-->
	<?php
	$sql="select id,titulo,autor from libros";
	$resultado=mysql_query($sql);
	while($fila=mysql_fetch_array($resultado)){
		echo "<option value=".$fila["autor"].">".$fila["autor"]."</option>";
	 }
	?>
	</select>
	<input type="submit" name="buscar_autor" id="buscar_autor" value="Buscar" />
</form>
<form action="index.php" method="post">
	<label for="lista_editoriales">Editorial</label>
	<select name="lista_editoriales">
	<!-- consulta para rellenar la lista de editoriales-->
	<?php
	$sql="select * from editoriales";
	$resultado=mysql_query($sql);
	while($fila=mysql_fetch_array($resultado)){
		echo "<option value=".$fila["id_editorial"].">".$fila["editorial"]."</option>";
	}
	?>
	</select>
	<input type="submit" name="buscar_editorial" id="buscar_editorial" value="Buscar" />
</form>
<?php
}
/*si se ha "seleccionado" algun tipo de busqueda*/
else{
	session_start();
	echo "<h4>Ficha del libro:</h4>";
	include("include/rellenarCabeceraTablaBusqueda.php");
	/*si la busqueda es por titulo...*/
	if(isset($_POST["lista_titulos"])){
		$sql="select * from libros where id='".$_POST["lista_titulos"]."'";
		include("include/rellenarTablaIndex.php");
	}
	else{
		/*si la busqueda es por autor...*/
		if(isset($_POST["lista_autores"])){
			$sql="select * from libros where autor like '".$_POST["lista_autores"]."%'";
			include("include/rellenarTablaIndex.php");
	    }
		else
			/*si la busqueda es por editoriales...*/
			if(isset($_POST["lista_editoriales"])){
				$sql="select * from libros inner join editoriales on libros.id_editorial=editoriales.id_editorial and editoriales.id_editorial='".$_POST["lista_editoriales"]."'";
				include("include/rellenarTablaIndex.php");
		 }
	}
}

?>
<!-- fin CONTENIDO-->
</div>
<?php
include("include/cerrar_conexion.php");
	include("include/pie.php");
	include("include/finHTML.php");
?>
