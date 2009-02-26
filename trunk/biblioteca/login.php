<?php


	include("include/crear_conexion.php");
	conectar_a("biblioteca2");
	session_start();



if($_POST){
    $sql="select * from usuarios where usuario='".$_POST["usuario"]."'";
	$resultado=mysql_query($sql);
	if(mysql_affected_rows()>0){
		while($fila=mysql_fetch_array($resultado)){
		if($_POST["password"]==md5($fila["clave"]))
			{
			echo $_POST["usuario"]." estas conectado";
			//usuario y contraseña válidos
   			//se define una sesion y se guarda el dato session_start();
   			$_SESSION["autenticado"] = "si";
   			$_SESSION["usuario"] = $_POST["usuario"];
if(!isset($_COOKIE["usuario"])){
   				setcookie("usuario",$_POST["usuario"]);

           		setcookie("password",$_POST["password"]);
				}
			}
		else
			{
 			//si no existe se va a login.php y pone el valor de error a SI
 			header("Location: zona_reservada.php?errorusuario=si");
			}
		}
	}
}
?>
<script language="JavaScript" type="text/javascript">
  location.href = 'bienvenida.php'
</script>


