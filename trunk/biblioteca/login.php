<?php
	/*definici�n doctype, head(hoja de estilo), inicio del body y del div general*/
	include("include/inicioHTML.php");
	/*cabecera para un usuario sin permisos*/
	include("include/cabecera_usuario.php");
	/*menu para un usuario sin permisos e inicio del contenido*/
	include("include/menu_usuario.php");
	/*crea la conexion a la base de datos utilizando una funcion*/
	include("include/crear_conexion.php");
	conectar_a("biblioteca2");
if($_POST){
    $sql="select * from usuarios where usuario='".$_POST["usuario"]."'";
	$resultado=mysql_query($sql);
	if(mysql_affected_rows()>0){
	while($fila=mysql_fetch_array($resultado)){
	if($_POST["usuario"]==$fila["usuario"] && $_POST["password"]==md5($fila["clave"]))
		{echo $_POST["usuario"]." estas conectado";
?>
<script language="JavaScript" type="text/javascript">
  location.href = 'bienvenida.php'
</script>
<?php
		}
	else
		echo "el usuario o la contrase�a no son correctas";
}
	}
	else echo "el usuario no existe";
}
else echo "inserte nombre de usuario y contrase�a";
?>



<!-- fin CONTENIDO-->
</div>
<?php
	include("include/pie.php");
	include("include/finHTML.php");
?>

