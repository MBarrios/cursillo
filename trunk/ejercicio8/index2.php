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
    $datos_factura=array(array("4","ord.asus",100),array("7","monitor",40),array("18","raton",6));
    foreach($datos_cliente as $dato=>$valor){
      echo $valor." ";
      if($dato!="poblacion")
        echo "<br />";
    }
    //final datos cliente y cabecera
    echo "</div></div>";
    echo "<div id='factura_cab'><div id='concepto'></div><div id='unidades'></div><div id='total'></div>";
    foreach($datos_factura as $pedido){

      echo "<div id='pedido'>";
      for($i=0;$i<count($pedido);$i++){
        if($i!=2)
          echo "<div id='dato'>$pedido[$i]</div>";
      }
      $total_prod=$pedido[0]*$pedido[2];
      echo "<div id='total'>$total_prod</div>";

      //final div pedido
      echo "</div>";

    }
    ?>
    </div>
  </body>
</html>