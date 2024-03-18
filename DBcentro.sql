-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando datos para la tabla centro.boletos: ~0 rows (aproximadamente)

-- Volcando datos para la tabla centro.cajons: ~0 rows (aproximadamente)

-- Volcando datos para la tabla centro.carteleras: ~0 rows (aproximadamente)

-- Volcando datos para la tabla centro.estacionamientos: ~0 rows (aproximadamente)

-- Volcando datos para la tabla centro.eventos: ~0 rows (aproximadamente)

-- Volcando datos para la tabla centro.migrations: ~0 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(2, '2024_03_04_232732_create_carteleras_table', 1),
	(3, '2024_03_04_232821_create_estacionamientos_table', 1),
	(4, '2024_03_04_232830_create_eventos_table', 1),
	(5, '2024_03_04_232840_create_organizadors_table', 1),
	(6, '2024_03_04_232849_create_personas_table', 1),
	(7, '2024_03_04_232856_create_salas_table', 1),
	(8, '2024_03_04_232904_create_usuarios_table', 1),
	(9, '2024_03_06_004347_create_boletos_table', 1),
	(10, '2024_03_17_192854_create_cajons_table', 1);

-- Volcando datos para la tabla centro.organizadors: ~0 rows (aproximadamente)

-- Volcando datos para la tabla centro.personal_access_tokens: ~0 rows (aproximadamente)

-- Volcando datos para la tabla centro.personas: ~0 rows (aproximadamente)
INSERT INTO `personas` (`id`, `nombre`, `a_paterno`, `a_materno`, `fecha_nac`, `telefono`, `created_at`, `updated_at`) VALUES
	(1, 'carlos', 'romero', 'flores', '2024-03-18 11:55:51', '2481726753', NULL, NULL);

-- Volcando datos para la tabla centro.salas: ~0 rows (aproximadamente)

-- Volcando datos para la tabla centro.usuarios: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
