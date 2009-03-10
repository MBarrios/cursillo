<!--inicio CABECERA-->
<div id="cabecera" class="usuario">
	<?php
include ("menu.php");
?>
	<br />
  <form action="recetas2_links.php" method="get">
  	<label for="palabra" class="etiquetas">Busqueda rapida:</label>
  	<input type="text" name="palabra" id="palabra" value="" size="40" maxlength="40"/>
  <input type="hidden" name="tipo"  value="r.Ingredientes" />
  	<input type="submit" name="enviar" id="enviar"  class="alinear" value="Enviar"/>

  </form>

<!--fin CABECERA-->
</div>