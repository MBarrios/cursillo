-- phpMyAdmin SQL Dump
-- version 2.6.0-pl3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost:3306
-- Tiempo de generación: 09-10-2008 a las 12:46:15
-- Versión del servidor: 4.1.18
-- Versión de PHP: 5.0.5
-- 
-- Base de datos: `recetas`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `anuncios`
-- 

CREATE TABLE `anuncios` (
  `IdMensaje` int(10) NOT NULL auto_increment,
  `Nombre` varchar(50) default NULL,
  `Fecha` date default NULL,
  `Email` varchar(50) default NULL,
  `Mensaje` longtext,
  PRIMARY KEY  (`IdMensaje`),
  KEY `IdMensaje` (`IdMensaje`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `anuncios`
-- 

INSERT INTO `anuncios` VALUES (57, 'Marisa', 0x323030382d30342d3330, 'mari@gmoil.com', 'Me gustaria que alguien me mandara la receta de la tarta de manzana. Gracias.');
INSERT INTO `anuncios` VALUES (58, 'Pepe', 0x323030382d30342d3330, 'pepon@mail.mm', 'Necesito aprender a freir un huevo...');
INSERT INTO `anuncios` VALUES (59, 'Juana', 0x323030382d30342d3330, 'xxx@kk.es', 'Vendo una fondue, está como nueva, solo se ha usado un par de veces. ');
INSERT INTO `anuncios` VALUES (60, 'Luisa', 0x323030382d30342d3330, 'luisi@gmail.com', 'Muchas gracias a todos por vuestra colaboración. Las recetas me han resultado muy útiles. ');
INSERT INTO `anuncios` VALUES (61, 'Laura', 0x323030382d30342d3330, 'lali@lolo.com', 'Alguien sabe comoo se hace la masa para la pizza?');
INSERT INTO `anuncios` VALUES (63, 'Xabi', 0x323030382d30352d3037, 'xbalsera@gmail.com', 'Busco receta para txistorra');
INSERT INTO `anuncios` VALUES (64, 'Eneko', 0x323030382d30352d3037, 'elkartzut@gmail.com', 'Busco receta para un juego de rol comestible...');
INSERT INTO `anuncios` VALUES (65, 'Juan Ander', 0x323030382d30352d3037, 'jdhuf@ekov.dc', 'Hombre poco hombre busca macho poco macho');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `encuesta`
-- 

CREATE TABLE `encuesta` (
  `id_encuesta` int(10) NOT NULL auto_increment,
  `pregunta` varchar(50) default NULL,
  `respuesta1` varchar(50) default NULL,
  `respuesta2` varchar(50) default NULL,
  `respuesta3` varchar(50) default NULL,
  `votos1` int(10) default NULL,
  `votos2` int(10) default NULL,
  `votos3` int(10) default NULL,
  PRIMARY KEY  (`id_encuesta`),
  KEY `id_encuesta` (`id_encuesta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `encuesta`
-- 

INSERT INTO `encuesta` VALUES (1, '¿Dedicas tiempo a la reposteria?', 'mucho', 'poco', 'nada', 105, 43, 170);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `glosario`
-- 

CREATE TABLE `glosario` (
  `id_glosario` int(10) NOT NULL auto_increment,
  `palabra` varchar(255) default NULL,
  `descripcion` longtext,
  PRIMARY KEY  (`id_glosario`),
  KEY `id glosario` (`id_glosario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `glosario`
-- 

INSERT INTO `glosario` VALUES (1, 'ACARAMELAR', 'Revestir las paredes interiores de un molde o la superficie deun alimento con una capa del caramelo que se obtiene de fundir el azúcarmediante la acción del calor.');
INSERT INTO `glosario` VALUES (2, 'ADOBAR', 'Aderezar con especias, jugos, hierbas, etc., el pescado o lacarne en crudo para darles mejor sabor o facilitar su conservación.');
INSERT INTO `glosario` VALUES (3, 'AMASAR', 'Trabajar con las manos una mezcla en la que domina siempre laharina, hasta darle la consistencia deseada.');
INSERT INTO `glosario` VALUES (4, 'ASAR', 'Cocer un alimento en asador o al horno');
INSERT INTO `glosario` VALUES (5, 'BAÑO MARIA', 'Forma indirecta de calentar un alimento introduciendo la vasijaque lo contiene en otra con agua que, al calentarse, le transmite su calor.');
INSERT INTO `glosario` VALUES (6, 'BATIR', 'Agitar enérgicamente, con ayuda del batidor u otro utensiliosimilar, sustancias liquidas (huevos, salsas) para que se espumen.');
INSERT INTO `glosario` VALUES (7, 'BLANQUEAR', 'Hervir alimentos en agua adicionada de determinadas sustanciaspara darles un color más blanco.');
INSERT INTO `glosario` VALUES (8, 'BRASEAR', 'Cocer a fuego lento un alimento con su correspondiente aliño ygrasa en una cazuela bien tapada.');
INSERT INTO `glosario` VALUES (9, 'COCER', 'Someter a la acción del calor un alimento, bien sea en agua,caldo, salsa, al vapor o al baño María. Cocer lentamente es muy importantepara conseguir el punto, sabor y aroma de cualquier guiso. Cocer al vapor:Cocinar alimentos con el vapor del agua hirviendo.');
INSERT INTO `glosario` VALUES (10, 'CONDIMENTAR', 'Añadir sal, pimienta, especias, etc., a un guiso, segúnindicaciones de la receta.');
INSERT INTO `glosario` VALUES (11, 'CUAJAR', 'Espesar o dar solidez a un liquido mediante la acción del caloro la adición de una sustancia como gelatina, etc.');
INSERT INTO `glosario` VALUES (12, 'DESHUESAR', 'Quitar los huesos a las aves y otras carnes. Para no deshacerlasen la operación debe aplicarse la técnica adecuada a cada caso.');
INSERT INTO `glosario` VALUES (13, 'DESLEÍR', 'Mezclar una sustancia con un liquido hasta que se disuelva.');
INSERT INTO `glosario` VALUES (14, 'DORAR', 'Dar un "bonito" color dorado a los alimentos, ya seafriéndolos o cociéndolos al horno después de haberlos recubierto de aceite,mantequilla, manteca de cerdo etc.');
INSERT INTO `glosario` VALUES (15, 'EMPANAR', 'Pasar un alimento por huevo batido y rebozar en pan rallado parafreírlo.');
INSERT INTO `glosario` VALUES (16, 'ESCABECHAR', 'Poner los alimentos en usa salsa o adobo en vinagre, hojas delaurel y otros ingredientes que alargan su conservación y da un saborcaracterístico.');
INSERT INTO `glosario` VALUES (17, 'ESCALDAR', 'Sumergir durante un minuto en agua hirviendo los alimentos quequieran ablandarse o pelarse con facilidad.');
INSERT INTO `glosario` VALUES (18, 'ESCURRIR', 'Eliminar los líquidos de los sólidos con un tamiz, colador opaño.');
INSERT INTO `glosario` VALUES (19, 'ESPOLVOREAR', 'Salpicar con harina, azúcar, pimienta o sal.');
INSERT INTO `glosario` VALUES (20, 'ESPUMAR', 'Quitar con una espumadera las impurezas de un caldo o una grasahasta dejar limpia la superficie.');
INSERT INTO `glosario` VALUES (21, 'ESTOFAR', 'Condimentar un alimento con aceite, ajo, cebolla, especias,laurel, etc., poniéndolo todo a cocer en crudo.');
INSERT INTO `glosario` VALUES (22, 'FONDO', 'Caldo de huesos y despojos reducidos y concentrados.');
INSERT INTO `glosario` VALUES (23, 'FORRAR', 'Recubrir las paredes y el fondo de un molde con sustancias,papel o alimentos que eviten la adherencia del producto que ha deintroducirse en el molde o hayan de quedar cubriendo cuando se saque de el.');
INSERT INTO `glosario` VALUES (24, 'FREIR', 'Cocer un alimento en aceite o mantequilla hirviente.');
INSERT INTO `glosario` VALUES (25, 'GLASEAR', 'Dar brillo a la superficie de los alimentos. En repostería sepuede conseguir con una capa de azúcar a punto de caramelo, chocolate,mermelada, etc. En las carnes se logra rociándolas con su jugo algo graso yasándolos a fuego vivo.');
INSERT INTO `glosario` VALUES (26, 'GRATINAR', 'Doraral horno alimentos espolvoreados con queso, pan rallado, mantequilla, azúcar,etc.');
INSERT INTO `glosario` VALUES (27, 'HERVIR', 'Coceren liquido a una temperatura de 100 grados centígrados.');
INSERT INTO `glosario` VALUES (28, 'HORNEAR', 'Coceren el horno mediante calor seco.');
INSERT INTO `glosario` VALUES (29, 'LIGARO TRABAR', 'Espesarun jugo o salsa mediante la adición de otras sustancias como harina, miga depan, huevo, nata, etc.');
INSERT INTO `glosario` VALUES (30, 'MACERAR', 'Someterun alimento sólido (carne, pescado etc.) a la acción de determinados líquidos(vinagre, vino, licor, etc.) a la temperatura ambiente, para ablandarlo o darleotro sabor.');
INSERT INTO `glosario` VALUES (31, 'MECHAR', 'Introducirmechas (tiras estrechas y alargadas) de tocino, jamón, etc., en las carnes ypescados con ayuda de una aguja especial.');
INSERT INTO `glosario` VALUES (32, 'MOLDEAR', 'Darforma a mano o con molde a un alimento.');
INSERT INTO `glosario` VALUES (33, 'MONTAR', 'Batirrápidamente para introducir aire en el producto que se bate.');
INSERT INTO `glosario` VALUES (34, 'MOUSSE', 'Preparadosmuy ligeros a base de nata batida o claras de huevo a punto de nieve.');
INSERT INTO `glosario` VALUES (35, 'PICAR', 'Cortaren trozos muy menudos el alimento que se desee convertir en pasta o picadillocon ayuda de un cuchillo o pasándolo por la maquina de picar.');
INSERT INTO `glosario` VALUES (36, 'PICATOSTES', 'Trozospequeños de pan, tostados o fritos, que se sirven con la sopa o comoguarnición.');
INSERT INTO `glosario` VALUES (37, 'PUNTODE NIEVE', 'Clarasde huevo que previa separación meticulosa de las yemas, se han batidoenérgicamente con  una pizca de sal durante un buen rato, hasta obteneruna masa blanca, densa, que no caiga del plato al darle la vuelta.');
INSERT INTO `glosario` VALUES (38, 'RALLAR', 'Desmenuzaruna vianda raspándola con el rallador o pasándola por la maquina de rallar.');
INSERT INTO `glosario` VALUES (39, 'REBOZAR', 'Envolveren huevo, harina o azúcar algún alimento.');
INSERT INTO `glosario` VALUES (40, 'REDUCIR', 'Rebajarla cantidad de liquido haciéndolo hervir rápidamente en un recipientedestapado.');
INSERT INTO `glosario` VALUES (41, 'REHOGAR', 'Cocerun alimento en aceite o mantequilla, sin nada de agua y en vasija bientapada.');
INSERT INTO `glosario` VALUES (42, 'RELLENAR', 'Llenarde carne picada u otros ingredientes el interior de un ave, pescado, etc.');
INSERT INTO `glosario` VALUES (43, 'ROCIAR', 'Verterliquido sobre una comida durante la cocción; generalmente vino, coñac o grasacaliente.');
INSERT INTO `glosario` VALUES (44, 'ROMANA', 'Mezclade huevo, harina y leche.');
INSERT INTO `glosario` VALUES (45, 'SALTEAR', 'Moverlos alimentos en mantequilla o aceite caliente al freírlos en una sarténdestapada.');
INSERT INTO `glosario` VALUES (46, 'SOASAR', 'Dorarla carne rápidamente en manteca caliente para evitar que desprenda jugos,antes de asarla al horno o a la parrilla.');
INSERT INTO `glosario` VALUES (47, 'SOFREIR', 'Freírligeramente una vianda sin aderezo, para después cocinarla de otra forma.');
INSERT INTO `glosario` VALUES (48, 'SAZONAR', 'Condimentarcon sal y pimienta.');
INSERT INTO `glosario` VALUES (49, 'TAMIZAR', 'Frotaro presionar alimentos en un tamiz.');
INSERT INTO `glosario` VALUES (50, 'TROCEAR', 'Cortaren forma de dados, generalmente verduras o carne.');
INSERT INTO `glosario` VALUES (52, 'ESCAROLAR', 'Transformar la lechuga en forma de escarola con la ayuda de un tenedor.');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `noticias`
-- 

CREATE TABLE `noticias` (
  `id_noticia` int(10) NOT NULL auto_increment,
  `fecha` date default NULL,
  `titularnoticia` varchar(100) default NULL,
  `desarrollo` longtext,
  `fotonoticia` varchar(50) default NULL,
  PRIMARY KEY  (`id_noticia`),
  KEY `id noticia` (`id_noticia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `noticias`
-- 

INSERT INTO `noticias` VALUES (1, 0x323030382d30342d3330, 'Forum Gastronómico 2008', 'El Forum Gastronómico abrió puntualmente sus puertas el día 1 de Abril. El recinto ferial "El Sucre" de la ciudad de Vic (Barcelona), acogió a los casi 300 congresistas, procedentes de distintos puntos de la geografía española y de países europeos y suramericanos, que se dieron cita para seguir las actividades convocadas.\r\n\r\nAdemás, en los tres primeros días del evento, más de cinco mil visitantes profesionales pasaron por el certamen para visitar el recinto ferial y para seguir los cursos y actividades abiertas, que los organizadores habían previsto.', 'noticia1.jpg');
INSERT INTO `noticias` VALUES (2, 0x323030382d30322d3131, 'Gran éxito de la II edición del Salón Internacional del Vino', 'Cerca de 25.000 personas visitaron la II Edición del Salón Internacional del Vino, celebrada los días 8, 9 y 10 de febrero, en el Palacio Municipal de Congresos del Campo de las Naciones de Madrid. El SIV.2001 reunió, durante sus tres días de celebración, a los principales agentes que intervienen en la industria vitivinícola, tanto nacional como internacional.\r\n\r\nUnas 215 bodegas han expuesto sus productos a los visitantes del SIV 2001, en su mayoría profesionales: productores, distribuidores, hostelería etc. Algunas de ellas procedentes de países como Portugal, Francia, Italia, Austria, Alemania, Eslovenia, Hungría, Nueva Zelanda, Australia y México. Vinos que han despertado la expectación del público visitante, especialmente los de Austria, Nueva Zelanda y Hungría, que precisamente obtuvieron un Premio concedido por el SIV. La práctica totalidad de las regiones productoras de vino del país ha estado representada, algunas en mayor proporción que otras. En este sentido destacan: Castilla-León, Baleares, Valencia, Murcia, Aragón y Madrid.', 'noticia2.jpg');
INSERT INTO `noticias` VALUES (3, 0x323030382d30322d3033, '225 Platos de Plata', 'Este libro original y entrañable es obra de Belén Calderón, una esposa agradecida, como regalo de bodas de plata a su marido, artífice de la mayoría de los platos que en él están recogidos. Con paciencia y tesón, y en el más absoluto secreto, ha recopilado las recetas y ha publicado este bonito libro. En principio, los destinatarios del mismo eran sus amigos y familiares, pero el éxito ha sido tal que se ha visto desbordada y ya está en marcha una segunda edición. 225 Platos de Plata \r\nAutores: Belén Calderón y Alberto Lucas \r\n0Edita: Diverdi, S.L. (91-4477724)', 'noticia3.jpg');
INSERT INTO `noticias` VALUES (4, 0x323030382d30322d3238, 'VI Jornadas Gastronómicas', 'Un año más, parlant i menjant, la asociación de restaurantes de la Montaña de Alicante organiza uno de los eventos cumbres de su calendario, Las Jornadas Gastronómicas, que este año van a celebrarse en el restaurante "El Laurel" del 5 al 8 de marzo. \r\n\r\nAbrirá las jornadas Toni López Prats, del restaurante ?El Riberet?, en Bocairent que después de siete años se ha colocado ya entre los más destacados de la montaña alicantina, en concreto de La Vall D´Albaida, practicando una cocina que combina lo tradicional con toques artísticos de autor, una cocina llena de sencillez elaborada con unas sólidas bases técnicas y con el sabor del producto autóctono como denominador común.\r\n\r\nEl Café de París de Málaga es otro de los invitados en la actual edición. Al frente de la expedición andaluza, José Carlos García, uno de los más jóvenes valores nacionales que se encuentra a la puerta del estrellato. Después de participarde en el II Congreso de Gastronomía celebrado en San Sebastián, hace un alto en el camino para deleitarnos con un menú exquisito, un menú con trasfondo andaluz elaborado con la magistral técnica que imprime a todas sus elaboraciones y que le hace merecedor de tan buenos augurios para un futuro inmediato .', 'noticia4.jpg');
INSERT INTO `noticias` VALUES (5, 0x323030382d30312d3035, 'Cata Internacional de Aguas en Bilbao', 'Un total de veintiuna marcas, cinco de ellas francesas, compitieron en la "I Cata Internacional de Aguas" disputada en la Feria Internacional de Bilbao con motivo de los certámenes de alimentación y hostelería.\r\n\r\nLa prueba estuvo organizada por la Federación de Cofradías Gastronómicas-FECOGA, en la que figuran varias asociaciones francesas, y formaron parte del jurado miembros de dicho organismo, que cataron aguas con y sin gas. \r\n\r\nEstos especialistas otorgaron medallas y diplomas, dándose la circunstancia de que los máximos galardones se los llevaron marcas españolas, una de ellas del País Vasco.  \r\n\r\nEn este volumen, lanzado al mercado por Ediciones B, se recogen más de 120 recetas de cocineros españoles que en sus recetas utilizan un agua natural española, ligera por su baja mineralización. Entre ambos actos, la FECOGA procedió a distinguir como "cofrade de honor" al presidente del Comité ejecutivo de la Feria Internacional de Bilbao, Iñaki Irusta.', 'noticia5.jpg');
INSERT INTO `noticias` VALUES (6, 0x323030382d31302d3035, 'Plácido Domingo brinda en Washington con vino español', 'El tenor regó la cena de gala de la inauguración de la nueva temporada de la ópera de la capital estadounidense con caldos de La Rioja \r\n \r\n La Ópera de Washington ha inaugurado ya su nueva temporada y este año ha contado con un protagonista muy especial, el vino español. En la cena de gala con la que se dio comienzo al nuevo curso, el director de la Ópera, Plácido Domingo, e importantes personalidades de la vida social de la capital disfrutaron de un menú que estuvo regado por tres vinos de Bodegas Ontañón.\r\n\r\nUn blanco y dos tintos de reserva de 1996 de esta bodega de La Rioja fueron los caldos elegidos para acompañar el menú.', 'placido.jpg');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `platos`
-- 

CREATE TABLE `platos` (
  `CodPlato` int(10) NOT NULL auto_increment,
  `Tipoplato` varchar(50) default NULL,
  `icono` varchar(50) default NULL,
  PRIMARY KEY  (`CodPlato`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `platos`
-- 

INSERT INTO `platos` VALUES (1, 'Entradas', 'entrada.gif');
INSERT INTO `platos` VALUES (2, 'Ensaladas', 'ensalada.gif');
INSERT INTO `platos` VALUES (3, 'Arroces', 'arroz.gif');
INSERT INTO `platos` VALUES (4, 'Pastas', 'pasta.gif');
INSERT INTO `platos` VALUES (5, 'Pescados', 'pescado.gif');
INSERT INTO `platos` VALUES (6, 'Carnes', 'carne.gif');
INSERT INTO `platos` VALUES (7, 'Postres', 'postre.gif');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `recetario`
-- 

CREATE TABLE `recetario` (
  `CodReceta` int(10) NOT NULL auto_increment,
  `CodPlato` int(10) default NULL,
  `Titulo` varchar(100) default NULL,
  `Comensales` smallint(5) default NULL,
  `Tiempo` int(10) default NULL,
  `Ingredientes` longtext,
  `Elaboracion` longtext,
  `Montaje` longtext,
  `Foto` varchar(50) default NULL,
  `Portada` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`CodReceta`),
  KEY `{46CB5DFC-6440-4555-A485-A86745795E5B}` (`CodPlato`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `recetario`
-- 

INSERT INTO `recetario` VALUES (1, 1, 'AJOBLANCO CON UVAS Y JAMÓN', 4, NULL, '100 gr de almendras crudas sin piel\r\n100 gr de miga de pan\r\n2 dientes de ajo \r\n1 taza de aceite de oliva\r\n1 litro de agua fría\r\nvinagre de Jerez\r\nsal\r\nPARA LA GUARNICIÓN:\r\n1 loncha de jamón \r\n8 uvas\r\nunas láminas de taifa\r\nperejil', 'Para realizar el ajoblanco introducir todos los ingredientes sólidos en un bol grande. Añadir un poco de agua fría. Batir muy bien. Incorporar más agua, el aceite, el vinagre y la sal.', 'Verter en un cuenco, espolvorear con un picadillo de taifa y acompañar con una brocheta en la que se habrán insertado las guarniciones. Decorar con perejil.', 'entrada1.jpg', 0);
INSERT INTO `recetario` VALUES (2, 1, 'VERDURITAS ESCABECHADAS CON SOLOMILLO IBÉRICO', 4, NULL, '2 solomillos ibéricos \r\n1 cebolla \r\n1 puerro \r\n1 zanahoria \r\n1 rama de apio \r\n8 dientes de ajo \r\n3 hojas de laurel \r\ntomillo\r\npimienta negra en grano\r\naceite de oliva\r\n1 litro de agua \r\nel taza de vinagre de Jerez\r\n\r\nPARA LA GUARNICIÓN:\r\n4 zanahorias babys \r\n4 ramilletes de brócoli \r\n8 guisantes \r\nromero cebollino\r\n2 cucharadas de caldo de carne', 'Para elaborar el escabeche cortar las verduritas, añadir el aceite y sofreír durante unos 8 minutos.\r\nSaltear los solomillos en aceite de oliva y añadirlos a las verduras. Cubrir con el agua y el vinagre y dejar cocer media hora. Enfriar y reservar. Blanquear las verduritas de la guarnición -es decir, introducir en agua hirviendo y rápidamente en agua muy fría y escurrir- y saltearlas en aceite de oliva 1 minuto.', 'En el fondo del plato, poner un poco de aceite, unas láminas de solomillo y, encima, las verduritas. Decorar con romero, cebollino picado, el jugo de escabeche y el caldo de carne.', 'entrada2.jpg', 0);
INSERT INTO `recetario` VALUES (3, 1, 'CREMA DE HONGOS CON MÓLLEJITAS SALTEADAS', 4, NULL, '1 kg de hongos\r\n2 cebollas\r\n1 litro de leche\r\npimienta blanca\r\n4 cucharadas de aceite de oliva\r\n3 cucharadas de caldo de carne\r\nsal\r\n\r\nPARA LA GUARNICIÓN:\r\n200 gr de mollejitas de cordero\r\n2 hongos\r\n3 cucharadas de aceite\r\nperejil rizad', 'Sofreír en aceite de oliva la cebolla muy lentamente. Incorporar los hongos bien limpios y troceados, apartando cuatro para decorar luego el plato.\r\nPasados unos minutos agregar el litro de leche y dejar cocer a fuego lento. Cuando esté hecho, triturar y pasar por el chino. Saltear las mollejitas de cordero en aceite de oliva. Salpimentar.', 'Colocar las mollejítas salteadas en el fondo del plato y sobre ellas verter la crema.\r\nDecorar con hongos, caldo de carne y perejil.', 'entrada3.jpg', 0);
INSERT INTO `recetario` VALUES (4, 1, 'BOLSITAS CRUJIENTES DE GAMBAS Y PUERRO', 4, NULL, '4 láminas de pasta brick\r\n3 puerros \r\n200 gr de gambas peladas\r\n1 tarrina de queso blanco para untar\r\n5 cucharadas de aceite de oliva para el sofrito \r\n1 2 litro de aceite de oliva para la freidora\r\n8 hojas de espinacas frescas\r\n1 remolacha en láminas\r\n8 cucharadas de salsa de frambuesa\r\nsal', 'Blanquear el puerro escaldándolo en agua muy caliente y luego muy fría. Cortar en tiras o hilos estrechos. Picar el resto de las verduras y sofreír en cinco cucharadas de aceite de oliva. Escurrir y ponerlo en un bol, en el que ya tendremos el queso. Batir a mano. Agregar las gambas-a las que habremos dado una vuelta en la sartén con una pizca de aceite-. Batir de nuevo. Salpimentar.\r\nPartir cada lámina en dos y, de los picos superiores, cortar unos seis centímetros. Colocar este pedacito en el centro de cada media lámina y, sobre él, la pasta de queso. \r\nCerrar a modo de bolsita y atar con el puerro escaldado. Freír en freidora o bien en una sartén con el aceite muy caliente.\r\nEscurrir sobre papel absorbente. Freír un minuto las espinacas y la remolacha. Volver a escurrir.', 'En el fondo del plato colocar dos cucharadas de salsa y sobre ella las bolsitas. Decorar con las espinacas y la remolacha crujientes.', 'entrada4.jpg', 0);
INSERT INTO `recetario` VALUES (5, 1, 'HÍGADO DE PATO MARINADO', 4, NULL, '200 gr de hígado de pato fresco\r\naceite de oliva virgen\r\npimienta negra en grano para moler\r\n2 cucharadas de vinagre de Módena\r\nperejil\r\ncebollino\r\nsal Maldon', 'Introducir el hígado en el frigorífico. Cuando esté muy frío sacarlo y cortarlo muy fino con ayuda de un cortafiambres. Cubrir el fondo del plato con aceite de oliva y colocar encima las láminas de hígado. Rociar con el vinagre de Módena, la sal Maldon y la pimienta negra recién molida.\r\nDejar reposar 15 minutos. Decorar con cebollino picado y perejil.', 'No precisa preparación.', 'entrada5.jpg', 0);
INSERT INTO `recetario` VALUES (6, 2, 'ENSALADA DE RÚCULA Y GAMBAS CON VINAGRETA DE HIERBAS', 4, NULL, 'el bolsa de rúcula\r\nunas hojas de lollo rosso\r\n250 gr de gambas peladas\r\n2 dientes de ajo \r\ncebollino\r\n\r\nPARA LA VI1NAGRETA:\r\n6 cucharadas de aceite de oliva \r\n2 cucharadas de vinagre de Jerez \r\n6 cucharadas de mayonesa \r\ncebollino\r\nperejil rizado\r\nsal', 'Lavar la rúcula y el lollo rosso, secar muy bien con un paño de cocina y colocar sobre una fuente. En una sartén con una pizca de aceite\r\nde oliva sofreír el ajo y dar una vuelta a las gambas. Reservar. Introducir los ingredientes\r\nde la vinagreta en un tarro de cristal y agitar.', 'Rociar con la vinagreta el fondo del plato, sobre ella colocar las verduras y las gambas y decorar con palos de cebollino.', 'ensalada1.jpg', 1);
INSERT INTO `recetario` VALUES (7, 2, 'ENSALADA TEMPLADA DE BONITO AL VINAGRE DE JEREZ', 4, NULL, '1 bolsa de ensalada de colores\r\n400 gr de lomos de bonito fresco\r\naceite de oliva\r\ncebollino\r\npimiento rojo en tiras\r\n5 dientes de ajo \r\nsal\r\npimienta\r\n\r\nPARA LA VINAGRETA:\r\n6 cucharadas de aceite de oliva\r\n2 cucharadas de vinagre de Jerez\r\nsal\r\npimienta negra molida', 'Lavar bien la ensalada de colores, secar con un paño y colocarla en el centro de la fuente.\r\nUnir los ingredientes de la vinagreta en un tarro y batir. En una pizca de aceite de oliva sofreír los ajos y dar unas vueltas al bonito. Cortarlo en forma de láminas.', 'Disponer la ensalada en un lado del plato. En el otro, colocar los lomos de bonito, añadir el pimiento rojo en tiras y regar con la vinagreta. Salpimentar y agregar el cebollino picado.', 'nodisponible.jpg', 0);
INSERT INTO `recetario` VALUES (8, 2, 'ENSALADA TEMPLADA DE CHIPIRONES CON VINAGRETA DE AVELLANAS', 4, NULL, '1 bolsa de ensalada de colores: escarola, lo/lo rosso...\r\n500 gr de chipirones\r\n2 cucharadas de aceite de oliva\r\n2 dientes de ajo\r\ncebollino\r\navellanas\r\n\r\nPARA LA VINAGRETA:\r\n6 cucharadas de aceite de oliva \r\n2 cucharadas de vinagre de jerez\r\n1 cucharada de avellanas\r\ncebollino\r\nsal', 'Lavar bien la ensalada y secarla con un paño absorbente. En una pizca de aceite de oliva sofreír el ajo, añadir los chipirones y dejar hacer un par de minutos. Reservar. Para preparar la vinagreta, picar las avellanas y mezclarlas junto con el resto de los ingredientes en un tarro de cristal.', 'Hacer un nido de ensalada en un lateral del plato.\r\nColocar los chipirones en fila y regarlos con la vinagreta.\r\nAñadir algunas avellanas enteras y el aceite\r\nde sofreír los chipirones. Espolvorear con cebollino.', 'ensalada3.jpg', 0);
INSERT INTO `recetario` VALUES (9, 2, 'ENSALADA DE TORTA DEL CASAR CON ACEITUNAS NEGRAS', 4, NULL, '1 bolsa de ensalada de colores\r\n200 gr de queso de Torta del Casar\r\n2 tomates\r\n\r\nPARA LA VINAGRETA:\r\n6 cucharadas de aceite de oliva\r\n2 cucharadas de vinagre de Jerez\r\n10 aceitunas negras muy picadas\r\ncebollino\r\nsal', 'Lavar bien la ensalada y secarla con un paño o papel de cocina. Colocar un montoncito en el centro del plato. Cortar los tomates y situarlos al lado, poniendo sobre ellos el queso de Torta del Casar. Regar con la vinagreta, que se prepara previamente agitando bien todos sus ingredientes en un tarro dc cristal. Por último, decorar con el cebollino y las aceitunas bien picaditas.', 'No precisa preparación.', 'ensalada4.jpg', 0);
INSERT INTO `recetario` VALUES (10, 2, 'ENSALADA DE MANZANA VERDE Y QUESO DE GORGONZOLA', 4, NULL, '4 hojas de lechuga\r\n2 manzanas verdes\r\n2 ramas de apio\r\n200 gr de queso de Gorgonzola\r\n1/2 cebolla cortada en aros\r\ncebollino\r\nnueces peladas\r\nperejil\r\nsal\r\n\r\nPARA LA VINAGRETA:\r\n6 cucharadas de aceite de oliva \r\n2 cucharadas de vinagre de Jerez\r\n10 nueces peladas\r\nsal', 'Lavar la lechuga y el apio, secarlos muy bien con un paño, cortarlos en trocitos y reservar, Lavar bien las manzanas y cortarlas en discos muy finos. En un tarro de cristal unir los ingredientes de la vinagreta y mezclar bien. Reservar.', 'Derretir el queso en el microondas durante 3 minutos a temperatura máxima y disponerlo en el fondo del plato. Rociarlo con parte de la vinagreta, colocar encima los discos de manzana y, a continuación, la lechuga, unas nueces y los aros de cebolla. Agregar el resto de la salsa y decorar con cebollino y perejil. Espolvorear con sal.', 'ensalada5.jpg', 0);
INSERT INTO `recetario` VALUES (11, 3, 'ARROZ CALDOSO CON VERDURITAS', 4, NULL, '4 tazas de arroz \r\n4 zanahorias babys \r\n4 alcachofas \r\n4 cebolletas pequeñas \r\n8 espárragos trigueros \r\n10 judías verdes \r\n8 hongos \r\n3 hojas de laurel \r\nel vaso de vino blanco\r\n10 tazas de agua \r\naceite de oliva\r\nunas hebras de azafrán\r\nperejil\r\nsal\r\n\r\nPARA EL SOFRiTO:\r\n2 cebollas \r\n2 pimientos rojos \r\n4 dientes de ajo \r\naceite de oliva', 'Hacer un sofrito con las hortalizas muy picadas. Incorporar las verduras cortadas. A media cocción, dar unas vueltas en la sartén y agregar el arroz. Cuando esté rehogado, añadir el agua hirviendo, el vino blanco y dejar cocer unos 20 minutos. \r\nHacer un majado con dos dientes de ajo, el perejil, las hebras de azafrán y la sal, y añadirlo al arroz. Dejar reposar unos 5 minutos antes de servir.', 'No precisa preparación.', 'arroz1.jpg', 0);
INSERT INTO `recetario` VALUES (12, 3, 'ARROZ NEGRO CON ALIOLI', 4, NULL, '4 tazas de arroz \r\n3 calamares con su tinta \r\n3 hojas de laurel \r\n1 vaso de vino blanco \r\n8 tazas de caldo de pescado \r\naceite de ojiva\r\nunas hebras de azafrán\r\n1 tarro de ah-oh \r\n2 dientes de ajo \r\ncebollino\r\nperejil\r\nsal\r\n\r\nPARA EL SOFRITO:\r\n2 cebollas\r\n2 pimientos rojos \r\n2 dientes de ajo \r\naceite de oliva', 'Hacer un sofrito con las hortalizas muy picadas. Agregarle los calamares troceados y, a continuación, el arroz. Cuando esté rehogado, incorporar el caldo de pescado, el vino blanco y dejar cocer unos 20 minutos. \r\nPreparar un majado con dos dientes de ajo, el perejil, las hebras de azafrán, la tinta de los calamares y la sal. Extenderlo sobre el arroz y dejar reposar unos 5 minutos.', 'En el fondo del plato colocar el arroz. Sobre él, poner una cucharada de ah-oh y decorar con cebollino. Rociar con tinta de calamar y aceite.', 'arroz2.jpg', 0);
INSERT INTO `recetario` VALUES (13, 3, 'ARROZ CALDOSO DE LA COSTA', 4, NULL, '4 tazas de arroz\r\n1 kg de espinas de rape\r\n250 gr de gambas\r\n200 gr de rape\r\n250 gr de almejas\r\nel sepia\r\n3 hojas de laurel \r\n1 vaso de vino blanco\r\n8 tazas de agua\r\ne aceite de oliva\r\nunas hebras de azafrán\r\n1/2 cucharadita de pimentón\r\n2 dientes de ajo\r\nperejil\r\ncebollino\r\nsal\r\nPARA EL SOFRITO:\r\n2 cebollas\r\n2 pimientos rojos \r\n2 dientes de ajo', 'Hacer un caldo de pescado con un litro de agua, las espinas de rape y las cáscaras de las gambas. Dejar hervir 1 hora y colar. Preparar un sofrito con las hortalizas muy picadas. Después incorporar las almejas bien lavadas, eh rape, has gambas y la sepia. Añadir eh arroz. Cuando esté rehogado, agregar el caldo de pescado, el vino blanco y el pimentón y cocer unos 20 minutos. \r\nHacer un majado con dos dientes de ajo, una pizca de perejil, has hebras de azafrán y la sal. Extenderlo sobre eh arroz.\r\nDejar reposar 5 minutos y espolvorear con perejil. Decorar con cebollino a la hora de servir.', 'No precisa preparación.', 'arroz3.jpg', 0);
INSERT INTO `recetario` VALUES (14, 4, 'CANELONES CON QUESO DE ROQUEFORT', 4, 30, '12 láminas de pasta fresca para canelones\r\n500 gr de carne de ternera picada\r\n1 cebolla \r\n4 pedazos de queso de Roquefort \r\naceite de oliva cebollino\r\nsal\r\npimienta\r\n\r\nSALSA DE ROQUEFORT:\r\n2 bricks pequeños de nata 100 gr de queso de Roquefort', 'Cocer los canelones en abundante agua con sal y un churrito de aceite. \r\nPara hacer la salsa, mezclar la nata y el queso en la batidora. Reservar. \r\nSofreír la cebolla picada en aceite de oliva, añadir la carne picada, salpimentar y sofreír 5 minutos más. Agregar un chorro de salsa de roquefort.\r\nRellenar las láminas de canelones y enrollarlas. Introducir en el horno a temperatura media unos 7 minutos.', 'Colocar en cada plato dos canelones y, al lado, un pedazo de queso con un poco de salsa de roquefort templada. Adornar con cebollino picado y entero.', 'pasta1.jpg', 1);
INSERT INTO `recetario` VALUES (15, 4, 'CINTAS DE PASTA VERDE CON PIÑONES', 4, NULL, '1 paquete de cintas de pasta fresca de espinacas\r\n200 gr de piñones\r\nhojas de albahaca para adornar\r\n\r\nPARA EL ACEITE VERDE:\r\n1 cucharada de perejil \r\naceite de oliva\r\nsal Ma/don', 'Cocer la pasta en abundante agua con sal y un churrito de aceite durante 5 minutos y escurrirla bien. Para hacer el aceite verde, añadir al aceite de oliva el perejil muy picado y un poco de sal Ma/don.', 'Hacer un nido de pasta, espolvorear con los piñones y rociar con el aceite verde. Decorar con unas hojas de albahaca.', 'pasta2.jpg', 0);
INSERT INTO `recetario` VALUES (16, 4, 'TALLARINES SALTEADOS CON LANGOSTINOS Y SALSA DE SOJA', 4, NULL, '1 paquete de tallarines de pasta fresca \r\n200 gr de langostinos pelados\r\n2 dientes de ajo\r\ncebollino\r\nperejil rizado\r\nsalsa de soja\r\naceite de oliva', 'Cocer los tallarines en abundante agua con sal y un churrito de aceite durante 5 minutos. Escurrirlos muy bien. En una sartén con 2 cucharadas de aceite de oliva sofreír los ajos en láminas durante 2 minutos. Añadir los langostinos pelados y saltear 3 minutos. Incorporar los tallarines.', 'Preparar un nido de tallarines y langostinos. Agregar la salsa de soja. Espolvorear con cebollino picado y perejil rizado.', 'pasta3.jpg', 0);
INSERT INTO `recetario` VALUES (17, 4, 'TALLARINES CON HUEVO ESCALFADO Y TRUFA', 4, NULL, '1 paquete de tallarines de pasta fresca\r\n4 huevos\r\n2 dientes de ajo\r\ncebollino\r\n8 cucharadas de aceite de oliva \r\n10 cucharadas de bechamel clarita\r\n1 cucharada de vinagre \r\n2 cucharadas de caldo de carne\r\n1 trufa negra en láminas\r\nperejil\r\nsal\r\npimienta negra', 'Cocer los tallarines en abundante agua con sal y un churrito de aceite de oliva. Escurrirlos muy bien.\r\nSaltear los tallarines con los dientes de ajo en aceite de oliva.\r\nEscalfar los huevos en agua hirviendo con un poco de vinagre.', 'Hacer un nido con los tallarines y la bechamel.\r\nAgregar el huevo escalfado y decorar con el perejil y la trufa en láminas.\r\nRociar con el caldo de carne.', 'pasta4.jpg', 0);
INSERT INTO `recetario` VALUES (18, 5, 'RODABALLO ASADO CON TOMATES SECOS Y CÍTRICOS', 4, NULL, '4 lomos de rodaballo\r\n4 tomates secos\r\n2 pimientos rojos\r\n2 dientes de ajo\r\n1 zanahoria \r\npiel de naranja en tiritas\r\npiel de limón en tiritas\r\naceite de oliva\r\nsal Ma/don\r\nazúcar\r\nhojas de estragón\r\npimienta negra\r\n\r\nPARA EL ALMIBAR:\r\n1/2 1 de agua\r\n5 cucharadas de azúcar', 'Sofreír las verduras en aceite de oliva. Reservar. Escaldar la piel de naranja y limón introduciéndolas primero en agua hirviendo y, a continuación, en agua muy fría. Una vez escaldadas, introducirlas en un almíbar que haremos coçiendo el azúcar en el agua durante 10 minutos. Asar el rodaballo en el horno a fuego medio durante 10 minutos rociándolo con el aceite de oliva.', 'Preparar un bou quet con las verduritas sofritas, colocar encima el rodaballo y, sobre él, las tiras confitadas y el estragón. Espolvorear con sal y añadir el jugo que suelte el asado.', 'pescados1.jpg', 0);
INSERT INTO `recetario` VALUES (19, 5, 'DORADA CON VERDURITAS', 4, NULL, '4 lomos de dorada \r\n400 gr de cebollitas\r\n4 dientes de ajo\r\n4 tomates\r\n1 calabacín\r\n4 cucharadas de aceite de oliva\r\nunas hojas de salvia\r\ncebollino', 'Rociar una bandeja de horno con aceite de oliva, colocar encima las verduritas y meterla en el horno a temperatura media durante 7 minutos. Sacar la bandeja, colocar en ella la dorada y dejarla asar otros 7 minutos.', 'Preparar un bou que! con las verduritas al horno y sobre ellas colocar la dorada. Espolvorear con cebollino y salvia, y bañar con la salsa del asado.', 'pescados2.jpg', 0);
INSERT INTO `recetario` VALUES (20, 5, 'LENGUADO A LA PARRILLA CON FOIE-GRAS', 4, NULL, '2 lenguados en filetes\r\n2 patatas \r\n4 rodajas de foie-gras fresco\r\nperejil rizado\r\n4 ramilletes de coliflor \r\n4 ramilletes de brócoli \r\n4 judías verdes \r\n4 zanahorias baby\r\n1 cucharada de vinagre de Módena \r\n4 cucharadas de aceite de oliva', 'Cortar las patatas para tortilla y poner a freír con el aceite de oliva a fuego muy lento. Sacar y reservar. Cocer las verduritas y darles unas vueltas en la sartén con un churrito de aceite. Reservar.\r\nHacer el foie-gras en una sartén con aceite de oliva -vuelta y vuelta-, añadiéndole en el último momento unas gotas de vinagre de Módena para aromatizar. \r\nUntar el lenguado con aceite de oliva y asarlo en una parrilla durante 7 minutos.', 'En el centro del plato colocar las patatas, sobre ellas los filetes de lenguado y, en medio de éstos, el foie-gras.\r\nHacer una corona alrededor con las verduritas y el jugo de asar.\r\nEspolvorear con sal Ma/don y decorar con el perejil rizado.', 'pescados3.jpg', 0);
INSERT INTO `recetario` VALUES (21, 5, 'MERLUZA CON ALMEJAS', 4, NULL, '4 lomos de merluza de 200 gr cada uno \r\n400 gr de almejas\r\nt cucharada de perejil picado\r\n2 cebollas\r\n2 dientes de ajo\r\n8 hojas de espinacas frescas\r\n2 vasos de agua \r\n4 cucharadas de aceite de oliva\r\nharina\r\npimienta\r\nsal gorda', 'Preparar un majado con ajo, perejil y sal gorda. Sofreír la cebolla en aceite de oliva durante unos 10 minutos. Añadir el majado y el agua a la cebolla sofrita y dejar cocer otros 10 minutos a fuego lento. Batir bien, incorporarlo a una cazuela de barro y colocar encima los lomos de merluza salpimentados y pasados por harina. Agregar las almejas. \r\nMover la cazuela para que ligue la salsa mientras que cuece alrededor de 15 minutos.', 'Colocar en cada plato un lomo de merluza.\r\nDecorarlo con las almejas, la salsa y las espinacas fritas.\r\nSalpimentar.', 'pescados4.jpg', 0);
INSERT INTO `recetario` VALUES (22, 5, 'SALMÓN SOBRE MUSELINA DE PIMIENTOS VERDES', 4, NULL, '4 lomos de salmón \r\n250 gr de pimientos verdes \r\n4 cucharadas de aceite de oliva \r\n4 cucharadas de nata \r\naros de pimiento rojo \r\n4 aros de pimiento verde \r\ncebollino \r\nsal Ma/don', 'Sofreír los pimientos verdes en aceite de oliva y dejar hacer a fuego muy lento durante 15 minutos. \r\nAñadir la nata y pasar por el chino. Reservar esta muselina. \r\nRociar con aceite de oliva el salmón y los aros de pimiento rojo y verde. Introducir en el horno y asar unos 8 minutos.', 'En la base del plato hacer un fondo con la muselina. Sobre ella colocar el salmón, y encima, la sal y el cebollino. \r\nColocar una tira de pimiento rojo y otra verde para decorar.', 'pescados5.jpg', 0);
INSERT INTO `recetario` VALUES (23, 7, 'ARROZ CON LECHE', 4, NULL, '2 litros de leche\r\n150g. Arroz \r\n150g. De azucar\r\n50g. Mantequilla\r\n½ cáscara de limón\r\n½ caña de canela\r\n½ copa de coñac o ¼ copa de anís\r\nUn poco de sal', 'Se pone la leche a hervir con la canela y la corteza del  limón durante 8 ó 9 min. Después con la espumadera se saca la canela y la corteza.\r\nSe echa el arroz y se deja cociendo 50 ó 60 min. A continuación se agrega el azucar y se mueve. Finalmente se echa la manteca, el coñac y se sigue removiendo durante 8 ó 10 min.', 'Una vez terminado se pasa a una fuente o se coloca en tarrinas.', 'arrozleche.jpg', 0);
INSERT INTO `recetario` VALUES (24, 6, 'CHULETAS DE CORDERO CON SALSA DE CHAMPIÑONES', 4, NULL, '12 chuletas de cordero\r\n500gr. De sal\r\n400gr. De champiñones\r\n1 diente de ajo\r\n1 manojo de perejil\r\n½ de pastilla de caldo de carne\r\n4 cucharadas de aceite de oliva\r\n1 cucharada de maizena\r\nSal', ' Limpiar los champiñones y picarlos. Pelar el diente d ajo y añadir los champiñones. Freirlos a fuego vivo durante 10 min, removiendolos de vez en cuando con una cuchara de madera. \r\nAñadir las pastillas de caldo desmenuzada, el perejil y el vino. Cocer 10 min. A fuego muy suave. Condimentar con sal y espesar la salsa con la Maizena diluida en media taza de agua. Reservar. \r\nCubrir una sartén grande con Sal y apretarla con el dorso de una cuchara. Tapar la sarten y calentar durante 3 min.', 'Servirlas inmediatamente, acompañadas de la salsa de champiñones bien caliente.', 'nodisponible.jpg', 0);
INSERT INTO `recetario` VALUES (25, 6, 'ROLLITOS DE POLLO, JAMÓN Y QUESO', 4, 20, '4 filetes de pechuga de pollo\r\n4 lonchas de queso\r\n4 lonchas de jamón serrano\r\n4 cebollas\r\n2 vasos de vino\r\nManzanilla\r\nAceite de oliva\r\nCaldo de ave\r\nSal', 'Doramos la cebolla picada en aceite de oliva, añadimos el caldo y el vino manzanilla cociendo lentamente durante 30 minutos. Pasamos la salsa resultante por un colador chino y reservamos.\r\n\r\nSuperponemos a cada filete de pechuga de pollo una loncha de queso y una de jamón, enrollando y clavando un palillo para que se mantenga el rollito. Freímos estos brevemente y añadimos la salsa, dejando cocer 15 minutos.', NULL, 'nodisponible.jpg', 0);
INSERT INTO `recetario` VALUES (26, 5, 'PORRUSALDA DE SALMÓN', 4, NULL, '1Kg. de salmón (también puede servir atún o bonito)\r\n½ kg . de patatas\r\nUna docena de puerros\r\nAceite de oliva\r\nSal\r\nCaldo de pescado', 'Pelamos y troceamos las patatas y los puerros, poniéndolos a cocer con el caldo de pescado, sal y un chorrito de aceite.\r\n\r\nDespués de una hora de cocción pasamos todo por el colador chino ayudados de una batidora eléctrica. Añadimos una cucharada de nata y el pescado en trozos pequeños y perfectamente desespinado.\r\n\r\nApagamos el fuego y dejamos reposar durante 10 minutos, estando listo para comer.', NULL, 'nodisponible.jpg', 0);
INSERT INTO `recetario` VALUES (27, 7, 'TARTA DE QUESO SIN HORNO', 4, 25, '1 base de bizcochos de dia\r\n1 tarrina de nata pequeña\r\n2 cajas de queso philadelphia\r\n3 laminas de gelatina + 1 vaso de agua\r\n8 cucharadas de azucar\r\ndulce de fresa- kiwis- moras... de adorno', 'Se colocan las laminas de gelatina en agua caliente. Se monta la nata con 4 cucharadas de azúcar. Se echan las tarrinas de queso en un bol y se mezcla con el azúcar restante.\r\nSe echa la gelatina ya disuelta a la nata y al queso. Se mezcla todo bien. Se vierte en la base de bizcocho y se mete en la nevera al menos 4 horas.', NULL, 'nodisponible.jpg', 0);
INSERT INTO `recetario` VALUES (34, 1, 'CREMA DE ESPÁRRAGOS TRIGUEROS', 4, 40, 'espárrago triguero, 500 gramos \r\n caldo de verduras, 1 litro \r\n patata, 2 unidades \r\n sal marina, al gusto \r\n aceite de oliva virgen, 1 cucharada', 'Lavar los espárragos, desechar la parte dura y reservar las puntas. \r\nPelar las patatas, lavarlas y trocearlas; colocar los espárragos, las patatas y el caldo en una olla y cocer una media hora, hasta que todo esté tierno; sazonar, triturar con la batidora y pasar por el chino.', 'Servir caliente con las puntas salteadas en el aceite caliente y daditos de pan frito.\r\n', 'hoy1.jpg', 0);
INSERT INTO `recetario` VALUES (35, 5, 'SALMÓN AL CABRALES', 4, 25, ' salmón, 4 rodajas \r\n queso de cabrales, 150 gramos \r\n cebolla pequeña, 1 unidad \r\n mantequilla, 1 cucharada \r\n sidra, 1/2 taza \r\n aceite de oliva, 1 cucharada \r\n sal, al gusto \r\n? pimienta molida, al gusto', 'Derretir la mantequilla en un cacito y rehogar la cebolla muy picada; cuando esté transparente, añadir el queso desmenuzado y la sidra, removiendo con una cuchara de madera, hasta obtener una crema homogénea. Mantener al baño María.\r\n\r\nLavar las rodajas de salmón, secarlas con papel de cocina. Untarlas con aceite y salpimentar; hacerlas en una sartén antiadherente 2-3 minutos por cada lado, dependiendo del grosor de las rodajas. \r\n', 'Poner en un plato y servir con la salsa en un lado y acompañado con patatitas al vapor', 'hoy2.jpg', 0);
INSERT INTO `recetario` VALUES (36, 7, 'NARANJAS RELLENAS', 4, 30, 'naranja, 4 unidades \r\n plátano, 3 unidades \r\n fresón, 100 gramos \r\n azúcar, 2 cucharadas \r\n cointreau, 1 cucharada \r\n nata montada, 4 cucharadas \r\n bizcocho de soletilla, 5 unidades', 'Cortar la parte superior a las naranjas y extraer la pulpa con mucho cuidado de no romper las cáscaras. Colocar la pulpa en un chino o un colador y aplastar bien con la mano del mortero para extraer todo el jugo.\r\nPelar los plátanos, quitar las hebras de alrededor, trocearlos y machacarlos con las puntas de un tenedor haciendo un puré espeso. \r\nTrocear los bizcochos de soletilla, colocarlos con los plátanosy agregarle el zumo de naranja y el licor. Mezclar.\r\nQuitar las hojitas a los fresones, lavarlos y picarlos.', 'Llenar las cáscaras de las naranjas con el preparado de frutas, colocar los fresones en la superficie, adornar con la nata y servir.', 'hoy3.jpg', 0);
INSERT INTO `recetario` VALUES (38, 2, 'ALCACHOFAS CON JAMON', 6, 65, 'alcachofas\r\njamos\r\naceite\r\najo\r\nperejil', 'Calentar el aceite, incorporar el ajo y el perejil. Una ver caliente incorporar el jamon y las alcachofas. Verter agua y dejar cocer 35 minutos.', 'En plato hondo con tortones de pan de molde fritos en aceite.', 'nodisponible.jpg', 1);
INSERT INTO `recetario` VALUES (42, 5, 'TXITXARRO FRITO', 4, 6, '1 txitxarro de 1 1/2 kg.\r\naceite\r\nguindilla\r\nperejil\r\najo', 'Se calienta el aceite con el ajo y la guindilla y se fríe el pescado 2 minutos por cada lado.\r\n', 'Desespinar los lomos y acompañar con patatas panaderas.', 'nodisponible.jpg', 0);
INSERT INTO `recetario` VALUES (72, 5, 'ALMEJAS EN SALSA VERDE', 4, 15, 'Almejas\r\nAjo\r\nPerejil\r\nHarina\r\nAgua\r\nAceite\r\nSal', 'Lavar bien las almejas para soltar la arena alojada interiormente...', '', NULL, 0);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `suscripciones`
-- 

CREATE TABLE `suscripciones` (
  `id_suscripcion` int(10) NOT NULL auto_increment,
  `email` varchar(50) default NULL,
  `fecha` date default NULL,
  PRIMARY KEY  (`id_suscripcion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

-- 
-- Volcar la base de datos para la tabla `suscripciones`
-- 

INSERT INTO `suscripciones` (`id_suscripcion`, `email`, `fecha`) VALUES 
(69, 'areawm@areafor.com', '2008-10-01'),
(70, 'pepe@gotera.com', '2008-10-05');
