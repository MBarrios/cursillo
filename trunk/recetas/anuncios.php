<?php
include ("includes/inicioHTML.php");
include ("includes/cabecera.php");

include ("includes/crear_conexion.php");
conectar_a("recetas");
?>
<!--DIV en el que aparece la seccion en la que estas-->
 <div id="actual">
  <?php


if (basename($_SERVER["PHP_SELF"]) == "index.php")
	echo "<p>Portada</p>";
else {
	$pagina = explode(".", basename($_SERVER["PHP_SELF"]));
	echo "<p>" . ucfirst($pagina[0]) . "</p>";
}
?>
   </div>
<!-- inicio CONTENIDO-->
<div id="contenido">
<div id="tablon">
  <p>Desde este espacio puedes dejar tus anuncios,noticias y sugerencias. Estos son los 5 anuncios mas recientes</p>
  <?php


$sql = "select * from anuncios order by fecha desc limit 0,5";
$resultado = mysql_query($sql);
echo "<table border='0'>";
while ($fila = mysql_fetch_array($resultado)) {
	echo "<tr>";
	echo "<td>Nombre:</td>";
	echo "<td>" . $fila["Nombre"] . " - " . $fila["Fecha"] . "</td>";
	echo "</tr>";
	echo "<tr>";
	//link para mandar correo
	echo "<td>E-Mail:</td>";
	echo "<td>" . $fila["Email"] . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td>Mensaje:</td>";
	echo "<td>" . $fila["Mensaje"] . "</td>";
	echo "</tr>";
}
echo "</table>";
?>
  <form action="anuncios.php" method="get">
	  <label for="nombre">Nombre</label>
	  <input type="text" name="nombre" id="nombre" /><br />
	  <label for="mail">E-mail</label>
	  <input type="text" name="mail" id="mail" /><br />
	  <label for="mensaje">Mensaje</label>
	  <textarea name="mensaje" id="mensaje">
	  </textarea><br />
	  <input type="submit" name="enviar"  value="Enviar"/>
  </form>
  <?php

if ($_GET) {
	echo date("Y-m-d");
	//el valor real de mail deberia ser el cogido del formulario, $_GET["mail"]
	$mail = "airi48@hotmail.com";
	$sql = "insert into anuncios(Nombre,Fecha,Email,Mensaje) values ('" . $_GET["nombre"] . "','" . date("Y-m-d") . "','" . $mail . "','" . $_GET["mensaje"] . "')";
	if (mysql_query($sql) != 0) {

		include ("includes/class.phpmailer.php");
		$correo = new PHPMailer();
		$correo->PluginDir = "includes/";
		$correo->Mailer = "smtp";
		$correo->Host = "areafor.com";
		$correo->SMTPAuth = true;
		$correo->Username = "area1606@areafor.com";
		$correo->Password = "dieciseis";
		$correo->Timeout = 30;
		$correo->Port=25;
		$correo->from = "prueba";
		$correo->AddAddress("airi48@hotmail.com");
		$correo->Subject = "asunto";
		$correo->FromName = "area";
		$correo->Body =$_GET["mensaje"];
		$correo->WordWrap = 50;
		if ($correo->Send())
			echo "mensaje enviado";
		else
			echo "fallo";

echo "a insertado el formulario";
	}
} else
	echo "no se insertaron los datos";
?>
</div>


<!-- fin CONTENIDO-->
</div>
<?php


include ("includes/pie.php");
include ("includes/finHTML.php");
?>
