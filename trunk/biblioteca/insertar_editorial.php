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
//	include("include/cookie.php");

	if(!$_GET){
?>
<h4>Insertar nueva editorial</h4>
<p>Desde el siguiente formulario puede insertar una nueva editorial</p>
 <form action="insertar_editorial.php" method="get">
  <label for="editorial">Editorial</label>
  <input type="text" name="editorial" value="" id="editorial" size="40" maxlength="40"/>
  <input type="submit" name="insertar" id="insertar" value="Insertar" /><br />
</form>
	<!-- consulta para rellenar la lista de titulos-->
	<h4>Listado de editoriales</h4>
	<?php
	$sql="select * from editoriales";
	$resultado=mysql_query($sql);

	echo "<ul id='editoriales'>";
	while($fila=mysql_fetch_array($resultado)){
		echo "<li class='lis'>".$fila["editorial"]."</li>";
	 }
	echo "</ul>";
	}
	else{
	$sql="select * from editoriales where editorial='".$_GET["editorial"]."'";
	$resultado=mysql_query($sql);
	if(mysql_affected_rows()>0)
		echo "la editorial ya esta en la base de datos";
	else{
		$sql="insert into editoriales (editorial) values ('".$_GET["editorial"]."')";
		$resultado=mysql_query($sql);
		if(mysql_affected_rows()>0){
			echo "la editorial se ha guardado correctamente en la base de datos";
		}
		else echo "a ocurrido un error al guardar la editorial";
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
