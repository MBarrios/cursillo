<?php
	/*definición doctype, head(hoja de estilo), inicio del body y del div general*/
	include("include/inicioHTML.php");
	/*cabecera para un usuario sin permisos*/
	include("include/cabecera_usuario.php");
	/*menu para un usuario sin permisos e inicio del contenido*/
	include("include/menu_usuario.php");
	/*crea la conexion a la base de datos utilizando una funcion*/
	include("include/crear_conexion.php");
	session_start();
?>
	<h4>Ficha del libro:</h4>
	<table border=1>
		<tr>

			<td>Título</td>
			<td><?php echo $_SESSION["titulo"];?></td>
			<td  rowspan="7"><img src="fotos/grandes/<?php echo $_SESSION["wfoto"];?>" /></td>
		</tr>
		<tr>
			<td>Autor</td>
			<td><?php echo $_SESSION["autor"];?></td>
		</tr>
		<tr>
			<td>Páginas</td>
			<td><?php echo $_SESSION["paginas"];?></td>
		</tr>
		<tr>
			<td>Idioma</td>
			<td><?php echo $_SESSION["idioma"];?></td>
		</tr>
		<tr>
			<td>CD</td>
			<td><?php echo $_SESSION["cd"];?></td>
		</tr>
		<tr>
			<td>Estado</td>
			<td><?php echo $_SESSION["estado"];?></td>
		</tr>
		<tr>
			<td>Descripción</td>
			<td><?php echo $_SESSION["descripcion"];?></td>
		</tr>
	</table>

  <a href="index.php">volver</a>
  <!-- el link volver tiene que hacerlo con la consulta-->

<!-- fin CONTENIDO-->
</div>
<?php
	include("include/pie.php");
	include("include/finHTML.php");
?>
