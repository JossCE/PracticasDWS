-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.27-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para tailandia
CREATE DATABASE IF NOT EXISTS `tailandia` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `tailandia`;

-- Volcando estructura para tabla tailandia.administrador
CREATE TABLE IF NOT EXISTS `administrador` (
  `usuario` varchar(50) DEFAULT NULL,
  `contraseña` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla tailandia.administrador: ~1 rows (aproximadamente)
INSERT INTO `administrador` (`usuario`, `contraseña`) VALUES
	('admin', 'admin');

-- Volcando estructura para tabla tailandia.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL DEFAULT '0',
  `apellido` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `telefono` varchar(12) NOT NULL DEFAULT '0',
  `destino` varchar(50) NOT NULL DEFAULT '0',
  `fecha` varchar(50) NOT NULL DEFAULT '0',
  `camisa` varchar(50) NOT NULL DEFAULT '0',
  `edad` int(11) NOT NULL DEFAULT 0,
  `talla` varchar(50) NOT NULL DEFAULT '0',
  `comentarios` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla tailandia.usuarios: ~5 rows (aproximadamente)
INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `telefono`, `destino`, `fecha`, `camisa`, `edad`, `talla`, `comentarios`) VALUES
	(2, 'ABRAHAM', 'ESTRADA', 'MARIO.AEG.021@GMAIL.COM', '6642220170', 'Koh Phi Phi', '2023-11-26', 'SI', 20, 'S', 'aa'),
	(3, 'ABRAHAM', 'ESTRADA', 'MARIO.AEG.021@GMAIL.COM', '6642220170', 'Hua Hin', '2023-11-30', 'SI', 20, 'M', ''),
	(4, 'A', 'A', 'AHSOA@HOTMAIL.COM', 'a', 'Phuket', '2023-11-29', 'NO', 20, 'NINGUNA', 'aa'),
	(5, 'ADAN ', 'PRECIADO', 'ADAN@A.COM', '6642220170', 'Chiang Mai', '2023-11-29', 'SI', 18, 'S', ''),
	(6, 'ABRAHAM', 'E', 'MARIO.AEG.021@GMAIL.COM', '6642220170', 'Phuket', '2023-11-28', 'SI', 18, 'M', 'aa'),
	(7, 'JOSS', 'CRUZ', 'JOSS@A.COM', '6642220170', 'Krabi', '2023-11-28', 'SI', 60, 'M', 'nfejsknvnds ');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
