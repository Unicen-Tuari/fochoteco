-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2015 a las 20:18:34
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `web2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(4) NOT NULL,
  `nombre_categoria` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`) VALUES
(1, 'Disenio Grafico'),
(2, 'Marketing'),
(3, 'Desarrollo Web'),
(4, 'Publicidad'),
(5, 'Tecnologia'),
(6, 'sarasasasa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE IF NOT EXISTS `imagen` (
  `id_imagen` int(6) NOT NULL,
  `ruta` varchar(150) NOT NULL,
  `fk_id_novedad` int(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_imagen`, `ruta`, `fk_id_novedad`) VALUES
(1, 'uploads/imagenes/disenio1.jpg', 1),
(2, 'uploads/imagenes/disenio2.jpg', 2),
(3, 'uploads/imagenes/marketing.jpg', 3),
(4, 'uploads/imagenes/webdesarrollo.jpg', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedad`
--

CREATE TABLE IF NOT EXISTS `novedad` (
  `id_novedad` int(6) NOT NULL,
  `titulo` tinytext NOT NULL,
  `descripcion` text NOT NULL,
  `noticia` mediumtext NOT NULL,
  `fecha_publicacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fk_id_categoria` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `novedad`
--

INSERT INTO `novedad` (`id_novedad`, `titulo`, `descripcion`, `noticia`, `fecha_publicacion`, `fk_id_categoria`) VALUES
(1, 'Wacom Cuida los Negocios', 'Nuevo pen display DTU-1141 soporta un flujo de trabajo intuitivo y ahorra papel con tecnología avanzada de firma electrónica.', ' Bogotá, Colombia, Marzo 24, 2015 -- Wacom® presentó el pen display de alta resolución DTU 1141 para entidades públicas y privadas que buscan la solución mejor en su clase para visualizar y rellenar eDocuments de tamaño completo y firmarlos electrónicamente. En la actualidad, muchos bancos, hospitales, compañías de seguros, departamentos del sector público y tiendas minoristas requieren que los clientes firmen documentos directamente en el mostrador o punto de venta. La solución pen display para firma de Wacom brinda a estas organizaciones una forma efectiva de firmar documentos sin esfuerzo, de forma eficiente y con ahorro de papel.\r\n\r\nLa vívida pantalla LCD a color de 10.6" del nuevo pen display soporta múltiples resoluciones hasta Full HD (1920x1080), lo que proporciona una gran plataforma para prácticamente cualquier aplicación de software de negocios. La calidad de su pantalla permite a los clientes visualizar con claridad el contenido de un documento y firmarlo con confianza, mientras que su superficie solida anti-reflejos asegura una sensación similar al papel y la capacidad de operar en diferentes condiciones de iluminación. Se incluye una avanzada solución de  encriptación RSA/AES para asegurar que las transacciones se realicen de forma segura.\r\n\r\nOfreciendo un diseño de hardware único, el DTU-1141 es adecuado para la mayoría de puntos de venta. Un soporte integrado permite posicionar la pantalla en un ángulo de 15 grados, pero también puede colocarse de forma totalmente plana sobre un mostrador o mesa en caso de requerirse. Para organizaciones que buscan personalizar aún más la orientación, el pen display incluye agujeros de montaje VESA que permite utilizar soportes de terceros. La unidad cuenta con un compartimiento para acomodar el bolígrafo digital cuando no esté en uso y evitar su pérdida. Además, hay una ranura de seguridad que puede utilizarse para evitar el robo del dispositivo en entornos  públicos.\r\n\r\nEl nuevo pen display funciona como un monitor LCD regular y se integra fácilmente a las infraestructuras estándares de TI. Cuando se utiliza con  software de firmas, se convierte en una solución electrónica para visualizar, llenar y firmar documentos comunes en muchas industrias alrededor del mundo. Solo basta conectarlo al PC mediante un cable USB, y se elimina el desorden.\r\n\r\nLas funciones de uso común, tales como página arriba o página abajo  pueden programarse fácilmente en las cuatro ExpressKeys™ personalizables, activadas de forma táctil, lo que facilita una interacción simple con los clientes. El bolígrafo inalámbrico libre de baterías ofrece 1024 niveles de sensibilidad a la presión, mejora la experiencia de escritura natural para el usuario y ofrece una excelente confiabilidad y durabilidad. Además de su ambiente natural inherente, la tecnología de Wacom ofrece un perfil de presión durante los  procesos de escritura y firma. Esto resulta en un perfil biométrico único que puede ser utilizado para fines forenses.\r\n\r\nAdemás de sus capacidades de entrada, el pen display DTU-1141 cuando no está en uso, puede utilizarse para mostrar presentaciones de diapositivas y videos para publicidad y otros fines comerciales. La unidad –altamente durable- ofrece un bajo costo de propiedad, y su integración se simplifica mediante un cable USB único que proporciona video, datos desde el bolígrafo y corriente eléctrica.\r\n\r\nEl pen display Wacom DTU-1141 estará listo para su embarque en Abril. Para obtener más información sobre precios y disponibilidad, por favor consulte el sitio Web de Wacom.\r\n\r\nAcerca de Wacom\r\n\r\nFundada en Japón en 1983, Wacom es una compañía global con oficinas alrededor del mundo para soporte y comercialización en más de 150 países. Durante más de 30 años, Wacom ha trabajado con las personas y organizaciones más creativas, inspirándolos y equipándolos para hacer del mundo un lugar más creativo.\r\n\r\nLos productos de Wacom han sido utilizados por clientes leales para crear algunos de los diseños de arte digital más emocionantes, películas, efectos especiales, moda y productos. También han jugado un papel importante en hacer accesible la tecnología de una forma natural e intuitiva a través de tabletas de lápiz, displays interactivos móviles y de lápiz, soluciones de interfaz digital, productos stylus, así como soluciones eDocument. Todos ellos hacen posible que el mundo  exprese su creatividad en medios digitales, ya sean artistas, ejecutivos de empresas o personas que disfrutan de la creatividad cotidiana.\r\n\r\nLas tecnologías de interfaz de Wacom se ofrecen como soluciones OEM a fabricantes líderes tecnologías Wacom Feel IT integradas en los PC, tabletas y teléfonos inteligentes de muchos socios estratégicos en todo el mundo.', '2015-09-27 16:38:03', 1),
(2, 'Paul Rand, el diseñador que llenó de jovialidad los "logos" de IBM, Yale, UPS, Ford, Westinghouse', 'Paul Rand, uno de los grandes diseñadores gráficos del siglo XX, echaba mano del verbo "jugar" cada vez que le pedían explicaciones sobre la prodigiosa inspiración que le llevó a sembrar de logotipos inolvidables, joviales y coloridos, el paisaje visual de los EE UU y, por extensión, del mundo, a partir de la segunda mitad de la centuria.', 'Paul Rand, uno de los grandes diseñadores gráficos del siglo XX, echaba mano del verbo "jugar" cada vez que le pedían explicaciones sobre la prodigiosa inspiración que le llevó a sembrar de logotipos inolvidables, joviales y coloridos, el paisaje visual de los EE UU y, por extensión, del mundo, a partir de la segunda mitad de la centuria. "Sin juego no existiría Picasso. Sin juego no habría experimentación. El juego es la respuesta a todas las preguntas", declaraba quien, no por capricho, era llamado por sus colegas de oficio "el Picasso del diseño gráfico".\r\n\r\nCiento un años después del nacimiento del revolucionario diseñador de decenas de identidades corporativas, la obra de Rand (1914-1996) se despliega en la exposición Everything is Design (Todo es diseño), una panorámica antología de 150 carteles, logotipos, maquetas de revistas y libros que fueron ideados por el primer estadounidense que empleó y, sobre todo, jugó con la impactante asimetría y el uso de la retícula del Estilo Tipográfico Internacional. La muestra, organizada por el Museo de la Ciudad de Nueva York, estará en cartel hasta el 19 de julio.\r\n\r\nPintaba los carteles para la tienda de su padre\r\nSuele decirse que Rand —nacido en en hogar de judíos del barrio de Brooklyn como Peretz Rosenbaum— fue el gran responsable de humanizar el diseño corporativo. La afirmación no peca de exagerada: el diseñador gráfico, cuyo primer trabajo serio fue en la revista Esquire —aunque ya de niño pintaba carteles para la tienda de alimentación de la familia y pósters para las fiestas escolares—, firmó entre las décadas de los años cuarenta y sesenta decenas de logotipos que llevaron a las empresas estadounidenses a subirse al carro de las influencias de las vanguardias europeas y colocaron en el imaginario colectivo, consciente e inconsciente, las marcas, sus formas, colores, tipografías y mensajes.\r\n\r\nLas identidades corporativas que firmó —en la Paul Rand Foundation pueden repasarse prácticamente todas— estaban basadas en la idea básica de que el buen diseño "añade valor, otorga significado y, no por casualidad, puede ser un placer para quien lo disfruta". Considerado la gran eminencia gris de su especialidad, combinó la actividad profesional con la docencia durante casi toda su vida y desde 1956 fue profesor emérito en Yale, para quien diseñó el logo de la editorial Yale University Press en 1985, y escribió varios libros teóricos y siempre divertidos sobre sus teorías.\r\n\r\nCarteles, publicidad, ''logos'', libros, revistas...\r\nAunque diseñó cartelería, anuncios publicitarios, portadas de libros y revistas —entre ellas las notables Direction y Apparel Arts, dedicadas a las artes gráficas—, los logotipos eran su gran especialidad. Algunos fueron tan decisivos y permanentes como los de IBM —empresa para la que también diseñó esplendorosos informes anuales de cuenta de resultados—, la empresa de mensajería UPS, el emporio automovilístico Ford, la fábrica de electrodomésticos Westinghouse, la cadena de televisión ABC, Next Computers —fundada por Steve Jobs en 1985— y la petrolera Enron, se afanaba en inyectar color y jovialidad. Deseaba, decía, "desfamiliarizar lo ordinario", añadir visceralidad a las marcas y romper tabúes e ideas preconcebidas.\r\n\r\nLos logotipos, añadía, debían tener algo de "sagrado", como los escudos tradicionales, pero "con una especie de diversión interna". Siempre se mostró muy satisfecho del de UPS, basado en la reducción hasta lo icónico de un paquete con su lazo atándolo. El logo es de 1961 y sigue siendo usado por la compañía con leves variaciones de las que también se encargó Rand, un profesional que jamás eludió el humor fuese cual fuese el encargo y que se mostró "seducido" por el "caos, la confusión" y las referencias múltiples del grafiti cuando la mayoría de sus colegas denigraban el género del arte en las superficies urbanas.\r\n\r\nDiseñadores al poder\r\nLos organizadores de la exposición dicen que Rand "refundó" el diseño gráfico e "introdujo las ideas de marca y reconocimiento de logotipos" en la vida cotidiana. Dentro de su especialidad logró que los diseñadores "tomaran el poder" y apartaran a los redactores publicitarios de la tarea de "empaquetar" la imagen de una empresa, un servicio o un producto de consumo.', '2015-09-27 16:39:32', 1),
(3, 'Groupon se reinventa como "marketplace"', 'Groupon, la compañía reina del mercado de venta de cupones en Internet, evoluciona su negocio hacia una venta basada en un marketplace y a largo plazo.', ' Groupon, la compañía reina del mercado de venta de cupones en Internet, evoluciona su negocio hacia una venta basada en un marketplace y a largo plazo. Una web y varias aplicaciones renovadas para dispositivos móviles son sus armas para esta nueva etapa en la que la empresa persigue asemejarse más al modelo de Amazon, “salvando las distancias”, según ha explicado en la presentación de la nueva estrategia Giulio Limongelli, cofundador y vicepresidente internacional de la compañía para el sur de Europa, “ya que nuestra aproximación se dirige más a pymes y establecimientos locales y pequeñas empresas de servicios”, añade.\r\n\r\nCuando se lanzó Groupon en España en 2010 (la compañía, cuyo nombre proviene de ‘group’ y ‘coupon’, vio la luz en Chicago, Estados Unidos, en 2008) se hizo con una estrategia push. En palabras de Limongelli: “Nos basábamos en el envío de correos electrónicos con cupones descuento, unos mails que incluían una alta cantidad de información, con el fin de perseguir una venta rápida, flash”. Pero este modelo, reconoce el cofundador, “se ha quedado antiguo; los usuarios han cambiado mucho en los últimos dos años y ahora recibir mails de este tipo puede resultar molesto. Además el uso de dispositivos móviles es ahora mucho más elevado”. Como consecuencia de ello la compañía renovó completamente su web el pasado mes de julio. “Ahora la información que incluimos está mucho más organizada y dispone de un buscador desarrollado con una tecnología muy completa para que el usuario encuentre lo que quiere”. El nuevo modelo, indica Limongelli, “se basa en el concepto de marketplace para el comercio local, algo similar a lo que también ha hecho Amazon”.\r\nGiulio Limongelli, cofundador y vicepresidente internacional del sur de Europa de Groupon.\r\n\r\n\r\nVenta ‘pull’ y a largo plazo\r\n\r\nLa nueva estrategia, en definitiva, se basa en la venta pull y no push, está pensada para el largo plazo y con la idea de “no vender millones de cupones en un día sino que sea una venta más lenta pero más prolongada en el tiempo”, afirma el cofundador. Además, la nueva web ha mejorado su estética, “es mucho más bonita y se ha incrementado la calidad del contenido”.\r\n\r\nCon este cambio, asevera Limongelli, “aunque nunca podremos competir de tú a tú con Amazon, sí nos acercamos a su modelo con la diferencia de que en Groupon nos centramos más en las pequeñas empresas y los establecimientos locales; en este nicho sí podemos competir”. Para estos comercios, asegura el portavoz, estar en Groupon es una oportunidad, “ya que el 17,7% de los internautas españoles interactúa con nosotros, un 28% ha comprado o compra en Groupon y el 95% de los usuarios vuelve”.\r\n\r\n“En España cada vez veo más confianza en el comercio electrónico y en el pago online”, señala el cofundador de Groupon. “Tenemos fuertes perspectivas de crecimiento a largo plazo en este país”, apunta. En España, indica, los usuarios de Groupon suelen tener unos ingresos superiores a la media y el 59% son mujeres y el 41% hombres. “Antes el 70% de nuestros usuarios en España eran mujeres pero se ha ido equilibrando porque hemos incorporado más ofertas para hombres y también porque estos ahora se han acercado más a nuestra web”.\r\n\r\n\r\nEstrategia móvil\r\n\r\nLa renovación de la web también ha venido acompañada de un remozado de las apps móviles para iOS y Android. En total, más de 92 millones de personas en 43 países de todo el mundo se han descargado ya la app de Groupon y el 50% de las transacciones globales del grupo se efectúan a través de ésta. Limongelli no desglosa datos sobre usuarios de la web (que en todo el mundo alcanzan las 200 personas) y las apps en España, aunque precisa que el de la movilidad es un canal aún por explotar: “Según GfK solo el 10% de los internautas españoles compra a través del smartphone, aunque esto irá a más”.\r\n\r\nAdemás de la app Groupon, la compañía tiene una segunda, Blink by Groupon, centrada en la reserva de hoteles y fruto de la compra de la startup española Blink que realizó la multinacional en septiembre de 2013.', '2015-09-27 16:40:52', 2),
(4, 'El World Wide Web Consortium le da luz verde al estándar HTML5', 'Después de años trabajando en un nuevo lenguaje para las páginas web, el World Wide Web Consortium (W3C) le ha dado luz verde al HTML5 recomendándolo como estándar.', ' Después de años trabajando en un nuevo lenguaje para las páginas web, el World Wide Web Consortium (W3C) le ha dado luz verde al HTML5 recomendándolo como estándar. Han sido casi 6 años de trabajo con más de 60 compañías implicadas bajo el amparo del W3C, la comunidad internacional que desarrolla estándares por el bien de la World Wide Web.\r\n\r\nDurante este tiempo, las compañías participantes se las han tenido que ver con miles de horas de trabajo para solucionar los más de 4.000 bugs aparecidos durante el desarrollo de este nuevo estándar, pero hoy el trabajo ha dado sus frutos y se le da oficialmente el relevo al HTML4.1 estandarizado en 1999.\r\n\r\nEl HTML5 ha revolucionado la web tal y como la conocíamos. Gracias a este nuevo lenguaje podemos jugar online en nuestro navegador, compartir de manera sencilla nuestras fotos en las actuales redes sociales o editar documentos online de forma colaborativa. Por no mencionar el poder reproducir e interactuar con el contenido multimedia de cada página sin la necesidad de recurrir a aplicaciones o plugins de terceros como Adobe Flash o Quicktime.\r\n\r\nTodas las grandes innovaciones de las webs de hoy en día han venido de la mano del HTML5, razón por la que el W3C nos invita a defenderlo programando, diseñando o debatiendo para que el código estándar de la web siga siendo abierto y colaborativo.', '2015-09-27 16:42:04', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`),
  ADD KEY `fk_id_novedad` (`fk_id_novedad`);

--
-- Indices de la tabla `novedad`
--
ALTER TABLE `novedad`
  ADD PRIMARY KEY (`id_novedad`),
  ADD KEY `fk_id_categoria` (`fk_id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `novedad`
--
ALTER TABLE `novedad`
  MODIFY `id_novedad` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `fk_imagen_id_novedad` FOREIGN KEY (`fk_id_novedad`) REFERENCES `novedad` (`id_novedad`);

--
-- Filtros para la tabla `novedad`
--
ALTER TABLE `novedad`
  ADD CONSTRAINT `fk_novedad_id_categoria` FOREIGN KEY (`fk_id_categoria`) REFERENCES `categoria` (`id_categoria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- USUARIO CON PASSWORD ENCRIPTADA

INSERT INTO usuario (email, password) VALUES ('fer@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b');
