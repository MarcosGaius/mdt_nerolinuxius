-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.22-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para db_nerolinuxius
CREATE DATABASE IF NOT EXISTS `db_nerolinuxius` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `db_nerolinuxius`;

-- Copiando estrutura para tabela db_nerolinuxius.billing
CREATE TABLE IF NOT EXISTS `billing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identifier` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_nerolinuxius.billing: ~30 rows (aproximadamente)
/*!40000 ALTER TABLE `billing` DISABLE KEYS */;
INSERT INTO `billing` (`id`, `identifier`, `sender`, `target_type`, `target`, `label`, `amount`, `date`) VALUES
	(1, 'IPVA', 'Secretaria da Fazenda', 'Imposto', '1', 'IPVA', 14512, '2022-03-30'),
	(2, 'Fine', 'Honda Civic', 'Multa', '5', 'Grand Theft Auto', 645, '2022-03-30'),
	(4, 'Fine', 'Nero Lucius', 'Multa', '2', 'Illegally Crossing a continuous Line', 456, '2022-03-30'),
	(26, 'Fine', 'Nero Lucius', 'Multa', '3', 'Illegal U-Turn', 250, '2022-04-10'),
	(27, 'Fine', 'Nero Lucius', 'Multa', '3', 'Illegal Parking', 70, '2022-04-10'),
	(29, 'Fine', 'BibiGamer011', 'Multa', '4', 'Hit and Run', 800, '2022-04-11'),
	(30, 'Fine', 'BibiGamer011', 'Multa', '4', 'Illegally Driving Off-road', 170, '2022-04-11'),
	(31, 'Fine', 'BibiGamer011', 'Multa', '4', 'Driving without a License', 1500, '2022-04-11'),
	(32, 'Fine', 'BibiGamer011', 'Multa', '4', 'Driving an illegal Vehicle', 100, '2022-04-11'),
	(33, 'Fine', 'BibiGamer011', 'Multa', '4', 'Driving an illegal Vehicle', 100, '2022-04-11'),
	(35, 'Fine', 'Urassam', 'Multa', '8', 'Hit and Run', 800, '2022-04-15'),
	(36, 'Fine', 'Urassam', 'Multa', '8', 'Illegal Parking', 70, '2022-04-15'),
	(37, 'Fine', 'Urassam', 'Multa', '8', 'Failing to stop at a Stop Sign ', 105, '2022-04-15'),
	(38, 'Fine', 'BibiGamer011', 'Multa', '1', 'Misuse of a horn', 30, '2022-04-18'),
	(39, 'Fine', 'BibiGamer011', 'Multa', '1', 'Assault of an LEO', 2500, '2022-04-18'),
	(40, 'Fine', 'Jottinha', 'Multa', '1', 'Driving on the wrong side of the road', 250, '2022-04-18'),
	(41, 'Fine', 'BibiGamer011', 'Multa', '1', 'Driving without a License', 1500, '2022-04-18'),
	(43, 'Fine', 'BibiGamer011', 'Multa', '1', 'Misuse of a horn', 30, '2022-04-18'),
	(44, 'Fine', 'Rei do Kudairo', 'Multa', '1', 'Illegal U-Turn', 250, '2022-04-18'),
	(45, 'Fine', 'BibiGamer011', 'Multa', '2', 'Driving on the wrong side of the road', 250, '2022-04-18'),
	(46, 'Fine', 'Homem Fosgo', 'Multa', '2', 'Illegally Driving Off-road', 170, '2022-04-18'),
	(48, 'Fine', 'Urassam', 'Multa', '4', 'Driving on the wrong side of the road', 250, '2022-04-18'),
	(49, 'Fine', 'Urassam', 'Multa', '1', 'Misuse of a horn', 30, '2022-04-18'),
	(50, 'Fine', 'Urassam', 'Multa', '3', 'Failing to stop at a Red Light', 130, '2022-04-18'),
	(51, 'Fine', 'pedro', 'Multa', '2', 'Failing to stop at a Red Light', 130, '2022-04-18'),
	(52, 'Fine', 'Urassam', 'Multa', '7', 'Illegally Crossing a continuous Line', 40, '2022-04-18'),
	(53, 'Fine', 'Mc Champions', 'Multa', '3', 'Driving on the wrong side of the road', 250, '2022-04-18'),
	(55, 'Fine', 'BibiGamer011', 'Multa', '3', 'Illegally Crossing a continuous Line', 40, '2022-04-18'),
	(56, 'Fine', 'Homem Fosgo', 'Multa', '9', 'Misuse of a horn', 30, '2022-04-18'),
	(57, 'Fine', 'osvaldo', 'Multa', '3', 'Illegally Crossing a continuous Line', 40, '2022-04-18');
/*!40000 ALTER TABLE `billing` ENABLE KEYS */;

-- Copiando estrutura para tabela db_nerolinuxius.fine_types
CREATE TABLE IF NOT EXISTS `fine_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_nerolinuxius.fine_types: ~52 rows (aproximadamente)
/*!40000 ALTER TABLE `fine_types` DISABLE KEYS */;
INSERT INTO `fine_types` (`id`, `label`, `amount`, `category`) VALUES
	(1, 'Misuse of a horn', 30, 0),
	(2, 'Illegally Crossing a continuous Line', 40, 0),
	(3, 'Driving on the wrong side of the road', 250, 0),
	(4, 'Illegal U-Turn', 250, 0),
	(5, 'Illegally Driving Off-road', 170, 0),
	(6, 'Refusing a Lawful Command', 30, 0),
	(7, 'Illegally Stopping a Vehicle', 150, 0),
	(8, 'Illegal Parking', 70, 0),
	(9, 'Failing to Yield to the right', 70, 0),
	(10, 'Failure to comply with Vehicle Information', 90, 0),
	(11, 'Failing to stop at a Stop Sign ', 105, 0),
	(12, 'Failing to stop at a Red Light', 130, 0),
	(13, 'Illegal Passing', 100, 0),
	(14, 'Driving an illegal Vehicle', 100, 0),
	(15, 'Driving without a License', 1500, 0),
	(16, 'Hit and Run', 800, 0),
	(17, 'Exceeding Speeds Over < 5 mph', 90, 0),
	(18, 'Exceeding Speeds Over 5-15 mph', 120, 0),
	(19, 'Exceeding Speeds Over 15-30 mph', 180, 0),
	(20, 'Exceeding Speeds Over > 30 mph', 300, 0),
	(21, 'Impeding traffic flow', 110, 1),
	(22, 'Public Intoxication', 90, 1),
	(23, 'Disorderly conduct', 90, 1),
	(24, 'Obstruction of Justice', 130, 1),
	(25, 'Insults towards Civilans', 75, 1),
	(26, 'Disrespecting of an LEO', 110, 1),
	(27, 'Verbal Threat towards a Civilan', 90, 1),
	(28, 'Verbal Threat towards an LEO', 150, 1),
	(29, 'Providing False Information', 250, 1),
	(30, 'Attempt of Corruption', 1500, 1),
	(31, 'Brandishing a weapon in city Limits', 120, 2),
	(32, 'Brandishing a Lethal Weapon in city Limits', 300, 2),
	(33, 'No Firearms License', 600, 2),
	(34, 'Possession of an Illegal Weapon', 700, 2),
	(35, 'Possession of Burglary Tools', 300, 2),
	(36, 'Grand Theft Auto', 1800, 2),
	(37, 'Intent to Sell/Distrube of an illegal Substance', 1500, 2),
	(38, 'Frabrication of an Illegal Substance', 1500, 2),
	(39, 'Possession of an Illegal Substance ', 650, 2),
	(40, 'Kidnapping of a Civilan', 1500, 2),
	(41, 'Kidnapping of an LEO', 2000, 2),
	(42, 'Robbery', 650, 2),
	(43, 'Armed Robbery of a Store', 650, 2),
	(44, 'Armed Robbery of a Bank', 1500, 2),
	(45, 'Assault on a Civilian', 2000, 3),
	(46, 'Assault of an LEO', 2500, 3),
	(47, 'Attempt of Murder of a Civilian', 3000, 3),
	(48, 'Attempt of Murder of an LEO', 5000, 3),
	(49, 'Murder of a Civilian', 10000, 3),
	(50, 'Murder of an LEO', 30000, 3),
	(51, 'Involuntary manslaughter', 1800, 3),
	(52, 'Fraud', 2000, 2);
/*!40000 ALTER TABLE `fine_types` ENABLE KEYS */;

-- Copiando estrutura para tabela db_nerolinuxius.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_nerolinuxius.jobs: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
INSERT INTO `jobs` (`name`, `label`) VALUES
	('police', 'Policial'),
	('unemployed', 'Desempregado');
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;

-- Copiando estrutura para tabela db_nerolinuxius.job_grades
CREATE TABLE IF NOT EXISTS `job_grades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grade` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `skin_male` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `skin_female` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_nerolinuxius.job_grades: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `job_grades` DISABLE KEYS */;
INSERT INTO `job_grades` (`id`, `job_name`, `grade`, `name`, `label`, `salary`, `skin_male`, `skin_female`) VALUES
	(1, 'unemployed', 0, 'unemployed', 'Unemployed', 200, '{}', '{}'),
	(2, 'police', 0, 'recruit', 'Recruta', 20, '{}', '{}'),
	(3, 'police', 1, 'officer', 'Oficial', 40, '{}', '{}'),
	(4, 'police', 2, 'sergeant', 'Sargento', 60, '{}', '{}'),
	(5, 'police', 3, 'lieutenant', 'Tenente', 85, '{}', '{}'),
	(6, 'police', 4, 'boss', 'Chefe de Polícia', 100, '{}', '{}');
/*!40000 ALTER TABLE `job_grades` ENABLE KEYS */;

-- Copiando estrutura para tabela db_nerolinuxius.licenses
CREATE TABLE IF NOT EXISTS `licenses` (
  `license_type` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `license_label` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`license_type`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_nerolinuxius.licenses: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `licenses` DISABLE KEYS */;
INSERT INTO `licenses` (`license_type`, `license_label`) VALUES
	('A', 'CNH'),
	('AB', 'CNH'),
	('ACC', 'Autorização'),
	('B', 'CNH'),
	('C', 'CNH'),
	('D', 'CNH'),
	('E', 'CNH');
/*!40000 ALTER TABLE `licenses` ENABLE KEYS */;

-- Copiando estrutura para tabela db_nerolinuxius.owned_vehicles
CREATE TABLE IF NOT EXISTS `owned_vehicles` (
  `owner` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plate` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'car',
  `veh_job` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stored` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`plate`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_nerolinuxius.owned_vehicles: ~10 rows (aproximadamente)
/*!40000 ALTER TABLE `owned_vehicles` DISABLE KEYS */;
INSERT INTO `owned_vehicles` (`owner`, `plate`, `vehicle`, `type`, `veh_job`, `stored`) VALUES
	('1', 'CAR1T89', 'bf400', 'motorcycles', NULL, 1),
	('2', 'CAR1T90', 'adder', 'motorcycles', NULL, 1),
	('4', 'CAR1T91', 'zentorno', 'motorcycles', NULL, 1),
	('4', 'CAR1T92', 'sultan', 'motorcycles', NULL, 1),
	('8', 'CAR1T94', 'carro bicho', 'motorcycles', NULL, 1),
	('8', 'CAR1T95', 'caneco movel', 'motorcycles', NULL, 1),
	('9', 'CAR1T96', 'bf400', 'motorcycles', NULL, 1),
	('9', 'CAR1T97', 'bf400', 'motorcycles', NULL, 1),
	('9', 'CAR1T98', 'bf400', 'motorcycles', NULL, 1),
	('3', 'CAR1T99', 'bf400', 'motorcycles', NULL, 1);
/*!40000 ALTER TABLE `owned_vehicles` ENABLE KEYS */;

-- Copiando estrutura para tabela db_nerolinuxius.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'unemployed',
  `job_grade` int(11) DEFAULT 0,
  `firstname` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `sex` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` int(10) DEFAULT NULL,
  `working` int(1) unsigned zerofill DEFAULT 0,
  `badge` int(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_nerolinuxius.users: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `job`, `job_grade`, `firstname`, `lastname`, `dateofbirth`, `sex`, `height`, `working`, `badge`) VALUES
	(1, 'police', 4, 'Nero', 'Lucius', '1500-12-12', 'm', 192, 1, 321),
	(2, 'unemployed', 0, 'Litte', 'Jota', '2005-05-12', 'm', 152, 0, NULL),
	(3, 'unemployed', 0, 'AK', 'Asiimov', '2012-01-01', 'f', 220, 0, NULL),
	(4, 'police', 3, 'João', 'Bastion', '1999-10-10', 'm', 120, 1, 555),
	(5, 'police', 1, 'Rest in', 'Piss', '2018-12-18', 'f', 187, 1, 123),
	(7, 'police', 0, '21', 'Insano', '2022-03-23', 'm', 111, 1, 978),
	(8, 'police', 3, 'Honda', 'Civic', '1980-03-22', 'f', 222, 1, 421),
	(9, 'police', 2, 'Sagento', 'Deiz oito', '2002-10-15', 'm', 140, 1, 999);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Copiando estrutura para tabela db_nerolinuxius.users_record
CREATE TABLE IF NOT EXISTS `users_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_link` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citizen_id` int(11) DEFAULT NULL,
  `rec_desc` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_nerolinuxius.users_record: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `users_record` DISABLE KEYS */;
INSERT INTO `users_record` (`id`, `img_link`, `citizen_id`, `rec_desc`) VALUES
	(1, 'https://i.imgur.com/1g27JDl.png', 1, '808 melo'),
	(7, 'https://i.imgur.com/wMID7dj.jpeg', 2, 'mano e agroa sera que vai, muda ai deixa eu ver, eae men, agr mudou'),
	(10, 'https://avatarfiles.alphacoders.com/246/246858.png', 3, 'eae mne, suagve blz??/'),
	(11, 'https://i.imgur.com/tIKVpFg.jpeg', 4, 'eaeaeaea'),
	(12, 'https://i.imgur.com/Zv67DkH.png', 8, 'Esse cara é um losco.');
/*!40000 ALTER TABLE `users_record` ENABLE KEYS */;

-- Copiando estrutura para tabela db_nerolinuxius.user_licenses
CREATE TABLE IF NOT EXISTS `user_licenses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_license_type` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `license_owner` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_nerolinuxius.user_licenses: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `user_licenses` DISABLE KEYS */;
INSERT INTO `user_licenses` (`id`, `user_license_type`, `license_owner`) VALUES
	(1, 'AB', '1');
/*!40000 ALTER TABLE `user_licenses` ENABLE KEYS */;

-- Copiando estrutura para tabela db_nerolinuxius.vehicles
CREATE TABLE IF NOT EXISTS `vehicles` (
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`model`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_nerolinuxius.vehicles: ~240 rows (aproximadamente)
/*!40000 ALTER TABLE `vehicles` DISABLE KEYS */;
INSERT INTO `vehicles` (`name`, `model`, `price`, `category`) VALUES
	('Adder', 'adder', 900000, 'super'),
	('Akuma', 'AKUMA', 7500, 'motorcycles'),
	('Alpha', 'alpha', 60000, 'sports'),
	('Ardent', 'ardent', 1150000, 'sportsclassics'),
	('Asea', 'asea', 5500, 'sedans'),
	('Autarch', 'autarch', 1955000, 'super'),
	('Avarus', 'avarus', 18000, 'motorcycles'),
	('Bagger', 'bagger', 13500, 'motorcycles'),
	('Baller', 'baller2', 40000, 'suvs'),
	('Baller Sport', 'baller3', 60000, 'suvs'),
	('Banshee', 'banshee', 70000, 'sports'),
	('Banshee 900R', 'banshee2', 255000, 'super'),
	('Bati 801', 'bati', 12000, 'motorcycles'),
	('Bati 801RR', 'bati2', 19000, 'motorcycles'),
	('Bestia GTS', 'bestiagts', 55000, 'sports'),
	('BF400', 'bf400', 6500, 'motorcycles'),
	('Bf Injection', 'bfinjection', 16000, 'offroad'),
	('Bifta', 'bifta', 12000, 'offroad'),
	('Bison', 'bison', 45000, 'vans'),
	('Blade', 'blade', 15000, 'muscle'),
	('Blazer', 'blazer', 6500, 'offroad'),
	('Blazer Sport', 'blazer4', 8500, 'offroad'),
	('blazer5', 'blazer5', 1755600, 'offroad'),
	('Blista', 'blista', 8000, 'compacts'),
	('BMX (velo)', 'bmx', 160, 'motorcycles'),
	('Bobcat XL', 'bobcatxl', 32000, 'vans'),
	('Brawler', 'brawler', 45000, 'offroad'),
	('Brioso R/A', 'brioso', 18000, 'compacts'),
	('Btype', 'btype', 62000, 'sportsclassics'),
	('Btype Hotroad', 'btype2', 155000, 'sportsclassics'),
	('Btype Luxe', 'btype3', 85000, 'sportsclassics'),
	('Buccaneer', 'buccaneer', 18000, 'muscle'),
	('Buccaneer Rider', 'buccaneer2', 24000, 'muscle'),
	('Buffalo', 'buffalo', 12000, 'sports'),
	('Buffalo S', 'buffalo2', 20000, 'sports'),
	('Bullet', 'bullet', 90000, 'super'),
	('Burrito', 'burrito3', 19000, 'vans'),
	('Camper', 'camper', 42000, 'vans'),
	('Carbonizzare', 'carbonizzare', 75000, 'sports'),
	('Carbon RS', 'carbonrs', 18000, 'motorcycles'),
	('Casco', 'casco', 30000, 'sportsclassics'),
	('Cavalcade', 'cavalcade2', 55000, 'suvs'),
	('Cheetah', 'cheetah', 375000, 'super'),
	('Chimera', 'chimera', 38000, 'motorcycles'),
	('Chino', 'chino', 15000, 'muscle'),
	('Chino Luxe', 'chino2', 19000, 'muscle'),
	('Cliffhanger', 'cliffhanger', 9500, 'motorcycles'),
	('Cognoscenti Cabrio', 'cogcabrio', 55000, 'coupes'),
	('Cognoscenti', 'cognoscenti', 55000, 'sedans'),
	('Comet', 'comet2', 65000, 'sports'),
	('Comet 5', 'comet5', 1145000, 'sports'),
	('Contender', 'contender', 70000, 'suvs'),
	('Coquette', 'coquette', 65000, 'sports'),
	('Coquette Classic', 'coquette2', 40000, 'sportsclassics'),
	('Coquette BlackFin', 'coquette3', 55000, 'muscle'),
	('Cruiser (velo)', 'cruiser', 510, 'motorcycles'),
	('Cyclone', 'cyclone', 1890000, 'super'),
	('Daemon', 'daemon', 11500, 'motorcycles'),
	('Daemon High', 'daemon2', 13500, 'motorcycles'),
	('Defiler', 'defiler', 9800, 'motorcycles'),
	('Deluxo', 'deluxo', 4721500, 'sportsclassics'),
	('Dominator', 'dominator', 35000, 'muscle'),
	('Double T', 'double', 28000, 'motorcycles'),
	('Dubsta', 'dubsta', 45000, 'suvs'),
	('Dubsta Luxuary', 'dubsta2', 60000, 'suvs'),
	('Bubsta 6x6', 'dubsta3', 120000, 'offroad'),
	('Dukes', 'dukes', 28000, 'muscle'),
	('Dune Buggy', 'dune', 8000, 'offroad'),
	('Elegy', 'elegy2', 38500, 'sports'),
	('Emperor', 'emperor', 8500, 'sedans'),
	('Enduro', 'enduro', 5500, 'motorcycles'),
	('Entity XF', 'entityxf', 425000, 'super'),
	('Esskey', 'esskey', 4200, 'motorcycles'),
	('Exemplar', 'exemplar', 32000, 'coupes'),
	('F620', 'f620', 40000, 'coupes'),
	('Faction', 'faction', 20000, 'muscle'),
	('Faction Rider', 'faction2', 30000, 'muscle'),
	('Faction XL', 'faction3', 40000, 'muscle'),
	('Faggio', 'faggio', 1900, 'motorcycles'),
	('Vespa', 'faggio2', 2800, 'motorcycles'),
	('Felon', 'felon', 42000, 'coupes'),
	('Felon GT', 'felon2', 55000, 'coupes'),
	('Feltzer', 'feltzer2', 55000, 'sports'),
	('Stirling GT', 'feltzer3', 65000, 'sportsclassics'),
	('Fixter (velo)', 'fixter', 225, 'motorcycles'),
	('FMJ', 'fmj', 185000, 'super'),
	('Fhantom', 'fq2', 17000, 'suvs'),
	('Fugitive', 'fugitive', 12000, 'sedans'),
	('Furore GT', 'furoregt', 45000, 'sports'),
	('Fusilade', 'fusilade', 40000, 'sports'),
	('Gargoyle', 'gargoyle', 16500, 'motorcycles'),
	('Gauntlet', 'gauntlet', 30000, 'muscle'),
	('Gang Burrito', 'gburrito', 45000, 'vans'),
	('Burrito', 'gburrito2', 29000, 'vans'),
	('Glendale', 'glendale', 6500, 'sedans'),
	('Grabger', 'granger', 50000, 'suvs'),
	('Gresley', 'gresley', 47500, 'suvs'),
	('GT 500', 'gt500', 785000, 'sportsclassics'),
	('Guardian', 'guardian', 45000, 'offroad'),
	('Hakuchou', 'hakuchou', 31000, 'motorcycles'),
	('Hakuchou Sport', 'hakuchou2', 55000, 'motorcycles'),
	('Hermes', 'hermes', 535000, 'muscle'),
	('Hexer', 'hexer', 12000, 'motorcycles'),
	('Hotknife', 'hotknife', 125000, 'muscle'),
	('Huntley S', 'huntley', 40000, 'suvs'),
	('Hustler', 'hustler', 625000, 'muscle'),
	('Infernus', 'infernus', 180000, 'super'),
	('Innovation', 'innovation', 23500, 'motorcycles'),
	('Intruder', 'intruder', 7500, 'sedans'),
	('Issi', 'issi2', 10000, 'compacts'),
	('Jackal', 'jackal', 38000, 'coupes'),
	('Jester', 'jester', 65000, 'sports'),
	('Jester(Racecar)', 'jester2', 135000, 'sports'),
	('Journey', 'journey', 6500, 'vans'),
	('Kamacho', 'kamacho', 345000, 'offroad'),
	('Khamelion', 'khamelion', 38000, 'sports'),
	('Kuruma', 'kuruma', 30000, 'sports'),
	('Landstalker', 'landstalker', 35000, 'suvs'),
	('RE-7B', 'le7b', 325000, 'super'),
	('Lynx', 'lynx', 40000, 'sports'),
	('Mamba', 'mamba', 70000, 'sports'),
	('Manana', 'manana', 12800, 'sportsclassics'),
	('Manchez', 'manchez', 5300, 'motorcycles'),
	('Massacro', 'massacro', 65000, 'sports'),
	('Massacro(Racecar)', 'massacro2', 130000, 'sports'),
	('Mesa', 'mesa', 16000, 'suvs'),
	('Mesa Trail', 'mesa3', 40000, 'suvs'),
	('Minivan', 'minivan', 13000, 'vans'),
	('Monroe', 'monroe', 55000, 'sportsclassics'),
	('The Liberator', 'monster', 210000, 'offroad'),
	('Moonbeam', 'moonbeam', 18000, 'vans'),
	('Moonbeam Rider', 'moonbeam2', 35000, 'vans'),
	('Nemesis', 'nemesis', 5800, 'motorcycles'),
	('Neon', 'neon', 1500000, 'sports'),
	('Nightblade', 'nightblade', 35000, 'motorcycles'),
	('Nightshade', 'nightshade', 65000, 'muscle'),
	('9F', 'ninef', 65000, 'sports'),
	('9F Cabrio', 'ninef2', 80000, 'sports'),
	('Omnis', 'omnis', 35000, 'sports'),
	('Oppressor', 'oppressor', 3524500, 'super'),
	('Oracle XS', 'oracle2', 35000, 'coupes'),
	('Osiris', 'osiris', 160000, 'super'),
	('Panto', 'panto', 10000, 'compacts'),
	('Paradise', 'paradise', 19000, 'vans'),
	('Pariah', 'pariah', 1420000, 'sports'),
	('Patriot', 'patriot', 55000, 'suvs'),
	('PCJ-600', 'pcj', 6200, 'motorcycles'),
	('Penumbra', 'penumbra', 28000, 'sports'),
	('Pfister', 'pfister811', 85000, 'super'),
	('Phoenix', 'phoenix', 12500, 'muscle'),
	('Picador', 'picador', 18000, 'muscle'),
	('Pigalle', 'pigalle', 20000, 'sportsclassics'),
	('Prairie', 'prairie', 12000, 'compacts'),
	('Premier', 'premier', 8000, 'sedans'),
	('Primo Custom', 'primo2', 14000, 'sedans'),
	('X80 Proto', 'prototipo', 2500000, 'super'),
	('Radius', 'radi', 29000, 'suvs'),
	('raiden', 'raiden', 1375000, 'sports'),
	('Rapid GT', 'rapidgt', 35000, 'sports'),
	('Rapid GT Convertible', 'rapidgt2', 45000, 'sports'),
	('Rapid GT3', 'rapidgt3', 885000, 'sportsclassics'),
	('Reaper', 'reaper', 150000, 'super'),
	('Rebel', 'rebel2', 35000, 'offroad'),
	('Regina', 'regina', 5000, 'sedans'),
	('Retinue', 'retinue', 615000, 'sportsclassics'),
	('Revolter', 'revolter', 1610000, 'sports'),
	('riata', 'riata', 380000, 'offroad'),
	('Rocoto', 'rocoto', 45000, 'suvs'),
	('Ruffian', 'ruffian', 6800, 'motorcycles'),
	('Ruiner 2', 'ruiner2', 5745600, 'muscle'),
	('Rumpo', 'rumpo', 15000, 'vans'),
	('Rumpo Trail', 'rumpo3', 19500, 'vans'),
	('Sabre Turbo', 'sabregt', 20000, 'muscle'),
	('Sabre GT', 'sabregt2', 25000, 'muscle'),
	('Sanchez', 'sanchez', 5300, 'motorcycles'),
	('Sanchez Sport', 'sanchez2', 5300, 'motorcycles'),
	('Sanctus', 'sanctus', 25000, 'motorcycles'),
	('Sandking', 'sandking', 55000, 'offroad'),
	('Savestra', 'savestra', 990000, 'sportsclassics'),
	('SC 1', 'sc1', 1603000, 'super'),
	('Schafter', 'schafter2', 25000, 'sedans'),
	('Schafter V12', 'schafter3', 50000, 'sports'),
	('Scorcher (velo)', 'scorcher', 280, 'motorcycles'),
	('Seminole', 'seminole', 25000, 'suvs'),
	('Sentinel', 'sentinel', 32000, 'coupes'),
	('Sentinel XS', 'sentinel2', 40000, 'coupes'),
	('Sentinel3', 'sentinel3', 650000, 'sports'),
	('Seven 70', 'seven70', 39500, 'sports'),
	('ETR1', 'sheava', 220000, 'super'),
	('Shotaro Concept', 'shotaro', 320000, 'motorcycles'),
	('Slam Van', 'slamvan3', 11500, 'muscle'),
	('Sovereign', 'sovereign', 22000, 'motorcycles'),
	('Stinger', 'stinger', 80000, 'sportsclassics'),
	('Stinger GT', 'stingergt', 75000, 'sportsclassics'),
	('Streiter', 'streiter', 500000, 'sports'),
	('Stretch', 'stretch', 90000, 'sedans'),
	('Stromberg', 'stromberg', 3185350, 'sports'),
	('Sultan', 'sultan', 15000, 'sports'),
	('Sultan RS', 'sultanrs', 65000, 'super'),
	('Super Diamond', 'superd', 130000, 'sedans'),
	('Surano', 'surano', 50000, 'sports'),
	('Surfer', 'surfer', 12000, 'vans'),
	('T20', 't20', 300000, 'super'),
	('Tailgater', 'tailgater', 30000, 'sedans'),
	('Tampa', 'tampa', 16000, 'muscle'),
	('Drift Tampa', 'tampa2', 80000, 'sports'),
	('Thrust', 'thrust', 24000, 'motorcycles'),
	('Tri bike (velo)', 'tribike3', 520, 'motorcycles'),
	('Trophy Truck', 'trophytruck', 60000, 'offroad'),
	('Trophy Truck Limited', 'trophytruck2', 80000, 'offroad'),
	('Tropos', 'tropos', 40000, 'sports'),
	('Turismo R', 'turismor', 350000, 'super'),
	('Tyrus', 'tyrus', 600000, 'super'),
	('Vacca', 'vacca', 120000, 'super'),
	('Vader', 'vader', 7200, 'motorcycles'),
	('Verlierer', 'verlierer2', 70000, 'sports'),
	('Vigero', 'vigero', 12500, 'muscle'),
	('Virgo', 'virgo', 14000, 'muscle'),
	('Viseris', 'viseris', 875000, 'sportsclassics'),
	('Visione', 'visione', 2250000, 'super'),
	('Voltic', 'voltic', 90000, 'super'),
	('Voltic 2', 'voltic2', 3830400, 'super'),
	('Voodoo', 'voodoo', 7200, 'muscle'),
	('Vortex', 'vortex', 9800, 'motorcycles'),
	('Warrener', 'warrener', 4000, 'sedans'),
	('Washington', 'washington', 9000, 'sedans'),
	('Windsor', 'windsor', 95000, 'coupes'),
	('Windsor Drop', 'windsor2', 125000, 'coupes'),
	('Woflsbane', 'wolfsbane', 9000, 'motorcycles'),
	('XLS', 'xls', 32000, 'suvs'),
	('Yosemite', 'yosemite', 485000, 'muscle'),
	('Youga', 'youga', 10800, 'vans'),
	('Youga Luxuary', 'youga2', 14500, 'vans'),
	('Z190', 'z190', 900000, 'sportsclassics'),
	('Zentorno', 'zentorno', 1500000, 'super'),
	('Zion', 'zion', 36000, 'coupes'),
	('Zion Cabrio', 'zion2', 45000, 'coupes'),
	('Zombie', 'zombiea', 9500, 'motorcycles'),
	('Zombie Luxuary', 'zombieb', 12000, 'motorcycles'),
	('Z-Type', 'ztype', 220000, 'sportsclassics');
/*!40000 ALTER TABLE `vehicles` ENABLE KEYS */;

-- Copiando estrutura para tabela db_nerolinuxius.warrants
CREATE TABLE IF NOT EXISTS `warrants` (
  `type` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identifier` int(11) NOT NULL AUTO_INCREMENT,
  `summary` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `completed` int(1) unsigned zerofill NOT NULL,
  `disadvantaged` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leo` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`identifier`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_nerolinuxius.warrants: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `warrants` DISABLE KEYS */;
INSERT INTO `warrants` (`type`, `identifier`, `summary`, `completed`, `disadvantaged`, `leo`, `details`, `comments`) VALUES
	('Mandado de Busca e Apreensão', 1, 'Foi visto traficando muita droga dentro de casa, dentro da TRAPHOUSE!!!', 0, '2', '', '', ''),
	('Prisão', 2, 'Foi visto traficando muita droga na grouve estrit.', 0, '5', NULL, NULL, NULL),
	('Prisão', 3, 'Honda Civic foi visto na Grove Street em atitude suspeita com um veículo de alto padrão.', 0, '8', 'Nero Lucius e Sargento Deiz Oito', 'O carro foi rastreado e concluiu-se que ele estava sendo usado por Honda Civic para transporte.', 'Tentar cumprir o mandado fora da região sul de LS.'),
	('Prisão', 10, 'Nero Lucius está louco ele quer se prender!', 0, '1', 'Nero Lucius', 'NÃO TEVE!', 'Alguém para esse homem!');
/*!40000 ALTER TABLE `warrants` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
