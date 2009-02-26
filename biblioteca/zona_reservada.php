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
	include("include/cookie.php");
	checkCookie("bienvenida.php");

?>
<h4>Zona reservada</h4>
<p>Solo si esta registrado como usuario en la db puede acceder a la zona reservada</p>
<form name="login" action="login.php" method="post">
	<label for="usuario"> Usuario:</label>
	<input type="text" name="usuario" /><br />
		<label for="password"> Clave:</label>
	<input type="password" name="password" id="password" />
	<input type="submit" value="aceptar"  onclick="password.value = hex_md5(password.value)" />
</form>
<!-- fin CONTENIDO-->
</div>
<?php
	include("include/pie.php");
	include("include/finHTML.php");
?>

