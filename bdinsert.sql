-- --------------------------------------------------------
-- Host:                         us-cdbr-east-02.cleardb.com
-- Versión del servidor:         5.5.62-log - MySQL Community Server (GPL)
-- SO del servidor:              Linux
-- HeidiSQL Versión:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para heroku_ba968b3eda52761
CREATE DATABASE IF NOT EXISTS `heroku_ba968b3eda52761` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `heroku_ba968b3eda52761`;

-- Volcando estructura para tabla heroku_ba968b3eda52761.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `cliente_id` char(5) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `dni` char(8) DEFAULT NULL,
  `telefono` char(9) DEFAULT NULL,
  `edad` tinyint(4) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `distrito` varchar(50) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cliente_id`),
  UNIQUE KEY `uk_cliente_dni` (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla heroku_ba968b3eda52761.cliente: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`cliente_id`, `nombre`, `apellido`, `dni`, `telefono`, `edad`, `email`, `distrito`, `direccion`, `estado`) VALUES
	('CL001', 'Marco', 'Huari', '75897931', '972082374', 18, 'marquitos1213@hotmail.com', 'Santa Anita', 'Calle Los Olmos 123', 'activo'),
	('CL002', 'Andrea', 'Mendoza', '75897932', '915764235', 20, 'marquitos1213@hotmail.com', 'Ate', 'Calle Los Olmos 123', 'activo'),
	('CL003', 'Nikol', 'Lopez', '75897933', '987456321', 23, 'marquitos1213@hotmail.com', 'Los Olivos', 'Calle Los Olmos 123', 'activo'),
	('CL004', 'Ronny', 'Mallma', '75897934', '972082374', 32, 'marquitos1213@hotmail.com', 'Puente Piedra', 'Calle Los Olmos 123', 'activo'),
	('CL005', 'Oscar', 'Huayllas', '75897935', '972082374', 56, 'marquitos1213@hotmail.com', 'Santa Anita', 'Calle Los Olmos 123', 'activo'),
	('CL006', 'Rodolfo', 'Vega', '75897936', '972082374', 70, 'marquitos1213@hotmail.com', 'La Molina', 'Calle Los Olmos 123', 'activo'),
	('CL007', 'Juan', 'Huari', '75897937', '972082374', 65, 'marquitos1213@hotmail.com', 'Ate', 'Calle Los Olmos 123', 'activo'),
	('CL008', 'Luis', 'Huaman', '75897938', '972082374', 34, 'marquitos1213@hotmail.com', 'Santa Anita', 'Calle Los Olmos 123', 'activo'),
	('CL009', 'Pancracio', 'Romero', '75897939', '972082374', 64, 'marquitos1213@hotmail.com', 'Los Olivos', 'Calle Los Olmos 123', 'activo'),
	('CL010', 'Anastacia', 'Ruiz', '75897911', '972082374', 28, 'marquitos1213@hotmail.com', 'Ate', 'Calle Las Tinieblas 1123', 'activo'),
	('CL011', 'prueba', 'pp', '74716688', '999999999', 21, 'nprueba@homail.com', 'san borja', 'Calle Los Olivos 433', 'inactivo');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Volcando estructura para tabla heroku_ba968b3eda52761.comprobantepago
CREATE TABLE IF NOT EXISTS `comprobantepago` (
  `comprobantepago_id` char(5) NOT NULL,
  `venta_id` char(5) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla heroku_ba968b3eda52761.comprobantepago: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `comprobantepago` DISABLE KEYS */;
INSERT INTO `comprobantepago` (`comprobantepago_id`, `venta_id`, `fecha`) VALUES
	('CP001', 'VE001', '2002-10-19'),
	('CP002', 'VE002', '2002-10-19'),
	('CP003', 'VE003', '2002-10-19'),
	('CP004', 'VE004', '2003-10-19'),
	('CP005', 'VE005', '2003-10-19'),
	('CP006', 'VE006', '2004-10-19'),
	('CP007', 'VE007', '2004-10-19'),
	('CP008', 'VE008', '2004-10-19'),
	('CP009', 'VE009', '2004-10-19'),
	('CP010', 'VE010', '2005-10-19');
/*!40000 ALTER TABLE `comprobantepago` ENABLE KEYS */;

-- Volcando estructura para tabla heroku_ba968b3eda52761.detalle_promocion_producto
CREATE TABLE IF NOT EXISTS `detalle_promocion_producto` (
  `producto_id` char(5) DEFAULT NULL,
  `promocion_id` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla heroku_ba968b3eda52761.detalle_promocion_producto: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `detalle_promocion_producto` DISABLE KEYS */;
INSERT INTO `detalle_promocion_producto` (`producto_id`, `promocion_id`) VALUES
	('PR001', 'PM001'),
	('PR002', 'PM002'),
	('PR003', 'PM003'),
	('PR004', 'PM004'),
	('PR005', 'PM005'),
	('PR006', 'PM006'),
	('PR007', 'PM007'),
	('PR008', 'PM008'),
	('PR009', 'PM009'),
	('PR010', 'PM010');
/*!40000 ALTER TABLE `detalle_promocion_producto` ENABLE KEYS */;

-- Volcando estructura para tabla heroku_ba968b3eda52761.empleados
CREATE TABLE IF NOT EXISTS `empleado` (
  `empleado_id` char(5) NOT NULL,
  `rol` varchar(50) NOT NULL DEFAULT '',
  `usuario` varchar(50) NOT NULL DEFAULT '',
  `contraseña` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`empleado_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla heroku_ba968b3eda52761.empleados: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `empleado` DISABLE KEYS */;
INSERT INTO `empleado` (`empleado_id`, `rol`, `usuario`, `contraseña`) VALUES
	('E0001', 'admin','aaaaa','11111'),
	('E0002', 'almacenero','bbbbb','22222'),
	('E0003', 'atCliente','ccccc','33333'),
	('E0004', 'atCliente','ddddd','44444');
/*!40000 ALTER TABLE `empleado` ENABLE KEYS */;

-- Volcando estructura para tabla heroku_ba968b3eda52761.pedido
CREATE TABLE IF NOT EXISTS `pedido` (
  `pedido_id` char(5) DEFAULT NULL,
  `cliente_id` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla heroku_ba968b3eda52761.pedido: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
INSERT INTO `pedido` (`pedido_id`, `cliente_id`) VALUES
	('PE001', 'CL001'),
	('PE002', 'CL001'),
	('PE003', 'CL001'),
	('PE004', 'CL002'),
	('PE005', 'CL002'),
	('PE006', 'CL003'),
	('PE007', 'CL003'),
	('PE008', 'CL003'),
	('PE009', 'CL003'),
	('PE010', 'CL004');
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;

-- Volcando estructura para tabla heroku_ba968b3eda52761.producto
CREATE TABLE IF NOT EXISTS `producto` (
  `producto_id` char(5) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `costo` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla heroku_ba968b3eda52761.producto: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` (`producto_id`, `nombre`, `descripcion`, `cantidad`, `costo`) VALUES
	('PR001', 'LECHE', 'LECHE DE VACA', 50, 2.5),
	('PR002', 'MANTEQUILLA', 'SUEVA COMO LA MANTY', 50, 3.5),
	('PR003', 'PAPEL', 'SEDOSO', 50, 1),
	('PR004', 'PASTA DENTAL', 'BLANQUEADOR', 50, 4.5),
	('PR005', 'CEPILLO', 'LIMPIZA PROFUNDA', 50, 2),
	('PR006', 'PEINE', 'DESENREDANTE', 50, 2.5),
	('PR007', 'SHAMPOO', 'LIMPIADOR DEL CUERO CABELLUDO', 50, 12.5),
	('PR008', 'INKA COLA', 'REFRESCANTE', 50, 2.5),
	('PR009', 'PAPITAS LAYS', 'PAITAS FRITAS SALADAS', 50, 1.5),
	('PR010', 'GALLETA OREO', 'RELLENAS DE VAINILLA', 50, 1.5);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;

-- Volcando estructura para tabla heroku_ba968b3eda52761.productopedido
CREATE TABLE IF NOT EXISTS `productopedido` (
  `producto_id` char(5) DEFAULT NULL,
  `pedido_id` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla heroku_ba968b3eda52761.productopedido: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `productopedido` DISABLE KEYS */;
INSERT INTO `productopedido` (`producto_id`, `pedido_id`) VALUES
	('PR001', 'PE001'),
	('PR002', 'PE002'),
	('PR003', 'PE003'),
	('PR004', 'PE004'),
	('PR005', 'PE005'),
	('PR006', 'PE006'),
	('PR007', 'PE007'),
	('PR008', 'PE008'),
	('PR009', 'PE009'),
	('PR010', 'PE010');
/*!40000 ALTER TABLE `productopedido` ENABLE KEYS */;

-- Volcando estructura para tabla heroku_ba968b3eda52761.promocion
CREATE TABLE IF NOT EXISTS `promocion` (
  `promocion_id` char(5) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `producto_id` char(5) DEFAULT NULL,
  `costo` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla heroku_ba968b3eda52761.promocion: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `promocion` DISABLE KEYS */;
INSERT INTO `promocion` (`promocion_id`, `nombre`, `descripcion`, `cantidad`, `producto_id`, `costo`) VALUES
	('PM012', 'nss', 'asdad', 2, 'PR011', 2),
	('PM001', '2X1 LECHE', 'LLEVATE DOS LECHES POR EL PRECIO DE UNO', 10, NULL, NULL),
	('PM002', '2X1 MANTEQUILLA', 'LLEVATE DOS MANTEQUILLAS POR EL PRECIO DE UNO', 10, NULL, NULL),
	('PM003', '2X1 PAPEL', 'LLEVATE DOS PAPELES POR EL PRECIO DE UNO', 10, NULL, NULL),
	('PM004', '2X1 PASTA DENTAL', 'LLEVATE DOS PASTAS DENTALES POR EL PRECIO DE UNO', 10, NULL, NULL),
	('PM005', '2X1 CEPILLO', 'LLEVATE DOS CEPILLOS POR EL PRECIO DE UNO', 10, NULL, NULL),
	('PM006', '2X1 PEINE', 'LLEVATE DOS PEINES POR EL PRECIO DE UNO', 10, NULL, NULL),
	('PM007', '2X1 SHAMPOO', 'LLEVATE DOS SHAMPOO POR EL PRECIO DE UNO', 10, NULL, NULL),
	('PM008', '2X1 INCA KOLA', 'LLEVATE DOS INKA KOLA POR EL PRECIO DE UNO', 10, NULL, NULL),
	('PM009', '2X1 PAPITAS LAYS', 'LLEVATE DOS PAPITAS LAYS POR EL PRECIO DE UNO', 10, NULL, NULL),
	('PM010', '2X1 GALLETA OREO', 'LLEVATE DOS GALLETAS OREO POR EL PRECIO DE UNO', 10, NULL, NULL);
/*!40000 ALTER TABLE `promocion` ENABLE KEYS */;

-- Volcando estructura para tabla heroku_ba968b3eda52761.recarga
CREATE TABLE IF NOT EXISTS `recarga` (
  `recarga_id` char(5) DEFAULT NULL,
  `tarjeta_id` char(5) DEFAULT NULL,
  `monto` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla heroku_ba968b3eda52761.recarga: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `recarga` DISABLE KEYS */;
INSERT INTO `recarga` (`recarga_id`, `tarjeta_id`, `monto`) VALUES
	('RE012', 'TJ003', 4),
	('RE011', 'TJ001', 5),
	('RE001', 'TJ001', 100),
	('RE002', 'TJ001', 50),
	('RE003', 'TJ001', 120),
	('RE004', 'TJ002', 75),
	('RE005', 'TJ002', 25),
	('RE006', 'TJ003', 150),
	('RE007', 'TJ003', 200),
	('RE008', 'TJ003', 125),
	('RE009', 'TJ003', 225),
	('RE010', 'TJ004', 175);
/*!40000 ALTER TABLE `recarga` ENABLE KEYS */;

-- Volcando estructura para tabla heroku_ba968b3eda52761.tarjeta
CREATE TABLE IF NOT EXISTS `tarjeta` (
  `tarjeta_id` char(5) NOT NULL,
  `cliente_id` char(5) DEFAULT NULL,
  `fechavencimiento` date DEFAULT NULL,
  `saldo` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla heroku_ba968b3eda52761.tarjeta: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `tarjeta` DISABLE KEYS */;
INSERT INTO `tarjeta` (`tarjeta_id`, `cliente_id`, `fechavencimiento`, `saldo`) VALUES
	('TJ012', 'CL012', '2018-02-21', 0),
	('TJ001', 'CL001', '2001-09-20', 55),
	('TJ002', 'CL002', '2001-09-20', 25),
	('TJ003', 'CL003', '2001-09-20', 104),
	('TJ004', 'CL004', '2001-09-20', 40),
	('TJ005', 'CL005', '2001-09-20', 35),
	('TJ006', 'CL006', '2001-09-20', 75),
	('TJ007', 'CL007', '2001-09-20', 110),
	('TJ008', 'CL008', '2001-09-20', 20),
	('TJ009', 'CL009', '2001-09-20', 15),
	('TJ010', 'CL010', '2001-09-20', 93);
/*!40000 ALTER TABLE `tarjeta` ENABLE KEYS */;

-- Volcando estructura para tabla heroku_ba968b3eda52761.ticket
CREATE TABLE IF NOT EXISTS `ticket` (
  `ticket_id` char(5) NOT NULL,
  `recarga_id` char(5) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla heroku_ba968b3eda52761.ticket: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `ticket` DISABLE KEYS */;
INSERT INTO `ticket` (`ticket_id`, `recarga_id`, `fecha`) VALUES
	('TK001', 'RE001', '2001-09-19'),
	('TK002', 'RE002', '2003-09-19'),
	('TK003', 'RE003', '2005-09-19'),
	('TK004', 'RE004', '2006-09-19'),
	('TK005', 'RE005', '2007-09-19'),
	('TK006', 'RE006', '2009-09-19'),
	('TK007', 'RE007', '2012-09-19'),
	('TK008', 'RE008', '2013-09-19'),
	('TK009', 'RE009', '2015-09-19'),
	('TK010', 'RE010', '2019-09-19');
/*!40000 ALTER TABLE `ticket` ENABLE KEYS */;

-- Volcando estructura para tabla heroku_ba968b3eda52761.venta
CREATE TABLE IF NOT EXISTS `venta` (
  `venta_id` char(5) NOT NULL,
  `pedido_id` char(5) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `monto` double DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla heroku_ba968b3eda52761.venta: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `venta` DISABLE KEYS */;
INSERT INTO `venta` (`venta_id`, `pedido_id`, `descripcion`, `monto`, `fecha`) VALUES
	('VE001', 'PE001', 'COMPRA DE ABARROTES - MINIMARKET CAMARENA', 15, '2002-10-19'),
	('VE002', 'PE002', 'COMPRA DE ABARROTES - MINIMARKET CAMARENA', 20, '2002-10-19'),
	('VE003', 'PE003', 'COMPRA DE ABARROTES - MINIMARKET CAMARENA', 22, '2002-10-19'),
	('VE004', 'PE004', 'COMPRA DE ABARROTES - MINIMARKET CAMARENA', 25, '2003-10-19'),
	('VE005', 'PE005', 'COMPRA DE ABARROTES - MINIMARKET CAMARENA', 30, '2003-10-19'),
	('VE006', 'PE006', 'COMPRA DE ABARROTES - MINIMARKET CAMARENA', 12, '2004-10-19'),
	('VE007', 'PE007', 'COMPRA DE ABARROTES - MINIMARKET CAMARENA', 50, '2004-10-19'),
	('VE008', 'PE008', 'COMPRA DE ABARROTES - MINIMARKET CAMARENA', 35, '2004-10-19'),
	('VE009', 'PE009', 'COMPRA DE ABARROTES - MINIMARKET CAMARENA', 21, '2004-10-19'),
	('VE010', 'PE010', 'COMPRA DE ABARROTES - MINIMARKET CAMARENA', 18, '2005-10-19');
/*!40000 ALTER TABLE `venta` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
