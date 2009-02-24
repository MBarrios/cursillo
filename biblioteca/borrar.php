<?php
	include("include/seguridad.php");
	/*definición doctype, head(hoja de estilo), inicio del body y del div general*/
	include("include/inicioHTML.php");
	/*cabecera para un usuario sin permisos*/
	include("include/cabecera_administrador.php");
	/*menu para un usuario sin permisos e inicio del contenido*/
	include("include/menu_administrador.php");
	/*crea la conexion a la base de datos utilizando una funcion*/
	include("include/crear_conexion.php");
	/*llamada a la funcion pasandole como parametro el nombre de la bbdd*/
	conectar_a("biblioteca2");

	if(!$_GET){
?>
<h4>Borrar libro</h4>
<p>Desde el siguiente formulario puede borrar un libro</p>

  <form action="borrar.php" method="get">
  <label for="titulo">Titulo</label>
  <select name="titulo" id="titulo">
	<!-- consulta para rellenar la lista de titulos-->
	<?php
	$sql="select id,titulo,autor from libros";
	$resultado=mysql_query($sql);
	while($fila=mysql_fetch_array($resultado)){
		echo "<option value=".$fila["id"].">".$fila["titulo"]."</option>";
	 }
	?>
	</select>
	<input type="submit" name="borrar" id="borrar" value="Borrar" />
</form>
<?php
	}
	else{
    $sql="delete from libros where id=".$_GET["titulo"];
		$resultado=mysql_query($sql);
	if(mysql_affected_rows()>0)
		echo "el libro sido borrado";
	else
		echo "a ocurrido un error al borrar el libro";
	}
?>

<!-- fin CONTENIDO-->
</div>
<?php
	include("include/pie.php");
	include("include/finHTML.php");
?>
