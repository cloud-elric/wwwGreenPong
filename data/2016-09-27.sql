-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.4-m14 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             8.0.0.4396
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla green_pong_monkeydb.ent_usuarios
CREATE TABLE IF NOT EXISTS `ent_usuarios` (
  `id_usuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `txt_token` varchar(60) NOT NULL,
  `txt_nombre` varchar(50) NOT NULL,
  `txt_apellido_paterno` varchar(50) NOT NULL,
  `txt_email` varchar(50) NOT NULL,
  `tel_numero_celular` varchar(50) NOT NULL,
  `b_participo` int(10) unsigned NOT NULL DEFAULT '0',
  `fch_creacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `txt_token` (`txt_token`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla green_pong_monkeydb.ent_usuarios: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `ent_usuarios` DISABLE KEYS */;
INSERT INTO `ent_usuarios` (`id_usuario`, `txt_token`, `txt_nombre`, `txt_apellido_paterno`, `txt_email`, `tel_numero_celular`, `b_participo`, `fch_creacion`) VALUES
	(4, '', 'Humberto', 'Marquez', 'cloudelric74@gmail.com', '5534440014', 0, '2016-09-26 11:23:50'),
	(5, 'usr_fed47def8c7d663be25e17dc3ba5b82e57e94a16d02ce', 'Humberto', 'Antonio', 'cloud-elric@hotmail.com', '5534440014', 0, '2016-09-26 11:23:50');
/*!40000 ALTER TABLE `ent_usuarios` ENABLE KEYS */;


-- Volcando estructura para tabla green_pong_monkeydb.wrk_codigos
CREATE TABLE IF NOT EXISTS `wrk_codigos` (
  `id_codigo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_usuario` int(10) unsigned NOT NULL,
  `txt_token` varchar(60) NOT NULL,
  `txt_codigo` varchar(50) NOT NULL,
  `fch_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `b_codigo_usado` int(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_codigo`),
  UNIQUE KEY `txt_token` (`txt_token`),
  KEY `FK_wrk_codigos_ent_usuarios` (`id_usuario`),
  CONSTRAINT `FK_wrk_codigos_ent_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `ent_usuarios` (`id_usuario`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla green_pong_monkeydb.wrk_codigos: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `wrk_codigos` DISABLE KEYS */;
INSERT INTO `wrk_codigos` (`id_codigo`, `id_usuario`, `txt_token`, `txt_codigo`, `fch_creacion`, `b_codigo_usado`) VALUES
	(2, 5, 'cod_7f96357e399ff8d099f07f09249a213057e94a1723149', 'efb953cd8e', '2016-09-26 11:24:30', 0);
/*!40000 ALTER TABLE `wrk_codigos` ENABLE KEYS */;


-- Volcando estructura para tabla green_pong_monkeydb.wrk_puntuaciones
CREATE TABLE IF NOT EXISTS `wrk_puntuaciones` (
  `id_puntuacion` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_usuario` int(10) unsigned NOT NULL,
  `num_puntuacion` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_puntuacion`),
  KEY `FK_wrk_puntuaciones_ent_usuarios` (`id_usuario`),
  CONSTRAINT `FK_wrk_puntuaciones_ent_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `ent_usuarios` (`id_usuario`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla green_pong_monkeydb.wrk_puntuaciones: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `wrk_puntuaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `wrk_puntuaciones` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
