-- --------------------------------------------------------
-- Anfitrião:                    127.0.0.1
-- Versão do servidor:           8.4.3 - MySQL Community Server - GPL
-- SO do servidor:               Win64
-- HeidiSQL Versão:              12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- A despejar estrutura para tabela choupal_db.inscricoes
CREATE TABLE IF NOT EXISTS `inscricoes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `evento` varchar(100) NOT NULL,
  `data_registo` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- A despejar dados para tabela choupal_db.inscricoes: ~2 rows (aproximadamente)
INSERT INTO `inscricoes` (`id`, `nome`, `email`, `telefone`, `evento`, `data_registo`) VALUES
	(1, 'Bernardo Vieira', 'asdasd@asjdasd.com', '91823918293', 'caminhada', '2025-12-16 17:31:41'),
	(2, 'Artur Yakovenko', 'asdasdasd@gmail.com', '925142755', 'plantacao', '2025-12-16 17:32:08');

-- A despejar estrutura para tabela choupal_db.reservas_basket
CREATE TABLE IF NOT EXISTS `reservas_basket` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `data_reserva` date NOT NULL,
  `hora_reserva` time NOT NULL,
  `data_registo` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- A despejar dados para tabela choupal_db.reservas_basket: ~2 rows (aproximadamente)
INSERT INTO `reservas_basket` (`id`, `nome`, `email`, `telefone`, `data_reserva`, `hora_reserva`, `data_registo`) VALUES
	(1, 'Artur Yakovenko', 'arturyakovenko7@gmail.com', '925142755', '2025-12-16', '09:00:00', '2025-12-16 17:04:47'),
	(2, 'Artur Yakovenko', 'arturyakovenko7@gmail.com', '925142755', '2025-12-27', '11:00:00', '2025-12-16 17:09:29');

-- A despejar estrutura para tabela choupal_db.reservas_pt
CREATE TABLE IF NOT EXISTS `reservas_pt` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(100) NOT NULL,
  `idade` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `pt_escolhido` varchar(100) NOT NULL,
  `data_aula` date NOT NULL,
  `hora_aula` time NOT NULL,
  `data_registo` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- A despejar dados para tabela choupal_db.reservas_pt: ~2 rows (aproximadamente)
INSERT INTO `reservas_pt` (`id`, `nome_cliente`, `idade`, `email`, `telefone`, `pt_escolhido`, `data_aula`, `hora_aula`, `data_registo`) VALUES
	(1, 'Artur Yakovenko', 20, 'a2023138730@alumni.iscac.pt', '925142755', 'Ana', '2025-12-25', '16:00:00', '2025-12-16 15:18:49'),
	(2, 'Bernardo Vieira', 12, 'asdjabsdja@gmail.com', '981729837', 'Ana', '2025-12-25', '15:00:00', '2025-12-16 15:23:47');

-- A despejar estrutura para tabela choupal_db.reservas_tenis
CREATE TABLE IF NOT EXISTS `reservas_tenis` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `data_reserva` date NOT NULL,
  `hora_reserva` time NOT NULL,
  `data_registo` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- A despejar dados para tabela choupal_db.reservas_tenis: ~2 rows (aproximadamente)
INSERT INTO `reservas_tenis` (`id`, `nome`, `email`, `telefone`, `data_reserva`, `hora_reserva`, `data_registo`) VALUES
	(1, 'Bernardo', 'asdjas@fam.com', '123123123', '2025-12-16', '10:00:00', '2025-12-16 17:10:02'),
	(2, 'Artur Yakovenko', 'asdkaskldnas@gmaa.com', '925876877', '2025-12-16', '20:00:00', '2025-12-16 17:10:27');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
