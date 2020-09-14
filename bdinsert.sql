-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema heroku_ba968b3eda52761
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema heroku_ba968b3eda52761
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `heroku_ba968b3eda52761` DEFAULT CHARACTER SET utf8 ;
USE `heroku_ba968b3eda52761` ;

-- -----------------------------------------------------
-- Table `heroku_ba968b3eda52761`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_ba968b3eda52761`.`cliente` (
  `cliente_id` CHAR(5) NOT NULL,
  `nombre` VARCHAR(30) NOT NULL,
  `apellido` VARCHAR(30) NOT NULL,
  `dni` CHAR(8) NOT NULL,
  `telefono` CHAR(9) NOT NULL,
  `edad` TINYINT(4) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `distrito` VARCHAR(50) NOT NULL,
  `direccion` VARCHAR(100) NOT NULL,
  `estado` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`cliente_id`))
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `heroku_ba968b3eda52761`.`pedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_ba968b3eda52761`.`pedido` (
  `pedido_id` CHAR(5) NOT NULL DEFAULT '',
  `cliente_id` CHAR(5) NULL DEFAULT NULL,
  PRIMARY KEY (`pedido_id`),
  CONSTRAINT `FK_PEDIDO_CLIENTE`
    FOREIGN KEY (`cliente_id`)
    REFERENCES `heroku_ba968b3eda52761`.`cliente` (`cliente_id`)
    ON DELETE CASCADE)
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `heroku_ba968b3eda52761`.`venta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_ba968b3eda52761`.`venta` (
  `venta_id` CHAR(5) NOT NULL,
  `pedido_id` CHAR(5) NULL DEFAULT NULL,
  `descripcion` VARCHAR(50) NULL DEFAULT NULL,
  `monto` DOUBLE NULL DEFAULT NULL,
  `fecha` DATE NULL DEFAULT NULL,
  PRIMARY KEY (`venta_id`),
  CONSTRAINT `FK_VENTA_PEDIDO`
    FOREIGN KEY (`pedido_id`)
    REFERENCES `heroku_ba968b3eda52761`.`pedido` (`pedido_id`)
    ON DELETE CASCADE)
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `heroku_ba968b3eda52761`.`comprobantepago`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_ba968b3eda52761`.`comprobantepago` (
  `comprobantepago_id` CHAR(5) NOT NULL,
  `venta_id` CHAR(5) NULL DEFAULT NULL,
  `fecha` DATE NULL DEFAULT NULL,
  PRIMARY KEY (`comprobantepago_id`),
  CONSTRAINT `FK_COMPROBANTEPAGO_VENTA`
    FOREIGN KEY (`venta_id`)
    REFERENCES `heroku_ba968b3eda52761`.`venta` (`venta_id`)
    ON DELETE CASCADE)
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `heroku_ba968b3eda52761`.`producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_ba968b3eda52761`.`producto` (
  `producto_id` CHAR(5) NOT NULL,
  `nombre` VARCHAR(30) NOT NULL,
  `descripcion` VARCHAR(50) NOT NULL,
  `cantidad` INT(5) NOT NULL,
  `costo` DECIMAL(7,2) NOT NULL,
  PRIMARY KEY (`producto_id`))
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `heroku_ba968b3eda52761`.`promocion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_ba968b3eda52761`.`promocion` (
  `promocion_id` CHAR(5) NOT NULL,
  `nombre` VARCHAR(30) NULL DEFAULT NULL,
  `descripcion` VARCHAR(50) NULL DEFAULT NULL,
  `cantidad` INT(11) NULL DEFAULT NULL,
  `costo` DECIMAL(7,2) NULL DEFAULT NULL,
  PRIMARY KEY (`promocion_id`))
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `heroku_ba968b3eda52761`.`detalle_promocion_producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_ba968b3eda52761`.`detalle_promocion_producto` (
  `producto_id` CHAR(5) NOT NULL DEFAULT '',
  `promocion_id` CHAR(5) NOT NULL DEFAULT '',
  PRIMARY KEY (`producto_id`, `promocion_id`),
  CONSTRAINT `FK_DETALLE_PRODUCTO`
    FOREIGN KEY (`producto_id`)
    REFERENCES `heroku_ba968b3eda52761`.`producto` (`producto_id`),
  CONSTRAINT `FK_DETALLE_PROMOCION`
    FOREIGN KEY (`promocion_id`)
    REFERENCES `heroku_ba968b3eda52761`.`promocion` (`promocion_id`))
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `heroku_ba968b3eda52761`.`empleado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_ba968b3eda52761`.`empleado` (
  `empleado_id` CHAR(5) NOT NULL,
  `nombre` VARCHAR(50) NOT NULL DEFAULT '',
  `dni` VARCHAR(8) NOT NULL DEFAULT '',
  `telefono` VARCHAR(9) NOT NULL DEFAULT '',
  `email` VARCHAR(50) NOT NULL DEFAULT '',
  `sueldo` DECIMAL(7,2) NOT NULL DEFAULT '0.00',
  `direccion` VARCHAR(50) NOT NULL DEFAULT '0',
  `rol` VARCHAR(50) NOT NULL DEFAULT '',
  `id` VARCHAR(50) NOT NULL DEFAULT '',
  `contraseña` VARCHAR(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`empleado_id`))
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `heroku_ba968b3eda52761`.`productopedido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_ba968b3eda52761`.`productopedido` (
  `producto_id` CHAR(5) NOT NULL DEFAULT '',
  `pedido_id` CHAR(5) NOT NULL DEFAULT '',
  `cantidad` INT(3) NULL DEFAULT NULL,
  PRIMARY KEY (`producto_id`, `pedido_id`),
  CONSTRAINT `FK_PRODUCTOPEDIDO_PEDIDO`
    FOREIGN KEY (`pedido_id`)
    REFERENCES `heroku_ba968b3eda52761`.`pedido` (`pedido_id`)
    ON DELETE CASCADE,
  CONSTRAINT `FK_PRODUCTOPEDIDO_PRODUCTO`
    FOREIGN KEY (`producto_id`)
    REFERENCES `heroku_ba968b3eda52761`.`producto` (`producto_id`)
    ON DELETE CASCADE)
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `heroku_ba968b3eda52761`.`tarjeta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_ba968b3eda52761`.`tarjeta` (
  `tarjeta_id` CHAR(5) NOT NULL,
  `cliente_id` CHAR(5) NULL DEFAULT NULL,
  `fechavencimiento` DATE NULL DEFAULT NULL,
  `saldo` DECIMAL(10,2) NULL DEFAULT NULL,
  PRIMARY KEY (`tarjeta_id`),
  CONSTRAINT `FK_TARJETA_CLIENTE`
    FOREIGN KEY (`cliente_id`)
    REFERENCES `heroku_ba968b3eda52761`.`cliente` (`cliente_id`)
    ON DELETE CASCADE)
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `heroku_ba968b3eda52761`.`recarga`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_ba968b3eda52761`.`recarga` (
  `recarga_id` CHAR(5) NOT NULL DEFAULT '',
  `tarjeta_id` CHAR(5) NOT NULL,
  `monto` DECIMAL(10,2) UNSIGNED NOT NULL,
  PRIMARY KEY (`recarga_id`),
  CONSTRAINT `FK_RECARGA_TARJETA`
    FOREIGN KEY (`tarjeta_id`)
    REFERENCES `heroku_ba968b3eda52761`.`tarjeta` (`tarjeta_id`)
    ON DELETE CASCADE)
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `heroku_ba968b3eda52761`.`ticket`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `heroku_ba968b3eda52761`.`ticket` (
  `ticket_id` CHAR(5) NOT NULL,
  `recarga_id` CHAR(5) NULL DEFAULT NULL,
  `fecha` DATE NULL DEFAULT NULL,
  PRIMARY KEY (`ticket_id`),
  CONSTRAINT `FK_TICKET_RECARGA`
    FOREIGN KEY (`recarga_id`)
    REFERENCES `heroku_ba968b3eda52761`.`recarga` (`recarga_id`)
    ON DELETE CASCADE)
DEFAULT CHARACTER SET = utf8mb4;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

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
    
INSERT INTO `empleado` (`empleado_id`, `nombre`, `dni`, `telefono`, `email`, `sueldo`, `direccion`, `rol`, `id`, `contraseña`) VALUES
	('E0001', 'Libardo', 'Lara', '25487615', 'aaaaa@gmail.com', 2000, 'Calle Los Olmos 123', 'admin','aaaaa','11111'),
	('E0002', 'Angie', 'Palacios', '84597612', 'bbbbb@gmail.com', 750, 'Calle Los Olmos 123', 'almacenero','bbbbb','22222'),
	('E0003', 'Linda', 'Vargas', '48721044', 'ccccc@gmail.com', 800, 'Calle Los Olmos 123', 'atCliente','ccccc','33333'),
	('E0004', 'Yordan', 'Sullca', '75854312', 'ddddd@gmail.com', 800, 'Calle Los Olmos 123', 'atCliente','ddddd','44444');

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

INSERT INTO `tarjeta` (`tarjeta_id`, `cliente_id`, `fechavencimiento`, `saldo`) VALUES
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

INSERT INTO `promocion` (`promocion_id`, `nombre`, `descripcion`, `cantidad`, `costo`) VALUES
	('PM001', '2X1 LECHE', 'LLEVATE DOS LECHES POR EL PRECIO DE UNO', 10, NULL),
	('PM002', '2X1 MANTEQUILLA', 'LLEVATE DOS MANTEQUILLAS POR EL PRECIO DE UNO', 10, NULL),
	('PM003', '2X1 PAPEL', 'LLEVATE DOS PAPELES POR EL PRECIO DE UNO', 10,  NULL),
	('PM004', '2X1 PASTA DENTAL', 'LLEVATE DOS PASTAS DENTALES POR EL PRECIO DE UNO', 10, NULL),
	('PM005', '2X1 CEPILLO', 'LLEVATE DOS CEPILLOS POR EL PRECIO DE UNO', 10, NULL),
	('PM006', '2X1 PEINE', 'LLEVATE DOS PEINES POR EL PRECIO DE UNO', 10, NULL),
	('PM007', '2X1 SHAMPOO', 'LLEVATE DOS SHAMPOO POR EL PRECIO DE UNO', 10, NULL),
	('PM008', '2X1 INCA KOLA', 'LLEVATE DOS INKA KOLA POR EL PRECIO DE UNO', 10, NULL),
	('PM009', '2X1 PAPITAS LAYS', 'LLEVATE DOS PAPITAS LAYS POR EL PRECIO DE UNO', 10, NULL),
	('PM010', '2X1 GALLETA OREO', 'LLEVATE DOS GALLETAS OREO POR EL PRECIO DE UNO', 10, NULL);

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
    

