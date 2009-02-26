<?php

if(!isset($_COOKIE["usuario"])){
   				setcookie("usuario", $_POST["usuario"]);
           		setcookie("password",$_POST["password"]);
				}
	/*llamada a la funcion pasandole como parametro el nombre de la bbdd*/
	include("include/seguridad.php");
	/*definición doctype, head(hoja de estilo), inicio del body y del div general*/
	include("include/inicioHTML.php");
	/*cabecera para un usuario sin permisos*/
	include("include/cabecera_administrador.php");
	/*menu para un usuario sin permisos e inicio del contenido*/
	include("include/menu_administrador.php");
	include("include/cookie.php");
	checkCookie("bienvenida.php");

echo $_COOKIE["usuario"];
echo $_COOKIE["password"];
?>
<h4>Bienvenido a la zona reservada</h4>
<p>Desde esta zona reservada puede gestionar la biblioteca para insertar, borrar, insertar editoriales...</p>
<!-- fin CONTENIDO-->
</div>
<?php
	include("include/pie.php");
	include("include/finHTML.php");
?>
