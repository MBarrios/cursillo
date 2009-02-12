<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3g.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
	<head>
		<title>Mi pagina</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link href="estilo.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<?php
			//cubo
			/*function volumenCubo($lado){
				$bolumen=pow($lado,3);
			}
			function areaTriangulo ($altura, $base) {
				$area=($altura*$base)/2;
			}
			function calcularIVA($precio,$tipo){
				if($tipo==16)
				$iva=$precio*0.16;
				else
				$iva=$precio*0.07;
			}
			*/function esBisiesto ($año) {
				$bisiesto=false;
				if ($año % 4 == 0 && $año% 100 != 0 || $año % 400 == 0)
					$bisiesto=true;
				return $bisiesto;
			}
			function calPerpetuo($dia,$mes,$año){
			$meses=array("enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre");
			$semana=array("domingo","lunes","martes","miercoles","jueves","viernes","sabado");


			for($i=0;$i<count($meses);$i++)
				if($meses[$i]==$mes)
					$mesNum=$i+1;
            $dia1=Date("$dia/$mes/$año"); //dia construido a partir de los parametros

			/*domingo   0
			  lunes     1
			  martes    2
			  miercoles 3
			  jueves    4
			  viernes   5
			  sabado    6
			*/
			$marcador=0;

			if($año>=1800 && $año<=1899)
				$marcador=5;
			if($año>=1900 && $año<=1999)
				$marcador= 3;
			if($año>=2000 && $año<=2099)
				$marcador=2;
			if($año>=2100 && $año<=2199)
				$marcador=0;


			$ultimosDigitos=$año % 100;
			$doomsday=$marcador+$ultimosDigitos+floor($ultimosDigitos/4)-floor($ultimosDigitos/100)+floor($ultimosDigitos/400);
			/*el 4/4,6/6,8/8,10/10,12/12 de cada ano son doomsday
				9/5,11/7,5/9,7/11
				ultimo dia de febrero
				4 de enero en bisiesto y 3 el resto*/

			if(esBisiesto($año)==true){
				if($mesNum==1){
					$dia2=Date("4/1/$año");
					}
				if($mesNum==2||$mesNum==3){
					$dia2=Date("29/2/$año");
					}
				}
			//si no es bisiesto
			else{
				if($mesNum==1){
					$dia2=Date("3/1/$año");
					}
				if($mesNum==2||$mesNum==3){
					$dia2=Date("28/2/$año");
					}
				}
			if($mesNum==4){
				$dia2=Date("4/4/$año");
				}
			if($mesNum==5){
				$dia2=Date("9/5/$año");
				}
			if($mesNum==6){
				$dia2=Date("6/6/$año");
				}
			if($mesNum==7){
				$dia2=Date("11/7/$año");
				}
			if($mesNum==8){
				$dia2=Date("8/8/$año");
				}
			if($mesNum==9){
				$dia2=Date("5/9/$año");
				}
			if($mesNum==10){
				$dia2=Date("10/10/$año");
				}
			if($mesNum==11){
				$dia2=Date("7/11/$año");
				}
			if($mesNum==12){
				$dia2=Date("12/12/$año");
				}
			if($dia2>0)
			$dias=$dia1+$dia2;
			else
			$dias=$dia1-$dia2;
			$diaDeLaSemana=($doomsday+$dias)%7;
			$hoy=date("d/m/y");
			if ($dia1< $hoy)
			echo "El ". $dia ." de ". $mes." de ".$año." era: ". $semana[$diaDeLaSemana];
			else
			echo "El ".$dia." de ". $mes." de ".$año." sera: ". $semana[$diaDeLaSemana];
			}
			$d=12;
			$m="febrero";
			$a=2009;
			calPerpetuo($d,$m,$a);

		?>
	</body>
</html>
