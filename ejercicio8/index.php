<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3g.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
  <head>
    <title>Mi pagina</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="estilo.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="general">
      <div id="cabecera">
        <div id="dcha">
          <h3>Factura</h3>
            <p>n: 23244</p>
        </div>
        <div id="datos_cliente">
    <?php
    $datos_cliente=array("cliente1"=> "Anuncios kalo", "direccion"=>"avda navarra 34 bajo","cp"=>"20013","poblacion"=>"donostia","provincia"=>"guipuzcoa");
    $datos_factura=array(array("4","ord_asus",100),array("7","monitor",40),array("18","raton",6));
    foreach($datos_cliente as $dato=>$valor){
      echo $valor." ";
      if($dato!="poblacion")
        echo "<br />";
    }
    //final datos cliente y cabecera
    echo "</div>";
     echo "</div>";
    echo "<div id='factura'>";

    echo "<div id='col1'class='col'>";
    echo "<span class='atrib'>Concepto</span><br />";
	foreach($datos_factura as $pedido){
		echo "<span id='concepto'>$pedido[1]</span><br />";
	}
	 echo "<span>Total sin iva</span><br />";
	 echo "<span>IVA 16%</span><br />";
	 echo "<span>Total con iva</span><br />";
	//final col1
	echo "</div>";

	 echo "<div id='col2'class='col'>";
    echo "<span class='atrib'>Unidades</span><br />";
	foreach($datos_factura as $pedido){
		echo "<span id='unidades'>$pedido[0]</span><br />";
	}

	 //final col2
	echo "</div>";
     echo "<div id='col3'class='col'>";
    echo "<span class='atrib'>Total</span><br />";
    $total=0;
	foreach($datos_factura as $pedido){
		$total_prod=$pedido[0]*$pedido[2];
		$total=$total+$total_prod;
		echo "<span id='totales'>".$total_prod."</span><br />";
	}
	echo "<span class=tot>$total</span><br />";
	echo "<span class=tot>$total*0.16</span><br />";
	echo "<span class=tot>$total+$total*0.16</span>";
	//final col3
	echo "</div>";


    ?>
    	<!--final factura-->
    	<div id="pie"></div>
    	</div>
    <!--final general-->
    </div>
  </body>
</html>