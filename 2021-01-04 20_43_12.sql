-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.13-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para tienda_camarena
DROP DATABASE IF EXISTS `tienda_camarena`;
CREATE DATABASE IF NOT EXISTS `tienda_camarena` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci */;
USE `tienda_camarena`;

-- Volcando estructura para tabla tienda_camarena.cliente
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `cliente_id` char(5) NOT NULL,
  `nombre` varchar(50) NOT NULL DEFAULT '0',
  `apellido` varchar(30) NOT NULL,
  `dni` char(8) NOT NULL,
  `telefono` char(9) NOT NULL,
  `edad` tinyint(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `distrito` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  PRIMARY KEY (`cliente_id`),
  UNIQUE KEY `dni` (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla tienda_camarena.cliente: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
REPLACE INTO `cliente` (`cliente_id`, `nombre`, `apellido`, `dni`, `telefono`, `edad`, `email`, `distrito`, `direccion`, `estado`) VALUES
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
	('CL011', 'prueba', 'prueba', '74716688', '999999999', 21, 'nprueba@homail.com', 'san borja', 'Calle Los Olivos 433', 'inactivo');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Volcando estructura para tabla tienda_camarena.comprobantepago
DROP TABLE IF EXISTS `comprobantepago`;
CREATE TABLE IF NOT EXISTS `comprobantepago` (
  `comprobantepago_id` char(5) NOT NULL,
  `venta_id` char(5) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`comprobantepago_id`),
  KEY `FK_COMPROBANTEPAGO_VENTA` (`venta_id`),
  CONSTRAINT `FK_COMPROBANTEPAGO_VENTA` FOREIGN KEY (`venta_id`) REFERENCES `venta` (`venta_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla tienda_camarena.comprobantepago: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `comprobantepago` DISABLE KEYS */;
REPLACE INTO `comprobantepago` (`comprobantepago_id`, `venta_id`, `fecha`) VALUES
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

-- Volcando estructura para tabla tienda_camarena.detalle_promocion_producto
DROP TABLE IF EXISTS `detalle_promocion_producto`;
CREATE TABLE IF NOT EXISTS `detalle_promocion_producto` (
  `producto_id` char(5) NOT NULL DEFAULT '',
  `promocion_id` char(5) NOT NULL DEFAULT '',
  PRIMARY KEY (`producto_id`,`promocion_id`) USING BTREE,
  KEY `FK_DETALLE_PROMOCION` (`promocion_id`),
  CONSTRAINT `FK_DETALLE_PRODUCTO` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`producto_id`),
  CONSTRAINT `FK_DETALLE_PROMOCION` FOREIGN KEY (`promocion_id`) REFERENCES `promocion` (`promocion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla tienda_camarena.detalle_promocion_producto: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `detalle_promocion_producto` DISABLE KEYS */;
REPLACE INTO `detalle_promocion_producto` (`producto_id`, `promocion_id`) VALUES
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

-- Volcando estructura para tabla tienda_camarena.empleado
DROP TABLE IF EXISTS `empleado`;
CREATE TABLE IF NOT EXISTS `empleado` (
  `empleado_id` char(5) NOT NULL,
  `nombre` varchar(50) NOT NULL DEFAULT '',
  `dni` varchar(8) NOT NULL DEFAULT '',
  `telefono` varchar(9) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `sueldo` decimal(7,2) NOT NULL DEFAULT 0.00,
  `direccion` varchar(50) NOT NULL DEFAULT '0',
  `id` varchar(50) NOT NULL DEFAULT '',
  `contraseña` varchar(50) NOT NULL DEFAULT '',
  `rol` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`empleado_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla tienda_camarena.empleado: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `empleado` DISABLE KEYS */;
REPLACE INTO `empleado` (`empleado_id`, `nombre`, `dni`, `telefono`, `email`, `sueldo`, `direccion`, `id`, `contraseña`, `rol`) VALUES
	('E0001', 'Libardo', 'Lara', '25487615', 'aaaaa@gmail.com', 2000.00, 'Calle Los Olmos 123', 'aaaaa', '11111', 'admin'),
	('E0002', 'Angie', 'Palacios', '84597612', 'bbbbb@gmail.com', 750.00, 'Calle Los Olmos 123', 'bbbbb', '22222', 'almacenero'),
	('E0003', 'Linda', 'Vargas', '48721044', 'ccccc@gmail.com', 800.00, 'Calle Los Olmos 123', 'ccccc', '33333', 'atCliente'),
	('E0004', 'Yordan', 'Sullca', '75854312', 'ddddd@gmail.com', 800.00, 'Calle Los Olmos 123', 'ddddd', '44444', 'atCliente'),
	('E0005', 'Luis', 'Esquivel', '48726523', 'eeeee@gmail.com', 800.00, 'Calle Los Olmos 123', 'eeeee', '55555', 'atCliente');
/*!40000 ALTER TABLE `empleado` ENABLE KEYS */;

-- Volcando estructura para tabla tienda_camarena.pedido
DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `pedido_id` char(5) NOT NULL DEFAULT '',
  `cliente_id` char(5) DEFAULT NULL,
  PRIMARY KEY (`pedido_id`),
  KEY `FK_PEDIDO_CLIENTE` (`cliente_id`),
  CONSTRAINT `FK_PEDIDO_CLIENTE` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`cliente_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla tienda_camarena.pedido: ~21 rows (aproximadamente)
/*!40000 ALTER TABLE `pedido` DISABLE KEYS */;
REPLACE INTO `pedido` (`pedido_id`, `cliente_id`) VALUES
	('PE001', 'CL001'),
	('PE002', 'CL001'),
	('PE003', 'CL001'),
	('PE019', 'CL001'),
	('PE020', 'CL001'),
	('PE022', 'CL001'),
	('PE004', 'CL002'),
	('PE005', 'CL002'),
	('PE011', 'CL002'),
	('PE012', 'CL002'),
	('PE013', 'CL002'),
	('PE014', 'CL002'),
	('PE015', 'CL002'),
	('PE016', 'CL002'),
	('PE017', 'CL002'),
	('PE018', 'CL002'),
	('PE021', 'CL002'),
	('PE006', 'CL003'),
	('PE007', 'CL003'),
	('PE008', 'CL003'),
	('PE009', 'CL003'),
	('PE010', 'CL004');
/*!40000 ALTER TABLE `pedido` ENABLE KEYS */;

-- Volcando estructura para tabla tienda_camarena.producto
DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `producto_id` char(5) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `cantidad` int(5) NOT NULL,
  `costo` decimal(7,2) NOT NULL,
  PRIMARY KEY (`producto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla tienda_camarena.producto: ~11 rows (aproximadamente)
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
REPLACE INTO `producto` (`producto_id`, `nombre`, `descripcion`, `cantidad`, `costo`) VALUES
	('PR001', 'LECHE', 'LECHE DE VACA SALUDABLE', 50, 5.03),
	('PR002', 'MANTEQUILLA', 'SUEVA COMO LA MANTY', 50, 4.00),
	('PR003', 'PAPEL', 'SEDOSO', 50, 1.00),
	('PR004', 'PASTA DENTAL', 'BLANQUEADOR', 50, 5.00),
	('PR005', 'CEPILLO', 'LIMPIZA PROFUNDA', 50, 2.00),
	('PR006', 'PEINE', 'DESENREDANTE', 50, 3.00),
	('PR007', 'SHAMPOO', 'LIMPIADOR DEL CUERO CABELLUDO', 50, 13.00),
	('PR008', 'INKA COLA', 'REFRESCANTE', 50, 3.00),
	('PR009', 'PAPITAS LAYS', 'PAITAS FRITAS SALADAS', 50, 1.99),
	('PR010', 'GALLETA OREO', 'RELLENAS DE VAINILLA', 50, 2.00),
	('usayj', 'hj', 'jh', 9, 90.00);
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;

-- Volcando estructura para tabla tienda_camarena.productopedido
DROP TABLE IF EXISTS `productopedido`;
CREATE TABLE IF NOT EXISTS `productopedido` (
  `producto_id` char(5) NOT NULL DEFAULT '',
  `pedido_id` char(5) NOT NULL DEFAULT '',
  `cantidad` int(3) DEFAULT NULL,
  PRIMARY KEY (`producto_id`,`pedido_id`) USING BTREE,
  KEY `FK_PRODUCTOPEDIDO_PEDIDO` (`pedido_id`),
  CONSTRAINT `FK_PRODUCTOPEDIDO_PEDIDO` FOREIGN KEY (`pedido_id`) REFERENCES `pedido` (`pedido_id`) ON DELETE CASCADE,
  CONSTRAINT `FK_PRODUCTOPEDIDO_PRODUCTO` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`producto_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla tienda_camarena.productopedido: ~19 rows (aproximadamente)
/*!40000 ALTER TABLE `productopedido` DISABLE KEYS */;
REPLACE INTO `productopedido` (`producto_id`, `pedido_id`, `cantidad`) VALUES
	('PR001', 'PE001', 3),
	('PR001', 'PE014', 3),
	('PR001', 'PE019', 1),
	('PR001', 'PE021', 4),
	('PR002', 'PE002', 3),
	('PR002', 'PE011', 10),
	('PR002', 'PE014', 20),
	('PR002', 'PE020', 5),
	('PR003', 'PE003', 1),
	('PR003', 'PE022', 5),
	('PR004', 'PE004', 6),
	('PR004', 'PE022', 2),
	('PR005', 'PE005', 2),
	('PR006', 'PE006', 3),
	('PR006', 'PE015', 5),
	('PR006', 'PE019', 3),
	('PR007', 'PE007', 2),
	('PR008', 'PE008', 4),
	('PR009', 'PE009', 2),
	('PR010', 'PE010', 3);
/*!40000 ALTER TABLE `productopedido` ENABLE KEYS */;

-- Volcando estructura para tabla tienda_camarena.promocion
DROP TABLE IF EXISTS `promocion`;
CREATE TABLE IF NOT EXISTS `promocion` (
  `promocion_id` char(5) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `producto_id` char(5) DEFAULT NULL,
  `costo` decimal(7,2) DEFAULT NULL,
  PRIMARY KEY (`promocion_id`),
  KEY `FK_PRODUCTO` (`producto_id`),
  CONSTRAINT `FK_PRODUCTO` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`producto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla tienda_camarena.promocion: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `promocion` DISABLE KEYS */;
REPLACE INTO `promocion` (`promocion_id`, `nombre`, `descripcion`, `cantidad`, `producto_id`, `costo`) VALUES
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

-- Volcando estructura para tabla tienda_camarena.recarga
DROP TABLE IF EXISTS `recarga`;
CREATE TABLE IF NOT EXISTS `recarga` (
  `recarga_id` char(5) NOT NULL DEFAULT '',
  `tarjeta_id` char(5) NOT NULL,
  `monto` decimal(10,2) unsigned NOT NULL,
  PRIMARY KEY (`recarga_id`),
  KEY `FK_RECARGA_TARJETA` (`tarjeta_id`),
  CONSTRAINT `FK_RECARGA_TARJETA` FOREIGN KEY (`tarjeta_id`) REFERENCES `tarjeta` (`tarjeta_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla tienda_camarena.recarga: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `recarga` DISABLE KEYS */;
REPLACE INTO `recarga` (`recarga_id`, `tarjeta_id`, `monto`) VALUES
	('RE001', 'TJ001', 100.00),
	('RE002', 'TJ001', 50.00),
	('RE003', 'TJ001', 120.00),
	('RE004', 'TJ002', 75.00),
	('RE005', 'TJ002', 25.00),
	('RE006', 'TJ003', 150.00),
	('RE007', 'TJ003', 200.00),
	('RE008', 'TJ003', 125.00),
	('RE009', 'TJ003', 225.00),
	('RE010', 'TJ004', 175.00),
	('RE011', 'TJ001', 5.00),
	('RE012', 'TJ003', 4.00);
/*!40000 ALTER TABLE `recarga` ENABLE KEYS */;

-- Volcando estructura para tabla tienda_camarena.tarjeta
DROP TABLE IF EXISTS `tarjeta`;
CREATE TABLE IF NOT EXISTS `tarjeta` (
  `tarjeta_id` char(5) NOT NULL,
  `cliente_id` char(5) DEFAULT NULL,
  `fechavencimiento` date DEFAULT NULL,
  `saldo` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`tarjeta_id`),
  KEY `FK_TARJETA_CLIENTE` (`cliente_id`),
  CONSTRAINT `FK_TARJETA_CLIENTE` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`cliente_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla tienda_camarena.tarjeta: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `tarjeta` DISABLE KEYS */;
REPLACE INTO `tarjeta` (`tarjeta_id`, `cliente_id`, `fechavencimiento`, `saldo`) VALUES
	('TJ001', 'CL001', '2001-09-20', 55.00),
	('TJ002', 'CL002', '2001-09-20', -20.00),
	('TJ003', 'CL003', '2001-09-20', 104.00),
	('TJ004', 'CL004', '2001-09-20', 40.00),
	('TJ005', 'CL005', '2001-09-20', 35.00),
	('TJ006', 'CL006', '2001-09-20', 75.00),
	('TJ007', 'CL007', '2001-09-20', 110.00),
	('TJ008', 'CL008', '2001-09-20', 20.00),
	('TJ009', 'CL009', '2001-09-20', 15.00),
	('TJ010', 'CL010', '2001-09-20', 93.00);
/*!40000 ALTER TABLE `tarjeta` ENABLE KEYS */;

-- Volcando estructura para tabla tienda_camarena.ticket
DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `ticket_id` char(5) NOT NULL,
  `recarga_id` char(5) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`ticket_id`),
  KEY `FK_TICKET_RECARGA` (`recarga_id`),
  CONSTRAINT `FK_TICKET_RECARGA` FOREIGN KEY (`recarga_id`) REFERENCES `recarga` (`recarga_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla tienda_camarena.ticket: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `ticket` DISABLE KEYS */;
REPLACE INTO `ticket` (`ticket_id`, `recarga_id`, `fecha`) VALUES
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

-- Volcando estructura para tabla tienda_camarena.venta
DROP TABLE IF EXISTS `venta`;
CREATE TABLE IF NOT EXISTS `venta` (
  `venta_id` char(5) NOT NULL,
  `pedido_id` char(5) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `monto` double DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`venta_id`),
  KEY `FK_VENTA_PEDIDO` (`pedido_id`),
  CONSTRAINT `FK_VENTA_PEDIDO` FOREIGN KEY (`pedido_id`) REFERENCES `pedido` (`pedido_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla tienda_camarena.venta: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `venta` DISABLE KEYS */;
REPLACE INTO `venta` (`venta_id`, `pedido_id`, `descripcion`, `monto`, `fecha`) VALUES
	('VE001', 'PE001', 'COMPRA DE ABARROTES - MINIMARKET CAMARENA', 15, '2002-10-19'),
	('VE002', 'PE002', 'COMPRA DE ABARROTES - MINIMARKET CAMARENA', 20, '2002-10-19'),
	('VE003', 'PE003', 'COMPRA DE ABARROTES - MINIMARKET CAMARENA', 22, '2002-10-19'),
	('VE004', 'PE004', 'COMPRA DE ABARROTES - MINIMARKET CAMARENA', 25, '2003-10-19'),
	('VE005', 'PE005', 'COMPRA DE ABARROTES - MINIMARKET CAMARENA', 30, '2003-10-19'),
	('VE006', 'PE006', 'COMPRA DE ABARROTES - MINIMARKET CAMARENA', 12, '2004-10-19'),
	('VE007', 'PE007', 'COMPRA DE ABARROTES - MINIMARKET CAMARENA', 50, '2004-10-19'),
	('VE008', 'PE008', 'COMPRA DE ABARROTES - MINIMARKET CAMARENA', 35, '2004-10-19'),
	('VE009', 'PE009', 'COMPRA DE ABARROTES - MINIMARKET CAMARENA', 21, '2004-10-19'),
	('VE010', 'PE010', 'COMPRA DE ABARROTES - MINIMARKET CAMARENA', 18, '2005-10-19'),
	('VE011', 'PE011', NULL, 40, '2020-09-17'),
	('VE013', 'PE013', NULL, 0, '2020-09-17');
/*!40000 ALTER TABLE `venta` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
