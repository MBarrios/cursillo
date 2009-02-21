<script language="JavaScript" type="text/javascript">
  function setValue(){
  	document.getElementById["img"].value="amaia";
  	document.getElementById["img"].value=document.getElementById["i"].src;
  }
  function enviar(){
  	document.f.submit();
  }
</script>

<?php
$resultado=mysql_query($sql);
		while($fila=mysql_fetch_array($resultado)){
			echo "<tr>";
			echo "<td>".$fila["titulo"]."</td>";
			echo "<td>".$fila["autor"]."</td>";
			echo "<td>".$fila["paginas"]."</td>";
			echo "<td>".$fila["idioma"]."</td>";
			echo "<td>".$fila["cd"]."</td>";
			if($fila["prestado"]==0)
				echo "<td>No</td>";
			else
				echo "<td>Si</td>";
			echo "<td>".$fila["descripcion"]."</td>";
			echo "<td><img onclick='document.getElementById['img'].value='amaia';' id='i' src='fotos/minis/".$fila["wfoto"]."' /></td>";
			echo "</tr>";
		}
		echo "</tbody></table>";
?>

  <form action="detalle_libro.php" method="get" name="f" id="f">

  <input type="text" name="img" id="img"  size="40" maxlength="40"/>


  </form>
