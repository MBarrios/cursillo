<!--inicio CABECERA-->
<div id="cabecera" class="usuario">
	<?php
		include("menu.php");
	?>
	<br />
  <form action="link" method="get">
  	<label for="busqueda">Busqueda rapida:</label>
  	<input type="text" name="busqueda" id="busqueda" value="" size="40" maxlength="40"/>
  	<input type="submit" name="buscar" id="buscar" value="Buscar"/>
  </form>

<!--fin CABECERA-->
</div>