-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.24-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Copiando dados para a tabela lab_ti_aec.clientes: ~13 rows (aproximadamente)
INSERT INTO `clientes` (`id_cliente`, `nome_cliente`, `contato_cliente`) VALUES
	(1, 'MONITOR', '1'),
	(2, 'CPU', '999'),
	(3, 'TECLADO', '80'),
	(4, 'CABO VGA', '30'),
	(5, 'CABO DISPLAYPORT', '10'),
	(6, 'FONTE', '2'),
	(7, 'RTX 3090 TI', '5'),
	(8, '+++', '8'),
	(9, '----', '9'),
	(10, 'ETC', '5'),
	(11, 'TELA', '2'),
	(12, 'HEADSET', '1'),
	(13, 'DA45', '1');

-- Copiando dados para a tabela lab_ti_aec.usuarios: ~2 rows (aproximadamente)
INSERT INTO `usuarios` (`id_usuario`, `login_usuario`, `senha_usuario`, `nivel_usuario`, `id_funcionario`) VALUES
	(1, 'n.yann.ramos', '36e1a5072c78359066ed7715f5ff3da8', 2, 0),
	(2, 'test', '202cb962ac59075b964b07152d234b70', 2, 0);

-- Copiando dados para a tabela lab_ti_aec.usuarios_nivel: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
