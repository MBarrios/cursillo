-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 22-10-2008 a las 16:10:09
-- Versión del servidor: 5.0.41
-- Versión de PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `videoteca`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `actor`
-- 

CREATE TABLE `actor` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nombre` varchar(64) collate utf8_spanish_ci NOT NULL,
  `apellidos` varchar(64) collate utf8_spanish_ci NOT NULL,
  `foto` varchar(80) collate utf8_spanish_ci NOT NULL default 'nofoto.jpg',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=86 ;

-- 
-- Volcar la base de datos para la tabla `actor`
-- 

INSERT INTO `actor` (`id`, `nombre`, `apellidos`, `foto`) VALUES 
(1, 'Harrison', 'Ford', 'harrisonFord.jpg'),
(2, 'Russell', 'Crowe', 'RussellCrowe.jpg'),
(3, 'Lee', 'Marvin', 'nofoto.jpg'),
(4, 'Clint', 'Eastwood', 'ClintEastwood.jpg'),
(5, 'Jean', 'Seberg', 'JeanSeberg.jpg'),
(7, 'Bruce', 'Boxleitner', 'bruceBoxleitner.jpg'),
(8, 'Rutger', ' Hauer', 'nofoto.jpg'),
(10, 'Matthew', 'McConaughey', 'MatthewMcconaughey.jpg'),
(11, 'Daryl', 'Hannah', 'darylHannah.jpg'),
(12, 'Sean', 'Young', 'nofoto.jpg'),
(13, 'Bruce', 'Dern', 'bruceDern.jpg'),
(14, 'Cliff', 'Potts', 'nofoto.jpg'),
(15, 'Joaquin', 'Phoenix', 'nofoto.jpg'),
(16, 'Richard', 'Harris', 'nofoto.jpg'),
(17, 'Djimon', 'Hounsou', 'DjimonHounsou.jpg'),
(18, 'Annette', 'Bening', 'anetteBenning.jpg'),
(19, 'Joanna', 'Cassidy', 'JoannaCassidy.jpg'),
(20, 'Antonio', 'Banderas', 'antonioBanderas.jpg'),
(21, 'Penélope', 'Cruz', 'nofoto.jpg'),
(50, 'James', 'Stewart', 'JamesStewart.jpg'),
(51, 'Kim', 'Novak', 'nofoto.jpg'),
(54, 'Dee', 'Wallaces', 'nofoto.jpg'),
(55, 'Drew', 'Barrymore', 'drewBarrymore.jpg'),
(56, 'Johnny', 'Depp', 'JohnnyDepp.jpg'),
(57, 'Winona', 'Ryder', 'nofoto.jpg'),
(58, 'Martin', 'Landau', 'nofoto.jpg'),
(59, 'Sarah Jessica', 'Parker', 'sarah_jessica_parker.jpg'),
(60, 'Nathalie', 'Wood', 'NathalieWood.jpg'),
(61, 'Russ', 'Tamblyn', 'nofoto.jpg'),
(62, 'Rita', 'Moreno', 'nofoto.jpg'),
(68, 'Jodie', 'Foster', 'JodieFoster.jpg'),
(69, 'Terrence', 'Howard', 'TerrenceHoward.jpg'),
(70, 'Najwa', 'Nimri', 'NajwaNimri.jpg'),
(71, 'Tristán', 'Ulloa', 'nofoto.jpg'),
(72, 'Marí­a', 'Vazquez', 'nofoto.jpg'),
(73, 'Marlon', 'Brando', 'MarlonBrando.jpg'),
(74, 'Al', 'Pacino', 'alPacino.jpg'),
(75, 'Keanu', 'Reeves', 'KeanuReeves.jpg'),
(76, 'Carrie-Anne', 'Moss', 'CarrieAnneMoss.jpg'),
(77, 'Laurence', 'Fishburne', 'nofoto.jpg'),
(78, 'Elijah', 'Wood', 'ElijahWood.jpg'),
(79, 'Sean', 'Astin', 'nofoto.jpg'),
(80, 'Orlando', 'Bloom', 'OrlandoBloom.jpg'),
(81, 'Marisa', 'Paredes', 'nofoto.jpg'),
(82, 'Cecilia', 'Roth', 'nofoto.jpg'),
(83, 'Candela', 'Peña', 'nofoto.jpg'),
(84, 'Carmen', 'Maura', 'carmenMaura.jpg'),
(85, 'Eduardo', 'Noriega', 'EduardoNoriega.jpg');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `actores_por_pelicula`
-- 

CREATE TABLE `actores_por_pelicula` (
  `idpelicula` int(10) unsigned NOT NULL default '0',
  `idactor` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`idpelicula`,`idactor`),
  KEY `app_FK1` (`idpelicula`),
  KEY `app_FK2` (`idactor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Volcar la base de datos para la tabla `actores_por_pelicula`
-- 

INSERT INTO `actores_por_pelicula` (`idpelicula`, `idactor`) VALUES 
(1, 1),
(1, 11),
(1, 12),
(2, 2),
(2, 15),
(2, 16),
(2, 17),
(3, 1),
(3, 18),
(4, 13),
(4, 14),
(13, 54),
(13, 55),
(15, 55),
(15, 57),
(16, 56),
(16, 58),
(16, 59),
(17, 60),
(17, 61),
(17, 62),
(18, 68),
(18, 69),
(19, 70),
(19, 71),
(19, 72),
(20, 73),
(20, 74),
(21, 75),
(21, 76),
(21, 77),
(22, 78),
(22, 79),
(22, 80),
(23, 21),
(23, 81),
(23, 82),
(23, 83),
(24, 21),
(24, 84),
(25, 21),
(25, 70),
(25, 85);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `director`
-- 

CREATE TABLE `director` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nombre` varchar(64) character set utf8 collate utf8_spanish_ci NOT NULL,
  `apellidos` varchar(64) character set utf8 collate utf8_spanish_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

-- 
-- Volcar la base de datos para la tabla `director`
-- 

INSERT INTO `director` (`id`, `nombre`, `apellidos`) VALUES 
(1, 'Ridley', 'Scott'),
(2, 'Mike', 'Nichols'),
(3, 'Robert', 'Zemekis'),
(4, 'Douglas', 'Trumbull'),
(16, 'George', 'Kuckor'),
(17, 'Alfred', 'Hitchcock'),
(18, 'Steven', 'Spielberg'),
(19, 'Steven', 'Spielberg'),
(20, 'Tim', 'Burton'),
(21, 'Jerome', 'Robbins'),
(22, 'Neil', 'Jordan'),
(23, 'Iciar', 'BollaÃ­n'),
(24, 'Francis', 'Ford Coppola'),
(25, 'Andy', 'Wachowski'),
(26, 'Peter', 'Jackson'),
(27, 'Pedro', 'Almodóvar'),
(28, 'Alejandro', 'Amenabar');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `genero`
-- 

CREATE TABLE `genero` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nombre` char(2) character set utf8 collate utf8_spanish_ci NOT NULL,
  `descripcion` varchar(32) character set utf8 collate utf8_spanish_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

-- 
-- Volcar la base de datos para la tabla `genero`
-- 

INSERT INTO `genero` (`id`, `nombre`, `descripcion`) VALUES 
(1, 'CF', 'Ciencia Ficción'),
(2, 'A', 'Aventuras'),
(3, 'D', 'Drama'),
(4, 'C', 'Comedia'),
(5, 'T', 'Terror'),
(7, 'M', 'Musical'),
(18, 'S', 'Suspense'),
(19, 'F', 'Fantástico');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `pelicula`
-- 

CREATE TABLE `pelicula` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `titulo` varchar(64) character set utf8 collate utf8_spanish_ci NOT NULL,
  `idsoporte` int(10) unsigned NOT NULL default '0',
  `idgenero` int(10) unsigned NOT NULL default '0',
  `iddirector` int(11) NOT NULL default '0',
  `sinopsis` text character set utf8 collate utf8_spanish_ci NOT NULL,
  `cartel` varchar(80) character set utf8 collate utf8_spanish_ci NOT NULL default 'nofoto.jpg',
  PRIMARY KEY  (`id`),
  KEY `p_FK1` (`idsoporte`),
  KEY `p_FK2` (`idgenero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

-- 
-- Volcar la base de datos para la tabla `pelicula`
-- 

INSERT INTO `pelicula` (`id`, `titulo`, `idsoporte`, `idgenero`, `iddirector`, `sinopsis`, `cartel`) VALUES 
(1, 'Blade Runner', 1, 1, 1, 'Los Angeles, 2019. Rick Deckard es un Blade Runner, un policia especializado en retirar replicantes, androides que trabajan en las colonias exteriores pero que fueron declarados ilegales despues de una matanza de colonos. \r\n\r\nDeckard esta retirado de su trabajo, odia todo lo que conllevaba. Sin embargo, cinco replicantes escapan de una colonia, secuestrando una nave que va camino de la Tierra, y matando a todos sus tripulantes. Por lo que Deckard es forzado a abandonar el retiro y volver a su antiguo trabajo. Debe retirar a los cinco replicantes.', 'blade_runner.jpg'),
(2, 'Gladiator', 1, 2, 1, 'El gran general romano Máximo ha vuelto a regresar victorioso con sus legiones del campo de batalla. Ahora sólo sueña con el regreso al hogar junto a su esposa e hijo. Pero el agonizante emperador Marco Aurelio tiene una nueva misión para él: heredar su corona. Celoso del favor de que goza Máximo con el emperador, el heredero del trono Comodo ordena su ejecución y la de su familia. Máximo escapa a su destino pero se convierte en esclavo. Entrenado como gladiador, su fama crece en la arena. Vuelve a Roma decidido a vengar la muerte de su familia matando al nuevo emperador Comodo. Máximo ha descubierto que la voluntad del pueblo supera al poder del emperador y sabe que sólo podrá ejecutar su venganza si se convierte en el mayor héroe del imperio.', 'gladiator.jpg'),
(3, 'A propósito de Henry', 2, 3, 2, 'Un abogado de éxito y fortuna recibe casualmente unos disparos durante un atraco a un supermercado; por culpa de ello su cerebro queda dañado, y debe aprender a hablar, andar, leer... sin recordar tampoco nada de su vida anterior. \r\nNunca dejes de ver el aspecto positivo a las cosas... incluso a un disparo en tu cabeza. Un abogado implacable y de mal carácter (estupendo Harrison Ford) sufre un atraco y le disparan. A partir de ese momento, amnésico de todo su pasado, deberá reconstruir su vida y sus recuerdos con la ayuda de su familia, descubriendo que no le gustaba mucho su forma de ser pretérita (por dios... ¡si era abogado!). En fin; un blando y pasteloso melodrama de segundas oportunidades con demasiada "moralina".', 'henry.jpg'),
(4, 'Naves misteriosas', 1, 1, 4, 'Es una pelí­cula que trata sobre la ecologí­a, en una época en que la palabra casi ni existí­a, pero es mucho más que eso, es una pelí­cula diferente a todas cuantas hayais podido ver. Es una película casi intimista, y eso en la CF es muy arriesgado. Es una pelí­cula sin explosiones, sin sonidos estridentes que el THX se encargue de grabarte a cincel en el cerebro, es una pelí­cula incluso sin naves espaciales (si­, ya sé que transcurre dentro de una, pero eso es lo de menos). Salvo honrosas excepciones tuvieron que pasar 25 años para que GATTACA me devolviera parte de la serenidad que me transmitieron esas NAVES.\r\n\r\nEl argumento, para quien no podais disfrutarla, es muy simple: en el siglo XXI la Tierra es estéril y las únicas especies vegetales que sobreviven lo hacen en unas gigantescas naves-invernadero en la órbita de Saturno. Cuando desde la Tierra deciden finalizar el proyecto y destruir todas las naves, uno de los botánicos se vuelve loco (o tiene un momento de lucidez, según se mire) y decide matar al resto de la tripulación y huir con una de los invernaderos (no os he destripado nada de la pelí­cula, todo eso pasa en los primeros 10 minutos). Esta historia unida a una buena interpretación de Bruce Dern (algo histriónico en ocasiones), una aceptable dirección de Trumbull (asisti­ a una conferencia suya en Sitges hace un par de años y todavÃ­a no he podido cerrar la boca) y la música de Joan Baez presente en todo momento, hacen de la pelí­cula lo que es: algo increi­ble.', 'navesmisteriosas.jpg'),
(13, 'E.T. El extraterrestre', 2, 1, 19, 'Una nave extraterrestre abandona precipitadamente un bosque californiano, pero uno de los extraños seres que llegaron a ella se queda por error en la Tierra, en un medio que no es el suyo y lejos de su hogar. Tras vagar por el bosque llega a una granja, donde vive una joven madre con sus hijos. \r\n\r\n\r\nEl desvalido aliení­gena establece un estrecho ví­nculo con el jovencito Elliot, al que comunica sus deseos de volver a su planeta. Elliot y sus amigos le ayudan a escapar de unos insensibles cientí­ficos.', 'et.jpg'),
(15, 'Eduardo Manostijeras', 1, 19, 20, 'La historia, original de Burton, se centraba en una versión de Frankenstein, en la que el inventor-padre de Eduardo, un anciano Vincent Price, fallece dejándolo incompleto.', 'eduardo_manostijeras.jpg'),
(16, 'Ed Wood', 1, 3, 20, 'Ed Wood es un visionario sin ninguna formación académica, aficionado a vestirse de mujer y con muy pocas oportunidades de hacer pelí­culas en un gran estudio. Sin embargo no ceja en su empeñoo de convertirse en un director famoso. Tras reunir a un curioso grupo de personajes, realiza pelí­culas de bajo presupuesto, excéntricas y no muy cuidadas técnicamente.', 'nofoto.jpg'),
(17, 'West Side Story', 2, 7, 21, 'En el West Side de Nueva York se disputan la hegemoní­a dos bandas de jóvenes: los sharks, todos ellos procedentes de Puerto Rico, y los jets, de ascendencia anglosajona. Estos útimos están comandados por Riff, una vez que Tony abandona la pandilla para llevar una vida normal y poder trabajar. Por otra parte, Bernardo, que es el jefe de los puertorriqueños, convive con su hermana, Marí­a, recién llegada de la isla. una noche, en un baile, coinciden los dos grupos y están a punto de provocar una violenta pelea.', 'westsidestory.jpg'),
(18, 'La extraña que hay en ti', 1, 3, 22, 'Erica es una locutora de radio que parece tenerlo todo para ser feliz. Disfruta de su ciudad, Nueva York, de la que habla con pasión en su programa. Está felizmente prometida con el hombre al que ama, y hacen preparativos de boda. Pero todo se hace trizas en una fatídica noche en que salen a pasear con el perro al parque.', 'la_extrana_que_hay_en_ti.jpg'),
(19, 'Mataharis', 3, 3, 23, 'Sigue los pasos de tres mujeres, que trabajan en una agencia de detectives madrileña. Eva, una mujer casada y con dos hijos, sospecha que su marido se ve con una desconocida, por lo que decide seguirle. Carmen descubre que la mujer de su cliente mantiene una relación con el socio de éste. Completa el trí­o Inés, una mujer soltera que recibe un encargo especial de Valbuena, el jefe de la agencia de detectives. ', 'mataharis.jpg'),
(20, 'El padrino', 2, 3, 24, 'Don Vito Corleone es el jefe de una de las cinco familias que ejercen el mando de la Cosa Nostra en Nueva York en los años 40. Don Corleone tiene cuatro hijos; una chica, Connie, y tres varones, Santino, o Sonny, como le gusta que le llamen, Michael y Freddie, al que enví­an exiliado a Las Vegas, dada su incapacidad para asumir puestos de mando en la Familia. Cuando otro capo, Sollozzo, al rechazar el Padrino intervenir en el negocio de estupefacientes, intenta asesinar a éste, empieza una cruenta lucha de violentos episodios entre los distintos grupos.\r\n', 'el_padrino.jpg'),
(21, 'Matrix', 1, 1, 25, '¿Es el mundo lo que parece? Thomas Anderson (Keanu Reeves), programador de una importante empresa de software y asaltador informático de alias Neo, averiguará que no. Con él contactará un extraño grupo encabezado por Morfeo (Lawrence Fishburne), quien le mostrará la verdadera realidad que se esconde tras lo aparente: un mundo dominado por las máquinas, las cuales esclavizan a la Humanidad para utilizar nuestros cuerpos como simple fuente de energía. ¿Pero, y nuestra mente, dónde se encuentra entonces? La respuesta está en Matrix.', 'matrix.jpg'),
(22, 'El Señor de los anillos: La comunidad del anillo', 1, 2, 26, 'Con la ayuda de un grupo de amigos y de valientes aliados, Frodo emprende un peligroso viaje con la misión de destruir el Anillo único. Pero el Señor Oscuro Sauron, quien creara el Anillo, enví­a a sus servidores para perseguir al grupo. Si Sauron lograra recuperar el Anillo, ser­a el final de la Tierra Media.\r\n', 'el_senor_anillos_la_comunidad.jpg'),
(23, 'Todo sobre mi madre', 1, 3, 27, 'Manuela ha perdido el rumbo en su vida tras la muerte de su hijo Esteban, un chico con inquietudes literarias que recopilaba constantemente información sobre su madre. Después de 18 años y en honor a su memoria decide ir a Barcelona para descubrir el paradero de su padre. Allá­, se encontrará con Huma, una conocida actriz de teatro, y, su novia heroinómana, la hermana Rosa y un travesti al que conocí­a hace mucho tiempo, la Agrado.', 'todo_sobre_mi_madre.jpg'),
(24, 'Volver', 1, 4, 27, 'Tres generaciones de mujeres sobreviven al viento solano, al fuego, a la locura, a la superstición e incluso a la muerte a base de bondad, mentiras y una vitalidad sin lí­mites. Ellas son Raimunda (Penélope Cruz) casada con un obrero en paro y una hija adolescente (Yohana Cobo). Sole (Lola Dueñas), su hermana, se gana la vida como peluquera. Y la madre de ambas, muerta en un incendio, junto a su marido (Carmen Maura). ', 'volver.jpg'),
(25, 'Abre los ojos', 1, 3, 28, 'César tiene 25 años y se encuentra en la celda de un psiquiátrico por su propia voluntad. Desde allá­ rememora los momentos vividos antes y después del accidente que le desfiguró la cara. La realidad entonces se confunde con el deseo de conseguir a Sofí­a, la novia de su mejor amigo.', 'abre_los_ojos.jpg');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `soporte`
-- 

CREATE TABLE `soporte` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nombre` char(3) character set utf8 collate utf8_spanish_ci NOT NULL,
  `descripcion` varchar(50) character set utf8 collate utf8_spanish_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Volcar la base de datos para la tabla `soporte`
-- 

INSERT INTO `soporte` (`id`, `nombre`, `descripcion`) VALUES 
(1, 'DVD', 'Digital Versatile Disc'),
(2, 'VHS', 'Video Home System'),
(3, 'LD', 'Laser Disc');

-- 
-- Filtros para las tablas descargadas (dump)
-- 

-- 
-- Filtros para la tabla `actores_por_pelicula`
-- 
ALTER TABLE `actores_por_pelicula`
  ADD CONSTRAINT `actores_por_pelicula_ibfk_5` FOREIGN KEY (`idpelicula`) REFERENCES `pelicula` (`id`),
  ADD CONSTRAINT `actores_por_pelicula_ibfk_6` FOREIGN KEY (`idactor`) REFERENCES `actor` (`id`);

-- 
-- Filtros para la tabla `pelicula`
-- 
ALTER TABLE `pelicula`
  ADD CONSTRAINT `pelicula_ibfk_1` FOREIGN KEY (`idsoporte`) REFERENCES `soporte` (`id`),
  ADD CONSTRAINT `pelicula_ibfk_2` FOREIGN KEY (`idgenero`) REFERENCES `genero` (`id`);
