-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.17-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para tcc_acessib
DROP DATABASE IF EXISTS `tcc_acessib`;
CREATE DATABASE IF NOT EXISTS `tcc_acessib` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `tcc_acessib`;

-- Copiando estrutura para tabela tcc_acessib.aval_estabelecimento
DROP TABLE IF EXISTS `aval_estabelecimento`;
CREATE TABLE IF NOT EXISTS `aval_estabelecimento` (
  `ID_Aval_Estab` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Estab` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `Qtd_Rampas` varchar(256) NOT NULL,
  `Qld_Rampas` varchar(256) NOT NULL,
  `Portas` varchar(256) NOT NULL,
  `Qtd_Vagas` varchar(256) NOT NULL,
  `Qld_Vagas` varchar(256) NOT NULL,
  `Banheiros` varchar(256) NOT NULL,
  `Comentario` varchar(256) NOT NULL,
  `Data_Coment` date DEFAULT NULL,
  `Estrela` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Aval_Estab`),
  KEY `fk_ID_Estab` (`ID_Estab`),
  KEY `fk_ID_Usuario` (`ID_User`),
  CONSTRAINT `fk_ID_Estab` FOREIGN KEY (`ID_Estab`) REFERENCES `estabelecimento` (`ID_Estab`),
  CONSTRAINT `fk_ID_Usuario` FOREIGN KEY (`ID_User`) REFERENCES `usuario` (`ID_User`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela tcc_acessib.aval_estabelecimento: ~5 rows (aproximadamente)
DELETE FROM `aval_estabelecimento`;
/*!40000 ALTER TABLE `aval_estabelecimento` DISABLE KEYS */;
INSERT INTO `aval_estabelecimento` (`ID_Aval_Estab`, `ID_Estab`, `ID_User`, `Qtd_Rampas`, `Qld_Rampas`, `Portas`, `Qtd_Vagas`, `Qld_Vagas`, `Banheiros`, `Comentario`, `Data_Coment`, `Estrela`) VALUES
	(6, 12, 2, 'Duas ou mais', 'Medianas', 'Adequado', 'Uma', 'Ruins, estão mal demarcadas e/ou estreitas', 'Dois ou mais', '', '2021-08-27', 4),
	(9, 2, 1, 'Duas ou mais', 'Bom estado', 'Adequado', 'Uma', 'Bom estado', 'Dois ou mais', '', '2021-08-27', 4),
	(15, 1, 16, 'Nenhuma', 'Medianas', 'Adequado', 'Uma', 'Ruins, estão mal demarcadas e/ou estreitas', 'Não há nenhum', '', '2021-09-16', 2),
	(16, 12, 16, 'Uma', 'Medianas', ' ', 'Duas ou mais', 'Não sei', 'Um', '', '2021-09-16', 2);
/*!40000 ALTER TABLE `aval_estabelecimento` ENABLE KEYS */;

-- Copiando estrutura para tabela tcc_acessib.estabelecimento
DROP TABLE IF EXISTS `estabelecimento`;
CREATE TABLE IF NOT EXISTS `estabelecimento` (
  `ID_Estab` int(11) NOT NULL AUTO_INCREMENT,
  `CNPJ` varchar(20) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `Nome_Estab` varchar(100) NOT NULL,
  `Horario` varchar(256) NOT NULL,
  `Telefone` varchar(20) NOT NULL,
  `Email` varchar(256) DEFAULT NULL,
  `Tipo` varchar(50) NOT NULL,
  `CEP` varchar(10) NOT NULL,
  `Cidade` varchar(50) NOT NULL,
  `Estado` varchar(50) NOT NULL,
  `Bairro` varchar(50) NOT NULL,
  `Rua` varchar(50) NOT NULL,
  `Endereco` varchar(256) NOT NULL,
  `Num` varchar(256) NOT NULL,
  `Acessib` varchar(256) NOT NULL,
  `Acessib_Bio` varchar(256) DEFAULT NULL,
  `Foto` varchar(256) DEFAULT NULL,
  `Foto1` varchar(256) DEFAULT NULL,
  `Foto2` varchar(256) DEFAULT NULL,
  `Foto3` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`ID_Estab`),
  KEY `fk_ID_User` (`ID_User`),
  CONSTRAINT `fk_ID_User` FOREIGN KEY (`ID_User`) REFERENCES `usuario` (`ID_User`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela tcc_acessib.estabelecimento: ~3 rows (aproximadamente)
DELETE FROM `estabelecimento`;
/*!40000 ALTER TABLE `estabelecimento` DISABLE KEYS */;
INSERT INTO `estabelecimento` (`ID_Estab`, `CNPJ`, `ID_User`, `Nome_Estab`, `Horario`, `Telefone`, `Email`, `Tipo`, `CEP`, `Cidade`, `Estado`, `Bairro`, `Rua`, `Endereco`, `Num`, `Acessib`, `Acessib_Bio`, `Foto`, `Foto1`, `Foto2`, `Foto3`) VALUES
	(1, '11. 111. 111/0001-11', 2, 'Americanas', 'De segunda a sexta, das 8h às 20h', ' 5513987654321', 'america@email.com', 'Loja', '11950-000', 'Cajati', 'SP', 'Centro', 'Av. Fernando Costa', 'Av. Fernando Costa, 222-Centro, Cajati-SP, 11950-000', '222', ' 1 2 6 ', '', '11f44263a69c9e78ca869e24089938ec.jpg', NULL, NULL, NULL),
	(2, '22. 111. 111/0001-11', 2, 'Lojas Cem', 'De segunda a sexta, das 8h às 20h', ' 5513987654333', 'cem@email.com', 'Loja de móveis', '11950-000', 'Cajati', 'SP', 'Vila Industrial', 'Av. Fernando Costa', 'Av. Fernando Costa, 415-Vila Industrial, Cajati-SP, 11950-000', '415', '  2 4 6 9', '', NULL, NULL, NULL, NULL),
	(12, '11. 111. 111/0001-58', 1, 'Nova Pão Bom', 'segunda a sexta, das 5h até 23h', ' 551325896478', 'pao@email.com', 'Padaria', '11950-000', 'Cajati', 'SP', 'Centro', 'Av. Fernando Costa', 'Av. Fernando Costa, 32-Centro, Cajati-SP, 11950-000', '32', ' 1 2 5 6 ', '   O melhor pão da cidade!', '389fb2d991da8227a122267bbfb6d58e.jpg', 'd896ecff6db7592a7e6c9d211063248a.jpg', '0a243258c2aafb5d6df7033a2b95f509.jpg', '6d72a236e4b322d5e927ead89138467a.jpg'),
	(18, '11. 111. 111/0001-96', 1, 'Magnânimo', 'Das 8h às 20h', ' 22139975354654', 'mag@email.com', 'Supermercado', '11950-000', 'Cajati', 'SP', 'Centro', 'R. Dr. Pierre Geisweiler', 'R. Dr. Pierre Geisweiler, 45-Centro, Cajati-SP, 11950-000', '45', ' 1 2 4 6 ', '', '75327751a0ef0192b69009c03e0b7633.jpg', NULL, NULL, NULL);
/*!40000 ALTER TABLE `estabelecimento` ENABLE KEYS */;

-- Copiando estrutura para tabela tcc_acessib.resposta
DROP TABLE IF EXISTS `resposta`;
CREATE TABLE IF NOT EXISTS `resposta` (
  `ID_Resp` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Estab` int(11) NOT NULL,
  `ID_Cliente` int(11) NOT NULL,
  `ID_Dono` int(11) NOT NULL,
  `ID_Aval` int(11) NOT NULL,
  `Resposta` varchar(256) NOT NULL,
  `DataR` date DEFAULT NULL,
  PRIMARY KEY (`ID_Resp`),
  KEY `FK_resposta_estabelecimento` (`ID_Estab`),
  KEY `FK_resposta_usuario` (`ID_Cliente`),
  KEY `FK_resposta_usuario_2` (`ID_Dono`),
  KEY `FK_resposta_aval_estabelecimento` (`ID_Aval`),
  CONSTRAINT `FK_resposta_aval_estabelecimento` FOREIGN KEY (`ID_Aval`) REFERENCES `aval_estabelecimento` (`ID_Aval_Estab`),
  CONSTRAINT `FK_resposta_estabelecimento` FOREIGN KEY (`ID_Estab`) REFERENCES `estabelecimento` (`ID_Estab`),
  CONSTRAINT `FK_resposta_usuario` FOREIGN KEY (`ID_Cliente`) REFERENCES `usuario` (`ID_User`),
  CONSTRAINT `FK_resposta_usuario_2` FOREIGN KEY (`ID_Dono`) REFERENCES `usuario` (`ID_User`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela tcc_acessib.resposta: ~0 rows (aproximadamente)
DELETE FROM `resposta`;
/*!40000 ALTER TABLE `resposta` DISABLE KEYS */;
INSERT INTO `resposta` (`ID_Resp`, `ID_Estab`, `ID_Cliente`, `ID_Dono`, `ID_Aval`, `Resposta`, `DataR`) VALUES
	(7, 12, 2, 1, 6, 'Obrigada pela avaliação, volte sempre!!', '2021-11-12');
/*!40000 ALTER TABLE `resposta` ENABLE KEYS */;

-- Copiando estrutura para tabela tcc_acessib.trajeto
DROP TABLE IF EXISTS `trajeto`;
CREATE TABLE IF NOT EXISTS `trajeto` (
  `Ponto_A` varchar(150) NOT NULL,
  `Ponto_B` varchar(150) NOT NULL,
  `CEP` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela tcc_acessib.trajeto: ~0 rows (aproximadamente)
DELETE FROM `trajeto`;
/*!40000 ALTER TABLE `trajeto` DISABLE KEYS */;
INSERT INTO `trajeto` (`Ponto_A`, `Ponto_B`, `CEP`) VALUES
	('A', 'B', '11111-000');
/*!40000 ALTER TABLE `trajeto` ENABLE KEYS */;

-- Copiando estrutura para tabela tcc_acessib.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `ID_User` int(11) NOT NULL AUTO_INCREMENT,
  `Telefone` varchar(20) NOT NULL,
  `Senha` varchar(20) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Apelido` varchar(50) NOT NULL,
  `Deficiencia` varchar(11) NOT NULL,
  `Biografia` varchar(500) DEFAULT NULL,
  `Email` varchar(256) NOT NULL,
  PRIMARY KEY (`ID_User`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela tcc_acessib.usuario: ~3 rows (aproximadamente)
DELETE FROM `usuario`;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`ID_User`, `Telefone`, `Senha`, `Nome`, `Apelido`, `Deficiencia`, `Biografia`, `Email`) VALUES
	(1, '  5513123456789', 'mclarag', 'Maria Clara Gomes ', 'Clara', 'Não', '', 'clara.gomes10@email.com'),
	(2, ' 5513123456799', 'yato1', 'Yato', 'Yato', 'Não', '', 'yato@email.com'),
	(16, ' 55789542544', 'bia123', 'Ana Beatriz', 'Bia', 'Não', '', 'anab@email.com');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
