<?php
	/*definición doctype, head(hoja de estilo), inicio del body y del div general*/
	include("include/inicioHTML.php");
	/*cabecera para un usuario sin permisos*/
	include("include/cabecera_usuario.php");
	/*menu para un usuario sin permisos e inicio del contenido*/
	include("include/menu_usuario.php");
	/*crea la conexion a la base de datos utilizando una funcion*/
	include("include/crear_conexion.php");
	conectar_a("biblioteca2");
//recogerl valor libro seleccionado
$sql="select * from libros where id='".$_GET["identificador"]."'";
$resultado=mysql_query($sql);
		while($fila=mysql_fetch_array($resultado)){
?>

	<h4>Ficha del libro:</h4>
	<table border=1>
		<tr>

			<td>Título</td>
			<td><?php echo $fila["titulo"];?></td>
			<td  rowspan="7"><img src="fotos/grandes/<?php echo $fila["wfoto"];?>" /></td>
		</tr>
		<tr>
			<td>Autor</td>
			<td><?php echo $fila["autor"];?></td>
		</tr>
		<tr>
			<td>Páginas</td>
			<td><?php echo $fila["paginas"];?></td>
		</tr>
		<tr>
			<td>Idioma</td>
			<td><?php echo $fila["idioma"];?></td>
		</tr>
		<tr>
			<td>CD</td>
			<?php if($fila["cd"]==0)
				echo "<td>No</td>";
			else
				echo "<td>Si</td>";?>
		</tr>
		<tr>
			<td>Estado</td>
			<?php if($fila["prestado"]==0)
				echo "<td>No</td>";
			else
				echo "<td>Si</td>";?>
		</tr>
		<tr>
			<td>Descripción</td>
			<td><?php echo $fila["descripcion"];}?></td>
		</tr>
	</table>

  <a href="javascript:history.back();">volver</a>

<!-- fin CONTENIDO-->
</div>
<?php
include("include/cerrar_conexion.php");
	include("include/pie.php");
	include("include/finHTML.php");
?>
