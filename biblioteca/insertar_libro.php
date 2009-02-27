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
	include("include/cookie.php");
	checkCookies("insertar_libro.php");

?>
<h4>Insertar un nuevo libro</h4>
<p>Desde el siguiente formulario puede insertar un nuevo libro</p>

<form action="insertar_libro2.php" method="post" enctype="multipart/form-data">
	<label for="titulo">Titulo</label>
	<input type="text" name="titulo" id="titulo" value="" size="40" maxlength="40"/>
    <label for="autor">Autor</label>
	<input type="text" name="autor" id="autor" value="" size="40" maxlength="40"/><br />
	<label for="editorial">Editorial</label>
	<select name="editorial">
	    <?php
		$sql="select * from editoriales";
		$resultado=mysql_query($sql);
		while($fila=mysql_fetch_array($resultado)){
			echo "<option value=".$fila["id_editorial"].">".$fila["editorial"]."</option>";
		}
		?>
	 </select>
     <span>Si no existe [<a href="link">ir a insertar editorial</a>]</span><br />
     <label for="paginas">Páginas</label>
	 <input type="text" name="paginas" id="paginas" value="" size="40" maxlength="40"/>
     <label for="idioma">Idioma</label>
	 <input type="text" name="idioma" id="idioma" value="" size="40" maxlength="40"/><br />
 	 <label for="descripcion">Descripcion</label>
	 <textarea name="descripcion" id="descripcion"></textarea><br />
 	 <label>cd</label>
     <input type="radio" name="cd" id="cd" value="1"/>
     <label for="cd">Si</label>
     <input type="radio" name="cd" id="cd" checked value="0"/>
     <label for="cd">No</label><br />
     <label>Prestado</label>
     <input type="radio" name="prestado" id="prestado" value="1"/>
     <label for="prestado">Si</label>
     <input type="radio" name="prestado" id="prestado" checked value="0"/>
     <label for="prestado">No</label><br />
     <label for="claves">Claves</label>
	 <textarea name="claves" id="claves"></textarea><br />
	 <label for="foto">Foto</label>
     <input type="file" name="foto" id="foto" value="Examinar" accept="image/jpg" size="40" maxlength="40"/>

  <input type="submit" name="insertar" id="insertar" value="Insertar"/>



  </form>

<!-- fin CONTENIDO-->
</div>
<?php

	include("include/pie.php");
	include("include/finHTML.php");
?>
